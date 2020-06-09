<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kasus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jml_positif', 20);
            $table->string('jml_negatif',20);
            $table->string('jml_sembuh',20);
            $table->string('jml_meninggal',20);
            $table->date('tanggal');
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
        Schema::dropIfExists('t_kasus');
    }
}
