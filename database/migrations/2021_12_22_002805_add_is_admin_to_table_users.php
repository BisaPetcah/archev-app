<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsAdminToTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->after('password');
            $table->string('username')->nullable()->after('name');
            $table->boolean('is_auth_google')->default(false)->after('is_admin');
            $table->string('avatar_google')->nullable()->after('is_auth_google');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_admin', 'username', 'is_auth_google', 'avatar_google']);
        });
    }
}
