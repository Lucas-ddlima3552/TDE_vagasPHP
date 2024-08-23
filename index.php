<?php
use Vtiful\Kernel\Format;

echo "<pre>";

//class cachorro {
    //public string $nome;
    //public string $raca;
    //public function __construct(string $nome, string $raca)
    //{
      //  $this->nome = $nome;
    //    $this->raca = $raca;
  //  }
//}

//$dog = new cachorro(raca: "raca", nome: "nome");
//$dog = new cachorro("nome", "Desc");
//var_dump($dog);

class Cliente {
    public int $cod;
    public string $nome;
    public string $cpf;

    public function __construct(){
        $this->cod = 1000;
        $this->nome = "Vilsinho";
        $this->cpf = "000.000.000-00";
    }

}

class Vaga {
    public int $numero;
    public bool $status;
    public DateTime $dataLiberacao;

    public function __construct(){
        $this->numero = 7;
        $this->status = true;
        $this->dataLiberacao = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2024 21:13:30");
    }
}
class Historico{
    public int $cod;
    public DateTime $dataAtual;
    public DateTime $dataEntrada;
    public DateTime $dataSaida;
    public Vaga $vaga;
    public Cliente $cliente;

    public function __construct(){
        $this->dataAtual = DateTime::createFromFormat("d/m/Y", "22/08/2024");
        $this->dataEntrada = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2024 21:18:30");
        $this->dataSaida = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2024 22:18:30");
        $this->vaga = new Vaga();
        $this->cliente = new Cliente();
    }
    public function __tostring(): string
    {
        return "Cliente: {$this->cliente->nome}
                \nVaga: {$this->vaga->numero}
                \nData de Entrada: {$this->dataEntrada->format("d-m-Y H:i")}";
    }
}
$Historico = new Historico();
echo($Historico);