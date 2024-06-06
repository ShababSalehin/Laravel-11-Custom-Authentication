## Introduction

Welcome to the Laravel 11 Custom Authentication System developed by Shabab Salehin! This application is designed to provide a robust and secure authentication solution built with modern web development technologies. It caters to the common needs of user authentication, including registration, login, profile management, and secure session handling. 

### Project Overview

In this project, users can register using their name, unique email address, unique phone number, and password. Post-registration, users are automatically logged in and redirected to a personalized dashboard. The system includes a profile page where users can update their name and email. For security, the application uses CSRF tokens to prevent cross-site request forgery attacks. Users can log out securely, ensuring their sessions are terminated properly. Additionally, users can log in using their phone number and password, providing a flexible and user-friendly authentication process.

### Motivation

The primary motivation behind this project was to create a scalable and secure authentication system using the latest version of Laravel. The project aims to demonstrate the integration of various technologies such as Laravel, ViteJS, and MySQL, and how they can be used together to build a comprehensive authentication system. This project serves as a valuable resource for developers looking to implement custom authentication solutions in their Laravel applications.

### Features Detailed

- **User Registration**: Users can register by providing their name, a unique email address, a unique phone number, and a password. The registration process includes validation to ensure data integrity and security.
  
- **Automatic Login Post-Registration**: After successful registration, users are automatically logged in and redirected to their dashboard, enhancing user experience by eliminating the need for an additional login step.

- **Profile Management**: The profile management feature allows users to update their name and email address. This is useful for keeping user information current without needing to re-register or contact support.

- **Dashboard Access**: Upon logging in, users are redirected to a dashboard. This area can be expanded to include additional features and information personalized to each user.

- **CSRF Protection**: The application uses Laravel’s built-in CSRF protection to safeguard against cross-site request forgery attacks. This is critical for maintaining the security of user data and sessions.

- **Secure Logout**: Users can log out securely, ensuring their session data is cleared and they are logged out of the application.

- **Login with Phone Number**: Users can log in using their phone number and password, providing an additional layer of flexibility and convenience.

## Technologies Used

This project leverages a variety of technologies to create a seamless and efficient authentication system:

- **Laravel 11**: The latest version of the Laravel framework, providing a robust and scalable backend.
- **PHP**: The core programming language used in Laravel.
- **HTML5 and CSS3**: For creating the structure and styling of the web pages.
- **JavaScript (ES6)**: Enhances the interactivity and functionality of the application.
- **ViteJS**: A build tool that provides fast and efficient development and build processes.
- **MySQL**: The database management system used to store user data securely.

## Detailed Installation Instructions

### Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL

### Step-by-Step Installation

1. **Clone the repository**
    ```bash
    git clone https://github.com/your-username/your-repository.git
    cd your-repository
    ```

2. **Install PHP dependencies**
    ```bash
    composer install
    ```

3. **Install JavaScript dependencies**
    ```bash
    npm install
    ```

4. **Copy the example environment file**
    ```bash
    cp .env.example .env
    ```
    Update the `.env` file with your database and other settings.

5. **Generate an application key**
    ```bash
    php artisan key:generate
    ```

6. **Run the database migrations**
    ```bash
    php artisan migrate
    ```

7. **Build the front-end assets**
    ```bash
    npm run build
    ```

8. **Start the development server**
    ```bash
    php artisan serve
    ```

## Usage

- **Register**: Visit `/register` to create a new account.
- **Login**: Visit `/login` to log in with your phone number and password.
- **Dashboard**: Upon successful login, you will be redirected to the dashboard.
- **Profile**: Visit `/profile` to update your name and email.
- **Logout**: Click the logout button to securely log out of the application.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - [auddhayashabab@gmail.com](mailto:auddhayashabab@gmail.com)
