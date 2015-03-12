<?= $this->load->view('head');//Chama a view head.html?>

  <title>Cadastro de Eventos</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  legend{
    margin-top: 10px;  
  }
  select{
    margin-bottom: 10px;      
    width: 73% !important;
    height: 35px !important;
    padding: 0 5px;
    float: left;  
  }
  textarea{
    margin-bottom: 10px;      
    width: 73% !important;    
    padding: 0 5px;
    float: left; 
  }
  .btnevento{
    float: left;
    height: 45px;    
    border-radius: 24px;  
    font-size: 18px;        
    letter-spacing: 1px;
    margin-top: 5px;
    margin-right: 15px;
    margin-left: 65px;    
  }
  input[type="radio"]+div{
    float: left;
    font-size: 15px;
    margin-right: 15px;
    margin-left: 5px;
  }
  @media (max-width: 768px) {    
    h1{
      width: 70%;
      margin: 25px auto 45px auto;
    }
  }
  </style>
</head>
<body>
  <div class="container main">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <h2>Cadastro de Eventos</h2>
    <?php 
    echo form_open('cadastroevento/receber','class="form-horizontal"'); 
    echo form_fieldset('Efetuar Cadastro');
    echo '<div id="data">';
    echo form_label('DATA', 'data');
    foreach($dia as $dia) {
    $atributos6 = array(              
        "name" => "data",
        "id" => "data1",
        "value" => $dia['id'],
        "class" => "form-control radioee",
        "checked" => TRUE              
      );                 
    echo form_radio($atributos6);
    echo '<div>'.$dia['descricao'].'</div>';
    }
    echo '</div>';

    echo form_label('ÁREA', 'area');
    $options = array(
                  ''  => '',
                  '1' => 'EXATAS',
                  '2' => 'SAÚDE',
                  '3' => 'HUMANAS',
                  '4' => 'SOCIAIS',                               
                );
    $shirts_on_sale = array('1', '4');
    echo form_dropdown('area', $options);

    echo form_label('CURSO', 'curso');
    $options = array(
                  ''  => '',
                  '1'  => 'CIÊNCIA DA COMPUTAÇÃO',
                  '2'    => 'ENFERMAGEM',                               
                );
    $shirts_on_sale = array('1', '4');
    echo form_dropdown('curso', $options);

    echo form_label('TURNO', 'turno');
    $options = array(
                  ''  => '',
                  '1'  => 'Matutino',
                  '2'    => 'Vespertino',
                  '3'   => 'Noturno',                  
                );
    $shirts_on_sale = array('1', '4');
    echo form_dropdown('turno', $options);

    echo form_label('HORARIO', 'horario');
    $options = array(
                  ''  => '',
                  '1'  => '9H - 10H',
                  '2'    => '18H - 19H',
                 );
    echo form_dropdown('horario', $options);

    echo form_label('SALA', 'sala');
    $options = array(
                  ''  => '',
                  '1'  => 'SALA 203',
                  '2'   => 'AUDITÓRIO',                  
                );
    $shirts_on_sale = array('sala1', 'sala4');
    echo form_dropdown('sala', $options, 'sala1');

    echo form_label('TIPO', 'tipo');
    $options = array(
                  ''  => '',                  
                  '1'    => 'MINI-CURSO',
                  '2'  => 'PALESTRA',                                    
                );
    $shirts_on_sale = array('tipo1', 'tipo4');
    echo form_dropdown('tipo', $options, 'tipo1');

    echo form_label('TEMA DO CURSO', 'tema');
    $atr_text = array(              
        "name" => "tema",
        "id" => "tema",
        "value" => set_value('tema'),
        "class" => "form-control ee",                  
      );                 
    echo form_input($atr_text);

    echo form_label('PALESTRANTE', 'palestrante');
    $atr_text = array(              
        "name" => "palestrante",
        "id" => "palestrante",
        "value" => set_value('palestrante'),
        "class" => "form-control ee",                  
      );                 
    echo form_input($atr_text);

    echo form_label('VAGAS', 'vagas');
    $atr_text = array(              
        "name" => "vagas",
        "id" => "vagas",
        "value" => set_value('vagas'),
        "class" => "form-control ee",                  
      );                 
    echo form_input($atr_text);

    echo form_label('DESCRIÇÃO', 'descricao');
    $atr_text = array(              
        "name" => "descricao",
        "id" => "descricao",
        "value" => set_value('descricao'),
        "class" => "form-control",                  
      );                 
    echo form_textarea($atr_text);

    echo validation_errors();

    $atributosbtn = array(
        "type" => "submit",
        "name" => "btnSubmit",
        "value" => "Cadastrar",
        "class" => "btn btn-warning btnevento"
      );
    echo form_input($atributosbtn);

    echo form_fieldset_close();
    echo form_close();
   ?>    
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>