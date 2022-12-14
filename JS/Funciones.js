function enviar(){
    alert('Se envio correctamente');
}
function borrar(){
    formulario.reset()
}

function compras(){
    alert('Se añadio el producto al carrito de compras');
}

function consulta(){
    let nom, num;
    nom= prompt("Ingrese su nombre:");
    num=prompt("Ingrese su número:");
    alert("Su cita sera procesada "+nom+", nos comunicaremos con usted para más detalles");
}