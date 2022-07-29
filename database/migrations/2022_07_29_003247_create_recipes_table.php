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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('instructions')->nullable();
            $table->string('source')->nullable();
            $table->float('green', 2, 1)->nullable();
            $table->float('purple', 2, 1)->nullable();
            $table->float('red', 2, 1)->nullable();
            $table->float('yellow', 2, 1)->nullable();
            $table->float('blue', 2, 1)->nullable();
            $table->float('orange', 2, 1)->nullable();
            $table->float('gray', 2, 1)->nullable();
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
        Schema::dropIfExists('recipes');
    }
};
