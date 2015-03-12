<?= $this->load->view('head');//Chama a view head.html?>

  <title>Certificado</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  .pdf {height:800px; width:100%;}
  </style>
</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 4; $this->load->view('admin/navbar',$dados);?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
      <h2>Certificados</h2>     
      <h4>Certificados de PHP  <a class="btn" href="<?php echo base_url('assets/certificado.pdf');?>" target="_blank"><i class="fa fa-print"></i></a>   </h4>
      
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>