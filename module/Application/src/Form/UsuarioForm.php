<?php
namespace Application\Form;

use Zend\Form\Form;

class UsuarioForm extends Form
{
    public function __construct()
    {
        parent::__construct();

        $this->setAttribute('method', 'POST');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'email',
            'type' => 'text',
        ]);

        $this->add([
            'name' => 'senha',
            'type' => 'password',
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Cadastrar',
            ],
        ]);
    }
}
