# Validation de laravel DWM15 par Lénaïc DUJOUR

## Qu'y a t'il dans ce repo?

Dans ce repo il y a un projet de site web avec Laravel sur le thème des personnages de bande dessinés. Il y a également des informations sur les auteurs de bande dessinées.

## La mise en place de la base de données

Tout d'abord modifiez le fichier .env pour rentrer les informations nécessaires à la liaison avec la base de donnée. Une fois fait, il suffit d'aller dans le dossier racine de laravel et taper la commande 

```
php artisan migrate:fresh --seed
```

Et voilà, ça fait des chocapics ! (Non.)

## Les fonctionalités

Il y a trois pages principales. La page d'accueil, la liste des personnages et la liste des dessinateurs disponibles via le menu de navigation.

- La page d'accueil

Rien de bien exceptionnel, un text de bienvenue et un petit gif.

- La liste des personnages

Contient, comme on pourrait s'y attendre, la liste des personnages présents dans la table characters. De là vous pouvez :

1. Ajouter un personnage (via un formulaire)

2. Supprimer un personnage

3. Modifier un personnage (via un formulaire)

4. Afficher les détails du dessinateur en cliquant sur son nom, ce qui affiche un page modale dans laquelle vous pouvez :

* Lire les informations

* Accéder à sa page Wikipédia

* Afficher tous les personnages dans la base de donnée étant dessinés par ce dessinateur

- La lise des dessinateurs

Contient la liste des dessinateurs présents dans la table drawers. De la vous pouvez :

1. Ajouter un dessinateur (via un formulaire)

2. Supprimer un dessinateur

3. Modifier un dessinateur (via un formulaire)

4. Afficher les détails du dessinateur en cliquant sur son nom, ce qui affiche un page modale dans laquelle vous pouvez :

* Lire les informations

* Accéder à sa page Wikipédia

* Afficher tous les personnages dans la base de donnée étant dessinés par ce dessinateur


## Quelques remarques

Pour tester l'ajout de personnage, je conseille de créer Lucky Luke en l'année 1946 dans les BD du même nom et relié à Maurice de Bevere (dit Morris).

Il y a un système (assez basique) de validation des données rentrées dans le formulaire.

Avec un peu plus de temps j'aurais fait en sorte qu'en cas de non validation, les données précedemment rentrées (et correctes) soient préremplies dans le formulaire.

La page wikipedia s'affichera quasiment à chaque fois, quelque soit le dessinateur rentré, que ce soit avec son pseudo ou son nom. 
Tout ça grâce à Wikipedia qui reconnait des liens "similaires" à celui à celui finalement affiché dans l'url. Mais cela reste limité et peut ne pas bien fonctionner (un exemple, si au lieu de Maurice de Bevere, on avait mis Morris, qui est son nom de dessinateur, le lien aurait affiché une page parlant d'autre chose).

Si, dans la liste des personnages dessinés par un dessinateur il n'y a aucun personnage dans la base de données relié à celui-ci, un message s'affichera indiquant qu'il n'y a pas de personnage mais qu'on peut en rajouter un.
Le dessinateur en question sera déjà sélectionné dans le formulaire.