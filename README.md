# Création du projet avec PHP 8.2

symfony new --php=8.2 {Nom du projet}

# Installation

symfony composer req orm
symfony composer req --dev maker orm-fixtures debug
symfony composer req security

# Suite

symfony console make:auth
symfony console security:hash-password
