<?= $this->load->view('head');//Chama a view head.html?>

<title>Alteração de Cadastro</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>     
  input[type="radio"]+div{
    float: left;
    font-size: 15px;
    margin-right: 15px;
    margin-left: 5px;
  }
  h2{
    text-align: left;
  }
  </style>
</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 5; $this->load->view('admin/navbar',$dados);?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
      <h2>Cadastro&nbsp;<i class="fa fa-pencil-square fa-fw fa-lg"></i></h2>
        <?php foreach($usuario as $user) {
        echo form_open('admin/alteracadastro/altera','class="form-horizontal"'); 
        echo form_fieldset('Alterar');

        #INPUT DO TIPO
        echo '<div id="tipo">';
        echo form_label('TIPO', 'tipo');
        //Se o usuario for ALUNO
        if ($user['id_tipo'] == '1') {
          $atr_tipo1 = array(              
              "name" => "tipo",
              "id" => "tipo1",
              "value" => "1",
              "class" => "form-control radioee",
              "checked" => TRUE                
            );                 
        echo form_radio($atr_tipo1);
        }else{
          $atr_tipo1 = array(              
              "name" => "tipo",
              "id" => "tipo1",
              "value" => "1",
              "class" => "form-control radioee"                              
            );                 
        echo form_radio($atr_tipo1);
        }
        echo '<div>Aluno</div>';
        //Se o usuario for PROFESSOR
        if ($user['id_tipo'] == '2') {
          $atr_tipo2 = array(              
              "name" => "tipo",
              "id" => "tipo2",
              "value" => "2",
              "class" => "form-control radioee",
              "checked" => TRUE               
            );         
        echo form_radio($atr_tipo2);
        }else{
        $atr_tipo2 = array(              
              "name" => "tipo",
              "id" => "tipo2",
              "value" => "2",
              "class" => "form-control radioee"              
            );         
        echo form_radio($atr_tipo2);
        }
        echo '<div>Professor</div>';
        //Se o usuario for VISITANTE
        if ($user['id_tipo'] == '3') {
          $atr_tipo3 = array(              
              "name" => "tipo",
              "id" => "tipo3",
              "value" => "3",
              "class" => "form-control radioee",
              "checked" => TRUE                                        
            );         
        echo form_radio($atr_tipo3);
        }else{
         $atr_tipo3 = array(              
              "name" => "tipo",
              "id" => "tipo3",
              "value" => "3",
              "class" => "form-control radioee"                         
            );         
        echo form_radio($atr_tipo3);
        }
        echo '<div>Visitante</div>';
        echo '</div>';

        #INPUT DO NOME
        $atr_nome = array(
            "type" => "text",
            "name" => "nome",
            "id" => "nome",
            "value" => $user['nome'],
            "class" => "form-control ee",
            "placeholder" => "Digite seu nome",
            "title" => "Digite seu nome completo!",
            "required" => ""             
          );
        echo form_label('NOME', 'nome');
        echo form_input($atr_nome);

        #INPUT DO CPF
        $atr_cpf = array(
            "type" => "text",
            "name" => "cpf",
            "id" => "cpf",
            "value" => $user['cpf'],
            "class" => "form-control ee",
            "placeholder" => "Digite seu CPF",
            "required" => ""
          );
        echo form_label('CPF', 'cpf');
        echo form_input($atr_cpf);

        #INPUT DO EMAIL
        $atr_email = array(
            "type" => "email",
            "name" => "email",
            "id" => "email",
            "value" => $user['email'],
            "class" => "form-control ee",
            "placeholder" => "Digite seu email"
          ); 
        echo form_label('EMAIL', 'email');      
        echo form_input($atr_email);

        #INPUT DA DATA DE NASCIMENTO 
        $atr_datanasc = array(
            "type" => "date",
            "name" => "datanasc",
            "id" => "datanasc",
            "value" => $user['nascimento'],
            "class" => "form-control ee",
            "placeholder" => "Digite sua data de Nascimento"
          ); 
        echo form_label('DATA', 'datanasc');      
        echo form_input($atr_datanasc);

        #INPUT DO SEXO
        echo '<div id="sexo">';
        echo form_label('SEXO', 'sexo');
        //Se o usuario for masculino
        if ($user['sexo'] == 'M') {
          $atr_sexom = array(              
              "name" => "sexo",
              "id" => "sexom",
              "value" => "Masculino",
              "class" => "form-control radioee",
              "checked" => TRUE              
            );                 
          echo form_radio($atr_sexom);
        }else{
          $atr_sexom = array(              
              "name" => "sexo",
              "id" => "sexom",
              "value" => "Masculino",
              "class" => "form-control radioee",                          
            );                 
          echo form_radio($atr_sexom);
        }
        echo '<div>Masculino</div>';
        //Se o usuario for Feminino
        if ($user['sexo'] == 'F') {
          $atr_sexof = array(              
              "name" => "sexo",
              "id" => "sexof",
              "value" => "Feminino",
              "class" => "form-control radioee",
              "checked" => TRUE                            
            );                 
          echo form_radio($atr_sexof);
        }else{
          $atr_sexof = array(              
              "name" => "sexo",
              "id" => "sexof",
              "value" => "Feminino",
              "class" => "form-control radioee"                                         
            );                 
          echo form_radio($atr_sexof);
        }
        echo '<div>Feminino</div>';
        echo '</div>';

        #INPUT DO TELEFONE
        $atr_tel = array(
            "type" => "tel",
            "name" => "telefone",
            "id" => "telefone",
            "value" => $user['telefone'],
            "class" => "form-control ee",
            "placeholder" => "Digite seu telefone"
          ); 
        echo form_label('FONE', 'telefone');      
        echo form_input($atr_tel);

        #INPUT DO CELULAR
        $atr_cel = array(
            "type" => "tel",
            "name" => "cel",
            "id" => "cel",
            "value" => $user['celular'],
            "class" => "form-control ee",
            "placeholder" => "Digite seu celular"
          ); 
        echo form_label('CELULAR', 'cel');      
        echo form_input($atr_cel);

        #INPUT DO MONITOR
        echo '<div id="monitor">';
        echo form_label('MONITOR', 'monitor');
        //Se o usuario for masculino
        if ($user['monitor'] == 'S') {
          $atr_monitors = array(              
              "name" => "monitor",
              "id" => "monitorS",
              "value" => "S",
              "class" => "form-control radioee",
              "checked" => TRUE             
            );                 
          echo form_radio($atr_monitors);
        }else{
          $atr_monitors = array(              
              "name" => "monitor",
              "id" => "monitorS",
              "value" => "S",
              "class" => "form-control radioee"                          
            );                 
          echo form_radio($atr_monitors);
        }
        echo '<div>SIM</div>';
        //Se o usuario for Feminino
        if ($user['monitor'] == 'N') {
          $atr_monitorn = array(              
              "name" => "monitor",
              "id" => "monitorN",
              "value" => "N",
              "class" => "form-control radioee",
              "checked" => TRUE             
            );                 
          echo form_radio($atr_monitorn);
        }else{
          $atr_monitorn = array(              
              "name" => "monitor",
              "id" => "monitorN",
              "value" => "N",
              "class" => "form-control radioee"                        
            );                 
          echo form_radio($atr_monitorn);
        }
        echo '<div>NÃO</div>';
        echo '</div>';

        #INPUT DA SENHA
        $atr_senha = array(            
            "name" => "senha",
            "id" => "senha",
            "value" => $user['senha'],
            "class" => "form-control ee",
            "placeholder" => "Digite sua senha"
          ); 
        echo form_label('SENHA', 'senha');      
        echo form_password($atr_senha);

        echo form_fieldset_close();
        echo validation_errors();
        $atributosbtn = array(
            "type" => "submit",
            "name" => "btnSubmit",
            "value" => "Concluir",
            "class" => "btn btn-warning btnlogin"
          );
        echo form_input($atributosbtn);
        echo form_close();
       }?>
  </div>
  </div>
</div>  	

<?= $this->load->view('footer');//Chama a view footer?>