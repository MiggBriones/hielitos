<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('username')->unique();
        });

    
        // Insertar usuario de prueba
        DB::table('users')->insert(
            array(
                'name' => 'Miguel Briones',
                'email' => 'migg.briones@gmail.com',
                'password' => '$2y$10$Uo2F2Or.oFrQEX3A3sGlCOkm5ddmNZKgCEm0yMWuAGEfiyKlg./JK',
                'username'=> 'migbriones'
            )
        );
        

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
