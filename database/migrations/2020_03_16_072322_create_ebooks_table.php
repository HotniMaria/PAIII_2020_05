<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cbt_id');
	        $table->unsignedBigInteger('kabupaten_id');
            $table->string('judul');
            $table->string('foto');
            $table->string('sinopsis');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('nama_file');
            $table->timestamps();

            $table->foreign('cbt_id')->references('id')->on('cbts');
	        $table->foreign('kabupaten_id')->references('id')->on('kabupatens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebooks');
    }
}
