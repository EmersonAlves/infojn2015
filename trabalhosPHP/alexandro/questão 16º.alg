INICIO
VARIAVEL REAL PREÇOATUAL,DESCONTO
ESCREVER "DIGITE O PREÇOATUAL"
LER PREÇOATUAL
SE PREÇOATUAL<=30.00 ENTAO
DESCONTO<-PREÇOATUAL*0.00
SENAO
 SE PREÇOATUAL>30.00 E PREÇOATUAL<=100.00 ENTAO
 DESCONTO<-PREÇOATUAL*0.10
 SENAO
  escrever "\n sem desconto"
  FIMSE
 FIMSE

ESCREVER "\n NOVO PREÇO :",(PREÇOATUAL-DESCONTO)
FIM
