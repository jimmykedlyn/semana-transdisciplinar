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
      <!--pre><?php print_r($event);?></pre--> 
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
    <div role="tabpanel" class="tab-pane active" id="home">HORARIO: 9H
      <!--collapse behavior-->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Mini Curso de PHP
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <p>Sera muito legal!</p>                          
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Palestra de HTML
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              <a class="btn btn-warning btn-lg" href="<?php echo base_url('assets/cronograma.pdf');?>">Inscrever-se</a>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Oficina de Codeigniter
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <p>Palestrante: Anderson imperdivel!</p>
              <a class="btn btn-warning btn-lg" href="<?php echo base_url('assets/cronograma.pdf');?>">Inscrever-se</a>
            </div>
          </div>
        </div>
      </div><!--fim da collapse behavior-->

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">HORARIO: 9H</div>
    <div role="tabpanel" class="tab-pane" id="messages">HORARIO: 10H</div>
    <div role="tabpanel" class="tab-pane" id="settings">HORARIO: 11H</div>
  </div>

</div>
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>