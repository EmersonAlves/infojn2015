inicio
    variavel texto clientes [ 9 ]
    inteiro x
    inteiro qdvds [ 9 ]
    x <- 1
    enquanto x <= 8 faz
        escrever " digite o nome do cliente : " , x , "\n"
        ler clientes [ x ]
        escrever " digite a quantidades de dvds locados pelo cliente :" , x , "\n"
        ler qdvds [ x ]
        x <- x + 1
    fimenquanto
    x <- 1
    enquanto x <= 8 faz
        se qdvds [ x ] < 10 entao
            escrever "o cliente: " , x , " tem direito a nenhuma loca��o gratiz \n"
        senao
            se qdvds [ x ] >= 10 e qdvds [ x ] < 20 entao
                escrever "o cliente: " , x , "tem direito a 1 loca��o gratiz \n"
            senao
                se qdvds [ x ] >= 20 e qdvds [ x ] < 30 entao
                    escrever "o cliente: " , x , "tem direito a 2 loca��es gratiz \n"
                senao
                    se qdvds [ x ] >= 30 e qdvds [ x ] < 40 entao
                        escrever "o cliente: " , x , "tem direito a 3 loca��es gratiz \n"
                    senao
                        se qdvds [ x ] >= 40 e qdvds [ x ] < 50 entao
                            escrever "o cliente: " , x , "tem direito a 4 loca��es gratiz \n"
                        senao
                            se qdvds [ x ] >= 50 e qdvds [ x ] < 60 entao
                                escrever "o cliente: " , x , "tem direito a 5 loca��es gratiz \n"
                            senao
                                escrever "o cliente: " , x , "tem a quantidade de loca��es gratiz indefinida \n"
                            fimse
                        fimse
                    fimse
                fimse
            fimse
        fimse
        
        x <- x + 1
    fimenquanto
fim

