<?php namespace App\Controllers;

class Academia extends BaseController{

	public function cadastroAcademia(){		
        $estadoModel = new \App\Models\EstadoModel();
        $data['estado'] = $estadoModel->find();
		return view('academia/cadastroAcademia', $data);
	}

    public function inserir(){

        $atletaModel = new \App\Models\AtletaModel();
        $estadoModel = new \App\Models\EstadoModel();
        $academiaModel = new \App\Models\AcademiaModel();

        $data = array(
            'nome' => $this->request->getPost('nome'),
            'nascimento'=> $this->request->getPost('nascimento'),
            'cpf'=> $this->request->getPost('cpf'),
            'sexo'=> $this->request->getPost('sexo'),
            'telefone' => $this->request->getPost('telefone'),
            'email' => $this->request->getPost('email'),
            'endereco'=> $this->request->getPost('endereco'),
            'bairro'=> $this->request->getPost('bairro'),
            'estado'=> $this->request->getPost('estado'),
            'cidade'=> $this->request->getPost('cidade'),
            'academia'=> $this->request->getPost('academia'),
            'professor'=> $this->request->getPost('professor'),
            'faixa'=> $this->request->getPost('faixa'),
            'peso'=> $this->request->getPost('peso'),
            'usuario'=> $this->request->getPost('usuario'),
            'senha'=> sha1($this->request->getPost('senha')),
        ); 
    
        $data['estado'] = $estadoModel->find();
        $data['academia'] = $academiaModel->find();
        $data['mensagem'] = '';

        $duplicadoEmail = $atletaModel->where('email', $data['email'])->find();
        $duplicadoUsuario = $atletaModel->where('usuario', $data['usuario'])->find();

        if ($duplicadoEmail != NULL) {
            $_SESSION['duplicadoEmail'] = true;
            echo view('atleta/CadastroAtleta', $data);
        }else {
            if ($duplicadoUsuario != NULL) {
                $_SESSION['duplicadoUsuario'] = true;
                echo view('atleta/cadastroAtleta', $data);
            }
        }

        if ($atletaModel->insert($data)) {
            echo view('administrador/login', $data);
        }else {
            $data['mensagem'] = 'erro: problema ao salvar dados';
            echo view('teste', $data);
        }
    } 

    public function login(){

        $session = session();

        $data['mensagem'] = '';
        $json = array();
        $json['status'] = 1;
        $json['error_list'] = array();
        
        $atletaModel = new \App\Models\AtletaModel();

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if (empty($username) or empty($password)) {
                $json['status'] = 0;
                $json['error_list']['#username'] = 'usuario ou senha não pode ser vazio';
                $data['mensagem'] = 'usuario ou senha não pode ser vazio';
                echo view('atleta/login', $data);
            }else {
                $resultado = $atletaModel->where('usuario', $username)->get()->getRow(); 
                if ($resultado) {
                    $idAtleta = $resultado->idatleta;
                    $usuario = $resultado->usuario;
                    $senha = $resultado->senha;
                    if (sha1($password) == $resultado->senha) {
                        $_SESSION['idAtleta'] = $idAtleta;
                        $_SESSION['usuario'] = $usuario;
                        echo view('inicio');
                    }else {
                        $json['status'] = 0;
                        $data['mensagem'] = 'senha não confere';
                        echo view('atleta/login', $data);
                    }
                }else {
                    $json['status'] = 0;
                    $data['mensagem'] = 'usuario não confere';
                    echo view('atleta/login', $data);
                }if ($json['status'] == 0) {
                    $_SESSION['nao identificado'] = true;
                    $data['mensagem'] = 'usuario e senha não conferem';
                    echo view('atleta/login', $data);
                }
            }
        }
        return view('atleta/login', $data);
    }

	public function buscarCidade(){
        $cidadeModel = new \App\Models\CidadeModel();
        
        $id = $this->request->getPost('idEstado');
        $cidade = $cidadeModel->where('uf', $id)->find();
        foreach ($cidade as $cidade){
            echo '<option value='.$cidade->idCidade.'>'.$cidade->nome.'</option>';
        }
    }

	public function buscarProfessor(){
        $professorModel = new \App\Models\ProfessorModel();

        $id = $this->request->getPost('idAcademia');
        $professor = $professorModel->where('academia_idacademia', $id)->find();
        foreach ($professor as $professor) {
            echo '<option value='.$professor->idprofessor.'>'.$professor->nome.'</option>';
        } 
    }    

}