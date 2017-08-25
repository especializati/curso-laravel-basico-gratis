@extends('site.templates.template1')

@section('content')

<h1>Home Page do site!</h1>
{{ $xss }}

@if( $var1 == '1234' )
    <p>É igual</p>
@else
    <p>É diferente</p>
@endif

@unless( $var1 == 1234 )
<p>Não é igual... unless</p>
@endunless

@for( $i = 0; $i < 10; $i++ )
    <p>For: {{$i}}</p>
@endfor

{{--
@if( count($arrayData) > 0 )
    @foreach($arrayData as $array)
        <p>Foreach: {{$array}}</p>
    @endforeach
@else
    <p>Não existe itens para serem impressos</p>
@endif
--}}

@forelse($arrayData as $array)
    <p>Forelse: {{$array}}</p>
@empty
    <p>Não existe itens para serem impressos</p>
@endforelse

@php

@endphp

@include('site.includes.sidebar', compact('var1'))

@endsection

@push('scripts')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endpush