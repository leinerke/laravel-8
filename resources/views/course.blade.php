@extends('layouts.web')

@section('content')
    Detaller del curso
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos Cursos</h1>
        <h2 class="text-xl text-gray-600">Formate online como profesional en tecnologia</h2>
    </div>
    <livewire:course-list />
@endsection
