inicio
    inteiro numeros [ 10 ]
    inteiro x , valor
    x <- 0
    enquanto x <= 9 faz
        escrever " entre com o numero " , x , "\n"
        ler numeros [ x ]
        x <- x + 1
    fimenquanto
    escrever " entre com o numero a ser encontrado "
    ler valor
    x <- 1
    enquanto x <= 9 faz
        se numeros [ x - 1 ] = valor entao
            escrever " o valor a se encontra na posicao " , x , "."
        fimse
        x <- x + 1
    fimenquanto
fim

