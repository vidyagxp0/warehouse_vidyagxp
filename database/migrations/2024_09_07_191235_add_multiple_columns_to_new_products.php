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
        Schema::table('new_products', function (Blueprint $table) {
            $table->longText('warehouse_id')->nullable();
            $table->longText('aisle_id')->nullable();
            $table->longText('rackid')->nullable();
            $table->longText('binid')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_products', function (Blueprint $table) {
            //
        });
    }
};
