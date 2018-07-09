
</body>



<!--   Core JS Files   -->
<script src=<?php echo base_url("assets/js/jquery.3.2.1.min.js"); ?> type="text/javascript"></script>
<script src=<?php echo base_url("assets/js/jquery.js"); ?> type="text/javascript"></script>
<script src=<?php echo base_url("assets/js/bootstrap.min.js"); ?> type="text/javascript"></script>

<!-- Nice Scroll Plugin -->
<script src=<?php echo base_url("assets/js/nicescroll/jquery.nicescroll.js"); ?> type="text/javascript"></script>

<!--  Charts Plugin -->
<script src=<?php echo base_url("assets/js/chartist.min.js"); ?>></script>

<!--  Notifications Plugin    -->
<script src=<?php echo base_url("assets/js/bootstrap-notify.js"); ?>></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src=<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=1.4.0"); ?>></script>

<!--  Meu Plugin    -->
<script src=<?php echo base_url("assets/js/my.js");?>></script>


<script type="text/javascript">

    // -- Variável responsável pela escolha entre edição ou cadastro
    var editar = 0;
    var editarCardapio = 0;
    var editarCategoria = 0;
    var editarIngrediente = 0;
    var qtdeIngredientes = 0;
    var qtdeAdicionais = 0;
    var qtdeIngredientesVenda = 0;
    var vetorIngredientes = new Array();
    var vetorAdicionais = new Array();
    var vetorIngredientesVenda = new Array();
    var diminuiIngredientes;
    var qtdeDiminui = 0;
    // -- Atenção acima

    //  Gerar Código da Venda
    var data_atual = new Date();
    var mes = ""+data_atual.getMonth()+"";
    var ano = ""+data_atual.getFullYear()+"";
    var dia = ""+data_atual.getDate()+"";
    var hora = ""+data_atual.getHours()+"";
    var minutos = ""+data_atual.getMinutes()+"";
    var segundos = ""+data_atual.getSeconds()+"";


    var codigo = ano + mes + dia + hora + minutos + segundos;
    var codigoatual = 0;

    data_venda = new Date();

     var totalpedido=0;
    var codigovenda;
    var idcliente;
    
    $(document).ready(function () {



        $("#buscaingrediente").keyup(function(){   
            if($("#buscaingrediente").val()==""){
                listarTodosIngredientes2();
            }else{
                    // Recuperamos o id da última frase selecionada, que foi armazenado na propriedade LANG
                    var like = $("#buscaingrediente").val();
                    // Faz requisição ajax e envia o ID da última frase via método POST
                    $.post("<?php echo base_url('Ingrediente/pesquisar'); ?>", {like: like}, function(resposta) {
                        //Limpa os dados anteriores da tabela
                        $("#lista_ingredientes tr").remove();
                        // Coloca as frases na DIV
                        if(resposta!=0){
                            $("#lista_ingredientes").append(resposta);
                        }else{
                            $("#lista_ingredientes").append("<tr><td>Nenhum registro encontrado!</td></tr>");
                        }
                    });
                }
            });

        $("#buscacardapio").keyup(function(){   
            if($("#buscacardapio").val()==""){
                listarItensCardapio2();
            }else{
                var like = $("#buscacardapio").val();
                    // Faz requisição ajax e envia o ID da última frase via método POST
                    $.post("<?php echo base_url('Cardapio/pesquisar'); ?>", {like: like}, function(resposta) {
                        //Limpa os dados anteriores da tabela
                        $("#lista_cardapio tr").remove();
                        // Coloca as frases na DIV
                        if(resposta!=0){
                            $("#lista_cardapio").append(resposta);
                        }else{
                            $("#lista_cardapio").append("<tr><td colspan='6'>Nenhum registro encontrado!</td></tr>");
                        }
                    });
                }
            });

        $("#buscacategorias").keyup(function(){   
            if($("#buscacategorias").val()==""){
                listarCategorias2();
            }else{
                var like = $("#buscacategorias").val();
                    // Faz requisição ajax e envia o ID da última frase via método POST
                    $.post("<?php echo base_url('Categoria/pesquisar'); ?>", {like: like}, function(resposta) {
                        //Limpa os dados anteriores da tabela
                        $("#lista_categorias tr").remove();
                        // Coloca as frases na DIV
                        if(resposta!=0){
                            $("#lista_categorias").append(resposta);
                        }else{
                            $("#lista_categorias").append("<tr><td colspan='6'>Nenhum registro encontrado!</td></tr>");
                        }
                    });
                }
            });

        $("#buscacardapiovenda").keyup(function(){   
            if($("#buscacardapiovenda").val()==""){
                listarItens2();
            }else{
                var like = $("#buscacardapiovenda").val();
                    // Faz requisição ajax e envia o ID da última frase via método POST
                    $.post("<?php echo base_url('Venda/pesquisarCardapio'); ?>", {like: like}, function(resposta) {
                        //Limpa os dados anteriores da tabela
                        $("#lista_itens tr").remove();
                        // Coloca as frases na DIV
                        if(resposta!=0){
                            $("#lista_itens").append(resposta);
                        }else{
                            $("#lista_itens").append("<tr><td colspan='6'>Nenhum registro encontrado!</td></tr>");
                        }
                    });
                }
            });


        //$("html").nicescroll();
        if ('<?php echo @$cardapio; ?>' == 'active') {
            listarCategorias();
            listarIngredientes();
            listarItensCardapio();
            qtdeIngredientes = 0;
            vetorIngredientes = new Array();
        }
        if ('<?php echo @$promocoes; ?>' == 'active') {
            listar();
        }
        if ('<?php echo @$sessaostatus; ?>' == 'active') {
            verificasessao();
        }
        if ('<?php echo @$venda; ?>' == 'active') {
            listarIngredientes();
            listarItens();
            listarItens3();
            listarItens4();
            listarClientes();
            qtdeAdicionais = 0;
            vetorAdicionais= new Array(); 
            qtdeIngredientesVenda = 0;
            vetorIngredientesVenda = new Array(); 
            listarAdicionais();
            diminuiIngredientes = "";
            qtdeDiminui=0;
        }
        if ('<?php echo @$categorias; ?>' == 'active') {
            listarTodasCategorias();
        }
        if ('<?php echo @$ingredientes; ?>' == 'active') {
            listarTodosIngredientes();
        }
        if ('<?php echo @$pedidos; ?>' == 'active') {
            atualizaPedidos();
        }
        if ('<?php echo @$pedidosFinalizado; ?>' == 'active') {
            atualizaPedidosFinalizados();
        }
        if ('<?php echo @$pedidosnotcad; ?>' == 'active') {
            atualizaPedidosNotCad();
        }
        if ('<?php echo @$pedidosnotcadfinalizados; ?>' == 'active') {
            atualizaPedidosNotCadFinalizados();
        }
        $('#principal_form').submit(function () {
            var dados = new FormData();
            dados.append('arquivo1', $('input.arquivo1').prop('files')[0]);
            dados.append('arquivo2', $('input.arquivo2').prop('files')[0]);
            dados.append('arquivo3', $('input.arquivo3').prop('files')[0]);
            dados.append('tituloprincipal', $('input.tituloprincipal').val());
            dados.append('textoprincipal', $('#textopri').val());
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/principal'); ?>",
                data: dados,
                cache: false,
                contentType: false,
                processData: false,
                success: function ()
                {
                    $("#principal_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> O site foi atualizado."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                }
            });
            return false;
        });

        $('#sobre_form').submit(function () {
            var dados = new FormData();
            dados.append('arquivosobre', $('input.arquivosobre').prop('files')[0]);
            dados.append('titulosobre', $('input.titulosobre').val());
            dados.append('textosobre', $('#textosobre').val());
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/sobre'); ?>",
                data: dados,
                cache: false,
                contentType: false,
                processData: false,
                success: function ()
                {
                    $("#sobre_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A seção \"Sobre\" foi alterada."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                }
            });
            return false;
        });
        $('#promocoes_form').submit(function () {
            var dados = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/promocoes'); ?>",
                data: dados,
                success: function (data)
                {
                    $("#promocoes_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A seção \"Promoções\" foi alterada."

                    }, {
                        type: 'success',
                        timer: 1000
                    });

                }
            });
            return false;
        });
        $('#cardapio_form').submit(function () {
            var dados = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/cardapio'); ?>",
                data: dados,
                success: function (data)
                {
                    $("#cardapio_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A seção \"Cardápio\" foi alterada."

                    }, {
                        type: 'success',
                        timer: 1000
                    });

                }
            });
            return false;
        });
        $('#ncardapio_form').submit(function () {
            var i=0;
            var ingredientes="";
            while(i<vetorIngredientes.length){
                if(vetorIngredientes[i].toString()!=='*' && i+1===vetorIngredientes.length){
                    ingredientes+=vetorIngredientes[i].toString();
                    //@Marco @marcoalert(vetorIngredientes[i].toString());
                    break;
                }
                if(vetorIngredientes[i].toString()!=='*'){
                    ingredientes+=vetorIngredientes[i].toString()+"|";
                }  
                i++;
            }
            var dados = $(this).serialize();
            dados += "&descricao="+ingredientes;
            var url_use;
            if (editarCardapio === 0) {
                url_use = "<?php echo base_url('Cardapio/salvar'); ?>";
            } else {
                url_use = "<?php echo base_url('Cardapio/editar'); ?>";
                dados += "&id=" + editarCardapio;
                //@Marco @marcoalert(dados);
                editarCardapio = 0;
            }
            $.ajax({
                type: "POST",
                url: url_use,
                data: dados,
                success: function (data)
                {
                    $("#ncardapio_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> O item foi salvo."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                }

            });
            listarItensCardapio();
            document.getElementById('set_ingredientes').innerHTML = "";
            return false;
        });
        $('#pedidos_form').submit(function () {
            var dados = new FormData();
            dados.append('arquivopedidos', $('input.arquivopedidos').prop('files')[0]);
            dados.append('titulopedidos', $('input.titulopedidos').val());
            dados.append('textopedidos', $('#textopedidos').val());
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/pedidos'); ?>",
                data: dados,
                cache: false,
                contentType: false,
                processData: false,
                success: function ()
                {
                    $("#pedidos_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A seção \"Pedidos\" foi alterada."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                }
            });
            return false;
        });
        $('#contato_form').submit(function () {
            var dados = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Edicao/contato'); ?>",
                data: dados,
                success: function (data)
                {
                    $("#contato_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A seção \"Contato\" foi alterada."

                    }, {
                        type: 'success',
                        timer: 1000
                    });

                }
            });
            return false;
        });
        $('#ncategorias_form').submit(function () {
            var dados = $(this).serialize();
            var url_use;
            if (editarCategoria === 0) {
                url_use = "<?php echo base_url('Categoria/salvar'); ?>";
            } else {
                url_use = "<?php echo base_url('Categoria/editar'); ?>";
                dados += "&id=" + editarCategoria;
                editarCategoria = 0;
            }
            $.ajax({
                type: "POST",
                url: url_use,
                data: dados,
                success: function (data)
                {
                    $("#ncategorias_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b>A categoria foi salva."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                    document.getElementById("title_categoria").innerHTML = "Nova Categoria:";
                    listarTodasCategorias();
                }
            });
            return false;
        });
        $('#npromocao_form').submit(function () {
            var dados = new FormData();
            var url_use;
            if (editar === 0)
                url_use = "<?php echo base_url('Promocao/salvar'); ?>";
            else {
                url_use = "<?php echo base_url('Promocao/editar'); ?>";
                dados.append('id', editar);
                editar = 0;
            }
            dados.append('arquivo', $('input.arquivo').prop('files')[0]);
            dados.append('titulo', $('input.titulo').val());
            dados.append('valor', $('input.valor').val());
            dados.append('descricao', $('#descricao').val());
            $.ajax({
                type: "POST",
                url: url_use,
                data: dados,
                cache: false,
                contentType: false,
                processData: false,
                success: function ()
                {
                    $("#npromocao_form").trigger("reset");

                    $.notify({
                        message: "<b>Sucesso!</b> A promoção foi salva."

                    }, {
                        type: 'success',
                        timer: 1000
                    });
                    document.getElementById("title_promocao").innerHTML = "Nova Promoção";
                }
            });
            listar();
            return false;
        });
    });
