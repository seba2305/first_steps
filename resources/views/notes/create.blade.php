@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Crear una nota</h1>
            @include('partials/errors')
            <form method="post" class="form" action="{{ url('notes') }}">
                {!! csrf_field() !!}
                <textarea name="note" class="form-control" placeholder="Escribe aqui tu nota...">{{ old('note') }}</textarea>
                <button type="submit" class="btn btn-primary">Crear Nota</button>
            </form>
        </div>
    </div>
@endsection