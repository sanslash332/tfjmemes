<article>
@if(isset($meme->autors))
<div id="meme_autors">
<p> Dicho por: @foreach($meme->autors as $autor)
<a href="{!! route("autor.show", $autor->id)!!}"> {{$autor->name}} </a>
@endforeach
</p>
</div>
@endif
@if(auth::check())
<div id="admin_tools">
<a href="{{ route('meme.edit', $meme->id)}}"> editar </a>
<button onclick="event.preventDefault();
if(confirm('¿est&aacute; seguro que desea borrar este meme?'))
{
document.getElementById('delete{{$meme->id}}-form').submit();

}"> borrar </button>

<form id="delete{{$meme->id}}-form" action="{{ route('meme.destroy', $meme) }}" method="POST" style="display: none;">

                                            {{ csrf_field() }}

{{ method_field('DELETE') }}
                                        </form>
       

</div>
@endif

<p> {!! nl2br($meme->content) !!}</p>
<br />

@if(isset($meme->tags))
<div id="meme_tags">
<p> tags: @foreach($meme->tags as $tag)
<a href="{!! route("tag.show", $tag->id) !!}">{{$tag->title}} </a>
@endforeach
</p>

<br />
<p> te gust&oacute;? <a href="{{route('meme.show', $meme)}}"> ¡ll&eacute;vatelo solito! </a> </p>

</div>

@endif
</article>
<hr />
