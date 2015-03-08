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
      <h2>Certificados Aki</h2>     
       <object class="pdf" data="<?php echo base_url('assets/cronograma.pdf');?>" type="application/pdf"> 
        </object>
      <a class="btn btn-warning btn-lg" href="<?php echo base_url('assets/cronograma.pdf');?>">Download Aqui!</a>   
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>