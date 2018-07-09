</body>

<!--   Core JS Files   -->
<script src=<?php echo base_url("assets/js/jquery.3.2.1.min.js");?> type="text/javascript"></script>
<script src=<?php echo base_url("assets/js/bootstrap.min.js");?> type="text/javascript"></script>

<!--  Charts Plugin -->
<script src=<?php echo base_url("assets/js/chartist.min.js");?>></script>

<!--  Notifications Plugin    -->
<script src=<?php echo base_url("assets/js/bootstrap-notify.js");?>></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src=<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=1.4.0");?>></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src=<?php echo base_url("assets/js/demo.js");?>></script>

<!--  Plugin ChatBot    -->
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiNmMTYxMDQiLCJ3ZWIiOnsiYm90SWQiOiI1YWM0ZTg1YzUyNWQyNjAwOTJlZDkxZDYiLCJ0aGVtZSI6IiNmMTYxMDQiLCJsYWJlbCI6IlZhbW9zIGzDoS4uLiJ9LCJ3ZWxjb21lVGV4dCI6IkV1IHBvc3NvIHRlIGFqdWRhcj8ifQ==" async defer></script>

<script type="text/javascript">
 $(document).ready(function(){

   demo.initChartist();

   $('#sobre_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Edicao/sobre');?>",
      data: dados,
      success: function(data)
      {
        $("#sobre_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A seção \"Sobre\" foi alterada."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
   $('#promocoes_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Edicao/promocoes');?>",
      data: dados,
      success: function(data)
      {
        $("#promocoes_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A seção \"Promoções\" foi alterada."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
    $('#cardapio_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Edicao/cardapio');?>",
      data: dados,
      success: function(data)
      {
        $("#cardapio_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A seção \"Cardápio\" foi alterada."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
    $('#pedidos_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Edicao/pedidos');?>",
      data: dados,
      success: function(data)
      {
        $("#pedidos_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A seção \"Pedidos\" foi alterada."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
    $('#contato_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Edicao/contato');?>",
      data: dados,
      success: function(data)
      {
        $("#contato_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A seção \"Contato\" foi alterada."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
    $('#npromocao_form').submit(function(){
    var dados = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Promocao/salvar');?>",
      data: dados,
      success: function(data)
      {
        $("#npromocao_form").trigger("reset");  
        
        $.notify({
         message: "<b>Sucesso!</b> A promoção foi salva."

       },{
        type: 'success',
        timer: 1000
      });

      }
    });
    return false;
  });
 });
</script>

</html>