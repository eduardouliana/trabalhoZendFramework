<?php
namespace Application\Model;

class Usuario
{
    public $id;
    public $email;
    public $senha;

    public function getArrayCopy()
    {
        return [
            'id' => isset($this->id) ? $this->id : NULL,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }

    public function exchangeArray(array $dados)
    {
        $this->id = isset($dados['id']) ? $dados['id'] : NULL;
        $this->email = $dados['email'];
        $this->senha = $dados['senha'];
    }
}
