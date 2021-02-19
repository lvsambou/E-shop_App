<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function signIn(){
       return new Response("<h1>SIGN IN PAGE</h1>");
    }
    public function register()
    {
       return new Response("<h1>REGISTER PAGE</h1>");
    }
    public function userProfil()
    {
       return new Response("<h1>USER PROFIL PAGE</h1>");
    }
}