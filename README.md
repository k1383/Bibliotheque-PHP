# TP PHP : Gestion d’une bibliothèque

## 🎯 Objectif

Créer une mini-application PHP permettant de gérer les **livres**, **auteurs**, **membres** et **emprunts** d’une bibliothèque à l’aide de la base de données `bibliotheque`.

---

## 📚 Étape 1 – Créer la structure

Créer la structure de votre projet comme présenté ci-dessous.

## 📁 Structure du projet

![image](https://github.com/user-attachments/assets/a05486eb-2908-4769-a0a1-dcdc7e606303)


---

## 📚 Étape 2 – Gérer les livres

- **`liste.php`** :
    
    Afficher les livres avec jointures sur les auteurs et les genres. Utiliser un tableau HTML, ajouter des liens vers ajouter/modifier/supprimer.
    
- **`ajouter.php`** :
    
    Formulaire HTML avec les champs : titre, année, auteur (select), genre (select). Insertion en BDD.
    
- **`modifier.php`** :
    
    Formulaire pré-rempli avec les données du livre à modifier. Mise à jour en base.
    
- **`supprimer.php`** :
    
    Demande de confirmation avant suppression.
    

---

## 👤 Étape 3 – Gérer les membres

- **Lister les membres**
- **Ajouter un membre** : formulaire simple (nom, prénom, email)
- **Modifier un membre**
- **Supprimer un membre**

---

## ✍️ Étape 4 – Gérer les auteurs

Même logique que pour les livres :

- Lister, ajouter, modifier, supprimer un auteur

---

## 📖 Étape 5 – Gérer les emprunts

- **`liste.php`** : afficher les emprunts (livre, membre, date, rendu ou pas)
- **`emprunter.php`** : formulaire avec sélection d’un membre et d’un livre, + date retour prévu
- **`rendre.php`** : mettre à jour la date de retour réel
- **`historique.php`** : n’afficher que les emprunts rendus

---

## ✅ À faire attention :

- Contrôles HTML et PHP (required, format email, etc.)
- Affichage des livres disponibles (non empruntés actuellement)
- Nombre d’emprunts actifs par membre
- Séparation logique dans des fonctions réutilisables

---

## 🧪 Checklist des taches à réaliser

| Tâche | À faire |
| --- | --- |
| Connexion à la base via PDO | ✅ |
| CRUD complet sur les livres | ✅ |
| CRUD simplifié sur les membres | ✅ |
| Liste des auteurs et ajout | ✅ |
| Enregistrement d’un emprunt | ✅ |
| Retour d’un livre | ✅ |
| Affichage de l’historique des emprunts | ✅ |
| Présentation correcte (HTML / CSS simple) | ✅ |

---

## 🔚 Résultat attendu

Une mini web app PHP  capable de :

- Afficher les livres avec auteurs et genres
- Gérer les membres et les auteurs
- Enregistrer et rendre des emprunts
- Visualiser les livres non rendus
- Afficher l’historique des emprunts

---
