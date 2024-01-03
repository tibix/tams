@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="text-center fs-5">
            {{session('message')}}
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
