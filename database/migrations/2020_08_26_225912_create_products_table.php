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
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->decimal('current_price', 12, 2)->default(0);
            $table->decimal('previous_price', 12, 2)->default(0);
            $table->unsignedInteger('discount')->default(0);
            $table->text('short_description');
            $table->text('description');
            $table->text('specifications');
            $table->text('extra_info');
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('sales')->default(0);
            $table->string('status');
            $table->char('active', 1);
            $table->char('main_slider', 1);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('set null');

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
