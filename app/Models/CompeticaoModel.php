<?php namespace App\Models;

    use CodeIgniter\Model;

    class CompeticaoModel extends Model {
        protected $table = 'competicao';
        protected $primaryKey = 'idCompeticao';
        protected $allowedFields = ['administrativo_idadministrativo', 'cidade_idcidade', 'estado_idestado', 
        'nome', 'endereco', 'bairro', 'data', 'descricao', 'cartaz'];
        protected $returnType = 'object';
    }
  
?>