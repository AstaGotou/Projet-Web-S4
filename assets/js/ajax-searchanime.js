let counter = 0;
const button = document.querySelector('#seeMore');

function getNameFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    const name = urlParams.get('name');
    return name;
}

async function loadAnimeSearch () {

    const container = document.querySelector('section')
    if (getNameFromURL() != null) {
        console.log(getNameFromURL());
        const response = await fetch('../../api/search-animes.php?name=' + getNameFromURL());
        const liste = await response.json()
        for (let i = counter; i < counter + 5; i++) {
            if (i >= liste.length) {
                button.classList.add('Bloc-Invisible');
                break; // Sortir de la boucle si nous avons atteint la fin des avis
            }
            container.insertAdjacentHTML(
            'beforeend',
            `<a href="anime.php?id=${liste[i].id}">
                <article>
                        <img src="../assets/img/poster/anime/${liste[i].chemin_photo}" alt="poster">
                        <p><strong>${liste[i].titre}</strong></p>
                </article>
            </a>`
            );
        }
        counter += 5; // Mettre à jour le compteur pour la prochaine fois
        if(counter >= liste.length) {
            button.classList.add('Bloc-Invisible');
        }
        console.log(liste);
    }
    else {
        button.classList.add('Bloc-Invisible');
    }
}

button.addEventListener('click', loadAnimeSearch)

window.addEventListener('load', loadAnimeSearch)