$('#ningrediente_form').submit(function () {
    var dados = $(this).serialize();
    var url_use;
    if (editarIngrediente === 0) {
        url_use = "<?php echo base_url('Ingrediente/salvar'); ?>";
    } else {
        url_use = "<?php echo base_url('Ingrediente/editar'); ?>";
        dados += "&id=" + editarIngrediente;
        editarIngrediente = 0;
    }
    $.ajax({
        type: "POST",
        url: url_use,
        data: dados,
        success: function (data)
        {
            $("#ningrediente_form").trigger("reset");

            $.notify({
                message: "<b>Sucesso!</b> O ingrediente foi salvo."

            }, {
                type: 'success',
                timer: 1000
            });
            document.getElementById("title_ingrediente").innerHTML = "Novo Ingrediente:";
            listarTodosIngredientes();
        }
    });
    return false;
});

function finalizarVenda() {
    var dados = new FormData();
    dados.append('codigo', codigo);
    dados.append('cliente', $('#lista_clientes option:selected').val());
    dados.append('valorTotal', $('.valorTotal').val());
    //@Marco @marcoalert(dados);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Venda/salvar'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function ()
        {
            $.notify({
                message: "<b>Sucesso!</b> A venda foi finalizada!"

            }, {
                type: 'success',
                timer: 1000
            });
        }
    });
    return false;
}

