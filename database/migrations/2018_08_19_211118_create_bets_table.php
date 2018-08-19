<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amountInCents')->default(0);
            $table->unsignedSmallInteger('number')->nullable()->default(null);
            $table->unsignedSmallInteger('row')->nullable()->default(null);
            $table->unsignedSmallInteger('column')->nullable()->default(null);
            $table->unsignedSmallInteger('edgeRow')->nullable()->default(null);
            $table->unsignedSmallInteger('edgeColumn')->nullable()->default(null);
            $table->boolean('red')->default(false);
            $table->boolean('black')->default(false);
            $table->boolean('even')->default(false);
            $table->boolean('odd')->default(false);
            $table->boolean('1to18')->default(false);
            $table->boolean('19to36')->default(false);
            $table->boolean('1st12')->default(false);
            $table->boolean('2nd12')->default(false);
            $table->boolean('3rd12')->default(false);
            $table->boolean('1stColumn')->default(false);
            $table->boolean('2ndColumn')->default(false);
            $table->boolean('3rdColumn')->default(false);
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
        Schema::dropIfExists('bets');
    }
}
