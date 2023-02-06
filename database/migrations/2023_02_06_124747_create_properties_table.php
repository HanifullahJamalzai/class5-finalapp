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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('agent_id');
            $table->string('title');
            $table->string('photo');
            $table->float('beswa');
            $table->string('address')->nullable();
            $table->float('price');
            $table->text('description');
            $table->string('type'); //(home, house, block, sarai, zamen)
            $table->string('category'); //(sale, sell, rent, mortgage)
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
        Schema::dropIfExists('properties');
    }
};
