<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bourses', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('participation')->nullable();
            $table->string('choixbourse')->nullable();
            $table->string('message')->nullable();
            $table->integer('id_user');
            $table->string('name');
            $table->string('statut')->default('En cours');
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
        Schema::dropIfExists('bourses');
    }
}
