
<?php
require("header.php");
require("global.php");
?>

<?php
$req = $db->connection()->prepare('SELECT id, code, libelle FROM competence  ORDER BY code ASC');
$req->execute();
$rows = $req->rowCount();
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	<!-- Start Compétences Area Area -->
<div class="container">
    <div class="row feature_inner">

        <h4 class="title">Liste des compétences</h4>
        <table class="table table-striped table-bordered">

            <thead>
            <tr >
                <th>Code</th>
                <th>Compétence</th>
                <th>preuve</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th> C1.1.1.1  </th>
                <th> Recenser et caractériser les contextes d'utilisation, les processus et les acteurs sur lesquels le service à produire aura un impact </th>
                <td><a href="#demo1" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo1" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans la cadre de la création de la documentation technique nous avons mis en place un diagramme de cas d'utilisation pour recenser tout les acteurs et les contextes d'utilisation                                  <br>

                        </p>
                        <center>  <img src="img/screenshots/diagramme.png" height="700" width="800"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C.1.1.1.2  </th>
                <th> Identifier les fonctionnalités attendues du service à produire</th>
                <td><a href="#demo2" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo2" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Pendant mon stage chez BBND, j'ai dû étudier comment a été programmer l'application Fidscan afin de pouvoir comprendre le mécanisme du QR Code ainsi que les autres fonctionnalités pour cela j'ai eu le droit à un "Cahiers des charges" de l'application avec les ajouts à faire ainsi que ce qui doit être corrigé                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/CDCfidscan.png"> </center>
                        <p>
                            Stage BBND                               </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C.1.1.1.3  </th>
                <th>  Préparer sa participation à une réunion
                         Rédiger un compte-rendu d’entretien, de réunion </th>
                <td><a href="#demo3" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo3" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            J'ai eu l'occasion de m'entretenir lors de réunion avec l'équipe de chez BBND mais aussi lors de mon stage de première année puisque j'ai du analyser les besoins de la directrice afin de cibler précisément ce qu'elle voulais.                                    <br>

                        </p>
                        <img src="img/screenshots/comptrenduBBND.png" align="left">
                        <img src="img/screenshots/ComptrenduSatim.png" align="center">
                        <img src="img/screenshots/CRLVF.png" align="right">
                        <p>
                                                            </p>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.1.1  </th>
                <th> Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une solution existante ou réalisation d’une nouvelle)</th>
                <td><a href="#demo4" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo4" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Pendant mon stage chez BBND j'ai du reprendre le code d'un ancien employé sur l'application Fidscan, ce qui a était compliqué j'ai alors décidé de refaire l'interface entiérement.<br>
                            J'ai du aussi lors de mon stage à La Villa Fleurie choisir entre faire un site vitre de zéro ou utiliser un éditeur de site web afin de proposer la solution la plus adpaté aux besoins<br>

                        </p>
                        <img src="img/screenshots/fid.png" align="left">
                        <img src="img/LVF/wix.png" align="left" height="500" width="900">

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.1.2 </th>
                <th> Estimer le coût d’une solution </th>
                <td><a href="#demo5" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo5" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de mon stage à La Villa Fleurie après avoir choisie la solution la plus adapté ( éditeur de site web ) j'ai du exposer les prix en expliquant ce que comporter les forfaits                                     <br>

                        </p>
                        <center>  <img src="img/screenshots/wixprix.png" height="600"width="1200"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.1.3  </th>
                <th>  Rédiger un dossier de choix et un
                    argumentaire technique </th>
                <td><a href="#demo6" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo6" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE nous avons mis en place une documentation contenant un argumentaire technique                                      <br>

                        </p>
                        <img src="img/screenshots/DossTech.png">
                        <img src="img/screenshots/Contrainte.png">

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.2.2  </th>
                <th> Décrire l’implantation des différents composants de la solution et les échanges entre eux </th>
                <td><a href="#demo7" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo7" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de la mise en place de la documentation technique nous avons du étudier les différents composant et interaction entre elles.<br>
                            <img src="img/screenshots/Contrainte.png">


                        </p>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.4.2  </th>
                <th> Préparer les jeux d’essai et les procédures pour la réalisation des tests </th>
                <td><a href="#demo9" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo9" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre du PPE mais aussi dans le cadre de mon stage chez BBND j'ai du effectué des tests afin de verifier si mes données étaient correctement entré dans la base de donnée<br>

                        </p>
                        <img src="img/screenshots/testBBND.png">
                        <img src="img/screenshots/testPPE.png">

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.2.5.1  </th>
                <th> Recenser les utilisateurs du service, leurs rôles et leur niveau de responsabilité </th>
                <td><a href="#demo10" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo10" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE nous avons du mettre en place un système de niveau entre utilisateurs                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/testPPE.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.3.1.2  </th>
                <th> Tester le service </th>
                <td><a href="#demo11" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo11" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de l'application Fidscan j'ai du mettre en place des tests de connexion à la base de donnée avec en cas d'erreur un message sous forme de Pop-up                                    <br>

                        </p>
                        <center>  <img src="img/BBND/dbconnectfidmodif.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.4.1.1  </th>
                <th> Établir son planning personnel en fonction des exigences et du déroulement du projet </th>
                <td><a href="#demo12" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo12" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE de deuxième année nous avons mis en place un système de gestion de planning utilisant GANTT qui nous permet de gérer les temps de développement associer à chaque tâche par personne.                                     <br>

                        </p>
                        <center>  <img src="img/screenshots/gantt.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C1.4.1.2 </th>
                <th> Rendre compte de son activité </th>
                <td><a href="#demo13" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo13" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de mon stage chez BBND je faisait un récapitulatif de mes journées afin de pouvoir montrer à mon tuteur l'état de mon avancement mais aussi pour garder une certaine assiduité.                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/rndact.png"height="900"width="900"> </center>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C2.1.1.1  </th>
                <th> Aider les utilisateurs dans l’appropriation du nouveau service </th>
                <td><a href="#demo14" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo14" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de mon stage à La Villa Fleurie j'ai du transmettre les logs admin du site web à la directrice j'ai du donc aussi lui expliquer comment se connecter.                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/connwix.png"> </center>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C2.1.1.2  </th>
                <th>  Identifier des besoins de formation complémentaires </th>
                <td><a href="#demo15" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo15" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le but de la mise en place d'une pointeuse à empreinte digital en réseau j'ai du prendre le temps d'expliquer au personnel son fonctionnement mais j'ai du aussi leur expliquer comment enregistrer leur empreinte afin de pointer leur départ et leur arrivé
                        </p>
                        <center>  <img src="img/screenshots/pointeuse.jpg"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C2.1.2.5  </th>
                <th> Contrôler la confidentialité et l’intégrité des
                    données </th>
                <td><a href="#demo16" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo16" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE comme l'utilisateur s'inscrit à l'aide de son adresse mail ainsi que d'un mot de passe nous avons mit en place une solution de Hachage de mot de passe                                     <br>

                        </p>
                        <img src="img/screenshots/Hashmdp.png">
                        <img src="img/screenshots/Hashmdp2.png">

                    </div>
                </td>
            </tr>
            <tr>
                <th> C2.2.1.1 </th>
                <th> Résoudre l’incident en s’appuyant sur une base de connaissances et la documentation associée ou solliciter l’entité compétente </th>
                <td><a href="#demo17" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo17" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Lors du développement de l'application Fidscan pendant mon stage chez BBND j'ai était conforonté à certaines erreurs que j'ai du corriger.                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/erreurfidscan.png"height="700"width="1500"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C2.2.1.2  </th>
                <th> Prendre le contrôle d’un système à distance </th>
                <td><a href="#demo18" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo18" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de mon stage à La Villa Fleurie mais aussi à Satim j'ai du recourir plusieurs fois à la prise de controle d'un système à distance                                     <br>

                        </p>
                        <center>  <img src="img/screenshots/TVpreuve.png"> </center>
                        <center>  <img src="img/screenshots/TVpreuve2.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.2.2 </th>
                <th> Maquetter un élément de la solution applicative </th>
                <td><a href="#demo19" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo19" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre du PPE de deuxième année nous avons fait une maquette de la solution que nous devions proposer                                     <br>

                        </p>
                        <center>  <img src="img/screenshots/maquette.png"> </center>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.3.1  </th>
                <th> Modéliser le schéma de données nécessaire à la mise en place de la solution applicative </th>
                <td><a href="#demo20" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo20" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre du développement du site de marieteam nous avons dû modéliser une base de données adapter en notre solution web                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/mcd.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.3.4  </th>
                <th> Manipuler les données liées à la solution applicative à travers un langage de requête </th>
                <td><a href="#demo21" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo21" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Lors du développement de l'application Fidscan j'ai du effectué des requêtes d'insertion dans la base de donnée                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/reqfidscan.png" height="900"width="1300"> </center>
                        <br>
                        <center>  <img src="img/screenshots/reqfid2.png" align="left"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.6.1  </th>
                <th> Mettre en place et exploiter un environnement de développement </th>
                <td><a href="#demo22" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo22" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre du PPE nous avons du travailler en équipe nous avons donc pris la décision de travailler avec un environnement github pour gérer la mis en place des versions du site web et des différentes tache de chacun, nous avons également mis en place un développement continue utilisant PHPstorm pour mettre en place un développement continue
                            simple d'utilisation avec github grâce au système de push, pull, commit et branch proposer par phpstorm                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/github.png"height="900"width="1400"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.7.2  </th>
                <th> Créer un composant logiciel</th>
                <td><a href="#demo23" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo23" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre du développement de l'application Fidscan j'ai du développer le contenu des pages avec des champs à remplir avec l'information demandé                                  <br>

                        </p>
                        <center>  <img src="img/screenshots/page1fidscan.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.1.9.1  </th>
                <th> Produire ou mettre à jour la documentation technique d’une solution applicative et de ses composants logiciels </th>
                <td><a href="#demo24" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo24" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE nous avons mis en place une documentation technique qui relate les composants logiciels du site web                                    <br>

                        </p>
                        <center>  <img src="img/screenshots/DossTech.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C4.2.4.1  </th>
                <th> Repérer les éléments de la documentation à mettre à jour </th>
                <td><a href="#demo25" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo25" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de la mise en place de l'application Fidscan des CGU sont à mettre à jour et à finir.                                     <br>

                        </p>
                        <center>  <img src="img/screenshots/cgufid.png"height="900"width="1200"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.1.1.2  </th>
                <th>  Paramétrer une solution de gestion des éléments d’une configuration </th>
                <td><a href="#demo26" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo26" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre projet en PPE nous avons du configurer un outil de gestion des configurations                                     <br>
                        </p>
                        <center>  <img src="img/screenshots/glpi.png"> </center>
                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.1.2.2  </th>
                <th>  Actualiser les caractéristiques des éléments de la configuration </th>
                <td><a href="#demo27" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo27" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE nous avons du modifier notre machine GLPI et l'actualiser pour le projet MarieTeam                                     <br>
                        </p>
                        <center>  <img src="img/screenshots/glpi2.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.1.3.3  </th>
                <th>  Identifier les éléments de la configuration à modifier ou à remplacer </th>
                <td><a href="#demo28" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo28" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre de notre PPE nous avons identifier les éléments de la configuration à remplacer que nous avons saisie dans nos test soit IBM et Transpole                                     <br>
                        </p>
                        <center>  <img src="img/screenshots/glpi2.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.2.2.2  </th>
                <th>  Tenir à jour une liste de sources d'information </th>
                <td><a href="#demo29" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo29" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre d'une veille technologique j'ai du tenir à jour mes sources d'information je me suis dirigé après quelques recherche sur le site Feedly ainsi que sur le GitHub de React                                     <br>
                        </p>
                        <center>  <img src="img/Veille/feedly.png"width="1000"> </center>
                        <br>
                        <center>  <img src="img/Veille/Gitreact.png"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.2.2.3  </th>
                <th>  Évaluer la qualité d'une source d'information en
                    fonction d'un besoin </th>
                <td><a href="#demo30" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo30" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre d'une veille technologique j'ai du évaluer la qualité de la source de l'information qui est de très bonne qualité étant diffuser par l'équipe de ce projet via les release notes                                    <br>
                        </p>
                        <center>  <img src="img/Veille/releasereact.png"height="900"width="1200"> </center>

                    </div>
                </td>
            </tr>
            <tr>
                <th> C5.2.2.4  </th>
                <th>  Synthétiser et diffuser les résultats d'une veille
                    fonction d'un besoin </th>
                <td><a href="#demo31" data-toggle="collapse">Preuve</a></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="demo31" class="collapse">
                        <!-- include(../proof/pr.$data['id']) -->
                        <p>
                            Dans le cadre d'une veille technologique pendant le BTS SIO j'ai synthétisé et diffusé les résultats de celle-ci sur ce site web http://localhost/redE6/angular.php                                    <br>
                        </p>
                        <center>  <img src="img/Veille/releasereact.png"height="900"width="1200"> </center>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
	<!-- End Compétences Area Area -->


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
<script src="js/vendor/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>