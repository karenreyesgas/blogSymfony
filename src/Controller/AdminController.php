<?php
// src/Controller/AdminController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdminController
{
    public function index()
    {
        
        return new Response(
            '<html><body><h1>Bienvenue admin</h1> 
            <a href="/admin/blog">Blog </a></body></html>'
        );
    }
    public function blog(){
        $articles =["Im-Karen", "Je-suis-Karen", "Soy-Karen"];
        $i=0;
        $id=1;
        return new Response(
            '<html><body><h1>Welcome to the blog </h1> 
             '.$articles[$i].'<a href="/admin/blog/'.$id.'/edit"> Edit</a>
            </body></html>'
        );
    }
    
    public function edit($id){
        $articles =["Im-Karen", "Je-suis-Karen", "Soy-Karen"];
        $i=0;
        $text="Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.";
        return new Response(
            '<html><body>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <h1>Welcome to the article </h1> 
            <div id="msg"></div>    
            <form id="change">
                Title<input type="text" value="'.$id.'"/> 
                Text <textarea rows="4" cols="50">'.$text.'</textarea>
                <input type="submit" value="SEND">
                </form>
                <script>
                    $("#change").submit(function(event){
                        event.preventDefault();
                        var $form = $(this);

                        var $inputs = $form.find("input, select, button, textarea");
                        var serializedData = $form.serialize();
                        $inputs.prop("disabled", true);

                        request = $.ajax({
                            url: "/admin/blog/$id/edit",
                            type: "GET",
                            data: serializedData
                        });

                        request.done(function (response, textStatus, jqXHR){
                            $("#msg").html("Good");
                        });

                        request.fail(function (jqXHR, textStatus, errorThrown){
                            console.error(
                                "The following error occurred: "+
                                textStatus, errorThrown
                            );
                        });
                        request.always(function () {

                            $inputs.prop("disabled", false);
                        });

                    });
                    </script>
            </body></html>'
        );

    }
    
}