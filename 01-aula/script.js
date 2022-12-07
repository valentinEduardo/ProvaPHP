funcionar()

function funcionar(){
 var botaoCalculo = document.querySelector("#botao");
 botaoCalculo.addEventListener("click", clique);
 clique();
}


function clique() {
    var receber = document.querySelector("#puxarNum");
    var resultado = document.querySelector("#numero");
    
   var  numero1 = Number(receber.value);

   numero = numero1*numero1;

    resultado.textContent = numero;


console.log(numero);

}
