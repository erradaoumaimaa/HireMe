<div align="center" id="top"> 
  <img src="./.github/app.gif" alt="HireMe" />

  &#xa0;


</div>

<h1 align="center">HireMe</h1>

## 🚀  Présentation du Projet
La plateforme HireMe a pour objectif de créer un espace dédié aux services locaux, permettant aux utilisateurs de proposer leurs compétences dans des domaines tels que la plomberie, la peinture, le jardinage, etc. Les autres utilisateurs peuvent consulter ces services et entrer en contact avec les prestataires. Ce projet est développé en utilisant le framework Laravel.


### Diagrammes UML

1. **Diagramme de Cas d'Utilisation Auteur:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Auteur.png)
2. **Diagramme de Cas d'Utilisation Admin:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Admin.png)
3. **Diagramme de Cas d'Utilisation Visiteur:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Visitor.png)


2. **Diagramme de Classes:**

   - Présentant les classes du système, leurs attributs et relations pour une vision structurée du code.
   - ![CLASS](./UML/images/d_classe.png)



## 💻 Technologies Utilisées

## Programming Languages
- ![PHP](https://img.shields.io/badge/PHP-5.2.1.x-blue?style=flat-square&logo=php)
- ![SQL](https://img.shields.io/badge/SQL-MySQL-blue?style=flat-square&logo=mysql)
- ![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow?style=flat-square&logo=javascript)
- ![HTML](https://img.shields.io/badge/HTML-5-orange?style=flat-square&logo=html5)
- ![Laravel](https://img.shields.io/badge/Laravel-8.x-red?style=flat-square&logo=laravel)


## Framework

- ![CSS](https://img.shields.io/badge/CSS-Tailwind%20CSS-38B2AC?style=flat-square&logo=tailwindcss)


<hr>

## Project Links

- 📂 **GitHub Repository:** [Project Repository](https://github.com/erradaoumaimaa/HireMe)


## 📁 Structure du Projet

La plateforme HireMe est développée en utilisant le framework Laravel, ce qui suit une structure conventionnelle MVC (Modèle-Vue-Contrôleur) pour une organisation claire et modulaire du code source. Voici un aperçu de la manière dont les différents composants sont répartis :

## Directory Hierarchy
```
|—— app
|    |—— Http
|        |—— Controllers
|            |—— ServicesController.php
|    |—— Models
|        |—— Service.php
|    |—— ...
|—— database
|    |—— migrations
|        |—— 2022_02_01_create_services_table.php
|    |—— seeds
|        |—— DatabaseSeeder.php
|—— resources
|    |—— views
|        |—— services
|            |—— index.blade.php
|            |—— show.blade.php
|            |—— create.blade.php
|            |—— edit.blade.php
|    |—— ...
|—— routes
|    |—— web.php
|—— public
|    |—— ...
|—— ...

```
         

