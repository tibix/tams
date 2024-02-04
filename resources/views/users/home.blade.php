@auth
	@if (Auth::user()->role_id == 2 )
		@include('users.journalist-home')
	@elseif (Auth::user()->role_id == 3 )
		@include('users.editor-home')
	@elseif (Auth::user()->role_id == 4 )
		@include('users.admin-home')
	@endif
@endauth
