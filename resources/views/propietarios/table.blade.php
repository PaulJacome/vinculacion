<table class="table table-responsive" id="propietarios-table">
    <thead>
        <tr>
            <th>Ci</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Teléfono</th>
        <th>Observaciones</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($propietarios as $propietario)
        <tr>
            <td>{!! $propietario->ci !!}</td>
            <td>{!! $propietario->nombre !!}</td>
            <td>{!! $propietario->genero->nombre!!}</td>
            <td>{!! $propietario->correo !!}</td>
            <td>{!! $propietario->fechaNacimiento !!}</td>
            <td>{!! $propietario->telefono !!}</td>
            <td>{!! $propietario->observaciones !!}</td>
            <td>
                {!! Form::open(['route' => ['propietarios.destroy', $propietario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('propietarios.show', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('propietarios.edit', [$propietario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
