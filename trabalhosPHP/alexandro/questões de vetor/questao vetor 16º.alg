inicio
    variavel texto np [ 6 ]
    inteiro preco [ 6 ] , x , q , sm , mp
    x <- 1
    enquanto x <= 5 faz
        escrever "digite o nome do " , x , " produto: \n "
        ler np [ x ]
        escrever "digite o preço do " , x , " produto: \n "
        ler preco [ x ]
        sm <- sm + preco [ x ]
        x <- x + 1
    fimenquanto
    x <- 1
    enquanto x <= 5 faz
        se preco [ x ] < 50.00 entao
            q <- q + 1
        fimse
        x <- x + 1
    fimenquanto
    escrever "voce entrou com " , q , " produto(s) com preço(s) inferior a R$50.00 \n"
    x <- 1
    enquanto x <= 5 faz
        se preco [ x ] >= 50.00 e preco [ x ] <= 100.00 entao
            q <- q + 1
        fimse
        x <- x + 1
    fimenquanto
    mp <- ( sm ) / 5
    escrever "voce entrou com " , q , " produtos que tem o preço entre R$50.00 e R$100.00 \n "
    escrever "media dos preços é: " , mp
fim

