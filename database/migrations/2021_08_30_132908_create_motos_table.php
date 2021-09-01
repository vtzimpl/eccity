<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('VIN')->nullable();
            $table->string('color')->nullable();
            $table->string('model')->nullable();
            $table->string('PO')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->boolean('sold')->nullable();
            $table->string('registration_nbr')->nullable();
            $table->string('inv_eccity_nbr')->nullable();
            $table->date('inv_eccity_date')->nullable();
            $table->string('inv_eccity_paid')->nullable();
            $table->string('inv_nipponia_nbr')->nullable();
            $table->date('inv_nipponia_date')->nullable();
            $table->boolean('invoiced')->nullable();
            $table->string('inv_nipponia_paid')->nullable();
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
        Schema::dropIfExists('motos');
    }
}




