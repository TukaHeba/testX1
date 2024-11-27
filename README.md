# E-Commerce System


## Table of Contents

-   [E-Commerce System](#e-commerce-system)
    -   [Table of Contents](#table-of-contents)
    -   [Features](#features)
    -   [Getting Started](#getting-started)
        -   [Prerequisites](#prerequisites)
        -   [Installation](#installation)
        

## Features


## Getting Started

These instructions will help you set up and run the E-Commerce System on your local machine for development and testing purposes.


### Prerequisites

-   **PHP** (version 7.4 or later)
-   **MySQL** (version 5.7 or later)
-   **Apache** or **Nginx** web server
-   **Composer** (PHP dependency manager, if you are using any PHP libraries)


### Installation

1. **Clone the repository**:

    ```
    git clone https://github.com/******************
    cd E-Commerce System
    ```

2. **Set up the environment variables:**:

Create a .env file in the root directory and add your database configuration:

```
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=e-commerce-system
DB_USERNAME=root
DB_PASSWORD=password
```

3. **Set up the MySQL database:**:

-   Create a new database in MySQL:
    ```
    CREATE DATABASE e-commerce-system;
    ```
-   Run the provided SQL script to create the necessary tables:
    ```
    mysql -u root -p e-commerce-system < database/schema.sql
    ```

4. **Configure the server**:

-   Ensure your web server (Apache or Nginx) is configured to serve PHP files.
-   Place the project in the appropriate directory (e.g., /var/www/html for Apache on Linux).

5. **Install dependencies (if using Composer)**:

```
composer install
```

6. **Start the server**:

-   For Apache or Nginx, ensure the server is running.
-   The API will be accessible at http://localhost/e-commerce-system.
