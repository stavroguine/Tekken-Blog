tekken
========

A Symfony project created on April 28, 2017, 8:59 pm.

Pour charger les articles et commentaires, tu dois te placer à la racine du projet er faire: <br>
<br>
php bin/console doctrine:database:create <br>
php bin/console doctrine:schema:create <br>
php bin/console doctrine:fixtures:load <br>
<br>
Il faut modifier le fichier app/config/parameters.yml et faire un composer update pour avoir les vendors.
