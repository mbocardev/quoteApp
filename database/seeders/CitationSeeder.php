<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citation;

class CitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $citations = [
            // Citations en français
            [
                'text' => 'La vie est ce qui arrive pendant que vous êtes occupé à faire d\'autres projets.',
                'author' => 'John Lennon',
                'language_id' => 1, // Français
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La seule chose que nous devons craindre, c\'est la peur elle-même.',
                'author' => 'Franklin D. Roosevelt',
                'language_id' => 1, // Français
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'The only way to do great work is to love what you do.',
                'author' => 'Steve Jobs',
                'language_id' => 2, // Anglais
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'In three words I can sum up everything I\'ve learned about life: it goes on.',
                'author' => 'Robert Frost',
                'language_id' => 2, // Anglais
                'category_id' => 2, // Life (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La simplicité est la sophistication suprême.',
                'author' => 'Leonardo da Vinci',
                'language_id' => 1, // Français
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La seule façon de faire du bon travail est d\'aimer ce que vous faites.',
                'author' => 'Steve Jobs',
                'language_id' => 1, // Français
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            
            // Citations en anglais
            [
                'text' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
                'author' => 'Nelson Mandela',
                'language_id' => 2, // Anglais
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'Success is not final, failure is not fatal: It is the courage to continue that counts.',
                'author' => 'Winston Churchill',
                'language_id' => 2, // Anglais
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'Le bonheur est parfois caché dans l\'inconnu.',
                'author' => 'Victor Hugo',
                'language_id' => 1, // Français
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La vie n\'est qu\'un rêve, et nous sommes les imaginations de nous-mêmes.',
                'author' => 'Lewis Carroll',
                'language_id' => 1, // Français
                'category_id' => 2, // Philosophical (à créer si elle n'existe pas encore)
            ],
            
            // Citations en anglais
            [
                'text' => 'The only limit to our realization of tomorrow will be our doubts of today.',
                'author' => 'Franklin D. Roosevelt',
                'language_id' => 2, // Anglais
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'The way to get started is to quit talking and begin doing.',
                'author' => 'Walt Disney',
                'language_id' => 2, // Anglais
                'category_id' => 1, // Inspirational (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La créativité est contagieuse, faites-la tourner.',
                'author' => 'Albert Einstein',
                'language_id' => 1, // Français
                'category_id' => 3, // Créativité (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'La beauté commence au moment où vous décidez d\'être vous-même.',
                'author' => 'Coco Chanel',
                'language_id' => 1, // Français
                'category_id' => 4, // Beauté (à créer si elle n'existe pas encore)
            ],
            
            // Citations en anglais
            [
                'text' => 'Innovation distinguishes between a leader and a follower.',
                'author' => 'Steve Jobs',
                'language_id' => 2, // Anglais
                'category_id' => 3, // Innovation (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'The best way to predict the future is to create it.',
                'author' => 'Peter Drucker',
                'language_id' => 2, // Anglais
                'category_id' => 3, // Innovation (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'Happiness is not in the mere possession of money; it lies in the joy of achievement, in the thrill of creative effort.',
                'author' => 'Franklin D. Roosevelt',
                'language_id' => 2, // Anglais
                'category_id' => 4, // Bonheur (à créer si elle n'existe pas encore)
            ],
            [
                'text' => 'Success is getting what you want. Happiness is wanting what you get.',
                'author' => 'Dale Carnegie',
                'language_id' => 2, // Anglais
                'category_id' => 4, // Bonheur (à créer si elle n'existe pas encore)
            ],
        ];

        foreach ($citations as $citation) {
            Citation::create($citation);
        }
    }
}
