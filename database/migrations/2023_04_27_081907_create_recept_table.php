<?php

use App\Models\Recept;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recept', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategoria');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->date('dátum')->default(DB::raw('now()'));
            $table->timestamps();
        });
        Recept::create(['nev' => 'Palacsinta', 'kat_id' => 1, 'kep_eleresi_ut' => '/.jpg', 'leiras' => 'hortobagyi']);
        Recept::create(['nev' => 'Főzelék', 'kat_id' => 2, 'kep_eleresi_ut' => '/.jpg', 'leiras' => 'fozi']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recept');
    }
};
