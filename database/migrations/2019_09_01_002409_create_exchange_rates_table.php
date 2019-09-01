<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeRatesTable extends Migration
{
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('currency_id');
            $table->float('rate')->default(1);
            $table->enum('type', ['local', 'foreign']);
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exchange_rates');
    }
}
