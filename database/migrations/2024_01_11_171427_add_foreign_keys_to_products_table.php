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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['id_brand'], 'fk_products_brand1')->references(['id'])->on('brand')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_capacity'], 'fk_products_capacity1')->references(['id'])->on('capacity')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_color'], 'fk_products_color1')->references(['id'])->on('color')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_engine_size'], 'fk_products_engine_size1')->references(['id'])->on('engine_size')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_gas_type'], 'fk_products_gas_type1')->references(['id'])->on('gas_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_products_brand1');
            $table->dropForeign('fk_products_capacity1');
            $table->dropForeign('fk_products_color1');
            $table->dropForeign('fk_products_engine_size1');
            $table->dropForeign('fk_products_gas_type1');
        });
    }
};
