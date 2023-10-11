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
        Schema::create('clients_has_address', function (Blueprint $table) {
            $table->integer('id_client')->index('fk_clients_has_address_clients1_idx');
            $table->integer('id_address')->index('fk_clients_has_address_address1_idx');
            $table->timestamp('created_at');

            $table->primary(['id_client', 'id_address']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_has_address');
    }
};
