@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="text-center fw-bold mb-0">
            {{session('message')}}
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
