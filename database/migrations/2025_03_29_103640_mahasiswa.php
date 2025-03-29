<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function(Blueprint $table){
            $table->id();
            $table->string('name')->nullable;
            $table->string('nim');
            $table->string('prodi');
            // $table->timestamps();
            $table->timestamp('created_at')-> default(DB::raw('current_timestamp')); 
            $table->timestamp('updated_at')-> default(DB::raw('current_timestamp'))->useCurrentOnUpdate(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
