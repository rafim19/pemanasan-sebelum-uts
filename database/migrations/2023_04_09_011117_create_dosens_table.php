<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TrDosen', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->text('bio');
            $table->string('email')->unique();
            $table->foreignId('major_id')->constrained('TrMajors')->onUpdate('cascade');
            $table->foreignId('ortu_id')->constrained('MsOrtu')->onUpdate('cascade');
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
        Schema::dropIfExists('dosens');
    }
}
