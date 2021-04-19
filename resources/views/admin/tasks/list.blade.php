@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/home') }}">
                        <button type="button" class="btn btn-warning">Voltar</button>
                    </a>
                    <h2>Lista de tarefas</h2>
                    <a href="{{ url('admin/tasks/new') }}">Nova tarefa</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Responsavel</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                          <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->status }}</td>
                            <td>
                            <form action="tasks/delete/{{$task->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button href="tasks/{{$task->id}}" class="btn btn-danger">Deletar</button></td>
                            </form>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
