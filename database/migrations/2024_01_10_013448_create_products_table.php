<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('serial_number', 20);
            $table->string('description', 155);
            $table->integer('doors_num');
            $table->string('door_type', 15);
            $table->integer('id_client')->nullable()->index('fk_products_clients1_idx');
            $table->integer('id_brand')->index('fk_products_brand1_idx');
            $table->integer('id_capacity')->index('fk_products_capacity1_idx');
            $table->integer('id_color')->index('fk_products_color1_idx');
            $table->integer('id_engine_size')->index('fk_products_engine_size1_idx');
            $table->integer('id_gas_type')->index('fk_products_gas_type1_idx');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
