<?= $this->load->view('head');//Chama a view head.html?>

	<title>Cadastro</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  legend{
    margin-top: 10px;  
  }  
  input[type="radio"]+div{
    float: left;
    font-size: 15px;
    margin-right: 15px;
    margin-left: 5px;
  }
  @media (max-width: 768px) {
    #tipo, #monitor, #sexo{
      margin-bottom: 75px;
    }
    h1{
      width: 70%;
      margin: 25px auto 45px auto;
    }
  }
  </style>
  <script type="text/javascript">
    /* Este trexo de codigo em Jquery
     * serve para ocultar o campo de monitor
     * caso o tipo seleionado não tenha sido Aluno!
     */
    $(document).ready(function() {
        $("#tipo1").click(Mostra);
        $("#tipo2").click(Esconde);
        $("#tipo3").click(Esconde);                
        });
      function Mostra(){
        $("#monitor").show();
      }
      function Esconde(){
        $("#monitor").hide();
      }
    $("#telefone").mask("(999) 9999-9999");             
  </script>
</head>
<body>
  <div class="container main">
    <div class="row">
    <h1>Cadastro de Usuarios</h1>
    <div class="col-xs-12 col-sm-12 col-md-6">  	
    	<div class="form-group">        			
    		<?php		
    		echo form_open('cadastro/receber','class="form-horizontal"'); 
    			echo form_fieldset('Efetuar Cadastro');

        echo '<div id="tipo">';
        echo form_label('TIPO', 'tipo');
          $atr_tipo1 = array(              
              "name" => "tipo",
              "id" => "tipo1",
              "value" => "1",
              "class" => "form-control radioee",
              "checked" => TRUE                
            );                 
        echo form_radio($atr_tipo1);
        echo '<div>Aluno</div>';
          $atr_tipo2 = array(              
              "name" => "tipo",
              "id" => "tipo2",
              "value" => "2",
              "class" => "form-control radioee"              
            );         
        echo form_radio($atr_tipo2);
        echo '<div>Professor</div>';
          $atr_tipo3 = array(              
              "name" => "tipo",
              "id" => "tipo3",
              "value" => "3",
              "class" => "form-control radioee"                         
            );         
        echo form_radio($atr_tipo3);
        echo '<div>Visitante</div>';
        echo '</div>';

    		$atr_nome = array(
              "type" => "text",
              "name" => "nome",
              "id" => "nome",
              "value" => set_value('nome'),
              "class" => "form-control ee",
              "placeholder" => "Digite seu nome",
              "title" => "Digite seu nome completo!",
              "required" => ""             
            );
    			echo form_label('NOME', 'nome');
    			echo form_input($atr_nome);

          $atr_cpf = array(
              "type" => "text",
              "name" => "cpf",
              "id" => "cpf",
              "value" => set_value('cpf'),
              "class" => "form-control ee",
              "placeholder" => "Digite seu CPF",
              "required" => ""
            );
    			echo form_label('CPF', 'cpf');
    			echo form_input($atr_cpf);          

          $atr_email = array(
              "type" => "email",
              "name" => "email",
              "id" => "email",
              "value" => set_value('email'),
              "class" => "form-control ee",
              "placeholder" => "Digite seu email"
            ); 
          echo form_label('EMAIL', 'email');      
          echo form_input($atr_email);

          $atr_datanasc = array(
              "type" => "date",
              "name" => "datanasc",
              "id" => "datanasc",
              "value" => set_value('datanasc'),
              "class" => "form-control ee",
              "placeholder" => "Digite sua data de Nascimento"
            ); 
          echo form_label('DATA', 'datanasc');      
          echo form_input($atr_datanasc);

          echo '<div id="sexo">';
          echo form_label('SEXO', 'sexo');
          $atr_sexom = array(              
              "name" => "sexo",
              "id" => "sexom",
              "value" => "Masculino",
              "class" => "form-control radioee",
              "checked" => TRUE              
            );                 
          echo form_radio($atr_sexom);
          echo '<div>Masculino</div>';
          $atr_sexof = array(              
              "name" => "sexo",
              "id" => "sexof",
              "value" => "Feminino",
              "class" => "form-control radioee"              
            );         
          echo form_radio($atr_sexof);
          echo '<div>Feminino</div>';
          echo '</div>';

          $atr_tel = array(
              "type" => "tel",
              "name" => "telefone",
              "id" => "telefone",
              "value" => set_value('telefone'),
              "class" => "form-control ee",
              "placeholder" => "Digite seu telefone"
            ); 
          echo form_label('FONE', 'telefone');      
          echo form_input($atr_tel);

          $atr_cel = array(
              "type" => "tel",
              "name" => "cel",
              "id" => "cel",
              "value" => set_value('cel'),
              "class" => "form-control ee",
              "placeholder" => "Digite seu celular"
            ); 
          echo form_label('CELULAR', 'cel');      
          echo form_input($atr_cel);

          echo '<div id="monitor">';
          echo form_label('MONITOR', 'monitor');
          $atr_monitors = array(              
              "name" => "monitor",
              "id" => "monitorS",
              "value" => "S",
              "class" => "form-control radioee"              
            );                 
          echo form_radio($atr_monitors);
          echo '<div>Sim</div>';
          $atr_monitorn = array(              
              "name" => "monitor",
              "id" => "monitorN",
              "value" => "N",
              "class" => "form-control radioee",
              "checked" => TRUE              
            );         
          echo form_radio($atr_monitorn);
          echo '<div>Não</div>';
          echo '</div>';                      
    			echo form_fieldset_close();    					
    	  ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">   
      <div class="form-group">
      <?php
      echo form_fieldset('Criar Senha');
          $atributos3 = array(
              "type" => "password",
              "name" => "senha",
              "id" => "senha",
              "value" => set_value('senha'),
              "class" => "form-control ee",
              "placeholder" => "Digite sua senha"
            ); 
          echo form_label('SENHA', 'senha');      
          echo form_password($atributos3);
          $atributos11 = array(
              "type" => "password",
              "name" => "senha2",
              "id" => "senha2",
              "value" => set_value('senha2'),
              "class" => "form-control ee",
              "placeholder" => "Digite sua senha novamente"
            ); 
          echo form_label('CONFIRMAR', 'senha');      
          echo form_password($atributos11);
          echo form_fieldset_close();

          echo validation_errors();
          $atributosbtn = array(
              "type" => "submit",
              "name" => "btnSubmit",
              "value" => "Cadastrar",
              "class" => "btn btn-warning btnlogin"
            );
          echo form_input($atributosbtn);
          echo form_close();
          ?>
          </div>
        </div>    	
    </div>
  </div>
<?= $this->load->view('footer');//Chama a view footer?>