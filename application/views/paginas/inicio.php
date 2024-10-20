<div class="main-banner-area" style="background-color: #f9f7f4;">
	<div class="container-fluid p-5 ">
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-6 col-md-12 py-5">
				
				<h1 class="py-5">¿ Que esperas de tu proximo hogar ?</h1>
				
				<div class="search-info-tabs">
					<ul class="nav nav-tabs py-2">
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
											<select class="form-select form-control rounded-pill">

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
											<select class="form-select form-control rounded-pill">

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
											<input type="text" class="form-control rounded-pill" placeholder="Precio maximo">
										</div>
									</div>

									<div class="col-lg-4 col-md-6">
										<div class="form-group">
											<label>Tamaño Minimo</label>
											<input type="text" class="form-control rounded-pill" placeholder="Tamaño de la propiedad">
										</div>
									</div>

									<div class="col-lg-4 col-md-6">
										<div class="form-group ">
											<label>Estado</label>
											<select class="form-select form-control rounded-pill">

												<option selected>Estado de la propiedad</option>
												<option value="1">En venta</option>
												<option value="2">Casa abierta</option>
												<option value="3">Oferta</option>
												<option value="4">Vendida</option>


											</select>
										</div>
									</div>

									<div class="col-lg-4 col-md-6">
										<div class="form-group rounded-pill">
											<button type="submit" class="default-btn rounded-pill  py-2 px-4" >
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

			<div class="col-xl-6 col-md-12 py-5">
				<img src="<?php echo base_url(); ?>assets/img/index/banner1.jpg" alt="imagen" class="img-fluid">
			</div>
		</div>
	
	</div>
</div>
<div class="properties-area p-5 ">
	<div class="container">

		<div class="section-title text-center py-4">
			<h2>Nuestras propiedades destacadas</h2>
			<p>Explora nuestra selección de propiedades destacadas y encuentra el hogar de tus sueños. Contamos con una amplia variedad de opciones para adaptarse a tus necesidades y estilo de vida, desde acogedoras casas de campo hasta espaciosos lofts urbanos. ¡Tenemos la propiedad perfecta esperándote!</p>
		</div>

		<div class="row justify-content-center">

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

		</div>


	</div>
</div>


<!--ofertas-->
<div class="properties-area p-5 " style="background-color: #f9f7f4;">
	<div class="container">

		<div class="section-title text-center py-3">
			<h2>Propiedades en oferta</h2>
			<p>Nuestras unidades destacadas de la semena, unidades recomendadas, habitables, comunable y acuntables</p>
		</div>

		<div class="row justify-content-center">

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

		</div>


	</div>
</div>