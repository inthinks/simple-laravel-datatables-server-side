<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_penulis')->nullable(false);
            $table->string('kode_buku')->nullable(false);
            $table->bigInteger('stok_buku')->nullable(false);
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
        Schema::dropIfExists('stok_buku');
    }
}
