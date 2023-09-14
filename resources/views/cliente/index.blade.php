@extends('home')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <h2>Bienvenido a Empresas Davila</h2>
    <hr>
    <div class="table-responsive">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear Nuevo Contacto</a>
            </div>
        </div>
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Tabla de contactos</caption>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th> <!-- Columna para acciones -->
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($clientes as $cliente)
                <tr class="table-primary">
                    <td scope="row">{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este cliente?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</div>
@endsection
