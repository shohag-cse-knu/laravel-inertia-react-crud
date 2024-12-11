# Laravel, Inertia, and React CRUD operation

Basic CRUD operation with Laravel Inertia and React JS.
## Project Details

- **GitHub Repository**: [https://github.com/shohag-cse-knu/laravel-inertia-react-crud.git](https://github.com/shohag-cse-knu/laravel-inertia-react-crud.git)

## Features

- **Posts**: Shows all Posts.
- **Create Post**: Adding post with title, and content.
- **Edit Post**: Updating post.
- **Delete Post**: Deleting a post.

## Prerequisites

- **Laravel**: 
- **PHP**:
- **MySQL**
- **Composer**: 
- **NodeJS**:

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/shohag-cse-knu/laravel-inertia-react-crud.git
````
### 2. Navigate to laravel-inertia-react-crud
```bash
cd laravel-inertia-react-crud
````
### 3. Composer Install
```bash
 composer require inertiajs/inertia-laravel
````
### 4. .env
```bash
cp .env.example .env
````
Create a Database and modify Database name, username and password in .env file.

### 5. Key Generate
```bash
php artisan key:generate
````
### 6. DB Migration
```bash
php artisan migrate
````
### 7. Symblolic Link
storage:link is used in Laravel to create a symbolic link from the public/storage directory to the storage/app/public directory.
```bash
php artisan storage:link
````
### 8. Install NodeJS
```bash
npm install
````
### 9. Run Laravel Project
```bash
php artisan serve
````
### 10. Run npm
```bash
npm run dev
````

## Technologies Used

- **Frontend**: ReactJS
- **Backend**: Laravel Inertia, MySql

## Contributing

To contribute:

1. Fork the repository.
2. Create a branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## Contact

For questions or suggestions, please contact:

- **Name**: Syfur Rahaman Shohag
- **Email**: [syfur.srs@gmail.com](mailto:syfur.srs@gmail.com)
- **GitHub**: [https://github.com/shohag-cse-knu](https://github.com/shohag-cse-knu)
