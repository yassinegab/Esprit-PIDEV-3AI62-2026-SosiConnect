<p align="center">
  <img width="452" alt="Wellness Connect Logo" src="https://github.com/user-attachments/assets/d61ed0dc-07ff-477d-acfd-060616a6a601" />
</p>

# 🌿 SosI Connect - Écosystème Bien-être

## Overview

This project was developed as part of the PIDEV – 3rd Year Engineering Program at **Esprit School of Engineering** (Academic Year 2025–2026).

SOSI Connect est une solution complète de suivi du bien-être personnel. Ce projet démontre l'intégration entre une application de bureau performante et une infrastructure web robuste.

## Features

- [x] **Authentification unifiée :** Connexion sécurisée sur les deux plateformes.
- [ ] **Tableau de bord :** Visualisation des indicateurs de santé et de bien-être.

## Tech Stack

### Frontend
- **Interface (Desktop) :** JavaFX (avec SceneBuilder pour le FXML)
- **Web Client :** Twig, Tailwind CSS (via npm & Webpack Encore/AssetMapper)

### Backend
- **Framework :** Symfony 6.x / 7.x
- **Langage :** PHP 8.2+
- **Base de données :** MySQL
- **Authentification :** JWT (LexikJWTAuthenticationBundle)

## Architecture

L'écosystème se divise en deux parties distinctes qui communiquent via une **API REST** :

1. **Web (Symfony) :** Gère la logique métier, la base de données centralisée et fournit une interface d'administration ainsi qu'un client web.
2. **Client Desktop (JavaFX) :** Une application fluide et interactive pour l'utilisateur final, permettant un suivi quotidien sans passer par un navigateur.

[Image of a REST API architecture diagram connecting a web server and a desktop client]

## Contributors

- [Votre Nom ou les Membres de l'Équipe]

## Academic Context

Developed at **Esprit School of Engineering – Tunisia**
PIDEV – 3A | 2025–2026

## Getting Started

### Configuration du Backend (Symfony)
```bash
cd HealthCareWebDesktopApplication
# dans le terminal taper 
npm install -D tailwindcss@3 postcss autoprefixer
npx tailwindcss -i ./assets/app.css -o ./public/build/tailwind.css --watch
symfony server:start 
```

## Acknowledgments

- **Esprit School of Engineering**
