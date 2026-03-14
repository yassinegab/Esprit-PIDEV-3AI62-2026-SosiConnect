<p align="center">
  <img width="452" alt="Wellness Connect Logo" src="https://github.com/user-attachments/assets/d61ed0dc-07ff-477d-acfd-060616a6a601" />
</p>

# 🌿 SosI Connect - Wellbeing Ecosystem

## Overview

This project was developed as part of the PIDEV – 3rd Year Engineering Program at **Esprit School of Engineering** (Academic Year 2025–2026).

SOSI Connect is a comprehensive personal wellbeing tracking solution. This project demonstrates the integration between a high-performance desktop application and a robust web infrastructure.

## Features

- [x] **Unified Authentication:** Secure login across both platforms.
- [ ] **Dashboard:** Visualization of health and wellbeing indicators.

## Tech Stack

### Frontend
- **Desktop Interface:** JavaFX (with SceneBuilder for FXML)
- **Web Client:** Twig, Tailwind CSS (via npm & Webpack Encore/AssetMapper)

### Backend
- **Framework:** Symfony 6.x / 7.x
- **Language:** PHP 8.2+
- **Database:** MySQL
- **Authentication:** JWT (LexikJWTAuthenticationBundle)

## Architecture

The ecosystem is divided into two distinct parts that communicate via a **REST API**:

1. **Web (Symfony):** Manages the business logic, centralized database, and provides an administration interface as well as a web client.
2. **Desktop Client (JavaFX):** A smooth and interactive application for the end user, allowing daily tracking without needing a web browser.

[Image of a REST API architecture diagram connecting a web server and a desktop client]

## Folder Structure

```text
HealthCareWebDesktopApplication/
├── assets/         # Frontend assets (CSS, JS, Tailwind)
├── bin/            # Executables (e.g., Symfony console)
├── config/         # Project configuration files (routes, packages, services)
├── migrations/     # Database migrations
├── public/         # Web document root (index.php, compiled assets)
├── src/            # PHP source code (Controllers, Entities, Repositories, Services)
├── templates/      # Twig templates for the web interface
├── tests/          # Automated tests (PHPUnit)
├── translations/   # Translation files
├── var/            # Generated files (cache, logs)
└── vendor/         # Composer dependencies
```

## Contributors

- Yassine gabsi
- Souha mabrouk
- Nessrine sayari
- Dhia mejdi
- Sahar kloula

## Academic Context

Developed at **Esprit School of Engineering – Tunisia**
PIDEV – 3A | 2025–2026

## Getting Started

### Backend Configuration (Symfony)
```bash
cd HealthCareWebDesktopApplication
# In the terminal, run:
npm install -D tailwindcss@3 postcss autoprefixer
npx tailwindcss -i ./assets/app.css -o ./public/build/tailwind.css --watch
symfony server:start 
```

## Acknowledgments

- **Esprit School of Engineering**
