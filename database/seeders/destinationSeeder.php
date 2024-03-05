<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class destinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            'name_fr'=>'Lune',
            'name_en'=>'Moon',
            'description_fr' => 'Voyez notre planète comme vous ne l"avez jamais vue auparavant.
             Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer.
              Pendant que vous y êtes, plangez-vous dans l"histoire en visitant les sites d"atterrissage 
              de Luna 2 et Apollo 11',
            'description_en' => 'Let"s be objective; if you want to go to space, you can go truly
            real space and not just hovering on the edge of it. Well,
            sit back because we are going to give you a truly extraordinary experience!', 
            'distance_fr'=> '384 000 km',
            'duration_fr' => '3 jours',
            'duration_en' => '3 days',

        ]);

        DB::table('destinations')->insert([
            'name_fr'=>'Mars',
            'name_en'=>'Mars',
            'description_fr' => 'N"oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus',
            'description_en' => 'Don"t forget your hiking boots. You"ll need them to climb Mount Olympus, the highest mountain in our solar system. It is two and a half times the size of Everest!', 
            'distance_fr'=> '225 Gm',
            'duration_fr' => '3 ans',
            'duration_en' => '3 years',
        ]);

        
        DB::table('destinations')->insert([
            'name_fr'=>'Europe',
            'name_en'=>'Europe',
            'description_fr' => 'La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l"hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.',
            'description_en' => 'The smallest of the four Galilean moons orbiting Jupiter, Europe is the dream of winter lovers. Its ice surface is perfect for ice skating, curling, hockey or just relaxing in your cozy winter cottage.', 
            'distance_fr'=> '628 Gm',
            'duration_fr' => '9 mois',
            'duration_en' => '9 month',
        ]);

        DB::table('destinations')->insert([
            'name_fr'=>'Titan',
            'name_en'=>'Titan',
            'description_fr' => 'La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.',
            'description_en' => 'The only moon known to have a dense atmosphere other than Earth, Titan is like a home away from home (and just a few hundred degrees colder!). As a bonus, you can contemplate striking views of the rings of Saturn.', 
            'distance_fr'=> '1,6 Tm',
            'duration_fr' => '7 ans',
            'duration_en' => '7 year',
        ]);
        //
    }
}
