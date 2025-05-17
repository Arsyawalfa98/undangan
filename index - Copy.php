<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan Andi & Rani</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&display=swap');
    
    :root {
      --primary-color: #d4c9bf;
      --secondary-color: #f8f5f2;
      --accent-color: #a18a68;
      --text-color: #5c5248;
      --light-text: #8e8277;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--secondary-color);
      color: var(--text-color);
      line-height: 1.6;
      overflow-x: hidden;
    }
    
    /* Header Styles */
    header {
      height: 100vh;
      position: relative;
      background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 20px;
    }
    
    .header-content {
      max-width: 800px;
      width: 90%;
    }
    
    h1, h2, h3 {
      font-family: 'Playfair Display', serif;
    }
    
    header h1 {
      font-size: 3.5rem;
      margin-bottom: 10px;
    }
    
    header p.date {
      font-size: 1.5rem;
      margin-bottom: 30px;
    }
    
    .ornament {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 20px 0;
    }
    
    .ornament:before, .ornament:after {
      content: "";
      height: 1px;
      width: 100px;
      background: rgba(255, 255, 255, 0.7);
      margin: 0 15px;
    }
    
    .scroll-down {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
      cursor: pointer;
      color: white;
      font-size: 2rem;
      width: 50px;
      height: 50px;
      background-color: rgba(161, 138, 104, 0.5);
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 10;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0) translateX(-50%);
      }
      40% {
        transform: translateY(-20px) translateX(-50%);
      }
      60% {
        transform: translateY(-10px) translateX(-50%);
      }
    }
    
    /* Section Styles */
    .section {
      padding: 80px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .section-inner {
      max-width: 900px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }
    
    .section h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: var(--accent-color);
    }
    
    .section p {
      margin-bottom: 20px;
      font-size: 1.1rem;
      color: var(--light-text);
    }
    
    .section.bg-primary {
      background-color: var(--primary-color);
      color: white;
    }
    
    .section.bg-secondary {
      background-color: var(--secondary-color);
    }
    
    /* Couple Section */
    .couple-section {
      background-color: white;
    }
    
    .couple-photos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 40px 0;
      align-items: center;
    }
    
    .person {
      width: 280px;
      margin: 0 20px 30px;
    }
    
    .person img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid var(--primary-color);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .person h3 {
      font-size: 1.8rem;
      margin: 15px 0 5px;
      color: var(--accent-color);
    }
    
    .person p {
      font-size: 1rem;
      color: var(--light-text);
    }
    
    .heart-divider {
      font-size: 3rem;
      color: var(--accent-color);
      margin: 0 20px;
    }
    
    /* Events Section */
    .events {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-top: 40px;
    }
    
    .event-card {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .event-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .event-card i {
      font-size: 2rem;
      color: var(--accent-color);
      margin-bottom: 15px;
    }
    
    .event-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: var(--text-color);
    }
    
    /* Countdown Styles */
    .countdown {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin: 40px 0;
    }
    
    .countdown-item {
      background-color: white;
      border-radius: 10px;
      padding: 15px 25px;
      min-width: 100px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .countdown-item span {
      display: block;
    }
    
    .countdown-item .number {
      font-size: 2rem;
      font-weight: bold;
      color: var(--accent-color);
    }
    
    .countdown-item .label {
      font-size: 0.9rem;
      color: var(--light-text);
    }
    
    /* Gallery Styles */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }
    
    .gallery-item {
      height: 250px;
      overflow: hidden;
      border-radius: 10px;
      position: relative;
      cursor: pointer;
    }
    
    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    
    /* Location Styles */
    .map-container {
      margin-top: 40px;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* RSVP Styles */
    .rsvp-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 30px;
    }
    
    .btn {
      display: inline-block;
      padding: 12px 30px;
      background-color: var(--accent-color);
      color: white;
      text-decoration: none;
      border-radius: 50px;
      transition: all 0.3s ease;
      font-weight: 500;
      border: none;
      cursor: pointer;
    }
    
    .btn:hover {
      background-color: #8a7450;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    .btn i {
      margin-right: 8px;
    }
    
    /* Footer */
    footer {
      background-color: var(--primary-color);
      padding: 40px 20px;
      text-align: center;
      color: white;
    }
    
    footer p {
      margin-bottom: 20px;
    }
    
    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }
    
    .social-icons a {
      color: white;
      font-size: 1.5rem;
      transition: transform 0.3s ease;
    }
    
    .social-icons a:hover {
      transform: translateY(-5px);
    }
    
    /* Guest Welcome */
    .guest-welcome {
      font-size: 1.3rem;
      margin-bottom: 10px;
      font-weight: 500;
      color: var(--accent-color);
    }
    
    .guest-name {
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--accent-color);
      margin-bottom: 30px;
      font-family: 'Playfair Display', serif;
    }
    
    /* Animations */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 1s ease, transform 1s ease;
    }
    
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Floating hearts */
    .floating-hearts {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      pointer-events: none;
    }
    
    .heart {
      position: absolute;
      bottom: -100px;
      color: rgba(255, 255, 255, 0.5);
      animation: float-up 15s linear infinite;
    }
    
    @keyframes float-up {
      0% {
        transform: translateY(0) rotate(0);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 1;
      }
      100% {
        transform: translateY(-1200px) rotate(360deg);
        opacity: 0;
      }
    }
    
    /* Decorative elements */
    .decorative-flower {
      position: absolute;
      font-size: 3rem;
      color: rgba(161, 138, 104, 0.1);
      z-index: 1;
    }
    
    .flower-top-right {
      top: 20px;
      right: 20px;
    }
    
    .flower-bottom-left {
      bottom: 20px;
      left: 20px;
    }
    
    .rotate-element {
      animation: rotate 20s linear infinite;
    }
    
    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
    
    .float-element {
      animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
    
    /* Section divider */
    .section-divider {
      height: 50px;
      background: linear-gradient(to bottom right, transparent 49%, var(--primary-color) 50%, transparent 51%);
    }
    
    /* Glass effect */
    .glass-effect {
      position: relative;
    }
    
    .glass-effect::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(5px);
      z-index: 1;
      pointer-events: none;
    }
    
    /* Layer effect */
    .layer-effect {
      position: relative;
    }
    
    .header-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3);
      z-index: 1;
    }
    
    /* Music Control */
    .music-control {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 100;
      background: var(--accent-color);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 3px 10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    
    .music-control:hover {
      transform: scale(1.1);
    }
    
    .music-control i {
      color: white;
      font-size: 1.2rem;
    }
    
    /* Opening Animation */
    .opening {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: var(--primary-color);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      color: white;
      transition: transform 1s ease;
    }
    
    .opening.hidden {
      transform: translateY(-100%);
    }
    
    .opening h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    
    .opening p {
      margin-bottom: 30px;
      font-size: 1.1rem;
    }
    
    .envelope {
      font-size: 4rem;
      margin-bottom: 30px;
      animation: pulse 2s infinite ease-in-out;
    }
    
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
      header h1 {
        font-size: 2.5rem;
      }
      
      header p.date {
        font-size: 1.2rem;
      }
      
      .section h2 {
        font-size: 2rem;
      }
      
      .countdown-item {
        min-width: 80px;
        padding: 10px 15px;
      }
      
      .countdown-item .number {
        font-size: 1.5rem;
      }
      
      .events {
        gap: 20px;
      }
      
      .map-container {
        height: 300px;
      }
    }
    
    @media (max-width: 480px) {
      header h1 {
        font-size: 2rem;
      }
      
      .ornament:before, .ornament:after {
        width: 60px;
      }
      
      .section {
        padding: 60px 15px;
      }
      
      .countdown {
        gap: 10px;
      }
      
      .countdown-item {
        min-width: 65px;
        padding: 8px 12px;
      }
      
      .countdown-item .number {
        font-size: 1.2rem;
      }
      
      .gallery {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      }
      
      .gallery-item {
        height: 150px;
      }
    }
  </style>
