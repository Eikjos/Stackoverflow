<!DOCTYPE html>
<html lang = "fr">
    <head>
        <title>StackOverflow</title>
        <meta charset = "utf-8"/>
        <meta name = "viewport" content = "width=device-width"/>
        <link rel = "stylesheet" href = "CSS/accueil.css"/>
    </head>
    <body>
        <header>
            <h1>StackOverflow</h1>
            <nav> 
                <ul>
                    <li><a href = "#">Accueil</a></li>
                    <li id = "btn-connect"><a href ="#" >Se connecter</a></li>
                </ul>
            </nav>
        </header>
        <div class = "research-contains">
            <form action = "research.php" method = "GET">
                <h2>Une Question ?</h2>
                <input type = "text" name = "object" placeholder = "Une question ?"/>
                <div class = "research-box no-visibility">
                    <button><a  href =  "#">Poser une quesion</a></button>
                    <button><a href = "#">Besoin d'aide</a></button>
        </div>
    </body>
</html>