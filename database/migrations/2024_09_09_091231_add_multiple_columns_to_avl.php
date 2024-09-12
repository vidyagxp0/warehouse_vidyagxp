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
        Schema::table('avl', function (Blueprint $table) {
            $table->longText('material')->nullable();
            $table->longText('catefory')->nullable();
            $table->longText('expiry_date')->nullable();
            $table->longText('quantity')->nullable();
            $table->longText('status')->nullable();
            $table->longText('uom')->nullable();
            $table->longText('vendor')->nullable();
            $table->longText('vendor_site')->nullable();
            $table->longText('manufacturer')->nullable();
            $table->longText('manufacturer_site')->nullable();
            $table->longText('vendor_status')->nullable();
            $table->longText('last_audit_date')->nullable();
            $table->longText('quality_issues_reported')->nullable();
            $table->longText('supporting_documents')->nullable();
            $table->longText('deviation_id')->nullable();
            $table->longText('attachment')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avl', function (Blueprint $table) {
            //
        });
    }
};
