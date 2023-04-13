# TerminalDraw
<h5>Aplicação PHP para desenhar linhas no terminal fácil de ser acoplada e modificada no seu projeto!</h5>

<h2>Como utilizar:</h2>
<p>Para utilizar, Basta seguir os seguintes passos:</p>
<h3>1 - PrintShape.php</h3>
<p>Primeiramente, basta baixar o arquivo PrintShape.php ou clonar o repositório do github a partir do comando: <br/>git clone https://github.com/LucasFrts/TerminalDraw.git </p>
<h3>2 - Importar Arquivo</h3>
<p>Feito o passo acima, basta criar um arquivo .php e importar o arquivo da seguinte forma</p>
<pre>require "PrintShape.php";</pre>
<h4>Agora basta criar um objeto a partir de PrintShape</h4>
<p>ex:</p>
<pre>$desenho = new PrintShape();</pre>
<br/>
<p>Feito isso, podemos executar o arquivo</p>
<p>exemplo no terminal ubuntu:</p>
<pre>php test.php</pre>
<br/>
<p>Se tudo deu certo, aparecerá a seguinte mensagem no terminal:</p>
"<em>Objeto construído<br/>
Tente acessar os métodos e realizar um desenho!</em>"
<br/><br/>
<strong>OBS:No exemplo acima está sendo considerado que o arquivo PrintShape.php e o seu arquivo estão no mesmo directório</strong>
<h3>3 - Acessando os Métodos</h3>
<p>Realizados os passos acima, você pode acessar os métodos do objeto</p>
<h4>drawnCross()</h3>
<p>O método retorna o desenho de uma cruz com asteriscos</p>
<p>ex:</p>
<pre>
..*..<br/>
*****<br/>
..*..<br/>
..*..<br/>
..*..
</pre>
<h4>drawAxis()</h3>
<p>O método retorna o desenho de um X(xis) com asteriscos</p>
<p>ex:</p>
<pre>
*...*<br/>
.*.*.<br/>
..*..<br/>
.*.*.<br/>
*...*
</pre>
<h4>drawHorizontalLine(quantidade, padrão)</h3>
<p>O método DrawHorizontalLine desenha uma linha e pode ser utilizado para realizar outros desenhos a partir dos parametros passados, o valor default de padrão é -1</p>
<h4>Parametro quantidade</h4>
<p>O parametro aceita os seguintes valores: 1, 3 e 5</p>
<h5>drawHorizontalLine(1):</h5>
<p>Ao chamar o método com o valor do parametro em 1, é desenhada uma linha com apenas um asterisco no meio</p>
<p>ex:</p>
<pre>
..*..
</pre>
<h5>drawHorizontalLine(3):</h5>
<p>Ao chamar o método com o valor do parametro em 3, é desenhada uma linha com tres asteriscos ao meio e nenhum aos cantos</p>
<p>ex:</p>
<pre>
.***.
</pre>
<h5>drawHorizontalLine(5):</h5>
<p>Ao chamar o método com o valor do parametro em 5, é desenhada uma linha completa com 5 asteriscos</p>
<p>ex:</p>
<pre>
*****
</pre>
<h4>Parametro Padrão</h4>
<p>O parametro aceita os seguintes valores:-1, 0 ,1 e 2 sendo -1 o valor quando não especificado</p>
<h5>Funcionamento:</h5>
<p>Quando o valor for diferente de -1, remove asteriscos da linha substituindo por um ponto (.) com base da seguinte forma:</p>
<h5>drawHorizontalLine(5, 2):</h5>
<p>Ao chamar o método com o do padrão sendo 2, remover todos os asteriscos de <b>índice</b> par substituindo por ponto, considerando a posição de cada item da linha (índices de 0 á 4)</p>
<pre>
.*.*.
</pre>
<h5>drawHorizontalLine(5, 1):</h5>
<p>Ao chamar o método com o do padrão sendo 1, remover todos os asteriscos de <b>índice</b> impar substituindo por ponto, considerando a posição de cada item da linha (índices de 0 á 4)</p>
<pre>
*.*.*
</pre>
<h5>drawHorizontalLine(5, 0):</h5>
<p>Ao chamar o método com o do padrão sendo 0, remover todos os asteriscos de <b>índice</b> impar, com a adição de também remover o campo do meio (indíce 2) substituindo por ponto, considerando a posição de cada item da linha (índices de 0 á 4)</p>
<pre>
*...*
</pre>
<br/>
<h4>Disposições finais</h4>
<p>Dessa forma, torna-se possivel realizar diversos desenhos no terminal a partir do objeto instanciado, dependendo apenas da criatívidade do autor!</p>
