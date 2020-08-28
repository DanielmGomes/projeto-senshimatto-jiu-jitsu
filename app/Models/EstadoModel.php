<?php namespace App\Models;

    use CodeIgniter\Model;

    class EstadoModel extends Model {
        protected $table = 'estado';
        protected $primaryKey = 'idEstado';
        protected $allowedFields = ['nome', 'uf', 'ibge', 'pais', 'ddd'];
        protected $returnType = 'object';
    }
  
?>