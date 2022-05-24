
function pagamentosCredito()
    {
      let dadosPagamentos = []
     alert("Crédito escolhido!");
     for (i=0; i<dadosPagamentos.length;i++){
       dadosPagamentos[i=0]
     }
     var cartao = prompt('Número do cartão: ', '5487 9623 8746 4987');
    var nome=prompt("Nome no cartão: ");
   var date=prompt("Data de validade:");
   var cvv=prompt("CVV: ");
   if(cartao=="" || cartao == null) {
       alert("Algum campo está vazio");
   }else{
       alert("compra efetuada com sucesso! Comprovante enviado para seu e-mail cadastrado");
   }
    
    }
    function pagamentosDebito() {
        alert("Débito escolhido!");
    var cartao=prompt("Número do cartão: ");
    var nome=prompt("Nome no cartão: ");
   var date=prompt("Data de validade:");
   var cvv=prompt("CVV: ");
   if(cartao=="") {
       alert("Algum campo está vazio");
   }else{
       alert("compra efetuada com sucesso! Comprovante enviado para seu e-mail cadastrado");
   }

}
function adicionarItem(){
    var item = prompt("Qual objeto você deseja incluir na lista?", "Adicione um novo objeto");
    if (item == null || item == "") {
        alert("O uso do prompt foi cancelado!");
 
}
}
    