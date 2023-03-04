<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->string('oname');
            $table->string('oaddress');
            $table->string('ocity');
            $table->string('ocountry');
            $table->integer('ocode');
            $table->integer('oitems');
            // foreign relationship with user id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('Users')->onDelete('cascade');


            // foreign relationship with product id
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
            ->references('id')->on('Products')->onDelete('cascade');
            
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
        Schema::dropIfExists('order_lists');
    }
}
