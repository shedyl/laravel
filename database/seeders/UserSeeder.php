<?php

declare(strict_types=1);
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

/**
 * Class UserSeeder
 */
class UserSeeder extends DatabaseSeeder
{
    /**
     * @return void
     * @throws
     */
    public function run(): void
    {
        $this->seedAdmin();
    }

    /**
     * Seed Admin
     */
    private function seedAdmin(): void
    {
        $email = 'admin@example.com';

        /** @var \Illuminate\Database\Eloquent\Builder $user */
        $user = User::query()->where('email', '=', $email);

        if ($user->exists()) {
            return;
        }

        User::create([
            'name' => 'Admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'email' => $email,
        ]);
    }
}
