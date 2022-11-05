<html>
<head> <title> Caida libre  </title>
</head>
<!-- FORMULAS -->
<body background="fondo.jpg"> <div align="center">
<br>
<br>
<br><font face="Comic Sans MS" size="5" color="white"> 
<form method="POST" action="">
<p><h1><font size="6" color="white">  Ingrese VELOCIDAD FINAL:</font></h1></p>
<input type="text" name="a">
<br> <br>
<p><h1> <font size="6"color="white">Ingrese VELOCIDA INICIAL: </font></h1></p>
<input type="text" name="b">
<br> <br>
<p><h1><font size="6" color="white"> Ingrese TIEMPO:</font></h1></p>
<input type="text" name="c">
<br>
<br>
<br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$a = $_POST['a'];
$b = $_POST['b']; 
$c = $_POST['c']; 
$sx = (($a-$b)/ $c);
echo  "<font size=\"6\" color=\"white\">'La aceleracion es: '$sx  M/S'</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html