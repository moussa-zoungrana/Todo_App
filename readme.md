# TODO APP  v1.0

Todo App est une application de gestion de tache (Todolist) avec les fonctionnalités d'ajout et de suppression de taches.

Pour l'utiliser, vous avez juste besoin d'un serveur (par exemple apache) et d'une base de données mysql et d'un gestionnaire de base de donnés (phpMyadmin) par exemple et aussi de php.

Ensuite, vous avez juste à cloner le dépot sur votre ordinateur a l'aider de git ou juste en le téléchargeant directement.

Après cette étape, il reste juste quelques modifications à faire pour rendre l'application complètement opérationnelle :

-Tout d'abord vous devez aller dans le dossier Database, et modifier le fichier Database.php et Todo.php en y modifiant 
les paramètres de la fonction  construct en modifiant le username et le password pour y mettre les votres,
aussi le servername s'il est différent du votre.

-Ensuite, pour votre première utilisation, vous devez créer la base de données sur votre ordinateur, mais pas de soucis un script a été developpé pour le faire automatiquement.
Pour cela vous rentrez dans le dossier Database avec votre terminal et y executer le fichier createdb.php avec 
la commmande suivante: php createdb.php .


-Enfin vous pouvez démarrer votre application soit avec le serveur interne de php, en lancant la commmande :
php -S localhost:8000 à partir du dossier racine l'application ou creer un virtualhost directement sur votre serveur
pointant sur la racine de l'application.


Cette application sera constamment en évolution, Ceci est juste une première version avec des fonctionnalités de base.

Application développée par Moussa ZOUNGRANA, fondateur de Lynxeo-Technologies.
Email : moussawalidzoungrana@gmail.com