function finalizarPedido() {
    var pagamento = $("input[name='pagamento']:checked").val();
     var entrega = $("input[name='entrega']:checked").val();
    var dados = new FormData();
    dados.append('codigo', $('.codigo').val());
    dados.append('cliente', $('.cliente').val());
    dados.append('valorTotal', $('.valorTotalPedido').val());
    dados.append('pagamento', pagamento);
    dados.append('entrega', entrega);
    dados.append('observacao', $('.observacao').val());
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Venda/atualizar'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function ()
        {
            $.notify({
                message: "<b>Sucesso!</b> A venda foi finalizada!"

            }, {
                type: 'success',
                timer: 1000
            });
        }
    });
    return false;
}

function finalizarPedidoGet() {
    var pagamento = $("input[name='pagamento']:checked").val();
    var entrega = $("input[name='entrega']:checked").val();
    var codigovenda = $("input[name='codigo']").val();
    var cliente= $("input[name='cliente']").val();
    var valorTotal= $("input[name='valorTotalPedido']").val();
    var observacao= $("input[name='observacao']").val();
    alert(pagamento);
    alert(codigo);
    alert(cliente);
    alert(valorTotal);

    $.post("/zeta/Venda/atualizar", {codigovenda: codigovenda, pagamento: pagamento, entrega: entrega, cliente: cliente, observacao: observacao, valorTotal: valorTotal },function (resposta){
           if(resposta==1){
                window.location.replace("/zeta/Site/agradecer");
            }
        }


    );
}

