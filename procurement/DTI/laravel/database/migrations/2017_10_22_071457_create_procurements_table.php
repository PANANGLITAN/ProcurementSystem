<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->date('prno');
            $table->string('particulars');
            $table->date('daterequiredneeded');
            $table->integer('total');
            $table->text('requestingdivision');
            $table->date('noticetoproceed');
            $table->date('deliverycompletion');
            $table->date('acceptanceturnover');
            $table->integer('cino');
            $table->date('accounting');
            $table->date('cashier');
            $table->integer('numberofdayspodelivery');
            $table->integer('numberofdaysdeliverycashier');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procurement');
    }
}
