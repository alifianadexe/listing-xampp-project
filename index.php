<?php
// Set The Project Directory in Here
$dir    	= '/opt/lampp/htdocs/';
$hosting 	= 'http://192.168.168.102/';
	
				
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
	<link href="landing/Roboto-Regular.ttf" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="landing/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="landing/animate.css">
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

		@font-face {
   	    	font-family: Roboto;
    		src: url("landing/Roboto-Regular.ttf") format("opentype");
		}

		h1{
			font-family: 'Gummy';
		}


		.pantek{
			font-family:'PincoyaBlack';
			font-size: 20px;
		}

		p{
			font-family:'Roboto';
			
		}

		.button-setting{
			padding: 5px;
			position: fixed;
			z-index: 999;

		}
		.song-list{
			padding: 5px;
			position: fixed;
			z-index: 999;
			bottom: 0px;
		}


	</style>
</head>
<body style="background-color: #69b0d7">
	<div class="button-setting">
		<button  id="soundku" class="btn btn-sm" style="background-color: #2f2f2f;color:#fff;" >Pause</button>
		<button  id="hideku" class="btn btn-sm" style="background-color: #2f2f2f;color:#fff; color:#fff;" >If you want give up, click this!</button>
		<!-- <a href="landing/music/01. Piano no Mori.mp3" class="btn btn-sm btn-danger" style="color:#fff;" >Download</a> -->
	
		
		
	</div>
	<div class="song-list">
		<select id="list_song" class="form-control" style="bottom:0px;background-color: #2f2f2f;color:#fff;margin-top:5px; ">
			<option style="text-align: center">List Song</option>
			<?php
				$music = '/opt/lampp/htdocs/landing/music';
				$files3  = array_diff(scandir($music), array('..', '.'));
				foreach ($files3 as $key => $value):
			?>	

			<option value="landing/music/<?php echo $value; ?>"><?php echo $value; ?></option>
			<?php 
				endforeach;
			?>
		</select>
	</div>
	<div >
		<audio class="music-background" src="landing/pianomori.mp3" >
			<p>If you are reading this, it is because your browser does not support the audio element.     </p>
		</audio>
	</div>
	
	<section  style="position: fixed; margin: 0px; width: 100%; height: 100%;">

		<?php
		$no = 1;
		$files2  = array_diff(scandir($dir), array('..', '.'));
				?>
		<div id="particles-js"></div>

		<div id="seksi" class="container">
			<div class="col-sm-12 col-md-8 col-md-push-2">
				<div class="panel panel-default" style="margin-top: 30px;">
					<div class="panel-body">
						<div class="row header text-center">
							<div class="col-md-12 col-sm-12">
								<a href="<?php echo $hosting; ?>">
									<h1 style="margin-top: 0px;">
										Adexe Server
									</h1>
								</a>
					
									<p class="peringatan">Use  headset for a better experience</p>
					
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
<script type="text/javascript" src="landing/jquery.textillate.js"></script>
<script type="text/javascript" src="landing/particles.min.js"></script>
<script type="text/javascript">

	var lastRandom = 0;
	$(document).ready(function(){
	  $("#hideku").click(function(){
	    $("#seksi").toggle(2000,"swing");
	    makeRandomWord()
	  });
		
	  playRandom(1);
	
	});

	$(function () {
		$('.peringatan').textillate({ in: { effect: 'fadeIn' }, out: { effect: 'fadeOut' } });
	});
	
	

	function makeRandomWord(){
	    var divsize = ((Math.random()*100) + 50).toFixed();
	    //var color = '#'+ Math.round(0xffffff * Math.random()).toString(16);
	    
	    $newWord = $('<p/>').css({
	        'font-size':'40px',
	        'color': '#fff'
	    });
	    
	    var words = ['u the best','i love u','keep trying',"don't give up",'there is still a chance', 'do it better','stay positive',"don't be sad","one more chance","be honest","lot of people loving u",'u are what u are','anyone have chance to be happy','be happy','everyone love u'];

	    
		var random = Math.floor(Math.random() * words.length);
		if(random == lastRandom){
			random = Math.floor(Math.random() * words.length);
			if(random == lastRandom){
				random = Math.floor(Math.random() * words.length);
			}
		}
	   		
		lastRandom = random;

	    var text = words[random]
		

	    $newWord.text(text);
	    
	    var posx = (Math.random() * ($(document).width() - divsize)).toFixed();
	    var posy = (Math.random() * ($(document).height() - divsize)).toFixed();
	    
	    $newWord.css({
	        'position':'absolute',
	        'left':posx+'px',
	        'top':posy+'px',
	        'display':'none'
	    }).appendTo( 'body' ).fadeIn(900).delay(2000).fadeOut(1000, function(){
	       $(this).remove();
	       makeRandomWord(); 
	    }); 
	};

	$('#soundku').click(function() {
    if ($('.music-background').get(0).paused == false) {
        $('.music-background').get(0).pause();
       		$(this).text('Play');
    	}else{
        $('.music-background').get(0).play();
       		$(this).text('Pause');
    	}
	});

	$('#list_song').on('change',function(){
		console.log($(this).val());

		 var sourceUrl = $(this).val();
		
		 $(".music-background").attr("src", sourceUrl);
		 $('.music-background').get(0).load();
		 $('.music-background').get(0).oncanplaythrough = $('.music-background').get(0).play();
	});


	$('.music-background').get(0).addEventListener("ended", function(){
     	 $('.music-background').get(0).currentTime = 0;
    	 console.log("ended");
    	 playRandom();
	});

	function playRandom(awal = false){
		 var jumlah = $('#list_song option').length;
		 var jadi = 1;

		 if(awal){
		 	jadi = awal;
		 }else{
		 	jadi = 1 + Math.floor(Math.random() * (jumlah-1));
		 }

		 console.log(jadi);

		 var iki = $('#list_song option').eq(jadi).val();
		 $('#list_song').val(iki).trigger('change');
	}

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
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "star",
      "stroke": {
        "width": 0,
        "color": "#ffffff"
      },
      "polygon": {
        "nb_sides": 11
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
      "value": 8,
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
      "distance": 236.74429248968178,
      "color": "#ffffff",
      "opacity": 0,
      "width": 0
    },
    "move": {
      "enable": true,
      "speed": 5,
      "direction": "top-right",
      "random": true,
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
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
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