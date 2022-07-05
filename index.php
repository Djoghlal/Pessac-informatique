<?php
  include_once('./includes/start.php');
  //include_once('./API/includes/loader.php');
  include_once('./includes/header.php');
?>
    
  <section class="section-tag">
    <p>Parain Informatique Pessac, à votre service dans le secteur de Pessac en Gironde</p>
  </section>

  <section class="section-about" id="about">
    <div class="container container-about">
      <h2><i class="far fa-address-card"></i> Qui sommes-nous ?</h2>
      <p>Pierre Parain, spécialisé dans les métiers de l'informatique, se met à votre service pour des prestations de dépannages, de ventes ou de formations. Déplacement limitée dans la zone de Pessac et alentours afin d'avoir des délais d'intervention à votre convenance.</p>
    </div>
  </section>

  <section class="section-service" id="services">
    <div class="container container-service">
      <h2>Des services pratiques <i class="fas fa-briefcase"></i></h2>
      <div class="service-list">

        <div class="service-card">
          <h3>Installation ordinateur</h3>
          <div class="separate"></div>
          <ul>
            <li>Suppression logiciel commerciaux</li>
            <li>Installation périphérique</li>
            <li>Installation antivirus, logiciels</li>
            <li>Installation système de cloud (option)</li>
          </ul>
        </div>

        <div class="service-card">
          <h3>Installation configuration éléments</h3>
          <div class="separate"></div>
          <ul>
            <li>Ajouter, changer un disque-dur</li>
            <li>Ajouter de la mémoire</li>
            <li>Installation lecteur graveur</li>
            <li>Autre...</li>
          </ul>
        </div>

        <div class="service-card">
          <h3>Installation de logiciels</h3>
          <div class="separate"></div>
          <ul>
            <li>Antivirus gratuit ou payant</li>
            <li>Pare-feu</li>
            <li>Traitement de texte</li>
            <li>Tableur</li>
            <li>Traitement de photo</li>
          </ul>
        </div>

        <div class="service-card">
          <h3>Réinstallation ordinateur</h3>
          <div class="separate"></div>
          <ul>
            <li>Windows 11</li>
            <li>Windows 10</li>
            <li>Windows 7</li>
            <li>Windows Vista</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="section-education" id="education">
    <div class="container container-education">
      <img src="./public/images/education.jpg" alt="Formations" />
      <article class="education-card">
        <h2>Des formations innovantes</h2>
        <p>Prenez l'initiative de devenir autonome parmis divers domaine. Il n'y a pas d'âge requis pour apprendre. Grâce à notre professionnalisme, vous pourrez devenir acteur de vos activités.</p>
      </article>
    </div>
  </section>

  <section class="section-contact" id="contact">
    <div class="container container-contact">
      <h2>Comment nous joindre ou nous trouver ?</h2>
      <div class="contact-card">
        <div class="contact-map">
          <iframe src="https://www.google.com/maps/d/embed?mid=1oly0BUrEpArJfy-rFuhupSxaoHlpZrM&hl=fr&ehbc=2E312F"></iframe>
        </div>
        <div class="contact-info">
          <ul>
            <li>
              <p><i class="fas fa-map-marked"></i></p>
              <p>Parain informatique <br /> 33 bis Avenue du Pontet <br /> 33600 PESSAC</p>
            </li>

            <li>
              <p><i class="fas fa-mobile-alt"></i></p>
              <p>06 89 55 67 07</p>
            </li>

            <li>
              <p><i class="fas fa-phone"></i></p>
              <p>09 81 81 51 64</p>
            </li>

            <li>
              <p><i class="fas fa-at"></i></p>
              <p>pierre.parain@gmail.com</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<?php
  include_once('./includes/footer.php');
  include_once('./includes/end.php');
?>

<script src="./public/js/script.js"></script>