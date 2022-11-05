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
<p><h1><font size="6" color="white">   Ingrese VELOCIDAD FINAL:</font></h1></p>
<input type="text" name="j">
<br> <br>
<p><h1> <font size="6"color="white">  Ingrese VELOCIDAD INICIAL: </font></h1></p>
<input type="text" name="k">
<br> <br>
<p><h1><font size="6" color="white">  Ingrese ACELERACION:</font></h1></p>
<input type="text" name="l">
<br>
<br>
<br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$j = $_POST['j'];
$k = $_POST['k']; 
$l = $_POST['l']; 
$sx = (($j-$k)/$l);
echo  "<font size=\"6\" color=\"white\">'EL TIEMPO ES: '$sx '</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html