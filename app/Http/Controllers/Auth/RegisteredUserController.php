<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $countries= City::all();
        return view('auth.register',compact('countries'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone'=>['required', 'string',  'max:11', 'unique:users'],
            'city_id'=>['required', 'string'],
            'username'=>['required','string','unique:users'],
            'gender'=>['required','string'],
            'role'=>['required','string'],
            'Privacy_policy'=>['required','string']
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'city_id'=>$request->city_id,
            'username'=>$request->username,
            'gender'=>$request->gender,
            'role'=>$request->role,
            'Privacy_policy'=>$request->Privacy_policy
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::USER);
    }
}
