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
        Schema::create('storages', function (Blueprint $table) {
            $table->id();           
            $table->longText('warehouse_id')->nullable();
            $table->longText('location_id')->nullable();
            $table->longText('rack_id')->nullable();
            $table->longText('bin_id')->nullable();
            // $table->longText('product_name')->nullable();
            $table->longText('product_code')->nullable();
            $table->longText('batch_no')->nullable();
            // $table->date('mfg_date')->nullable(); // Manufacturing Date
            $table->longText('quantity_stock')->nullable(); // Manufacturing Date
            $table->longText('storage_location')->nullable();
            $table->longText('temperature_requirement')->nullable();
            $table->date('expiry_date')->nullable();
            $table->longText('handling_instructions')->nullable();
            $table->longText('file_attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storages');
    }
};
