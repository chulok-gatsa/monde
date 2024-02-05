<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        if(Schema::create('user_tbl',function(Blueprint $table){
            $table->increments('id');
            $table->string('role')->default(1);
            $table->string('name',255)->nullable(false);
            $table->string('surname',255)->nullable(false);
            $table->string('patronymic',255)->nullable(true);
            $table->string('login',255)->nullable(false)->unique('login');
            $table->string('email',255)->nullable(false)->unique('email');
            $table->string('password',255)->nullable(false);
            $table->string('remember_token',100)->nullable(true);
            $table->timestamps();
      }
    ));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
