<?php namespace App\Models;

    use CodeIgniter\Model;

    class RankingModel extends Model {
        protected $table = 'ranking';
        protected $primaryKey = 'idranking';
        protected $allowedFields = ['lutasCasadas_idlutasCasadas'];
        protected $returnType = 'object';
    }
  
?>