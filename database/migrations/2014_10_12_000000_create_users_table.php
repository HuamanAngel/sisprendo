<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('use_name');
            $table->string('use_lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('use_nick');
            $table->string('password');
            $table->enum('use_type',['Empresario','Inversionista'])->nullable();
            $table->string('use_age')->nullable();
            $table->string('use_cellphone');
            $table->string('use_phone');
            $table->enum('use_gender',['Hombre','Mujer']);
            $table->string('use_address')->nullable();
            $table->string('use_birthday');
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
}
