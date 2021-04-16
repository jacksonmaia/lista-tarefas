@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ $user = Auth::user(); }}

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Seja bem vindo!</h2>
                    @foreach ($tasks as $task)
                        @if ($task->user_id == $user->id)
                            <p>{{ $task->title }}</p>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





