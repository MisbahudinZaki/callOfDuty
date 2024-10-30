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
        Schema::create('tforce141s', function (Blueprint $table) {
            $table->id();
            $table->string('taskforce_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('initial');
            $table->string('gender');
            $table->string('rank');
            $table->string('role');
            $table->string('status');
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
        Schema::dropIfExists('tforce141s');
    }
};
