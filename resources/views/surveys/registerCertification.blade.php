<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registrar certificación</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{url('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- End plugin css for this page -->
	<!-- inject:css -->

	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
	<link rel="stylesheet" href="{{url('assets/css/menu.css')}}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!-- Header -->
	<x-survey-header></x-survey-header>
    <!-- Header ends -->
	<div class="main-panel">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<div class="content-wrapper">
			<div class="row">
				<div class="col-12 grid-margin stretch-card p-5">
					<div class="card">
						<img src="{{url('/assets/images/dashboard/survey.jpg')}}" alt="" class="card-img-top">
						<div class="card-header">
						</div>
						<div class="card-body">
							<h1 class="card-title">Registro de aspirantes para certificaciones</h1>
							<p class="card-description">
								El llenado del presente formulario tiene el propósito de recabar
								la información personal del (la) candidato(a) interesado(a) en llevar
								a cabo su proceso de certificación.
							</p>
							<form class="forms-sample" method="POST" action="{{ route('registerCertification') }}">
                                @csrf
								<div class="form-group">
									<label>Nombre de tu escuela de inglés o del profesor que te sugirió	certificarte.</label>
									<div id="school">
										<input class="typeahead" type="text" name="reference" id="typeahead-reference"
											placeholder="Express learning online" aria-describedby="referenceHelpBlock" required>
										<small id="referenceHelpBlock" class="form-text text-muted">
											Si lo estas llenando por iniciativa propia, escribe "No aplica".
										</small>
									</div>
								</div>
								<div class="form-group variable" id="certificationDiv" hidden>
									<label for="selectSource">¿Cómo te enteraste de las certificaciones de Express Learning Online?</label>
									<select class="form-control" id="selectSource" name="selectSource">
										<option>Facebook</option>
										<option>Instagram</option>
										<option>Recomendación de un conocido</option>
										<option>Tik tok</option>
										<option>Volantes</option>
										<option>WhatsApp</option>
									</select>
								</div>
								<div class="form-group" id="studyDiv" hidden>
									<label for="study-history">¿Has estudiado inglés en Express Learning Online?</label>
									<select class="form-control" id="study-history" name="studyHistory">
										<option>Sí</option>
										<option>No</option>
									</select>
								</div>
								<div class="form-group">
									<label for="paternalSurname">Apellido paterno</label>
									<input type="text" class="form-control" id="paternalSurname"
										name="paternalSurname" placeholder="Apellido paterno" required>
								</div>
								<div class="form-group">
									<label for="maternalSurname">Apellido materno</label>
									<input type="text" class="form-control" id="maternalSurname"
										name="maternalSurname" placeholder="Apellido materno" required>
								</div>
								<div class="form-group">
									<label for="name">Nombre(s)</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
										required>
								</div>
								<div class="form-group">
									<label for="birthDate">Fecha de nacimiento</label>
									<input type="date" class="form-control" id="birthDate" name="birthDate" required>
								</div>
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
								</div>
								<div class="form-group">
									<label for="phone">Teléfono celular</label>
									<input type="text" class="form-control" id="phone" placeholder="Numero telefónico"
										aria-describedby="phoneHelpBlock" required>
									<small id="phoneHelpBlock" class="form-text text-muted">
										El número de teléfono debe de contar con WhatsApp.
									</small>
								</div>
								<div class="form-group">
									<label>Razones por las cuales necesitas certificarte</label>
									<div class="radio-group">
										<div class="form-check">
											<label class="form-check-label"><input type="checkbox"
													class="form-check-input" name="scolarReason" id="scolarReason"
													value="Escolares">Escolares
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label"><input type="checkbox"
													class="form-check-input" name="laboralReason" id="laboralReason"
													value="Laborales">Laborales
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label"><input type="checkbox"
													class="form-check-input" name="personalReason" id="personalReason"
													value="personalReason">Personales
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label"><input type="checkbox"
													class="form-check-input" name="movilityReasons" id="movilityReasons"
													value="Movilidad internacional">Movilidad
												internacional
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="selectCertification">Nombre de la certificación que aplicarás</label>
									<select class="form-control" id="selectCertification" name="selectCertification">
										<option>Oxford Placement Test (OPT)</option>
										<option>Oxford Test of English (OTE)</option>
										<option>Integrated Skills in English (ISE)</option>
										<option>Graded Examinations in Spoken English (GESE)</option>
										<option>Test Of English for International Communication (TOEIC)</option>
										<option>Test Of English as a Foreign Language (TOEFL)</option>
									</select>
								</div>
								<div class="form-group">
									<label for="selectAttempt">¿Este será tu primer intento?</label>
									<select class="form-control" id="selectAttempt" name="selectAttempt">
										<option>Sí</option>
										<option>No</option>
									</select>
								</div>
								<div class="form-group">
									<label for="attemptNumber">¿Cuántas veces has aplicado la misma prueba?</label>
									<input type="number" class="form-control" id="attemptNumber" name="attemptNumber">
								</div>
								<div class="form-group">
									<label for="selectCertificationDate">Fecha en la que aplicarás la certificación</label>
									<select class="form-control" id="selectCertificationDate" name="selectCertificationDate">
										<option>02 Diciembre 2023</option>
										<option>18 Diciembre 2023</option>
										<option>14 Enero 2023</option>
									</select>
								</div>
								<div class="row justify-content-end">
									<button class="btn btn-dark mr-3">Cancelar</button>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
        <x-footer></x-footer>
	</div>
	<!-- main-panel ends -->
	<!-- plugins:js -->
	<script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="{{url('assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{url('assets/js/off-canvas.js')}}"></script>
	<script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
	<script src="{{url('assets/js/misc.js')}}"></script>
	<script src="{{url('assets/js/settings.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="{{url('assets/js/dashboard.js')}}"></script>
	<!-- <script src="assets/js/typeahead.js"></script> -->
	<script src="{{url('ajax/register-certification.js')}}"></script>
	<!-- End custom js for this page -->

</body>

</html>