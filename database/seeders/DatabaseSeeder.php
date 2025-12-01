<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;

use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categoryExploitation = Category::where('name','Exploitation Frameworks')->first();
        $categoryOsint = Category::where('name','OSINT')->first();


    
        $productsTemplate = [
            [
                'name' => 'auto pentester',
                'version' => '1.0',
                'category_id' => $categoryExploitation->id,
                'description' => 'Example description',
                'installation_steps' => 'Step 1: ... Step 2: ...',
                'tool_document' => 'documents/example.pdf',
                'picture' => 'products/example.png',
                'status' => 'pending'
            ],
            [
                'name' => 'pentest report maker',
                'version' => '1.2',
                'category_id' => $categoryExploitation->id,
                'description' => 'Example description',
                'installation_steps' => 'Step 1: ... Step 2: ...',
                'tool_document' => 'documents/reportmaker.pdf',
                'picture' => 'products/reportmakerpicture.png',
                'status' => 'approved'
            ],
            [
                'name' => 'pentest gacor',
                'version' => '5.0',
                'category_id' => $categoryExploitation->id,
                'description' => 'Example description',
                'installation_steps' => 'Step 1: ... Step 2: ...',
                'tool_document' => 'documents/pentestgacor.pdf',
                'picture' => 'products/pentestgacor.png',
                'status' => 'pending'
            ],
            [
                'name' => 'autolokasi',
                'version' => '3.0',
                'category_id' => $categoryOsint->id,
                'description' => 'Example description',
                'installation_steps' => 'Step 1: ... Step 2: ...',
                'tool_document' => 'documents/autolokasi.pdf',
                'picture' => 'products/autolokasi.png',
                'status' => 'approved'
            ],
            [
                'name' => 'osint recap',
                'version' => '3.0',
                'category_id' => $categoryOsint->id,
                'description' => 'Example description',
                'installation_steps' => 'Step 1: ... Step 2: ...',
                'tool_document' => 'documents/osintrecap.pdf',
                'picture' => 'products/osintrecap.png',
                'status' => 'pending'
            ]
        ];

        $users = User::factory(5)->create();
        foreach (collect($productsTemplate)->random(3) as $data) {
            Product::create(array_merge($data, [
                    'user_id' => $users->random()->id
                ]));
        }


    
    
    }
}
