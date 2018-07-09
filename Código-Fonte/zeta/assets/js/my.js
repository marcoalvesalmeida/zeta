var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

function editarItemVenda(id) {
	// When the user clicks on the button, open the modal 
	modal.style.display = "block";
	nome = $('#'+id).html();
	$("#modal_titulo").html(nome);
	valor = $('#'+id+'l').html();
	$("#valor").val(valor);
	$("#idlanche").val(id);
    // Faz requisição ajax para o controller
    $.post("/zeta/Venda/CardapioIngrediente", {id: id}, function (resposta) {
    	$("#ingredientes_modal").html("");
    	$("#adicionais_modal").html("");
        // Coloca as frases na DIV
        $("#ingredientes_modal").append(resposta);
    });
};

function verPedido(codigo, valor, data_venda, linha_cliente) {
	// When the user clicks on the button, open the modal 
	modal.style.display = "block";
	codigoatual = codigo;
	$("#modal_titulo").html('Venda #'+codigo);
	$("#valor").val(valor);
	$("#idlanche").val(data_venda);
    // Faz requisição ajax para o controller
    $.post("/zeta/Pedido/atualizaPedidosLanches/", {codigo: codigo}, function (resposta) {
    	$("#lista_lanches tr").remove();
        // Coloca as frases na DIV
        $("#lista_lanches").append(resposta);
    });
};

function verPedidoNotCad(codigo, valor, data_venda, linha_cliente, entrega, pagamento, endereco) {
	// When the user clicks on the button, open the modal 
	modal.style.display = "block";
	codigoatual = codigo;
	$("#modal_titulo").html('Venda #'+codigo);
	$("#valor").val(valor);
	$("#idlanche").val(linha_cliente);
	$("#identrega").val(entrega);
	$("#idpagamento").val(pagamento);
	$("#idendereco").val(endereco);
    // Faz requisição ajax para o controller
    $.post("/zeta/Pedido/atualizaPedidosLanchesNotCad/", {codigo: codigo}, function (resposta) {
    	$("#lista_lanches tr").remove();
        // Coloca as frases na DIV
        $("#lista_lanches").append(resposta);
    });
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

fechar = document.getElementById('fechar');

fechar.onclick = function() {
	modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}	
