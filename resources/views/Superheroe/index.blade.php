<h1>Lista de superhéroes.</h1><br>

<a href="{{ url('superheroe/create') }}">Añadir a un nuevo superhéroe</a><br><br>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre Real</th>
            <th>Alias</th>
            <th>Información Adicional</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($superheroes as $superheroe)

        <tr>
            <td>{{$superheroe->id}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" alt="">
            </td>
            <td>{{$superheroe->NombreReal}}</td>
            <td>{{$superheroe->Alias}}</td>
            <td>{{$superheroe->InformacionAdicional}}</td>
            <td>
            
            <a href="{{ url('/superheroe/'.$superheroe->id.'/edit') }}">
                Editar
            </a>

            | 

            <form action="{{ url('/superheroe/'.$superheroe->id) }}" method="post">
                @csrf

                {{method_field('DELETE')}}

                <input type="submit" onclick="return confirm('¿Quiere borrar este superhéroe de la lista?')" value="Borrar">
            </form>

            </td>
        </tr>

        @endforeach
    </tbody>

</table>
