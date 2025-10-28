<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/grifo.ico">
	<title>REGISTRO - CES VEGA MEDIA</title>	
</head>
<body>
	<!--Cabecera-->
	<div class="container-fluid cabecera">
		<header class="row justify-content-center align-items-center">	
			<div class="d-none d-md-block col-4  p-0 izq mt-4"></div>		
			<div class="col-12 col-md-4">									
				<div class="row justify-content-center align-items-center">						
					<div class="col-auto mt-1">
						<img class="m-0" src="img/GRIFO11.png" style="width:50px">
					</div>													
					<div class="col-auto">	
						<p class="text-center m-0"><span class="v"> V</span><span class="me">M</span></p>						
					</div>
					<div class="col-auto mt-1 ms-4"></div>
					<div class="w-100"></div>										
				</div>				
			</div>
			<div class="d-none d-md-block col-4 p-0 der mt-4"></div>	
			<div class="col-12 mb-1">
				<p class="h1 text-center">GESTIÓN CES - VEGA MEDIA</p>	
			</div>						
		</header>
	</div>			
	<!--Contenido de la página-->
	<section>	
		<div class="container ">	
			<div class="row justify-content-center align-items-center ">
				<div class="col-11 col-sm-12 col-lg-11 col-xl-10 mb-4 mt-4">
					<div class="row justify-content-center titulos mt-4 mb-4">
						<div class="col-12 mt-4">
							<p class="text-center" style="font-size: 25pt;">NUEVO USUARIO</p>							
						</div>
						<div class="col-10">
							<hr>								
						</div>
						<div class="col-12 col-md-5 mt-4">
							<div class="row justify-content-end">
								<div class="col-12">									
									<div class="form-floating mb-3 ">				
										<input type="text" class="form-control" id="nif" placeholder="NIF" required>
										<label for="nif">NIF <span class="form-text text-muted small float-end">EJ: 12345678X</span></label>																		
									</div>
									<div class="form-floating mb-3 ">				
										<input type="text" id="nombre" class="form-control" placeholder="Nombre" required>
										<label for="nombre">Nombre</label>								
									</div>		
									<div class="form-floating mb-3 ">				
										<input type="text" id="ape" class="form-control" placeholder="Apellidos" required>
										<label for="nombre">Apellidos</label>								
									</div>
									<div class="form-floating mb-3 ">				
										<input type="text" id="dir" class="form-control" placeholder="Dirección" required>
										<label for="dir">Dirección</label>								
									</div>									
									<div class="form-floating mb-3 ">				
										<input type="date" id="fecha" class="form-control" placeholder="Fecha de nacimiento" required>
										<label for="fecha">Fecha de nacimiento</label>								
									</div>	
									<div class="form-floating mb-3 ">				
										<input type="email" class="form-control" id="email" placeholder="Email">
										<label for="email">Email <span class="form-text text-muted small float-end">EJ: xxxxxx@ces-vegamedia.es</span></label>								
									</div>	
									<div class="form-floating">				
										<input type="number" class="form-control" id="tel" placeholder="Teléfonos">
										<label for="email">Teléfonos<span class="form-text text-muted float-end small"> EJ: 968647842 || 636365874</span></label>							
									</div>														
								</div>								
							</div>											
						</div>
						<div class="col-auto"></div>
						<div class="col-12 col-md-5 mt-4">
							<div class="row justify-content-start">
								<div class="col-12">
									<div class="form-floating mb-3 ">				
										<input type="text" id="tit" class="form-control" placeholder="Titulaciones y Hbilitaciones" required>
										<label for="tit">Titulaciones y Habilitaciones</label>								
									</div>	
									<div class="form-floating mb-3 ">
										<select class="form-select" id="lista" name="lista">									
											<option value="1">Administrativo</option>
											<option value="1">Profesor</option>
											<option value="1">Gestión económica</option>
											<option value="other">Secretaria</option>
											<option value="other">Jefatura</option>
											<option value="other">Dirección</option>
											<option value="other">Vicepresidencia</option>
											<option value="other">Presidencia</option>
										</select>								
										<label for="lista">Cargo</label>								
									</div>								
									<div class="form-floating mb-3 ">
										<select class="form-select" id="tutor" name="tutor">									
											<option value="1">No</option>
											<option value="1"></option>
											<option value="1"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
										</select>								
										<label for="tutor">Tutor</label>								
									</div>
									<div class="form-floating mb-3 ">
										<select class="form-select" id="etapa" name="etapa">									
											<option value="1">Infantil</option>
											<option value="1"></option>
											<option value="1"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
										</select>								
										<label for="Etapa">Etapa</label>								
									</div>	
									<div class="form-floating mb-3 ">
										<select class="form-select" id="tipo" name="tipo">									
											<option value="1">Socio</option>
											<option value="1"></option>
											<option value="1"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
											<option value="other"></option>
										</select>								
										<label for="Tipo">Tipo</label>								
									</div>
									<div class="form-floating mb-3 ">				
										<input type="password" class="form-control" id="pass" placeholder="Contraseña">
										<label for="pass">Contraseña</label>								
									</div>
									<div class="form-floating ">				
										<input type="password" class="form-control" id="pass2" placeholder="Confirma tu contraseña">
										<label for="pass2">Confirma tu contraseña</label>								
									</div>
																		
								</div>								
							</div>											
						</div>
						<div class="col-12 col-md-10 ms-md-3 mt-2 mb-2">
							<span class="form-text text-danger small float-end">Todos los campos son obligatorios</span>
						</div>						
						<div class="col-12 col-md-6 d-grid mb-4 mt-2">							
							<button class="btn btn-lg" type="submit">CREAR CUENTA</button>
						</div>													
					</div>													
				</div>				
			</div>	
		</div>	
	</section>
    <!--Pie de página-->
   <?php
   include("footer.php");
   ?>
</body>
</html>
