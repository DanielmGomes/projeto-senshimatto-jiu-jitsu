<?php namespace App\Models;

    use CodeIgniter\Model;

    class AcademiaModel extends Model {
        protected $table = 'academia';
        protected $primaryKey = 'idacademia';
        protected $allowedFields = ['professor_idprofessor', 'cidade_idcidade', 'estado_idestado', 
        'nome', 'cnpj', 'endereco', 'bairro', 'responsavel', 'cpf', 'rg', 'telefone', 'whatsapp', 'email'];
        protected $returnType = 'object';
    }
  
?>