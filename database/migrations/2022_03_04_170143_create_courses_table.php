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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prerequisite')->nullable();
            $table->string('img')->nullable();
            $table->string('video')->nullable();
            $table->string('video_link')->nullable();
            $table->text('courses_desc')->nullable();
            $table->json('gender_student');
            $table->enum('courses_type',['free','paid']);
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('courses_cost')->nullable();
            $table->string('Certificate_name')->nullable();
            $table->string('Donor')->nullable();
            $table->enum('Certification_type',['free','paid'])->nullable();
            $table->decimal('Certification_cost')->nullable();
            $table->foreignId('instructor_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status',['active','unactive']);
            $table->foreignId('Scope_id')->constrained('scopes_admins')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('courses');
    }
};
