<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>

<body>
    <h1>Calculo de juros composto</h1>
    <form action='/resposta_exercicio1' method="post">
        @csrf
        <input type='number' name='valor_inicial' placeholder="Valor Inicial"/>
        <input type='number' name='taxa_juros' placeholder="Taxa de Juros anual"/>
        <input type='number' name='anos' placeholder="Anos"/>
        <button type='submit'>Calcular</button>


    </form>
</body>

</html>