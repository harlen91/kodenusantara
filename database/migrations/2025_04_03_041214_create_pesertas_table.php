<?php

use App\Models\Workshop;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Workshop::class)->constrained()->onDelete('cascade');
            $table->string('kode')->nullable();
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('email')->nullable();
            $table->string('ponsel')->nullable();
            $table->string('rekening')->nullable();
            $table->string('bank')->nullable();
            $table->string('nominal')->nullable();
            $table->string('resi')->nullable();
            $table->enum('status', ['wait', 'terima', 'tolak'])->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
