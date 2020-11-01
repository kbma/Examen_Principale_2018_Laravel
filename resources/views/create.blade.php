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
                        <div class="row">
                            <div class="col">
                                @if(count($errors))
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>

                                            @endforeach
                                        </ul>

                                    </div>
                                @endif
                            </div>

                        </div>



                        <form action="{{route('store')}}" method="post">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label">Departement</label>
                                <select name="departement_id" class="form-control">
                                    @foreach(\App\Departement::all() as $departement)
                                    <option  value="{{$departement->id}}">{{ $departement->name }}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">MAC Adress</label>
                                <input type="text" value="" name="macAdress" class="form-control"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label">Model</label>
                                <input type="text" value="" name="model" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label">System</label>
                                <input type="text" value="" name="system" class="form-control"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="col-form-label">Purchase</label>
                                <input type="date" value="" name="purchaseDate" class="form-control"/>
                            </div>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" value="Ajouter" class="btn btn-primary"/>
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
