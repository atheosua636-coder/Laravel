<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable();
        });

        $legacyUsers = DB::table('users')->get();

        foreach ($legacyUsers as $user) {
            DB::table('pos_staff')->updateOrInsert(
                ['username' => $user->username],
                [
                    'full_name' => $user->full_name,
                    'created_at' => $user->created_at,
                    'updated_at' => $user->updated_at,
                ],
            );
        }

        DB::table('users')->delete();
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
