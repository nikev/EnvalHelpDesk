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
            $table->text('description');
            $table->timestamps();
          //  $table->bigInteger('id_empl');
            $table->bigInteger('id_user');

           /* $table->foreign('id_empl')
            ->references('id_empl')
            ->on('employes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            */
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
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
