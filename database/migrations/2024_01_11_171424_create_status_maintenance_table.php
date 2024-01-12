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
        Schema::create('status_maintenance', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('description', 25);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista estatus del mantenimiento
        $data = [
            ['id' => 1, 'description'=>'Preventivo', 'created_at' => '023-10-18 02:01:46'],
            ['id' => 2, 'description'=>'Correctivo', 'created_at' => '023-10-18 02:01:46'],
            ['id' => 3, 'description'=>'Taller', 'created_at' => '023-10-18 02:01:46']
        ];

        DB::table('status_maintenance')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_maintenance');
    }
};
