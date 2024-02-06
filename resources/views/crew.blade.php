<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('./app.css') }}">
   
</head>

<body>
<div class="fondAcceuil">
    <header >
        <img src="{{asset('./Logo.png')}}" alt="">
        <img style="width=80vh;" src="{{asset('./Decoration.png')}}" alt="">
        
        <div class="BouttonDuMenu">
        <a href="">00 ACCUEIL</a>
        <a  href="">01 DESTINATION</a>
        <a  href="">02 EQUIPAGE</a>
        <a  href="">03 TECHNOLOGIE</a>
    </div>  
    </header>


    
    

    <div class="espace">
        <div class="basgauche">
           
                <p class="fontC" ><span style="border: 2px solid" >01 Rencontrez l'équipage <span style="color:black;background-color:lightskyblue;">dans</span></span></p>
                <h1>COMMANDANT</h1>
                <h1 class="fontA">DOUGLAS</h1>
                <h2 class="fontB" >{{ __('Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines') }}<br>
                     {{ __('et un ancien astronaute de la NASA. Il sest lancé dans lespace pour la troisième fois en tant que') }}<br>
                      {{ __('commandant du vaissaux Crew Dragon Demo-2.') }}<br>
                <button class="petitBoutton" type='button'>.</button>
                <button class="petitBoutton" type='button'>.</button>
                <button class="petitBoutton" type='button'>.</button>
                 <button class="petitBoutton" type='button'>.</button>
           
        </div>
       
         <div class="ellipse">
            <img src="{{ asset('./assetCrew/DouglasHurley.png')}}" alt="">
        </div>
    </div>
</div>
</body>

</html>