 
<html>
<head>
  <title>Sistema de Planes Globales</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <link rel="stylesheet" type="text/css" href="Styles_funciones.css">
</head>
<body>
  <header><center><h2 id="titulo_Principal">Sistema de Planes Globales y Programas Analiticos</h2></center>
  <hr></hr>
  </header>
  
  <aside id="menu">
    <div id="titulo"><a id="titulo" href="index.php">Inicio</a></div>
    <div id="titulo">

    <a id="titulo" href="Buscar_Planes_Globales.php">Planes Globales</a>
    <a id="titulo" href="Materias_Asignadas.php">Materias</a>

    </div>
    <div id="titulo"><a id="titulo" href="Programa_Analitico_Publico.php">Programas Analiticos</a></div>
    <div id="titulo"><a id="titulo" href="Manual_de_Usuario.php">Manual de Usuario</a></div>

      <table id="tabla_user">
      <tr><td></td><td><img src="user.jpg" width="120" height="120"></td></tr>
      <tr><td>usuario:</td><td>Ariel Brayan</td></tr>
      <tr><td>cargo:</td><td>Docente</td></tr>
      <tr><td>nivel de estudios:</td><td>Ing. de Sistemas</td></tr>
       <tr><td>codigo:</td><td>2</td></tr>

    </table>
    
  </aside>

