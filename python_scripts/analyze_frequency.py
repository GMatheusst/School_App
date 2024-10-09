import requests
import matplotlib.pyplot as plt

# URL do seu endpoint
url = 'http://localhost:8000/frequencia-data'  # Altere para o URL correto da sua aplicação

# Faz uma requisição para obter os dados de frequência
response = requests.get(url)
data = response.json()

# Extraindo os dados para o gráfico
cursos = list(data.keys())
frequencia = list(data.values())

plt.figure(figsize=(10, 6))
plt.bar(cursos, frequencia, color='blue')
plt.xlabel('Cursos')
plt.ylabel('Frequência (%)')
plt.title('Frequência dos Alunos por Curso')
plt.ylim(0, 100)

# Salva o gráfico como imagem
plt.savefig('public/images/frequencia_cursos.png')
plt.close()
