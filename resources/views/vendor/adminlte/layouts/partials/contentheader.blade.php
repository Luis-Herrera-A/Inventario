<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><center>
      
        <script language="JavaScript">
function mueveReloj(){
   	momentoActual = new Date()
   	hora = momentoActual.getHours()
   	minuto = momentoActual.getMinutes()
   	segundo = momentoActual.getSeconds()

   	str_segundo = new String (segundo)
   	if (str_segundo.length == 1)
      	segundo = "0" + segundo

   	str_minuto = new String (minuto)
   	if (str_minuto.length == 1)
      	minuto = "0" + minuto

   	str_hora = new String (hora)
   	if (str_hora.length == 1)
      	hora = "0" + hora

   	horaImprimible = hora + " : " + minuto + " : " + segundo

   	document.form_reloj.reloj.value = horaImprimible

   	setTimeout("mueveReloj()",1000)
}
</script>
</head>

<body onload="mueveReloj()">
<form name="form_reloj">
<input type="label" name="reloj" size="20" style="font-size: 15pt; text-align : center;  background-color: transparent; border: 0px solid #000000;" onfocus="window.document.form_reloj.reloj.blur()">
</form>

</body>
<script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f=new Date();
document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
        <small>@yield('contentheader_description')</small></Center>
    </h1>

</section>
