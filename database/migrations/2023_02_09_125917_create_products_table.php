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
            $table->string('slug');
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->decimal('price', 10,2)->nullable();
            $table->decimal('sale_price', 10,2)->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->enum('stock_status', ['Available', 'Out']);
            $table->boolean('featured')->default(false);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->integer('category_id')->unsigned()->index()->nullable();
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
