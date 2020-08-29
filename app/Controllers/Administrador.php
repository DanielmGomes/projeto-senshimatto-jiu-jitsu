<?php namespace App\Controllers;

class Administrador extends BaseController

{
    public function index()
    {
        echo view('administrador/inicio');
    }

	public function cadastroAdministrador()
	{
        $estadoModel = new \App\Models\EstadoModel();
        $cidadeModel = new \App\Models\CidadeModel();

        $data['mensagem'] = '';
        $data['acao'] = 'inserir';                
        $data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();
        
        return view('administrador/cadastroAdministrador', $data);
	}

    public function inserir()
    {
        $administrativoModel = new \App\Models\AdministrativoModel();
        $estadoModel = new \App\Models\EstadoModel();

        $data = array
        (
            'cidade_idcidade' => $this->request->getPost('cidade'),
            'estado_idestado'=> $this->request->getPost('estado'),
            'nome'=> $this->request->getPost('nome'),
            'email'=> $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'whatsapp' => $this->request->getPost('whatsapp'),
            'usuario' => $this->request->getPost('usuario'),
            'senha'=> sha1($this->request->getPost('senha')),
            'endereco'=> $this->request->getPost('endereco'),
            'bairro'=> $this->request->getPost('bairro')
        ); 
    
        $data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();
        $data['mensagem'] = '';

        $duplicadoEmail = $administrativoModel->where('email', $data['email'])->find();
        $duplicadoUsuario = $administrativoModel->where('usuario', $data['usuario'])->find();

        if ($duplicadoEmail != NULL) {
            $_SESSION['duplicadoEmail'] = true;
            echo view('administrador/CadastroAdministrador', $data);
        }else {
            if ($duplicadoUsuario != NULL) {
                $_SESSION['duplicadoUsuario'] = true;
                echo view('administrador/cadastroAdministrador', $data);
            }
        }

        if ($administrativoModel->insert($data)) {
            echo view('administrador/login', $data);
        }else {
            $data['mensagem'] = 'erro: problema ao salvar dados';
            echo view('teste', $data);
        }
    }  
    
	public function buscarCidade(){
        $cidadeModel = new \App\Models\CidadeModel();
        
        $id = $this->request->getPost('idEstado');
        $cidade = $cidadeModel->where('uf', $id)->find();
        foreach ($cidade as $cidade){
            echo '<option value='.$cidade->idCidade.'>'.$cidade->nome.'</option>';
        }
    }
    
    public function login(){

        $session = session();

        $data['acao'] = 'inserir';
        $data['mensagem'] = '';
        $json = array();
        $json['status'] = 1;
        $json['error_list'] = array();
        
        $administrativoModel = new \App\Models\AdministrativoModel();

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if (empty($username) or empty($password)) {
                $json['status'] = 0;
                $json['error_list']['#username'] = 'usuario ou senha não pode ser vazio';
                $data['mensagem'] = 'usuario ou senha não pode ser vazio';
                echo view('administrador/login', $data);
            }else {
                $resultado = $administrativoModel->where('usuario', $username)->get()->getRow(); 
                if ($resultado) {
                    $idAdministrativo = $resultado->idAdministrativo;
                    $usuario = $resultado->usuario;
                    $senha = $resultado->senha;
                    if (sha1($password) == $resultado->senha) {
                        $_SESSION['idAdministrativo'] = $idAdministrativo;
                        $_SESSION['usuario'] = $usuario;
                        echo view('administrador/inicio');
                    }else {
                        $json['status'] = 0;
                        $data['mensagem'] = 'senha não confere';
                        echo view('administrador/login', $data);
                    }
                }else {
                    $json['status'] = 0;
                    $data['mensagem'] = 'usuario não confere';
                    echo view('administrador/login', $data);
                }if ($json['status'] == 0) {
                    $_SESSION['nao identificado'] = true;
                    $data['mensagem'] = 'usuario e senha não conferem';
                    echo view('administrador/login', $data);
                }
            }
        }
        return view('administrador/login', $data);
    }

    public function logoff(){ # função logoff setor adminstrativo
        $session = session();
        $session->destroy();
        $data['mensagem'] = '';
        echo view('administrador/login', $data);
    }    

}