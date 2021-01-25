<?php include "components/header.php"; ?>
<?php $page=4; include "components/navigation.php"; ?>

<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner text-center rounded">
					<h2 class="section-heading mb-5">
						<span class="section-heading-upper">ENTRA</span>
						<span class="section-heading-lower">Estem oberts</span>
					</h2>
					<ul class="list-unstyled list-hours mb-5 text-left mx-auto">
						<li class="list-unstyled-item list-hours-item d-flex">
							Sunday
							<span class="ml-auto">Closed</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Monday
							<span class="ml-auto">7:00 AM to 8:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Tuesday
							<span class="ml-auto">7:00 AM to 8:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Wednesday
							<span class="ml-auto">7:00 AM to 8:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Thursday
							<span class="ml-auto">7:00 AM to 8:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Friday
							<span class="ml-auto">7:00 AM to 8:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Saturday
							<span class="ml-auto">9:00 AM to 5:00 PM</span>
						</li>
					</ul>
					<p class="address mb-5">
						<em>
							<strong>Av. Granvia #LHospitalet 22</strong>
							<br>
							Hospitalet, Barcelona
						</em>
					</p>
					<p class="mb-0">
						<small>
							<em>Truca en qualsevol moment</em>
						</small>
						<br>
						(317) 585-8468
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section about-heading">
	<div class="container">
		<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
		<div class="about-heading-content">
			<div class="row">
				<div class="col-xl-9 col-lg-10 mx-auto">
					<div class="bg-faded rounded p-5">
						<h2 class="section-heading mb-4">
							<span class="section-heading-upper">LA NOSTRA PROMESA</span>
							<span class="section-heading-lower">A TU</span>
						</h2>
						<p class="mb-0">COMAREA Cuina L’Hocal</p>
						<p class="mb-0">* Cuina L'Hocal [👩🏻‍🍳Cuinem producte local amb L'Hove ❤️]</p>
						<p class="mb-0">* Producte fresc i temporada</p>
						<p class="mb-0">🗣 Av. Granvia #LHospitalet 22 [Hotel EASY]</p>
						<p class="mb-0">#ComareaLHocal</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "components/footer.php"; ?>

<!-- Script to highlight the active date in the hours list -->
<script>
	$('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

<?php include "components/close.php"; ?>
