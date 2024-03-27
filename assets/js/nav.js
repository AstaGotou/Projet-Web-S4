const boutonAnime = document.querySelector('#boutonAnime');
const boutonManga = document.querySelector('#boutonManga');
const boutonAutres = document.querySelector('#boutonAutres');
const boutonAide = document.querySelector('#boutonAide');
const boutonLangue = document.querySelector('#boutonLangue');
const boutonMenu = document.querySelector('#boutonMenu');
const closeMenu = document.querySelector('#closeMenu');

const blocAnime = document.querySelector('#bloc-Anime');
const blocManga = document.querySelector('#bloc-Manga');
const blocAutres = document.querySelector('#bloc-Autres');
const blocAide = document.querySelector('#bloc-Aide');
const blocLangue = document.querySelector('#bloc-Langue');
const blocMenu = document.querySelector('#bloc-Menu');

( () => {
   const age = 25;
   console.log(age);
})();

boutonAnime.addEventListener('click', function() {
    if (blocAnime.classList.contains('Bloc-Invisible')) {
        blocAnime.classList.remove('Bloc-Invisible');
        blocAnime.classList.add('Bloc-Visible');
        boutonAnime.classList.add('Background-Color1');
        if (boutonManga.classList.contains('Background-Color1')) {
            boutonManga.classList.remove('Background-Color1');
        }
        if (boutonAutres.classList.contains('Background-Color1')) {
            boutonAutres.classList.remove('Background-Color1');
        }
        if (boutonAide.classList.contains('Background-Color1')) {
            boutonAide.classList.remove('Background-Color1');
        }
        if (boutonLangue.classList.contains('Background-Color1')) {
            boutonLangue.classList.remove('Background-Color1');
        }
        if (blocManga.classList.contains('Bloc-Visible')) {
            blocManga.classList.remove('Bloc-Visible');
            blocManga.classList.add('Bloc-Invisible');
        }
        if (blocAutres.classList.contains('Bloc-Visible')) {
            blocAutres.classList.remove('Bloc-Visible');
            blocAutres.classList.add('Bloc-Invisible');
        }
        if (blocAide.classList.contains('Bloc-Visible')) {
            blocAide.classList.remove('Bloc-Visible');
            blocAide.classList.add('Bloc-Invisible');
        }
        if (blocLangue.classList.contains('Bloc-Visible')) {
            blocLangue.classList.remove('Bloc-Visible');
            blocLangue.classList.add('Bloc-Invisible');
        }
    } 
    else {
        blocAnime.classList.remove('Bloc-Visible');
        blocAnime.classList.add('Bloc-Invisible');
        boutonAnime.classList.remove('Background-Color1');
    }
}
);


boutonManga.addEventListener('click', function() {
    if (blocManga.classList.contains('Bloc-Invisible')) {
        blocManga.classList.remove('Bloc-Invisible');
        blocManga.classList.add('Bloc-Visible');
        boutonManga.classList.add('Background-Color1');
        if (boutonAnime.classList.contains('Background-Color1')) {
            boutonAnime.classList.remove('Background-Color1');
        }
        if (boutonAutres.classList.contains('Background-Color1')) {
            boutonAutres.classList.remove('Background-Color1');
        }
        if (boutonAide.classList.contains('Background-Color1')) {
            boutonAide.classList.remove('Background-Color1');
        }
        if (boutonLangue.classList.contains('Background-Color1')) {
            boutonLangue.classList.remove('Background-Color1');
        }
        if (blocAnime.classList.contains('Bloc-Visible')) {
            blocAnime.classList.remove('Bloc-Visible');
            blocAnime.classList.add('Bloc-Invisible');
        }
        if (blocAutres.classList.contains('Bloc-Visible')) {
            blocAutres.classList.remove('Bloc-Visible');
            blocAutres.classList.add('Bloc-Invisible'); 
        }
        if (blocAide.classList.contains('Bloc-Visible')) {
            blocAide.classList.remove('Bloc-Visible');
            blocAide.classList.add('Bloc-Invisible');
        }
        if (blocLangue.classList.contains('Bloc-Visible')) {
            blocLangue.classList.remove('Bloc-Visible');
            blocLangue.classList.add('Bloc-Invisible');
        }
    } 
    else {
        blocManga.classList.remove('Bloc-Visible');
        blocManga.classList.add('Bloc-Invisible');
        boutonManga.classList.remove('Background-Color1');
    }
}
);

