<?php namespace App\Controllers;

class Competicao extends BaseController

{

	public function cadastroCompeticao(){        
        $competicaoModel = new \App\Models\CompeticaoModel();
        $estadoModel = new \App\Models\EstadoModel();
        $cidadeModel = new \App\Models\CidadeModel();
        $data['competicao'] = $competicaoModel->find();
        $data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();

        return view('competicao/cadastroCompeticao', $data);
    }


    public function inserir()
    {
        $competicaoModel = new \App\Models\CompeticaoModel();
        $competicaoModel = new \App\Models\CompeticaoModel();
        $estadoModel = new \App\Models\EstadoModel();
        $cidadeModel = new \App\Models\CidadeModel();

        $data = array(
            'administrativo_idadministrativo'=> $this->request->getPost('idAdministrativo'),
            'nome'=> $this->request->getPost('nome'),
            'endereco'=> $this->request->getPost('endereco'),
            'bairro'=> $this->request->getPost('bairro'),
            'cidade' => $this->request->getPost('cidade'),
            'estado' => $this->request->getPost('estado'),
            'data' => $this->request->getPost('data'),
            'descricao'=> $this->request->getPost('descricao'),
            'cartaz'=> $this->request->getPost('cartaz')
        ); 
    
        $data['competicao'] = $competicaoModel->find();
        $data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();
        $data['mensagem'] = '';

        $duplicadoNome = $competicaoModel->where('nome', $data['nome'])->find();

        if ($duplicadoNome != NULL) {
            $_SESSION['duplicadoNome'] = true;
            echo view('competicao/CadastroCompeticao', $data);
        }

        if ($competicaoModel->insert($data)) {
            echo view('competicao/cadastroCompeticao', $data);
        }else {
            $data['mensagem'] = 'erro: problema ao salvar dados';
            echo view('teste', $data);
        }

        echo view('competicao/cadastroCompeticao', $data);
    }  
    
	public function buscarCidade(){
        $cidadeModel = new \App\Models\CidadeModel();
        
        $id = $this->request->getPost('idEstado');
        $cidade = $cidadeModel->where('uf', $id)->find();
        foreach ($cidade as $cidade){
            echo '<option value='.$cidade->idCidade.'>'.$cidade->nome.'</option>';
        }
    }
}

?>