<?php include('lib/constantes.php')?>
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
        <link href="css/estiloscss.css" rel="stylesheet" type="text/css"/>
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
                      <img src="lib/Logo_DuocUC.png" alt="logo" style="width:319px;">
                  </div>
                </div>
              </nav>
            </div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
       
    </body>
    
    <script>
        
        $("[id*=menu]").click(function(){
            var nameid=$(this).attr("id");
            
            nameid=nameid.substring(4);
            if (nameid.length >1){
            console.log(nameid);
            if ($("[id*=sub"+nameid+"]").css("display")!="none"){
                $("[id*=sub"+nameid+"]").css("display","none");
            }
            else{
                $("[id*=sub"+nameid+"]").show();
                $("[id*=sub"+nameid+"]").css("display","block");
            } 
        }
        });
        
       /* $("#menuingreso").click(function(){
            
            if ($("[id*=subingresos]").css("display")!="none"){
                $("[id*=subingresos]").css("display","none");
            }
            else{
                $("[id*=subingresos]").show();
                $("[id*=subingresos]").css("display","block");
            }
         });
         $("#menuinforme").click(function(){
            
            if ($("[id*=subinformes]").css("display")!="none"){
                $("[id*=subinformes]").css("display","none");
            }
            else{
                $("[id*=subinformes]").show();
                $("[id*=subinformes]").css("display","block");
            }
         });
         $("#menuconsulta").click(function(){
            
            if ($("[id*=subconsulta]").css("display")!="none"){
                $("[id*=subconsulta]").css("display","none");
            }
            else{
                $("[id*=subconsulta]").show();
                $("[id*=subconsulta]").css("display","block");
            }
         });*/
    </script>
    
    
</html>