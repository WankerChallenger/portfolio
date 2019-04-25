
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
                        <td><a href="#demo<?=$data['id']?>" data-toggle="collapse">Preuve</a></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="demo<?=$data['id']?>" class="collapse">
                                <p>Clement le boss</p>


                            </div>
                        </td>
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
<script src="js/vendor/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>