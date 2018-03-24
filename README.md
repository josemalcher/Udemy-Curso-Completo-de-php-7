# Udemy Curso Completo de php 7 

https://www.udemy.com/curso-php-7-online/

https://josemalcher.net/kanban/public/task/251/c1b8680b9e2b4305daf46fb0f202491ea8b958010a14999aebf4e6238976

---

## <a name="indice">Índice</a>

- [01 Introdução ao PHP](#parte1)   
- [02 Entendendo Controle de versão](#parte2)   
- [03 Conhecendo a Linguagem PHP](#parte3)   
- [04 Estruturas de Controle e Laços de repetição](#parte4)   
- [05 Arrays em PHP](#parte5)   
- [06 Sessão no PHP 7](#parte6)   
- [07 Trabalhando com Funções em PHP](#parte7)   
- [08 Trabalhando com Data e Hora no PHP](#parte8)   
- [09 Programação Orientada a Objetos - Introdução](#parte9)   
- [10 Banco de Dados - Preparando o Ambiente](#parte10)   
- [11 Banco de Dados - MySQLi](#parte11)   
- [12 Banco de Dados - PDO](#parte12)   
- [13 Banco de Dados - Data Access Object e PDO](#parte13)   
- [14 Manipulando Arquivos](#parte14)   
- [15 Tratando Erros com Try Catch](#parte15)   
- [16 Trabalhando com Imagens e o PHP usando a Biblioteca GD](#parte16)   
- [17 Gerando Boletos com o BoletoPHP](#parte17)   
- [18 Gerenciando dependências com Composer](#parte18)   
- [19 Trabalhando com E-mails usando a classe PHPMailer](#parte19)   
- [20 Criando Templates com RainTPL](#parte20)   
- [21 Criando Diretórios Virtuais com o Apache](#parte21)   
- [22 Slim Framework](#parte22)   
- [23 Segurança no PHP 7](#parte23)   
- [24 Projeto E-Commerce Admin](#parte24)   



---

## <a name="parte1">01 Introdução ao PHP</a>

- http://www.php.net/

- História: https://pt.wikipedia.org/wiki/PHP

- mundo das funções PHP: http://micmap.org/php-by-example/pt

- Servidor: https://sourceforge.net/projects/xampp/files/

- https://code.visualstudio.com/

- https://pt.wikipedia.org/wiki/Cliente-servidor



[Voltar ao Índice](#indice)

---

## <a name="parte2">02 Entendendo Controle de versão</a>

Curso de controle de versão com Git - http://dev.rbtech.info/curso-controle-versao-git-aula-1/



[Voltar ao Índice](#indice)

---

## <a name="parte3">03 Conhecendo a Linguagem PHP</a>

-  Básico 

- http://php.net/manual/pt_BR/language.variables.basics.php
```php
<?php
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // exibe "Bob, Joe"

$4site = 'not yet';     // inválido; começa com um número
$_4site = 'not yet';    // válido; começa com um sublinhado
$täyte = 'mansikka';    // válido; 'ä' é um caracter ASCII (extendido) 228
?>
```

- https://secure.php.net/manual/pt_BR/language.types.php

- http://php.net/manual/pt_BR/reserved.variables.php

Superglobais — Superglobais são variáveis nativas que estão sempre disponíveis em todos escopos  
$GLOBALS — Referencia todas variáveis disponíveis no escopo global  
$_SERVER — Informação do servidor e ambiente de execução  
$_GET — HTTP GET variáveis  
$_POST — HTTP POST variables  
$_FILES — HTTP File Upload variáveis  
$_REQUEST — Variáveis de requisição HTTP  
$_SESSION — Variáveis de sessão  
$_ENV — Environment variables  
$_COOKIE — HTTP Cookies  
$php_errormsg — A mensagem de erro anterior  
$HTTP_RAW_POST_DATA — Informação não-tratada do POST  
$http_response_header — Cabeçalhos de resposta HTTP  
$argc — O número de argumentos passados para o script  
$argv — Array de argumentos passados para o script  

- http://php.net/manual/pt_BR/language.variables.scope.php

```php
<?php
$a = 1; /* escopo global */

function Teste()
{
    echo $a; /* referencia uma variável do escopo local (não definida) */
}

Teste();
?>
```

- http://php.net/manual/pt_BR/language.operators.php

- http://php.net/manual/pt_BR/ref.strings.php

printf — Mostra uma string formatada

str_split — Converte uma string para um array
strlen — Retorna o tamanho de uma string
strpos — Encontra a posição da primeira ocorrência de uma string
strrchr — Encontra a ultima ocorrência de um caractere em uma string
substr_count — Conta o número de ocorrências de uma substring
substr_replace — Substitui o texto dentro de uma parte de uma string
substr — Retorna uma parte de uma string
trim — Retira espaço no ínicio e final de uma string

http://php.net/manual/pt_BR/function.include.php


[Voltar ao Índice](#indice)

---

## <a name="parte4">04 Estruturas de Controle e Laços de repetição</a>

- http://php.net/manual/pt_BR/control-structures.if.php
- https://secure.php.net/manual/pt_BR/control-structures.elseif.php

```php
<?php

/* Incorrect Method: */
if($a > $b):
    echo $a." is greater than ".$b;
else if($a == $b): // Will not compile.
    echo "The above line causes a parse error.";
endif;


/* Correct Method: */
if($a > $b):
    echo $a." is greater than ".$b;
elseif($a == $b): // Note the combination of the words.
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

?>
```

- http://php.net/manual/pt_BR/control-structures.switch.php

```php
<?php
switch ($i):
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
endswitch;
?>
```

- https://secure.php.net/manual/pt_BR/control-structures.for.php

```php
<?php
/* exemplo 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* exemplo 2 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* exemplo 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* exemplo 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>
```

- http://php.net/manual/pt_BR/control-structures.foreach.php

foreach (array_expression as $key => $value)

```php
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
```

- http://php.net/manual/pt_BR/control-structures.while.php

```php
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
```

- http://php.net/manual/pt_BR/control-structures.do.while.php

```php
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```



[Voltar ao Índice](#indice)

---

## <a name="parte5">05 Arrays em PHP</a>

- https://secure.php.net/manual/pt_BR/language.types.array.php

```php
<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>
```

- http://php.net/manual/pt_BR/function.json-encode.php

```php
<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
?>

// {"a":1,"b":2,"c":3,"d":4,"e":5}
```

- http://php.net/manual/pt_BR/language.constants.php

```php
<?php

// Nomes de constantes válidos
define("FOO",     "alguma coisa");
define("FOO2",    "alguma outra coisa");
define("FOO_BAR", "alguma coisa mais");

// Nomes de constantes inválidas
define("2FOO",    "alguma coisa");

// Isto é válido, mas deve ser evitado:
// O PHP pode vir a fornercer uma constante mágica
// que danificará seu script
define("__FOO__", "alguma coisa");

?>
```

- https://secure.php.net/manual/pt_BR/language.constants.syntax.php

```php
<?php
// Funciona a partir do PHP 5.3.0
const CONSTANT = 'Hello World';

echo CONSTANT;

// Funciona a partir do PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // imprime "cat"

// A partir do PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // imprime "cat"
?>
```

- https://secure.php.net/manual/pt_BR/reserved.constants.php


[Voltar ao Índice](#indice)

---

## <a name="parte6">06 Sessão no PHP 7</a>

- http://php.net/manual/pt_BR/reserved.variables.session.php


```php
<?php

session_start();

$_SESSION['nome'] = 'Hcode'; // cria uma variável
```

```php
<?php

require_once("config.php"); //exemplo

session_start();

//session_unset($_SESSION['name']); //
session_destroy(); // limpa e remove

echo $_SESSION['nome'];


```

- https://secure.php.net/manual/pt_BR/session.idpassing.php

```php

//<?php
  
  require_once ("config.php");
  
  echo session_id();
  
  // qul7ol54iioorahbbdn800mrl0
  
```

```php
<?php

require_once ("config.php");

session_regenerate_id(); //gera id a cada refresh

echo session_id();
```

```php
<?php

session_start();

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<p>
    Olá visitante, você acessou esta página <?php echo $_SESSION['count']; ?> vezes.
</p>

<p>
    Para continuar, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">clique
        aqui</a>.
</p>
```

- http://php.net/manual/pt_BR/function.session-status.php

```php
<?php

require_once ("config.php");

echo session_save_path();

echo "<br>";

switch (session_status()){
    case PHP_SESSION_DISABLED:
        echo " as sessões estiverem desabilitadas.";
    break;

    case PHP_SESSION_NONE :
        echo "as sessões estiverem habilitadas, mas nenhuma existir.";
        break;

    case PHP_SESSION_ACTIVE:
        echo "as sessões estiverem habilitadas, e uma existir.";
        break;
}
```


[Voltar ao Índice](#indice)

---

## <a name="parte7">07 Trabalhando com Funções em PHP</a>

### 031 Criando Funções de Usuário

- https://secure.php.net/manual/pt_BR/functions.user-defined.php

```php
<?php

function ola(){
    return "Olá mundo<br>";
}

echo ola();

$frase = ola();

echo strlen($frase);
```

```php
<?php
 function salario(){
     return 2008.90;
 }

 echo "Recebi R$ " . (salario());
```

### 032 Parâmetros de funções

- https://secure.php.net/manual/pt_BR/functions.arguments.php

```php
<?php

function ola($nome = "Mundo", $periodo = "Bom dia"){
    return "Olá $nome, $periodo <br>";

}
echo ola();
echo ola("");
echo ola("José");
echo ola("Silva", "Boa noite");

```

```php
<?php

function ola(){
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", 10));
```

### 033 Parâmetros por Valor x por Referência

```php
<?php
$a = 10;
function trocaValor(&$a){ //Passagem de parâmetro por referência (&$a)
//function trocaValor($a){
    $a += 50;
    return $a;
}
echo trocaValor($a); // 60
echo "<br>";
echo $a; // 10 ($a)
echo $a; // 60 (&$a)
```

```php
<?php
$pessoa = array('nome' =>'José', 'idade' => 20);

foreach ($pessoa as &$value){
    if(gettype($value) === 'integer') $value += 10;

    echo $value . '<br>';
}
print_r($pessoa);
```

### 034 Funções no PHP 7 Novidades

```php
<?php
function soma(int ...$valores){
    return array_sum($valores);
}
echo soma(2,2);
echo '<br>';
echo soma(25,25);
echo '<br>';
echo soma(2.2,2.5);
echo '<br>';
```

```php
<?php
function soma(float ...$valores):string {
    return array_sum($valores);
}
echo var_dump(soma(2,2));
echo '<br>';
echo soma(25,25);
echo '<br>';
echo soma(2.2,2.5);
echo '<br>';
```

### 035 Funções Recursivas

```php
<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            array(
                'nome_cargo'=>'Direto Comercial',
                'subordinados', array(
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                )
            ),
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados' => array(
                    array('nome_cargo'=>'supervisode de Pagamentos'
                    )
                )
            ),
            array(
                'nome_cargo'=>'gerente de compras',
                'subordinados' => array(
                    array(
                        'nome_cargo'=> 'Supervisor de suprimentos'
                    )
                )
            )
        )
    )
);

function exibe($cargos){
    $html = '<ul>';
        foreach ($cargos as $cargo){
            $html .= "<li>";
                $html .= $cargo['nome_cargo'];
                if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){
                    $html .= exibe($cargo['subordinados']);
                }
            $html .= "</li>";
        }

    $html .= '</ul>';
    return $html;

}
echo exibe($hierarquia);
```

### 036 Funções Anônimas

```php
<?php

function teste($callabck){
    //processo lento...

    $callabck();
}

teste(function(){
    echo "TERMINOU!!";
});
```

```php
<?php

$fn = function ($a){
    var_dump($a);
};

$fn("OLá");

//string(4) "OLá"
```

[Voltar ao Índice](#indice)

---

## <a name="parte8">08 Trabalhando com Data e Hora no PHP</a>

### 037 Função date e a Função Time

- http://php.net/manual/pt_BR/function.date.php

```php
<?php
echo date("d/m/Y H:i:s");
echo "<br>";
echo time();
```

```php
<?php

$ts = strtotime('1984-08-12');
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
//$ts = strtotime("+1 week");
echo $ts;
echo "<br>";
echo date("1, d/m/Y", $ts);

```

### 038 Definindo a configuração regional com setlocale

- https://secure.php.net/manual/pt_BR/function.strftime.php
- https://pt.stackoverflow.com/questions/8317/como-fazer-a-fun%C3%A7%C3%A3o-date-formatar-uma-data-em-portugu%C3%AAs

```php
<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

echo strftime('%A, %d de %B de %Y', strtotime('today'));
```

### 039 Classe DateTime

- http://php.net/manual/pt_BR/class.datetime.php

```php
<?php
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

$periodo = new DateInterval("P15D"); // + 15 DIAs
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");
```


[Voltar ao Índice](#indice)

---

## <a name="parte9">09 Programação Orientada a Objetos - Introdução</a>

-  040 Conceitos de Programaçãoo Orientada a Objetos

- http://php.net/manual/pt_BR/language.oop5.php
- https://code.tutsplus.com/pt/tutorials/object-oriented-php-for-beginners--net-12762


-  041 Criando uma Classe

```php
<?php
class Pessoa {
    public $nome;
    function falar() {
        return "O meunome é ".$this->nome;
    }
}

$jose = new Pessoa();
$jose->nome = "Jose Malcher Jr.";
echo $jose->falar();
```

-  042 Atributos e Métodos

```php
<?php

class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getMotor(): float{
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function getAno():int{
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano"   => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("1999");

var_dump($gol->exibir());
```

-  043 Métodos Estáticos

```php
<?php

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $resultado = Documento::validarCPF(); // acessando o método statico
        if ($resultado == false) :
            throw new Exception("CPF informado é invalido", 1);
        endif;
        $this->nuemro = $numero;
    }
    
    public static function validarCPF($cpf):bool
    {
        if (empty($cpf)) {
            return false;
        }

        $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        } else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;

        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf {
                        $c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf {
                    $c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }// FIM validarCPF
}

// $cpf = new Documento();
// $cpf->setNumero("78991633234");
// var_dump($cpf->getNumero());
var_dump(Documento::validarCPF("123456798"));
```

-  044 Métodos Mágicos

```php
<?php

class Endereco{
    private $rua;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c)
    {
        $this->rua = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct()
    {
        //var_dump("DESTRUIR");
    }
    public function __toString()
    {
        return $this->rua.", " . $this->numero. ", ". $this->cidade;
    }

}

$meuendereco = new Endereco("Rua tal tal tal", 609, "Belém");
echo $meuendereco;


?>
```

-  045 Encapsulamento

```php
<?php

class Pessoa{
    public $nome = "José";
    protected $idade = 33;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome  . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br >";
    }
}

class Programador extends Pessoa{
    public function verDados(){
        echo "Classe: " . get_class($this) . "<br>";
        echo $this->nome  . "<br/>";
        echo $this->idade . "<br/>";
        //echo $this->senha . "<br >";
    }
}

$objeto = new Programador();
//echo $objeto->senha;
$objeto->verDados();
```

-  046 Herança

```php
<?php

class Documento{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    public function validar(): bool{
        $numeroCPF = $this->getNumero();
        //VALIDAÇÃO DO CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("12312312312");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
```

-  047 Interface
```php
<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até " . $velocidade . " KM/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();
$carro->trocarMarcha(1);
```

-  048 Classe Abstrata

```php
<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}
abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }
    public function frenar($velocidade)
    {
        echo "O veiculo frenou até " . $velocidade . " KM/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }
}
class DelRey extends Automovel{
    public function empurrar(){
    }
}
//$carro = new Automovel(); // não rola!
$carro = new DelRey();
$carro->acelerar(50);
$carro->empurrar();
```

-  049 Polimorfismo
```php
<?php
abstract class Animal{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}
class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}
class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}
class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "----------------- <br>";
$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";
echo "----------------- <br>";
$bird = new Passaro();
echo $bird->falar() . "<br>";
echo $bird->mover() . "<br>";
```

-  050 Incluindo classes com Autoload

```php
<?php

/*function __autoload($nomedaClasse){
    require_once ("$nomedaClasse.php");
}*/

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php")===true){
        require_once ($nomeClasse.".php");
    }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse){
    if(file_exists("NomePastaDaClasses".DIRECTORY_SEPARATOR.$nomeClasse.".php")===true){
        require_once ("NomePastaDaClasses".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    }
});

$carro = new DelRey();
echo $carro->acelerar(200);
```

-  051 Usando Namespace

- # 09-poo/class/Cliente/Cadastro.php
```php
<?php
namespace Cliente;
class Cadastro extends \Cadastro {
    public function registraVenda(){
        echo "foi registrada uma venda para o cliente " . $this->getNome();
    }
}
```
- # 09-poo/ex11-Index.php
```php
<?php

require_once ("config.php");

use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setNome("Jose");
$cad->setEmail("jose@jose.com");
$cad->setSenha("123456");

echo $cad->registraVenda();
```


[Voltar ao Índice](#indice)

---

## <a name="parte10">10 Banco de Dados - Preparando o Ambiente</a>

- https://dev.mysql.com/downloads/workbench/

[Voltar ao Índice](#indice)

---

## <a name="parte11">11 Banco de Dados - MySQLi</a>

-  054 Classe MySQLi e o PHP 7

```php
<?php

$conn = new mysqli("localhost", "root", "","cursophp7");
if($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES (?,?)");

$stmt->bind_param("ss", $login, $senha); //  String String (ss)

$login="jose2";
$senha="1234567";
$stmt->execute();

$login="jose3";
$senha="1234568";

$stmt->execute();

```

```php
<?php

$conn = new mysqli("localhost", "root", "","cursophp7");
if($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY login");

$data = array();
//while($row = $result->fetch_array()){
while($row = $result->fetch_assoc()){

    array_push($data,$row);
    //var_dump($row);

}

echo json_encode($data);


```

[Voltar ao Índice](#indice)

---

## <a name="parte12">12 Banco de Dados - PDO</a>

-  055 Conectando o PHP 7 com MySQL usando PDO
```php
 <?php
 
 $conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
 $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY login");
 $stmt->execute();
 
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 //var_dump($result);
 
 foreach ($result as $row) {
     foreach ($row as $key => $value){
         echo "<strong>".$key."</strong>". $value . "<br/>";
     }
     echo "=================================================<br/>";
 }
```

-  058 PDO Inserindo dados no banco
```php
<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(login, senha, cadastro) VALUES (:LOGIN, :SENHA, CURRENT_DATE )");
$login = "josemalcher";
$senha = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Inserido ok";
```

-  059 PDO - Alterando dados no banco

```php
<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :SENHA, cadastro = CURRENT_DATE  WHERE id_usuario = :ID");

$login = "JOSEMALCHER ALTERADO";
$senha = "987654321";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado ok!";

```

-  060 PDO Apagando dados no banco
```php
<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :ID");

$id = 1;
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETE ok!";

```

-  061 PDO Usando transações

```php
<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

$conn->beginTransaction();
$id = 2;
$stmt->execute(array($id));

//$conn->rollBack(); //cancela
$conn->commit();

echo "DELETE ok!";

```

[Voltar ao Índice](#indice)

---

## <a name="parte13">13 Banco de Dados - Data Access Object e PDO</a>

-  062 PDO - DAO
- 13-Data-Access-Object-PDO/config.php
```php
<?php
spl_autoload_register(function ($class_name){
   $filename = $class_name.".php";
   if(file_exists(($filename))){
       require_once ($filename);
   }
});
```
- 13-Data-Access-Object-PDO/Sql.php
```php
<?php

class Sql extends PDO
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
    }

    private function setParams($statment, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
```

- 13-Data-Access-Object-PDO/index.php
```php
<?php
require_once "config.php";

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
```

---

### 063 PDO - DAO - SELECT

-  13-Data-Access-Object-PDO/class/Usuario.php
```php
<?php

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario): void
    {
        $this->idusuario = $idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin): void
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha): void
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro): void
    {
        $this->dtcadastro = $dtcadastro;
    }

    /* ---  Métodos  ---- */
    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(":ID" => $id));

        //if(isset($result[0]) > 0){
        if(count($results)> 0){
            $row = $results[0];
            $this->setIdusuario($row['id_usuario']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['cadastro']));

        }
    }

    public function __toString()
    {
        return json_encode(array(
            "id_usuario"    =>$this->getIdusuario(),
            "login"         =>$this->getDeslogin(),
            "senha"         =>$this->getDessenha(),
            "cadastro"      =>$this->getDtcadastro()->format('d/m/Y'),
        ));
    }
}
```

-  13-Data-Access-Object-PDO/index.php
```php
<?php
require_once "config.php";
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuario);
*/

$jose = new Usuario();
$jose->loadById(2);

echo $jose; //carrega tostring
```

---

### 064 PDO - DAO - LIST


- 13-Data-Access-Object-PDO/class/Usuario.php
```php
<?php

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($idusuario): void
    {
        $this->idusuario = $idusuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin): void
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha): void
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro): void
    {
        $this->dtcadastro = $dtcadastro;
    }

    /* ---  Métodos  ---- */
    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(":ID" => $id));

        //if(isset($result[0]) > 0){
        if (count($results) > 0) {
            $row = $results[0];
            $this->setIdusuario($row['id_usuario']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['cadastro']));

        }
    }

    public static function getList()
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY login");
    }

    public static function search($login)
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios WHERE login LIKE :SEARCH ORDER BY login", array(':SEARCH' => "%" . $login . "%"));
    }

    public function login($login, $senha)
    {
        $sql = new SQL();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));
        if(count($result) > 0){
            $row = $result[0];
            $this->setIdusuario($row['id_usuario']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->setDtcadastro(new DateTime($row['cadastro']));
        }else{
            throw new Exception("Login e/ou senha inválidos");
        }
    }


    public function __toString()
    {
        return json_encode(array(
            "id_usuario" => $this->getIdusuario(),
            "login" => $this->getDeslogin(),
            "senha" => $this->getDessenha(),
            "cadastro" => $this->getDtcadastro()->format('d/m/Y'),
        ));
    }


}
```

- 13-Data-Access-Object-PDO/index.php
```php
<?php
require_once "config.php";
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuario);
*/

/* Carrega um usuário
$jose = new Usuario();
$jose->loadById(2);
echo $jose;
*/

/*
//Carrega [[]]uma lista de usuparios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuários buscando pelo login
$busca = Usuario::search("mari");
echo json_encode($busca);
*/

//Carrega um usuario com login e senha
$usuario = new Usuario();
$usuario->login("jose","123457");
echo $usuario;
```

### 065 PDO - DAO - INSERT

- cursophp7.sp_usuario_insert
```sql
CREATE PROCEDURE sp_usuario_insert(IN plogin VARCHAR(64), IN psenha VARCHAR(255))
  BEGIN

    INSERT tb_usuarios(login, senha) VALUES (plogin, psenha);

    SELECT * FROM tb_usuarios WHERE id_usuario = LAST_INSERT_ID();

  END;
```

- 13-Data-Access-Object-PDO/class/Usuario.php
```php

    public function setData($data)
    {
        $this->setIdusuario($data['id_usuario']);
        $this->setDeslogin($data['login']);
        $this->setDessenha($data['senha']);
        $this->setDtcadastro(new DateTime($data['cadastro']));
    }

    public function insert()
    {
        $sql = new Sql();
        $result = $sql->select("CALL sp_usuario_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'    => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha()
        ));

        if(count($result) > 0){
            $this->setData($result[0]);
        }
    }

    public function __construct($login = '',$password='')
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
```

- 13-Data-Access-Object-PDO/index.php

```php
// insert usuários
$usuario = new Usuario("josemalcherLogin","987654");
//$usuario->setDeslogin("JoseLotin");
//$usuario->setDessenha("123456789");
$usuario->insert();
echo $usuario;
```

### 066 PDO - DAO - UPDATE

- 13-Data-Access-Object-PDO/class/Usuario.php
```php

    public function update($login, $password){
        $this->setDeslogin($login);
        $this->setDessenha($password);
        $sql = new Sql();
        $sql->query("UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE id_usuario = :ID", array(
           ':ID' => $this->getIdusuario(),
           ':PASSWORD' => $this->getDessenha(),
           ':LOGIN'=> $this->getDeslogin()
        ));
    }

```

- 13-Data-Access-Object-PDO/index.php
```php
// Update
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update('luciana barbosa','789');
echo $usuario;
```

### 067 PDO - DAO - DELETE

- 13-Data-Access-Object-PDO/class/Usuario.php
```php
public function delete()
    {
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuarios WHERE id_usuario = :ID", array(
            ':ID'=> $this->getIdusuario()
        ));
        $this->setIdusuario(0);
        $this->setDeslogin('');
        $this->setDessenha('');
        $this->setDtcadastro(new DateTime());
    }
```

- 13-Data-Access-Object-PDO/index.php
```php
// DELETE
$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();
echo $usuario;
```


[Voltar ao Índice](#indice)

---

## <a name="parte14">14 Manipulando Arquivos</a>

#### 068 Lendo e manipulando pastasdiretórios com PHP 7

- 14-ManipulandoArquivos/ex068-lendo-mani-arquivos.php

```php
<?php

$name = "img2";
if(!is_dir($name)){
    mkdir($name);
    echo "Diretório criado com sucesso";

}else{
    //rmdir($name); // remover diretorio
    echo "Ja existe o diretorio $name";
}
```
- 14-ManipulandoArquivos/ex068-scandir.php

```php
<?php
$imgs = scandir("img");
//var_dump($img);

$data = array();

foreach ($imgs as $img){
    if(!in_array($img,array(".",".."))){
        $filename = "img".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);

        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
        $info['url'] = "http://localhost/workspace-Udemy-Curso-Completo-de-php-7/14-ManipulandoArquivos/".str_replace("\\","/",$filename);
        //var_dump($info);
        array_push($data, $info);
    }
}
echo json_encode($data);

```

#### 069 Criando arquivos com fopen

- 14-ManipulandoArquivos/ex069-fopen.php

```php
<?php
$file = fopen("log.txt", "a+"); //w+
fwrite($file, date("Y-m-d H:i:s")."\r\n");
fclose($file);

echo "Arquivo Criado com sucesso";
```

- 14-ManipulandoArquivos/ex069-csv.php

```php
<?php
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY login");

//print_r($usuario);

$headers = array();
foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuario.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");

//dados
foreach ($usuarios as $row) {
    $data = array();
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);

//print_r($headers);
//echo implode(",", $headers);

```

#### 070 Excluindo arquivos

- 14-ManipulandoArquivos/ex70-excluindo-arquivos.php

```php
<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//remove
unlink("teste.txt");
echo "arquivo removido com sucesso";
```

- 14-ManipulandoArquivos/ex70-excluindo-pasta.php

```php
<?php
if (!is_dir("ex70")) {
    mkdir("ex70");
}

foreach (scandir("ex70") as $item) {
    if (!in_array($item, array(".", ".."))){
        unlink("ex70/" . $item);
    }
}
echo "Arquivos Apagados";
```

#### 071 Lendo conteúdo de arquivos

- 14-ManipulandoArquivos/ex071-lendo-arquivos.php

```php
<?php
$filename = "usuario.csv";

if (file_exists($filename)) {
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));
    $data = array();

    while ($row = fgets($file)) {
        $rowData = explode(",",$row);
        $linha = array();
        for ($i = 0; $i < count($headers); $i++) {
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $linha);
    }
    fclose($file);
    echo json_encode($data);
}

```

- 14-ManipulandoArquivos/ex071-lendo-arquivos-tipo.php

```php
<?php

$filename = "img/gato-alien.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:". $mimetype . ";base64,".$base64;
?>

<a href="<?=$base64encode?>">Link para imagem</a>
<img src="<?=$base64encode?>" alt="">

```

#### 072 Upload de arquivos com PHP 7

- 14-ManipulandoArquivos/ex072-Upload.php

```php
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">ENVIAR</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"];
    if ($file["error"]) {
        throw new Exception("ERROR " . $file["error"]);
    }
    $dirUpload = "upload";

    if (!is_dir($dirUpload)) {
        mkdir($dirUpload);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "Upload realizado com sucesso";
    } else {
        throw new Exception("Não foi possível realizar o ulpload");
    }
}

?>
```

#### 073 Download de arquivos com file_get_contents

- 14-ManipulandoArquivos/ex073-Download-de-arquivos.php

```php
<?php

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);
$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);
?>

<img src="<?=$basename?>" alt="">

```

#### 074 Movendo um arquivo

- 14-ManipulandoArquivos/ex074-Movendo-um-arquivo.php

```php
<?php

$dir1 = "ex74-1";
$dir2 = "ex74-2";
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2))mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

rename($dir1 . DIRECTORY_SEPARATOR . $filename , $dir2 . DIRECTORY_SEPARATOR . $filename);

echo "Arquivo Movido!";
```

#### 075 Usando a cURL

- 14-ManipulandoArquivos/ex075-Usando-cURL.php
```php
<?php

$cep = "66020000";
$link = "https://viacep.com.br/ws/$cep/json";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);
print_r($data);
```

#### 076 Usando Cookies

- 14-ManipulandoArquivos/ex076-Usando-Cookies.php
```php
<?php

$data = array("empresa" => "JoseMalcher.net" );

setcookie("Nome_DO_COOKIE", json_encode($data), time() + 3600);

echo "Criado!";
```

- 14-ManipulandoArquivos/ex076-Usando-Cookies-Existe.php
```php
<?php

if(isset($_COOKIE["Nome_DO_COOKIE"])){
    $obj = json_decode($_COOKIE["Nome_DO_COOKIE"]);
    echo $obj->empresa;
}
```


[Voltar ao Índice](#indice)

---

## <a name="parte15">15 Tratando Erros com Try Catch</a>

#### 077 Try e Catch

- 15-Tratando-Erros-com-Try-Catch/ex077-Try-e-Catch.php

```php
<?php
try {
    throw new Exception("Houve um erro!! ", 400);
} catch (Exception $e) {
    echo json_encode(array(
        "message" => $e->getMessage(),
        "line"    => $e->getLine(),
        "file"    => $e->getCode(),
        "code"    => $e->getCode()
    ));

}
```

- 15-Tratando-Erros-com-Try-Catch/ex077-Try-e-Catch_emExecucao.php

```php
<?php

function trataNome($name)
{
    if (!$name) {
        throw new Exception("Nenhum nome foi informado! ", 1);
    }
    echo ucwords($name)."<br>";
}

try {
    trataNome("josé malcher junior");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "Executou o Finaly";
}
```

#### 078 Tratando erros

- 15-Tratando-Erros-com-Try-Catch/ex078-Tratando-erros.php
```php
<?php

function error_handler($code, $message, $file, $line)
{
    echo json_encode(array(
        'code' => $code,
        'message' => $message,
        'line' => $line,
        'file'=> $file
    ));
}
set_error_handler("error_handler");
echo $total = 100/0;
```

- 15-Tratando-Erros-com-Try-Catch/ex078-Tratando-erros-notice.php

```php
<?php
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];
echo $nome;
```

[Voltar ao Índice](#indice)

---

## <a name="parte16">16 Trabalhando com Imagens e o PHP usando a Biblioteca GD</a>

#### 079 Processamento de Imagem GD

- 16-Trabalhando-com-Imagens-e-o-PHP-usando-a-Biblioteca-GD/ex079-Processamento-de-Imagem-GD.php

```php
<?php
header("Content-Type: image/png");
$image = imagecreate(256, 256);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

```

#### 080 Usando imagem existente GD

#### 081 Fontes TTF GD

#### 082 Gerando Thumbnail GD


[Voltar ao Índice](#indice)

---

## <a name="parte17">17 Gerando Boletos com o BoletoPHP</a>


[Voltar ao Índice](#indice)

---

## <a name="parte18">18 Gerenciando dependências com Composer</a>


[Voltar ao Índice](#indice)

---

## <a name="parte19">19 Trabalhando com E-mails usando a classe PHPMailer</a>


[Voltar ao Índice](#indice)

---

## <a name="parte20">20 Criando Templates com RainTPL</a>


[Voltar ao Índice](#indice)

---

## <a name="parte21">21 Criando Diretórios Virtuais com o Apache</a>


[Voltar ao Índice](#indice)

---

## <a name="parte22">22 Slim Framework</a>


[Voltar ao Índice](#indice)

---

## <a name="parte23">23 Segurança no PHP 7</a>


[Voltar ao Índice](#indice)

---

## <a name="parte24">24 Projeto E-Commerce Admin</a>


[Voltar ao Índice](#indice)

---