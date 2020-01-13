<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniciens', function (Blueprint $table) {
            $table->bigIncrements('id_tech');
            $table->string('nom_tech');
            $table->string('mail_tech')->unique();
            $table->timestamps();
            $table->bigInteger('id_serv');


            $table->foreign('id_serv')
            ->references('id_serv')
            ->on('services')
            ->onDelete('restrict')
            ->onUpdate('restrict');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techniciens');
    }
}
