<?php
include('../lib/constantes.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estiloscss.css" rel="stylesheet" type="text/css"/>
        <script src="../js/menujs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style> @import url('https://fonts.googleapis.com/css?family=Ubuntu');</style> 

    </head>
    <body>
        
        
        <div id="contenedor">
            <div id="titulositio">
             <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                      <img src="../lib/Logo_DuocUC.png" alt="logo" style="width:319px;">
                  </div>
                </div>
              </nav>
            </div>
            <div id="menu"><?php include('../menu.php');?></div>
            
            <div id="contenido">
               <h1>Productos</h1>
               <div id="consulta">
                            
               </div>
            </div>
        </div>
    </body>
</html>