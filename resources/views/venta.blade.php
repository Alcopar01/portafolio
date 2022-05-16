<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portafolio</title>
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fenix&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!-- Styles -->
        <style type="text/css">
        	.form-inputs{
    position:relative;
}
.form-inputs .form-control{
    height:45px; 
}

.form-inputs .form-control:focus{
    box-shadow:none;
    border:1px solid #000;
}

.form-inputs i{
    position:absolute;
    right:10px;
    top:15px;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.image-container {
    position: relative;
    width: 200px;
    height: 200px;
}
.image-container .after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    color: #FFF;
    padding-top: 90px;
}
.image-container:hover .after {
    display: block;
    background: rgba(0, 0, 0, .6);
}

        </style>
    </head>
    <body>
<div class="modal fade" id="carroModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carro</h5>
        
      </div>
      <div class="modal-body">
      	


                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-3">
<img src="/imagenes/Productos/madera.jpg" class="img-thumbnail" width="200" height="200">

                                        </div>
                                        <div class="col-lg-6">
                                            <b>Madera</b>
                                            <br><small>Cantidad: 1</small>
                                        </div>
                                        <div class="col-lg-3">
                                            <p>$130</p>
                                            <p></p>
                                        </div>
                                        <hr>
                                    </div>
                                </li>
                           
                            <br>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <b>Total: </b>$130
                                    </div>
                                    <div class="col-lg-2">
                                        <form action="">
                                            
                                            <button class="btn btn-secondary btn-sm"><i class="bx bx-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <br>
                            <div class="row" style="margin: 0px;">
                                <a class="btn btn-dark btn-sm btn-block" href="">
                                    CART <i class="bx bx-left-arrow-circle"></i>
                                   
                                </a>
                                <a class="btn btn-dark btn-sm btn-block" href="/checkout">
                                    CHECKOUT <i class="bx bx-right-arrow-circle"></i>
                                </a>
                            </div>
                        
                            
                       
      </div>
    </div>
  </div>
</div>    	
<header class="section-header">

<section class="header-main border-bottom bg-white">
	<div class="container-fluid">
       <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
           <div class="col-md-2">
           	<center>
               <img  class="d-none d-md-flex" src="/imagenes/Productos/product-list.png" width="100">
               </center>
           </div>
           <div class="col-md-8">
        <div class="d-flex form-inputs">
        <input class="form-control" type="text" placeholder="Search any product...">
        <i class="bx bx-search"></i>
        </div>
           </div>
           
           <div class="col-md-2">
               <div class="d-flex d-none d-md-flex flex-row align-items-center">
                   <a href="#carroModal1" data-bs-toggle="modal" data-bs-target="#carroModal1"><span class="shop-bag"><i class='bx bxs-shopping-bag'></i></span></a>
                      
               </div>           
           </div>
       </div>
	</div> 
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand d-md-none d-md-flex" href="#">Categorias</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tablas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Muebles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Herramientas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cajas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Pequeñas</a></li>
            <li><a class="dropdown-item" href="#">Medianas</a></li>
            <li><a class="dropdown-item" href="#">Largas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="row gx-0">
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                            <div class="image-container">
		                               <a  href="" data-bs-toggle="modal" data-bs-target="#Roble" >
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 
		                                 <img class="mx-auto d-block" src="/imagenes/Productos/madera.jpg" alt="Avatar"  style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										

		                  </a>
		                  </div>

		              <div class="product-details">
		                <h6>Roble</h6>
		                <div class="price">
		                  <h6>$100.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>

	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a  href="" data-bs-toggle="modal" data-bs-target="#Roble" >
		                               	
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-fwstudio-172289.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Caoba</h6>
		                <div class="price">
		                  <h6>$110.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a href="#" class="social-info"  data-toggle="modal" data-target="#exampleModal">
		                               	
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-magda-ehlers-985287.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Corteza</h6>
		                <div class="price">
		                  <h6>$50.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a href="#" class="social-info"  data-toggle="modal" data-target="#exampleModal">
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-maria-ilaria-piras-122588.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Tronco</h6>
		                <div class="price">
		                  <h6>$100.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a href="#" class="social-info"  data-toggle="modal" data-target="#exampleModal">
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-fwstudio-172276.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Pino</h6>
		                <div class="price">
		                  <h6>$100.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a href="#" class="social-info"  data-toggle="modal" data-target="#exampleModal">
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-pixabay-301717.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Teca</h6>
		                <div class="price">
		                  <h6>$180.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a href="#" class="social-info"  data-toggle="modal" data-target="#exampleModal">
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-fwstudio-172286.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Olmo</h6>
		                <div class="price">
		                  <h6>$99.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>
	<div class="col-lg-3 col-md-6 justify-content-center">
		<div class="single-product">
		                    <center>            
		                            <!--
		                            Aqui esta la clase que controla el tamaño y posicion de las imagenes
		                            --> 
		                               <a  href="" data-bs-toggle="modal" data-bs-target="#CP-30" >
		                               	<!--
		                                <div class="prueba">
		                                  <img class="mx-auto d-block image" style="height: 200px; width: 200px;" src="/imagenes/Productos/madera.jpg" alt="" id="imagenes">
		                                  <div class="middle">
										    <div class="text">John Doe</div>
										  </div>
		                                 </div>
		                                 -->
		                                 <div class="image-container">
		                                 <img src="/imagenes/Productos/pexels-clem-onojeghuo-175709.jpg" alt="Avatar" class="image mx-auto d-block" style="height: 200px; width: 200px;">
										   <div class="after">Ver mas</div>
										</div>

		                  </a>

		              <div class="product-details">
		                <h6>Aserrín</h6>
		                <div class="price">
		                  <h6>$20.00</h6>
		                  
		                </div>
		                <div class="prd-bottom">
		                


		                </div>
		              </div>
		              </center> 
		</div>
	</div>	
