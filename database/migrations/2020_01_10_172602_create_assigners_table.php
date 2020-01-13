<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigners', function (Blueprint $table) {


            $table->date('date_debut');
            $table->date('date_fin');
            $table->bigInteger('id_tech');
            $table->bigInteger('id_ticket');


            $table->foreign('id_tech')
            ->references('id_tech')
            ->on('techniciens')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('id_ticket')
            ->references('id_ticket')
            ->on('tickets')
            ->onDelete('restrict')
            ->onUpdate('restrict');





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
        Schema::dropIfExists('assigners');
    }
}
