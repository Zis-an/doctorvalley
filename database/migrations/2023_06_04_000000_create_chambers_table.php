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
        Schema::create('chambers', function (Blueprint $table) {
            $table->id();
            $table->string('chamber_name');
            $table->string('reg_no');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('phone_no');
            $table->string('chamber_type')->default(config('global.chamber_types.chamber'));
            $table->timestamp('email_verified_at')->nullable();
            $table->string('status')->default(config('global.status.inactive'))->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambers');
    }
};
