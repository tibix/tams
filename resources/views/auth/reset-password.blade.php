<x-layout>
	<form method="POST" action="/reset-password">
		@csrf
		<section class="gradient-custom">
			<div class="container py-4 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card bg-light text-dark" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">
								<div class="mb-md-5 mt-md-4 pb-5">
									<h2 class="fw-bold mb-2 text-uppercase">Recupereaza Contul</h2>
									<p class="text-dark fw-bold my-5">Introdu adresa de e-mail cu care ai inregistrat contul.</p>
									<div class="form-outline form-white mb-4">
										<input type="email" name="email" id="email" class="form-control form-control-lg"
											   value="{{ old('email') }}" autofocus/>
										<label class="form-label" for="email">Email</label>
										@error('email')
											<p class="text-danger fs-5">{{$message}}</p>
										@enderror
									</div>
									<div class="form-outline form-white mb-4">
										<input type="password" name="password" id="password" class="form-control form-control-lg"
											   value="{{ old('email') }}" autofocus/>
										<label class="form-label" for="password">Parola</label>
										@error('password')
											<p class="text-danger fs-5">{{$message}}</p>
										@enderror
									</div>
									<div class="form-outline form-white mb-4">
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg"
											   value="{{ old('email') }}" autofocus/>
										<label class="form-label" for="password_confirmation">Confirma Parola</label>
										@error('password_confirmation')
											<p class="text-danger fs-5">{{$message}}</p>
										@enderror
									</div>
									<div class="form-outline form-white mb-4">
										<input type="text" name="token" value="{{ $token }}" hidden>
									</div>
									<button class="btn btn-dark btn-lg px-5" type="submit" name="recover_password">Reseteaza Parola</button>
								</div
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</form>
</x-layout>
