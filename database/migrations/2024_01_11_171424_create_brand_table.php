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
        Schema::create('brand', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 15);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de marcas del congelador
        $data = [
            ['description'=>'Leer', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Gareli', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Friotech', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Friomat', 'created_at' => '2023-10-30 22:01:46']
        ];

        DB::table('brand')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand');
    }
};
