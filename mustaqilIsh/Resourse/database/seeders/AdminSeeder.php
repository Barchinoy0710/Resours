<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // User modelini import qilishni unutmang

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::find(1); // Admin bo'ladigan foydalanuvchining ID sini kiriting
        if ($user) {
            $user->role = 'admin';
            $user->save();
        }
    }
}
