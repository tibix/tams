<x-layout>
	<form method="POST" name="">
		@csrf
		@method('PUT')
		<section class="gradient-custom">
			<div class="container py-4 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card bg-light text-dark" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">
								<div class="mb-md-5 mt-md-4 pb-5">
									<h2 class="fw-bold mb-2 text-uppercase">Resetare parola</h2>
									<p class="text-dark-50 mb-5">Introdu parola curenta si noua parola de doua ori!</p>
									<div class="form-outline form-white mb-4">
										<input type="password" name="current_password" id="current_password" class="form-control form-control-lg"
											   value="" autofocus />
										<label class="form-label" for="current_password">Parola Curenta</label>
									</div>
									<div class="form-outline form-white mb-4">
										<input type="password" name="new_password" id="new_password" class="form-control form-control-lg"
											   value="" />
										<label class="form-label" for="new_password">Parola Noua</label>
									</div>
									<div class="form-outline form-white mb-4">
										<input type="password" name="new_password_c" id="new_password_c" class="form-control form-control-lg"
											   value="" />
										<label class="form-label" for="new_password_c">Confirma Parola Noua</label>
									</div>
									<button class="btn btn-dark btn-lg px-5" type="submit" name="reset_password">Reseteaza Parola</button>
								</div
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</form>
</x-layout>
