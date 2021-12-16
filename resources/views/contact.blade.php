@extends('layouts.app')

@section('title') {{'Contact Page'}} @endsection

@section('content')



@if (count($people))

<ul>
@foreach ( $people as $person)

<li> {{$person}} </li>

@endforeach
</ul>
    
@endif

@endsection

@section('footer')

<script>
    let el = document.querySelector('.container')
    let content = `<h1> Contact Page </h1>`
    el.insertAdjacentHTML('afterbegin', content)    
</script>

@endsection 