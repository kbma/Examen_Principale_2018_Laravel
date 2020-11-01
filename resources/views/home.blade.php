@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{route('computers')}}">Liste des computers</a>
                        <a class="btn btn-primary" href="{{route('create')}}">Ajouter computer</a>
                        <a class="btn btn-primary" href="{{route('disponibles')}}">Computers disponibles</a>
                        <a class="btn btn-danger" href="{{route('home')}}">Mes Computers</a>
                        <p></p>
                        <table class="table">
                            <thead>
                            <tr>

                                <th>MAC Adress</th>
                                <th>Model</th>
                                <th>System</th>
                                <th>Purchase Date</th>
                                <th>Departement</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mescomputers as $computer)

                                <tr>
                                    <td>{{$computer->computer->macAdress}}</td>
                                    <td>{{$computer->computer->model}}</td>
                                    <td>{{$computer->computer->system}}</td>
                                    <td>{{$computer->computer->purchaseDate}}</td>
                                    <td>{{$computer->computer->departement->name}}</td>
                                    <td><a class="btn btn-dark" href="{{route('liberer',['id'=>$computer->id])}}">Liberer</a> </td>
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
