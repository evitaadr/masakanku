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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->string('name_galeri');
            $table->string('description_galeri');
<<<<<<< HEAD
            $table->string('image_galeri'); // tambahkan ini
=======
            $table->string('image_galeri', 255)->nullable();
>>>>>>> 84516d14e2b2367e4c6c79ce19b2b71b81f8f584
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
