<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMxgMateriaxgradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mxg_materiaxgrado', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('mxg_id');
            $table->bigInteger('mxg_id_grd')->unsigned();
            $table->bigInteger('mxg_id_mat')->unsigned();
            $table->timestamps();

            $table->foreign('mxg_id_grd')->references('grd_id')->on('grd_grado')->onDelete("cascade");
            $table->foreign('mxg_id_mat')->references('mat_id')->on('mat_materia')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mxg_materiaxgrado');
    }
}
