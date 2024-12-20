<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refonte Tim - Maisonneuve</title>
  <link rel="stylesheet" href="CSS/normalize.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <nav>
    <a href="index.htm">Maisonneuve</a>
    <div class="nav-droite">
      <a href="stages.html">Stages</a>
      <a href="cours.html">Cours</a>
      <a href="enseignants.html">Professeurs</a>
      <a href="projet.html">Projets</a>
    </div>
  </nav>

  <header>
    <div class="titre-principal">Où la création commence *</div>
  </header>

  <div class="APropos arriere-plan-bleu">
    <div class="contenu-about">
      <div class="image-apropos">
        <img src="images/Apropos.jpg" alt="À propos">
      </div>
      <div class="about-contenu">
        <h2>À propos</h2>
        <p>Cette formation de trois ans prépare les étudiants à relever les défis du secteur technologique et créatif en
          constante
          évolution. Si l'apprentissage des compétences suivantes vous intéresse, vous vous trouvez au bon programme!
        </p>
        <div class="info-additionnel">
          <h3>Conception graphique</h3>
          <h3>Programmation et développement web</h3>
          <h3>Production audiovisuelle</h3>
          <h3>Gestion de projet multimédia</h3>
          <h3>Intégration et optimisation de solutions interactives</h3>
        </div>
      </div>
    </div>
  </div>

  <header>
    <div class="titre-principal">Explorez l'innovation numérique*</div>
  </header>

  <div class="conteneur-boutons">
    <a href="cours.html" class="bouton" id="jeu">
      <div class="bouton-image" style="background-image: url('images/jeu.jpg');"></div>
      <div class="bouton-title">Jeu</div>
    </a>
    <a href="cours.html" class="bouton" id="web">
      <div class="bouton-image" style="background-image: url('images/web.jpg');"></div>
      <div class="bouton-title">Web</div>
    </a>
    <a href="cours.html" class="bouton" id="conception-graphique">
      <div class="bouton-image" style="background-image: url('images/conceptionGraphique.jpg');"></div>
      <div class="bouton-title">Conception graphique</div>
    </a>
    <a href="cours.html" class="bouton" id="3D">
      <div class="bouton-image" style="background-image: url('images/3D.jpg');"></div>
      <div class="bouton-title">3D</div>
    </a>
    <a href="cours.html" class="bouton" id="projets">
      <div class="bouton-image" style="background-image: url('images/projets.jpg');"></div>
      <div class="bouton-title">Projets</div>
    </a>
  </div>

  <header>
    <div class="titre-principal">Nos professeurs</div>
  </header>

  <div class="contenu">
    <div class="card__contenu">
      <article class="card__article">
        <img src="images/3D.jpg" alt="image" class="card__img">

        <div class="card__data">
          <span class="card__description">Vancouver Mountains, Canada</span>
          <h2 class="card__title">Web</h2>
          <a href="#" class="card__bouton">En savoir plus</a>
        </div>
      </article>

      <article class="card__article">
        <img src="images/Apropos.jpg" alt="image" class="card__img">

        <div class="card__data">
          <span class="card__description">Poon Hill, Nepal</span>
          <h2 class="card__title">Jeu</h2>
          <a href="#" class="card__bouton">En savoir plus</a>
        </div>
      </article>

      <article class="card__article">
        <img src="images/Apropos.jpg" alt="image" class="card__img">

        <div class="card__data">
          <span class="card__description">Bojcin Forest, Serbia</span>
          <h2 class="card__title">Montage et vidéo</h2>
          <a href="#" class="card__bouton">En savoir plus</a>
        </div>
      </article>
      <article class="card__article">
        <img src="images/Apropos.jpg" alt="image" class="card__img">

        <div class="card__data">
          <span class="card__description">Bojcin Forest, Serbia</span>
          <h2 class="card__title">Montage et vidéo</h2>
          <a href="#" class="card__bouton">En savoir plus</a>
        </div>
      </article>
    </div>
  </div>

  <footer>
    <div class="partenaires">
      <h2>Nos partenaires</h2>
      <div class="partenaires-images">
        <img src="images/Beslogic.jpg" alt="Partenaire 1">
        <img src="images/Sonos.webp" alt="Partenaire 2">
        <img src="images/technomontreal-og.jpg" alt="Partenaire 3">
      </div>
    </div>

    <div class="footer-sections">
      <div class="footer-section">
        <h3>Nous retrouver</h3>
        <ul>
          <li>Instagram</li>
          <li>Facebook</li>
          <li>Twitter</li>
        </ul>
      </div>

      <div class="footer-section">
        <h3>Naviguer</h3>
        <ul>
          <li>Stages</li>
          <li>Professeurs</li>
          <li>Cours</li>
          <li>Projets</li>
        </ul>
      </div>

      <div class="footer-section">
        <h3>À propos</h3>
        <ul>
          <li>Collège de Maisonneuve</li>
          <li>3800 Sherbrooke St E, Montreal, Quebec H1X 2A2</li>
          <li>514 254 7131</li>
        </ul>
      </div>
    </div>

    <p>Crédits - Tous droits réservés à Alexander Rankov, Dominic Gibeau, Guillaume Ducharme-Vanier et Mathieu
      Croteau-Dufour © 2024</p>
  </footer>

</body>

</html>