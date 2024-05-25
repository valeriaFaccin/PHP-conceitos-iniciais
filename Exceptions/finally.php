<?php

//proposito do finally é sempre ser uma linha que irá executar ao final do try-catch
try{
    echo "Executa primeiro" . PHP_EOL;
    throw new Exception('Nova exceção');
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo 'Finalizando' . PHP_EOL;
}

//em tratamento de arquivos, como o finally é um trecho de código sempre executado independente do surgimento de alguma exceção ou não, poderia ser colocado o fclose() do arquivo no seu bloco de comando, contudo, deixar fora do bloco try-catch surte o mesmo efeito
$arquivo = fopen('arq.txt', 'w');
try{
    fwrite($arquivo, 'Escrevendo no arquivo para testar a execução do try-catch-finally');
} catch (Throwable $e){
    echo 'Erro ao tentar escrever no arquivo' . PHP_EOL;
} finally {
    fclose($arquivo);
}

//nesse caso, o uso do finally se torna relevante pois caso exista uma função que exige retorno e é necessário executar algo após esse retorno, o finally é capaz de cobrir essa funcionalidade
function qualquer() : int
{
    try{
        echo 'Executando try'. PHP_EOL;
        return 0;
    } catch (Throwable $e){
        echo 'Executandoo catch' . PHP_EOL;
        return 1;
    } finally {
        echo 'Final'. PHP_EOL;
    }
}
echo qualquer();
