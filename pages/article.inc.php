<?php
    $articles = [
            [
                "title"=>"Php and POO",
                "content"=>"La programmation orientée objet (POO) est devenue indispensable, oui, mais pourquoi ? Parce qu'elle permet une meilleure organisation de vos projets, facilite la maintenance de votre code, et offre une grande souplesse pour faire évoluer votre logiciel sans avoir à tout réécrire",
                "link"=>"Info article",
                "url"=> "https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306872-decouvrez-les-objets-et-les-classes"
            ],   
            [
                "title"=>"Php and Laravel",
                "content"=>"Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub",
                "link"=>"Info article",
                "url"=> "https://fr.wikipedia.org/wiki/Laravel"
            ],
            [
                "title"=>"Js and node",
                "content"=>"Node.js est une plateforme logicielle libre en JavaScript, orientée vers les applications réseau évènementielles hautement concurrentes qui doivent pouvoir monter en charge.",
                "link"=>"Info article",
                "url"=> "https://fr.wikipedia.org/wiki/Node.js"
            ],
        ];

        // template
?>
<?php
    foreach($articles as $ref):
?>
    <ul>
        <li>
            <h2><?= $ref['title'] ?></h2>
        </li>
        <li>
            <p>
                <?= $ref['content'] ?>
            </p>
        </li>
        <li>
            <p>
                <a href="<?= $ref['url'] ?>" target="blank">
                    <?= $ref['link'] ?>
                </a>
            </p>
        </li>
    </ul>
<?php
endforeach;
?>