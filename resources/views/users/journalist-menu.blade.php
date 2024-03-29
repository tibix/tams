<div class="btn-group">
    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user-pen"> </i>  {{ auth()->user()->u_name }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end" id="dropDownMenu">
        <li>
            <a class="dropdown-item" href="/articles/create">
                <i class="fa-solid fa-newspaper"></i>
                Articol nou
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="/articles/user/{{ auth()->user()->id }}">
                <i class="fa-solid fa-list-ul"></i>
                Articolele mele
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <a class="dropdown-item" href="/favorites">
                <i class="fa-solid fa-bookmark"></i>
                Favorite
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <a class="dropdown-item" href="/users/{{auth()->id()}}/profile">
                <i class="fa-solid fa-pen"></i>
                Editare Profil
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="/forgot-password">
                <i class="fa-solid fa-key"></i>
                Resetarea Parola
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <form method="POST" action="/logout">
                @csrf
                <button class="dropdown-item" type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</div>
