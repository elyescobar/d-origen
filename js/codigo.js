$(document).on(inicio)
function inicio(){
  $(".botoncompra").click(anade);
  $("#carrito").load("php/poncarrito.php");
}
function anade(){
  //$("#carrito").append($(this).val());
  $("#carrito").load("php/poncarrito.php?p="+ $(this).val());
}
