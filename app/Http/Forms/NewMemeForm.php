<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class NewMemeForm extends Form
{
	public function buildForm()
	{
$opt = $this->formOptions;

			$this->add('autors', 'text', ['label' => 'autores (separelos por comas)']);

$this->add('tags', 'text', ['label' => 'tags (separelos por comas)']);

$this->add('content', 'textarea', ['label' => 'Contenido del meme.']);

			$this->add('Enviar', 'submit'); 
	}
}
