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
        Schema::create('capacity', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('capacity');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de capacidad del congelador
        $data = [
            ['description'=>'20', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'40', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'60', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'80', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'100', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'120', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'200', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'250', 'created_at' => '2023-10-30 22:01:46']
        ];

        DB::table('capacity')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacity');
    }
};
