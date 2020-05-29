// Agora que já entendemos como funciona a criação de objetos em PHP
// vamos fazer o seguinte:
// Crie uma classe para automovel
// O automovel tem caracteristicas como cor, marchas, ano, modelo, fabricante, se é nacional ou importado etc.
// O automovel tem métodos porque ele acelera, freia, troca de marcha, abastece etc.
// Crie um objeto a partir da sua nova classe e manipule alguns atributos do seu automovel além de 
// faze-lo acelerar e sair da inercia

#########################
#  Contribuicao Matheus # 
#########################

[index.html]
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Atividade</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<form method="session" action="desafio.php">
		<label>
			Cor: <input type="text" name="cor">
		</label>
		<br>
		<label>
			Fabricante: <input type="text" name="fabricante">
		</label>
		<br>
		<label>
			Marchas: <input type="text" name="marchas">
		</label>
		<br>
		<label>
			Ano: <input type="text" name="ano">
		</label>
		<br>
		<label>
			Modelo: <input type="text" name="modelo">
		</label>
		<br>
		<select class="form-control" name="importado" id="importado">
			<option value="1">Importado</option>
			<option value="2">Nacional</option>
		</select>
		<br>
		<label>
			Tamanho do tanque: <input type="text" name="combMax">
		</label>
		<br>
		<input type="submit" value="Criar carro">
	</form>
</html>
[/index.html]

[desafio.php]
<?php
class Carro {
  
  function __construct($cor, $marchas, $ano, $modelo, $fabricante, $importado, $combMax) {
    $this->cor = $cor;
    $this->marchas = $marchas;
    $this->ano = $ano;
    $this->combMax = $combMax;
    $this->modelo = $modelo;
    $this->fabricante = $fabricante;
    $this->importado = $importado;
   }

    public $comb = 0;
    public $velocidade=0;
    public $marcha=0;
    public $ligado = FALSE;

  function ligar() {
    $this->ligado=TRUE;
  }

  function desligar() {
    $this->ligado=FALSE;
    $this->velocidade = 0;
  }

  function acelerar() {
    if ($this->ligado && $this->marcha>0){
      $this->velocidade = $this->velocidade + 10;
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado ou em ponto morto';
    } 
  }

