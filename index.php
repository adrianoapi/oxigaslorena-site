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
      <link rel="stylesheet" type="text/css" media="all" href="themes/full-red/styles871b.css?v=1592244119" />
      <script src="themes/libs/jquery.js"></script>
      <script src="domains/init871b.js?v=1592244119"></script>
      <script src="themes/full-red/init871b.js?v=1592244119"></script>
      <style> .se-popup-wrap { position: fixed; width: 100%; height: 100vh; margin: 0px; padding: 0px; top: 0px; z-index: 999999999; } .se-popup-wrap .overlay { position: absolute; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.30); } .se-popup-wrap .se-popup { position: relative; top: 100px; max-width: 740px; min-height: 240px; margin: 0 auto; background: #fff; z-index: 99999; padding: 10px; border-radius: 3px; } .se-popup-wrap .se-popup .close { position: absolute; top: 5px; right: 5px; width: 20px; cursor: pointer; } .se-popup-wrap .se-popup .img-wrap img { width: 100%; } </style>
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