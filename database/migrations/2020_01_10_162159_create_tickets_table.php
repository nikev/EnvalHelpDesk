<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id_ticket');
            $table->string('cat_incident');
            $table->string('niveau_sev');
            $table->string('description');
            $table->timestamps();
            $table->bigInteger('id_empl');


            $table->foreign('id_empl')
            ->references('id_empl')
            ->on('employes')
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
        Schema::dropIfExists('tickets');
    }
}
