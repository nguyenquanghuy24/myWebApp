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
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');              // Tên sách
        $table->string('author');             // Tác giả
        $table->string('isbn')->unique();     // Mã ISBN
        $table->string('publisher')->nullable(); // Nhà xuất bản
        $table->integer('year_published')->nullable(); // Năm xuất bản
        $table->string('category')->nullable(); // Thể loại
        $table->enum('status', ['Còn', 'Đang mượn', 'Hỏng'])->default('Còn'); // Tình trạng
        $table->integer('quantity')->default(1); // Số lượng
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
