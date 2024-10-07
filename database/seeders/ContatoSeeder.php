<?php

namespace Database\Seeders;

use App\Models\Contato;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);
        $user2 = User::find(2);

        Contato::factory()->count(15)->for($user)->create();
        Contato::factory()->count(15)->for($user2)->create();
        Contato::factory()->count(10)->trashed()->create();
    }
}
