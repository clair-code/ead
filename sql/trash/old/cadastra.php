<?php

class Cadastrado // aqui começa a planta baixa de sua classe
{
    var $nome;
    var $telefone;
    var $sobrenome;
    var $end;
    var $con;
    
    function __construct($nome, $sobrenome, $telefone, $ende) // um construtor...
    {
        $this->nome      = $nome; //repare que o $ vai antes do this, e nome fica sem. Explicando, nesse caso, as variaveis de instancia da classe Cadastrado, vao ter o valor dos argumentos passado ao construtor
        $this->telefone  = $telefone;
        $this->sobrenome = $sobrenome;
        $this->end       = $ende;
    }
    
    function conecta($local, $usuario, $senha) //função que conecta ao banco de dados, e retorna o handler da conexão...
    {
        if ($this->con = mysql_connect("$local", "$usuario", "$senha")) {
            return true;
        } else {
            return false;
        }
    }
    
    function cadastra($db, $tabela) //função que cadastra
    {
        echo $db;
        mysql_select_db($db, $this->con);
        $query = "INSERT INTO $tabela  (nome, sobrenome, telefone, endereco) VALUES ('$this->nome','$this->sobrenome','$this->telefone','$this->end')";
        // var_dump($query);
        /* neste caso eu suponho que você tem um BD, com 5 colunas, id, nome, sobrenome, telefone e endereço, nessa sequencia, qlqr coisa só adapte para sua necessidade... */
        mysql_query($query, $this->con) or die(mysql_error());
    }
    
    function nome_completo()
    {
        $completo = $this->nome . " " . $this->sobrenome;
        return $completo;
    }
    
    function qual_nome()
    {
        return $this->nome;
    }
    
    function qual_sobrenome()
    {
        return $this->sobrenome;
    }
    
    function qual_end()
    {
        return $this->end;
    }
    
    function qual_telefone()
    {
        return $this->telefone;
    }
} //fim da classe

$cadastro1 = new Cadastrado($_POST["nome"], $_POST["sobrenome"], $_POST["telefone"], $_POST["end"]);

//agora vamos cadastra-lo
if ($cadastro1->conecta("localhost", "root", "root")) {
    $cadastro1->cadastra("syschaves", "teste");
    //agora só para mostrar um pouco mais:
    
    echo "Você cadastrou: " . $cadastro1->nome_completo();
    echo "<br>Com o telefone: " . $cadastro1->qual_telefone();
    echo "<br>Morando no endereço: " . $cadastro1->qual_end();
} else {
    echo "Não conectou ao BD";
    exit();
}
?>