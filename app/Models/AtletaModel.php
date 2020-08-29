<?php namespace App\Models;

    use CodeIgniter\Model;

    class AtletaModel extends Model {
        protected $table = 'atleta';
        protected $primaryKey = 'idatleta';
        protected $allowedFields = ['academia_idacademia', 'cidade_idcidade', 'estado_idestado', 
        'nome', 'nascimento', 'cpf', 'sexo', 'email', 'telefone', 'whatsapp', 'telefone', 'whatsapp', 
        'usuario','senha', 'foto', 'peso', 'idade', 'endereco', 'bairro', 'faixa', 'numeroCartao', 'nomeCartao',
        'codigoCartao', 'vencimentoCartao'];
        protected $returnType = 'object';
    }
  
?>