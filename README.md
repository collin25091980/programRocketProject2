# Projet Passerelle 2 - Believemy


Ce projet passerelle a été fait en php, mysql avec bootstrap (avec Sass uniquement pour modifier la couleur primaire).

L'utilisateur lorsqu'il s'enregister a par defaut le role user.
J'ai créer un compte à mon nom pour être administrateur.

Les droits de l'utilisateur sont de naviguer sur le site et d'ajouter un ou plusieurs avis.
Les droits de l'administrateur sont de pouvoir créer gérer les projets (les modifier ou les supprimer) ainsi que de supprimer les avis.

Sur la page d'acceuil, les témoignages et avis sont affiché alétoirement par 3, ils changent au rechargement de la page.

J'ai choisi de faire ce projet avec la POO, pour les interactions avec la base de données.
J'ai choisi pour les pages principales de n'utiliser que des includes et je les ai décomposées dans le fichier src. Ce qui fait que l'on peut modifier une partie du site sans en modifier l'autre.

J'espère que vous aurez autant de plaisir à le tester que j'ai eu à le faire.

Cordialement

Sebastien Collin

P.S : pour contourner le problème du header(location) sur le serveur j'ai utilisé ob_start() au début de chaque page qui en avait besoin.
