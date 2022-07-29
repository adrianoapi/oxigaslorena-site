<?php

switch ($pagina) {
    case 'empresa':
        require_once('contents/empresa.php');
        break;
    case 'gases':
        require_once('contents/gases.php');
        break;
    case 'materiais':
        require_once('contents/materiais.php');
        break;
    case 'produtos':
        require_once('contents/produtos.php');
        break;
    case 'contato':
        require_once('contents/contato.php');
        break;
    default:
        require_once('contents/home.php');
}

?>