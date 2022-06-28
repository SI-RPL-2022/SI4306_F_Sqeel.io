<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("judul");
            $table->string("thumbnail");
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->foreignId("kategori_id")->constrained()->onDelete('cascade');
            $table->longtext('deskripsi');
            $table->integer('enrollment')->default(0);
            $table->integer('click')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlists');
    }
};
