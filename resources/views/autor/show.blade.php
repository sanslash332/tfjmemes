@extends('layouts.app')
@section('title')
autor: {{$autor->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> Memes dichos por {{$autor->name}} </h1>

@each('meme.meme', $autor->memes, 'meme', 'meme.empty')



            </div>
        </div>
    </div>
</div>
@endsection