function finalizarPedido2() {
    var id = $("#idpedidoitem").val();
    var pagamento = $("input[name='pagamento']:checked").val();
    var entrega = $("input[name='entrega']:checked").val();
    var nome = $("#nomecad").val();
    var endereco= $("input[name='enderecocad']").val();
    var telefone= $("input[name='telefonecad']").val();
    var valorTotal= $("input[name='valorTotalPedido']").val();
    alert(id);
     alert(valorTotal);


    $.post("/zeta/Venda/atualizar2", {id: id, pagamento: pagamento, entrega: entrega, nome: nome, endereco: endereco, telefone: telefone, valorTotal: valorTotal },function (resposta){
         alert(resposta);

           if(resposta==1){
                window.location.replace("/zeta/Site/agradecer");
            }
        }


    );
    return 0;
}



function remover(idremover) {
    var dados = new FormData();
    dados.append('idremover', idremover);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Promocao/remover'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> A promoção foi removida."

            }, {
                type: 'success',
                timer: 1000
            });
            listar();
        }
    });
    return false;
}
;
$('#nitemvenda_form').submit(function () {
    $('.valorTotal').val(parseFloat($('.valorTotal').val())+parseFloat($('#valor').val()));
    var i=0;
    var ingredientes="";
    var adicionais="";
    var id=$("#idlanche").val();
    $('#'+id+'l2').html($('#valor').val())
    $.post("/zeta/Venda/CardapioIngrediente2", {id: id}, function (resposta) {
        diminuiIngredientes += resposta;
    });
    //@Marco @marcoalert(diminuiIngredientes);
    while(i<vetorAdicionais.length){
        if(vetorAdicionais[i].toString()!=='*' && i+1===vetorAdicionais.length){
            adicionais+=vetorAdicionais[i].toString();
            break;
        }
        if(vetorAdicionais[i].toString()!=='*'){
            adicionais+=vetorAdicionais[i].toString()+" - ";
        }  
        i++;
    }
    i=0;
    while(i<vetorIngredientesVenda.length){
        if(vetorIngredientesVenda[i].toString()!=='*' && i+1===vetorIngredientesVenda.length){
            ingredientes+=vetorIngredientesVenda[i].toString();
            break;
        }
        if(vetorIngredientesVenda[i].toString()!=='*'){
            ingredientes+=vetorIngredientesVenda[i].toString()+" - ";
        }  
        i++;
    }
    vetorIngredientesVenda.length = 0;
    qtdeIngredientesVenda=0;
    //@Marco @marcoalert("adicionais="+adicionais+" | Ingredientes="+ingredientes+" | "+id);
    var dados = $(this).serialize();
    dados += "&adicionais="+adicionais;
    dados += "&ingredientes="+ingredientes;
    dados += "&idlanche="+id;
    dados += "&venda="+codigo;
    var url_use = "<?php echo base_url('Venda/salvarItemTemporario'); ?>";
    $.ajax({
        type: "POST",
        url: url_use,
        data: dados,
        success: function (data)
        {
            var modal = document.getElementById('myModal');

            modal.style.display = "none";

            $.notify({
                message: "<b>Sucesso!</b> O item foi salvo."

            }, {
                type: 'success',
                timer: 1000
            });
        }

    });
    $('#valor').val(0);
    return false;
});

$('#nlogin_form').submit(function () {
    var email = $('#email').val();
    var senha = $('#senha').val();
    var mensagem = 0;
    // Faz requisição ajax para o controller
    $.post("/zeta/Admin/logar", {email: email, senha: senha}, function (resposta) {
        if(resposta==1){
            window.location.replace("/zeta/Admin");
            return false;
        }else{
			$.notify({
				message: "<b>Ops...</b> Email ou senha incorretos!"

			}, {
				type: 'danger',
				timer: 1000
			});
			setTimeout(function () {
				$.notifyClose();
			}, 2000);

		}	
    $("#nlogin_form").trigger("reset");
		
    });

    return false;
});

