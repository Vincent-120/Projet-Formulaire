# Projet: Formulaire

- Deadline: 06/12/2019
- Projet en duo
- Groupes : Quentin De Paola, Vincent Vissers

## Compétences travaillées

- Groupe: Maitriser Git
- Frontend: css frameworks
- Backend: PHP programming
- Méthodo: expression d'une solution en chemin logique, via UML
- Frontend: html sémantique
- Frontend: html accessibilité
- Frontend: Amélioration progressive

## Situation-problème

La société *Hackers Poulette* ™ vend des kits et accessoires pour Rasperri Pi à monter soi-même. Elle souhaite permettre à ses utilisateurs de contacter son support technique.
Ta mission: Mettre en place leur site, coté front, quelques contraintes du cahier des charges mais très light, pour le back, développer un script en php, permettant d'afficher un formulaire de contact et de traiter sa réponse: sanitisation, validation, puis envoi et feedback à l'utilisateur.

![Hackers Poulette Logo](./hackers-poulette-logo.png "Logo Hackers Poulette (via Hipster Logo Generator")

## Critères de performance

### Coté front :

- Mettre en place un site présentant les produits et les services de la société Hackers Poulette, n'oublie pas d'intégrer un véritable concept et à travailler sur l'image de la marque.

### Coté back :

- Le formulaire sera du html sémantique, validé par le W3C, et accessible aux non-voyants.
- Si l'utilisateur commet une erreur, lui retourner le formulaire, avec les réponses valides remises dans leurs inputs respectifs.
- Idéalement: afficher les messages d'erreurs à proximité de leur champ respectif.
- Le formulaire effectuera un nettoyage (*sanitization*) et une validation *serverside*
- Si la validation est ok, il enverra le contenu du message par email à une adresse spécifiée.
- Implémentation de la technique antispam du *honeypot*
- Les messages d'erreur sont bien formulés, de manière à aider l'utilisateur. (lire [The Four H of Writing Error Messages](http://uxmas.com/2012/the-4-hs-of-writing-error-messages) )
- Ton code est publié sur un repository intitulé "`projet-formulaire`"

## Critères de perfectionnement (à implémenter dans un second temps)

- Validation côté client en javascript
- Soumission et feedback via Ajax
- Expérience-utilisateur (UX) soignée (clarté, pertinence, correction (pas de bugs, orthographe correcte...)).

## Découpage de la difficulté en séquences pédagogiques

### Séquence 0: Planifier le travail à effectuer

Etude de la demande, UML, prototypage, Git.

**Champs du formulaire**: prénom & nom + email + pays + message + genre (H/F) + sujet (3 sujets possibles, plusieurs choix possibles)
Tous les champs sont obligatoires, sauf le sujet (dans ce cas, valeur = "Autre")

### Séquence 1 :

- objectif 1: html sémantique
- objectif 2: html accessible aux non-voyants

### Séquence 2 :

- Utiliser un framework [CSS Bootstrap](http://getbootstrap.com/) ou autre pour améliorer rapidement le rendu visuel et l'ergonomie de ton site.

**Charte Graphique du client**

- Font: [Squirrel](https://www.fontsquirrel.com/fonts/bellota)
- Couleurs: #15c5bd + #FFF + #303030

### Séquence 3: formulaire de contact (php)

- présentation: architecture serveur/client (transmissif, 10")
- tester un script PHP en local
- **afficher les données brut** reçues du formulaire (utiliser la fonction php `print_r();` ([voir la doc php](http://php.net/manual/en/function.print-r.php))

### Séquence 4: traiter les données du formulaire (php)

- [PHP](../../Parcours/03-Montagne/12-PHP): "structures logiques de la programmation en PHP"
	- variables
	- Manipulation: concaténation, addition, quelques exemples de fonctions utiles...
	- Conditions
	- Boucles
- Sanitization: neutraliser tout encodage nocif (`<script>`)[Sanitisation](../../Advice/0.9.Sanitize/sanitisationPHP.md)
- Validation: champs obligatoires + Email valide
- Envoi + Feedback
# Mise en place du projet.
- Acceuille : Présentation du site
- Produit: Affichage des produit disponible
- Formulaire
-Framwork utilisé : Bootstrap
