@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">

        @foreach ($users as $user)
            <div class="col-md-6">
                <h4>Name: {{$user->name}}</h4>
                <p>Role: {{$user->role}}</p>
                <form method="POST" action="{{ route('updaterole', ['id' => $user->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Update Role
                    </button>
                </form>

                <form method="POST" action="{{ route('deleteuser', ['id' => $user->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>

            </div>
        @endforeach
    </div>
</div>
@endsection
