<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $products = Product::all();
        $users = User::all();

        if ($products->count() === 0 || $users->count() === 0) {
            $this->command->info('There are no blog posts or users, so no comments will be added');
            return;
        }

        $usersCount = max((int)$this->command->ask('How many Image would you like?', 20), 1);

        Image::factory()->count($usersCount)->Create(); 
    }
}
 // factory(App\Comment::class, $commentsCount)->make()->each(function ($comment) use ($posts, $users) {
        //     $comment->commentable_id = $posts->random()->id;
        //     $comment->commentable_type = 'App\BlogPost';
        //     $comment->user_id = $users->random()->id;
        //     $comment->save();
        // });

        
        
        
        
         

        // Image::factory()->count($usersCount/2)->make()->each(function ($image) use ($products) {
        //     $image->imageable_id = $this->faker->numberBetween(1,10);
        //     $image->imageable_type = 'App\Models\Product';
        //     $image->save();
        // });;


        // Image::factory()->count($usersCount/2)->make()->each(function ($image) use ($users) {
        //     $image->imageable_id = $users->random()->id;
        //     $image->imageable_type = 'App\Models\User';
        //     $image->save();
        // });;