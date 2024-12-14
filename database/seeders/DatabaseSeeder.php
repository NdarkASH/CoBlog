<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name"=> "darknash",
            "username"=> "si hitam",
            "email"=> "darknash@gmail.com",
            "password"=> bcrypt("darknash"),
        ]);
        // User::create([
        //     "name"=> "ulwan",
        //     "email"=> "ulwan@gmail.com",
        //     "password"=> bcrypt("ulwan"),
        // ]);

        User::factory()->count(10)->create();
        Post::factory()->count(20)->create();
         Category::create([
             'name' => 'kelompok',
             'slug' => 'kelompok',
         ]);
         Category::create([
             'name' => 'individu',
             'slug' => 'individu',
         ]);
         Category::create([
            'name' => 'hitam',
            'slug' => 'hitam',
        ]);
        Category::create([
            'name' => 'putih',
            'slug' => 'putih',
        ]);

        //  Post::create([
        //     'title' => 'judul kesatu',
        //     'category_id' => 2,
        //     'user_id'=> 1,
        //     'slug' => 'judul-satu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nostrum veniam. Numquam laborum quos ut, fugiat sapiente quas repellat.</p><p>Debitis inventore quam veniam molestiae assumenda, quisquam placeat, ex illo culpa vero ut quia quo iure itaque quibusdam maxime ab nam, eaque laborum voluptas. Sapiente adipisci rerum voluptatibus omnis nulla nemo repellendus assumenda, laborum corrupti rem totam ut optio vitae laudantium commodi consectetur</p><p>velit eum voluptatum tempora ullam suscipit impedit, voluptates minima! Possimus repellat nobis harum porro, architecto maxime dignissimos saepe quasi expedita inventore, tempora ipsum in blanditiis quisquam non ad ducimus nisi consequuntur neque hic! Quae saepe illum consequatur voluptas.</p><p>Cumque nisi, consequuntur sapiente praesentium maiores ipsum animi eius quod ipsam quas aliquid repudiandae, tempore dolorem eum, ratione quam fuga?</p>'
        // ]);
        // Post::create([
        //     'title' => 'judul kedua',
        //     'category_id' => 1,
        //     'user_id'=> 1,
        //     'slug' => 'judul-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nostrum veniam. Numquam laborum quos ut, fugiat sapiente quas repellat.</p><p>Debitis inventore quam veniam molestiae assumenda, quisquam placeat, ex illo culpa vero ut quia quo iure itaque quibusdam maxime ab nam, eaque laborum voluptas. Sapiente adipisci rerum voluptatibus omnis nulla nemo repellendus assumenda, laborum corrupti rem totam ut optio vitae laudantium commodi consectetur</p><p>velit eum voluptatum tempora ullam suscipit impedit, voluptates minima! Possimus repellat nobis harum porro, architecto maxime dignissimos saepe quasi expedita inventore, tempora ipsum in blanditiis quisquam non ad ducimus nisi consequuntur neque hic! Quae saepe illum consequatur voluptas.</p><p>Cumque nisi, consequuntur sapiente praesentium maiores ipsum animi eius quod ipsam quas aliquid repudiandae, tempore dolorem eum, ratione quam fuga?</p>'
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'category_id' => 1,
        //     'user_id'=> 2,
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nostrum veniam. Numquam laborum quos ut, fugiat sapiente quas repellat.</p><p>Debitis inventore quam veniam molestiae assumenda, quisquam placeat, ex illo culpa vero ut quia quo iure itaque quibusdam maxime ab nam, eaque laborum voluptas. Sapiente adipisci rerum voluptatibus omnis nulla nemo repellendus assumenda, laborum corrupti rem totam ut optio vitae laudantium commodi consectetur</p><p>velit eum voluptatum tempora ullam suscipit impedit, voluptates minima! Possimus repellat nobis harum porro, architecto maxime dignissimos saepe quasi expedita inventore, tempora ipsum in blanditiis quisquam non ad ducimus nisi consequuntur neque hic! Quae saepe illum consequatur voluptas.</p><p>Cumque nisi, consequuntur sapiente praesentium maiores ipsum animi eius quod ipsam quas aliquid repudiandae, tempore dolorem eum, ratione quam fuga?</p>'
        // ]);
        // Category::factory(10)->create([]);
        // Post::factory(10)->create([]);
    }
}
