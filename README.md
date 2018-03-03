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

#### Básico 

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

#### 040 Conceitos de Programaçãoo Orientada a Objetos

- http://php.net/manual/pt_BR/language.oop5.php
- https://code.tutsplus.com/pt/tutorials/object-oriented-php-for-beginners--net-12762


#### 041 Criando uma Classe

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

#### 042 Atributos e Métodos

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

#### 043 Métodos Estáticos

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

#### 044 Métodos Mágicos

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

[Voltar ao Índice](#indice)

---

## <a name="parte10">10 Banco de Dados - Preparando o Ambiente</a>


[Voltar ao Índice](#indice)

---

## <a name="parte11">11 Banco de Dados - MySQLi</a>


[Voltar ao Índice](#indice)

---

## <a name="parte12">12 Banco de Dados - PDO</a>


[Voltar ao Índice](#indice)

---

## <a name="parte13">13 Banco de Dados - Data Access Object e PDO</a>


[Voltar ao Índice](#indice)

---

## <a name="parte14">14 Manipulando Arquivos</a>


[Voltar ao Índice](#indice)

---

## <a name="parte15">15 Tratando Erros com Try Catch</a>


[Voltar ao Índice](#indice)

---

## <a name="parte16">16 Trabalhando com Imagens e o PHP usando a Biblioteca GD</a>


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