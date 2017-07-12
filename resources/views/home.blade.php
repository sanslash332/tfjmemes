@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> el meme aleatorio </h1>
            @each('meme.meme', [$randommeme],'meme', 'meme.empty')

            </div>
        </div>
    </div>
</div>
@endsection
