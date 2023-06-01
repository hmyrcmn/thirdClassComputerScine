# -*- coding: utf-8 -*-
"""mantarDesicion.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1U-ui9owkn-MzIGvDOFjR5uF-thaMd0bN
"""

from google.colab import drive
drive.mount('/content/drive')

!pip install pandas

import pandas as pd

# Veri dosyasının yolu
file_path = "/content/drive/MyDrive/data/agaricus-lepiota.data"

# Veriyi okuma
data = pd.read_csv(file_path, header=None)

# data.info() çıktısını kontrol etme
print(data.info())

# ilk 5 satırı görüntüleme
print(data.head())

# özniteliklerin isimlerini atama
data.columns = ['class', 'cap-shape', 'cap-surface', 'cap-color', 'bruises', 'odor', 'gill-attachment', 'gill-spacing', 'gill-size', 'gill-color', 'stalk-shape', 'stalk-root', 'stalk-surface-above-ring', 'stalk-surface-below-ring', 'stalk-color-above-ring', 'stalk-color-below-ring', 'veil-type', 'veil-color', 'ring-number', 'ring-type', 'spore-print-color', 'population', 'habitat']

# veri setinin boyutunu görüntüleme
print(data.shape)

# veri setindeki her öznitelikteki benzersiz değerlerin sayısını görüntüleme
for col in data.columns:
    print(col, len(data[col].unique()))

# eksik değerleri "?" ile doldurma
data = data.replace('?', pd.np.nan)

# eksik değerleri içeren satırları veri setinden kaldırma
data = data.dropna()

# "class" özniteliğini etiket olarak ayırma
labels = data['class']
data = data.drop('class', axis=1)

# kategorik öznitelikleri sayısal değerlere dön

from sklearn.model_selection import train_test_split

# veri setini eğitim ve test setlerine ayırma (veri setinin %20'si test seti olarak ayrılır)
X_train, X_test, y_train, y_test = train_test_split(data, labels, test_size=0.2, random_state=42)

import pandas as pd

# veri setindeki kategorik değişkenleri sayısal verilere dönüştürme
data = pd.get_dummies(data)

# veri setini eğitim ve test setlerine ayırma
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(data, labels, test_size=0.2, random_state=42)

# Random Forest sınıflandırma modelini oluşturma ve eğitme
from sklearn.ensemble import RandomForestClassifier
rf = RandomForestClassifier(n_estimators=100, random_state=42)
rf.fit(X_train, y_train)

# test setindeki verileri kullanarak modelin performansını ölçme
from sklearn.metrics import accuracy_score, confusion_matrix, classification_report
y_pred = rf.predict(X_test)
accuracy = accuracy_score(y_test, y_pred)
confusion_mat = confusion_matrix(y_test, y_pred)
class_report = classification_report(y_test, y_pred)

# performans ölçütlerini ekrana yazdırma
print("Accuracy:", accuracy)
print("Confusion Matrix:\n", confusion_mat)
print("Classification Report:\n", class_report)

from sklearn.ensemble import RandomForestClassifier

# Random Forest sınıflandırma modelini oluşturma ve eğitme
rf = RandomForestClassifier(n_estimators=100, random_state=42)
rf.fit(X_train, y_train)

import seaborn as sns

# Confusion Matrix'i görselleştirme
sns.heatmap(confusion_mat, annot=True, cmap="Blues")

!pip install -U scikit-learn

!pip install scikit-plot

!pip install --upgrade scikit-plot

from sklearn.metrics import classification_report

# Sınıflandırma Raporunu gösterme
print(classification_report(y_test, y_pred))

!pip install graphviz

from sklearn.tree import DecisionTreeClassifier, plot_tree
import graphviz 

dtc = DecisionTreeClassifier()
dtc.fit(X_train, y_train)

dot_data = tree.export_graphviz(dtc, out_file=None, 
                      feature_names=X.columns,  
                      class_names=y.unique(),  
                      filled=True, rounded=True,  
                      special_characters=True)  
graph = graphviz.Source(dot_data)  
graph

