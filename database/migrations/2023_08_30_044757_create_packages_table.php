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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('destination_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->mediumText('body')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->string('faq')->nullable();
            $table->enum('status',['Publish','Draft']);
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('destination_id')->references('id')->on('tour_destinations')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
