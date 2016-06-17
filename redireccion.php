<?php

  $Select=$_POST['select'];
 for ($i=0;$i<count($Select);$i++) 
     { 
  
       $CargoSelec=$Select[$i];
            
       } 

  if(isset($_POST['BtnIngreso'])){	

  	$Selection=$_POST['select'];
  	
  	 if($CargoSelec=="Administrador"){
  	 	echo "admin";
  	 	header("location:admin/menu_root.php");

  	 }

  	 if($CargoSelec=="Docente"){
       echo "Docente";
       header("location:docente/menu.php");
  	 }

     if($CargoSelec==""){
       
       header("location:index.php");
     }
  	


  }

?>