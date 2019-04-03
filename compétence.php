
<?php
require("header.php");
require("global.php");
?>

<?php
$req = $db->connection()->prepare('SELECT id, code, libelle FROM competence  ORDER BY code ASC');
$req->execute();
$rows = $req->rowCount();
?>
	<!-- Start Compétences Area Area -->
	<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Compétences</h2>
					</div>
				</div>
			</div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Preuve</th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 1; $i <= $rows; $i++) {

                    $data = $req->fetch();
                 ?>
                    <tr>
                        <th><?=$data['code']?></th>
                        <td><?=utf8_encode($data['libelle'])?></td>
                        <td><?=$data['id']?></td>
                    </tr>
                <?php

                        }
                ?>
                </tbody>
            </table
	</section>
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
</body>

</html>