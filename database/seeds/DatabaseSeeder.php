<?php

use App\Post;
use App\Topic;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([
            'name' => 'Huy Nguyen',
            'email' => 'huy@gmail.com'
        ]);
        factory(User::class, 5)->create();
        Topic::create(['name' => 'PHP', 'slug' => 'php', 'user_id' => random_int(1, User::count())]);
        Topic::create(['name' => 'VueJS', 'slug' => 'vuejs',  'user_id' => random_int(1, User::count())]);
        Topic::create(['name' => 'Development Job', 'slug' => 'development-job', 'user_id' => random_int(1, User::count())]);

        factory(Post::class, 10)->create();
    }
}
