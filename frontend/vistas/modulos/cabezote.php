<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!-- redes sociales -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>
                    <?php
                        $social = ControladorPlantilla::ctrEstiloPlantilla();
                        $jsonRedesSociales = json_decode($social["redesSociales"],true);
                        foreach ($jsonRedesSociales as $key => $value) {
                            echo '
                                <li>
                                    <a href="'.$value["url"].'" target="_blank">
                                        <i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
                                    </a>
                                </li>
                                ';
                        }
                    ?>
                   
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 social">
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal">Ingreso</a></li>
                    <li>|</li>
                    <li><a href="#modalregistro" data-toggle="modal">Crear una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="container-fluid">
    <div class="container">
        <div class="row" id="cabezote"> 
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
                <a href="#">
                    <img src="http://localhost/e-shop/backend/vistas/img/plantilla/logo.png" class="img-responsive">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                    <p> CATEGORIAS
                        <span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </p>                    
                </div>
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
                    <input type="search" name="buscador" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>
                <p>Tu cesta <span class="cantidadCesta">3</span><br> USD $ <span class="sumaCesta">180</span></p>
            </div>
        </div>
        <div class="col-xs-12 backColor" id="categorias">
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4><a href="#" class="pixelCategorias">Lorem ipsum</a></h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4><a href="#" class="pixelCategorias">Lorem ipsum</a></h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4><a href="#" class="pixelCategorias">Lorem ipsum</a></h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                <h4><a href="#" class="pixelCategorias">Lorem ipsum</a></h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

