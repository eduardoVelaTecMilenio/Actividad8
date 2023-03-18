<h1>Modifica a un superhéroe.</h1>

<form action="{{ url('/superheroe/'.$superheroe->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    {{method_field('PATCH')}}

    @include('superheroe.form')
</form>