<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nosurat');
            $table->date('tanggalsurat');
            $table->text('perihal');
            $table->string('sifat');
            $table->string('nosuratmasuk');
          
            $table->text('isi');
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
        Schema::dropIfExists('employee1s');
    }
}
