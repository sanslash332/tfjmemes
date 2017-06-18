@extends('layouts.app')
@section('title')
agregar nuevo meme 
@endsection

@section('content')

<div class="formHeader" id="adminuserFormHeader">
<p> Creación de nuevo meme </p>
</div>

<div class="formContent" id="formNewUser">

<div class="formerrors" id="newuserserrors">
@if(count($errors)>0)
<ul>
@foreach($errors->all() as $error)
<li> {{$error}} </li>
@endforeach
</ul>
@endif
</div>


<p> Rellena el formulario de manera correcta para agregar el meme al sistema </p>

{!! form($newform) !!}

</div>

@endsection
