<?php
require_once 'Classes/Donnees.php';

// Exécution des méthode GET 

if (isset($_GET['goA1'])) {
    $voiture1->Go();
}
if (isset($_GET['stopE1'])) {
    $voiture1->Stop();
}


if (isset($_GET['goA2'])) {
    $voiture2->Go();
}
if (isset($_GET['stopE2'])) {
    $voiture2->Stop();
}


if (isset($_GET['goA3'])) {
    $voiture3->Go();
}
if (isset($_GET['stopE3'])) {
    $voiture3->Stop();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Concession des Roxxers</title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>

    <body>
        <header>
            <h1>Concession des Roxxers</h1>
        </header>

        <section class="liste_voiture">
            <article class="voiture">
                <h2><?php echo $voiture1->getType(); ?> </h2>
                <img src="img/seat-ibiza-cupra.jpg" alt="Seat Ibiza Cupra" title="Seat Ibiza Cupra" />
                <div class="description">
                    <!-- on récupère les données saisies en dur dans le fichier "Donnees.php" -->
                    <p><strong>Energie :</strong> <?php echo $voiture1->getEnergie(); ?></p>
                    <p><strong>Type de boite :</strong> <?php echo $voiture1->getBoiteVitesse(); ?></p>
                    <p><strong>Transmission :</strong> <?php echo $voiture1->getTransmission(); ?></p>
                    <div class="colorpicker">
                        <p><strong>Couleurs disponibles :</strong> </p>
                        <div class="color">
                            <!-- on récupère les couleurs attribuées dans la classe Mère "Ressources.php" -->
                            <div id="demo" onclick="myCouleur1()" style="background-color:<?php echo $voiture1->getCouleur1(); ?>"></div>
                            <div id="demo" onclick="myCouleur2()" style="background-color:<?php echo $voiture1->getCouleur2(); ?>"></div>
                            <div id="demo" onclick="myCouleur3()" style="background-color:<?php echo $voiture1->getCouleur3(); ?>"></div>
                        </div>
                    </div>
                </div>
                <div id="voiture1" class ="box"></div>
                <h2>Etat : <?php echo $voiture1->getEtat(); ?></h2>
                <form>
                    <!-- on récupère le name de l'input avec une méthode GET pour
                    activer ou pas le bouton (comme c'est du php, ça recharge la page et donc les couleurs "disparaissent" du cadre)
                    -->
                    <?php
                    if ($voiture1->getEtat() == "Shut Off") {
                        echo "<input type='submit' name='goA1' value='Start Your Engine'/>";
                    } else {
                        echo "<input type='submit' name='stopE1' value='Stop'/>";
                    }
                    ?>
                </form>
            </article>

            <article class="voiture">
                <h2><?php echo $voiture2->getType(); ?> </h2>
                <img src="img/renault-clio.jpg" alt="Renault Clio" title="Renault Clio"/>
                <div class="description">
                    <!-- on récupère les données saisies en dur dans le fichier "Donnees.php" -->
                    <p><strong>Energie :</strong> <?php echo $voiture2->getEnergie(); ?></p>
                    <p><strong>Type de boite :</strong> <?php echo $voiture2->getBoiteVitesse(); ?></p>
                    <p><strong>Transmission :</strong> <?php echo $voiture2->getTransmission(); ?></p>
                    <div class="colorpicker">
                        <p><strong>Couleurs disponibles :</strong> </p>
                        <div class="color">
                            <!-- on récupère les couleurs attribuées dans la classe Mère "Ressources.php" -->
                            <div id="demo" class="demo" onclick="myCouleur4()" style="background-color:<?php echo $voiture2->getCouleur4(); ?>"></div>
                            <div id="demo" onclick="myCouleur5()" style="background-color:<?php echo $voiture2->getCouleur5(); ?>"></div>
                            <div id="demo" onclick="myCouleur6()" style="background-color:<?php echo $voiture2->getCouleur6(); ?>"></div>
                        </div>
                    </div>
                </div>
                <div id="voiture2" class ="box"></div>
                <h2>Etat : <?php echo $voiture2->getEtat(); ?></h2>
                <form>
                    <!-- on récupère le name de l'input avec une méthode GET pour
                    activer ou pas le bouton (comme c'est du php, ça recharge la page et donc les couleurs "disparaissent" du cadre) -->
                    <?php
                    if ($voiture2->getEtat() == "Shut Off") {
                        echo "<input type='submit' name='goA2' value='Start Your Engine'/>";
                    } else {
                        echo "<input type='submit' name='stopE2' value='Stop'/>";
                    }
                    ?>
                </form>
            </article>

            <article class="voiture">
                <h2><?php echo $voiture3->getType(); ?> </h2>
                <img src="img/bmw-i8-coupe.jpg" alt="BMW i8" title="BMW i8"/>
                <div class="description">
                    <!-- on récupère les données saisies en dur dans le fichier "Donnees.php" -->
                    <p><strong>Energie :</strong> <?php echo $voiture3->getEnergie(); ?></p>
                    <p><strong>Type de boite :</strong> <?php echo $voiture3->getBoiteVitesse(); ?></p>
                    <p><strong>Transmission :</strong> <?php echo $voiture3->getTransmission(); ?></p>
                    <div class="colorpicker">
                        <p><strong>Couleurs disponibles : </strong></p>
                        <div class="color">
                            <!-- on récupère les couleurs attribuées dans la classe Mère "Ressources.php" -->
                            <div id="demo" class="demo" onclick="myCouleur7()" style="background-color:<?php echo $voiture3->getCouleur7(); ?>"></div>
                            <div id="demo" onclick="myCouleur8()" style="background-color:<?php echo $voiture3->getCouleur8(); ?>"></div>
                            <div id="demo" onclick="myCouleur9()" style="background-color:<?php echo $voiture3->getCouleur9(); ?>"></div>
                        </div>
                    </div>
                </div>
                <div id="voiture3" class="box"></div>
                <h2 class="fire">Etat : <?php echo $voiture3->getEtat(); ?></h2>

                <form>
                    <!-- on récupère le name de l'input avec une méthode GET pour
                    activer ou pas le bouton (comme c'est du php, ça recharge la page et donc les couleurs "disparaissent" du cadre) -->
                    <?php
                    if ($voiture3->getEtat() == "Shut Off") {
                        echo "<input type='submit' name='goA3' value='Start Your Engine'/>";
                    } else {
                        echo "<input type='submit' name='stopE3' value='Stop'/>";
                    }
                    ?>
                </form>
            </article>
        </section>
        
        <!-- on récupère les couleurs attribuées dans la classe Mère "Ressources.php" pour les afficher avec une commande Javascript getElementById() -->

        <script>
            function myCouleur1() {
                document.getElementById("voiture1").style.backgroundColor = "<?php echo $voiture3->getCouleur1() ?>";
                document.getElementById('voiture1').innerHTML="<p><?php echo $voiture1->getCouleur1() ?></p>";
            }


            function myCouleur2() {
                document.getElementById("voiture1").style.backgroundColor = "<?php echo $voiture3->getCouleur2() ?>";
                document.getElementById('voiture1').innerHTML="<p><?php echo $voiture1->getCouleur2() ?></p>";
            }


            function myCouleur3() {
                document.getElementById("voiture1").style.backgroundColor = "<?php echo $voiture3->getCouleur3() ?>";
                document.getElementById('voiture1').innerHTML="<p><?php echo $voiture1->getCouleur3() ?></p>";
            }

            function myCouleur4() {
                document.getElementById("voiture2").style.backgroundColor = "<?php echo $voiture3->getCouleur4() ?>";
                document.getElementById('voiture2').innerHTML="<p class='demo'><?php echo $voiture2->getCouleur4() ?></p>";
            }

            function myCouleur5() {
                document.getElementById("voiture2").style.backgroundColor = "<?php echo $voiture3->getCouleur5() ?>";
                document.getElementById('voiture2').innerHTML="<p><?php echo $voiture2->getCouleur5() ?></p>";
            }

            function myCouleur6() {
                document.getElementById("voiture2").style.backgroundColor = "<?php echo $voiture3->getCouleur6() ?>";
                document.getElementById('voiture2').innerHTML="<p><?php echo $voiture2->getCouleur6() ?></p>";
            }

            function myCouleur7() {
                document.getElementById("voiture3").style.backgroundColor = "<?php echo $voiture3->getCouleur7() ?>";
                document.getElementById('voiture3').innerHTML="<p class='demo'><?php echo $voiture3->getCouleur7() ?></p>";
            }

            function myCouleur8() {
                document.getElementById("voiture3").style.backgroundColor = "<?php echo $voiture3->getCouleur8() ?>";
                document.getElementById('voiture3').innerHTML="<p><?php echo $voiture3->getCouleur8() ?></p>";
            }

            function myCouleur9() {
                document.getElementById("voiture3").style.backgroundColor = "<?php echo $voiture3->getCouleur9() ?>";
                document.getElementById('voiture3').innerHTML="<p><?php echo $voiture3->getCouleur9() ?></p>";
            }
        </script>

        <footer>
            <p>© Laurent aka <a href="https://www.skulkrone-design.fr/" target="_blank" title="Skulkrone-Design">Skulkrone</a> | ExoPOO1</p>
        </footer>
    </body>
</html>
