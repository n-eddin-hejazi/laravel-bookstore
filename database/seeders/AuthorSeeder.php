<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create(['name' => 'Fatima Fatima']);
        Author::create(['name' => 'Mohammad Mohammad']);
        Author::create(['name' => 'Omer Omer']);
        Author::create(['name' => 'Majed Majed']);
        Author::create(['name' => 'Fozi Fozi']);
        Author::create(['name' => 'Zaid Zaid']);
    }
}
