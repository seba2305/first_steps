@if ( !$errors->isEmpty() )
    <div class="alert alert-danger">
        <p><strong>Oops!</strong> ha ocurrido un error:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif