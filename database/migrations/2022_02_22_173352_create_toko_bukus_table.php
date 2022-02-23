<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_buku')->nullable(false);
            $table->string('jenis')->nullable(false);
            $table->string('buku')->nullable(false);
            $table->string('kode_penulis')->nullable(false);
            $table->foreign('kode_penulis')->references('kode_penulis')->on('penulis');
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
        Schema::table('toko_buku', function (Blueprint $table) {
            // $table->dropIndex(['kode_penulis']);
            $table->dropForeign(['kode_penulis']);
            $table->dropColumn('kode_penulis');
            $table->drop('toko_bukus');
        });
    }
}
