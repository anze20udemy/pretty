<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us',  function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime');
            $table->string('email');
            $table->string('termin');
            $table->text('sporocilo');
            $table->integer('status')->default(1);
            $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
