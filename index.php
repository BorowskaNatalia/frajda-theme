<?php
get_header();
?>

<main id="main-content" tabindex="-1" class="site-main">

<section class="hero">
  <div class="hero-wrapper">
    <div class="hero-textbox">
      <h1>Stajnia Frajda</h1>
      <div class="hero-row">
         <p>Miejsce stworzone dla koni i ludzi.</p>
         <a href="#o-nas" class="btn btn-orange">O NAS</a>
      </div>
    </div>
  </div>
</section>

<section id="o-nas" class="about-section">
  <div class="about-wrapper">
    <div class="about-text">
      <span class="section-label">Pasja do koni</span>
      <h2>Twój azyl na świeżym powietrzu</h2>
      <p>
        Stajnia Frajda to wyjątkowe miejsce stworzone z pasji do koni i natury. Oferujemy jazdę konną dla dzieci, młodzieży i dorosłych – zarówno rekreacyjnie, jak i sportowo.
Naszym celem jest budowanie relacji człowieka z koniem w spokojnej, życzliwej atmosferze. Wśród zieleni i ciszy możesz poczuć prawdziwą frajdę z obcowania z końmi – niezależnie od poziomu zaawansowania.
      </p>
    </div>
    <div class="about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/src/onas.jpg" alt="Koń przy stajni" loading="lazy">
    </div>
  </div>
</section>

<section class="services-section">
  <div class="services-wrapper">
    <h2 class="section-title">Nasza oferta</h2>
    <div class="services-grid">
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/treningi.jpg" alt="Jazda konna" loading="lazy">
        <h3>Jazda konna</h3>
        <p>Dla początkujących i zaawansowanych.</p>
      </div>
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/pensjonat.jpg" alt="Pensjonat dla koni" loading="lazy">
        <h3>Pensjonat</h3>
        <p>Bezpieczny dom i opieka dla Twojego konia.</p>
      </div>
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/fetyny.jpg" alt="Hipoterapia" loading="lazy">
        <h3>Hipoterapia</h3>
        <p>Terapia wspierająca rozwój z udziałem koni.</p>
      </div>
    </div>
  </div>
</section>

<section id="kontakt" class="contact-section">
  <div class="contact-wrapper">
    <h2>Kontakt</h2>
    <p>Masz pytania lub chcesz umówić się na jazdę? Skontaktuj się z nami!</p>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" class="contact-form">
      <div>
        <label for="name">Imię i nazwisko</label>
        <input type="text" id="name" name="cf-name" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="cf-email" required>
      </div>
      <div>
        <label for="message">Wiadomość</label>
        <textarea id="message" name="cf-message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-orange">Wyślij</button>
    </form>
  </div>
</section>

</main>

<?php
get_footer();
?>
