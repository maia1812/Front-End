<!-- sinaliza que o arquivo será programado em HTML -->
<!DOCTYPE html>
<!-- diz a língua que será usada no HTML -->
<html lang="pt-br">
    <!-- cabeçalho ( no cabeçalho informamos qual tipo de arquivo a página pode erceber, identificação do site, -->
    <!-- no cabeçalho também é feito a autenticação e título da página-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family:'Arial'
        }
    </style>
</head>
<!-- corpo da página (no body é onde vão as informações que aparecem para o usuário) -->
<body>
    <h1>Calculadora Básica</h1>
    <!-- cria um formulário (e isto é útil para a organização do programador) -->
        <form>
            <!-- título da página tamanho (1, 2, 3, 4, 5 ou 6) -->
        <label for="numero1">Informe o 1º número</label>
        <!-- é o texto que botamos em tela e está reçacionado a um INPUT -->
        <input type="number" id="numero1" > 
        <!-- input é o local que botamos em tela direcionado para o usuário digitar -->

        <br> <br>

        <form >
        <label for="numero2">Informe o 2º número</label>
        <input type="number" id="numero2">

        <br> <br>

        <!-- Cria um botão em tela -->
        <button type="button" onclick="calcular('somar')">somar</button>
        <button type="button" onclick="calcular('subtrair')">substrair</button>
        <button type="button" onclick="calcular('multiplicacao')">multiplicar</button>
        <button type="button" onclick="calcular('dividir')">dividir</button>

        <p><b>Resultado:</b></p>
        <div id="resultado"></div>

    </form>

    <!-- Sinalizar que vou usar o javascript -->

    <script>
        function calcular(operacao) {
            // pegar os valores dos inputs
            // parseFloat transforma um valor em um número com casa decimal
            var numero1= parseFloat(document.getElementById('numero1').value);
            var numero2= parseFloat(document.getElementById('numero2').value);

            // escolha caso
            switch(operacao) {
                case 'somar':
                  resultado = numero1 + numero2;
                break

                case 'subtrair':
                  resultado = numero1 - numero2;
                break

                case 'multiplicacao':
                  resultado = numero1 * numero2;
                break

                case 'dividir':
                    if(numero2 != 0) {
                        resultado = numero1 * numero2;
                    } else {
                        resultado = 'Impossível de dividir por zero'
                    }
                break
            }
            document.getElementById('resultado').innerHTML = resultado;
        }
    </script>

</body>
</html>
