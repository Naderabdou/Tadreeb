<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->integer('phone');
            $table->foreignId('city_id')->constrained('cities');
            $table->enum('gender',['male','female']);
            $table->enum('role',['instructor','Student','both']);
            $table->string('qualification')->nullable();
            $table->string('Specialization')->nullable();
            $table->string('Employment')->nullable();
            $table->string('Privacy_policy');
            $table->string('img')->nullable();
            $table->enum('status',['active','unactive']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
