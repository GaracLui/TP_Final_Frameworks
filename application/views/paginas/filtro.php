<div class="page-banner-area p-5" style="background-color: #e2dad7;">
    <div class="container d-flex justify-content-center">
        <div class="page-banner-content text-center align-items-center d-flex">
            <h2 class="d-flex justify-content-center">Property Filter</h2>
            
        </div>
    </div>
</div>

<div class="properties-wrap-area without-wrap-bg py-5" style="background-color: #f1f0eb;">
    <div class="container" >
        <div class="search-info-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Compra
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Alquiler
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <form class="search-form">
                                <div class="row justify-content-center align-items-end">


                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Buscando</label>
                                            <select class="form-select form-control">

                                                <option selected>Tipo de propiedad</option>
                                                <option value="1">Familiar</option>
                                                <option value="2">Industrial</option>
                                                <option value="3">Casa de campo</option>
                                                <option value="4">Apartamento</option>


                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Ubicación</label>
                                            <select class="form-select form-control">

                                                <option selected>Todas las provincias</option>
                                                <option value="1">San Luis</option>
                                                <option value="2">Mendoza</option>
                                                <option value="3">Córdoba</option>
                                                <option value="4">La Pampa</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Presupuesto</label>
                                            <input type="text" class="form-control" placeholder="Precio maximo">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Tamaño Minimo</label>
                                            <input type="text" class="form-control" placeholder="Tamaño de la propiedad">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-select form-control">

                                                <option selected>Estado de la propiedad</option>
                                                <option value="1">En venta</option>
                                                <option value="2">Casa abierta</option>
                                                <option value="3">Oferta</option>
                                                <option value="4">Vendida</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="default-btn" >
                                            Buscar Propiedad
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
        
    </div>
</div>

<div class="properties-area py-5 " >
        
            <div class="container">
                <div class="row justify-content-center">
                <!-- Primera linea -->

                    <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties1.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$74,000</h5>
                                    <!-- Si hay descuento 
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                     fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->
                    
                    <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties2.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$100,000</h5>
                                    <!-- Si hay descuento 
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                     fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->
                    

                    <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties3.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$82,000</h5>
                                    <!-- Si hay descuento 
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                     fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->

                    <!-- fin Primera linea -->


                    <!-- Segunda linea -->

                    <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties1.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$11,000 / Mes</h5>
                                    <!-- Si hay descuento -->
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                     <!-- fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->

                    <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties4.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$11,000 / Mes</h5>
                                    <!-- Si hay descuento -->
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                    <!-- fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->

                            <!-- Card  template-->
                    <div class="col-xl-4 col-md-6 py-3">
                        <div class="card">
                              <img src="http://127.0.0.1/TP_Final_Frameworks/assets/img/properties/properties2.jpg" class="card-img-top" alt="Property Image">
                              <div class="card-body">
                                    <h5 class="card-title">Departamento chic</h5>
                                    <p class="card-text">8094 dkjtkdr Street, NY 102, ARG</p>
                                    <p class="card-text">Alquiler</p>
                                    <h5 class="card-text  price float-right">$11,000 / Mes</h5>
                                    <!-- Si hay descuento -->
                                    <span class="card-text  price float-right text-secondary"><del>$15,000 / Mes</del></span>
                                     <!-- fin Si hay descuento -->
                                    <div class="card-text hidden-details">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bed.svg" alt="bed" style="filter: invert(100%);">
                                                </div>
                                                <span>Cuartos: 4</span>

                                            </li>

                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/bathroom.svg" alt="bathroom" style="filter: invert(100%);">
                                                </div>
                                                <span>Baños: 2</span>
                                            </li>


                                            <li class="list-group-item">
                                                <div class="icon float-left pr-1">
                                                    <img src="<?php echo base_url(); ?>assets/img/properties/area.svg" alt="area" style="filter: invert(100%);">
                                                </div>
                                                <span>Metros cuadrados: 710 </span>
                                            </li>
                                        </ul>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Fin Card  template-->

                    <!-- Fin Segunda linea -->


                </div>
            </div>
        </div>