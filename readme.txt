TODO APP

Todo App est une application de gestion de tache (Todolist) avec les fonctionnalités d'ajout et de suppression de taches.

Pour l'utiliser, vous avez juste besoin d'un server (par exemple apache) et d'une base de données mysql et d'un gestionnaire
de base de donnés (phpMyadmin) par exemple et aussi de php.

Ensuite, vous avez juste à cloner le depot sur votre ordinateur a l'aider de git ou juste en le téléchargeant directement.

Après cette étape, il reste juste quelque modifications à faire pour rendre l'application complètement operationnelle :

-Tout d'abord vous devez aller dans le dossier Database, et modifier le fichier Database.php en y modifiant 
les paramètres de la fonction  construct en modifiant le username et le password pour y mettre les votre,
aussi le servername s'il est différent du votre.

-Ensuite, pour votre première utilisation, vous devez creer la base de données sur votre ordinateur, mais pas souci un script
a été developpé le faire automatiquement.
Pour cela vous rentrez dans le dossier Database avec votre terminal et y executé le fichier createdb.php avec 
la commmande suivante: php createdb.php


-Enfin vous pouvez démarrer votre application soit avec le serveur interne de php, en lancant la commmande :
php -S localhost:8000 à partir du dossier racine l'application ou creer un virtualhost directement sur votre serveur
pointant sur la racine de l'application.




Application développé par Moussa ZOUNGRANA, fondateur de Lynxeo-Technologies.
Email : walidzoungrana@yahoo.fr

