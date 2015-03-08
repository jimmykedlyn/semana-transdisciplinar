<?= $this->load->view('head');//Chama a view head.html?>

	<title>Semana Transdisciplinar</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>">
	<style>
	h2{
		font-size: 25px;
		font-style: italic;
		font-weight: bolder;        
      	letter-spacing: -1px;
		text-align: center;
		text-transform: capitalize;		
	}	
	</style>
</head>
<body>
<div class="container main">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 1; $this->load->view('admin/navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-6">
			<div class="panel panel-warning">
			<div class="panel-heading">
				<?php echo "<h2> Bem Vindo ";					
                   echo strtolower($this->session->userdata('nome'));
                   echo "!! </h2>";?>			
			</div>
			<div class="panel-body">
				<p>Seja Bem Vindo a Semana Transdisciplinar, veja o cronograma aqui!</p>
				<a class="btn btn-warning btn-lg" href="<?php echo base_url('admin/cronograma');?>" role="button">Cronograma</a>
			</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-7 col-md-6">
			<div class="panel panel-default">
			<div class="panel-heading"><h2>Eventos</h2></div>
			<div class="panel-body">
				<p>Acesse aqui todos os eventos referentes a Semana Transdisciplinar e escolha o seu!!!</p>
				<a class="btn btn-warning btn-lg" href="<?php echo base_url('admin/eventos');?>" role="button">Participar</a>
			</div>
			</div>
		</div>
		
	</div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>