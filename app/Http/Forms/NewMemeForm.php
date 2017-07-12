<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class NewMemeForm extends Form
{
	public function buildForm()
	{
$opt = $this->formOptions;
if(isset($opt['edit']))
{
$meme = $opt['meme'];

}

$default = "";
if(isset($meme))
{
foreach($meme->autors as $a)
{
$default=$default.','.$a->name;

}
$default=ltrim($default,',');

}



			$this->add('autors', 'text', ['label' => 'autores (separelos por comas)', 'value'=> $default,'rules'=>'required']);

if(isset($meme))
{
$default="";
foreach($meme->tags as $t)
{
$default = $default.','.$t->title;

}
$default = ltrim($default,',');

}
$this->add('tags', 'text', ['label' => 'tags (separelos por comas)','value'=> $default,'rules' => 'required']);

$this->add('content', 'textarea', ['label' => 'Contenido del meme.','rules'=> 'required']);

			$this->add('Enviar', 'submit'); 
	}
}
