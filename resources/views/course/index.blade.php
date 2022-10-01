@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('courses.create')}}">Crear Nuevo</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $row)
                            <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->description}}</td>
                                <td>{{$row->modality}}</td>
                                <td>{{$row->begin_date.' '.$row->end_date}}</td>
                                <td>
                                    <a href="{{route('courses.show', $row->id)}}">Mostrar</a>
                                    <a href="{{route('courses.edit', $row->id)}}">Editar</a>
                                    <form action="{{ route('courses.destroy',$row->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Desea eliminar?');">Eliminar</button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

