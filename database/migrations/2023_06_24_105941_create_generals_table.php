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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('home_tittle');
            $table->string('home_des');
            $table->string('msg_title');
            $table->string('msg_author');
            $table->text('msg_desc');
            $table->string('gallery_des');
            $table->string('news_des');
            $table->string('client_des');
            $table->string('member_des');
            $table->string('about_des');
            $table->string('service_des');

            $table->string('logo')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->text('map');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instragam');
            $table->boolean('status')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
