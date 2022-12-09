<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Utilisateur, Message , Sujet, Forum};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    Utilisateur::factory (100)->create ();

    Message::factory (100)->create ();
        Sujet::factory (100)->create ();
        Forum::factory (100)->create ();
    }
}
