@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('courses.index')}}">Ir atrás</a>
                <div class="card-header">{{ __('Registro de curso') }}</div>

                <div class="card-body">
                    <b>Titulo: </b><span>{{$course->title}}</span><br>
                    <b>Descripcion: </b><span>{{$course->description}}</span><br>
                    <b>Modalidad: </b><span>{{$course->modality}}</span><br>
                    <b>Fecha inicio: </b><span>{{$course->begin_date}}</span><br>
                    <b>Fecha fin: </b><span>{{$course->end_date}}</span><br>
                    <b>Estado: </b><span>{{$course->status}}</span><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


