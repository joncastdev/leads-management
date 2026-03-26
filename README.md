<h1 align="center">
  <br>
  <a href="https://sistemaspymesjc.blogspot.com/p/trabaja-con-nosotros.html">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj80lJ2YL2GVpJi0J9bSBGXtwbjx-JXLjA63ZLH5lRzxjuwxYHhXzsKpTU8rjLiAQPq07prlMOiW7c8XKh3Klv91Hf_CM9e8wpuHg7EiqZYNW6utWYKogRHdFTtUnsd4_CAKpMauAPWYMY5kzb18RZgrKzEUs4jgd7g4gJ807oqt5mGhaM2aSxw07wYV3w/s320/foroworkers_logo.png" alt="Foroworkers" width="150">
  </a>
  <br>
  Foroworkers
  <br>
</h1>

<br>

<h4 align="center">
  A powerful Open Source Business Forum that can be installed on your server. 
</h4>

<p align="center">
  <img alt="GitHub" src="https://img.shields.io/github/license/foroworkers/foroworkers?style=for-the-badge">
  <img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/foroworkers/foroworkers?style=for-the-badge">
  <img alt="GitHub All Releases" src="https://img.shields.io/github/downloads/foroworkers/Foroworkers/total?style=for-the-badge">
  <a href="https://discord.gg/ntpz4aRHHy">
    <img alt="Chat On Discord" src="https://img.shields.io/badge/chat-on%20discord-7289da?style=for-the-badge&logo=discord&logoColor=white">
  </a>
</p>

<p align="center">
  <a href="#about">About</a> •
  <a href="#features">Features</a> •
  <a href="#setup">Setup</a> •
  <a href="#installation">Installation</a> •
  <a href="#access"> Access</a> •
   <a href="#support"> Support</a> •
  <a href="#donations"> Donations</a> •
</p>

![screenshot](screenshot.png)

## About
A powerful Open Source Business Forum that can be installed on your server.Open source Laravel Forum

## Starting

_These instructions will allow you to get a copy of the project running on your local machine for development and testing purposes._

## Demo  

* [Install Project ](https://www.youtube.com/watch?v=U1zIbFJqXHU)


## Setup

- PHP 8.3 >=
- PostgreSQL (Or MySQL)
- [Composer](https://getcomposer.org/)

## Additional details on dependencies

Assuming you're running Ubuntu, and then install all dependencies from the following list:

sudo apt-get install php8.3 php8.3-pgsql php8.3-mysql php8.3-intl php8.3-json php8.3-mbstring

## Installation

The following steps are meant to be used on a development server.

- Clone Project

```bash
$ git clone https://github.com/foroworkers/foroworkers.git
``` 

- Pull Project Dev Branch

```bash
$ git pull origin dev
``` 
- Navigate to the root of the Laravel project

```bash
$ cd foroworkers
``` 
- Setup vendor libraries 

```bash
$ composer install
```

- Setup .env file and create database
- Avoid changing the author data as this may cause problems when running the project.

- Copy .env.example config and generate Key project 

```bash
$ cp .env.example .env
``` 
```bash
$ php artisan key:generate
``` 

```bash
First Step Create New Database Example: foroworkers

APP_LOCALE=en
PAYPAL_EMAIL=yourpaypalemail
APP_ENDPOINT=https://sistemaspymesjc.blogspot.com/p/trabaja-con-nosotros.html
APP_ENDPOINT_LOCAL=
APP_AUTHOR=jonathancastro
APP_EMAIL=sistemaspymesjc@gmail.com
APP_COPYRIGHT=sistemaspymesjc
APP_DONATE=https://www.paypal.com/paypalme/programadorjonathan
APP_PHONE=5804241666224

database connection

DB_DATABASE=foroworkers
DB_USERNAME=your_username
DB_PASSWORD=your_password

for sending emails

MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=
```

```bash
$ php artisan migrate:fresh --seed
```
```bash
$ php artisan storage:link
```
```bash
$ php artisan optimize:clear
```
- Run server

```bash
$ php artisan serve
```


## Access:

_Admin: admin@gmail.com
_Pass: Test1234

_User: user@gmail.com
_Pass: Test1234

## Technologies 🛠️

* [Laravel 12](https://laravel.com/docs/12.x)
* [Email Tool](https://mailtrap.io?ref=jonathan61)  
* [Hosting Tool](https://namecheap.pxf.io/rnOVB5) 


## Courses :movie_camera: 

* [Udemy](https://www.udemy.com/user/jonathan-castro-33/)    

## Author ✒️

* **Jonathan Castro** - *Web Developer* - [jonathancastrodeveloper](https://github.com/jonathancastroccs)


## Support

_sistemaspymesjc@gmail.com_

* If you would like a business forum with many extra features, please contact us with your requirements and budget. Thank you.

## Donations

* [Paypal](https://www.paypal.com/paypalme/programadorjonathan) - Thank you very much for your contribution.

* [Ko-Fi](https://ko-fi.com/foroworkers) - Thank you very much for your contribution.

* [Patreon](https://www.patreon.com/c/foroworkers) - Thank you very much for your contribution.



