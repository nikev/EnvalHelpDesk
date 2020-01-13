<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id_empl');
            $table->string('nom_empl');
            $table->string('mail_empl')->unique();
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
        Schema::dropIfExists('employes');
    }
}
