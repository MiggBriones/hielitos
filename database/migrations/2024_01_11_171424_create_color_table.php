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
        Schema::create('color', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 15);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de colores de congelador
        $data = [
            ['description'=>'Blanco', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Negro', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Azul', 'created_at' => '2023-10-30 22:01:46']
        ];

        DB::table('color')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color');
    }
};
