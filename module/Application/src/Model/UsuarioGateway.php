<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class UsuarioGateway
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function persistir(Usuario $model)
    {
    	$dados = $model->getArrayCopy();

        /*
        ****outra forma:
        $dados = [
            'email' => $model->email,
            'senha' => $model->senha,
        ];*/

        $this->tableGateway->insert($dados);
    }

    public function buscar($id)
    {
        $result = $this->tableGateway->select(['id' => $id]);
        return $result->current();
    }

    public function listar()
    {
        return $this->tableGateway->select();
    }

    public function visualizar(Usuario $model)
    {
        $resultados = $this->tableGateway->select(['id' => $model->id]);
        return $resultados->current();
    }

    public function excluir(Usuario $model)
    {
        $this->tableGateway->delete(['id' => $model->id]);
    }

    public function atualizar($model)
    {
        $dados = $model->getArrayCopy();

        $this->tableGateway->update($dados, ['id' => $model->id]);
    }
}