  function freiar() {
    if ($this->ligado){
      if ($this->velocidade>=10){
      $this->velocidade = $this->velocidade - 10;
      } else {
        echo 'O carro já esta parado';
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }

  function subirMarcha() {
    if ($this->ligado){
      if ($this->marcha<$this->marchas){
        $this->marcha++;
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }

  function descerMarcha() {
    if ($this->ligado){
      if ($this->marcha>0){
        $this->marcha--;
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }
  
  function abastecer($litros){
    if (($this->comb+$this->litros)<=$this->combMax){
      $this->comb = $this->comb + $this->litros;
    } else {
      $this->comb = $this->combMax;
      $this->sobrou = $this->combMax -($this->comb+$this->litros);
      echo 'Seu tanque esta cheio! mas so foram usados ($combMax - $comb) litros, e sobraram $sobrou litros';
    }
  }

  function painel() {
    echo "----------------------------------------";
    echo "<br>Modelo: ".  $this->modelo. ", ".  $this->cor . " - ".  $this->ano. ", ".  $this->fabricante;
    echo "<br>Velocidade:".  $this->velocidade. " - M:". $this->marcha. "|  Tanque:". 100*$this->comb/$this->combMax."%";
    echo "<br>----------------------------------------<br>";
  }
    
}

session_start();
$cor = $_GET['cor'];
$marchas = $_GET['marchas'];
$ano = $_GET['ano'];
$modelo = $_GET['modelo'];
$fabricante = $_GET['fabricante'];
$importado = $_GET['importado'];
$combMax = $_GET['combMax'];

$carro = new Carro($cor, $marchas, $ano, $modelo, $fabricante, $importado, $combMax);
$carro->painel();
$menu = $_GET['acao'];
switch ($menu){

  case 1:
    $carro->painel();
    break;

  case 2:
    $carro->ligar();
    break;

  case 3:
    $carro->desligar();
    break;

  case 4:
    $carro->acelerar();
    break;

  case 5:
    $carro->freiar();
    break;

  case 6:
    $carro->subirMarcha();
    break;

  case 7:
    $carro->descerMarcha();
    break;
}

$_SESSION['carro'] = $carro;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>

  <body>
    

    <div class="container">
      <div class="row">
        <h1>Ações Carro</h1>
      </div>
        <div class="row">
          <div class="col-md-4">
            <form role="form" action="desafio2.php" method="get"><!-- Update -->
            <div class="form-group">
              <label for="Produto">Ação:</label><br><br>
                Produto:
                <select class="form-control" name="acao" id="acao">
                Ação: 
                      <option value="1">Mostrar Painel</option>
                      <option value="2">Ligar</option>
                      <option value="3">Desligar</option>
                      <option value="4">Acelerar</option>
                      <option value="5">Freiar</option>
                      <option value="6">Subir Marcha</option>
                      <option value="7">Descer Marcha</option>
              </select>
            </div>  

            <button type="submit" class="btn btn-default">Ação</button>
        </form>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        </div>
    </div>
  </body>
</html>
[/desafio.php]

[desafio2.txt]
<?php
class Carro {
  
  function __construct($cor, $marchas, $ano, $modelo, $fabricante, $importado, $combMax) {
    $this->cor = $cor;
    $this->marchas = $marchas;
    $this->ano = $ano;
    $this->combMax = $combMax;
    $this->modelo = $modelo;
    $this->fabricante = $fabricante;
    $this->importado = $importado;

   }

    public $comb = 0;
    public $velocidade=0;
    public $marcha=0;
    public $ligado = FALSE;

  function ligar() {
    $this->ligado=TRUE;
  }

  function desligar() {
    $this->ligado=FALSE;
    $this->velocidade = 0;
    $this->marcha=0;
  }

  function acelerar() {
    if ($this->ligado && $this->marcha>0){
      $this->velocidade = $this->velocidade + 10;
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado ou em ponto morto';
    } 
  }

  function freiar() {
    if ($this->ligado){
      if ($this->velocidade>=10){
      $this->velocidade = $this->velocidade - 10;
      } else {
        echo 'O carro já esta parado';
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }

  function subirMarcha() {
    if ($this->ligado){
      if ($this->marcha<$this->marchas){
        $this->marcha++;
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }

  function descerMarcha() {
    if ($this->ligado){
      if ($this->marcha>0){
        $this->marcha--;
      }
    } else {
      echo 'Impossivel realizar essa ação, pois o carro esta desligado';
    }
  }
  
  function abastecer($litros){
    if (($this->comb+$this->litros)<=$this->combMax){
      $this->comb = $this->comb + $this->litros;
    } else {
      $this->comb = $this->combMax;
      $this->sobrou = $this->combMax -($this->comb+$this->litros);
      echo 'Seu tanque esta cheio! mas so foram usados ($combMax - $comb) litros, e sobraram $sobrou litros';
    }
  }

  function painel() {
    echo "----------------------------------------";
    echo "<br>Modelo: ".  $this->modelo. ", ".  $this->cor . " - ".  $this->ano. ", ".  $this->fabricante;
    echo "<br>Velocidade:".  $this->velocidade." - M:". $this->marcha. " |  Tanque:". 100*$this->comb/$this->combMax."%";
    echo "<br>----------------------------------------<br>";
  }

    
}
session_start();
$carro = $_SESSION['carro'];

$menu = $_GET['acao'];
switch ($menu){

  case 1:
    $carro->painel();
    break;

  case 2:
    $carro->ligar();
    break;

  case 3:
    $carro->desligar();
    break;

  case 4:
    $carro->acelerar();
    break;

  case 5:
    $carro->freiar();
    break;

  case 6:
    $carro->subirMarcha();
    break;

  case 7:
    $carro->descerMarcha();
    break;
}
$_SESSION['carro'] = $carro;
$carro->painel();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>

  <body>
    

    <div class="container">
      <div class="row">
        <h1>Ações</h1>
      </div>
        <div class="row">
          <div class="col-md-4">
            <form role="form" action="desafio2.php" method="get"><!-- Update -->
            <div class="form-group">
              <label for="Produto">Ação:</label><br><br>
                Produto:
                <select class="form-control" name="acao" id="acao">
                Ação: 
                      <option value="1">Mostrar Painel</option>
                      <option value="2">Ligar</option>
                      <option value="3">Desligar</option>
                      <option value="4">Acelerar</option>
                      <option value="5">Freiar</option>
                      <option value="6">Subir Marcha</option>
                      <option value="7">Descer Marcha</option>
              </select>
            </div>

            <button type="submit" class="btn btn-default">Ação</button>
        </form>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        </div>
    </div>
  </body>
</html>
[/desafio2.txt]
