@extends('adminlte::page')

@section('title', 'Service Home Store')
@section('content_header')
    <h1 class="font-italic font-weight-bold p-3 mb-2 bg-info rounded">Servicios Disponibles</h1>
    @if($busqueda ?? '')
        <h5 class="m-0 text-dark">Buscando: "{{$busqueda ?? ''}}"</h5>
    @endif
@stop

@section('content')

<div class="mw-100 ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded",()=>{
            const rows = document.querySelectorAll("tr[data-href]");
            
            rows.forEach(row=>{
                row.addEventListener("click",()=>{
                    window.location.href = row.dataset.href;  
                });
            });
        });
    </script>

    <style>
        tr[data-href]{
            cursor:pointer;
        }
    </style>

    <table class="table table-striped table-hover table-rounded ">
        <thead class="thead-dark bg-info">
            <tr>
                <th style="text-align: center"><i class="fas fa-camera">  </i></th>
                <th style="text-align: center"><i class="fas fa-tools"></i> Servicio Ofrecido</th>
                <th style="text-align: center"><i class="fas fa-hand-holding-usd"></i> Precio(S/. soles) </th>
                <th style="text-align: center"><i class="fas fa-id-card"></i> Técnico al mando</th>
            </tr>
        </thead>

        <tbody>
            @foreach($services as $service)
            <tr data-href="{{ route('service.show', $service) }}">
            <td style="text-align: center" >
                
                    <img src="{{asset('storage').'/'.$service->picture_path}}" class="shadow-lg rounded" alt="..." width="200">
                
                </td>
                <td style="text-align: center">{{$service->title}}</td>
                <td> <a href="{{ route('profile.show', $service->profile) }}">{{$service->profile->firstname . " " . $service->profile->lastname}}</a></td>
                <td style="text-align: center">S/.{{$service->price}}</td>
                </tr>
            
            @endforeach
        </tbody>
        
    </table>
    <div class="row">
        <div class="col">
            {{$services->links('layouts.pie')}}    
        </div>
        <div class="col">
            {{$services->links('layouts.cabecera')}}
        </div>
    </div>

</div>

@stop
