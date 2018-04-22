@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Papeis de Usuarios</div>

                <div class="card-body">
                   <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td><a href="{{$role->id}}" class="btn btn-warning"><i class="icon ion-edit"></i> Editar</a></td>
                                        <td><a href="{{$role->id}}" class="btn btn-danger"><i class="icon ion-trash-a"></i> Deletar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
