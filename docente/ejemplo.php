
<script type="text/javascript">
window.onload = function()
{
funcion1(){alert('Bienvenido a esta pagina');}
funcion2();
funcion3();
}
</script>

 $query="SELECT * FROM planglobal pg,materia m,docente d 
        WHERE pg.ID_PG=$CodigoPG AND pg.ID_Materia=m.ID_Materia 
        AND pg.ID_Docente=d.ID_Docente";

        $resultado=mysql_query($query,$link);
        echo "<form method='submit' action=''>
        <table id='tabla_Identificacion'><tr><td colspan='2'><h3> DATOS DE IDENTIFICACION </h3></td></tr>";
        while ($row=mysql_fetch_array($resultado)) {
        
          echo " <tr><td>&bull; Nombre de la materia: </td><td>".$row['Nombre_Materia']."</br></td></tr>";
          echo " <tr><td>&bull; Codigo: </td><td>".$row['Codigo']."</br></td></tr>";
          echo " <tr><td>&bull; Grupo: </td><td>".$row['Grupo']."</br></td></tr>";
          echo " <tr><td>&bull; Carga Horaria: </td><td>".$row['Carga_Horaria']."</br></td></tr>";
          echo " <tr><td>&bull; Materias con las que se relaciona </td><td>".$row['Materias_Relacionadas']."</br></td></tr>";
         
          echo '<tr><td>&bull; Docente: </td>
          <td><input type="text" name="txt_Nombre" value="'.$row['Nombre_Completo'].'">&nbsp;'
           .'<input type="text"  name="txt_Apellido_P" value="'.$row['Apellido_Paterno'].'">&nbsp;'
           .'<input type="text"  name="txt_Apellido_M" value="'.$row['Apellido_Materno'].'">&nbsp;</td></tr>';

          echo " <tr><td>&bull; Telefono: </td><td><input name='txt_Telefono' value='".$row['Telefono']."'></td></tr>";
          echo " <tr><td>&bull; Correo Electronico: </td><td><input name='txt_Correo' value='".$row['Correo']."' size='40'></td></tr>";
        }
          
        echo "<tr><td colspan='2'><center><input type='submit' value='Siguiente' name='btn_Justificacion'></center></td></tr></table></form>";
        