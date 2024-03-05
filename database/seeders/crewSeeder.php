<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class crewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
DB::table('crews')->insert([
    
    'name'=>'DOUGLAS',
    'surname'=>'DOUGLAS',
    'rang_fr'=>'COMMANDANT',
     'rang_en'=> 'CAPTAIN',
   'description_A_fr' => 'Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s"est lancé dans l"espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.',
    'description_A_en' => 'Douglas Gerald Hurley is an 
    American engineer, former Marine Coprs pilot and 
     NASA astronaut. He launched himself into space
      for the third time as commander of the Crew 
      Dragon Demo-2.'
]);

DB::table('crews')->insert([

    'name'=>'MARK',
    'surname'=>'SHUTTLEWORTH',
    'rang_fr'=>'Spécialiste de mission',
     'rang_en'=> 'mission specialist',
   'description_A_fr' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système
    d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant
     que touriste spatial.",
    'description_A_en' => "Mark Richard Shuttleworth is the founder and CEO of Canonical, the 
    company behind the Linux-based Ubuntu operating system. Shuttleworth became the first South
     African to travel in space as a space tourist."

]);

DB::table('crews')->insert([

    'name'=>'VICTOR',
    'surname'=>'GLOVER',
    'rang_fr'=>'Pilote',
     'rang_en'=> 'Driver',
   'description_A_fr' => "Pilote du premier vol opérationnel du SpaceX Crew 
   Dragon à destination de la Station Spatiale Internationale. Glover est commandant 
   dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
    'description_A_en' => "Pilot of the first operational SpaceX Crew Dragon flight to the International Space Station. Glover was a commander in the US Navy, flying an F/A-18.
     He was a member of the Expedition 64 crew and served as a flight engineer for station systems."

]);

DB::table('crews')->insert([

'name'=>'ANSARI',
    'surname'=>'ANOUSHEH',
    'rang_fr'=>'Ingénieure de vol',
     'rang_en'=> 'Flight engineer',
   'description_A_fr' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems.
    Ansari était la quatrième touriste de 
   l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
    'description_A_en' => "Anousheh Ansari is an Iranian-American engineer and co-founder of Prodea Systems. Ansari
     was the fourth self-funded space tourist, the first self-funded woman to visit the ISS, and the first Iranian
      in space. l"
]);

    }
}
