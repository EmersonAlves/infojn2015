inicio
    variavel inteiro n [ 11 ] , x , q
    x <- 1
    enquanto x <= 10 faz
        escrever " digite o numero "
        ler n [ x ]
        se n [ x ] % 2 = 0 entao
            escrever " numero par \n "
            q <- q + 1
            senao
             escrever "numero impar \n"
        fimse
        x <- x + 1
fimenquanto
escrever " voce entrou com " , q , " numeros pares , "
fim

