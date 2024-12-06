<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class MakeAdmin extends Command
{
    protected $signature = 'make:admin {user_id}';
    protected $description = 'Make a user an admin by user ID';

    public function handle()
    {
        $userId = $this->argument('user_id');
        $user = User::find($userId);

        if ($user) {
            $user->role = 'admin';
            $user->save();
            $this->info("User with ID {$userId} has been made an admin.");
        } else {
            $this->error("User with ID {$userId} not found.");
        }

        return 0;
    }
}
