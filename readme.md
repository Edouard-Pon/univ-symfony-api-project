Ce projet sert d'API pour le projet principal des tests QCM. Il contient également une branche utilisateur, implémentée pendant le cours, mais qui n'est pas utilisée.

La principale tâche de l'API est de donner une phrase de motivation aléatoire à l'utilisateur.

Pour lancer l'application, assurez-vous d'avoir renseigné les données de votre base de données dans le fichier .env.

Une fois les valeurs saisies, exécutez simplement la commande

```sh
make setup
```

, qui effectuera toutes les actions nécessaires pour démarrer l'API.

Assurez-vous que l'API est en état de fonctionnement avant de tester l'application principale.

Ajoutez également le lien de l'API dans le fichier .env de l'application principale afin de pouvoir l'utiliser.

Pour vérifier le fonctionnement de l'API, ouvrez votre navigateur et accédez à {localhost}/api/motivation/. Exemple: `http://localhost:<port>/api/motivation/`
