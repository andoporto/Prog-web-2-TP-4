<HTML>
 <HEAD>
   <TITLE>Estructuras de Control</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Sentencia <I>if</I></H2>
     <?php
        echo "Hoy es <B>";
        $dia = date("D");
 
	if ($dia == "Mon") {
	     echo "Lunes";
	   } elseif ($dia == "Tue") {
	       echo "Martes";
	     } elseif ($dia == "Wed") {
	         echo "Miercoles";
	       } elseif ($dia == "Thu") {
	           echo "Jueves";
	         } elseif ($dia == "Fri") {
	             echo "Viernes";
	            } elseif ($dia == "Sat") {
	                echo "Sabado";
	              } else {
	                  echo "Domingo";
	                }
        echo "</B>"; 
    ?>
   </CENTER>
 </BODY>
</HTML>
