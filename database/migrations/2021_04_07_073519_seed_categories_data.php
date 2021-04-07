<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'Share',
                'description' => 'Share your thoughts',
            ],
            [
                'name'        => 'Tutorial',
                'description' => 'Teach to learn',
            ],
            [
                'name'        => 'Question',
                'description' => 'Get answers from expert',
            ],
            [
                'name'        => 'Announcement',
                'description' => 'Forum Announcement',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}