<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('./app.css') }}">

</head>

<body>
<div class="fondEtoiles">
    <header class="menuBouttons">
        <img src="{{asset('./Logo.png')}}" alt="">
        <img style="width:80vh;" src="{{asset('./Decoration.png')}}" alt="">
        
        <div class="BouttonDuMenu">
        <a href="">00 ACCUEIL</a>
        <a  href="https://www.google.fr">01 DESTINATION</a>
        <a  href="https://www.google.fr">02 EQUIPAGE</a>
        <a  href="https://www.google.fr">03 TECHNOLOGIE</a>
    </div> 
    </header>


    
    

    <div class="espace">
        <div class="basgauche">
            <div class="BouttonDuMenu">

                <a  href="https://www.google.fr">LUNE</a>
                <a  href="https://www.google.fr">MARS</a>
                <a  href="https://www.google.fr">EUROPE</a>
                <a  href="https://www.google.fr">TITAN</a>
            </div>
                <p class="fontC">01 CHOISISSEZ VOTRE DESTINATION</p>
                <h1 class="fontA">LUNE</h1>
                <h2 class="fontB">{{ __('Voyez notre planète comme vous ne lavez jamais vue auparavant.') }} <br>
                {{ __('Un parfait voayage de détente pour vous aider à prendre du reculet revenir') }}<br>
                {{ __('requinquer. Pendant que vous y êtes, plongez-vous dans lhistoire en visitant') }}<br>
                  {{ __('les sites datterrissage de Luna 2 et Apollo 11.') }}<br>
                  
                    <div style="display:inline-flex;">
                        <h3>DISTANCE    </h3>
                        <h3>DUREE   </h3>
                    </div><br>
                    <div style="display:inline-flex;">
                        <h3>384 000 KM  </h3>
                        <h3>3 JOURS     </h3>
                    </div>
           
        </div>
                
         <div class="ellipse">
            <img src="{{ asset('./assetPlanet/moon.png')}}" alt="">
        </div>
    </div>
</div>
</body>

</html>