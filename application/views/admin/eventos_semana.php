<?= $this->load->view('head');//Chama a view head.html?>

  <title>Cadastro de Evento</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style> 
  .ini{
    float: right;
  }  
  h2{
    text-align: left;
    float: left;
    width: 60%;
  }
  li.active{
    /*background: rgb(107, 209, 185);*/
  } 
  </style>
  <script type="text/javascript">
  </script>
</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 3; $this->load->view('admin/navbar',$dados);?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
      <h2>Eventos&nbsp;<i class="fa fa-check-square fa-fw fa-lg"></i></h2><a class="ini btn btn-warning btn-lg" href="<?php echo base_url('assets/cronograma.pdf');?>">Download do Cronograma</a> 
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">   
      <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">DIA 1 </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DIA 2</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">DIA 3</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">DIA 4</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <?php foreach ($dia1 as $eventos) : ?>
        <table class="table">
        <h4>  CURSO: <?php echo $eventos->nome ?></h4>
        <p>PALESTRANTE:<strong><?php echo  $eventos->PALESTRANTE ?></strong></p> 
        <p>horario: <?php echo $eventos->HORARIO ?></p>      
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" <?php echo 'data-target="#modal'.$eventos->ID.'"' ?>>Inscrever-se</button>
          
          <div class="modal fade" <?php echo 'id="modal'.$eventos->ID.'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel"><?php echo $eventos->nome ?></h4>
            </div>
            <div class="modal-body">
              <?php echo $eventos->DESCRICAO ?>            
            </div>
            <div class="modal-footer">
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button-->
              <?php 
              echo form_open('admin/eventos/inscrever','class="form-horizontal"');
              $data = array(
                "type" => "submit",
                "name" => "inscrever",
                "value" => $eventos->ID,
                "class" => "btn btn-warning",
                'content' => 'Inscrever-se'
                );
              echo form_button($data);
              echo form_close(); 
              ?>
            </div>
            </div>
            </div>
          </div>
          </table>            
      <?php endforeach; ?>      
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <?php foreach ($dia2 as $eventos) : ?>
        <table class="table">
        <h4>  CURSO: <?php echo $eventos->nome ?></h4>
        <p>PALESTRANTE:<strong><?php echo  $eventos->PALESTRANTE ?></strong></p> 
        <p>horario: <?php echo $eventos->HORARIO ?></p>      
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" <?php echo 'data-target="#modal'.$eventos->ID.'"' ?>>Inscrever-se</button>
          
          <div class="modal fade" <?php echo 'id="modal'.$eventos->ID.'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel"><?php echo $eventos->nome ?></h4>
            </div>
            <div class="modal-body">
              <?php echo $eventos->DESCRICAO ?>            
            </div>
            <div class="modal-footer">
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button-->
              <?php 
              echo form_open('admin/eventos/inscrever','class="form-horizontal"');
              $data = array(
                "type" => "submit",
                "name" => "inscrever",
                "value" => $eventos->ID,
                "class" => "btn btn-warning btnlogin",
                'content' => 'Inscrever-se'
                );
              echo form_button($data);
              echo form_close(); 
              ?>
            </div>
            </div>
            </div>
          </div>
          </table>            
      <?php endforeach; ?> 
    </div>    
    <div role="tabpanel" class="tab-pane" id="messages">
      <?php foreach ($dia3 as $eventos) : ?>
        <table class="table">
        <h4>  CURSO: <?php echo $eventos->nome ?></h4>
        <p>PALESTRANTE:<strong><?php echo  $eventos->PALESTRANTE ?></strong></p> 
        <p>horario: <?php echo $eventos->HORARIO ?></p>      
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" <?php echo 'data-target="#modal'.$eventos->ID.'"' ?>>Inscrever-se</button>
          
          <div class="modal fade" <?php echo 'id="modal'.$eventos->ID.'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel"><?php echo $eventos->nome ?></h4>
            </div>
            <div class="modal-body">
              <?php echo $eventos->DESCRICAO ?>            
            </div>
            <div class="modal-footer">
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button-->
             <?php 
              echo form_open('admin/eventos/inscrever','class="form-horizontal"');
              $data = array(
                "type" => "submit",
                "name" => "inscrever",
                "value" => $eventos->ID,
                "class" => "btn btn-warning btnlogin",
                'content' => 'Inscrever-se'
                );
              echo form_button($data);
              echo form_close(); 
              ?>
            </div>
            </div>
            </div>
          </div>
          </table>            
      <?php endforeach; ?> 
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">HORARIO: 11H</div>
  </div>

</div>
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>