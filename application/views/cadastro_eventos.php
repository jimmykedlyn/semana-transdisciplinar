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
    echo form_open('cadastro/receber','class="form-horizontal"'); 
    echo form_fieldset('Efetuar Cadastro');

    echo '<div id="data">';
    echo form_label('DATA', 'data');
    $atributos6 = array(              
        "name" => "data",
        "id" => "data1",
        "value" => "1",
        "class" => "form-control radioee",
        "checked" => TRUE              
      );                 
    echo form_radio($atributos6);
    echo '<div>Dia 1</div>';
    $atributos7 = array(              
        "name" => "data",
        "id" => "data2",
        "value" => "2",
        "class" => "form-control radioee"              
      );         
    echo form_radio($atributos7);
    echo '<div>Dia 2</div>';

     $atributos7 = array(              
        "name" => "data",
        "id" => "data3",
        "value" => "3",
        "class" => "form-control radioee"              
      );         
    echo form_radio($atributos7);
    echo '<div>Dia 3</div>';
    echo '</div>';

    echo form_label('TURNO', 'turno');
    $options = array(
                  'turno1'  => '',
                  'turno2'  => 'Matutino',
                  'turno3'    => 'Vespertino',
                  'turno4'   => 'Noturno',                  
                );
    $shirts_on_sale = array('turno1', 'turno4');
    echo form_dropdown('turno', $options, 'turno1');

    echo form_label('HORARIO', 'horario');
    $options = array(
                  'horario1'  => '',
                  'horario2'  => '9H - 10H',
                  'horario3'    => '10H - 11H',
                  'horario4'   => '11H - 12H',                  
                );
    $shirts_on_sale = array('horario1', 'horario4');
    echo form_dropdown('horario', $options, 'horario1');

     echo form_label('SALA', 'sala');
    $options = array(
                  'sala1'  => '',
                  'sala2'  => 'SALA 203',
                  'sala3'    => 'SALA 404',
                  'sala4'   => 'AUDITÓRIO',                  
                );
    $shirts_on_sale = array('sala1', 'sala4');
    echo form_dropdown('sala', $options, 'sala1');

    echo form_label('TIPO', 'tipo');
    $options = array(
                  'tipo1'  => '',
                  'tipo2'  => 'PALESTRA',
                  'tipo3'    => 'MINI-CURSO',
                  'tipo4'   => 'WORKSHOP',                  
                );
    $shirts_on_sale = array('tipo1', 'tipo4');
    echo form_dropdown('tipo', $options, 'tipo1');

    echo form_label('DESCRIÇÃO', 'descricao');
    echo form_textarea();

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