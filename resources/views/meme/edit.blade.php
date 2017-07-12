@extends('layouts.app')
@section('title')
Editando meme
@endsection

@section('content')

<div class="formHeader" id="adminuserFormHeader">
<p> edici&oacute;n de meme </p>
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


<p> Edita los diferentes campos del formulario para cambiar el meme. Si quitas un Tag o un Autor, y este era el &uacute;nico meme asosiados a ellos, el tag o el autor ser&aacute; autom&aacute;ticamente eliminado. </p>

{!! form($newform) !!}

</div>

@endsection
