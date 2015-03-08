<?= $this->load->view('head');//Chama a view head.html?>

	<title>Semana Transdisciplinar</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>">
	<style>
	</style>
	<script type="text/javascript">
	/* Este codigo javascript redireciona a pagina para a home do site apos 3 segundos*/
	setTimeout(function(){
	  window.location.href = '<?php echo base_url()?>';
	},3000)
	</script>
</head>
<body>
<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<h1><i class="fa fa-check fa-lg pull-left"> Cadastro Realizado!!</i></h1>			
		</div>
	</div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>