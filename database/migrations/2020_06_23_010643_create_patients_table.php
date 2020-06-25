<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->text('identification');
            $table->text('name');
            $table->text('phone');
            $table->boolean('status');
            $table->date('test_date');
            $table->date('isolation_end');
            $table->boolean('band');
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('observer_id');
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
            $table->foreign('observer_id')->references('id')->on('observers')->onDelete('cascade');
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
        Schema::dropIfExists('patients');
    }
}
