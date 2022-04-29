<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    private  $apiContext;
    private  $secret;
    private  $clientId;
public function __construct(){
    if (config('paypal.settings.mode') == 'live' ){
        $this->clientId= config('paypal.live.client_id');
        $this->secret = config('paypal.live.secret');

    }else{
        $this->clientId= config('paypal.sandbox.client_id');
        $this->secret = config('paypal.sandbox.secret');

    }
    $this->apiContext=new ApiContext(new OAuthTokenCredential($this->clientId,$this->secret));
    $this->apiContext->setConfig(config('paypal.settings'));

}

    public function pay(Request $request){

    $course_id=$request->course_id;
    $user=User::findorFail($request->user_id);
    $course= Courses::findorFail($request->course_id);

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");


        $item = new Item();
        $item->setName($course->name)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($course->courses_cost);

        $itemList = new ItemList();
        $itemList->setItems(array($item));


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($course->courses_cost);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription($course->courses_desc)
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('user.success',['user_id'=>$request->user_id , 'course_id'=> $request->course_id]))
            ->setCancelUrl(route('user.error'));

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PayPalConnectionException $e) {
die($e);
        }
        $payment_link= $payment->getApprovalLink();
        return redirect($payment_link);
    }
    public function success($user_id , $course_id){
        $user= User::findorFail($user_id);
        $user->course()->syncWithoutDetaching($course_id);
        $message='تم الاشتراك والدفع بنجاح يرجا الانتظار لكي يتم تفعيل الدورة من قبل الادمن';

        return redirect()->route('user.profile')->with('message', $message);
    }
    public function error(){
        return redirect()->back();
    }

}
