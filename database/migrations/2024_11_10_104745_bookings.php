<?php

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Menghubungkan user_id ke tabel users
            $table->string('plat_no');
            $table->string('motor_brand');
            $table->string('motor_type'); // Mengubah menjadi string karena 'motor_type' bisa berupa teks
            $table->string('service_type');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->text('notes'); // Menggunakan 'text' untuk kolom catatan
            $table->enum('status', ['pending', 'confirmed', 'canceled']);
            $table->string('phone');
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
