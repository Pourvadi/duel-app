# Posts and Challenges API

This is a simple Laravel API project for user registration, login, managing posts, and adding challenges to posts.

---

## Requirements

- PHP >= 8.0  
- Laravel >= 9.x  
- Database (MySQL, SQLite, etc.)  
- Composer  

---

## API Endpoints for Testing

### Public Endpoints (No Auth)

| HTTP Method | URL           | Description             |
|-------------|---------------|-------------------------|
| POST        | /register     | Register a new user      |
| POST        | /login        | Login and get access token |

---

### Protected Endpoints (Require Auth Token in header: `Authorization: Bearer <token>`)

| HTTP Method  | URL                          | Description                          |
|--------------|------------------------------|------------------------------------|
| GET          | /posts                       | Get list of all posts               |
| POST         | /posts                       | Create a new post                   |
| GET          | /posts/{post_id}             | Get details of a specific post      |
| PUT / PATCH  | /posts/{post_id}             | Update a post (only by owner)        |
| DELETE       | /posts/{post_id}             | Delete a post (only by owner)        |
| POST         | /posts/{post_id}/challenges  | Add a challenge to a specific post  |

---

### Example of URLs:

- `POST http://localhost:8000/api/register`
- `POST http://localhost:8000/api/login`
- `GET  http://localhost:8000/api/posts`
- `POST http://localhost:8000/api/posts`
- `GET  http://localhost:8000/api/posts/5`
- `PUT  http://localhost:8000/api/posts/5`
- `DELETE http://localhost:8000/api/posts/5`
- `POST http://localhost:8000/api/posts/5/challenges`

---

### Notes:

- Replace `localhost:8000` with your actual app domain and port.
- `{post_id}` should be replaced with the actual ID of the post you want to access or modify.


## Installation

1. Clone the repository:

```bash
git clone 
cd 
composer install
php artisan migrate
php artisan serve

