<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pn')->nullable(); //product number
            $table->string('color')->nullable();
            $table->string('product_name')->nullable();
            $table->string('model')->nullable(); // which model(s) does it fit
            $table->string('PO')->nullable(); //PO that this was purchased
            $table->string('status')->nullable(); //no current use
            $table->boolean('tracking')->nullable();
            $table->string('trackingnumber')->nullable();
            $table->boolean('isbattery')->nullable();
            $table->boolean('sold')->nullable();
            $table->integer('qty')->nullable();
            $table->string('modified_by')->nullable();
            $table->date('modified_date')->nullable();
            $table->text('notes')->nullable();
            $table->text('field1')->nullable();
























        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sparts');
    }
}
