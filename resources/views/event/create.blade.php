@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear Evento</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('event.store')}}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción:</label>
                                <textarea class="form-control" placeholder="Description" name="description" id="description" rows="3"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="lenguages">Lenguages:</label>
                                <textarea class="form-control" placeholder="Lenguages" name="lenguages" id="lenguages" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="creator_id">ID del creador del evento:</label>
                                <input class="form-control" value="{{Auth::user()->profile->id}}" name="creator_id" id="creator_id" rows="3" readonly></textarea>
                            </div>

                            <hr>
                            <input class="btn btn-warning bg-orange" type="submit" value="Crear">
                            <a href="{{url()->previous()}}" class="btn btn-warning bg-orange" role="button" >Volver</a>
                        </div>                        
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
