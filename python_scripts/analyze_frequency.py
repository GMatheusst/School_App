import pandas as pd
import matplotlib.pyplot as plt
from sqlalchemy import create_engine

engine = create_engine('mysql://root:root@localhost/school_app')
df = pd.read_sql('SELECT * FROM student_points', engine)

# Análise de frequência
plt.plot(df['frequency'])
plt.title('Frequência do Aluno')
plt.show()