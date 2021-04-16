@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <form method="POST" action="{{ url('/admin/tasks/save') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="Titulo" class="form-label">Titulo da tarefa</label>
                                <input type="text" name="title" class="form-control" id="title" >
                            </div>
                            <div class="mb-3">
                                <label for="Descricao" class="form-label">Descrição da tarefa</label>
                                <input type="text" name="description" class="form-control" id="title" >
                            </div>
                            <input type="hidden" name="status" value="A fazer" >
                            <div class="mb-3 form-check">
                                <select class="form-select" name="user_id">
                                    <option selected>Aloque a tarefa ao um usuário</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}<">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Criar nova tarefa</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
