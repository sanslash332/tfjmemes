@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> el meme aleatorio </h1>

@if(isset($randommeme->autors))
<div id="meme_autors">
<p> Dicho por: @foreach($randommeme->autors as $autor)
<a href="{!! route("autor.show", $autor->id)!!}"> {{$autor->name}} </a>
@endforeach
</p>
</div>
@endif
<p> {{$randommeme->content}}</p>
@if(isset($randommeme->tags))
<div id="meme_tags">
<p> tags: @foreach($randommeme->tags as $tag)
<a href="{!! route("tag.show", $tag->id) !!}">{{$tag->title}} </a>
@endforeach
</p>
</div>

@endif
            </div>
        </div>
    </div>
</div>
@endsection
