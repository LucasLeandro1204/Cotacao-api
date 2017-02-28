@extends('base')

@section('title', 'Principal')

@section('content')

  <section id="intro" class="py-5">
    <div class="container">
      <h1>Cotação API</h1>
      <p>Cotação de todas as moedas, usando os dados cedidos pelo Banco Central</p>
      <a href="#documentation" class="btn btn-border">Documentação</a>
    </div>
  </section>

  <section id="documentation" class="py-5">
    <div class="container">
      <h2>Como usar</h2>
      <hr>
      <h4>Os dados obtidos são:</h4>
      <ul>
        <li>Tipo</li>
        <li>Sigla</li>
        <li>Compra</li>
        <li>Venda</li>
      </ul>
      <hr>
      <h4>Listar todas as moedas</h4>
      <p>Faça um requisição <span>GET</span></p>
      <pre>http://projetolkz.com.br/cotacao</pre>
      <hr>
      <h4>Listar uma moeda ou mais</h4>
      <p>Faça uma requisição <span>GET</span>, especificando as moedas como parâmetro separadas por <span>;</span></p>
      <pre>http://projetolkz.com.br/cotacao/USD;EUR</pre>
      <p>Retorno</p>
<pre>
[
   {
      "type":"A",
      "initials":"USD",
      "buy":3.1235,
      "sell":3.1241
   },
   {
      "type":"B",
      "initials":"EUR",
      "buy":3.3621,
      "sell":3.3643
   }
]
</pre>
    </div>
  </section>

@stop

