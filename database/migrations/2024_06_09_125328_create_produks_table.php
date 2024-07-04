<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_penjual');
            $table->unsignedBigInteger('id_ulasan');
            $table->string('nama_produk');
            $table->decimal('harga_produk', 8, 2);
            $table->text('desc_produk');
            $table->string('gambar_produk_1');
            $table->string('gambar_produk_2')->nullable();
            $table->string('gambar_produk_3')->nullable();
            $table->integer('stok_produk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
}