$('#finalizar_pedido').submit(function () {
    var dados = new FormData();
    dados.append('venda', codigoatual);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Pedido/finalizar'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> Pedido Finalizado."

            }, {
                type: 'success',
                timer: 1000
            });
            atualizaPedidos();
            modal.style.display = "none";
        }
    });
    return false;
});

$('#finalizar_pedido_not_cad').submit(function () {
    var dados = new FormData();
    dados.append('pedido', codigoatual);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Pedido/finalizarNotCad'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> Pedido Finalizado."

            }, {
                type: 'success',
                timer: 1000
            });
            atualizaPedidosNotCad();
            modal.style.display = "none";
        }
    });
    return false;
});

function removerCategoria(idremover) {
    var dados = new FormData();
    dados.append('idremover', idremover);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Categoria/remover'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> A categoria foi removida."

            }, {
                type: 'success',
                timer: 1000
            });
            listarTodasCategorias();
        }
    });
    return false;
}
;

function removerIngredienteLista(idremover) {
    var dados = new FormData();
    dados.append('idremover', idremover);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Ingrediente/remover'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> O ingrediente foi removido."

            }, {
                type: 'success',
                timer: 1000
            });
            listarTodosIngredientes();
        }
    });
    return false;
}
;


function removerItemCardapio(idremover) {
    var dados = new FormData();
    dados.append('idremover', idremover);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Cardapio/remover'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Sucesso!</b> O item foi removido."
            }, {
                type: 'success',
                timer: 1000
            });
            listarItensCardapio();
        }
    });
    return false;
}
;


function cancelarVenda() {
    var dados = new FormData();
    dados.append('venda', codigo);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Venda/cancelar'); ?>",
        data: dados,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {
            $.notify({
                message: "<b>Cancelada!</b> A venda foi cancelada"
            }, {
                type: 'danger',
                timer: 1000
            });
        }
    });
    window.location="<?php echo base_url('Admin/venda'); ?>";
    return false;
}
;


function alterar(ideditar, titulo, valor, descricao) {
    editar = ideditar;

    $.notify({
        message: "<b>Registro carregado para edição...</b>"

    }, {
        type: 'info',
        timer: 1000
    });
    setTimeout(function () {
        $.notifyClose();
    }, 2000);

    /* -- DESTACANDO OS CAMPOS -- */

    document.getElementById("titulo").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("titulo").style = "border-color:#E3E3E3;";
    }, 2000);

    document.getElementById("valor").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("valor").style = "border-color:#E3E3E3;";
    }, 2000);

    document.getElementById("descricao").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("descricao").style = "border-color:#E3E3E3;";
    }, 2000);

    document.getElementById("arquivo").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("arquivo").style = "border-color:#E3E3E3;";
    }, 2000);


    /* -- FIM -- */
    document.getElementById("title_promocao").innerHTML = "Editar Promoção";
    document.getElementById("titulo").value = titulo;
    document.getElementById("valor").value = valor;
    document.getElementById("descricao").value = descricao;
    window.scrollTo(0, 0);
}
;



