@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center" style="height: 83vh;">
                <div class="position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle bg-warning" style="width: 500px; height: 500px; border-radius: 50%;">
                        <h1 class="text-white text-center fst-italic fw-bold" style="line-height: 500px;">Find your groceries here!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
