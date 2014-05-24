inicio
    variavel inteiro n [ 8 ] , x
    x <- 1
    enquanto x <= 7 faz
        escrever "\nDIGITE O NUMERO :\n "
        ler n [ x ]
        se n [ x ] % 2 = 0 entao
            escrever " MULTIPLO DE DOIS "
        fimse
        se n [ x ] % 3 = 0 entao
            escrever "MULTIPLO DE TREZ"
        senao
            se n [ x ] % 2 = 0 e n [ x ] % 3 = 0 entao
                escrever "MULTIPLO DE DOIS E DE TREZ"
            senao
                
            fimse
        fimse
        x <- x + 1
    fimenquanto
    
fim

