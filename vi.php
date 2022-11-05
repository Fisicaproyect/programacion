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
<input type="text" name="g">
<br> <br>
<p><h1> <font size="6"color="white"> Ingrese ACELERACION:</font></h1></p>
<input type="text" name="h">
<br> <br>
<p><h1><font size="6" color="white">  Ingrese TIEMPO:</font></h1></p>
<input type="text" name="i">
<br>
<br>
<br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$g = $_POST['g'];
$h = $_POST['h']; 
$i = $_POST['i']; 
$sx = ($g-($h*$i));;
echo  "<font size=\"6\" color=\"white\">'VELOCIDAD INICIAL ES: '$sx  M/S'</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html