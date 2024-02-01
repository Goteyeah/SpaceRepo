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
        <img src="{{asset('./Decoration.png')}}" alt="">
        <img src="{{asset('./Decoration.png')}}" alt="">
        
        <button>00 ACCUEIL</button>
        <button>01 DESTINATION</button>
        <button>02 EQUIPAGE</button> 
        <button>03 TECHNOLOGIE</button> 
    </header>


    
    

    <div class="espace">
        <div class="basgauche">
           
                <p class="fontC">donc vous voulez voyagez dans l'espace</p>
                <h1 class="fontA">LUNE</h1>
                <h2 class="fontB">Voyez notre planète comme vous ne l'avez jamais vue auparavant. <br>
                Un parfait voayage de détente pour vous aider à prendre du reculet revenir<br>
                 requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant<br>
                  les sites d'atterrissage de Luna 2 et Apollo 11.
           
        </div>
       
         <div class="ellipse">
            <img src="{{ asset('./assetPlanet/moon.png')}}" alt="">
        </div>
    </div>
</div>
</body>

</html>