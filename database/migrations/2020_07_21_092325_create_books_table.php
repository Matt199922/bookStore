<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('author');
            $table->string('book_title');
            $table->string('category');
            $table->double('stock');
            $table->double('price');
            $table->string('image_path');
        });
    

    DB::table('books')->insert(
        array(
            'id' => 1,
            'author' => 'Joe Kraynak',
            'book_title' => 'Build your first website',
            'category' => 'Computing',
            'stock' => 25,
            'price' => '11.99',
            'image_path' => 'buildyourfirstwebsite.jpg'
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 2,
            'author' => 'Herbert Schildt',
            'book_title' => 'Java: A Beginners Guide Eighth Edition',
            'category' => 'Computing',
            'stock' => 15,
            'price' => '28.99',
            'image_path' => 'java8thedition.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 3,
            'author' => 'David A. Crowder',
            'book_title' => 'Building a website for Dummies',
            'category' => 'Computing',
            'stock' => 12,
            'price' => '17.99',
            'image_path' => 'buildawebsitefordummies.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 4,
            'author' => 'Laura Lemay',
            'book_title' => 'HTML, CSS & JavaScript Web Publishing',
            'category' => 'Computing',
            'stock' => 6,
            'price' => '33.49',
            'image_path' => 'htmlcssjswebpublishing.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 5,
            'author' => 'John Sloman, Kevin Hide, Dean Garratt',
            'book_title' => 'Economics for Business',
            'category' => 'Business',
            'stock' => 34,
            'price' => '44.99',
            'image_path' => 'econforbusiness.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 7,
            'author' => 'Daniel Kahneman',
            'book_title' => 'Thinking, Fast and Slow',
            'category' => 'Business',
            'stock' => 76,
            'price' => '10.49',
            'image_path' => 'ThinkingFastandSlow.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 8,
            'author' => 'Jamie Waller',
            'book_title' => 'Unsexy Business: How 12 entrepreneurs in ordinary businesses achieved extraordinary success and how you can too',
            'category' => 'Business',
            'stock' => 52,
            'price' => '11.18',
            'image_path' => 'unsexybusiness.png',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 9,
            'author' => 'Annie Brock and Heather Hundley',
            'book_title' => 'The Growth Mindeset Coach',
            'category' => 'Business',
            'stock' => 114,
            'price' => '9.99',
            'image_path' => 'thegrowthmindsetcoach.jpg',
        )
    ); 

    DB::table('books')->insert(
        array(
            'id' => 10,
            'author' => 'Napoleon Hill and Tom Butler-Bowdon',
            'book_title' => 'Think and Grow Rich',
            'category' => 'Business',
            'stock' => 21,
            'price' => '8.19',
            'image_path' => 'thinkandgrowrich.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 11,
            'author' => 'David Crystal',
            'book_title' => 'A Little Book of Language',
            'category' => 'Languages',
            'stock' => 51,
            'price' => '7.21',
            'image_path' => 'ALittleBookofLanguage.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 12,
            'author' => 'Lingo Mastery',
            'book_title' => 'Coversational Chinese Dialogues',
            'category' => 'Languages',
            'stock' => 37,
            'price' => '12.99',
            'image_path' => 'CoversationalChineseDialogues.jpg',
        )
    );

    DB::table('books')->insert(
        array(
            'id' => 13,
            'author' => 'Laura Lynne Jackson',
            'book_title' => 'Signs: The Secret Language of the Universe',
            'category' => 'Languages',
            'stock' => 37,
            'price' => '11.19',
            'image_path' => 'SignsTheSecretLanguageoftheUniverse.jpg',
        )
    );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}