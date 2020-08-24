<?php namespace App\Models;

    use CodeIgniter\Model;

    class InscricaoModel extends Model {
        protected $table = 'inscricao';
        protected $primaryKey = 'idInscricao';
        protected $allowedFields = ['atleta_idatleta', 'competicao_idcompeticao', 'valorInscricao', 
        'competirAbsoluto', 'fechamentoInscricao'];
        protected $returnType = 'object';
    }
  
?>