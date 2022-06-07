$(document).ready(function(){

    //ajusta a altura do sidebar
    $('#sidebar-inner').css({ 
        height: $('#container').height() 
    });
    

    // contador de visitas
    $.ajax({
        url: '/counter',
        type: 'post',
        dataType: "json",
        success: function(resource){
            alert('oiii');
            if (resource.error === 0) {
                $('body').append("<span style='display:none;'>Registred</span>");
                
            } else {
                $('body').append("<span style='display:none;'>Register Error</span>");
            }
        },
                
        error: function(rsp, textStatus, errorThrown){
            $('body').append("<span style='display:none;'>Register Error</span>");
        }
    });
});