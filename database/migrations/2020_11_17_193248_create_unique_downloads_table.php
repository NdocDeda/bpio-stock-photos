<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniqueDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unique_downloads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime("downloaded_at");
            $table->foreignId('payout_id')->nullable()->constrained();
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
        Schema::dropIfExists('unique_downloads');
    }
}
