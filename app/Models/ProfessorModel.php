<?php namespace App\Models;

    use CodeIgniter\Model;

    class ProfessorModel extends Model {
        protected $table = 'professor';
        protected $primaryKey = 'idprofessor';
        protected $allowedFields = ['cidade_idcidade', 'estado_idestado', 
        'nome', 'endereco', 'bairro', 'cpf', 'rg', 'telefone', 'whatsapp', 'email', 'faixa'];
        protected $returnType = 'object';
    }
  
?>