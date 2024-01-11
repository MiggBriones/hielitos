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
        Schema::create('maintenance', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('observation', 1500)->nullable();
            $table->string('image')->nullable();
            $table->integer('id_products')->index('fk_maintenance_products1_idx');
            $table->integer('id_status_maintenance')->index('fk_maintenance_status_maintenance1_idx');
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
        Schema::dropIfExists('maintenance');
    }
};
