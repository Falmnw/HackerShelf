<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
            {
            DB::table('categories')->insert([
            ['name' => 'Network Scanning'],
            ['name' => 'Vulnerability Scanning'],
            ['name' => 'Exploitation Frameworks'],
            ['name' => 'OSINT'],
            ['name' => 'SIEM'],
            ['name' => 'Cryptography Tools'],
            ['name' => 'Digital Forensics'],
            ['name' => 'Other'],
        ]);
    }
}
