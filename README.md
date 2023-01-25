<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a>
</p>

<h3 align="center">Laravel Restful API</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> A simple API which performs CRUD Operations.
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Testing](#testing)
- [Built Using](#built_using)
- [Authors](#authors)

## 🧐 About <a name = "about"></a>

Welcome to the Laravel App! This application is built using the Laravel framework and is designed to provide a simple and easy to use interface for managing data.

## Prerequisites <a name = "prerequisites"></a>
- PHP >= 7.3
- Composer
- MySQL or any other database management system

## Installation <a name = "installation"></a>
- Clone the repository: git clone https://github.com/collinsoden22/laravel-rest-api.git

- Navigate to the project directory: cd laravel-rest-api

- Install the dependencies: composer install

- Copy .env.example to .env and edit the database connection settings:
  -   DB_CONNECTION=mysql
  -   DB_HOST=127.0.0.1
  -   DB_PORT=3306
  -   DB_DATABASE=database_name 
  -   DB_USERNAME=database_user
  -   DB_PASSWORD=database_password

- Run the migrations: php artisan migrate


## 🎈 Usage <a name="usage"></a>

- Start the development server: php artisan serve

- Access the application in your browser at http://localhost:8000/api/


##  Testing <a name = "testing"></a>
  - Request
      Method: GET
      Name:   Fetch Users
      Desc:   This endpoint fetches all user data on the database.
      url:    http://127.0.0.1:8000/api/user/

  - Request
      Method: POST
      Name:   Create User
      Desc:   This endpoint creates a new user.
      url:    http://127.0.0.1:8000/api/create?name={Name}&email={Email}&password={Password}
      Query Params: name: {name}, email: {email}, password: {password}

  - Request
      Method: GET
      Name:   Fetch Users
      Desc:   This endpoint fetches all user data on the database.
      url:    http://127.0.0.1:8000/api/user/{id}

  - Request
      Method:       PUT
      Name:         Update User
      Desc:         This endpoint updates user data on the database.
      url:          http://127.0.0.1:8000/api/update?name={name}&email={email}&id={id}
      Query Params: name={Name}, email={email},id={id}

  - Request
      Method:       DELETE
      Name:         Delete User
      Desc:         This endpoint deletes user from the database.
      url:          http://127.0.0.1:8000/api/delete?id={id}
      Query Params: id={id}

## ⛏️ Built Using <a name = "built_using"></a>

- [Laravel](https://www.laravel.com/) - Framework

## ✍️ Authors <a name = "authors"></a>

- [@collinsoden22](https://github.com/collinsoden22) - Idea & Initial work

See also the list of [contributors](https://github.com/collinsoden22/laravel-rest-api/contributors) who participated in this project.