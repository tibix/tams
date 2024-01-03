<x-layout>
<form action="/users/authenticate" method="POST">
    @csrf
    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Autentificare</h2>
                                <p class="text-white-50 mb-5">Intorduceti email si parola pentru autentificare!</p>

                                <div class="form-outline form-white mb-4">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control form-control-lg"
                                        value="{{old('email')}}"
                                        placeholder="Email"
                                        autofocus />

                                    @error('email')
                                        <p class="text-danger fs-5">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        value={{old('password')}}
                                        placeholder="Password"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Parola</label>
                                </div>
                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="recuperare_cont.php">Recuperare Cont</a></p>
                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="autentificare">Login</button>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Nu aveti cont? <a href="/register" class="text-white-50 fw-bold">Inregistrati-va aici</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</x-layout>