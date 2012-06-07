$(document).ready(function(){
    $('#login').bind('blur', function(){
        var logins = $(this).val();
        var pass = $(this).val();
        var datos = {
                nombre_login: logins,
                nombre_pass: pass
            };
           
        $.ajax({
                url: '/users/login_rolo',
                type: 'POST',
                data: datos,
                success: function(msg){
                    alert('msdxfsdfg');                    
                }
            });
    });
});