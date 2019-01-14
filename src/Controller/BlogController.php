<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BlogController
{
    public function index()
    {
        
        return new Response(
            '<html>
            <body>
                <h1>Bienvenue</h1>
                <a href="/blog">Blog</a>
                <a href="/admin"> Admin </a>
            </body></html>'
        );
    }
    public function blog(){
        $articles =["Im-Karen", "Je-suis-Karen", "Soy-Karen"];
        $i=0;
        return new Response(
            '<html><body><h1>Welcome to the blog </h1> 
            <a href="/blog/'.$articles[$i].'">'.$articles[$i].'</a>
            </body></html>'
        );
    }
    public function slug($slug){
        $text="Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.";
        return new Response(
            '<html><body><h1>Welcome to the article '.$slug.'</h1> <p>'.$text.'</p></body></html>'
        );
    }
}