</div>	
<!--Modales-->
<div class="modal fade" id="Roble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Roble</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Descripcion</span>
        <br>
        <span>10 tablas de roble</span>
        <br>
        <span>Detalles</span>
        <br>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet neque mattis, tincidunt risus quis, maximus lacus. Curabitur in volutpat mauris, in dignissim elit. Duis lorem ipsum, imperdiet vitae augue eu, dignissim dapibus neque.</span>
        
        <br>
        <span>Precio</span>
        <br>
        <span>$100</span>
        <br>
                
        <img class='img-fluid'  src='/imagenes/Productos/madera.jpg' alt=''>        
      </div>
    </div>
  </div>
</div> 

<div class="modal fade" id="CP-30" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aserrín</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Descripcion</span>
        <br>
        <span>1kg de aserrín</span>
        <br>
        <span>Detalles</span>
        <br>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet neque mattis, tincidunt risus quis, maximus lacus. Curabitur in volutpat mauris, in dignissim elit. Duis lorem ipsum, imperdiet vitae augue eu, dignissim dapibus neque.</span>
        <br>
        <span>En una bolsa</span>
        <br>
        <span>Precio</span>
        <br>
        <span>$20</span>
        <br>
                
        <img class='img-fluid'  src='/imagenes/Productos/pexels-clem-onojeghuo-175709.jpg' alt=''>        
      </div>
    </div>
  </div>
</div> 
  <footer class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
        <center>  
           <img src = '/imagenes/iconos/contact.svg' width="30" height="30" style='vertical-align: middle' /><span style="padding-left: 5px;">
          <p style = "line-height: 20px; font-family: 'Bebas Neue', cursive;">
                               55 6492 0067
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
            <img src = '/imagenes/iconos/email-symbol.svg' width="30" height="30" style='vertical-align: middle' />
          <p style = "line-height: 20px;">
                                manuelalcopar01@aragon.unam.mx
                              </p>
                              </center>
        </div>
        <div class="col-lg-4 col-sm-12" style="padding-top: 3%; padding-bottom: 3%;">
          <center>
           <p style = 'line-height: 20px'>
                                
                                <a href="https://www.linkedin.com/in/jose-manuel-alcopar-palma-38708a200/"><img src = '/imagenes/iconos/linkedin-square.svg' width="30" height="30" style='vertical-align: middle' /></a>
                              </p>
                              </center>
          
      
        </div>
      </div>
   </div>
  
  </footer> 
<script src="js/bootstrap.js" crossorigin="anonymous"></script>
    </body>
</html>    