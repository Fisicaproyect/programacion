  <html>
<head> <title> Caida libre  </title>
</head>
<!-- FORMULAS -->
<body background="fondo.jpg"> <div align="center">
<br>
<br>
<br>
<br><font face="Comic Sans MS" size="5" color="white"> 
<form method="POST" action="">
<p><h1><font size="6" color="white">Ingrese DISTANCIA:</font></h1></p>
<input type="text" name="j">
<br> <br>
<p><h1> <font size="6"color="white">Ingres TIEMPO: </font></h1></p>
<input type="text" name="k">
<br>
<br>
<br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$j = $_POST['j'];
$k = $_POST['k']; 
$sx = $j/$k;
echo  "<font size=\"6\" color=\"white\">'LA VELOCIDAD ES: '$sx '</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html
