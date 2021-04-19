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

                    <h2>Seja bem vindo Administrador!</h2>


                    <div class="card" style="width: 49%;display: inline-block;">
                        <div class="card-body">
                        <h5 class="card-title">Usuários</h5>
                        <p class="card-text">Todos os usuários cadastrados no sistema </p>
                        <a href="{{url('admin/users')}}" class="btn btn-primary">Ir até lá</a>
                        </div>
                    </div>
                    <div class="card" style="width: 49%;display: inline-block;">
                        <div class="card-body">
                        <h5 class="card-title">Tarefas</h5>
                        <p class="card-text">Todos os tarefas cadastrados no sistema </p>
                        <a href="{{url('admin/tasks')}}" class="btn btn-primary">Ir até lá</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
