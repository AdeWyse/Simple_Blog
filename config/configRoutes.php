<?php
$routes = [

    '/home' => \Utfpr\Pratica\Controller\BlogHome::class,
    '/blog-home' => \Utfpr\Pratica\Controller\BlogHome::class,
    '/blog-post' => \Utfpr\Pratica\Controller\BlogPost::class,
    '/about' => \Utfpr\Pratica\Controller\About::class,
    '/contact' => \Utfpr\Pratica\Controller\Contact::class,
    '/login' => \Utfpr\Pratica\Controller\Login::class,
    '/messages' => \Utfpr\Pratica\Controller\ReadMessages::class,
    '/new-post' => \Utfpr\Pratica\Controller\CreatePost::class,
    '/menu' => \Utfpr\Pratica\Controller\Menu::class,
    '/logout' => \Utfpr\Pratica\Controller\Logout::class,
    '/pesquisa' => \Utfpr\Pratica\Controller\ResultadoPesquisa::class,
    '/excluir' => \Utfpr\Pratica\Controller\Exclusao::class,






];

return $routes;