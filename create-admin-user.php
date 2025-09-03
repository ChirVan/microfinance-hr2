<?php

// Bootstrap the Laravel application
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Create the admin user
$user = User::create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => Hash::make('password'),
    'email_verified_at' => now(),
]);

if ($user) {
    echo "Admin user created successfully!\n";
    echo "Email: admin@example.com\n";
    echo "Password: password\n";
} else {
    echo "Failed to create admin user.\n";
}