</head>
<body>
  <!-- Opening Screen -->
  <div class="opening" id="opening">
    <div class="envelope float-element">
      <i class="fas fa-envelope-open-text"></i>
    </div>
    <h2>Undangan Pernikahan</h2>
    <p id="opening-guest">Kepada Yth. Bapak/Ibu/Saudara</p>
    <p id="opening-bold-guest" style="font-size: 1.5rem; font-weight: bold; margin-top: 5px; margin-bottom: 20px;"></p>
    <button class="btn tilt-element" id="open-invite">
      <i class="fas fa-envelope-open"></i> Buka Undangan
    </button>
  </div>

  <!-- Header Section -->
  <header id="home" class="layer-effect">
    <div class="header-overlay"></div>
    <div class="floating-hearts" id="floating-hearts"></div>
    <div class="header-content animate__animated animate__fadeIn">
      <h1 class="float-element">Imam & Zahra</h1>
      <div class="ornament">
        <i class="fas fa-heart"></i>
      </div>
      <p class="date animate__animated animate__fadeIn animate__delay-1s">17 Mei 2025</p>
      <p class="animate__animated animate__fadeIn animate__delay-1s">Kami berharap kehadiran Anda melengkapi kebahagiaan kami</p>
    </div>
    <div class="scroll-down" id="scroll-down">
      <i class="fas fa-chevron-down"></i>
    </div>
  </header>

  <!-- Welcome Section -->
  <section class="section bg-secondary glass-effect" id="welcome">
    <div class="decorative-flower flower-top-right rotate-element">
      <i class="fas fa-fan"></i>
    </div>
    <div class="section-inner">
      <div id="guest-name" class="guest-welcome fade-in">Kepada Yth. Bapak/Ibu/Saudara</div>
      <div id="guest-bold-name" class="guest-name fade-in"></div>
      <p class="fade-in">Dengan segala kerendahan hati dan rasa syukur atas Rahmat Tuhan Yang Maha Esa, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan kami:</p>
      <div id="countdown" class="countdown fade-in">
        <!-- Countdown will be populated by JS -->
      </div>
    </div>
    <div class="decorative-flower flower-bottom-left rotate-element">
      <i class="fas fa-fan"></i>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- Couple Section -->
  <section class="section couple-section glass-effect" id="couple">
    <div class="section-inner">
      <h2 class="fade-in">Mempelai</h2>
      <div class="couple-photos">
        <div class="person fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Andi">
          <h3>Andi Setiawan</h3>
          <p>Putra dari Bapak Bambang & Ibu Wati</p>
        </div>
        <div class="heart-divider fade-in">&</div>
        <div class="person fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1534751516642-a1af1ef26a56?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Rani">
          <h3>Rani Permata</h3>
          <p>Putri dari Bapak Dedi & Ibu Yuni</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- Events Section -->
  <section class="section bg-secondary glass-effect" id="events">
    <div class="section-inner">
      <h2 class="fade-in">Acara</h2>
      <div class="events">
        <div class="event-card fade-in tilt-element">
          <i class="fas fa-ring"></i>
          <h3>Akad Nikah</h3>
          <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
          <p><i class="far fa-clock"></i> 08:00 - 10:00 WIB</p>
          <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna Cempaka Putih, Jakarta</p>
        </div>
        <div class="event-card fade-in tilt-element">
          <i class="fas fa-glass-cheers"></i>
          <h3>Resepsi</h3>
          <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
          <p><i class="far fa-clock"></i> 11:00 - 14:00 WIB</p>
          <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna Cempaka Putih, Jakarta</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- Gallery Section -->
  <section class="section glass-effect" id="gallery">
    <div class="section-inner">
      <h2 class="fade-in">Galeri</h2>
      <p class="fade-in">Beberapa momen indah kami</p>
      <div class="gallery">
        <div class="gallery-item fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Foto 1">
        </div>
        <div class="gallery-item fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1519741347686-c1e0aadf4611?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Foto 2">
        </div>
        <div class="gallery-item fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Foto 3">
        </div>
        <div class="gallery-item fade-in tilt-element">
          <img src="https://images.unsplash.com/photo-1537907510278-e3c4a7f6cc18?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Foto 4">
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- Location Section -->
  <section class="section bg-secondary glass-effect" id="location">
    <div class="section-inner">
      <h2 class="fade-in">Lokasi</h2>
      <p class="fade-in">Gedung Serbaguna Cempaka Putih, Jakarta</p>
      <div class="map-container fade-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664669606474!2d106.87292231476863!3d-6.1701908955342285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9945e163f19!2sCempaka%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1619599382576!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="rsvp-buttons">
        <a href="https://maps.google.com/?q=gedung+serbaguna+cempaka+putih" target="_blank" class="btn fade-in tilt-element">
          <i class="fas fa-map-marker-alt"></i> Buka di Google Maps
        </a>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- RSVP Section -->
  <section class="section glass-effect" id="rsvp">
    <div class="section-inner">
      <h2 class="fade-in">Konfirmasi Kehadiran</h2>
      <p class="fade-in">Mohon konfirmasi kehadiran Anda sebelum 10 Mei 2025</p>
      <div class="rsvp-buttons">
        <a href="https://wa.me/6281234567890?text=Halo%2C+saya+akan+hadir+di+acara+Andi+dan+Rani" target="_blank" class="btn fade-in tilt-element">
          <i class="fab fa-whatsapp"></i> Konfirmasi via WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kami</p>
    <h3 class="float-element">Andi & Rani</h3>
    <div class="social-icons">
      <a href="#" class="tilt-element"><i class="fab fa-instagram"></i></a>
      <a href="#" class="tilt-element"><i class="fab fa-facebook"></i></a>
      <a href="#" class="tilt-element"><i class="fab fa-twitter"></i></a>
    </div>
  </footer>

  <!-- Music Control -->
  <div class="music-control tilt-element" id="music-control">
    <i class="fas fa-music"></i>
  </div>

  <!-- Music Player (YouTube Embed - hidden) -->
  <div style="display:none">
    <iframe id="youtube-player" width="0" height="0" src="https://www.youtube.com/embed/Trjrj_fQnIM?si=FC0wYhgEryNxVOVB&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>

  <script>
    // Immediately play the music when possible (works better in modern browsers)
    document.addEventListener('DOMContentLoaded', function() {
      // Load YouTube API immediately
      const tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      const firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
      // Add direct click handler to scroll arrow for better mobile compatibility
      document.querySelector('.scroll-down').onclick = function(e) {
        e.preventDefault();
        console.log("Direct scroll click");
        window.scrollTo({
          top: window.innerHeight,
          behavior: 'smooth'
        });
        return false;
      };
    });
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize AOS animation library
      AOS.init({
        duration: 1000,
        once: false,
        mirror: true
      });
      
      // Get guest name from URL path
      let guest = '';
      
      // Check URL patterns:
      // 1. Look for /guest=name pattern
      const path = window.location.pathname;
      
      // Check for /guest=something format
      if (path.includes('guest=')) {
        const guestMatch = path.match(/guest=([^\/&]+)/);
        if (guestMatch && guestMatch[1]) {
          guest = decodeURIComponent(guestMatch[1]);
        }
      } 
      // Check for /name format (last segment)
      else {
        const pathSegments = path.split('/').filter(segment => segment !== '');
        if (pathSegments.length > 0) {
          const lastSegment = pathSegments[pathSegments.length - 1];
          // Only use last segment if it's not "undangan" or similar known paths
          if (lastSegment !== 'undangan' && lastSegment !== 'index.php' && lastSegment !== 'index.html') {
            guest = decodeURIComponent(lastSegment);
          }
        }
      }
      
      // Check query string as fallback
      if (!guest) {
        const urlParams = new URLSearchParams(window.location.search);
        guest = urlParams.get('guest');
      }
      
      // Set guest name if found
      if (guest) {
        // Update the main content guest name
        document.getElementById('guest-name').textContent = `Kepada Yth. Bapak/Ibu/Saudara`;
        document.getElementById('guest-bold-name').textContent = `${guest}`;
        
        // Update the opening screen guest name
        document.getElementById('opening-guest').textContent = `Kepada Yth. Bapak/Ibu/Saudara`;
        document.getElementById('opening-bold-guest').textContent = `${guest}`;
        
        console.log("Guest name set to:", guest);
      } else {
        console.log("No guest name found in URL");
      }

      // Create floating hearts in header
      const floatingHeartsContainer = document.getElementById('floating-hearts');
      for (let i = 0; i < 20; i++) {
        const heart = document.createElement('div');
        heart.classList.add('heart');
        heart.innerHTML = '<i class="fas fa-heart"></i>';
        heart.style.left = `${Math.random() * 100}%`;
        heart.style.opacity = Math.random() * 0.5 + 0.3;
        heart.style.fontSize = `${Math.random() * 15 + 15}px`;
        heart.style.animationDuration = `${Math.random() * 15 + 10}s`;
        heart.style.animationDelay = `${Math.random() * 5}s`;
        floatingHeartsContainer.appendChild(heart);
      }

      // YouTube API
      let player;
      window.onYouTubeIframeAPIReady = function() {
        console.log("YouTube API ready");
        player = new YT.Player('youtube-player', {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        // Player is ready
        console.log("YouTube player ready");
        // Try to play automatically (browser might block this)
        event.target.playVideo();
      }
      
      function onPlayerStateChange(event) {
        console.log("Player state changed to:", event.data);
      }

      // Load YouTube API
      const tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      const firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // Opening animation
      const opening = document.getElementById('opening');
      const openInvite = document.getElementById('open-invite');
      const musicControl = document.getElementById('music-control');
      
      openInvite.addEventListener('click', function() {
        opening.classList.add('hidden');
        // Start playing YouTube video when opening invite
        setTimeout(function() {
          if (typeof YT !== 'undefined' && YT.loaded && player && player.playVideo) {
            player.playVideo();
            console.log("Attempting to play music");
          } else {
            console.log("YouTube API not ready yet, will retry");
            // If YT API not ready yet, try again after a longer delay
            setTimeout(function() {
              if (typeof YT !== 'undefined' && YT.loaded && player && player.playVideo) {
                player.playVideo();
                console.log("Retry: Attempting to play music");
              } else {
                console.log("Failed to initialize YouTube player after retry");
              }
            }, 3000);
          }
        }, 1000);
      });
      
      // Music control
      let isPlaying = true;
      
      musicControl.addEventListener('click', function() {
        if (typeof YT !== 'undefined' && YT.loaded && player) {
          if (isPlaying) {
            player.pauseVideo();
            musicControl.innerHTML = '<i class="fas fa-volume-mute"></i>';
          } else {
            player.playVideo();
            musicControl.innerHTML = '<i class="fas fa-music"></i>';
          }
          isPlaying = !isPlaying;
        }
      });
      
      // 3D Tilt Effect on elements with tilt-element class
      const tiltElements = document.querySelectorAll('.tilt-element');
      
      tiltElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
          const rect = this.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          
          const xc = rect.width / 2;
          const yc = rect.height / 2;
          
          const dx = x - xc;
          const dy = y - yc;
          
          // Limit the rotation to make it more subtle
          const maxRotation = 10;
          const xRotation = Math.min(Math.max((dy / yc) * maxRotation, -maxRotation), maxRotation);
          const yRotation = Math.min(Math.max((dx / xc) * maxRotation, -maxRotation), maxRotation);
          
          this.style.transform = `perspective(1000px) rotateX(${-xRotation}deg) rotateY(${yRotation}deg)`;
          this.style.transition = 'none';
        });
        
        element.addEventListener('mouseleave', function() {
          this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
          this.style.transition = 'transform 0.5s ease';
        });
      });
      
      // Make sure tilt effect works on touch devices
      tiltElements.forEach(element => {
        element.addEventListener('touchmove', function(e) {
          if (e.touches.length === 1) {
            const touch = e.touches[0];
            const rect = this.getBoundingClientRect();
            const x = touch.clientX - rect.left;
            const y = touch.clientY - rect.top;
            
            const xc = rect.width / 2;
            const yc = rect.height / 2;
            
            const dx = x - xc;
            const dy = y - yc;
            
            const maxRotation = 10;
            const xRotation = Math.min(Math.max((dy / yc) * maxRotation, -maxRotation), maxRotation);
            const yRotation = Math.min(Math.max((dx / xc) * maxRotation, -maxRotation), maxRotation);
            
            this.style.transform = `perspective(1000px) rotateX(${-xRotation}deg) rotateY(${yRotation}deg)`;
          }
        });
        
        element.addEventListener('touchend', function() {
          this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
          this.style.transition = 'transform 0.5s ease';
        });
      });
      
      // Scroll down button
      const scrollDown = document.getElementById('scroll-down');
      scrollDown.addEventListener('click', function(e) {
        e.preventDefault();
        console.log("Scroll down clicked");
        window.scrollTo({
          top: window.innerHeight,
          behavior: 'smooth'
        });
      });
      
      // Add touch event for mobile
      scrollDown.addEventListener('touchend', function(e) {
        e.preventDefault();
        console.log("Scroll down touched");
        window.scrollTo({
          top: window.innerHeight,
          behavior: 'smooth'
        });
      });
      
      // Countdown
      const weddingDate = new Date("2025-05-17T09:00:00").getTime();
      const countdownElement = document.getElementById('countdown');
      
      function updateCountdown() {
        const now = new Date().getTime();
        const distance = weddingDate - now;
        
        if (distance < 0) {
          countdownElement.innerHTML = `
            <div class="countdown-item tilt-element">
              <span class="number">0</span>
              <span class="label">Hari</span>
            </div>
            <div class="countdown-item tilt-element">
              <span class="number">0</span>
              <span class="label">Jam</span>
            </div>
            <div class="countdown-item tilt-element">
              <span class="number">0</span>
              <span class="label">Menit</span>
            </div>
            <div class="countdown-item tilt-element">
              <span class="number">0</span>
              <span class="label">Detik</span>
            </div>
          `;
          return;
        }
        
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        countdownElement.innerHTML = `
          <div class="countdown-item tilt-element">
            <span class="number">${days}</span>
            <span class="label">Hari</span>
          </div>
          <div class="countdown-item tilt-element">
            <span class="number">${hours}</span>
            <span class="label">Jam</span>
          </div>
          <div class="countdown-item tilt-element">
            <span class="number">${minutes}</span>
            <span class="label">Menit</span>
          </div>
          <div class="countdown-item tilt-element">
            <span class="number">${seconds}</span>
            <span class="label">Detik</span>
          </div>
        `;
      }
      
      updateCountdown();
      setInterval(updateCountdown, 1000);
      
      // Fade in animation on scroll
      const fadeElements = document.querySelectorAll('.fade-in');
      
      function checkFade() {
        fadeElements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;
          
          if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('visible');
          }
        });
      }
      
      window.addEventListener('scroll', checkFade);
      checkFade();
    });
  </script>
</body>
</html>