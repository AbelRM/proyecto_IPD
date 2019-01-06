
<html lang="es">
<head>
   
   <title>IPD Tacna - Login</title>
    
    <?php 
    
        include '../include/head.php';
    
    ?>
    
</head>
<body>
    

<section class="bg-light py-3">
    
    <div class="container">
      
      <div class="row">
         <div class="col-md-12 my-3">
             <div class="card py-3 container">
                 <h3>SISTEMA INFORMÁTICO - IPFID</h3>
             </div>
         </div>
          <div class="col-md-5 align-self-center my-3">
                    <div class="card py-3 container">
           <form action="">
           <div class=" py-2">
              <p class="text-center"> <img src="../img/logo_ipd.png" width="300" alt=""></p>
               
           </div>
            <input type="text" class="form-control my-3" placeholder="Nombre del usuario">
            <input type="text" class="form-control my-3" placeholder="Contraseña del usuario">
            <button class="btn btn-danger btn-block my-3">
                Ingresar
            </button>
            <a href="">¿Olvidaste tu contraseña? Recuperelo Aquí</a>
            
        </form>
           
       </div>
        
          </div>
        <div class="col-md-7 my-3">
              <div class="row">
                  <div class="col-md-12">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                       Mensajes de ayuda!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                     </div>
                  </div>
                   <div class="col-md-12">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Asuntos pendientes!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                     </div>
                  </div>
              </div>
          </div>
         
      </div>
      </div>
    
</section>
    
      <?php 
    
        include '../include/footer.php';
    
    ?>
     
</body>
</html>