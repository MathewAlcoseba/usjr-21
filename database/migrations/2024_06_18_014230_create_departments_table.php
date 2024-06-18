<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
{
    Schema::create('departments', function (Blueprint $table) {
        $table->id('deptid');
        $table->string('deptfullname', 100);
        $table->string('deptshortname', 20)->nullable();
        $table->foreignId('deptcollid')->constrained('colleges', 'collid');
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
