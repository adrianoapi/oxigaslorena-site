$().ready(function(){
    
    $("#header").css( "background-image", $("#header-inner").css( "background-image"));
    $("#header-inner").css( "background-image", "none");
            
    $("#footer").css( "background-image", $("#footer-inner").css( "background-image"));
    $("#footer-inner").css( "background-image", "none");
    
})