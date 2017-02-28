# Cotação API

Desenvolvida com o Lumen, usando os dados cedidos pelo Banco Central, atualizados todo dia útil, exceto feriados.

## Lumen PHP Framework
[Documentação](https://lumen.laravel.com/docs/5.4)

## Como usar

### Listar todas as moedas
Faça um requisição **GET** para

    http://projetolkz.com.br/cotacao

**URL sujeita a mudanças**

### Listar uma ou mais moedas
Faça uma requisição **GET**, especificando as moedas como parâmetro, separadas por **;**.

    http://projetolkz.com.br/cotacao/USD;EUR

**URL sujeita a mudanças**

Retorno:

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

###Os dados obtidos são:
 - **Tipo** (string)
 - **Sigla** (string)
 - **Compra** (float)
 - **Venda** (float)

## License

[MIT license](http://opensource.org/licenses/MIT)
