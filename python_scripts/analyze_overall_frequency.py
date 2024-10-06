import pandas as pd
import matplotlib.pyplot as plt
from sqlalchemy import create_engine

engine = create_engine('mysql://root:root@localhost/school_app')
df = pd.read_sql('SELECT AVG(frequency) AS average FROM student_points GROUP BY student_id', engine)

# Análise da média de frequência
plt.plot(df['average'])
plt.title('Média de Frequência dos Alunos')
plt.show()