let counter = 0;
const button = document.querySelector('#seeMore');
const form = document.querySelector('form');
const username = document.querySelector('#username');
const message = document.querySelector('#message');
const score = document.querySelector('#myinfo_score');


form.addEventListener('submit', (event) => {
  event.preventDefault();
  if (username.value == ''){
    alert('Veuillez entrer un pseudo non nul');
  }
  else if (message.value == ''){
    alert('Veuillez entrer un message non vide');
  }
  else if (score.value == ''){
    alert('Veuillez entrer un score non nul');
  }
  else{
    form.submit();
  }
});


function getIdFromURL() {
  const urlParams = new URLSearchParams(window.location.search);
  const id = urlParams.get('id');
  return id;
}

async function loadAnimeReview () {

  const container = document.querySelector('section')
  const response = await fetch('../../api/animes.php?id=' + getIdFromURL());
  const reviews = await response.json()


  for (let i = counter; i < counter + 5; i++) {
    if (i >= reviews.length) {
      button.classList.add('Bloc-Invisible');
      break; // Sortir de la boucle si nous avons atteint la fin des avis
    }
    container.insertAdjacentHTML(
      'beforeend',
      `<article>
        <ul>
          <li>
            <img src="../assets/img/avatar.png" alt="avatar">
          </li>
          <li>
              <ul>
                <li>
                  <ul>
                    <li>
                      <strong>${reviews[i].username}</strong>
                    </li>
                    <li>
                      ${reviews[i].date_publication}
                    </li>
                  </ul>
                </li>
                <li>
                  ${reviews[i].note}⭐️
                </li>
                <li>
                ${reviews[i].commentaire}
                </li>
              </ul>
          </li>
        </ul>
      </article>`
    );
  }
  counter += 5; // Mettre à jour le compteur pour la prochaine fois
  if(counter >= reviews.length) {
    button.classList.add('Bloc-Invisible');
  }
  console.log(reviews);
}

button.addEventListener('click', loadAnimeReview)

window.addEventListener('load', loadAnimeReview)
