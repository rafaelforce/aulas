#!/bin/bash
#
# Isso é um exemplo de comentário em shell script
#
# Nesse arquivo aprenderemos os comandos mais comuns da programação shell (bash)

# O comando for, primeiro da nossa lista de comandos, é um comando de loop
# Loop é um tipo de estrutura condicional de controle com repetição
# em outras palavras, um bloco de comando é executado
# 
# Exemplo:

#!/bin/bash
echo 'Testando o loop for'

for i in {0..10};
do
	echo "$i"
done 

echo "O proximo comando é while, tecle enter para continuar"
read

# O while também é um tipo de loop e de forma traduzida significa
# enquanto a condição for satisfeita repita o bloco de código

echo "Informe o que você quiser, 0 para sair"
read dado;

while [ $dado != 0 ];
do
	echo "Você digitou $dado"
	read dado;
done

echo "O proximo comando é test, tecle enter para continuar"
read

# O comando test serve para verificar se o argumento passado corresponde a expectativa
# Exemplo: teste se o argumento passado é um arquivo ou teste se o argumento passado é
# um diretório etc.
# O test pode ser aplicado num condição ou o código de retorno do test pode ser verificado
# a fim de sabermos se a condição de teste retornou ou não sucesso
# Nota: Se o resultado de uma condição testada for igual a 0 então o teste foi realizado com sucesso
# Se o resultado for diferente de zero significa que o teste não retornou sucesso logo a condição testada
# não corresponde
echo "Digite o nome de um arquivo do sistema: "
read arquivo;
test -f $arquivo
echo "O resultado do teste foi $?"
echo "Se o resultado foi igual a 0 então o teste deu certo e $arquivo é um arquivo comum";

echo "O proximo comando é if, tecle enter para continuar"
read

# If é uma estrutura simples condicional de controle, significa que com base em um teste e
# em uma condição o bloco será ou não executado
# perceba que o if precisa testar uma condição logo o comando test será usado juntamente
# mas por questões de legibilidade do código uma forma abreviada do test foi criada
# essa forma é colocar seu teste entre [  ]; perceba que tem espaço...
echo "Digite um número qualquer:"
read numero;

if [ "$numero" -ge 0 ];
then
	echo "O número $numero é positivo!"
else
	echo "O número $numero é negativo!"
fi  
# Existe diversos testes que podem servir como condição pra execução do bloco de código
# Chame a manpage do comando test e verifique a quantidade de testes que podem ser executados
# Lembre-se que o test introduz lógica ao if, mas pode ser usado em qualquer trecho do código
# assim como em loops etc

echo "O proximo comando é seq, tecle enter para continuar"
read

# Seq, abreviação de sequence, pode ser usado para criar uma sequencia numérica a partir de um
# intervalo informado ou simplesmente um número
# Exemplos: seq 10 = 0 1 2 3 4 5 6 7 8 9 10
#           seq 5 10 = 5 6 7 8 9 10
for i in $(seq 10)
do
        echo -e "$i"
        for i in $(seq $i)
        do
                echo -n "$i"
        done
                echo -e "\n"
done

echo "O proximo comando é exec, tecle enter para continuar"
read

# O comando exec substitui a execução normal do script e transfere a execução para outro script
# informado. Leia e manpage exec para obter mais informações e detalhes do comando exec
# Crie o arquivo script1.sh com o seguinte conteúdo:
#!/bin/bash
exec ./nome.sh
echo "Essa linha não vai ser impressa"

# Crie o script script2.sh com o seguinte conteúdo:
#!/bin/bash
nome="Aluno"
echo "$0 executou e var nome = $nome"

# Execute script1.sh e diga qual o resultado...
