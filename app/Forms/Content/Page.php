<?php namespace App\Forms\Content;

use Kris\LaravelFormBuilder\Form;

class Page extends Form
{
    public function buildForm()
    {
        if ($this->formOptions['method'] === 'DELETE') {
            return $this->add('submit', 'submit', ['label' => 'Delete (i18n)', 'attr' => ['class' => 'btn btn-danger']]);
        }

        $this->add('title', 'text', ['label' => 'Title (i18n)']);

        if ($this->formOptions['method'] === 'PATCH') {
            $this->add('submit', 'submit', ['label' => 'Update (i18n)', 'attr' => ['class' => 'btn btn-primary']]);
        } else {
            $this->add('submit', 'submit', ['label' => 'Save (i18n)', 'attr' => ['class' => 'btn btn-primary']]);
        }
    }
}
