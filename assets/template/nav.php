<nav> 
    <!-- Menu gauche-->
    <div id="logo"> 
    <a href="" title="Retour à la page d'accueil">
            <img src="assets/img/akatsuki.png" alt="Logo" aria-hidden="true" height="60" width="80"/>
    </a>
    </div>
    <!---->
    <ul id="barre-navigation">
        <li id="boutonAnime" class = "" aria-haspopup="true">
            Anime
            <ul id="bloc-Anime" class = "Bloc-Invisible">
                <li>
                    <a href=""><?= $trad['nav']['anime']['Rechercher un anime'] ?> </a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['anime']['Top anime'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['anime']['Anime par saison'] ?></a>
                </li>
            </ul>
        </li>
        <li id="boutonManga" aria-haspopup="true">
            Manga
            <ul id="bloc-Manga" class = "Bloc-Invisible">
                <li>
                    <a href=""><?= $trad['nav']['manga']['Rechercher un manga'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['manga']['Top manga'] ?></a>
                </li>
            </ul>
        </li>
        <li id="boutonAutres" aria-haspopup="true">
            <?= $trad['nav']['autres']['Label'] ?>
            <ul id="bloc-Autres" class = "Bloc-Invisible">
                <li>
                    <a href=""><?= $trad['nav']['autres']['News'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['autres']['Characters'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['autres']['Support'] ?></a>
                </li>
            </ul>
        </li>
        <li id="boutonAide" aria-haspopup="true">
            <?= $trad['nav']['aide']['Label'] ?>
            <ul id="bloc-Aide" class = "Bloc-Invisible">
                <li>
                    <a href=""><?= $trad['nav']['aide']['A propos'] ?> </a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['aide']['Support'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['aide']['FAQ'] ?></a>
                </li>
                <li>
                    <a href=""><?= $trad['nav']['aide']['Support'] ?></a>
                </li>
            </ul>
        </li>
    </ul>
    <div id="boutonConnexion" aria-haspopup="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
        </svg>
        <ul id ="bloc-Connexion" class = "Bloc-Invisible">>
            <li>
                <a href=""><?= $trad['nav']['connexion']['Connexion'] ?></a>
            </li>
            <li>
                <a href=""><?= $trad['nav']['connexion']['Inscription'] ?></a>
            </li>
        </ul>
    </div>
</nav>   