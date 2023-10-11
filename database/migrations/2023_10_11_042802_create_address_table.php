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
        Schema::create('address', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('street', 1155);
            $table->string('number', 10);
            $table->string('zip_code', 5);
            $table->string('longitude', 15)->nullable();
            $table->string('latitude', 15)->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_At')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
};
