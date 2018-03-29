<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class EditAutorForm extends Form
{
	public function buildForm()
	{
$opt = $this->formOptions;
$n="";
if(isset($opt['edit']))
{
$autor = $opt['autor'];
$n=$autor->name;


}


			$this->add('name', 'text', ['label' => 'Nombre', 'value'=> $n,'rules'=>'required']);


			$this->add('Modificar', 'submit'); 
	}
}
