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
        Schema::create('production_plannings', function (Blueprint $table) {
            $table->id();
            $table->longText('production_order_id')->nullable();
            $table->longText('product_name')->nullable();
            $table->longText('generic_name')->nullable();
            $table->longText('product_code')->nullable();
            $table->longText('batch_no')->nullable();
            $table->longText('production_quantity')->nullable();
            $table->date('production_date')->nullable();
            $table->date('expected_com_date')->nullable();
            $table->longText('vendor_status')->nullable();
            $table->long2ip('production_line')->nullable();
            $table->longText('production_suite')->nullable();
            $table->longText('raw_materials_list')->nullable();
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
        Schema::dropIfExists('production_plannings');
    }
};
