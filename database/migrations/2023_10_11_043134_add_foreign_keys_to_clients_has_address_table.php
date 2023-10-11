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
        Schema::table('clients_has_address', function (Blueprint $table) {
            $table->foreign(['id_address'], 'fk_clients_has_address_address1')->references(['id'])->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_client'], 'fk_clients_has_address_clients1')->references(['id'])->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients_has_address', function (Blueprint $table) {
            $table->dropForeign('fk_clients_has_address_address1');
            $table->dropForeign('fk_clients_has_address_clients1');
        });
    }
};
