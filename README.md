# Better Labor: Connected Headset Management Platform
<img src="images/Logo.png" alt="Logo" width="250px">

## Introduction

The **Better Labor Connected Headset Management Platform** is a web application designed to manage users, and health and environmental data for workers using connected headsets. The project was developed as part of a year-long collaboration among five engineering students at a French engineering school. This repository contains the **Computer Science** component of the project, creating the user interface for administrators, company managers, and workers. The goal was to allow real-time monitoring and management of environmental factors like CO2 levels, sweat, heart rate, and sound exposure to ensure workers' well-being.
*However, it is only part of the overall project and requires the results of the  Electronics, Signal Processing and Telecommunications components to fully work and integrate headset data to the dashboard in real-time.*

This project allowed me to develop a wide range of skills, including full-stack development, database management, and user experience design, which isn't exactly my strong suit. I contributed extensively to the project, which is why I have forked this repository.

## Features & Functionality

- **User Roles**: Supports different user types—administrators, company managers, and workers, each with distinct functionalities.
  - **Administrators**: Manage users, content, and FAQs.
  - **Company Managers**: Manage workers, view their environmental data, and take action based on the data.
  - **Workers**: Access dashboards displaying their headset's health data, manage personal accounts, and take quizzes to learn more about workplace safety.

- **Environmental Monitoring**: Workers' connected headsets measure environmental data such as CO2 levels, noise, sweat, and heart rate. This data is collected and displayed on the platform for analysis.

- **Content Management**: Administrators can manage the site's content, including FAQs and quizzes.
  
- **User Management**: Administrators and managers can add, modify, or remove workers and company users.
  
- **Quiz System**: Workers can take quizzes to better understand potential workplace hazards and earn badges based on their scores.

## Project Structure

Although the project does not follow the traditional MVC architecture, it is logically structured with reusable functions and files organized by feature. Most of the file and function names are in French, reflecting the project’s context. The key components are:

- **Root Files**:
  - `index.php`: The home page of the application.
  - `faq.php`, `faq.js`, `faq.css`: Files handling the FAQ page and its interactions.
  - `send_mail.php`: Used for sending emails via the PHPMailer library.
  
- **Folders**:
  - **`database/`**:
    - `betterlabor.sql`: The SQL file for setting up the database.
    - `config.php`: Database configuration.
    - `connexion.php`: Handles database connection.
  
  - **`espace-admin/`**: Contains all files related to the admin dashboard.
    - `gestion_faq.php`, `gestion_utilisateurs.js`: Admin management features for users and FAQs.
  
  - **`espace-chef/`**: The section for company managers.
    - `ajout_employes.php`, `gestion_utilisateurs.php`: Pages for managing workers.
  
  - **`espace-membre/`**: For worker accounts.
    - `donnees.php`: Displays the worker’s environmental data.
    - `quiz.php`: The page where workers take quizzes.
  
  - **`images/`**: Contains all image assets used in the project, such as icons, badges, and logos.

  - **`libraries/`**: External libraries, including PHPMailer for email functionalities.

## Technologies Used

- **PHP**: The core backend language for handling server-side logic.
- **MySQL (phpMyAdmin)**: Database used for managing users, content, and headset data.
- **HTML/CSS/JavaScript**: Frontend technologies for building user interfaces.
- **Chart.js**: Library for displaying environmental data as interactive charts.
- **noUiSlider**: For user-friendly slider inputs.
- **PHPMailer**: Used for sending emails with attachments.

## Setup & Installation

### Prerequisites

- **PHP**: Version 7.4 or higher.
- **MySQL**: Database to store user and environmental data.

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/better-labor-platform.git
   cd better-labor-platform

2. Set up the database:
Import the betterlabor.sql file into your MySQL server via phpMyAdmin or another database management tool.
Configure your database connection in database/config.php.

