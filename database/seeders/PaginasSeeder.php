<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'Marco García';
        $user->email = 'marco-garcia@hotmail.com';
        $user->password = bcrypt('12344568');
        $user->save();
}
    }