function alterarItemCardapio(ideditar, titulo, valor, descricao, categoria) {
    document.getElementById('set_ingredientes').innerHTML = "";
    editarCardapio = ideditar;
    $.notify({
        message: "<b>Registro carregado para edição...</b>"

    }, {
        type: 'info',
        timer: 1000
    });
    setTimeout(function () {
        $.notifyClose();
    }, 2000);

    /* -- DESTACANDO OS CAMPOS -- */

    document.getElementById("titulo").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("titulo").style = "border-color:#E3E3E3;";
    }, 2000);

    document.getElementById("valor").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("valor").style = "border-color:#E3E3E3;";
    }, 2000);

    document.getElementById("categorias").style = "border-color:#42D0ED;";
    setTimeout(function () {
        document.getElementById("categorias").style = "border-color:#E3E3E3;";
    }, 2000);


    /* -- FIM -- */
    document.getElementById("title_item").innerHTML = "Editar Item:";
    document.getElementById("titulo").value = titulo;
    document.getElementById("valor").value = valor;
    $.post("/zeta/Cardapio/buscarIngredientes", {ideditar: ideditar}, function (resposta) {
        $("#set_ingredientes").append(resposta);
    });       
        window.scrollTo(0, 0);
    }
    ;
    
    
    function alterarCategoria(ideditar, titulo) {
        editarCategoria = ideditar;
        $.notify({
            message: "<b>Registro carregado para edição...</b>"

        }, {
            type: 'info',
            timer: 1000
        });
        setTimeout(function () {
            $.notifyClose();
        }, 2000);

        /* -- DESTACANDO OS CAMPOS -- */

        document.getElementById("titulocategoria").style = "border-color:#42D0ED;";
        setTimeout(function () {
            document.getElementById("titulocategoria").style = "border-color:#E3E3E3;";
        }, 2000);


        /* -- FIM -- */
        document.getElementById("title_categoria").innerHTML = "Editar Categoria:";
        document.getElementById("titulocategoria").value = titulo;        
        window.scrollTo(0, 0);
    }
    ;

    function alterarIngrediente(ideditar, titulo, valor, qtde) {
        editarIngrediente = ideditar;
        $.notify({
            message: "<b>Registro carregado para edição...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        setTimeout(function () {
            $.notifyClose();
        }, 2000);

        /* -- DESTACANDO OS CAMPOS -- */

        document.getElementById("tituloingrediente").style = "border-color:#42D0ED;";
        setTimeout(function () {
            document.getElementById("tituloingrediente").style = "border-color:#E3E3E3;";
        }, 2000);

        document.getElementById("valoringrediente").style = "border-color:#42D0ED;";
        setTimeout(function () {
            document.getElementById("valoringrediente").style = "border-color:#E3E3E3;";
        }, 2000);

        document.getElementById("qtdeingrediente").style = "border-color:#42D0ED;";
        setTimeout(function () {
            document.getElementById("qtdeingrediente").style = "border-color:#E3E3E3;";
        }, 2000);

        /* -- FIM -- */
        document.getElementById("title_ingrediente").innerHTML = "Editar Ingrediente:";
        document.getElementById("tituloingrediente").value = titulo; 
        document.getElementById("valoringrediente").value = valor;
        document.getElementById("qtdeingrediente").value = qtde;
        window.scrollTo(0, 0);
    }
    ;


    function listar() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Promocao/buscarTodos", {ultimo: ultimo}, function (resposta) {
            // Limpa a mensagem de carregamento
            $("#status").empty();
            //Limpa os dados anteriores da tabela
            $("#lista_promocoes tr").remove();
            // Coloca as frases na DIV
            $("#lista_promocoes").append(resposta);
        });
    }
    ;

    function listarCategorias() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/listarCategorias", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#categorias section").remove();
            // Coloca as frases na DIV
            $("#categorias").append(resposta);
        });
    }
    ;
    function listarCategorias2() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Categoria/buscarTodas", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_categorias tr").remove();
            // Coloca as frases na DIV
            $("#lista_categorias").append(resposta);
        });
    }
    ;

    function listandoCate2() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Categoria/buscarTodas", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#categorias section").remove();
            // Coloca as frases na DIV
            $("#categorias").append(resposta);
        });
    }
    ;

    function listarIngredientes() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/listarIngredientes", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#ingredientes section").remove();
            // Coloca as frases na DIV
            $("#ingredientes").append(resposta);
        });
    }
    ;

    function listarAdicionais() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Ingrediente/listarAdicionais", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#ingredientes_adicionais section").remove();
            // Coloca as frases na DIV
            $("#ingredientes_adicionais").append(resposta);
        });
    }
    ;

    function listarItensCardapio() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodos", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_cardapio tr").remove();
            // Coloca as frases na DIV
            $("#lista_cardapio").append(resposta);
        });
    }
    ;
    function atualizaPedidos() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Pedido/atualizaPedidos", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_pedidos tr").remove();
            // Coloca as frases na DIV
            $("#lista_pedidos").append(resposta);
        });
    }
    ;
    function atualizaPedidosFinalizados() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Pedido/atualizaPedidosFinalizados", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_pedidos_finalizados tr").remove();
            // Coloca as frases na DIV
            $("#lista_pedidos_finalizados").append(resposta);
        });
    }
    ;
     function atualizaPedidosNotCad() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Pedido/atualizaPedidosNotCad", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_pedidos tr").remove();
            // Coloca as frases na DIV
            $("#lista_pedidos").append(resposta);
        });
    }
    ;
    function atualizaPedidosNotCadFinalizados() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Pedido/atualizaPedidosNotCadFinalizados", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_pedidos_not_cad_finalizados tr").remove();
            // Coloca as frases na DIV
            $("#lista_pedidos_not_cad_finalizados").append(resposta);
        });
    }
    ;
    
    function listarItens() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodosVenda", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_itens tr").remove();
            // Coloca as frases na DIV
            $("#lista_itens").append(resposta);
        });
    }
    ;
    function listarItens2() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodosVenda", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_itens tr").remove();
            // Coloca as frases na DIV
            $("#lista_itens").append(resposta);
        });
    }
    ;

     function listarItens3() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodosVenda1", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_itens1 tr").remove();
            // Coloca as frases na DIV
            $("#lista_itens1").append(resposta);
        });
    }
    ;
    function listarItens4() {
        var ultimo = 1;
         $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });

        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodosVenda2", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_itens2 tr").remove();
            // Coloca as frases na DIV
            $("#lista_itens2").append(resposta);
        });
    }
    ;


    function listarClientes() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Venda/buscarClientes", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_clientes section").remove();
            // Coloca as frases na DIV
            $("#lista_clientes").append(resposta);
        });
    }
    ;

    function listarItensCardapio2() {
        var ultimo = 1;
        // Mensagem de carregando
        // Faz requisição ajax para o controller
        $.post("/zeta/Cardapio/buscarTodos", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_cardapio tr").remove();
            // Coloca as frases na DIV
            $("#lista_cardapio").append(resposta);
        });
    }
    ;

    function listarTodasCategorias() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Categoria/buscarTodas", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_categorias tr").remove();
            // Coloca as frases na DIV
            $("#lista_categorias").append(resposta);
        });
    }
    ;
    function listarTodosIngredientes() {
        var ultimo = 1;
        // Mensagem de carregando
        $.notify({
            message: "<img src='/zeta/assets/img/loader.gif'/>&nbsp;&nbsp;<b>Carregando...</b>"
        }, {
            type: 'info',
            timer: 1000
        });
        // Faz requisição ajax para o controller
        $.post("/zeta/Ingrediente/buscarTodas", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_ingredientes tr").remove();
            // Coloca as frases na DIV
            $("#lista_ingredientes").append(resposta);
        });
    }
    ;
    function listarTodosIngredientes2() {
        var ultimo = 1;
        // Faz requisição ajax para o controller
        $.post("/zeta/Ingrediente/buscarTodas", {ultimo: ultimo}, function (resposta) {
            //Limpa os dados anteriores da tabela
            $("#lista_ingredientes tr").remove();
            // Coloca as frases na DIV
            $("#lista_ingredientes").append(resposta);
        });
    }
    ;

    function addItemVenda(ideditar, titulo, valor, descricao) {
        $(".qtdeItem").val("1");
        $('#lista_itens_venda').append("<tr id='e"+ideditar+"'><td id='"+ideditar+"'>" + titulo + "</td><td id='"+ideditar+"l2'>" + valor + "</td>" + "<td><button class='btn btn-danger btn-fill' onclick='removerItemVenda(" + ideditar + ")'>Remover</button></td></tr>");
        editarItemVenda(ideditar);
        $.notify({
            message: "<b>Item adicionado a venda...</b>"
        }, {
            type: 'success',
            timer: 1000
        });
        setTimeout(function () {
            $.notifyClose();
        }, 2000);
    }
    ;

    codigovenda = '<?php echo @$codigo; ?>';
    function addItemVenda1(observacoes, ideditar, titulo, valor) {
        $(".qtdeItem").val("1");
        
        $.post("/zeta/Venda/addItemVenda", {codigovenda: codigovenda, ideditar: ideditar, observacoes: observacoes}, function (resposta) {

            if (resposta) {
                totalpedido=totalpedido+(1*valor);
                var arredondado = totalpedido.toFixed(2);

                  $("#valorTotalPedido").val(arredondado);
                $('#lista_itens_venda').append("<tr id='e"+ideditar+"'><td  style='color:#000;' id='"+ideditar+"'>" + titulo + "</td><td style='color:#000;' id='"+ideditar+"l2'>" + valor + "</td>" + "<td style='color:#000;' id='"+ideditar+"20'>" + observacoes + "</td>" + "<td><button class='btn btn-danger btn-fill' onclick='removerItemVenda(" + ideditar + ")'>Remover</button></td></tr>");
                $.notify({
                    message: "<b>Item adicionado a venda...</b>"
                }, {
                    type: 'success',
                    timer: 1000
                });
                setTimeout(function () {
                    $.notifyClose();
                }, 2000);
            }
            
        });
       
    }
    ;

    idpedidoitem = '<?php echo @$idpedido; ?>';
    function addItemVenda2(qtdpedido,observacoes, ideditar, titulo, valor) {
        $(".qtdeItem").val("1");
        $.post("/zeta/Venda/addItemVenda2", {idpedidoitem: idpedidoitem, qtdpedido: qtdpedido, ideditar: ideditar, observacoes: observacoes}, function (resposta) {

            if (resposta) {
                totalpedido=totalpedido+(qtdpedido*valor);
                var arredondado = totalpedido.toFixed(2);

                  $("#valorTotalPedido").val(arredondado);
                $('#lista_itens_venda').append("<tr id='e"+ideditar+"'><td  style='color:#000;' id='"+ideditar+"'>" + titulo + "</td><td style='color:#000;' id='"+ideditar+"l2'>" + valor + "</td>" + "<td style='color:#000;' id='"+ideditar+"30'>" + qtdpedido + "</td>" + "<td style='color:#000;' id='"+ideditar+"20'>" + observacoes + "</td>" + "<td><button class='btn btn-danger btn-fill' onclick='removerItemVenda(" + ideditar + ")'>Remover</button></td></tr>");
                $.notify({
                    message: "<b>Item adicionado a venda...</b>"
                }, {
                    type: 'success',
                    timer: 1000
                });
                setTimeout(function () {
                    $.notifyClose();
                }, 2000);
            }
            
        });
       
    }
    ;


    function addIngrediente() {
        var id = $("#ingredientes option:selected").val();
        var ingrediente = $("#ingredientes option:selected").text();
        $("#set_ingredientes").append("<button type='button' class='btn btn-default' id='" + id + "' onclick='removeIngrediente(" + id + ")'>" + ingrediente + "</button>");
        $.post("/zeta/Cardapio/abrirValor", {id: id}, function (resposta) {
            resposta = parseFloat(resposta);
            var valor = parseFloat($("#valor").val());
            $("#valor").val(valor + resposta);
        });
        vetorIngredientes[qtdeIngredientes] = id;
        qtdeIngredientes++;
    }
    ;

    function addAdicional() {
        var id = $("#ingredientes_adicionais option:selected").val();
        var ingrediente = $("#ingredientes_adicionais option:selected").text();
        var idmil = id*1000;
        $("#adicionais_modal").append("<button type='button' class='btn btn-default' id='" + idmil + "' onclick='removeItemAdicionalVenda("+idmil+")'>" + ingrediente + "</button>");
        $.post("/zeta/Cardapio/abrirValor", {id: id}, function (resposta) {
            resposta = parseFloat(resposta);
            var valor = parseFloat($("#valor").val());
            $("#valor").val(valor + resposta);
        });
        vetorAdicionais[qtdeAdicionais] = ingrediente;
        qtdeAdicionais++;
    }
    ;

    function removeIngrediente(id) {
        $('#' + id).remove();
        $.post("/zeta/Cardapio/abrirValor", {id: id}, function (resposta) {
            resposta = parseFloat(resposta);
            var valor = parseFloat($("#valor").val());
            $("#valor").val(valor - resposta);
        });
        var i=0;
        while(i<vetorIngredientes.length) {
            if(vetorIngredientes[i]==id){
                vetorIngredientes[i]="*";
                break;
            }
            i++;
        }
    }
    ;

    function removeIngredienteVenda(id) {
        vetorIngredientesVenda[qtdeIngredientesVenda] = $('#'+id).text();
        qtdeIngredientesVenda++;
        $('#' + id).remove();
    }
    ;

    function removeItemAdicionalVenda(id) {
        $('#' + id).remove();
        $.post("/zeta/Cardapio/abrirValor", {id: id}, function (resposta) {
            resposta = parseFloat(resposta);
            var valor = parseFloat($("#valor").val());
            $("#valor").val(valor - resposta);
        });
        var i=0;
        while(i<vetorAdicionais.length) {
            if(vetorAdicionais[i]==id){
                vetorAdicionais[i]="*";
                break;
            }
            i++;
        }
    }
    ;

    function limpar() {
        $("#npromocao_form").trigger("reset");
        editar = 0;
        if ('<?php echo @$cardapio; ?>' == 'active') {
            $("#ncardapio_form").trigger("reset");
            editarCardapio = 0;
            $("#set_ingredientes").remove();
            $("#field_ingredientes").append("<div id='set_ingredientes'></div>");
        }
        $("#nlogin_form").trigger("reset");
    }
    ;

    function atualizaImpressao() {
        var modal = document.getElementById('myModal');
        modal.style.display = "block";
        codigo = '<?php echo @$codigo ?>';
        $("#modal_titulo").html('Venda #'+codigo);
        $("#valor").val('<?php echo @$valor ?>');
        $("#idlanche").val('<?php echo @$cliente ?>');
        $("#idendereco").val('<?php echo @$endereco ?>');
        $("#identrega").val('<?php echo @$entrega ?>');
        $("#idpagamento").val('<?php echo @$pagamento ?>');
        // Faz requisição ajax para o controller
        $.post("/zeta/Pedido/itensImpressao/", {codigo: codigo}, function (resposta) {
            $("#lista_lanches tr").remove();
            // Coloca as frases na DIV
            $("#lista_lanches").append(resposta);
        });
    }
    
    usuariosessao = '<?php echo @$clienteid; ?>';
    function verificasessao(){
        $.post("/zeta/Clientes/verificaUsuario", {usuariosessao: usuariosessao}, function (resposta) {

                    if (resposta!=10) {
                            $("#logar").hide("hide");
                            $('#cliente').append(resposta);
                    }

                });
        
    }
    
    

</script>
</html>
