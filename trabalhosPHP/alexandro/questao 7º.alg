inicio
    variavel real sal , aumento , mensagem
    escrever "DIGITE O SALARIO DO FUCIONARIO \n"
    ler sal
    se sal <= 500.00 entao
        aumento <- (sal* 0.3)
    senao
        aumento <- sal* 0.0
    fimse
    escrever "SALARIO DO FUNCIONARIO" , ( sal + aumento )
fim

