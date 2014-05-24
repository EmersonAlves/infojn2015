
inicio
	variavel inteiro cpf [ 11 ], x , y , aux
x <- 1
enquanto x <= 10 faz
escrever "digite o cpf " , x , "\n"
ler cpf [ x ]
x <- x + 1
fimenquanto
x <- 1
enquanto x <= 9 faz
y <- x + 1
enquanto y <= 10 faz
se cpf [y] < cpf [x] entao
aux <- cpf [x]
cpf [x] <- cpf [y]
cpf [y] <- aux
fimse
y <- y + 1
fimenquanto
x <- x + 1
fimenquanto
escrever "a ordem cresente é: "
x <- 1
enquanto x <= 10 faz
escrever cpf [x]
x <- x + 1
fimenquanto
fim
