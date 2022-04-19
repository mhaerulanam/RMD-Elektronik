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
        Schema::create('rekam_mediks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->length(50);
            $table->string('dpjp')->length(20);
            $table->text('hasil_pemerikasaan');
            $table->string('kode_diagnosa')->nullable()->length(100);
            $table->string('diagnosa')->length(250);
            $table->string('kode_tindakan')->nullable()->length(100);
            $table->string('tindakan')->length(250);
            $table->string('kode_pengobatan')->nullable()->length(100);
            $table->string('pengobatan')->length(250);
            $table->text('keterangan');
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
        Schema::dropIfExists('rekam_mediks');
    }
};
