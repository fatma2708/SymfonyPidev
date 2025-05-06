# Système de Gestion de Projet Symfony

## Aperçu
Ce projet est développé dans le cadre du cursus PIDEV 3A à l'École d'Ingénieurs Esprit. C'est une application web complète construite avec Symfony 6.4, mettant l'accent sur une gestion robuste des utilisateurs et des fonctionnalités de communication en temps réel.

## Fonctionnalités
- Système d'authentification des utilisateurs
- Intégration des notifications SMS (Twilio)
- Système de communication par email
- Intégration ReCAPTCHA
- Design responsive
- Gestion de base de données avec Doctrine ORM

## Stack Technique
### Frontend
- Moteur de template Twig
- Bootstrap
- JavaScript
- CSS3/LESS

### Backend
- PHP 8.x
- Symfony 6.4
- Base de données MySQL
- Doctrine ORM

### Autres Outils
- API Twilio pour SMS
- Google ReCAPTCHA
- Système de Messagerie
- Gestionnaire de paquets Composer

## Structure des Répertoires
```
├── assets/          # Ressources frontend (JS, CSS, images)
├── config/          # Configuration de l'application
├── public/          # Répertoire racine du serveur web
├── src/             # Code source PHP
│   ├── Controller/  # Contrôleurs de l'application
│   ├── Entity/      # Entités Doctrine
│   ├── Form/        # Types de formulaires
│   ├── Repository/  # Dépôts de données
│   └── Service/     # Services de l'application
├── templates/       # Templates Twig
└── tests/          # Tests de l'application
```

## Pour Commencer
1. Cloner le dépôt
2. Installer les dépendances :
   ```
   composer install
   ```
3. Configurer votre fichier .env avec vos identifiants de base de données et de services
4. Créer la base de données :
   ```
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```
5. Démarrer le serveur de développement Symfony :
   ```
   symfony server:start
   ```

## Remerciements
Ce projet a été développé à l'École d'Ingénieurs Esprit dans le cadre du programme PIDEV. Nous remercions particulièrement nos instructeurs et mentors pour leur accompagnement tout au long du développement.
