<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Featured;
use App\Models\Post;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Featured::factory(5)->create([
            'thumbnail' => 'feature_prod_01.jpg',
        ]);

        Products::factory(30)->create([
            'thumbnail' => 'shop_08.jpg',
        ]);

        AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@zay-shop.ru',
            'password' => bcrypt('admin'),
        ]);

         Post::factory(10)->create();
    }
}
