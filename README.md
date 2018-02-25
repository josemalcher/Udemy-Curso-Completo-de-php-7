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


[Voltar ao Índice](#indice)

---

## <a name="parte6">06 Sessão no PHP 7</a>


[Voltar ao Índice](#indice)

---

## <a name="parte7">07 Trabalhando com Funções em PHP</a>


[Voltar ao Índice](#indice)

---

## <a name="parte8">08 Trabalhando com Data e Hora no PHP</a>


[Voltar ao Índice](#indice)

---

## <a name="parte9">09 Programação Orientada a Objetos - Introdução</a>


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