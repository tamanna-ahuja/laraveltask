Before running the project, make sure you have the following installed:

-   PHP >= 8.0
-   Composer
-   MySQL

## Installation & Setup

Follow these steps to set up the Laravel project:

1. **Clone the repository**:

    git clone https://github.com/tamanna-ahuja/laraveltask.git

    cd laraveltask

2. **Install PHP dependencies:**:

    composer install

    cp .env.example .env

3. **Generate the application key:**:

   php artisan key:generate

5. **Configure the database:**:

   DB_CONNECTION=mysql
   
   DB_HOST=127.0.0.1

   DB_PORT=3306

   DB_DATABASE=your_database_name

   DB_USERNAME=your_database_username

   DB_PASSWORD=your_database_password

7. **Configure the Email:**:

   MAIL_MAILER=smtp

   MAIL_HOST=smtp.mailtrap.io

   MAIL_PORT=587

   MAIL_USERNAME=null

   MAIL_PASSWORD=null

   MAIL_ENCRYPTION=tls

   MAIL_FROM_ADDRESS="example@example.com"

   MAIL_FROM_NAME="${APP_NAME}"

8. **Run database migrations:**:

   php artisan migrate

10. **Serve the application:**:

	php artisan serve
