<h3>Dashboard</h3>

@foreach ($users as $user)
    <h1>{{$user['name']}}</h1>
    <h2>{{ $user['age']}} </h2>
    <hr>
@endforeach