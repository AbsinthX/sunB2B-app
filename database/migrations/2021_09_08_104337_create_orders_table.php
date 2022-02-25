<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('owner',500);
            $table->string('status', 50);
            $table->string('comments', 500)->nullable();
            $table->string('payment',100);
            $table->decimal('value');
            $table->string('delivery_address', 500);
            $table->foreignId('user_id')
                ->constrained()
                ->nullable()
                ->onUpdate('cascade')
                ->onDelete('cascade');;
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
