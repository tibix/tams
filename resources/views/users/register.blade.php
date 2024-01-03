<x-layout>
    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card bg-dark text-white shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Inregistrare</h3>
                            <form method="POST" action="/users">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="u_name"
                                                   name="u_name"
                                                   class="form-control form-control-lg"
                                                   value="{{ old('u_name')}}"
                                                   placeholder="Enter username ..."/>

                                            @error('u_name')
                                            <p class="text-danger fs-5">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="f_name"
                                                   name="f_name"
                                                   class="form-control form-control-lg"
                                                   value="{{ old('f_name')}}"
                                                   placeholder="Enter first name ..."/>


                                            @error('f_name')
                                            <p class="text-danger fs-5">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text"
                                                   id="l_name"
                                                   name="l_name"
                                                   class="form-control form-control-lg"
                                                   value="{{old('l_name')}}"
                                                   placeholder="Enter last name" />

                                            @error('l_name')
                                            <p class="text-danger fs-5">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="email"
                                                   id="email"
                                                   name="email"
                                                   class="form-control form-control-lg"
                                                   value="{{old('email')}}"
                                                   placeholder="Enter e-mail address ..." />
                                            @error('email')
                                            <p class="text-danger fs-5">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input
                                                type="password"
                                                id="password"
                                                name="password"
                                                class="form-control form-control-lg"
                                                value="{{old('password')}}"
                                                placeholder="Enter password ..." />
                                            @error('password')
                                            <p class="text-danger fs-5">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input
                                                type="password"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                class="form-control form-control-lg"
                                                value="{{old('password_confirmation')}}"
                                                placeholder="Confirm your password ..." />

                                                @error('password_confirmation')
                                                <p class="text-danger fs-5">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <div class="d-flex justify-content-center text-center pt-1">
                                        <input class="btn btn-outline-warning" type="submit" name="inregistrare" value="Register" />
                                    </div>
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
