<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->text('picture')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->text('details')->nullable();
            $table->text('video')->nullable();
            $table->double('costprice',10,2)->default(0);
            $table->double('saleprice',10,2)->default(0);
            $table->unsignedBigInteger('product_category_id')->default(1);
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->char('stock',4)->default(0);
            $table->char('waruntee',1)->default(1);
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
        Schema::dropIfExists('products');
    }
}
