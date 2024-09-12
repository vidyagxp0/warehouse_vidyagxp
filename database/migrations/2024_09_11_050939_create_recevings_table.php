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
        Schema::create('recevings', function (Blueprint $table) {
            $table->id();
            $table->longText('receiving_order_id')->nullable();
            $table->longText('supplier_name')->nullable();
            $table->longText('product_code')->nullable();
            $table->longText('batch_number')->nullable();
            $table->longText('quantity_received')->nullable();
            $table->longText('uom')->nullable(); // Unit of Measure
            $table->date('manufacturing_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->longText('storage_location')->nullable();
            $table->longText('location_id')->nullable();
            $table->longText('rack_id')->nullable();
            $table->longText('quality_check_status')->nullable();
            $table->longText('attachment')->nullable();
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
        Schema::dropIfExists('recevings');
    }
};
