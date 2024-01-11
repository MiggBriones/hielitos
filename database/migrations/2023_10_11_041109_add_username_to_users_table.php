<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });


        // Insert user to test system
        DB::table('users')->insert(
            array(
                'name' => 'Miguel Briones',
                'email' => 'migg.briones@gmail.com',
                'password' => '$2y$10$Uo2F2Or.oFrQEX3A3sGlCOkm5ddmNZKgCEm0yMWuAGEfiyKlg./JK',
                'username'=> 'migbriones'
            )
        );
        

    }
};
