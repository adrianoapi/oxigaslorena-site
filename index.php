<?php $pagina = array_key_exists('pagina', $_GET) ? $_GET['pagina'] : ''; ?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <title><?php echo !empty($pagina) ? strtoupper($pagina) : 'INÍCIO'; ?> | Oxigás Lorena</title>
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta property="http://ogp.me/ns#locale" content="pt_BR" />
      <meta property="http://ogp.me/ns#site_name" content="Oxigás Lorena"/>
      <meta property="http://ogp.me/ns#title" content="Home"/>
      <meta property="http://ogp.me/ns#type" content="article"/>
      <meta property="http://ogp.me/ns#url" content="http://oxigaslorena.com/homepage-1"/>
      <meta property="http://ogp.me/ns#description" content=""/>
      <link rel="stylesheet" type="text/css" media="all" href="themes/full-red/styles871b.css?v=12" />
      <script src="themes/libs/jquery.js"></script>

   </head>
   <body style="">
      <div id="wrapper">
         <!--Menu-->
         <?php include_once('topo.php'); ?>

         <!--Menu-->
         <?php include_once('menu.php'); ?>

         <!--Corpo-->
         <?php include_once('conteudo.php'); ?>

         <!--Corpo-->
         <?php include_once('rodape.php'); ?>
      </div>
   </body>
</html>