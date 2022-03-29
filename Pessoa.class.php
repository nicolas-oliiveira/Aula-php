<?php //iniciando
class Pessoa{
    
    private $nome;//declarando variável nome
    private $endereco;    //declarando variável endereço
    private $bairro;    //declarando variável bairro
    private $cep;      //declarando variável cep
    private $cidade;    //declarando variável cidade
    private $estado;    //declarando variável bairro


    
    public function setNome($nome){// atribuindo função 
        $this->nome = $nome; //aplicação do this para indicar variável global
    }

    public function setEndereco($endereco){// atribuindo função 
        $this->endereco = $endereco; //aplicação do this para indicar variável global
    }

    public function setBairro($bairro){// atribuindo função 
        $this->bairro = $bairro; //aplicação do this para indicar variável global
    }

    public function setCep($cep){// atribuindo função 
        $this->cep = $cep; //aplicação do this para indicar variável global
    }

    public function setCidade($cidade){// atribuindo função 
        $this->cidade = $cidade; //aplicação do this para indicar variável global
    }

    public function setEstado($estado){// atribuindo função 
        $this->estado = $estado; //aplicação do this para indicar variável global
    }

    public function getNome(){// retornando um valor
        return $this->nome;// retornando valor para a variável global
    }

    public function getEndereco(){// retornando um valor
        return $this->endereco;// retornando valor para a variável global
    }

    public function getBairro(){// retornando um valor
        return $this->bairro;// retornando valor para a variável global
    }

    public function getCep(){// retornando um valor
        return $this->cep;// retornando valor para a variável global
    }

    public function getCidade(){// retornando um valor
        return $this->cidade;// retornando valor para a variável global
    }

    public function getEstado(){// retornando um valor
        return $this->estado;// retornando valor para a variável global
    }

}
//encerramento do código
?> 