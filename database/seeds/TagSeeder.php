<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = ['cronaca', 'cronaca nera', 'mafie', 'mondi', 'ambiente & veleni'];

      foreach ($tags as $tag) {
        $tagDB = new Tag();
        $tagDB->tag_name = $tag;
        $tagDB->save();
      }
    }
}
