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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('address');
            $table->string('email');
            $table->string('Working_day_from');
            $table->time('Working_hours_from');
            $table->string('Working_day_to');
            $table->time('Working_hours_to');
            $table->string('facebook');
            $table->string('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};




// INSERT INTO `settings` (`id`, `name`, `mobile`, `address`, `email`, `Working_day_from`, `Working_hours_from`, `Working_day_to`, `Working_hours_to`, `facebook`, `linkedin`, `created_at`, `updated_at`) VALUES (NULL, 'عيادات الشروق', '01228759920', 'برج الشروق اول فيصل بجوار اولاد رجب', 'info@sherouk.com', 'السبت', '09:00:00', 'الجمعه', '22:00:00', 'sherouk@facebook.com', 'sherouk@linkedin.com', NULL, NULL);