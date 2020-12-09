<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subategories;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory()->create();
        \App\Models\Category::create([
            'name'=>'mobile',
            'slug'=>'mobile',
            'description'=> 'mobile category',
            'image'=>'files/laptop.png'
        ]);
        \App\Models\Subcategory::create([ 'name'=>'dell', 'category_id'=>1 ]);
        \App\Models\Subcategory::create([ 'name'=>'samsung', 'category_id'=>1 ]);
        \App\Models\Subcategory::create([ 'name'=>'lenovo', 'category_id'=>1 ]);
        \App\Models\Product::create([ 
            'name'=>'hp lappy',
            'image'=>'product/prod.png',
            'flip_image'=>'product/prod.png',
            'price'=>rand(700,1000),
            'description'=>'this is product description',
            'additional_info'=>'additional info',
            'category_id'=>rand(1,2),
            'subcategory_id'=>1

         ]);
        \App\Models\Product::create([ 
            'name'=>' lappy',
            'image'=>'product/prod.png',
            'flip_image'=>'product/prod.png',
            'price'=>rand(700,1000),
            'description'=>'this is product description',
            'additional_info'=>'additional info',
            'category_id'=>rand(1,2),
            'subcategory_id'=>1
         ]);
         \App\Models\User::create([
             'name'=>'admin',
             'email'=>'admin@gmail.com',
             'password'=>bcrypt('password'),
             'email_verified_at'=>NOW(),
             'address'=>'jdfbjh',
             'phone_number'=>'2726226262',
             'is_admin'=>1
         ]);
         \App\Models\User::create([
             'name'=>'user',
             'email'=>'user@user.com',
             'password'=>bcrypt('password'),
             'email_verified_at'=>NOW(),
             'address'=>'jdfbjh',
             'phone_number'=>'2726226262',
             'is_admin'=>0
         ]);

    }
}
