<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFRICODE - Formation et projets informatiques</title>
  <meta name="description" content="AFRICODE accompagne les entreprises, etudiants et porteurs de projets dans la formation digitale et la realisation de solutions informatiques concretes.">
  <style>
    :root {
      --ink: #17202a;
      --muted: #657184;
      --line: #dce3eb;
      --paper: #f7fafc;
      --white: #ffffff;
      --green: #0f8b5f;
      --green-dark: #096245;
      --yellow: #f3b233;
      --red: #cf3f35;
      --blue: #2367c9;
      --shadow: 0 18px 45px rgba(23, 32, 42, 0.12);
      --radius: 8px;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      color: var(--ink);
      background: var(--paper);
      font-family: Inter, "Segoe UI", Arial, sans-serif;
      line-height: 1.6;
      overflow-x: hidden;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    a,
    button,
    input,
    select,
    textarea,
    .service-card,
    .project,
    .step,
    .track,
    .quote,
    .metric {
      position: relative;
      will-change: transform, box-shadow;
      transition: transform 180ms ease, box-shadow 180ms ease, filter 180ms ease;
    }

    a:active,
    button:active,
    input:active,
    select:active,
    textarea:active,
    .service-card:active,
    .project:active,
    .step:active,
    .track:active,
    .quote:active,
    .metric:active,
    .is-pressed {
      transform: scale(0.985);
      filter: brightness(0.98);
      box-shadow: inset 0 0 0 1px rgba(15, 139, 95, 0.12), 0 6px 18px rgba(23, 32, 42, 0.08);
    }

    .click-ripple {
      position: fixed;
      pointer-events: none;
      border-radius: 50%;
      background: rgba(15, 139, 95, 0.18);
      transform: translate(-50%, -50%) scale(0);
      animation: rippleSpread 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
      z-index: 9999;
    }

    @keyframes rippleSpread {
      0% {
        opacity: 0.35;
        transform: translate(-50%, -50%) scale(0);
      }
      100% {
        opacity: 0;
        transform: translate(-50%, -50%) scale(2.8);
      }
    }

    @media (prefers-reduced-motion: reduce) {
      html {
        scroll-behavior: auto;
      }

      *,
      *::before,
      *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
    }

    img {
      display: block;
      max-width: 100%;
    }

    button,
    input,
    select,
    textarea {
      font: inherit;
    }

    .container {
      width: min(1160px, calc(100% - 32px));
      margin: 0 auto;
    }

    .topbar {
      background: var(--ink);
      color: var(--white);
      font-size: 0.9rem;
    }

    .topbar .container {
      display: flex;
      gap: 18px;
      align-items: center;
      justify-content: space-between;
      padding: 9px 0;
      flex-wrap: wrap;
    }

    .topbar span {
      color: #d8e0e8;
    }

    .navbar {
      position: sticky;
      top: 0;
      z-index: 10;
      background: rgba(255, 255, 255, 0.94);
      border-bottom: 1px solid var(--line);
      backdrop-filter: blur(14px);
    }

    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-height: 74px;
      gap: 20px;
    }

    .brand-logo {
  width: 48px;
  height: 48px;
  object-fit: contain;
}
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 900;
      letter-spacing: 0;
    }

    .brand-mark {
      display: grid;
      place-items: center;
      width: 44px;
      height: 44px;
      color: var(--white);
      background: linear-gradient(135deg, var(--green), var(--blue));
      border-radius: var(--radius);
      font-weight: 900;
    }

    .brand small {
      display: block;
      color: var(--muted);
      font-size: 0.875rem;
      font-weight: 700;
      margin-top: -3px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 18px;
      color: #344255;
      font-weight: 700;
      font-size: 0.94rem;
    }

    .nav-links a:hover {
      color: var(--green);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 44px;
      padding: 0 18px;
      border: 1px solid transparent;
      border-radius: var(--radius);
      background: var(--green);
      color: var(--white);
      cursor: pointer;
      font-weight: 800;
      transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
    }

    .btn:hover {
      transform: translateY(-1px);
      background: var(--green-dark);
      box-shadow: 0 12px 24px rgba(15, 139, 95, 0.22);
    }

    .btn.secondary {
      background: var(--white);
      color: var(--ink);
      border-color: var(--line);
    }

    .btn.secondary:hover {
      background: #eef5f2;
      box-shadow: none;
    }

    .hero {
      position: relative;
      min-height: calc(100vh - 112px);
      display: flex;
      align-items: center;
      overflow: hidden;
      color: var(--white);
      background:
        linear-gradient(90deg, rgba(14, 28, 42, 0.92), rgba(14, 28, 42, 0.62), rgba(14, 28, 42, 0.18)),
        url("images/center and cover.avif") center/cover;
    }

    .hero-content {
      width: min(760px, 100%);
      padding: 92px 0 82px;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: #dff8ec;
      font-weight: 900;
      text-transform: uppercase;
      font-size: 0.79rem;
      letter-spacing: 0.08em;
    }

    .eyebrow::before {
      content: "";
      width: 34px;
      height: 3px;
      background: var(--yellow);
      border-radius: 999px;
    }

    h1,
    h2,
    h3,
    p {
      margin-top: 0;
    }

    h1 {
      margin: 18px 0 18px;
      font-size: clamp(2.5rem, 6vw, 5.6rem);
      line-height: 0.98;
      letter-spacing: 0;
    }

    .hero p {
      max-width: 680px;
      color: #eef6ff;
      font-size: clamp(1rem, 2vw, 1.25rem);
    }

    .hero-actions {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-top: 28px;
    }

    .hero-metrics {
      display: grid;
      grid-template-columns: repeat(3, minmax(120px, 1fr));
      gap: 12px;
      max-width: 680px;
      margin-top: 44px;
    }

    .metric {
      padding: 18px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.22);
      border-radius: var(--radius);
      backdrop-filter: blur(10px);
    }

    .metric strong {
      display: block;
      font-size: 1.7rem;
      line-height: 1;
    }

    .metric span {
      color: #dce9f2;
      font-size: 0.9rem;
    }

    section {
      padding: 84px 0;
    }

    .section-head {
      display: flex;
      justify-content: space-between;
      align-items: end;
      gap: 28px;
      margin-bottom: 32px;
    }

    .section-head h2 {
      max-width: 680px;
      margin-bottom: 0;
      font-size: clamp(2rem, 4vw, 3.2rem);
      line-height: 1.08;
      letter-spacing: 0;
    }

    .section-head p {
      max-width: 390px;
      color: var(--muted);
      margin-bottom: 0;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .service-card {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 10px 28px rgba(23, 32, 42, 0.06);
    }

    .service-card img {
      width: 100%;
      height: 190px;
      object-fit: cover;
    }

    .service-card div {
      padding: 22px;
    }

    .service-card h3 {
      margin-bottom: 8px;
      font-size: 1.18rem;
    }

    .service-card p {
      color: var(--muted);
      margin-bottom: 16px;
    }

    .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      min-height: 28px;
      padding: 0 10px;
      border-radius: 999px;
      color: #214131;
      background: #e7f5ed;
      font-size: 0.82rem;
      font-weight: 800;
    }

    .band {
      background: var(--ink);
      color: var(--white);
    }

    .band .section-head p,
    .band .muted {
      color: #c8d3de;
    }

    .tracks {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 28px;
      align-items: start;
    }

    .track-list {
      display: grid;
      gap: 12px;
    }

    .track {
      display: grid;
      grid-template-columns: 44px 1fr;
      gap: 16px;
      padding: 18px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: var(--radius);
    }

    .track-icon {
      display: grid;
      place-items: center;
      width: 44px;
      height: 44px;
      border-radius: var(--radius);
      background: var(--yellow);
      color: #241b09;
      font-weight: 900;
    }

    .track h3 {
      margin-bottom: 4px;
    }

    .track p {
      color: #d7e0e9;
      margin-bottom: 0;
    }

    .program-panel {
      background: var(--white);
      color: var(--ink);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .program-panel img {
      height: 255px;
      width: 100%;
      object-fit: cover;
    }

    .program-panel-content {
      padding: 24px;
    }

    .program-panel-content ul {
      padding-left: 20px;
      margin: 12px 0 22px;
      color: var(--muted);
    }

    .process {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .step {
      position: relative;
      padding: 22px;
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
    }

    .step span {
      display: inline-grid;
      place-items: center;
      width: 34px;
      height: 34px;
      margin-bottom: 18px;
      border-radius: 50%;
      color: var(--white);
      background: var(--blue);
      font-weight: 900;
    }

    .step:nth-child(2) span {
      background: var(--green);
    }

    .step:nth-child(3) span {
      background: var(--yellow);
      color: #261b04;
    }

    .step:nth-child(4) span {
      background: var(--red);
    }

    .portfolio {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 18px;
    }

    .project {
      position: relative;
      min-height: 320px;
      border-radius: var(--radius);
      overflow: hidden;
      color: var(--white);
      background: #14202b;
    }

    .project img {
      width: 100%;
      height: 100%;
      min-height: 320px;
      object-fit: cover;
      opacity: 0.68;
    }

    .project-content {
      position: absolute;
      inset: auto 0 0 0;
      padding: 24px;
      background: linear-gradient(0deg, rgba(12, 20, 28, 0.94), rgba(12, 20, 28, 0));
    }

    .project-content p {
      color: #d9e5ee;
      margin-bottom: 0;
    }

    .project-stack {
      display: grid;
      gap: 18px;
    }

    .project-stack .project {
      min-height: 151px;
    }

    .project-stack .project img {
      min-height: 151px;
    }

    .estimator-wrap {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 24px;
      align-items: start;
    }

    .estimator,
    .contact-card {
      padding: 26px;
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      box-shadow: 0 10px 28px rgba(23, 32, 42, 0.06);
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }

    .field {
      display: grid;
      gap: 7px;
    }

    .field.full {
      grid-column: 1 / -1;
    }

    label {
      color: #334154;
      font-weight: 800;
      font-size: 0.9rem;
    }

    input,
    select,
    textarea {
      width: 100%;
      border: 1px solid var(--line);
      border-radius: var(--radius);
      min-height: 46px;
      padding: 10px 12px;
      color: var(--ink);
      background: #fbfdff;
    }

    textarea {
      min-height: 118px;
      resize: vertical;
    }

    .estimate-result {
      display: grid;
      gap: 12px;
      margin-top: 18px;
      padding: 18px;
      background: #eef7f3;
      border: 1px solid #cfe9dc;
      border-radius: var(--radius);
    }

    .estimate-result strong {
      font-size: 1.65rem;
      color: var(--green-dark);
    }

    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .quote {
      padding: 22px;
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
    }

    .quote p {
      color: #3f4b59;
    }

    .quote strong {
      display: block;
      margin-top: 14px;
    }

    .cta {
      padding: 56px 0;
      color: var(--white);
      background: linear-gradient(135deg, var(--green-dark), #173147 68%, #1d4060);
    }

    .cta-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 24px;
    }

    .cta h2 {
      margin-bottom: 6px;
      font-size: clamp(1.8rem, 3vw, 2.8rem);
      line-height: 1.12;
    }

    .cta p {
      color: #dcecf4;
      margin-bottom: 0;
    }

    footer {
      padding: 42px 0;
      background: #0d141b;
      color: #c9d3dd;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.3fr 0.7fr 0.7fr;
      gap: 28px;
    }

    footer h3 {
      color: var(--white);
      margin-bottom: 10px;
    }

    footer a {
      display: block;
      margin-bottom: 8px;
      color: #c9d3dd;
    }

    .mobile-menu {
      display: none;
      border: 1px solid var(--line);
      border-radius: var(--radius);
      background: var(--white);
      width: 44px;
      height: 44px;
      cursor: pointer;
      font-weight: 900;
    }

    .toast {
      position: fixed;
      right: 18px;
      bottom: 18px;
      z-index: 20;
      display: none;
      max-width: 360px;
      padding: 16px 18px;
      background: var(--ink);
      color: var(--white);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .toast.show {
      display: block;
    }

    @media (max-width: 920px) {
      .nav-links {
        position: absolute;
        top: 74px;
        left: 0;
        right: 0;
        display: none;
        flex-direction: column;
        align-items: stretch;
        gap: 0;
        padding: 10px 16px 18px;
        background: var(--white);
        border-bottom: 1px solid var(--line);
      }

      .nav-links.open {
        display: flex;
      }

      .nav-links a,
      .nav-links .btn {
        width: 100%;
        justify-content: flex-start;
        padding: 12px 10px;
      }

      .mobile-menu {
        display: inline-grid;
        place-items: center;
      }

      .hero {
        min-height: auto;
      }

      .section-head,
      .tracks,
      .portfolio,
      .estimator-wrap,
      .cta-inner,
      .footer-grid {
        grid-template-columns: 1fr;
        flex-direction: column;
        align-items: start;
      }

      .services-grid,
      .process,
      .testimonial-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 640px) {
      .topbar .container {
        gap: 6px;
      }

      .brand small {
        display: none;
      }

      .hero-content {
        padding: 72px 0 54px;
      }

      .hero-metrics,
      .services-grid,
      .process,
      .testimonial-grid,
      .form-grid {
        grid-template-columns: 1fr;
      }

      section {
        padding: 62px 0;
      }

      .project,
      .project img,
      .project-stack .project,
      .project-stack .project img {
        min-height: 260px;
      }
    }
  </style>
</head>
<body>
  <div class="topbar">
    <div class="container">
      <span>Formation pratique, logiciels sur mesure et accompagnement digital</span>
      <span>WhatsApp: +243 82 76 28 142 | africode64@gmail.com</span>
    </div>
  </div>

  <header class="navbar">
    <div class="container nav-inner">
      <a class="brand" href="#accueil" aria-label="Accueil AFRICODE">
  <img class="brand-logo" src="static/logo AFRICODE.jpeg" alt="Logo AFRICODE">
  <span>AFRICODE<small>Projets, Formations et Services informatiques .</small></span>
</a>
      <button class="mobile-menu" id="menuButton" type="button" aria-label="Ouvrir le menu">=</button>
      <nav class="nav-links" id="navLinks" aria-label="Navigation principale">
        <a href="#services">Services</a>
        <a href="#formations">Formations</a>
        <a href="#projets">Projets</a>
        <a href="#devis">Devis</a>
        <a href="#contact" class="btn">Demarrer</a>
      </nav>
    </div>
  </header>

  <main id="accueil">
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <span class="eyebrow">Structure numerique africaine</span>
          <h1>AFRICODE</h1>
          <p>Nous formons les talents et construisons des solutions informatiques concretes: sites web, applications mobiles, logiciels desktop, plateformes de gestion, marketing digital et accompagnement de projets.</p>
          <div class="hero-actions">
            <a class="btn" href="#contact">Parler de mon projet</a>
            <a class="btn secondary" href="#formations">Voir les formations</a>
          </div>
          <div class="hero-metrics" aria-label="Indicateurs AFRICODE">
            <div class="metric"><strong>12+</strong><span>domaines de formation</span></div>
            <div class="metric"><strong>6</strong><span>types de solutions</span></div>
            <div class="metric"><strong>100%</strong><span>approche pratique</span></div>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="section-head">
          <h2>Des services informatiques utiles, livrables et adaptes au terrain.</h2>
          <p>Chaque offre peut etre personnalisee selon votre secteur: ecole, commerce, ONG, PME, administration, sante, evenementiel ou projet personnel.</p>
        </div>
        <div class="services-grid">
          <article class="service-card">
            <img src="images/tableau de bord web.avif" alt="Tableau de bord web sur ordinateur">
            <div>
              <h3>Creation de sites web</h3>
              <p>Sites vitrines, portails institutionnels, blogs professionnels, pages de vente et plateformes avec espace admin.</p>
              <div class="tags"><span class="tag">Responsive</span><span class="tag">SEO</span><span class="tag">Admin</span></div>
            </div>
          </article>
          <article class="service-card">
            <img src="images/application mobile.avif" alt="Application mobile sur smartphone">
            <div>
              <h3>Applications mobiles</h3>
              <p>Applications Android et hybrides pour inscription, vente, suivi client, reservation, e-learning et collecte de donnees.</p>
              <div class="tags"><span class="tag">Android</span><span class="tag">API</span><span class="tag">Cloud</span></div>
            </div>
          </article>
          <article class="service-card">
            <img src="images/analyse et graphique.avif" alt="Analyses et graphiques sur ecran">
            <div>
              <h3>Applications desktop</h3>
              <p>Logiciels de caisse, gestion scolaire, stock, facturation, bibliotheque, presence du personnel et rapports automatises.</p>
              <div class="tags"><span class="tag">Windows</span><span class="tag">Offline</span><span class="tag">Rapports</span></div>
            </div>
          </article>
          <article class="service-card">
            <img src="images/equipe en atelier.png" alt="Equipe en atelier de gestion de projet">
            <div>
              <h3>Gestion de projet</h3>
              <p>Planification, cahier des charges, budget, suivi agile, tableaux de bord et pilotage d'equipes techniques.</p>
              <div class="tags"><span class="tag">Agile</span><span class="tag">Scrum</span><span class="tag">Budget</span></div>
            </div>
          </article>
          <article class="service-card">
            <img src="images/stratégie marketing.avif" alt="Strategie marketing digital sur tableau">
            <div>
              <h3>Marketing digital</h3>
              <p>Identite numerique, campagnes reseaux sociaux, contenus, tunnels de conversion, publicite et analyse des resultats.</p>
              <div class="tags"><span class="tag">Social media</span><span class="tag">Ads</span><span class="tag">Branding</span></div>
            </div>
          </article>
          <article class="service-card">
            <img src="images/appratissage de la programmation.avif" alt="Apprentissage de la programmation sur ordinateur">
            <div>
              <h3>Conseil et transformation digitale</h3>
              <p>Audit, digitalisation des processus, bases de donnees, automatisation, securite de base et formation des equipes.</p>
              <div class="tags"><span class="tag">Audit</span><span class="tag">Donnees</span><span class="tag">Automatisation</span></div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="band" id="formations">
      <div class="container">
        <div class="section-head">
          <h2>Formations courtes, intensives et orientees realisation.</h2>
          <p>Les apprenants terminent avec un mini-projet ou un livrable presentable, pas seulement un certificat.</p>
        </div>
        <div class="tracks">
          <div class="track-list">
            <article class="track">
              <span class="track-icon">01</span>
              <div><h3>Programmation web</h3><p>HTML, CSS, JavaScript, React, Flask, API REST, bases de donnees et hebergement.</p></div>
            </article>
            <article class="track">
              <span class="track-icon">02</span>
              <div><h3>Programmation mobile</h3><p>Conception d'interfaces, logique applicative, connexion API, publication et maintenance.</p></div>
            </article>
            <article class="track">
              <span class="track-icon">03</span>
              <div><h3>Gestion de projet informatique</h3><p>Cadrage, user stories, planning, risques, budget, livraison et documentation.</p></div>
            </article>
            <article class="track">
              <span class="track-icon">04</span>
              <div><h3>Marketing digital et entrepreneuriat</h3><p>Positionnement, contenu, vente en ligne, publicite, mesure de performance et CRM.</p></div>
            </article>
            <article class="track">
              <span class="track-icon">05</span>
              <div><h3>Bureautique avancee et data</h3><p>Excel professionnel, tableaux de bord, collecte de donnees, nettoyage et visualisation.</p></div>
            </article>
          </div>
          <aside class="program-panel">
            <img src="images/groupe d'apprenant.avif" alt="Groupe d'apprenants autour d'un ordinateur">
            <div class="program-panel-content">
              <h3>Programme propose</h3>
              <p class="muted">Un format adaptable pour debutants, professionnels et equipes d'entreprise.</p>
              <ul>
                <li>Diagnostic du niveau et objectifs</li>
                <li>Modules pratiques avec exercices guides</li>
                <li>Projet final individuel ou en equipe</li>
                <li>Accompagnement apres formation</li>
              </ul>
              <a class="btn" href="#contact">Inscrire un apprenant</a>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-head">
          <h2>Notre methode pour transformer une idee en produit utilisable.</h2>
          <p>AFRICODE avance avec un processus simple pour reduire les malentendus et livrer vite quelque chose de testable.</p>
        </div>
        <div class="process">
          <article class="step"><span>1</span><h3>Ecoute</h3><p>Nous clarifions le besoin, les utilisateurs, les contraintes et les resultats attendus.</p></article>
          <article class="step"><span>2</span><h3>Prototype</h3><p>Nous dessinons les ecrans, le parcours et les donnees essentielles de la solution.</p></article>
          <article class="step"><span>3</span><h3>Developpement</h3><p>Nous construisons par modules afin de tester, corriger et valider progressivement.</p></article>
          <article class="step"><span>4</span><h3>Livraison</h3><p>Nous installons, formons les utilisateurs et prevoyons la maintenance.</p></article>
        </div>
      </div>
    </section>

    <section id="projets" class="band">
      <div class="container">
        <div class="section-head">
          <h2>Exemples de projets que nous pouvons realiser.</h2>
          <p>Ir Jonathan LENGWENE, developpeur du site.</p>
        </div>
        <div class="portfolio">
          <article class="project">
            <img src="images/équi travaillant sur une plateforme numérique.png" alt="équi travaillant sur une plateforme numérique">
            <div class="project-content">
              <h3>Plateforme de gestion scolaire</h3>
              <p>Inscriptions, paiements, presences, bulletins, espace parents et rapports administratifs.</p>
            </div>
          </article>
          <div class="project-stack">
            <article class="project">
              <img src="images/commerce electronique.png" alt="commerce electronique">
              <div class="project-content"><h3>Boutique en ligne</h3><p>Catalogue, commande, paiement mobile money et suivi client.</p></div>
            </article>
            <article class="project">
              <img src="images/tableau de bord analytique.avif" alt="tableau de bord analytique">
              <div class="project-content"><h3>Tableau de bord PME</h3><p>Ventes, stock, depenses, performance et export de rapports.</p></div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section id="devis">
      <div class="container">
        <div class="section-head">
          <h2>Estimez rapidement le type d'accompagnement necessaire.</h2>
          <p>Ce simulateur donne une orientation simple. Les montants exacts seront fixes apres analyse du cahier des charges.</p>
        </div>
        <div class="estimator-wrap">
          <aside class="estimator">
            <h3>Estimateur rapide</h3>
            <div class="form-grid">
              <div class="field full">
                <label for="projectType">Type de projet</label>
                <select id="projectType">
                  <option value="600">Site web vitrine</option>
                  <option value="1200">Application mobile</option>
                  <option value="1500">Application desktop</option>
                  <option value="900">Formation equipe</option>
                  <option value="750">Marketing digital</option>
                  <option value="750">Cybersécurité</option>
                </select>
              </div>
              <div class="field">
                <label for="complexity">Complexite</label>
                <select id="complexity">
                  <option value="1">Simple</option>
                  <option value="1.45">Standard</option>
                  <option value="2">Avancee</option>
                </select>
              </div>
              <div class="field">
                <label for="delay">Delai souhaite</label>
                <select id="delay">
                  <option value="1">Normal</option>
                  <option value="1.2">Rapide</option>
                  <option value="1.35">Urgent</option>
                </select>
              </div>
            </div>
            <div class="estimate-result" aria-live="polite">
              <span>Budget indicatif a partir de</span>
              <strong id="estimateAmount">$600</strong>
              <small id="estimateNote">Livraison estimee: 2 a 4 semaines selon le contenu.</small>
            </div>
          </aside>
          <div class="testimonial-grid">
            <article class="quote"><p>"Une approche directe: on apprend, on pratique et on repart avec un livrable."</p><strong>Formation web</strong></article>
            <article class="quote"><p>"Le cahier des charges devient clair avant de coder, ce qui evite beaucoup de pertes de temps."</p><strong>Projet logiciel</strong></article>
            <article class="quote"><p>"Les solutions proposees tiennent compte du contexte local: connexion, budget et usage reel."</p><strong>Accompagnement PME</strong></article>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="container cta-inner">
        <div>
          <h2>Une idee, une formation ou un logiciel a lancer ?</h2>
          <p>Envoyez votre besoin et AFRICODE vous aide a choisir la meilleure prochaine action.</p>
        </div>
        <a class="btn secondary" href="#contact">Contacter AFRICODE</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="section-head">
          <h2>Contactez AFRICODE</h2>
          <p>Remplissez ce formulaire local. Vous pourrez ensuite le connecter a un backend, WhatsApp, email ou base de donnees.</p>
        </div>
        <form class="contact-card" id="contactForm">
          <div class="form-grid">
            <div class="field">
              <label for="name">Nom complet</label>
              <input id="name" name="name" type="text" placeholder="Votre nom" required>
            </div>
            <div class="field">
              <label for="phone">Telephone / WhatsApp</label>
              <input id="phone" name="phone" type="tel" placeholder="+243 ..." required>
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" placeholder="exemple@email.com">
            </div>
            <div class="field">
              <label for="need">Besoin principal</label>
              <select id="need" name="need">
                <option>Creation de site web</option>
                <option>Application mobile</option>
                <option>Application desktop</option>
                <option>Formation</option>
                <option>Marketing digital</option>
                <option>Conseil informatique</option>
                <option>Cybersécurité</option>
              </select>
            </div>
            <div class="field full">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Decrivez votre projet ou votre besoin de formation..." required></textarea>
            </div>
          </div>
          <button class="btn" type="submit">Envoyer la demande</button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="container footer-grid">
      <div>
        <h3>AFRICODE</h3>
        <p>Structure de formation et de realisation de projets informatiques concrets pour les organisations, entrepreneurs et apprenants.</p>
      </div>
      <div>
        <h3>Liens</h3>
        <a href="#services">Services</a>
        <a href="#formations">Formations</a>
        <a href="#projets">Projets</a>
        <a href="#contact">Contact</a>
      </div>
      <div>
        <h3>Coordonnees</h3>
        <a href="tel:+243827628142">+243 849 516 298</a>
        <a href="mailto:africode64@gmail.com">africode64@gmail.com</a>
        <span>Kinshasa, RDC</span>
        <span>Ir Jonathan LENGWENE</span>
      </div>
    </div>
  </footer>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>

  <script>
    const menuButton = document.getElementById("menuButton");
    const navLinks = document.getElementById("navLinks");
    const projectType = document.getElementById("projectType");
    const complexity = document.getElementById("complexity");
    const delay = document.getElementById("delay");
    const estimateAmount = document.getElementById("estimateAmount");
    const estimateNote = document.getElementById("estimateNote");
    const contactForm = document.getElementById("contactForm");
    const toast = document.getElementById("toast");

    document.addEventListener("click", (event) => {
      const trigger = event.target.closest("a, button, input, select, textarea, .service-card, .project, .step, .track, .quote, .metric");
      if (!trigger) return;

      const rect = trigger.getBoundingClientRect();
      const ripple = document.createElement("span");
      ripple.className = "click-ripple";
      ripple.style.left = `${event.clientX}px`;
      ripple.style.top = `${event.clientY}px`;
      const size = Math.max(rect.width, rect.height) * 1.4;
      ripple.style.width = `${size}px`;
      ripple.style.height = `${size}px`;
      document.body.appendChild(ripple);

      trigger.classList.remove("is-pressed");
      void trigger.offsetWidth;
      trigger.classList.add("is-pressed");
      setTimeout(() => trigger.classList.remove("is-pressed"), 180);
      ripple.addEventListener("animationend", () => ripple.remove(), { once: true });
    });

    menuButton.addEventListener("click", () => {
      navLinks.classList.toggle("open");
      menuButton.textContent = navLinks.classList.contains("open") ? "x" : "=";
    });

    navLinks.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("open");
        menuButton.textContent = "=";
      });
    });

    function updateEstimate() {
      const base = Number(projectType.value);
      const multiplier = Number(complexity.value) * Number(delay.value);
      const amount = Math.round(base * multiplier / 50) * 50;
      const weeks = multiplier > 1.8 ? "4 a 8 semaines" : multiplier > 1.25 ? "3 a 6 semaines" : "2 a 4 semaines";
      estimateAmount.textContent = `$${amount.toLocaleString("fr-FR")}`;
      estimateNote.textContent = `Livraison estimee: ${weeks} selon le contenu.`;
    }

    [projectType, complexity, delay].forEach((field) => {
      field.addEventListener("change", updateEstimate);
    });

    contactForm.addEventListener("submit", async (event) => {
      event.preventDefault();
      const formData = new FormData(contactForm);
      const payload = Object.fromEntries(formData.entries());
      const name = payload.name || "";
      const need = payload.need || "";

      try {
        const response = await fetch("process_contact.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
          },
          body: JSON.stringify(payload)
        });

        const result = await response.json();
        toast.textContent = result.message || `Merci ${name}. Votre demande "${need}" est prete a etre connectee a votre email ou backend.`;
        toast.classList.add("show");

        if (result.success) {
          contactForm.reset();
        }
      } catch (error) {
        toast.textContent = "Une erreur est survenue lors de l'envoi de votre demande. Vérifiez votre configuration SQL Server.";
        toast.classList.add("show");
      }

      setTimeout(() => toast.classList.remove("show"), 5200);
    });

    updateEstimate();
  </script>
</body>
</html>
