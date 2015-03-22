<?= $this->load->view('head');//Chama a view head.html?>
<?= $this->load->view('databaseconnect');//conexão banco de dados?>

	<head>
		<title>Recuperar Senha</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >

<style>
	h2{
		font-size: 25px;
		font-style: italic;
		font-weight: bolder;        
      	letter-spacing: -1px;
		text-align: center;
		text-transform: capitalize;		
	}	
        .form-control{
               
               width: 100%;
               text-align: center;
               background-color: #ffffff;
        }
        .botao{
              
              width:49%;
              margin-top: 19px;
              positon: relative;
              text-align: center;
              background-color: #ffffff;
              border-radius:15px;
	       
               
        }
        .inicio{
              width:49%;
              margin-top: 19px;             
              text-align: center;
              background-color: #ffffff;
              border-radius:15px;
	       
               
        }
       
  </style>
	</head>

	<body>
		<?php $msg = null;
		if(isset($_POST['acao']) && $_POST['acao'] == 'recuperar'):
			
                        $email = strip_tags(filter_input(INPUT_POST, 'emailRecupera', FILTER_SANITIZE_STRING));
                        $result = mysql_query("SELECT * FROM usuario WHERE email='$email'");
                        //conta quantos tem
                        $num_rows = mysql_num_rows($result);
                        //se tiver  + de 1 cadastrado
                        if($num_rows=='1'){
	                //faz um while para vc colocar os dados nas variaveis
	                while($Row_email = mysql_fetch_array($result)){
		        $rowemail = $Row_email['email'];
		        $rowsenha = $Row_email['senha'];
		         }
                                  
				 $mensage ="Você solicitou a recuperação de senha, confira seus dados:\n";
                                 $mensage .="E-mail: " . $rowemail;
                                 $mensage .="\n Senha: " . $rowsenha;
                                 $mensage .="\n clique aqui e faça seu login http://esc.electro-cloud.com"; // muda o link de acordo com domínio do Site.
                                 
				
				mail($rowemail, "Escritório Escola -> Solicitação de senha", $mensage);
                               
                                $msg = 'Enviamos a sua senha, para o seu endereço de e-mail informado.';                             
		                    
							
                              }else{$msg = 'Email Não cadastrado!';}


		endif;

		?>




             <div class="container main">
              <div class="row">
 <div class="col-xs-12 col-sm-7 col-md-4">
</div> 
	     <div class="col-xs-12 col-sm-7 col-md-4">	                  
             	<form action="" method="post" enctype="multipart/form-data">

			<?php
				if(isset($_GET['recuperar']) && $_GET['recuperar'] == 'sim'){
			?>
       
      
      <h2 class="form-signin-heading">Esqueceu sua Senha?</h2>
      <h4 class="form-signin-heading">Digite no campo abaixo o email que você cadastrou no site,dentro de instantes enviaremos a sua senha de acesso.</h4>
     
    
     <input type="email" required x-moz-errormessage="Ops. Não esqueça de preencher este campo." class="form-control" placeholder="Endereço de Email" name="emailRecupera" value="" />
     
    
     <input type="hidden" name="acao" value="recuperar" />
    
    <div class="col-xs-12 col-sm-7 col-md-12">		    
     <a class="inicio btn btn-warning" href="index.php" role="button">Página Inicial</a>
     <button class="botao centered btn btn-warning " type="submit">Enviar Senha</button>
     
     </div>
     <div><?php if($msg !== null){
echo '<div class="alert alert-danger valida" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><i class="fa fa-exclamation-triangle"></i> '.$msg.'</div>';}
?></div>
   </div>
   
   <div class="col-xs-12 col-sm-7 col-md-4">
   </div> 
</div>
</div>
   

			<?php }?>
		</form>
</div>
<?= $this->load->view('footer');//Chama a view footer?>






		
                                     




				