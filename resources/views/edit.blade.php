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
                    <form action="{{route('update',['id'=>$computer->id])}}" method="post">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-12">
                                <label class="col-form-label">Departement</label>
                                <select name="departement_id" class="form-control">
                                    @foreach(\App\Departement::all() as $departement)
                                    <option @if($computer->departement_id == $departement->id) selected @endif value="{{$departement->id}}">{{ $departement->name }}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label class="col-form-label">MAC Adress</label>
                                <input type="text" value="{{$computer->macAdress}}" name="macAdress" class="form-control"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label class="col-form-label">Model</label>
                                <input type="text" value="{{$computer->model}}" name="model" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="col-form-label">System</label>
                                <input type="text" value="{{$computer->system}}" name="system" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="col-form-label">Purchase</label>
                                <input type="date" value="{{$computer->purchaseDate}}" name="purchaseDate" class="form-control"/>
                            </div>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" value="Modifier" class="btn btn-primary"/>
                                <input type="reset" value="Annuler" class="btn btn-danger"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
