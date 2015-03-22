<?= $this->load->view('head');//Chama a view head.html?>

  <title>14ª Semana Transdisciplinar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  body{       
    font-size: 18px;            
    letter-spacing: 1px;
  } 
  </style>
  
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-6">
        <a href="<?php echo base_url() ?>">
        <img class="logo" src="<?php echo base_url('assets/img/logo-trans.svg') ?>" alt="14 semana transdisciplinar Pitágoras - FAMA">
        </a>
      </div>

      <div class="col-xs-12 col-sm-5 col-md-4">
      	<h1>Semana Transdisciplinar</h1>
      	<div class="form-group">        			
      		<?php		
      		echo form_open('home/login','class="form-horizontal"'); 
      			echo form_fieldset('Efetuar Login');
            $atributos1 = array(
                "type" => "text",
                "name" => "cpf",
                "id" => "cpf",
                "value" => set_value('cpf'),
                "class" => "form-control ee",
                "placeholder" => "Digite seu CPF"
              );
      			echo form_label('CPF', 'cpf');
      			echo form_input($atributos1);
            $atributos2 = array(
                "type" => "password",
                "name" => "senha",
                "id" => "senha",
                "value" => set_value('senha'),
                "class" => "form-control ee",
                "placeholder" => "Digite sua senha"
              ); 
      			echo form_label('SENHA', 'senha');			
      			echo form_password($atributos2);
            //Imprime Mensagens de erro
            if ($erro !== NULL) {
              echo '<div class="alert alert-danger valida" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><i class="fa fa-exclamation-triangle"></i> '.$erro.'</div>';
            }            
            echo validation_errors();
            $atributos3 = array(
                "type" => "submit",
                "name" => "btnSubmit",
                "value" => "Entrar",
                "class" => "btn btn-warning btnlogin"
              );
      			echo form_input($atributos3);            
      			echo form_fieldset_close();		  
      		echo form_close();			
      	  ?>    	
          
          <h4><i class="fa fa-hand-o-right fa-lg pull-left"></i>Informações importantes!</h4>
          <p>Para se inscrever nos eventos é necessário inicialmente cadastrar-se no sistema! Ainda não está cadastrado?</p>
          <a href="<?php echo base_url('cadastro');?>">Cadastre-se Aqui! </a> <br>       
          <a href="<?php echo base_url('recuperarsenha?recuperar=sim');?>">Esqueceu sua senha?</a> <br>
          <a href="<?php echo base_url('ajuda');?>">Ajuda&nbsp;<i class="fa fa-question fa-lg"></i></a>
        </div>
      </div>
    </div>
  </div>
<?= $this->load->view('footer');//Chama a view footer?>