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
        // $table->longtext('warehouse_id')->nullable();
        // $table->longtext('rack_id')->nullable();
        // $table->longtext('bin_id')->nullable();
        // $table->longtext('warehouse_id_2')->nullable();
        


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
            
            $table->longtext('warehouse_id')->nullable();
            $table->longtext('aisle_id')->nullable();
            $table->longtext('rack_id')->nullable();
            $table->longtext('bin_id')->nullable();
            
        });
    }
};
