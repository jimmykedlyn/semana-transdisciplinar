<?= $this->load->view('head');//Chama a view head.html?>

<title>Cadastro</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  
  </style>
</head>
<body>
  <div class="container main">
  <div class="row">
    <div class="col-xs-12 col-sm-2 col-md-3"></div>
    <div class="col-xs-12 col-sm-8 col-md-6">
<?php		
      		echo form_open('cadastro','class="form-horizontal"'); 
      			echo form_fieldset('Verificar CPF');

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
      		echo validation_errors();                  		
            //Imprime Mensagens de erro
            if ($erro !== NULL) {
              echo '<div class="alert alert-danger valida" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><i class="fa fa-exclamation-triangle"></i> '.$erro.'</div>';
            if ($erro == 'Usuario já Cadastrado') {
            echo '<a class="btn btn-warning btncfp" href="'.base_url('home').'">Faça seu Login!</a>';
            echo '<a class="btn btn-warning btncfp" style="float:right;" href="'.base_url('#').'">Esqueceu sua senha?</a>';
            }                                            	
            }
            $atributos3 = array(
                  "type" => "submit",
                  "name" => "btnSubmit",
                  "value" => "Verificar",
                  "class" => "btn btn-warning btnlogin"
                );
              echo form_input($atributos3);         
                        
      			echo form_fieldset_close();		  
      		echo form_close();			
      	  ?>  
          </div>
          <div class="col-xs-12 col-sm-2 col-md-3"></div>
    </div>
</div>  	

<?= $this->load->view('footer');//Chama a view footer?>