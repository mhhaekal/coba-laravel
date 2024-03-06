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
        //     'name' => 'MH Haekal',
        //     'email' => 'mhaekal55@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'M Hafizh H',
        //     'email' => 'mhafizh55@gmail.com',
        //     'password' => bcrypt('12345')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ullam minus ad architecto impedit fugit vitae autem? Beatae, officia sapiente!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur expedita repellendus maxime, blanditiis voluptatum quas suscipit culpa! Obcaecati temporibus, totam laboriosam vitae similique praesentium eum ex autem asperiores repellendus ipsum facere culpa cupiditate doloribus repudiandae? Magni error expedita iste tenetur dolorem eveniet earum, reprehenderit exercitationem ratione neque necessitatibus quas at totam voluptate ut rerum eligendi provident tempora accusantium eaque veniam. Voluptatem laboriosam odio error atque ad, deleniti quod accusamus aliquid quas recusandae. Recusandae exercitationem molestiae tenetur quas quis mollitia, minus eum fugiat quos nisi deleniti blanditiis est. Nesciunt, quae exercitationem nulla nisi atque laboriosam omnis? Sit cum a perspiciatis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ullam minus ad architecto impedit fugit vitae autem? Beatae, officia sapiente!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur expedita repellendus maxime, blanditiis voluptatum quas suscipit culpa! Obcaecati temporibus, totam laboriosam vitae similique praesentium eum ex autem asperiores repellendus ipsum facere culpa cupiditate doloribus repudiandae? Magni error expedita iste tenetur dolorem eveniet earum, reprehenderit exercitationem ratione neque necessitatibus quas at totam voluptate ut rerum eligendi provident tempora accusantium eaque veniam. Voluptatem laboriosam odio error atque ad, deleniti quod accusamus aliquid quas recusandae. Recusandae exercitationem molestiae tenetur quas quis mollitia, minus eum fugiat quos nisi deleniti blanditiis est. Nesciunt, quae exercitationem nulla nisi atque laboriosam omnis? Sit cum a perspiciatis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ullam minus ad architecto impedit fugit vitae autem? Beatae, officia sapiente!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur expedita repellendus maxime, blanditiis voluptatum quas suscipit culpa! Obcaecati temporibus, totam laboriosam vitae similique praesentium eum ex autem asperiores repellendus ipsum facere culpa cupiditate doloribus repudiandae? Magni error expedita iste tenetur dolorem eveniet earum, reprehenderit exercitationem ratione neque necessitatibus quas at totam voluptate ut rerum eligendi provident tempora accusantium eaque veniam. Voluptatem laboriosam odio error atque ad, deleniti quod accusamus aliquid quas recusandae. Recusandae exercitationem molestiae tenetur quas quis mollitia, minus eum fugiat quos nisi deleniti blanditiis est. Nesciunt, quae exercitationem nulla nisi atque laboriosam omnis? Sit cum a perspiciatis?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ullam minus ad architecto impedit fugit vitae autem? Beatae, officia sapiente!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur expedita repellendus maxime, blanditiis voluptatum quas suscipit culpa! Obcaecati temporibus, totam laboriosam vitae similique praesentium eum ex autem asperiores repellendus ipsum facere culpa cupiditate doloribus repudiandae? Magni error expedita iste tenetur dolorem eveniet earum, reprehenderit exercitationem ratione neque necessitatibus quas at totam voluptate ut rerum eligendi provident tempora accusantium eaque veniam. Voluptatem laboriosam odio error atque ad, deleniti quod accusamus aliquid quas recusandae. Recusandae exercitationem molestiae tenetur quas quis mollitia, minus eum fugiat quos nisi deleniti blanditiis est. Nesciunt, quae exercitationem nulla nisi atque laboriosam omnis? Sit cum a perspiciatis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}