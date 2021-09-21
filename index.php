<?php 
	/* CONFIG */
	$url = "https://penantian.com/";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Generate URL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../generate_url/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../generate_url/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../generate_url/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../generate_url/css/AdminLTE.min.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/iCheck/square/blue.css"> -->
  <style type="text/css">
  	.login-page, .register-page {
	    height: auto;
	    background: #8f43a0;
	}

	.btn-primary {
        background-color: #8f43a0;
        border-color: #8f43a0;
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-primary.dropdown-toggle:focus,
    .btn-primary.focus,
    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(219, 105, 79, .5);
    }

   	.btn-primary:not(:disabled):not(.disabled).active,
   	.btn-primary:not(:disabled):not(.disabled):active,
   	.show>.btn-primary.dropdown-toggle,
   	.btn-primary.focus,
   	.btn-primary:focus,
   	.btn-primary:hover {
   	    color: #fff;
   	    background-color: #8f43a0;
   	    border-color: #8f43a0;
   	}

   	.boldLabel {
   		font-size: 15px !important;
	}

	b, strong {
		font-weight: 900 !important;
	}

	.widthField {
		margin-bottom: 15px;
	}

	input::-webkit-input-placeholder,
	textarea::-webkit-input-placeholder {
	  color: #cdcdcd !important;
	}
	input:-moz-placeholder,
	textarea:-moz-placeholder {
	  color: #cdcdcd !important;
	}
	input::-moz-placeholder,
	textarea::-moz-placeholder {
	  color: #cdcdcd !important;
	}
	input:-ms-input-placeholder,
	textarea:-ms-input-placeholder {
	  color: #cdcdcd !important;
	}

  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color: white;"><center><image style="max-width: 20%;" class="img-responsive" src="../generate_url/image/logo.png"></center></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="margin-bottom: 20px;">
    <form method="post">
    	<?php
    		$namaUndanganID = $_GET['ID'];

    		if(!isset($namaUndanganID)){
    	?>
    	<div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Nama Undangan</strong> <strong style="color: red;">*</strong></label>
	        <input type="text" id="fNamaUndangan" required="" class="form-control" placeholder="AnjaniReza">
	    </div>
	    <?php
	    	}else{
	    ?>
	    <div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Nama Undangan</strong> <strong style="color: red;">*</strong></label>
	        <input type="text" id="fNamaUndangan" readonly="" value="<?php echo $namaUndanganID; ?>" class="form-control" placeholder="AnjaniReza">
	    </div>
	    <?php
	    	}
	    ?>
	    <div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Template Ucapan</strong> <strong style="color: red;">*</strong></label>
    		<textarea class="form-control" id="fUcapan" rows="17" required="">
Selamat pagi/siang/sore/malam

Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami.

Informasi mengenai acara secara keseluruhan bisa dilihat melalui:

{Alamat-Undangan}

Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa.

Hormat kami,
Nama Mempelai
    		</textarea>
	    </div>
	    <div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Nama Tamu</strong> <strong style="color: red;">*</strong></label>
	        <input type="text" required="" id="fNamaTamu" class="form-control" placeholder="Vanesha dan Keluarga">
	    </div>
	    <div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Alamat / Sesi</strong></label>
	        <input type="text" id="fAlamatSesi" class="form-control" placeholder="di Jakarta">
	    </div>
	    <div class="row widthField">
	    	<div class="col-md-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat" id="generateUrl">Buat URL</button>
	        </div>
	    </div>
	    <div class="form-group has-feedback widthField">
    		<label><strong class="boldLabel">Hasil URL</strong></label>
	        <input type="text" readonly="" id="hasilUrl" class="form-control" placeholder="">
	    </div>
	    <div class="row widthField">
	        <div class="col-xs-4">
	        	<button type="button" class="btn btn-primary btn-block btn-flat" id="btnCopy">Copy URL</button>
	        </div>
	        <div class="col-xs-4">
	        	<button type="button" class="btn btn-primary btn-block btn-flat" id="btnCopyAll">Copy All</button>
	        </div>
	        <div class="col-xs-4">
	        	<button type="button" class="btn btn-primary btn-block btn-flat" id="btnView">View</button>
	        </div>
	    </div>
	    <div class="row widthField" style="margin-top: 10px;">
	    	<div class="col-xs-12">
	          <button type="button" class="btn btn-primary btn-block btn-flat" id="btnShare">Bagikan ke WhatsApp</button>
	        </div>
	    </div>
	    <div class="form-group has-feedback">
	    	<br>
	    	<p>Catatan : <br>
	    		Jangan hapus {Alamat-Undangan} <br> pada kolom template ucapan
	    	</p>
	    	<p>Tutorial Penggunaan : <br> <a href="https://youtube.com">LINK VIDEO YOUTUBE</p>
	    </div>
    </form>

  </div>
  <!-- /.login-box-body -->
  <div class="">
    <center><a style="color: white; padding-bottom: 50px;" href="http://penantian.com">penantian.com</a></center>
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="../generate_url/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../generate_url/js/bootstrap.min.js"></script>
<!-- iCheck -->
<!-- <script src="https://adminlte.io/themes/AdminLTE/plugins/iCheck/icheck.min.js"></script> -->
<script>

</script>
<script type="text/javascript">
	var globalUrl = "";

	$('#generateUrl').click(function(e){
		// e.preventDefault();
		if($('#fNamaUndangan').val() == '' || $('#fNamaTamu').val() == ''){
			// alert('Mohon isi semua field yang dibutuhkan');
		}else{
			e.preventDefault();
			var namaUndangan = $('#fNamaUndangan').val().replace(/ /g, '+');
			var namaTamu = $('#fNamaTamu').val().replace(/ /g, '+');

			var alamatSesi = $('#fAlamatSesi').val().replace(/ /g, '+');
			if(alamatSesi != ''){
				var inputAlamatSesi = "&from=" + alamatSesi;
			}else{
				var inputAlamatSesi = '';
			}

			var lastUrl = $('#hasilUrl').val();
			var url = "<?php echo $url; ?>" + namaUndangan + "?to=" + namaTamu + inputAlamatSesi
			$('#hasilUrl').val(url);
			var ucapan = $('#fUcapan').val();

			// console.log('url lama : ' + lastUrl);
			if(lastUrl == ''){
				// console.log('1');
				var newUcapan = ucapan.replace('{Alamat-Undangan}', url);
			}else{
				// console.log('2');
				var newUcapan = ucapan.replace(lastUrl, url);
			}
			$('#fUcapan').val(newUcapan);
			globalUrl = url;
		}
	})

	$('#btnView').click(function(){
		var url = $('#hasilUrl').val();
		console.log(url);
		window.open(url, "_blank");
	});

	$('#btnCopy').click(function(){
		var url = $('#hasilUrl')
		if(url.val() != ''){
			url.select();
			document.execCommand("copy");
			alert('Berhasil copy url ke clipboard')
		}
	});

	$('#btnShare').click(function(){
		var text = $('#fUcapan').val();
		var textToWAFirst = text.replaceAll('+', '%2B').replaceAll('&', '%26');
		var textToWA = textToWAFirst.replace(/\n/g, '%0a');
		console.log(textToWA);
		window.open('whatsapp://send?text=' + textToWA, "_blank");
	});

	$('#btnCopyAll').click(function(){
		var text = $('#fUcapan');
		text.select();
		document.execCommand("copy");
		alert('Berhasil copy ucapan ke clipboard')
	})
</script>
</body>
</html>
