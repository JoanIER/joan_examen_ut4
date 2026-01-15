@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
<body>
    <h1>Notas estudiantes</h1>

    <h2>SixSeven</h2>

    {{-- Mostramos errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Mostramos mensaje de éxito si existe --}}
    @if (session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif

    {{-- Formulario --}}
    <form action="{{ route('admin.students.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="apellidos" id="apellidos" name="apellidos" value="{{ old('apellidos') }}"><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
@endsection