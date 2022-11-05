<html>
<head> <title> Caida libre  </title>
</head>
<!-- FORMULAS -->
<body background="fondo.jpg"> <div align="center">
<br>
<br>
<br>
<font face="Comic Sans MS" size="5" color="white"> 
<form method="POST" action="">
<p><h1><font size="6" color="white">  Ingrese VELOCIDAD INICIAL :</font></h1></p>
<input type="text" name="d">
<br> <br>
<p><h1> <font size="6"color="white">Ingrese ACELERACION: </font></h1></p>
<input type="text" name="e">
<br> <br>
<p><h1><font size="6" color="white"> Ingrese TIEMPO:</font></h1></p>
<input type="text" name="f">
<br>
<br>
<br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$d = $_POST['d'];
$e = $_POST['e']; 
$f = $_POST['f']; 
$sx = ($d+($e*$f));
echo  "<font size=\"6\" color=\"white\">'VELOCIDAD FINAL ES: '$sx  M/S'</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html