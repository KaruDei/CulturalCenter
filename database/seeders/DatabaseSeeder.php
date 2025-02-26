<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserRolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EventTypesSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(SeatsSeeder::class);
        $this->call(EventStatusSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(ActorRolesSeeder::class);
        $this->call(ActorsSeeder::class);
        $this->call(EventActorsSeeder::class);
        $this->call(ExhibitionsSeeder::class);
        $this->call(TicketStatusSeeder::class);
        $this->call(EventTicketsSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(EventOrdersSeeder::class);
    }
}
