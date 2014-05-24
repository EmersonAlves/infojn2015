inicio
    variavel inteiro n [ 11 ] , x , q
    x <- 1
    enquanto x <= 10 faz
        escrever "digite o numero\n "
        ler n [ x ]
        se n [ x ] >= 10 e n [ x ] <= 50 entao
            
            q <- q + 1
        fimse
        x <- x + 1
    fimenquanto
    escrever "vc digitou " , q , " numeros que se encontra no intevalo \n"
    se q % 2 = 0 entao
        escrever "quantidade de numeros é par \n"
    senao
        escrever "quantidade de numeros é impar \n"
    fimse
    se q % 2 = 0 entao
        q <- q * 2
        escrever "multiplicaçao " , q
    senao
        q <- q * 3
        escrever "multiplicaçao " , q
    fimse
fim

