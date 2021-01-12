$(".usuario").click(function(){
    var id  = $(this).val();
    var data =  'id=' + id;
    data += '&accion=' + 'publicaciones';
    $.post('controlador/controller.php',data,function(a){
        $("#principal").html(a);
        });	
});

$(".publicacion").click(function(){
    var id  = $(this).val();
    var data =  'id=' + id;
    data += '&accion=' + 'comentarios';
    $.post('controlador/controller.php',data,function(a){
        $("#principal").html(a);
        });	
});
$("#btnUsuario").click(function(){
    var id  = $(this).val();
    var data =  'id=' + id;
    //data += '&accion=' + 'comentarios';
    $.post('controlador/controller.php',data,function(a){
        $("#principal").html(a);
        });	
});


