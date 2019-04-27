<?php
require("header.php");

?>

<!-- Start Work Area Area -->
<section class="work-area section-gap-top section-gap-bottom-90" id="work">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-end mb-80">
            <div class="col">
                <div class="section-title">

                    <h2>Stage chez BBND</h2>
                    <img src="img/logobbnd.jpg"align="right">

                    <p>Lors de ma deuxième année j'ai effectué mon stage au sein de l'entreprise BBND ( Big Bang Network Développement) à Lille, BBND est une agence SSII dont l'activité s'oriente autour du développement informatique et de la communication multisupport.
                        J'ai effectué 7 semaines au sein de leur structure lors de ce stage ( 07/01/2019 au 22/02/2019).
                        Au cours de cette période j'ai eu l'occasion de travailler sur différents projets tels qu'une application lourde faite en java (Fidscan)
                    </p>

                    <br>
                    <h2>Fidscan</h2>

                    <div class="row" >
                        <div class="col">
                            <img src="img/fid.png" height="500" width="700">
                        </div>

                           <br> Fidscan est une application dites desktop c'est-à-dire qu'elle est utilisable uniquement sur ordinateur.
                            <br>Le but de Fidscan est de pouvoir permettre aux entreprises de collecter les données de leurs clients via un QR code afin de leur proposer un programme de fidélité spécifique ou juste afin de pouvoir comptabiliser
                            ses clients pour des futurs démarches.
                           <br>Elle permet aussi aux particuliers d'éviter d'oublier leurs cartes de fidélités mais aussi de pouvoir créer rapidement sa carte juste en scannant le QR code de l'entreprise utilisant l'application.
                           <br>Pour cela il existe aussi une application mobile qui est en cours de traitement chez BBND.
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <img src="img/fid1.png" height="700" width="800">
                        </div>
                    <br>
                        Pour commencer l'entreprise souhaitant utiliser Fidscan doit s'inscrire en renseignant diverses informations telles que son numéro de Siret, son code APE ou NAF, son adresse, etc.<br>
                        En s'enregistrant sur l'application l'entreprise accédera à son panneau de controle avec diverses options telle que le choix du service quelle souhaite proposer ainsi que son QR code ou encore les données de ses clients.
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <img src="img/dbconnectfidmodif.png" height="500" width="500">
                            <img src="img/mainfidmodif.png" height="500" width="500">
                        </div>
                        <br>
                        Sur la première image, il s'agit du système de connexion à la base de données de l'application Fidscan avec l'adresse en local de celle-ci ainsi que les identifiants de connexion et le retour d'un message en cas d'erreur.
                        <br>
                        Sur la deuxième image il s'agit de la classe Main du programme c'est à dire celle qui lance la page de connexion de l'application Fidscan avec une requête permettant de récupérer toutes les données de la table entreprise avec les identifiants associé aux comptes.
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <img src="img/bddfidscan.png" height="400" width="1500">

                        </div>
                        <br>
                        Voici la structure de la base de donnée qui contient 5 tables: <br>
                        - La table Login qui permet d'enregistrer/Stocker les identifiants de connexion des entreprises (Login et mot de passe)<br>
                        - La table Pro qui contient toutes les informations de l'entreprise (Numéro de siret, code NAF ou APE, etc.)<br>
                        - La table User qui contient les données des clients ayant scanné le QR code de l'entreprise<br>
                        - La table champsaddlibre qui permet à l'entreprise de choisir les champs de ses clients qu'elle souhaite récupérer dans le cadre de démarches commercial ou autres<br>
                        - La table Userregister qui permet au client de renseigner ses informations lors de son inscription.
                        <br>
                        <br>

                        <h3>Pour conclure</h3>

                        Fidscan est une application qui peut être utile du côté entreprise dans le cadre de la fidélisation de ses clients, c'est une application
                        avec un certains potentiel, pour le moment Fidscan n'est pas terminé car de nombreux projets sont en cours chez BBND.
                        Fidscan n'est pas une nouveauté en soit par exemple nous avons deja le wallet de chez Apple dans ses Iphones, en revanche
                        Fidscan apporte la fonctionnalité de scanner le QR code de l'entreprise afin de facilité et de rendre plus rapide la récolte de données pour les professionnels.

                        <br>
                        <br>

                        <h2>Stéganographie</h2>

                        Après Fidscan j'ai eu comme mission tout d'abord de m'intérésser au concept de la Stéganographie pour ce faire j'ai du effectuer quelques recherches
                        sur ce qu'est ce concept. Il faut savoir que la stéganographie est l'art de la dissimulation son objet est de faire passer inaperçu un message dans un autre message. Elle se distingue de la cryptographie, « art du secret »,
                        qui cherche à rendre un message inintelligible à autre que qui-de-droit.
                        <br>
                        Pour ce projet je n'ai pas eu besoin de programmer directment j'ai eu comme consigne de la part de mon tuteur d'entamer une démarche de recherche et de compréhension car de nombreux projet sur le sujet existait déja.
                        Je me suis naturellement tourné vers Github afin de pouvoir trouvé directement des projets de stéganographie fait dans le langage Python.
                        <br>
                        <br>


                        <img src="img/gitste.png" height="500" width="800">
                        <br>

                        Suite à mes recherches je suis tombé sur un projet nommé LastBitSuite que j'ai pu alors récupérer afin de l'étudier et de comprendre le mécanisme.
                        Le projet LastBitSuite se base sur la modification d'un bit à chaque octet RVB qui compose chaque pixel de l'image. En retirant 1 bit, on dégrade l'image, mais ce n'est pas visible à l'oeil nu.
                        De ce fait, on peut récupérer ce bit à chaque fois et l'utiliser pour stocker les données que l'on souhaite. Nous récupérons donc 1/8e de la taille de l'image pour cacher une information ou un document.<br>

                        Ce projet se décompose en plusieurs parties:<br>
                        - Nous avons la classe LastBitHideFile qui permet de cacher un fichier dans une image.<br>
                        - Nous avons la classe LastBitRevealFile qui permet d'extraire le fichier caché.<br>
                        - Nous avons la classe Crypto qui permet de crypter le fichier à cacher/extraire.<br>
                        - Nous avons la classe Core qui est le corps du programme.<br>
                        <br>

                        <img src="img/lsb3.png" height="500" width="500">
                        <img src="img/lsb1.png" height="500" width="500">
                        <img src="img/lsb2.png" height="500" width="500">
                        <br>





                    </div>

                </div>
            </div>
        </div>
    </div>




</section>
<!-- End Work Area Area -->

<?php
require ("contact2.php")
?>

<?php
require ("footer.php")
?>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/mn-accordion.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.circlechart.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>