<article id="cuerpo">

 <?php
  // BOTON IMPRIMIR MATERIA

     require("coneccion.php");

       if(isset($_POST['btn_Imprimir'])){

         echo "entro ";

         echo $Cod_Materia=$_POST['txtCodM'];
       }

       // BOTON VER MATERIA

       if(isset($_POST['btn_Ver_Materia'])){

         echo "entro ";
          echo $Cod_Materia=$_POST['txtCodM'];
       }
       
      // BOTON EDITAR MATERIA

       if(isset($_POST['btn_Editar_Materia'])){


        echo "CODIGO MATERIA=".$Cod_Materia=$_POST['txtCodM']; echo "</p>";
        echo "CODIGO PLAN GLOBAL=".$Cod_Materia=$_POST['txtCodPG'];
       
        $query="SELECT * FROM planglobal pg,materia m,docente d 
        WHERE m.ID_Materia=$Cod_Materia AND pg.ID_Materia=m.ID_Materia 
        AND pg.ID_Docente=d.ID_Docente";

        $resultado=mysql_query($query,$link);
        echo "<form method='post' action=''>

        <input class='input_invi'type='text' value='".$Cod_Materia."' name='txt_CodM'> 
        <table id='tabla_Identificacion'><tr><td colspan='2'><h3> DATOS DE IDENTIFICACION </h3></td></tr>";
        while ($row=mysql_fetch_array($resultado)) {
        
          echo " <tr><td>&bull; Nombre de la materia: </td><td>".$row['Nombre_Materia']."</br></td></tr>";
          echo " <tr><td>&bull; Codigo: </td><td>".$row['Codigo']."</br></td></tr>";
          echo " <tr><td>&bull; Grupo: </td><td>".$row['Grupo']."</br></td></tr>";
          echo " <tr><td>&bull; Carga Horaria: </td><td><input type='text' name='txt_Carga_Horaria' value='".$row['Carga_Horaria']."'></br></td></tr>";
          echo " <tr><td>&bull; Materias con las que se relaciona </td><td>".$row['Materias_Relacionadas']."</br></td></tr>";
         
          echo '<tr><td>&bull; Docente: </td>
          <td><input type="text" name="txt_Nombre" value="'.$row['Nombre_Completo'].'">&nbsp;'
           .'<input type="text"  name="txt_Apellido_P" value="'.$row['Apellido_Paterno'].'">&nbsp;'
           .'<input type="text"  name="txt_Apellido_M" value="'.$row['Apellido_Materno'].'">&nbsp;</td></tr>';

          echo " <tr><td>&bull; Telefono: </td><td><input name='txt_Telefono' value='".$row['Telefono']."'></td></tr>";
          echo " <tr><td>&bull; Correo Electronico: </td><td><input name='txt_Correo' value='".$row['Correo']."' size='40'></td></tr>";
        }
          
        echo "<tr><td colspan='2'><center><input type='submit' value='Siguiente' name='btn_Justificacion'></center></td></tr></table></form>";
        
       }

       // BOTON JUSTIFICACION

       if(isset($_POST['btn_Justificacion']))
       {
        echo "JUSTIFICACION a</br>";

        $Cod_Materia=$_POST['txt_CodM'];

        $query="SELECT * FROM planglobal pg,materia m,justificacion j
        WHERE m.ID_Materia=$Cod_Materia AND pg.ID_Materia=m.ID_Materia 
        AND j.ID_PG=pg.ID_PG";

        $resultado=mysql_query($query,$link);
      
        while ($row=mysql_fetch_array($resultado)) {
              echo "<form method='post' action=''>
              <input class='input_invi' type='text' value='".$Cod_Materia."' name='txt_Cod_M'> 
              <textarea name='txt_justificacion' cols='100' rows='18' >".$row['Justificacion'].
              "</textarea></br></p>
               <input type='submit' value='Siguiente' name='btn_Objetivos'></form>";}
        

       }
       
       // BOTON OBJETIVOS

       if(isset($_POST['btn_Objetivos'])){
         $Cod_Materia=$_POST['txt_Cod_M'];
        echo "OBJETIVOS</br>";

        echo "<form method='post'>
        <table>
         <input class='input_invi' type='text' value='". $Cod_Materia."' name='txt_Cod_M'> 
        <tr><td><textarea cols='100' rows='3' name='txt_new_Objetivo'></textarea></td>
        <td><input type='submit' value='Ingresar' name='btn_Ingresar_Objetivo'></td></tr>
                                 
        </table></form>";

        $query="SELECT * FROM planglobal pg,materia m,justificacion j,objetivo o, objetivos ob
        WHERE m.ID_Materia=$Cod_Materia AND pg.ID_Materia=m.ID_Materia 
        AND j.ID_PG=pg.ID_PG AND o.ID_PG=ob.Clave_Objetivo";

        $resultado=mysql_query($query,$link);
        
        while ($row=mysql_fetch_array($resultado)) {
            
            echo "<form method='post' action=''>
                  <input class='input_invi' type='text' value='". $Cod_Materia."' name='txt_Cod_M'> 
                  <input class='input_invi' type='text' value='".$row['ID_Objetivo']."' name='txt_Cod_O'>
                  <table>
                  <tr><td>
                  <textarea name='txt_Objetivo' cols='100' rows='3'>".$row['Texto_Obj']."</textarea></td>
                  <td><input type='submit' name='btn_Editar_Objetivo' value='Editar'></td>
                  <td><input type='submit' name='btn_Editar_Objetivo' value='Eliminar'></td></tr>
                  </table></form>";
          }
         echo "<form method='post' action=''>
         <input class='input_invi' type='text' value='". $Cod_Materia."' name='txt_Cod_M'> 
         <input type='submit' value='Siguiente' name='btn_Contenidos'></form>";

       }
      
       //BOTON EDITAR OBJETIVOS

       if(isset($_POST['btn_Editar_Objetivo'])){

         $Cod_Materia=$_POST['txt_Cod_M'];
         $id_ob=$_POST['txt_Cod_O']."</p>";
         $obj=$_POST['txt_Objetivo'];

        echo "<script>alert('Se edito Correctamente');
              
          </script>";

        echo "<form method='post' action=''>
              <input class='input_invi' type='text' value='". $Cod_Materia."' name='txt_Cod_M'>
              <input type='submit' value='atras' name='btn_Objetivos'> </form>";

       
       }
        
        //BOTON INGRESAR NUEVO OBJETIVO
        if(isset($_POST['btn_Ingresar_Objetivo'])){

         $Cod_Materia=$_POST['txt_Cod_M'];
       
        echo "<script>alert('Se edito Correctamente');
              
          </script>";

        echo "<form method='post' action=''>
              <input class='input_invi' type='text' value='". $Cod_Materia."' name='txt_Cod_M'>
              <input type='submit' value='atras' name='btn_Objetivos'> </form>";

       
       }
      

      // BOTON DE CONTENIDOS
       if(isset($_POST['btn_Contenidos']))
       {
         echo "CONTENIDOS </p>";
         $Cod_Materia=$_POST['txt_Cod_M'];
         
         echo "<form method='post' action=''>
               <input type='submit' name='btn_Ingresar_Contenidos' value='Ingresar Contenidos'></p>
               </form> ";

        $query="SELECT COUNT(*) FROM unidad 
        WHERE ID_PG=3";

        $resultado=mysql_query($query,$link);
        $u=mysql_result($resultado, 0, "COUNT(*)");
        //echo $u;
        $query1="SELECT * FROM unidad WHERE ID_PG=3";
        $resultado1=mysql_query($query1,$link);
        
        
         for ($i=0; $i <$u; $i++) { 
             
              
             mysql_result($resultado1, $i, "Unidad");
             $id_unidad=mysql_result($resultado1, $i, "ID_Unidad");
        
             echo "<form method='post' action=''> <table><tr><td>Unidad :</td><td><textarea cols='80' rows='3' name='txt_Unidad'>"
                   .mysql_result($resultado1, $i, "Unidad")."</textarea></td><td>Numero :</td>
                    <td><input type='text' size='3' value='".mysql_result($resultado1, $i, "Numero_Unidad")."' name=''></td>
                   <td><input type='submit' value='Editar' name='btn_Editar_Unidad'>
                   </td></tr></table></form>";


             //OBJETIVO
             $query2="SELECT COUNT(*) FROM seccion_objetivo 
                     WHERE ID_Unidad=$id_unidad";
             $resultado2=mysql_query($query2,$link);

             $n=mysql_result($resultado2, 0, "COUNT(*)");
                    echo "OBJETIVOS </P>";
                for ($j=0; $j <$n ; $j++) { 
                 
                  $query3="SELECT * FROM seccion_objetivo 
                           WHERE ID_Unidad=$id_unidad";
                  $resultado3=mysql_query($query3,$link);
                   echo "<form method='post' action=''> <table>
                   <tr><td><textarea cols='100' rows='3' name='txt_Objetivo'>"
                   .mysql_result($resultado3, $j, "Objetivo")."</textarea></td><td><input type='submit' value='Editar' name='btn_Editar_Objetivos'></td></tr></table></form>";
                }

             // CONTENIDO
                $query4="SELECT COUNT(*) FROM seccion_contenido 
                         WHERE ID_Unidad=$id_unidad";
                $resultado4=mysql_query($query4,$link);

                $m=mysql_result($resultado4, 0, "COUNT(*)");
                 echo "CONTENIDOS </P>";
                 for ($k=0; $k <$m ; $k++) { 
                  $query5="SELECT * FROM seccion_contenido 
                     WHERE ID_Unidad=$id_unidad";
                      $resultado5=mysql_query($query5,$link);
                 
                 echo "<form method='post' action=''> <table>
                 <tr><td><textarea cols='100' rows='3' name='txt_Contenido'>"
                 .mysql_result($resultado5, $k, "Contenido")."</textarea></td><td><input type='submit' value='Editar' name='btn_Editar_Contenido'></td></tr>
                 </table></form>";
                }
             }

             echo " <form method='post' action=''>
                    <input type='submit' name='btn_Siguiente_Metodologias' value='Siguiente'>
                    </form>";
         }


         //BTN EDITAR UNIDAD

        if(isset($_POST['btn_Editar_Unidad']))
         {
           echo $text_U=$_POST['txt_Unidad'];
         

           echo "<form method='post' ation=''>
           <script>alert('Datos Editados Correctamente');</script>
                 <input type='text' size='1' name='txt_Cod_M' value='2'>
                 <input type='submit' value='atras' name='btn_Contenidos'> 
                 </form>";


         }

        //BOTON EDITAR OBJETIVOS

         if(isset($_POST['btn_Editar_Objetivos']))
         {
           echo $text_U=$_POST['txt_Objetivo'];
         

           echo "<form method='post' ation=''>
           <script>alert('Datos Editados Correctamente');</script>
                 <input type='text' size='1' name='txt_Cod_M' value='2'>
                 <input type='submit' value='atras' name='btn_Contenidos'> 
                 </form>";
         }

        //BOTON EDITAR CONTENIDOS
    

         if(isset($_POST['btn_Editar_Contenido']))
         {
           echo $text_U=$_POST['txt_Contenido'];
         

           echo "<form method='post' ation=''>
           <script>alert('Datos Editados Correctamente');</script>
                 <input type='text' size='1' name='txt_Cod_M' value='2'>
                 <input type='submit' value='atras' name='btn_Contenidos'> 
                 </form>";
         }

     //BOTON INSERTAR UNIDAD

       if(isset($_POST['btn_Ingresar_Contenidos']))
       {
          echo "INSERTAR NUEVA UNIDAD";

          echo "<form method='post' action=''>
          <table>
          <tr><td><textarea name='txt_Contenido' cols='80' rows='3' ></textarea></td>
          <td>Unidad :<input type='text' size='5'></td>
          <td><input type='submit' value='Ingresar' name='btn_Contenidos_Nuevos'></td>
          </tr></table></form>";

          echo "<form method='post' action=''>
                 <input type='text' size='5' value='2' name='txt_Cod_M'>
                <input type='submit' value='atras' name='btn_Contenidos' ></form>";
        }  
  
      //BOTON INSERTAR OBJETIVOS Y CONTENIDOS
        if(isset($_POST['btn_Contenidos_Nuevos'])){
        
         echo $unidad=$_POST['txt_Contenido'];
         echo "<form method='post' action=''>";
                 
         echo "<table>
               <input type='text' name='txt_Unidad_uno' value='$unidad'></input>
               <tr><td>OBJETIVO :</td><td><textarea cols='100' rows='3' name='txt_Objetivo'></textarea></td>
                   <td><input type='submit' value='Ingresar' name='btn_add_Objetivo'></td></tr>
               <tr><td>CONTENIDO :</td><td><textarea cols='100' rows='3' name='txt_Contenidos'></textarea></td>
                   <td><input type='submit' value='Ingresar' name='btn_add_Contenido'></td></tr>
                </table></form>";

          echo "<form method='post' action=''>
                
                <input type='submit' value='atras' name='btn_Contenidos' ></form>";
        }  

        //BOTTON INGRESAR OBJETIVOS
        if(isset($_POST['btn_add_Objetivo'])){

          echo "UNIDAD :".$Unidad=$_POST['txt_Unidad_uno']; echo "</p>";
          echo $Objetivo=$_POST['txt_Objetivo'];
          echo "<script>alert('Datos Ingresados Correctamente');</script>";

          echo "<form method='post' action=''> 
          <input type='text' name='txt_Contenido' value='$Unidad'></input>
          <input type='submit' value='atras' name='btn_Contenidos_Nuevos'></form>";
        }

        //BOTON INGRESAR CONTENIDOS

         if(isset($_POST['btn_add_Contenido'])){
          echo "CONTENIDO INGRESADO CORRECTAMENTE";
          echo $Unidad=$_POST['txt_Unidad_uno'];
          echo $Contendio=$_POST['txt_Contenidos'];
          echo "<form method='post' action=''> 
          <input type='text' name='txt_Contenido' value='$Unidad'></input>
          <input type='submit' value='atras' name='btn_Contenidos_Nuevos'></form>";
        }      
        


       // BTON METODOLOGIAS
       
       if(isset($_POST['btn_Siguiente_Metodologias']))
       {
            echo "METODOLOGIAS</p>";

            echo "<form method='post' action=''>
            <input type='submit' name='btn_Ingresar_Metodologias' value='Ingresar Nueva Metodologia'></p>
                 </form>";
            $Cod_PG=3;
            $query="SELECT * FROM planglobal pg,metodologia m
             WHERE pg.ID_PG=m.ID_PG";
            $resultado=mysql_query($query,$link);
        
            while ($row=mysql_fetch_array($resultado)) {
                echo "<form method='post' action=''>
                <textarea cols='100' rows='5'  name='txt_Metodologia'>".$row['Metodologia']."</textarea><input type='submit' name='btn_Editar_Metodologia' value='Editar'></p></form>";
           }
           //aniadimos el boton siguiente

           echo "<form method='post'>
               <input type='submit' value='Siguiente' name='btn_Cronograma'>
            </form>";
            
       }

       if(isset($_POST['btn_Editar_Metodologia'])){
         echo $m=$_POST['txt_Metodologia'];
         echo "<script>alert('Edificion Realizada');</script>";
         
         echo "<form method='post' action=''>
               
               <input type='submit' value='atras' name='btn_Siguiente_Metodologias'>
             </form>";

       }

       if(isset($_POST['btn_Ingresar_Metodologias'])){
             echo "INGRESAR METODOLOGIA </P>";

             echo "<form method='post' action=''>
               <textarea  cols='100' rows='5' name='txt_Metodologia'></textarea>
               <input type='submit' value='Ingresar' name='btn_ingresar_Metod'></p>
               <input type='submit' value='atras' name='btn_Siguiente_Metodologias'>
             </form>";
       }

       if(isset($_POST['btn_ingresar_Metod'])){

        echo "<form method='post'>
          <input type='submit' value='atras' name='btn_Ingresar_Metodologias'></form>";
       }


       if(isset($_POST['btn_Cronograma'])){
        echo "CRONOGRAMA </P>";
        $ID_PG=3;

          $query="SELECT * FROM planglobal pg, cronograma c
             WHERE pg.ID_PG=c.ID_PG";
            $resultado=mysql_query($query,$link);
            echo "<table><tr><td>Unidad</td><td>Duracion (Horas Academicas)</td><td>Duracion en Semanas</td></tr></table>";
        
            while ($row=mysql_fetch_array($resultado)) {
                echo "<form method='post' action=''>
                <table>
                <tr><td><input size='70' type='text' name='txt_Unidad' value='".$row['Unidad']."'> </td> 
                <td><input size='5' type='text' name='txt_Horas' value='".$row['Duracion_Horas']."'> </td> 
                <td><input size='5' type='text' name='txt_Semanas' value='".$row['Duracion_Semnas']."'> </td> 
                <td><input type='submit' name='btn_Editar_Cronograma' value='Editar'></td></tr>
                </table></form>";
            }
        
           echo "<form method='post' action=''>
              
               <input type='submit' value='Siguiente' name='btn_Siguiente_Criterios'>
             </form>";

         }
        

   if(isset($_POST['btn_Editar_Cronograma'])){

       echo $txt_Unidad=$_POST['txt_Unidad'];
       echo $txt_Horas=$_POST['txt_Horas'];
       echo $txt_Semanas=$_POST['txt_Semanas'];
       echo "<script>alert('Edicion Correcta');</script>";
       echo "<form method='post' action=''>
               
               <input type='submit' value='atras' name='btn_Cronograma'>
             </form>";

       }

       //BOTON CRITERIOS 
       

        if(isset($_POST['btn_Siguiente_Criterios'])){
           $ID_PG=3;
      
         echo "CRITERIOS DE EVALUACION </p>";
         echo "<form method='post' action=''>
               
        <input type='submit' value='Insertar Nuevo Criterio' name='btn_Nuevo Criterio_Evaluacion'></form>";
         
         $query="SELECT * 
                 FROM planglobal pg, criterio_evaluacion c, criterio cs
                 WHERE pg.ID_PG=c.ID_PG AND c.Id_Criterio=cs.ID_Criterio_Evaluacion";
            $resultado=mysql_query($query,$link);
            echo "<table><tr><td>Unidad</td><td>Duracion (Horas Academicas)</td><td>Duracion en Semanas</td></tr></table>";
        
            while ($row=mysql_fetch_array($resultado)) {
                echo "<form method='post' action=''>
                <table>
                <tr><td><textarea cols='100' rows='5' name='txt_Criterio_Evaluacion' >".$row['Criterio']."</textarea></td> 
             
                <td><input type='submit' name='btn_Editar_Criterio' value='Editar'></td></tr>
                </table></form>";
            }   

            echo "<form method='post' action=''>
                <input type='submit' value='Siguiente' name='btn_Siguiente_Bibliografia'>
                </form>" ;    
       }
       //BOTON EDITAR CRITERIO

       if(isset($_POST['btn_Editar_Criterio'])){
          echo $Criterio=$_POST['txt_Criterio_Evaluacion'];
          echo "<script>alert('Edicion Correcta');</script>";
          
          echo "<form method='post' action=''>
                <input type='submit' value='atras' name='btn_Siguiente_Criterios'>
                </form>";
       }

       //BOTON BIBLIOGRAFIAS

        if(isset($_POST['btn_Siguiente_Bibliografia'])){
         
         ECHO "BIBLIOGRAFIAS </P>";

          echo "<form method='post' action=''>
               
        <input type='submit' value='Insertar Nuevo Bibliografia' name='btn_Nueva_Bibliografia'></form>";
         
         $query="SELECT * 
                 FROM planglobal pg,bibliografia b
                 WHERE pg.ID_PG=b.ID_PG";
            $resultado=mysql_query($query,$link);
            echo "<table><tr><td>Unidad</td><td>Duracion (Horas Academicas)</td><td>Duracion en Semanas</td></tr></table>";
        
            while ($row=mysql_fetch_array($resultado)) {
                echo "<form method='post' action=''>
                <table>
                <tr><td><textarea cols='100' rows='3' name='txt_Bibliografia' >".$row['texto']."</textarea></td> 
             
                <td><input type='submit' name='btn_Editar_Bibliografia' value='Editar'></td></tr>
                </table></form>";
            }   

            echo "<form method='post' action=''>
                <input type='submit' value='Terminar Editado' name='btn_Materias'>
                </form>" ;      
       }

       //BOTON INGRESO DE BIBLIOGRAFIAS
      
        if(isset($_POST['btn_Nueva_Bibliografia'])){
          
         echo "<form method='post' action=''>
               <textarea  cols='100' rows='3' name='txt_Bibliografia_Nueva'></textarea>
               <input type='submit' value='Ingresar' name='btn_Ingresar_Bibliografia'></p>
              
             </form>";
          
          echo "<form method='post' action=''>
                <input type='submit' value='atras' name='btn_Siguiente_Bibliografia'>
                </form>";
       }
       // BOTON INGRESO DE DATOS BIBLIOGRAFICOS

       if(isset($_POST['btn_Ingresar_Bibliografia']))
       { 
           echo $b=$_POST['txt_Bibliografia_Nueva'];

          echo "<script>alert('Datos Ingresados Correctamente');</script><form method='post' action=''>
                <input type='submit' value='atras' name='btn_Nueva_Bibliografia'>
                </form>";
       }

       //BOTON EDITADO DE LAS BIBLIOGRAFIAS

        if(isset($_POST['btn_Editar_Bibliografia'])){
          echo $b=$_POST['txt_Bibliografia'];
          echo "<script>alert('Edicion Correcta');</script>";
          
          echo "<form method='post' action=''>
                <input type='submit' value='atras' name='btn_Siguiente_Bibliografia'>
                </form>";
       }


       ?>
</article>

</body>


<footer>




<article id="footer">
<hr>
 <center>

 <h3 id="titulo_footer">Paginas Amigas</br>
 <a id="link_footer" href=""> Fcyt </a>
 <a id="link_footer" href=""> Umss </a>
 <a id="link_footer" href=""> Saga </a>
 <a id="link_footer" href=""> Moodle </a>
 <a id="link_footer" href=""> Caroline </a>
 </h3>
 

 </center>


</article>



</footer>
</html>