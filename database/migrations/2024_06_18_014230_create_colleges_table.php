<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id('collid');
            $table->string('collfullname', 100);
            $table->string('collshortname', 20);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
