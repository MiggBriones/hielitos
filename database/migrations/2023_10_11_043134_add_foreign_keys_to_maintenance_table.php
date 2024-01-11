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
        Schema::table('maintenance', function (Blueprint $table) {
            $table->foreign(['id_products'], 'fk_maintenance_products1')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_status_maintenance'], 'fk_maintenance_status_maintenance1')->references(['id'])->on('status_maintenance')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maintenance', function (Blueprint $table) {
            $table->dropForeign('fk_maintenance_products1');
            $table->dropForeign('fk_maintenance_status_maintenance1');
        });
    }
};