boutonAutres.addEventListener('click', function() {
    if (blocAutres.classList.contains('Bloc-Invisible')) {
        blocAutres.classList.remove('Bloc-Invisible');
        blocAutres.classList.add('Bloc-Visible');
        boutonAutres.classList.add('Background-Color1');
        if (boutonAnime.classList.contains('Background-Color1')) {
            boutonAnime.classList.remove('Background-Color1');
        }
        if (boutonManga.classList.contains('Background-Color1')) {
            boutonManga.classList.remove('Background-Color1');
        }
        if (boutonAide.classList.contains('Background-Color1')) {
            boutonAide.classList.remove('Background-Color1');
        }
        if (boutonLangue.classList.contains('Background-Color1')) { 
            boutonLangue.classList.remove('Background-Color1');
        }
        if (blocAnime.classList.contains('Bloc-Visible')) {
            blocAnime.classList.remove('Bloc-Visible');
            blocAnime.classList.add('Bloc-Invisible');
        }
        if (blocManga.classList.contains('Bloc-Visible')) {
            blocManga.classList.remove('Bloc-Visible');
            blocManga.classList.add('Bloc-Invisible');
        }
        if (blocAide.classList.contains('Bloc-Visible')) {
            blocAide.classList.remove('Bloc-Visible');
            blocAide.classList.add('Bloc-Invisible');
        }
        if (blocLangue.classList.contains('Bloc-Visible')) {
            blocLangue.classList.remove('Bloc-Visible');
            blocLangue.classList.add('Bloc-Invisible');
        }
    } 
    else {
        blocAutres.classList.remove('Bloc-Visible');
        blocAutres.classList.add('Bloc-Invisible');
        boutonAutres.classList.remove('Background-Color1');
    }
}
);

boutonAide.addEventListener('click', function() {
    if (blocAide.classList.contains('Bloc-Invisible')) {
        blocAide.classList.remove('Bloc-Invisible');
        blocAide.classList.add('Bloc-Visible');
        boutonAide.classList.add('Background-Color1');
        if (boutonAnime.classList.contains('Background-Color1')) {
            boutonAnime.classList.remove('Background-Color1');
        }
        if (boutonManga.classList.contains('Background-Color1')) {
            boutonManga.classList.remove('Background-Color1');
        }
        if (boutonAutres.classList.contains('Background-Color1')) {
            boutonAutres.classList.remove('Background-Color1');
        }
        if (boutonLangue.classList.contains('Background-Color1')) {
            boutonLangue.classList.remove('Background-Color1');
        }
        if (blocAnime.classList.contains('Bloc-Visible')) {
            blocAnime.classList.remove('Bloc-Visible');
            blocAnime.classList.add('Bloc-Invisible');
        }
        if (blocManga.classList.contains('Bloc-Visible')) {
            blocManga.classList.remove('Bloc-Visible');
            blocManga.classList.add('Bloc-Invisible');
        }
        if (blocAutres.classList.contains('Bloc-Visible')) {
            blocAutres.classList.remove('Bloc-Visible');
            blocAutres.classList.add('Bloc-Invisible');
        }
        if (blocLangue.classList.contains('Bloc-Visible')) {
            blocLangue.classList.remove('Bloc-Visible');
            blocLangue.classList.add('Bloc-Invisible');
        }
    } 
    else {
        blocAide.classList.remove('Bloc-Visible');
        blocAide.classList.add('Bloc-Invisible');
        boutonAide.classList.remove('Background-Color1');
    }
}
);

boutonLangue.addEventListener('click', function() {
    if (blocLangue.classList.contains('Bloc-Invisible')) {
        blocLangue.classList.remove('Bloc-Invisible');
        blocLangue.classList.add('Bloc-Visible');
        boutonLangue.classList.add('Background-Color1');
        if (boutonAnime.classList.contains('Background-Color1')) {
            boutonAnime.classList.remove('Background-Color1');
        }
        if (boutonManga.classList.contains('Background-Color1')) {
            boutonManga.classList.remove('Background-Color1');
        }
        if (boutonAutres.classList.contains('Background-Color1')) {
            boutonAutres.classList.remove('Background-Color1');
        }
        if (boutonAide.classList.contains('Background-Color1')) {
            boutonAide.classList.remove('Background-Color1');
        }
        if (blocAnime.classList.contains('Bloc-Visible')) {
            blocAnime.classList.remove('Bloc-Visible');
            blocAnime.classList.add('Bloc-Invisible');
        }
        if (blocManga.classList.contains('Bloc-Visible')) {
            blocManga.classList.remove('Bloc-Visible');
            blocManga.classList.add('Bloc-Invisible');
        }
        if (blocAutres.classList.contains('Bloc-Visible')) {
            blocAutres.classList.remove('Bloc-Visible');
            blocAutres.classList.add('Bloc-Invisible');
        }
        if (blocAide.classList.contains('Bloc-Visible')) {
            blocAide.classList.remove('Bloc-Visible');
            blocAide.classList.add('Bloc-Invisible');
        }
    } 
    else {
        blocLangue.classList.remove('Bloc-Visible');
        blocLangue.classList.add('Bloc-Invisible');
        boutonLangue.classList.remove('Background-Color1');
    }
}
);

boutonMenu.addEventListener('click', function() {
    if (blocMenu.classList.contains('Bloc-Invisible')) {
        blocMenu.classList.remove('Bloc-Invisible');
        blocMenu.classList.add('Bloc-Visible');
    } 
    else {
        blocMenu.classList.remove('Bloc-Visible');
        blocMenu.classList.add('Bloc-Invisible');
    }
}
);

closeMenu.addEventListener('click', function() {
    blocMenu.classList.remove('Bloc-Visible');
    blocMenu.classList.add('Bloc-Invisible');
}
);