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
        <img src="{{asset('./Decoration.png')}}" alt="">
        <img src="{{asset('./Decoration.png')}}" alt="">
        
        <button>ACCUEIL</button>
        <button>DESTINATION</button>
        <button>EQUIPAGE</button>
        <button>TECHNOLOGIE</button> 
    </header>


    
    

    <div class="espace">
        <div class="basgauche">
           
                <p class="fontC" ><span style="border: 2px solid" >Donc vous voulez voyagez <span style="color:black;background-color:lightskyblue;">dans</span></span></p>
                <h1 class="fontA">L'ESPACE</h1>
                <h2 class="fontB" >Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement <br>
                    le véritable espace et non juste planer sur le bord de celui-ci. Eh bien,<br>
                    asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire!</h2>

           
        </div>
       
         <div class="ellipse">
            <img src="{{ asset('./Ellipse.png')}}" alt="">
        </div>
    </div>
</div>
</body>

</html>