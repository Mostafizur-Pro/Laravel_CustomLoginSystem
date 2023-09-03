# Custom Login & Registration System

This guide will walk you through the process of setting up the Custom Login & Registration System Starter project. By following these steps, you will clone the project, install dependencies, and configure Prisma for database management. Let's get started!

## Installation Steps

### Follow these steps to clone and set up starter project:

1. `Clone the project:` Open your terminal or command prompt and run the following command to clone the project repository:

```bash
git clone https://github.com/Mostafizur-Pro/Laravel_CustomLoginSystem.git Laravel_CustomLoginSystem
```

2. `Navigate into the project directory:` Use the cd command to navigate into the project directory:

```bash
cd Laravel_CustomLoginSystem
```

3. `Install project dependencies:` Next, install the project dependencies by running the following command:

```bash
composer install

```

`Install NPM (Node.js) Dependencies:`

```bash
npm install
```

or if you prefer using Yarn:

```bash
yarn install
```

4. `Copy .env File:`

```bash
cp .env.example .env
```

5. `Generate an Application Key:`

```bash
php artisan key:generate

```

6. `Configure Database:`

```bash
http://localhost/phpmyadmin/
```

7. `Migrate and Seed the Database (Optional):`

```bash
php artisan migrate
```

8. `Start the Development Server:`

```bash
php artisan serve
```

9. `Access Your Application:`

```bash
http://127.0.0.1:8000
```
