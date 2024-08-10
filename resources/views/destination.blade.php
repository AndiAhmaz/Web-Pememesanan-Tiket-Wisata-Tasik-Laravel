@extends('layouts.main')

@section('front-end')
				<x-front-navbar></x-front-navbar>

				<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/destinasi.png');">
								<div class="overlay"></div>
								<div class="container">
												<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
																<div class="col-md-9 ftco-animate pb-5 text-center">
																				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
																																				class="fa fa-chevron-right"></i></a></span> <span>Destination <i
																																class="fa fa-chevron-right"></i></span></p>
																				<h1 class="mb-0 bread">Destination</h1>
																</div>
												</div>
								</div>
				</section>

				<section class="ftco-section">
								<div class="container">
								<div class="row">
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/kawah.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Kawah Gunung Galunggung</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Desa Linggajati, Kabupaten Tasikmalaya, Jawa Barat</p>
																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/cipanas.jpg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Cipanas Gunung Galunggung</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Desa Linggajati, Kabupaten Tasikmalaya, Jawa Barat</p>

																								</div>
																				</div>
																</div>
																<div class="col-md-4 ftco-animate">
																				<div class="project-wrap">
																								<a class="img" style="background-image: url(images/curug.jpeg);">
																								</a>
																								<div class="text p-4">
																												<h3><a>Curug Galunggung</a></h3>
																												<p class="location"><span class="fa fa-map-marker"></span> Desa Linggajati, Kabupaten Tasikmalaya, Jawa Barat</p>

																								</div>
																				</div>
																</div>
												</div>
												<div class="row mt-5">
																<div class="col text-center">
																				<div class="block-27">
																				</div>
																</div>
												</div>
								</div>
				</section>


				<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
								<div class="container">
												<div class="row mb-5">
																<div class="col-md pt-5">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">About</h2>
																								<p>Visit Tasik website pemesanan tiket kawasan wisata Gunung Galunggung yang dibuat sesuai dengan kebutuhan pengguna kami.</p>
																								<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
																												<li class="ftco-animate"><a href="https://x.com/andy_parawali" target="_blank"><span
																																								class="fa fa-twitter"></span></a></li>
																												<li class="ftco-animate"><a href="https://www.instagram.com/andy_parawali"
																																				target="_blank"><span class="fa fa-facebook"></span></a></li>
																												<li class="ftco-animate"><a href="https://web.facebook.com/andhiey64.co.id" target="_blank"><span
																																								class="fa fa-instagram"></span></a></li>
																								</ul>
																				</div>
																</div>
																<div class="col-md pt-5 border-left">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">Wisata Gunung Galunggung</h2>
																								<ul class="list-unstyled">
																												<li><a class="py-2 d-block">Kawah Gunung Galunggung</a></li>
																												<li><a class="py-2 d-block">Cipanas Gunung Galunggung</a></li>
																												<li><a class="py-2 d-block">Curug Gunung Galunggung</a></li>
																												
																								</ul>
																				</div>
																</div>
																<div class="col-md pt-5 border-left">
																				<div class="ftco-footer-widget pt-md-5 mb-4">
																								<h2 class="ftco-heading-2">Have a Questions?</h2>
																								<div class="block-23 mb-3">
																												<ul>
																																<li><span class="icon fa fa-map-marker"></span><span class="text">Desa Linggajati, Kabupaten Tasikmalaya, Jawa Barat.</span></li>
																																<li><a href="https://wa.me/6285711384541?text=Ingin%20Melaporkan%20Masalah"><span
																																												class="icon fa fa-whatsapp"></span><span class="text">085711384541 Andy (Admin)
																																												</span></a></li>
													
																																												
																												</ul>
																								</div>
																				</div>
																</div>
												</div>
												<div class="row">
																<div class="col-md-12 text-center">

																				<p>
																								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																								Visit Tasik &copy;
																								<script>
																												document.write(new Date().getFullYear());
																								</script>
																								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																				</p>
																</div>
												</div>
								</div>
				</footer>



				<!-- loader -->
				<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
												<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																stroke="#eeeeee" />
												<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																stroke-miterlimit="10" stroke="#F96D00" />
								</svg></div>
@endsection
