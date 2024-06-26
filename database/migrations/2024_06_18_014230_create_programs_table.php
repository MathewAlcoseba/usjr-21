<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id('progid');
            $table->string('progfullname', 100);
            $table->string('progshortname', 20)->nullable();
            $table->foreignId('progcollid')->constrained('colleges', 'collid');
            $table->foreignId('progcolldeptid')->constrained('departments', 'deptid');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
