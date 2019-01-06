
<html lang="es">
<head>
   
   <title>IPD Tacna - Usuarios</title>
    
    <?php 
    
        include '../include/head.php';
    
    ?>
    <style>
    
        html,body{
            margin: 0px;
            padding: 0px;
            
        }
        .div-p{
            padding-top: 12px;
            padding-bottom: 12px;
        }
          .div-m{
            margin-top: 12px;
            margin-bottom: 12px;
        }
        
        .card-header{
            /*color: #E54949;
           */
        }
        
    </style>
    
</head>
<body>
    <header>
      
          <?php
        
            include "../include/header.php";
        
        ?>
        
    </header> 
     
        <?php
          
        require "../include/navbar.php";
        require "../modal/nuevo_usuario.php"
    
    
    ?> 
        
   
    
    
   <section class="container-fluid div-p">
 
       <div class="row">
           <div class="col-md-3">
               <div class="card div-m">
                   <div class="card-header b">
                       <span class="fa fa-wrench"></span> Operaciones
                   </div>
                    <div class="card-body">
                       <a type="button" class="btn btn-dark btn-block text-white" data-toggle="modal" data-target="#exampleModalLong"><span class="fa fa-user"></span> Nuevo usuario</a>
                         <a type="button" class="btn btn-danger btn-block text-white"><span class="fa fa-file"></span> Generar reporte</a>
                   </div>
               </div>
                <div class="card div-m">
                   <div class="card-header b">
                        <span class="fa fa-history"></span> Cambios recientes 
                   </div>
                    <div class="card-body">
                       <p><a href="">Se añadio a Jorge Andres</a></p>
                        <p><a href="">Se edito a Jorge Andres</a></p>
                         <p><a href="">Se añadio a Marisol Hernandez</a></p>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
                <div class="card div-m">
                   <div class="card-header b">
                        <span class="fa fa-table"></span> Tabla de usuarios 
                   </div>
                    <div class="card-body">
                       <div class="table-responsive-sm BORDER">
                          <table class="table">
                           <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CARGO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>CLAUDIO</td>
      <td>ALVAREZ</td>
      <td>DIRECTOR</td>
    </tr>
    
  </tbody>
                          </table>
                        </div>

                   </div>
               </div>
           </div>
            <div class="col-md-3">
               <div class="card div-m">
                   <div class="card-header">
                       <h5 class="label"><span class="fa fa-envelope"></span> Mensajes</h5>
                   </div>
                    <div class="card-body">
                       
                   </div>
               </div>
                <div class="card div-m">
                   <div class="card-header">
                       <h5 class="label"><span class="fa fa-bell"></span> Alertas</h5>
                   </div>
                    <div class="card-body">
                       
                   </div>
               </div>
                <div class="card div-m">
                   <div class="card-header">
                       <h5 class="label"><span class="fa fa-book"></span> Notas</h5>
                   </div>
                    <div class="card-body">
                       
                   </div>
               </div>
           </div>
       </div>
       
   </section>
      
    <footer>
        <?php 

            include '../include/footer.php';

        ?>

    </footer>
   
</body>
</html>