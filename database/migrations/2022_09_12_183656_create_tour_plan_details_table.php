<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_plan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_plan_id');
            $table->date('_date');
            $table->char('activity', 1)->default('V'); // V=visit, T=Travel, S=Stay
            $table->string('details');
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
        Schema::dropIfExists('tour_plan_details');
    }
};
