<?php

require_once("login.php");

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    
    </style>
  </head>

  <body>
    <div>
      <nav class="navbar">
        <a class="navbar-brand" href="#">
          <img src="logo.png" width="500" height="50" class="d-inline-block align-top" alt="">
        </a>
        <div><button onclick="location.href='logoff.php'" class="botao" type="button">Sair</button></div>  
      </nav>
    </div>
    

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                  <img src="caiox.png" width="200" >
                  <h4><strong class="abrir"><center>Abrir Chamado</center></strong></h4>
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                  <img src="castrin.png" width="200" >
                  <h4><strong class="consultar"><center>Consultar Chamado</center></strong></h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>