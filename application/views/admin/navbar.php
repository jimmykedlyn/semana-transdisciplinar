<!--Barra de Navegação -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" style="font-size: 14px;" href="#">
			<img style="height: 100%;margin-right: 5px;" alt="Brand" class="pull-left" src="<?php echo base_url('assets/img/favicons/favicon-32x32.png') ?>">
			Semana Transdisciplinar</a>
			</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if($ativo == 1){echo 'class="active"';}?>><a href="<?php echo base_url('admin/paineladm');?>"><i class="fa fa-home fa-fw fa-lg"></i>&nbsp;Home</a></li>
				<li <?php if($ativo == 2){echo 'class="active"';}?>><a href="<?php echo base_url('admin/cronograma');?>">Cronograma</a></li>
				<li <?php if($ativo == 3){echo 'class="active"';}?>><a href="<?php echo base_url('admin/eventos');?>">Eventos</a></li>
				<li <?php if($ativo == 4){echo 'class="active"';}?>><a href="<?php echo base_url('admin/certificado');?>">Certificado</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mais <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li <?php if($ativo == 5){echo 'class="active"';}?>><a href="<?php echo base_url('admin/alteracadastro');?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Alterar Cadastro</a></li>	
						<li class="divider"></li>
						<li class="dropdown-header">Ajuda&nbsp;<i class="fa fa-question"></i></li>
						<li><a href="<?php echo base_url('ajuda');?>"><i class="fa fa-comment-o fa-fw"></i>&nbsp;Contate-nos</a></li>
						<li><a href="http://semanatrans.esy.es" target="_blank"><i class="fa fa-briefcase fa-fw"></i>&nbsp;Escritorio Escola</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url('ajuda');?>" target="_blank">Ajuda&nbsp;<i class="fa fa-question"></i></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">              
				<li><a href="<?php echo base_url('home/sair');?>">Sair&nbsp;<i class="fa fa-sign-out fa-fw fa-lg"></i></a></li>
			</ul>
		</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav><!-- final da Barra de Navegação -->