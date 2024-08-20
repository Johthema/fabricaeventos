@extends('layouts.main')  {{--Estou extendendo o layout de main--}}
@section('title', 'HDC Events')
@section('content')



<div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <fomr action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="procurar..">
        </fomr>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos dias</p>
    
    <div id="cards-container" class="row">
    @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">14/08/2024</p>
                    <h5 id="card-title">{{$event->title}}</h5>
                <p class="card-participants">x Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
            </div>
            
        </div>
      
        {{--<p>{{$event->title}} -- descrição: {{$event -> description}}</p>--}}


        @endforeach
    </div>
</div>









@foreach($events as $event)
    {{--<p>{{$event->title}} -- descrição: {{$event -> description}}</p>--}}


@endforeach
    {{-- Inicio Comentarios <h1>Projeto inicial</h1>
        @if (10 == 3)
            <h2>Sim 10 é maior que 3</h2>
        @endif   
        <h1>Olá {{ $nome }}</h1>
        <h1>Seus dados:</h1>
        <h1>Idade: {{ $idade }}</h1>
        <h1>Sexo: {{ $sexo }}</h1>

        @if ($idade > 18 )
            <h1>Você ja é maior de idade</h1>
        @elseif ($idade < 18)
            <h1>Você é menor de idade</h1>
        @endif   

        <h1>O conjunto é:</h1>
        @for ($i=0; $i<=count($arr)-1; $i++)
            @if ($i % 2 == 0)
            <h2>{{$i}} - é par</h2>
            @elseif ($i % 2 == 1)
            <h2>{{$i}} - é impar</h2>
            @endif   
        @endfor Fim comentario --}}

@endsection