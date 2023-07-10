<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();        
            $table->foreignId('branch_id')->nullable()
                ->constrained('id')
                ->on('branches')
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->index()->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->longText('about')->nullable();
            $table->boolean('status')->default(1)->comment('0=>inactive,1=active');       
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
