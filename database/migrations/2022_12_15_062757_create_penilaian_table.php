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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penilai_id')->constrained('penilai');
            $table->string('periode');
            $table->integer('skor1');
            $table->string('catatan1');
            $table->integer('skor2');
            $table->string('catatan2');
            $table->integer('skor3');
            $table->string('catatan3');
            $table->integer('skor4');
            $table->string('catatan4');
            $table->integer('skor5');
            $table->string('catatan5');
            $table->integer('skor6');
            $table->string('catatan6');
            $table->integer('skor7');
            $table->string('catatan7');
            $table->integer('skor8');
            $table->string('catatan8');
            $table->softDeletes();
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
        Schema::dropIfExists('penilaian');
    }
};
