<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('id_penjual'); // Reference to sellers
            $table->unsignedBigInteger('id_pembeli'); // Reference to buyers
            $table->unsignedBigInteger('id_produk'); // Reference to products
            $table->text('review'); // Review text
            $table->unsignedTinyInteger('review_rating'); // Review rating (assuming a scale of 1-5 or 1-10)
            $table->text('review_response'); // Response to review
            $table->enum('status', ['waiting', 'replied'])->default('waiting'); // Review status
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
