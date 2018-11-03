<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# sunflower
Projeto destinado à criação de um novo site para o Centro Social Luterano Cantinho do Girassol.

# Sumário
* [Colaboradores](AUTHORS.md)


# Tecnologias

* [PHP 7.*](http://php.net/)
* [Laravel 5.7](https://laravel.com/docs/5.7) 
* [Bootstrap 4.*](https://getbootstrap.com/docs/4.1/getting-started/download/)
* [MySql 5.7](https://www.mysql.com/)
* [Composer](https://getcomposer.org/download/)
* [Git](https://git-scm.com/download/win)

# Instruções de instalação das dependências do projeto

* Navegue <b>pelo terminal do git</b> até a pasta que deseja colocar o projeto sunflower e execute os comandos abaixo ( Cada linha é um comando ) 

```
$ git clone https://github.com/cpa-bayarea/sunflower.git
$ cd sunflower
$ mv env-exemple.env .env
$ composer update
$ php artisan key:generate
$ php artisan serve
```

* O resultado esperado após a execução do ultimo comando é algo semelhante a <i><b>Laravel development server started: http://127.0.0.1:8000</b></i>

* Caso tenha exito nos passos descritos acima, o projeto já pode ser visualizado através link do ultimo comando Ex: <i><b>http://127.0.0.1:8000</b></i>
  

<h1>O tal do MVC...</h1>

* <b>Sunflower\resources\views\ </b> - Onde ficam as views do projeto -> FRONT END 

* <b>Sunflower\app\Http\Controllers\ </b> -> Onde ficam as controllers do projeto -> BACK END C

* <b>Sunflower\public\ </b> - onde ficam os arquivos .js .css imagens etc, e o bootstrap.

Autores [aqui](docs/AUTHORS.md) para visualizar.