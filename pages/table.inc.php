<?php
    $_table_langages = ["html", "php", "js"];
    $_table_country = ["fr", "us", "it"];

    // $_add_value = array_push($_table_langages, "Python");
    // Cette méthode ajoute l'élément à la fin du tableau
    
    // $_add_value = array_unshift($_table_langages, "Python");
    // Cette méthode ajoute l'élément au début du tableau
    
    // $_add_value = array_shift($_table_langages);

    // $_add_value = array_pop($_table_langages);

    $_langs = [];
    
    $_langs = array_merge($_table_langages, $_table_country);
    
    // var_dump($_langs);
    // print "Nombre ".count($_langs);
    /* for($_i = 0; $_i< count($_langs); $_i++){
        print "<li>".$_i." : ".$_langs[$_i]."</li>";
    } */
    /*$_i = 0;
    while($_i < count($_langs)){
        print "<li>".$_i." : ".$_langs[$_i]."</li>";
        $_i++;
    }*/

    // Tableau associatif
    /* 
    const User = ({
        nom : "Tom",
        pays : "It"
    })
    
    User : {
        "nom" : "String",
        "pays" : "String"
    }
    */
    const user = [
        "Nom" => "Ledorf",
        "Prenom"=>"Rasmus",
        "Date"=> 1994,
        "Contact"=> "l.rasmus@php.net"
    ];
    //print_r(user);

    //<a href ="mailto:l.rasmus@php.net">mail</a>
    foreach (user as $key => $value) {
        //condition
        $key !== "Contact" ? print "<li>".$key." ".$value."</li>":
        print '<li>'.$key.' <a href="mailto: '.$value.'">'.$value.'</a></li>';
    }
    //tableau multidimentionnel
    $_clients = [
        "ref_1"=>[
        "nom"=>"Ledorf",
        "prenom"=>"Rasmus"
        ],
        "ref_2"=>[
        "nom"=>"Eich",
        "prenom"=>"Brandan"
        ]
    ];

    // var_dump($_clients["ref_2"]);
    foreach ($_clients as $ref => $client){
        print "<li>Réf client : $ref</li>";
        print "<li>{$client["prenom"]} {$client["nom"]} </li>";
    }
?>