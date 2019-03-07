
<?php
  require_once __DIR__ . "/_config/config_vars.php";
  require_once __DIR__ . "/classes/Conexao.php";
?>	
<!-- 

 //    $conn = new Conexao();
 // $sql = "SELECT URL_STREAM FROM config";
 //    $qry = $conn->prepare($sql);
 //    $qry->execute();
 //    $res = $qry->fetch();
 //    $urlStream = $res["URL_STREAM"];
?>
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Poiema Summer 2019</title>
	<meta name="description" content="O Summer é a nossa conferência de carnaval. De 1º a 5 de março a Poiema reúne ministros de louvor e pregadores no bloco da igreja mais animada da cidade">
	<meta name="keywords" content="poiema, poiema church, igreja poiema, poiema taubate, igreja poiema taubate, poiema taubaté, dema, abba church, ama, apoema, associação taubaté, leandro barreto, ministério morada, brunão morada, alessandro villas boas, one ministry, vitor azevedo, jason lee jones, poiema mogi das cruzes, poiema são josé dos campos, poiema timbó, poiema timbo sc, pleroma, poema, mevan, poiema online, shu, igreja do shu, shey, apoiema, church, poiemeiros, poiema music, poiema summer, summer, stream, carnaval, festa, celebração, igreja, ministros, março, cidade, taubaté, vale do paraíba, vale, verão, jesus, ">
	<meta name="robots" content="index, follow">
	<!-- <meta name="revisit-after" content="1 day"> -->
	<meta name="language" content="Portuguese">
	<meta name="generator" content="N/A">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Forçar atualização do cachê -->
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
	<link rel="manifest" href="./img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://www.youtube.com/iframe_api"></script>

	<!-- estilo do layout -->
	<link rel="stylesheet" type="text/css" href="./src/css/summer.css">	
</head>

<body class='poiema-body'>	
	<a href="<?php echo $Links["SiteOficial"]; ?>"><img src="img/logos/logo-poiema.png" alt="Poiema Church" class="poiema-brand"></a>

	<section class='poiema-title'>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 poiema-title-img">
					<img src="img/logos/logo-summer.png" alt="Poiema Summer" class="img-fluid mx-auto d-block poiema-brand-summer">
				</div>
			</div>
		</div>
	</section>

	<section class="poiema-stream">
		<div class="container">
			<div class="row">
				<div class="col-12 video-display">
					<div class="video-overlay mx-auto">
						<div class='opacity'></div>
						<form action="">
							<div class="row">
								<div class="col-sm-12 col-md-*  text-center">
									<h4>FIQUE POR DENTRO!</h4>
									<!-- <p class="horario">A partir das 19h!</p> -->
									<br>
									<p>Coloque o seu e-mail e fique por dentro de nossos eventos.</p>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-12 col-md-6 offset-md-3 text-center ">
									<input type="email" placeholder="E-mail" name="email" id="email" required>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6 offset-md-3 text-center mt-3">
									<button type="submit" id="btnEnviar">ENVIAR</button>
								</div>
							</div>
						</form>
					</div>
					<div class="embed-responsive embed-responsive-16by9">
						<!-- <iframe id="poiemastreamframe" src="<?php echo $urlStream; ?>" frameborder="0" allowfullscreen></iframe> -->
					</div>		
				</div>
			</div>
		</div>
	</section>

	<section class='container poiema-info mt-5'>
		<div class="row">
			<div class="col-sm-12 col-md-6 info-texto">
				<h3>INFORMAÇÕES</h3>
				<h1>POIEMA SUMMER 2019</h1>
				<p class="">O Summer é a nossa conferência de carnaval, onde reunimos ministros de louvor e pregadores no bloco da igreja mais animada da cidade. A edição deste ano foi incrível!</p>
				<p class="">E, se você não pôde estar aqui, a gente leva a festa até você!</p> 
				<p>Confira como esses dias foram incríveis em nossa playlist no <a href="https://youtube.com.br/poiemeiros" target="about_blank">YOUTUBE</a> e em nosso podcast no <a href="<?php echo $Links["SoundCloud"]; ?>" target="about_blank">SOUNDCLOUD.</a> </p>
				<p>Aproveite e confira nossas edições anteriores do <a href="https://www.youtube.com/playlist?list=PLc66QJZzOfqnLrL40AZdcUdfIvW4vtl75" target="about_blank">Summer de 2018 e 2017.</a></p>
				
				<p class="">Compartilha com a galera e não perde essa.</p>				
			</div>
			<div class="col-sm-12 col-md-6 info-texto-img">
				<img src="img/summer-banner.jpg" alt="Poiema Summer 2019" class="img-fluid">
			</div>
		</div>
	</section>
	
	<section class='container poiema-network'>
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-center">CONFIRA O QUE ROLOU POR AQUI!</h2>
				<a href="<?php echo $Links["Instagram"]; ?>" target="about_blank"><img src="img/icons/instagram-roxo.png" alt="INSTAGRAM POIEMEIROS" class="media-icon"></a>
				<a href="<?php echo $Links["Youtube"]; ?>" target="about_blank"><img src="img/icons/youtube-roxo.png" alt="YOUTUBE POIEMEIROS" class="media-icon"></a>
			</div>
		</div>
	</section>

	<footer class='no-gutter poiema-footer'>
		<div class="fluid-container">
			<div class="row no-margin">
				<div class="no-gutter col-sm-5 col-md-3 col-lg-3 text-md-center text-md-left copyright">
					<p>Copyright © 2019 <a href="<?php echo $Links["SiteOficial"]; ?>">Poiema</a> </p>
				</div>
				<div class="col-sm-6 offset-sm-1 col-md-8 col-lg-8 text-sm-center text-md-right">
					<a href="<?php echo $Links["Instagram"]; ?>" target="about_blank"><img src="img/icons/instagram.png" alt="INSTAGRAM POIEMEIROS" class="media-icon"></a>
					<a href="<?php echo $Links["Youtube"]; ?>" target="about_blank"><img src="img/icons/youtube.png" alt="YOUTUBE POIEMEIROS" class="media-icon"></a>
					<a href="<?php echo $Links["Facebook"]; ?>" target="about_blank"><img src="img/icons/facebook.png" alt="YOUTUBE POIEMEIROS" class="media-icon"></a>
					<a href="<?php echo $Links["SoundCloud"]; ?>" target="about_blank"><img src="img/icons/soundcloud.png" alt="YOUTUBE POIEMEIROS" class="media-icon"></a>
				</div>
			</div>
		</div>
	</footer>
	
	<script>
		$(function () {
			$("form").on('submit', function (e) {
				e.preventDefault();
				var form = $(this);
				var url = form.attr('action');
				$.ajax({
					type: "POST",
					url: "./controller/inscricao",
					data: form.serialize(),
					dataType: "JSON",
					beforeSend: function(){
						$("#btnEnviar").html('Enviando e-mail...');
					},
					success: function (response) {
						if (response.valid) {
							$("#btnEnviar").html('Cadastro com Sucesso!');
						}
					}
				});
			});
		});
	</script>
</body>
</html>