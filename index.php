<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/php/formulaire.php">
    <title>Hackers Poulette</title>
</head>
<body>
    <div class="acceuille container-fluid"><!--Ici premiere partie de la page-->
        <div class="row">
            <div class="titre col-sm-12 col-md-6 text-center order-2">
                <h1 id="h1"></h1>
                <p>We rasberry Py</p>
                <img class="logo" class="img"src="Assets/img/hackers-poulette-logo.png" alt="logo,text,image">
            </div>
            <div class="who col-sm-12 col-md-3 text-center order-1">
                <div class="border">
                    <h2>A propos</h2>
                    <p><b>Hackers Poulette</b> est un site conçu pour les debutants, les fans et les veterans des rasberry ! Nous metons tout en oeuvre pour que nos client qui soit-il puisse obtenir ce nano-ordinateur et l'utiliser, le comprendre sur toute ses coutures. Nous offrons un commerce mondial afin que tout le monde ou qu'il soit puisse en obtenir un ! Fraichement née en 2017 <b>Hackers Poulette</b> ce lance dans la conquete du monde avec les Rasperry Pi avec ce nouveau site web.</p>
                    <a href="#produit"> Alors n'hésiter plus et venez voir nos produit !</a>
                </div>
            </div>
            <div class="produit col-sm-12 col-md-3 text-center order-3">
                <div class="border">
                    <h2>Produits</h2>
                    <p> Le Raspberry Pi est un nano-ordinateur monocarte à processeur ARM conçu par des professeurs du département informatique de l'université de Cambridge dans le cadre de la fondation Raspberry Pi2. Cet ordinateur, de la taille d'une carte de crédit, est destiné à encourager l'apprentissage de la programmation informatique2. Il permet l'exécution de plusieurs variantes du système d'exploitation libre GNU/Linux, notamment Debian, et des logiciels compatibles. Mais il fonctionne également avec Windows 10 IoT Core3 et celui de Google, Android Pi4.</p>
                </div>
            </div>
            <div class="info col-sm-12 col-md-12 height-100px text-center order-4">
                <div class="border">
                    <h2>Mais aussi !</h2>
                    <p>Afin de permettre a tous d'utiliser un Rasperry Pi nous avons fait appel a different associiation qui vous permettrons d'apprendre a utiliser un Rasperry Pi ! Et oui beaucoup de gens sont intérresser par ce nano-ordinateur, pourquoi ? car il permet différente chose, tres interressant les une des autres ! Mais nous n'allons pas vous retirer ce mystere héhé. Nous vous laissons pousser votre creativité sur ce petit objet. </p>
                    <ul>
                        <li><a href="https://codeclub.org/en/">Code Club</a></li>
                        <li><a href="https://coderdojo.com/fr-FR">Coder Dojo</a></li>
                        <li><a href="https://www.raspberrypi.org/jam/">Rasperry Jam</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box1 container-fluid"> <!--ici ce trouve la deuxieme partie de la page-->
        <div class="row">

            <div id="produit" class="titre1 col-sm-12 col-md-12 text-center text-light">
                <h1>Nos produits</h1>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_Model_B.jpg" alt="Raspberry Pi B">
                <p>Raspberry Pi B</p>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_B+.jpg" alt="Raspberry PI B+">
                <p>Raspberry Pi B+</p>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_2.jpg" alt="Raspberry Pi 2">
                <p>Raspberry Pi 2</p>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_3.JPG" alt="Raspberry Pi 3">
                <p>Raspberry Pi 3</p>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_3_b+.jpg" alt="Raspberry Pi 3B+">
                <p>Raspberry Pi 3 B+</p>
            </div>
            <div id="item" class="imgProduit col-sm-12 col-md-4 text-center text-light">
                <img src="Assets/img/Raspberry_Pi_4.jpg" alt="Raspberry Pi 4">
                <p>Raspberry Pi 4</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
       
           <div class="formulaire col-md-3 "></div>
            <div class="formulaire col-md-6 col-sm-12 text-center align-item-center">
             <form method="post" action="formulaire.php">
 
                         

                <h1>Formulaire de contacte :</h1>
                <!---<div id="tv" >--->
                    <div class="col-sm-12 col-sm-offset-4">
                        <div class="well" style="margin-top: 10%;">
                        
                        <form role="form" id="contactForm" data-toggle="validator" class="shake" method="post" action="index.php">
                                <div class="checkbox">
                                        <div class="form-group col-sm-6"></div>
                                            
                                            <label>Sexe : </label> <input type="radio" name="sexe"> Homme <input type="radio" name="sexe"> Femme
                                          
                                        </div>
                                </div>

                            <div class="row">
                                
                                <div class="form-group col-sm-6">
                                    <label for="name" class="h4" >Nom</label>
                                    <input type="text" class="form-control" id="name" name="nom" placeholder="Entrez votre nom" required data-error="NEW ERROR MESSAGE">
                                     
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-sm-6">
                                        <label for="prénom" class="h4" name="prénom">prénom</label>
                                        <input type="text" class="form-control" id="prénom" placeholder="Entrez votre prénom" required data-error="NEW ERROR MESSAGE">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                
                                <div class="form-group col-sm-6">
                                    <label for="email" class="h4" name="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-sm-6">
                                        <label for="pays" class="h4" name="pays">pays</label>
                                        <input type="text" class="form-control" id="pays" placeholder="pays" required>
                                        <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="h4" name="message">Message</label>
                                <textarea id="message" class="form-control" rows="5" placeholder="Entrez votre message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right " name="valide">Submit</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                        </form>
                        
                    </div>

            </div>

                <div class="formulaire col-md-3 "></div>
                
              
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="Assets/js/script.js"></script>
    
</body>
</html>

<?php

if(!empty($_POST)){
    //
    // Debug
    //
    echo '<pre>';
    print_r($_POST);
    echo '</pre><br />';

    foreach($_POST as $field => $value){
        echo '<b>'.$field.'</b> : '.$value.'<br />';
    }
    echo '<br /><br />';
}

/*echo $_POST['nom'];
$recupSexe = $_POST['sexe'];
$recupNom = $_POST['nom'];
$recupPréNom = $_POST['prénom'];
$recupEmail = $_POST['email'];
$recupPays = $_POST['pays'];
$recupMessage = $_POST['message'];
//radio 
if(isset($recupSexe)){
    $recupSexe = $_POST['sexe'];
   }
//nom
if($recupNom != ""){ 
}
*/

 

?>