<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->increments('id');
            $table->decimal('price');
            // Burdaki status teslim edildi/teslim bekliyor
            // 0-> teslim bekliyor
            // 1-> teslim edildi
            $table->smallInteger('status')->default(0);
            $table->integer('user_id')->nullalbe()->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->text('answer');
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
        Schema::dropIfExists('orders');
    }
}
