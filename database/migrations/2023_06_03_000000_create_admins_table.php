<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Admin\Enums\AdminEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(AdminEnum::DB_TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(AdminEnum::NAME);
            $table->string(AdminEnum::EMAIL)->unique();
            $table->string(AdminEnum::USER_NAME)->unique();
            $table->string(AdminEnum::PHONE_NO);
            $table->unsignedBigInteger(AdminEnum::ROLE_ID)->nullable();
            $table->boolean(AdminEnum::ADMIN_STATUS)->default(config('global.status.inactive'))->nullable();
            $table->string(AdminEnum::PASSWORD);
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists(AdminEnum::DB_TABLE);
    }
};
