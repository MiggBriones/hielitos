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
        Schema::create('engine_size', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('size', 25);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de tamanio de motor de congelador
        $data = [
            ['size'=>'1/6', 'created_at' => '2023-10-30 22:01:46'],
            ['size'=>'1/4', 'created_at' => '2023-10-30 22:01:46'],
            ['size'=>'1/2', 'created_at' => '2023-10-30 22:01:46'],
            ['size'=>'3/4', 'created_at' => '2023-10-30 22:01:46'],
            ['size'=>'1 HP', 'created_at' => '2023-10-30 22:01:46']
        ];

        DB::table('engine_size')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engine_size');
    }
};
