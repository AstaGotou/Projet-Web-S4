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
  else if (score.value == '' || score.value == -1){
    alert('Veuillez entrer un score');
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

async function loadMangaReview () {

  const container = document.querySelector('section')
  const response = await fetch('../../api/mangas.php?id=' + getIdFromURL() + '&offset=' + counter);
  const reviews = await response.json()

  const reponsemax = await fetch('../../api/manga-comment.php?id=' + getIdFromURL());
  const max = await reponsemax.json()

  reviews.forEach((review) => {
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
                      <strong>${review.username}</strong>
                    </li>
                    <li>
                      ${review.date_publication}
                    </li>
                  </ul>
                </li>
                <li>
                  ${review.note}⭐️
                </li>
                <li>
                ${review.commentaire}
                </li>
              </ul>
          </li>
        </ul>
      </article>`
    );
  })
  counter += 5; // Mettre à jour le compteur pour la prochaine fois
  if(counter >= max) {
    button.classList.add('Bloc-Invisible');
  }
  console.log(reviews);
}

button.addEventListener('click', loadMangaReview)

window.addEventListener('load', loadMangaReview)
