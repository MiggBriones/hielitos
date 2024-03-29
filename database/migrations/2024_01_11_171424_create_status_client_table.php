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
        Schema::create('status_client', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 25);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de estatus
        $data = [
            ['description'=>'Activo', 'created_at' => '2023-10-18 02:01:46'],
            ['description'=>'Inactivo', 'created_at' => '2023-10-18 02:01:46'],
            ['description'=>'Suspendido', 'created_at' => '2023-10-18 02:01:46']
        ];

        DB::table('status_client')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_client');
    }
};
