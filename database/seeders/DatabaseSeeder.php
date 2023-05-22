<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Brad Wisesa',
        //     'email' => 'superman.wisesa@gmail.com',
        //     'password' => bcrypt(('12345'))
        // ]);

        // User::create([
        //     'name' => 'Rini',
        //     'email' => 'rini@gmail.com',
        //     'password' => bcrypt(('12345'))
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maxime quos, nulla dolorum tempore unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis aut nisi, veniam aspernatur nulla delectus aperiam reprehenderit voluptas harum exercitationem explicabo natus nostrum facilis. Mollitia soluta vitae accusamus vel officiis, ratione necessitatibus autem pariatur ipsum enim impedit consectetur numquam, ipsa illo quaerat aut hic? Perferendis minima assumenda veritatis id atque amet molestias sed ut enim, similique eveniet quae voluptatum eos accusantium eum, excepturi neque. Deserunt minima sed voluptates molestiae libero veniam quidem aspernatur debitis incidunt consequatur dolores rem placeat unde exercitationem earum, id distinctio quas recusandae neque in reprehenderit! Iusto consectetur suscipit modi in voluptatibus molestiae, provident dignissimos harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maxime quos, nulla dolorum tempore unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis aut nisi, veniam aspernatur nulla delectus aperiam reprehenderit voluptas harum exercitationem explicabo natus nostrum facilis. Mollitia soluta vitae accusamus vel officiis, ratione necessitatibus autem pariatur ipsum enim impedit consectetur numquam, ipsa illo quaerat aut hic? Perferendis minima assumenda veritatis id atque amet molestias sed ut enim, similique eveniet quae voluptatum eos accusantium eum, excepturi neque. Deserunt minima sed voluptates molestiae libero veniam quidem aspernatur debitis incidunt consequatur dolores rem placeat unde exercitationem earum, id distinctio quas recusandae neque in reprehenderit! Iusto consectetur suscipit modi in voluptatibus molestiae, provident dignissimos harum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maxime quos, nulla dolorum tempore unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis aut nisi, veniam aspernatur nulla delectus aperiam reprehenderit voluptas harum exercitationem explicabo natus nostrum facilis. Mollitia soluta vitae accusamus vel officiis, ratione necessitatibus autem pariatur ipsum enim impedit consectetur numquam, ipsa illo quaerat aut hic? Perferendis minima assumenda veritatis id atque amet molestias sed ut enim, similique eveniet quae voluptatum eos accusantium eum, excepturi neque. Deserunt minima sed voluptates molestiae libero veniam quidem aspernatur debitis incidunt consequatur dolores rem placeat unde exercitationem earum, id distinctio quas recusandae neque in reprehenderit! Iusto consectetur suscipit modi in voluptatibus molestiae, provident dignissimos harum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maxime quos, nulla dolorum tempore unde!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis aut nisi, veniam aspernatur nulla delectus aperiam reprehenderit voluptas harum exercitationem explicabo natus nostrum facilis. Mollitia soluta vitae accusamus vel officiis, ratione necessitatibus autem pariatur ipsum enim impedit consectetur numquam, ipsa illo quaerat aut hic? Perferendis minima assumenda veritatis id atque amet molestias sed ut enim, similique eveniet quae voluptatum eos accusantium eum, excepturi neque. Deserunt minima sed voluptates molestiae libero veniam quidem aspernatur debitis incidunt consequatur dolores rem placeat unde exercitationem earum, id distinctio quas recusandae neque in reprehenderit! Iusto consectetur suscipit modi in voluptatibus molestiae, provident dignissimos harum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
