<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Penulis;
use App\Models\TokoBuku;
use App\Models\StokBuku;

class CreateInsertDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dataPenulis = [
            [
                'kode_penulis'=>'R01', 
                'penulis'=>'Ria SW',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'R02', 
                'penulis'=>'Ria Ricis',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'T01', 
                'penulis'=>'Tere Liye',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'S01', 
                'penulis'=>'Sara Wijayanto',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'B01', 
                'penulis'=>'Brian Khrisna',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'A01', 
                'penulis'=>'Andrea Hinata',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'K01', 
                'penulis'=>'Kevin Kwan',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'A02', 
                'penulis'=>'Alvi Rev',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],

        ];

        $dataTokoBuku = [
            [
                'kode_buku'=>'A01', 
                'jenis'=>'NOVEL',
                'buku'=>'Off The Record 3',
                'kode_penulis'=>'R01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A02', 
                'jenis'=>'NOVEL',
                'buku'=>'Bukan Buku Nikah',
                'kode_penulis'=>'R02',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A03', 
                'jenis'=>'NOVEL',
                'buku'=>'Pulan Pergi',
                'kode_penulis'=>'T01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A04', 
                'jenis'=>'NOVEL',
                'buku'=>'Wingit',
                'kode_penulis'=>'S01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A05', 
                'jenis'=>'NOVEL',
                'buku'=>'Selamat Tinggal',
                'kode_penulis'=>'T01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A06', 
                'jenis'=>'NOVEL',
                'buku'=>'Komet Minor',
                'kode_penulis'=>'T01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A07', 
                'jenis'=>'NOVEL',
                'buku'=>'This Is Why I Need You',
                'kode_penulis'=>'B01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A08', 
                'jenis'=>'NOVEL',
                'buku'=>'Orang-Orang Biasa',
                'kode_penulis'=>'A01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A09', 
                'jenis'=>'NOVEL',
                'buku'=>'Rich People Problem',
                'kode_penulis'=>'K01',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_buku'=>'A10', 
                'jenis'=>'NOVEL',
                'buku'=>'Senja dan Pagi',
                'kode_penulis'=>'A02',
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],


        ];

        $dataStokBuku = [
            [
                'kode_penulis'=>'R01',
                'kode_buku'=>'A01', 
                'stok_buku'=>80,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],
            [
                'kode_penulis'=>'R02',
                'kode_buku'=>'A02', 
                'stok_buku'=>90,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'T01',
                'kode_buku'=>'A03', 
                'stok_buku'=>95,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'S01',
                'kode_buku'=>'A04', 
                'stok_buku'=>85,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'T01',
                'kode_buku'=>'A05', 
                'stok_buku'=>100,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'T01',
                'kode_buku'=>'A06', 
                'stok_buku'=>80,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'B01',
                'kode_buku'=>'A07', 
                'stok_buku'=>150,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'A01',
                'kode_buku'=>'A08', 
                'stok_buku'=>90,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'K01',
                'kode_buku'=>'A09', 
                'stok_buku'=>100,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],[
                'kode_penulis'=>'A02',
                'kode_buku'=>'A10', 
                'stok_buku'=>150,
                'created_at'=> new \dateTime,
                'updated_at'=> new \dateTime,
            ],


        ];

        Penulis::insert($dataPenulis);
        TokoBuku::insert($dataTokoBuku);
        StokBuku::insert($dataStokBuku);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('insert_datas');
    }
}
