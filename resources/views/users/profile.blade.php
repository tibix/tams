<x-layout>
	<div class="container my-4">
		<div class="col-md-6">
			<div class="row">
				<form method="POST" action="/users/{{ auth()->id() }}/">
					@csrf
					@method('PUT')
					<div class="col mb-4">
						<div class="form-floating">
							<input type="text" id="u_name" name="u_name" class="form-control"
								   value="{{ auth()->user()->u_name}}" autofocus required/>
							<label class="form-label" for="user_name">Nume utilizator</label>
							@error('u_name')
								<p class="text-danger fs-5">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="col mb-4">
						<div class="form-floating">
							<input type="text" id="f_name" name="f_name" class="form-control"
								   value="{{ auth()->user()->f_name}}" required/>
							<label class="form-label" for="first_name">Nume</label>
							@error('f_name')
								<p class="text-danger fs-5">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="col mb-4">
						<div class="form-floating">
							<input type="text" id="l_name" name="l_name" class="form-control"
								   value="{{ auth()->user()->l_name }}" required/>
							<label class="form-label" for="last_name">Pre-nume</label>
							@error('l_name')
								<p class="text-danger fs-5">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="col mb-4 pb-2">
						<div class="form-floating">
							<input type="email" id="email" name="email" class="form-control"
								   value="{{ auth()->user()->email }}"" required/>
							<label class="form-label" for="email">Email</label>
							@error('email')
								<p class="text-danger fs-5">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="col mb-4 pb-2">
						<div class="form-floating">
							<input id="date_created" class="form-control" disabled value="{{ auth()->user()->getRole() }}"/>
							<label class="form-label" for="date_created">Rol</label>
						</div>
					</div>
					<div class="col-md-6 mb-4 pb-2">
						<button type="submit" id="save_data" name="actualizare" class="btn btn-outline-warning mb-2">Salveaza Modificarile</button>
						<a class="btn btn-danger float-end" href="/forgot-password">Reseteaza Parola</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-layout>
