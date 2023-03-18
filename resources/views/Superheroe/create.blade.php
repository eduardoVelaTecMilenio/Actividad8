<h1>Añade un nuevo superhéroe.</h1>

<form action="{{ url('/superheroe') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('superheroe.form')
</form>