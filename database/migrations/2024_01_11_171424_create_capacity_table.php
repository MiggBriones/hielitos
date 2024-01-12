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
            ['capacity'=>'20', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'40', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'60', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'80', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'100', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'120', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'200', 'created_at' => '2023-10-30 22:01:46'],
            ['capacity'=>'250', 'created_at' => '2023-10-30 22:01:46']
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
