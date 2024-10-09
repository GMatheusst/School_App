import matplotlib.pyplot as plt
import numpy as np

# Simulando dados para o exemplo
alunos = ['Aluno 1', 'Aluno 2', 'Aluno 3', 'Aluno 4', 'Aluno 5']
notas = [7.5, 8.0, 6.5, 9.0, 8.5]  # Exemplo de notas

# Criando o gráfico
plt.bar(alunos, notas, color='blue')
plt.axhline(y=np.mean(notas), color='red', linestyle='--')  # Linha da média
plt.title('Média Geral dos Alunos')
plt.xlabel('Alunos')
plt.ylabel('Notas')
plt.ylim(0, 10)

# Salvando o gráfico
plt.savefig('media_geral.png')  # Salva a imagem no mesmo diretório
