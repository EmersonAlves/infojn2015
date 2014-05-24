inicio
    variavel inteiro vproduto [ 11 ] , vestoque [ 11 ] , x , pos , qtd , produto
    texto cliente
    x <- 1
    enquanto x <= 10 faz
        escrever "entre com o codigo do produto " , x , " --- "
        ler vproduto [ x ]
        escrever "entre com o estoque do produto " , x , " --- "
        ler vestoque [ x ]
        x <- x + 1
    fimenquanto
    produto <- 999
    enquanto produto =/= 0 faz
        escrever "entre com o nome do cliente "
        ler cliente
        escrever "entre com o produto desejado "
        ler produto
        escrever "entre com a quantidade desejada "
        ler qtd
        x <- 1
        enquanto x <= 10 faz
            se vproduto [ x ] = produto entao
                pos <- x
                x <- 100
            fimse
            x <- x + 1
        fimenquanto
        
        se x < 100 entao
            escrever "codigo inexistente" , "\n"
        senao
            se vestoque [ pos ] < qtd entao
                escrever "nao temos estoque suficiente dessa mercadoria !" , "\n"
                escrever "o estoque atual é de " , vestoque [ pos ] , "\n"
            senao
                vestoque [ pos ] <- vestoque [ pos ] - qtd
                escrever "pedido atendido. obrigado. volte sempre." , "\n"
                escrever "o estoque atual é de " , vestoque [ pos ] , "\n"
            fimse
        fimse
        x <- x + 1
    fimenquanto
fim

