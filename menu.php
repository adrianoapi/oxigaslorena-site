<div id="main-menu">
    <div id="main-menu-inner">
        <ul>
            <li><a href="./"                 ><span class="<?php echo empty($pagina)         ? "selected" : "" ?>">INÍCIO</span></a></li>
            <li><a href="./?pagina=empresa"  ><span class="<?php echo $pagina == 'empresa'   ? "selected" : "" ?>">A EMPRESA</span></a></li>
            <li><a href="./?pagina=gases"    ><span class="<?php echo $pagina == 'gases'     ? "selected" : "" ?>">GASES</span></a></li>
            <li><a href="./?pagina=produtos" ><span class="<?php echo $pagina == 'produtos'  ? "selected" : "" ?>">PRODUTOS</span></a></li>
            <li><a href="./?pagina=servicos" ><span class="<?php echo $pagina == 'servicos'  ? "selected" : "" ?>">SERVIÇOS</span></a></li>
            <li><a href="./?pagina=contato"  ><span class="<?php echo $pagina == 'contato'   ? "selected" : "" ?>">CONTATO</span></a></li>
        </ul>
    </div>
</div>