@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div style="display: none;">{{ $user = Auth::user()->id }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Seja bem vindo {{ $user = Auth::user()->name }}!</h2>
                    <h4>Essas são suas atividades</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade de tarefas</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)

                            @if ($task->user_id == $user)

                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->status }}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





