<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
                'id' => 1,
                'author' => 'Joe Kraynak',
                'book_title' => 'Build your first website',
                'category' => 'Computing',
                'stock' => 25,
                'price' => '11.99',
                'image_path' => 'buildyourfirstwebsite.jpg'
        ]);
    
        Product::create([
                'id' => 2,
                'author' => 'Herbert Schildt',
                'book_title' => 'Java: A Beginners Guide Eighth Edition',
                'category' => 'Computing',
                'stock' => 15,
                'price' => '28.99',
                'image_path' => 'java8thedition.jpg',
        ]);
    
        Product::create([
                'id' => 3,
                'author' => 'David A. Crowder',
                'book_title' => 'Building a website for Dummies',
                'category' => 'Computing',
                'stock' => 12,
                'price' => '17.99',
                'image_path' => 'buildawebsitefordummies.jpg',
        ]);
    
        Product::create([
                'id' => 4,
                'author' => 'Laura Lemay',
                'book_title' => 'HTML, CSS & JavaScript Web Publishing',
                'category' => 'Computing',
                'stock' => 6,
                'price' => '33.49',
                'image_path' => 'htmlcssjswebpublishing.jpg',
        ]);
    
        Product::create([
                'id' => 5,
                'author' => 'John Sloman, Kevin Hide, Dean Garratt',
                'book_title' => 'Economics for Business',
                'category' => 'Business',
                'stock' => 34,
                'price' => '44.99',
                'image_path' => 'econforbusiness.jpg',
        ]);
    
        Product::create([
                'id' => 7,
                'author' => 'Daniel Kahneman',
                'book_title' => 'Thinking, Fast and Slow',
                'category' => 'Business',
                'stock' => 76,
                'price' => '10.49',
                'image_path' => 'ThinkingFastandSlow.jpg',
        ]);
    
        Product::create([
                'id' => 8,
                'author' => 'Jamie Waller',
                'book_title' => 'Unsexy Business: How 12 entrepreneurs in ordinary businesses achieved extraordinary success and how you can too',
                'category' => 'Business',
                'stock' => 52,
                'price' => '11.18',
                'image_path' => 'unsexybusiness.png',
        ]);
    
        Product::create([
                'id' => 9,
                'author' => 'Annie Brock and Heather Hundley',
                'book_title' => 'The Growth Mindeset Coach',
                'category' => 'Business',
                'stock' => 114,
                'price' => '9.99',
                'image_path' => 'thegrowthmindsetcoach.jpg',
        ]); 
    
        Product::create([
                'id' => 10,
                'author' => 'Napoleon Hill and Tom Butler-Bowdon',
                'book_title' => 'Think and Grow Rich',
                'category' => 'Business',
                'stock' => 21,
                'price' => '8.19',
                'image_path' => 'thinkandgrowrich.jpg',
        ]);
    
        Product::create([
                'id' => 11,
                'author' => 'David Crystal',
                'book_title' => 'A Little Book of Language',
                'category' => 'Languages',
                'stock' => 51,
                'price' => '7.21',
                'image_path' => 'ALittleBookofLanguage.jpg',
        ]);
    
        Product::create([
                'id' => 12,
                'author' => 'Lingo Mastery',
                'book_title' => 'Coversational Chinese Dialogues',
                'category' => 'Languages',
                'stock' => 37,
                'price' => '12.99',
                'image_path' => 'CoversationalChineseDialogues.jpg',
        ]);
    
        Product::create([
                'id' => 13,
                'author' => 'Laura Lynne Jackson',
                'book_title' => 'Signs: The Secret Language of the Universe',
                'category' => 'Languages',
                'stock' => 37,
                'price' => '11.19',
                'image_path' => 'SignsTheSecretLanguageoftheUniverse.jpg',
        ]);
        }
}

