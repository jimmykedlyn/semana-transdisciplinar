<?= $this->load->view('head');//Chama a view head.html?>

  <title>Cadastro de Evento</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style> 
  .btn{
    float: left;
  }  
  h2{
    float: left;
    width: 60%;
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
      <h2>Eventos da Semana!</h2><a class="btn btn-warning btn-lg" href="<?php echo base_url('assets/cronograma.pdf');?>">Download do Cronograma</a> 
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">   
      <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">DIA 1</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DIA 2</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">DIA 3</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">DIA 4</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <?php foreach ($eventos as $eventos) : ?>
        <table class="table">
        <h4>  CURSO: <?php echo $eventos->nome ?></h4>
        <p>PALESTRANTE:<strong><?php echo  $eventos->PALESTRANTE ?></strong></p>       
        
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
              <button type="button" class="btn btn-primary">Inscrever-se</button>              
            </div>
            </div>
            </div>
          </div>
          </table>            
      <?php endforeach; ?>      
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">HORARIO: 14H
    </div>    
    <div role="tabpanel" class="tab-pane" id="messages">HORARIO: 10H</div>
    <div role="tabpanel" class="tab-pane" id="settings">HORARIO: 11H</div>
  </div>

</div>
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>