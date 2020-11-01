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
                        <h2>Les Computers disponibles</h2>
                    <table class="table">
                        <thead>
                        <tr>

                            <th>MAC Adress</th>
                            <th>Model</th>
                            <th>System</th>
                            <th>Purchase Date</th>
                            <th>Departement</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($computersDiponibles as $computer)
                            @if(!$computer->computer_user)
                                <tr>
                                    <td>{{$computer->macAdress}}</td>
                                    <td>{{$computer->model}}</td>
                                    <td>{{$computer->system}}</td>
                                    <td>{{$computer->purchaseDate}}</td>
                                    <td>{{$computer->departement->name}}</td>
                                    <td><a class="btn btn-success" href="{{route('reserver',['id'=>$computer->id])}}">Réserver</a> </td>
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
