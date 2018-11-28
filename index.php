<?php
// Set The Project Directory in Here
$dir    	= '/opt/lampp/htdocs/';
$hosting 	= 'http://192.168.168.102/'
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Adexe Landing
	</title>
	<link href="landing/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="landing/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<link href="landing/BreeSerif-Regular.ttf" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="landing/animate.min.css">
	<style type="text/css">
		#particles-js {
			position: absolute;
			width: 100%;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 50% 50%;
		}
		a:visited, a:link, a:active {
			text-decoration: none;
			color: black;
		}
		a:hover {
			color: grey;
		}
		.header {
			padding-top: 30px;
		}
		@font-face {
   	    	font-family: PincoyaBlack;
    		src: url("landing/pincoyablack.otf") format("opentype");
		}

		@font-face {
   	    	font-family: Gummy;
    		src: url("landing/Gummy.ttf") format("opentype");
		}

		@font-face {
   	    	font-family: GummyBook;
    		src: url("landing/GummyBook.ttf") format("opentype");
		}

		h1{
			font-family: 'Gummy';
		}


		p{
			font-family:'PincoyaBlack';
			font-size: 20px;
		}

	</style>
</head>
<body style="background-color: #2f2f2f">
	<section style="position: fixed; margin: 0px; width: 100%; height: 100%;">
		<?php
		$no = 1;
		$files2  = array_diff(scandir($dir), array('..', '.'));
				?>
		<div id="particles-js"></div>
		<div class="container">
			<div class="col-sm-12 col-md-8 col-md-push-2">
				<div class="panel panel-default" style="margin-top: 30px;">
					<div class="panel-body">
						<div class="row header text-center">
							<div class="col-md-12 col-sm-12">
								<a href="<?php echo $hosting; ?>">
									<h1 class="tlt" style="margin-top: 0px;">
										Adexe Server
									</h1>
								</a>
								<p>
									-- SELECT YOUR WORLD --
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<table class="table table-striped table-hover" id="tableku">
									<thead>
										<tr class="info text-center">
											<th>
												No
											</th>
											<th>
												Nama Project
											</th>
											<th>
												Tanggal
											</th>
											<th style="width: 100px;">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($files2 as $fl) {
											if (is_dir($fl) && $fl != 'xampp') {
												?>
												<tr>
													<td>
														<?php echo $no++; ?>
													</td>
													<td>
														<?php echo $fl; ?>
													</td>
													<td>
							<?php echo date ("d F Y", filectime($dir.$fl)); ?>
													</td>
													<td>
														<a class="btn btn-info btn-sm" href="<?php echo $hosting.$fl; ?>" style="width: 100%;" target="_blank">
															Visit
														</a>
													</td>
												</tr>
												<?php
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="landing/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="landing/jquery.lettering-0.6.1.min.js"></script>
<script type="text/javascript" src="landing/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="landing/particles.min.js"></script>
<script type="text/javascript">

	$('#tableku').DataTable({
		"dom": '<"pull-left"f>tip',
		"paging": true,
		"lengthChange": false,
		"lengthMenu": [6],
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	});
	
	function particle() {
		particlesJS("particles-js", 
		{
			"particles": {
				"number": {
					"value": 100,
					"density": {
						"enable": true,
						"value_area": 750
					}
				},
				"color": {
					"value": "#ffffff"
				},
				"shape": {
					"type": "circle",
					"stroke": {
						"width": 3,
						"color": "#ffffff"
					},
					"polygon": {
						"nb_sides": 6
					},
					"image": {
						"src": "img/github.svg",
						"width": 100,
						"height": 100
					}
				},
				"opacity": {
					"value": 0.5,
					"random": false,
					"anim": {
						"enable": false,
						"speed": 1,
						"opacity_min": 0.1,
						"sync": false
					}
				},
				"size": {
					"value": 3,
					"random": true,
					"anim": {
						"enable": false,
						"speed": 40,
						"size_min": 0.1,
						"sync": false
					}
				},
				"line_linked": {
					"enable": true,
					"distance": 150,
					"color": "#ffffff",
					"opacity": 0.4,
					"width": 1
				},
				"move": {
					"enable": true,
					"speed": 6,
					"direction": "none",
					"random": false,
					"straight": false,
					"out_mode": "out",
					"bounce": false,
					"attract": {
						"enable": false,
						"rotateX": 600,
						"rotateY": 1200
					}
				}
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": {
					"onhover": {
						"enable": true,
						"mode": "grab"
					},
					"onclick": {
						"enable": true,
						"mode": "repulse"
					},
					"resize": true
				},
				"modes": {
					"grab": {
						"distance": 400,
						"line_linked": {
							"opacity": 1
						}
					},
					"bubble": {
						"distance": 400,
						"size": 40,
						"duration": 2,
						"opacity": 8,
						"speed": 3
					},
					"repulse": {
						"distance": 200,
						"duration": 0.4
					},
					"push": {
						"particles_nb": 4
					},
					"remove": {
						"particles_nb": 2
					}
				}
			},
			"retina_detect": true

		});
	}
	particle();

</script>
</html>