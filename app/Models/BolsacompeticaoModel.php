<?php namespace App\Models;

    use CodeIgniter\Model;

    class BolsacompeticaoModel extends Model {
        protected $table = 'bolsacompeticao';
        protected $primaryKey = 'idbolsaCompeticao';
        protected $allowedFields = ['inscricao_idinscricao'];
        protected $returnType = 'object';
    }
  
?>