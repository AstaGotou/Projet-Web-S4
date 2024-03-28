<nav> 
    <a id="logo" href="index.php?lang=<?= $lang ?>" title="Retour à la page d'accueil">
        <img src="assets/img/akatsuki.png" alt="Logo" aria-hidden="true"/>
    </a>
    <ul class="hide-ul-list">
        <li id="boutonAnime" aria-haspopup="true">
            Anime
            <ul id ="bloc-Anime" class = "Bloc-Invisible">
                <li>
                    <a href="searchanime.php?name="><?= $trad['nav']['anime']['Rechercher un anime'] ?> </a>
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
                    <a href="searchmanga.php?name="><?= $trad['nav']['manga']['Rechercher un manga'] ?></a>
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
        <li id = "boutonLangue" aria-haspopup="true">
            <?php if ($lang === 'en') {
                echo 'English';
            } else {
                echo 'Français';
            }
            ?>
            <ul id="bloc-Langue" class = "Bloc-Invisible">
                <?php if ($lang === 'en') { ?>
                    <li>
                        <a href="?lang=fr<?= (isset($mangaId)) ? '&id=' . $mangaId : '' ?><?= ((isset($animeId)) ? '&id=' . $animeId : '' )?><?=((isset($name)) ? '&name=' . $name : '&name=')?>">🇫🇷 Français</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="?lang=en<?= (isset($mangaId)) ? '&id=' . $mangaId : '' ?><?=((isset($animeId)) ? '&id=' . $animeId : '')?><?=((isset($name)) ? '&name=' . $name : '&name=')?>">🇬🇧 English</a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    </ul>
    <button id=boutonMenu aria-haspopup="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu</title><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
    </button>
    <div id = "bloc-Menu" class = "Bloc-Invisible">
        <button id = "closeMenu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>close-thick</title><path d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" /></svg>
        </button>
        <ul class = "hide-ul-list">
            <li> 
                Anime 
                <hr>
                <ul class = "hide-ul-list">
                    <li>
                        <a href="searchanime.php"><?= $trad['nav']['anime']['Rechercher un anime'] ?> </a>
                    </li>
                    <li>
                        <a href=""><?= $trad['nav']['anime']['Top anime'] ?></a>
                    </li>
                    <li>
                        <a href=""><?= $trad['nav']['anime']['Anime par saison'] ?></a>
                    </li>
                </ul>
            </li>
            <li> 
                Manga 
                <hr>
                <ul class = "hide-ul-list">
                    <li>
                        <a href="searchmanga.php"><?= $trad['nav']['manga']['Rechercher un manga'] ?></a>
                    </li>
                    <li>
                        <a href=""><?= $trad['nav']['manga']['Top manga'] ?></a>
                    </li>
                </ul>
            </li>
            <li> 
                <?= $trad['nav']['autres']['Label'] ?>
                <hr> 
                <ul class = "hide-ul-list">
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
            <li> 
                <?= $trad['nav']['aide']['Label'] ?> 
                <hr>
                <ul class = "hide-ul-list">
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
            <li>
                <?= $trad ['nav']['menu']['Changer la langue'] ?>
                <hr>
                <ul class = "hide-ul-list">
                    <?php if ($lang === 'en') { ?>
                        <li>
                            <a href="?lang=fr<?= (isset($mangaId)) ? '&id=' . $mangaId : '' ?><?= ((isset($animeId)) ? '&id=' . $animeId : '' )?><?=((isset($name)) ? '&name=' . $name : '&name=')?>">🇫🇷 Français</a>
                        </li>
                    <?php } else { ?>
                        <li>
                        <a href="?lang=en<?= (isset($mangaId)) ? '&id=' . $mangaId : '' ?><?= ((isset($animeId)) ? '&id=' . $animeId : '' )?><?=((isset($name)) ? '&name=' . $name : '&name=')?>">🇬🇧 English</a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>   