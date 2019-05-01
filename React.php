<?php
require("header.php");

?>

<!-- Start Work Area Area -->
<section class="work-area section-gap-top section-gap-bottom-90" id="work">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-end mb-80">
            <div class="col">
                <div class="section-title">

                    <img src="img/Veille/React-logo-1.png" align="center" height="400" width="1200">

                    <br>
                    <br>



                    <h2>React</h2>


                        React (aussi appelé React.js ou ReactJS) est une bibliothèque JavaScript libre développée par Facebook depuis 2013. <br>Le but principal de cette bibliothèque est de faciliter la création d'application web monopage, via la création de composants dépendant d'un état et générant une page (ou portion) HTML à chaque changement d'état.<br>

                        React est une bibliothèque qui ne gère que l'interface de l'application, considéré comme la vue dans le modèle MVC.<br>
                        Elle peut ainsi être utilisée avec une autre bibliothèque ou un framework MVC comme AngularJS. La bibliothèque se démarque de ses concurrents par sa flexibilité et ses performances, en travaillant avec un DOM virtuel et en ne mettant à jour le rendu dans le navigateur qu'en cas de nécessité.

                        La bibliothèque est utilisée notamment par Netflix (côté serveur uniquement depuis le 25 octobre 2017 pour gagner 50 % de performance), Yahoo, Airbnb, Sony, Atlassian ainsi que par les équipes de Facebook, appliquant le dogfooding sur le réseau social éponyme, Instagram ou encore WhatsApp.<br> À la fin de 2015, WordPress.com annonce Calypso, une interface pour les administrateurs WordPress, développée en JavaScript avec node.js et React.<br>
                        La bibliothèque se démarque de ses concurrents par sa flexibilité et ses performances, en travaillant avec un DOM virtuel et en ne mettant à jour le rendu dans le navigateur qu'en cas de nécessité.
                    <br>
                    <br>



                    <div class="row" >
                        React a été conçu comme étant une bibliothèque et non un framework MVC, comme peuvent l'être ses concurrents.<br>Ainsi, React encourage la création de composants réutilisables, avec en entrée des données, pouvant changer au cours du temps.

                        Par ailleurs, React n'utilise pas de système de templates et ne fonctionne qu'avec du JavaScript, permettant une encapsulation complète du composant au sein d'une unique classe.<br> Pour faciliter l'écriture de la vue, l'équipe initiale chez Facebook a développé un langage, JSX, qui permet de générer des objets Javascript avec une notation similaire à HTML.
                    </div>

                    <br>
                    <div style="text-align: left">
                        Sources de la Veille:<br>
                        <a href="https://feedly.com/i/subscription/feed%2Fhttp%3A%2F%2Freactjsnewsletter.com%2Fissues.rss" target="_blank"> &nbsp; Feedly React</a> <br>
                        <a href="http://reactjsnewsletter.com" target="_blank"> &nbsp; React Newsletter</a><br>
                        <a href="https://github.com/facebook/react" target="_blank"> &nbsp; Github Facebook React</a><br>
                        <a href="https://reactjs.org/versions" target="_blank"> &nbsp; React official website</a><br>

                        <br>

                        Pour le versionning de React:<br>
                        - On passe d'une version à une autre avec un délais d'attente de 1 à 3 mois. (par exemple passage de la version 16.3.2 à la 16.4.0)<br>
                        - Le rythme des mises à jours mineurs est de 6 à 15 jours.<br>
                        - React étant une bibliothèque JavaScript libre la communauté est très active sur les réseaux et contribue énormément aux mises à jour.<br>
                        - Toutes les mises à jours sont rédigé en détail sur github sous forme de release note.<br>
                        - Différents points abordé tels que le DOM virtuel, le DOM Serveur,le React Art, les tests de rendu et les test unitaire de la vue.
                        <br>
                        <br>



                        <center><strong>React 16.5.0 06/09/2018 :</strong></center>
                        <br>

                    </div>
                    <br>

                    <div style="text-align: left">
                       Après 1 mois en version 16.4.2 l'équipe de React décide de sortir la versions 16.5.0 une importante mise à jours qui se tourne vers prés de 47 points.<br>
                        Les points importants sur la version 16.5.0:<br>
                        - Ajout d'un avertissment si la fonction de rendu React.forwardRef ne prend pas exactement deux arguments.<br>
                        - Améliorer le message d'erreur lors du passage d'un élément à createElement par erreur.<br>
                        - Pour React DOM de nombreux bugs ont étaient corrigés ainsi que l'ajout du support pour React DevTools.<br>
                        - Pour React DOM Serveur Correction d'un crash quand setTimeout est manquant.<br>
                        - Nouveau package pour la planification coopérative de travaux dans un environnement de navigateur. React l'utilise en interne, mais son API publique n'est pas encore finalisée.<br>

                        <center><strong>React 16.5.1 13/09/2018 :</strong></center>
                        Les points importants sur la version 16.5.1:<br>
                        - Améliore l'avertissement lorsque React.forwardRef reçoit un nombre d'arguments inattendu.<br>
                        - Ajoute un point d’entrée de profilage distinct à la planification / suivi-profilage.<br>
                        - Correction d'une régression dans les exportations instables utilisées par React Native Web.<br>
                        <br>


                        <center><strong>React 16.6.0 23/10/2018 :</strong></center>
                        1 mois après la dernière mise à jour de la version 16.5.2 la version 16.6.0 est lancé.<br>
                        Les points importants sur la version 16.6.0:<br>
                        - Ajout React.memo () comme alternative à PureComponent pour les fonctions.<br>
                        - Ajout React.lazy () pour les composants de fractionnement de code.<br>
                        - Rename unstable_AsyncMode en unstable_ConcurrentMode.<br>
                        - Rename unstable_Placeholder en Suspense, et delayMs en maxDuration.<br>
                        - Correction de la superposition grise sur iOS Safari.<br>
                        <br>

                        <center><strong>React 16.7.0 19/12/2018 :</strong></center>
                        2 mois après la version 16.6.0 la version 16.7.0 est lancé<br>
                        Les points importants sur la version 16.7.0:<br>
                        - Correction des performances de React.lazy pour un grand nombre de composants chargés lentement.<br>
                        - Efface les champs surdémonter pour éviter les fuites de mémoire.<br>
                        - Correction d'un bug avec SSR et le contexte lors du mélange react-dom/server@16.6 et react @ <16.6.<br>
                        - Corrige une régression de performance en mode profilage.<br>
                        <br>

                        <center><strong>React 16.8.0 06/02/2019 :</strong></center>
                        2 mois après la version 16.7.0 la version 16.8.0 est lancé<br>
                        Les points importants sur la version 16.8.0:<br>
                        - Ajout des crochets - une façon d'utiliser l'état et d'autres fonctionnalités de React sans écrire de classe.<br>
                        - Améliorez l'API d'initialisation lente useReducer Hook.<br>
                        - Correction des rapports après avoir rencontré une boucle.<br>
                        - Prend en charge les éléments de synchronisation synchrones transmis à React.lazy ().<br>
                        <br>

                        <center><strong>React 16.9.0 03/04/2019 :</strong></center>
                        2 mois après la version 16.8.0 une note de la version 16.9.0 en alpha est sortie.<br>
                        Seul point sur l'alpha de la version 16.9.0:<br>
                        - (await act(async () => ...)<br>
                        <br>

                        <img src="img/Veille/ReactV16.9.0.png" align="center" height="1100" width="900">



                        <br>







                    </div>
                    <br>


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

	<script src="js/vendor/jquery-2.2.4.min.js "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q "
	 crossorigin="anonymous "></script>
	<script src="js/vendor/bootstrap.min.js "></script>
	<script type="text/javascript " src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA "></script>
	<script src="js/easing.min.js "></script>
	<script src="js/hoverIntent.js "></script>
	<script src="js/superfish.min.js "></script>
	<script src="js/mn-accordion.js "></script>
	<script src="js/jquery.ajaxchimp.min.js "></script>
	<script src="js/jquery.magnific-popup.min.js "></script>
	<script src="js/owl.carousel.min.js "></script>
	<script src="js/jquery.nice-select.min.js "></script>
	<script src="js/isotope.pkgd.min.js "></script>
	<script src="js/jquery.circlechart.js "></script>
	<script src="js/mail-script.js "></script>
	<script src="js/wow.min.js "></script>
	<script src="js/main.js "></script>
</body>

</html>