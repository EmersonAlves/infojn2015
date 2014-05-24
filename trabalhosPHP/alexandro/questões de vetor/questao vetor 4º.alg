inicio
    variavel inteiro n [ 16 ] , x
    x <- 1
    enquanto x <= 15 faz
        escrever "\n digite o numero : " , x , " \n "
        ler n [ x ]
        x <- x + 1
    fimenquanto
    x <- 1
    enquanto x <= 15 faz
        se n [ x ] = 30 entao
            escrever " \n o numero 30 se encontra na posiçao : " , x , "."
        fimse
        x <- x + 1
    fimenquanto
fim

