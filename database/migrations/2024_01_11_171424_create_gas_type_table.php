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
        Schema::create('gas_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 15);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar lista de combustible de congelador
        $data = [
            ['description'=>'Freon 134', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Freon 410', 'created_at' => '2023-10-30 22:01:46'],
            ['description'=>'Freon R22', 'created_at' => '2023-10-30 22:01:46']
        ];

        DB::table('gas_type')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gas_type');
    }
};
