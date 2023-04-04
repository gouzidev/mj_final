<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UpdatePasswordsHashAlgorithm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Get all users
        $users = User::all();

        foreach ($users as $user) {
            // Check if the user's password is already hashed using the new algorithm
            if (!Hash::needsRehash($user->password)) {
                continue;
            }

            // Hash the user's password using the new algorithm
            $newHash = Hash::make($user->password);

            // Update the user's password in the database
            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => $newHash]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This migration cannot be reversed
    }
}
