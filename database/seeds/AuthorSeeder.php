<?php

use Illuminate\Database\Seeder;

use App\Author;

use App\AuthorDetail;

use App\Post;

use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 45; $i++) {
        $author = new Author();
        $author->name = $faker->name();
        $author->email = $faker->email();
        $author->password = $faker->company();
        $author->save();

        $author_detail = new AuthorDetail();
        $author_detail->bio = $faker->realText($maxNbChars = 200, $indexSize = 2);
        $author_detail->phone_number = $faker->phoneNumber();
        $author_detail->avatar = 'https://picsum.photos/seed/' . rand(1, 1000) . '/200/300';
        $author->details()->save($author_detail);

        for ($x=0; $x < rand(2,5); $x++) {
          $post = new Post();
          $post->title = $faker->catchPhrase();
          $post->post_body = $faker->realText($maxNbChars = 200, $indexSize = 2);
          $author->details()->save($post);
        }
      }
    }

}
