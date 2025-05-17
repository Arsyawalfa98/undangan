    /* Slide 1 title different styling */
    .slide-1 h2 {
      font-size: 3.5rem;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan Imam & Zahra</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&family=Dancing+Script:wght@400;700&family=Great+Vibes&display=swap">
  
  <style>
    :root {
      --primary-color: #d4c9bf;
      --secondary-color: #f8f5f2;
      --accent-color: #a18a68;
      --text-color: #5c5248;
      --light-text: #8e8277;
      --cursive-font: 'Dancing Script', cursive;
      --title-font: 'Great Vibes', cursive;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Montserrat', sans-serif;
      color: var(--text-color);
      line-height: 1.6;
      overflow: hidden;
      background-color: #000;
    }
    
    /* Opening Screen */
    .opening {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      color: white;
      transition: transform 1.2s cubic-bezier(0.65, 0, 0.35, 1);
      background-image: url('gambar_5.jpeg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    
    .opening::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(3px);
    }
    
    .opening.hidden {
      transform: translateY(-100%);
    }
    
    .opening h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      font-family: var(--title-font);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards 0.3s;
      position: relative;
      z-index: 10;
    }
    
    .opening p {
      margin-bottom: 10px;
      font-size: 1.1rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards 0.6s;
      position: relative;
      z-index: 10;
    }
    
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* PERUBAHAN 1: Membuat posisi icon envelope tetap */
    .envelope {
      font-size: 4rem;
      margin-bottom: 30px;
      color: white;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
      opacity: 0;
      transform: scale(0.8);
      animation: pulseIn 1.5s forwards;
      position: fixed; /* Ubah dari relative ke fixed */
      z-index: 10;
      top: 20%; /* Posisi dari atas */
      left: 0;
      right: 0;
      text-align: center;
      display: flex;
      justify-content: center;
      width: 100%;
    }
    
    @keyframes pulseIn {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }
      70% {
        opacity: 1;
        transform: scale(1.1);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }
    
    .envelope i {
      animation: pulse 2s infinite ease-in-out 1.5s;
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
    
    .btn {
      display: inline-block;
      padding: 15px 40px;
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      text-decoration: none;
      border-radius: 50px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      font-weight: 500;
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(5px);
      cursor: pointer;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards 0.9s;
      position: relative;
      z-index: 10;
    }
    
    .btn:hover {
      transform: translateY(-5px);
      background-color: rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }
    
    /* Guest name styling */
    .guest-welcome {
      font-size: 1.2rem;
      margin: 20px 0 5px;
      color: black;
      font-weight: bold;
    }
    
    .guest-name {
      font-size: 1.5rem;
      font-weight: bold;
      color: #000;
      margin-bottom: 30px;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    
    /* Slider Container */
    .slider-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
    
    .slider {
      display: flex;
      width: 400%;
      height: 100%;
      transition: transform 1s cubic-bezier(0.77, 0, 0.175, 1);
    }
    
    .slide {
      width: 25%;
      height: 100vh;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }
    
    /* Background overlay for slides */
    .slide-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: -1;
      backdrop-filter: blur(3px);
    }
    
    .slide-content {
      position: relative;
      z-index: 2;
      max-width: 90%;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.75);
      border-radius: 20px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      transform: translateY(30px);
      opacity: 0;
      transition: all 0.8s ease;
      color: black;
    }
    
    /* Slide 1 content is different - no background */
    .slide-1 .slide-content {
      background-color: transparent;
      box-shadow: none;
      border: none;
      width: 100%;
      max-width: 100%;
      padding: 0;
      color: white;
      opacity: 0; /* Mulai dengan opacity 0 */
      transform: translateY(0); /* Reset transform */
      transition: opacity 0.8s ease 1.5s; /* Transisi dengan delay 1.5 detik */
    }
    
    /* Tambahkan animasi untuk slide overlay */
    .slide-1 .slide-overlay {
      opacity: 0;
      transition: opacity 1s ease 1s; /* Overlay akan muncul setelah 1 detik */
    }
    
    .slide-1.active .slide-overlay {
      opacity: 1;
    }
    
    .slide-1.active .slide-content {
      opacity: 1;
    }
    
    /* Tambahan untuk animasi fade-in elemen pada slide 1 */
    .fade-in-item {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .slide-1.active .fade-in-item {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Menambahkan delay untuk setiap elemen agar muncul bertahap */
    .slide-1.active .fade-in-item:nth-child(1) {
      transition-delay: 1.5s; /* h2 */
    }
    
    .slide-1.active .fade-in-item:nth-child(2) {
      transition-delay: 1.7s; /* wreath-container */
    }
    
    .slide-1.active .fade-in-item:nth-child(3) {
      transition-delay: 1.9s; /* wedding-date */
    }
    
    .slide-1.active .fade-in-item:nth-child(4) {
      transition-delay: 2.1s; /* guest-welcome */
    }
    
    .slide-1.active .fade-in-item:nth-child(5) {
      transition-delay: 2.3s; /* guest-name */
    }
    
    .slide-1.active .fade-in-item:nth-child(6) {
      transition-delay: 2.5s; /* slide-1-note */
    }
    
    .slide-1 .guest-welcome {
      font-size: 1.5rem;
      font-weight: 500;
    }
    
    .slide-1 .guest-name {
      font-size: 1.8rem;
      margin-bottom: 30px;
    }
    
    /* Titles for all slides */
    .slide h2 {
      font-family: var(--title-font);
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      color: black;
    }
    
    .slide-1 h2,
    .slide-1 p,
    .slide-1 .guest-welcome,
    .slide-1 .guest-name {
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .slide.active .slide-content {
      transform: translateY(0);
      opacity: 1;
    }
    
    /* Subtitle styling */
    .slide p.subtitle {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: black;
      font-weight: 500;
    }
    
    h1, h2, h3 {
      font-family: var(--cursive-font);
    }
    
    /* PERUBAHAN 2: Mengubah nama file background pada masing-masing slide dan membuat lebih responsif */
    /* Slide 1 background */
    .slide-1 .background-flowers {
      background-image: url('background_0.jpg');
    }
    
    /* Slide 2 background */
    .slide-2 .background-flowers {
      background-image: url('background_1.jpeg');
    }
    
    /* Slide 3 background */
    .slide-3 .background-flowers {
      background-image: url('background_2.jpeg');
    }
    
    /* Slide 4 background */
    .slide-4 .background-flowers {
      background-image: url('background_3.JPG');
    }
    
    /* CSS untuk memastikan background tetap responsif di mobile */
    @media (max-width: 768px) {
      .slide-1 .background-flowers,
      .slide-2 .background-flowers,
      .slide-3 .background-flowers,
      .slide-4 .background-flowers {
        background-size: cover;
        background-position: center center;
      }
    }
    
    .background-flowers {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      opacity: 0.9;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }
    
    /* Memperbaiki responsivitas background untuk mobile */
    @media (max-width: 768px) {
      .background-flowers {
        background-attachment: scroll;
        height: 100vh;
      }
    }
    
    @media (max-width: 480px) {
      .background-flowers {
        background-position: center center;
      }
    }
    
    h1, h2, h3 {
      font-family: var(--cursive-font);
      font-weight: 700;
    }
    
    /* Floral wreath styling for slide 1 */
    .wreath-container {
      position: relative;
      margin: 20px auto 30px;
      width: 320px;
      height: 320px;
      transform-style: preserve-3d;
      perspective: 1000px;
      transition: transform 0.5s ease;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .wreath-container:hover {
      transform: scale(1.05);
    }
    
    .wreath-image {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: 100%;
      z-index: 1;
      animation: pulse 8s infinite alternate;
    }
    
    @keyframes pulse {
      0% {
        transform: translate(-50%, -50%) scale(1);
      }
      100% {
        transform: translate(-50%, -50%) scale(1.05);
      }
    }
    
    .couple-names-centered {
      position: relative;
      z-index: 2;
      width: 80%;
      text-align: center;
    }
    
    /* Couple names styling */
    .couple-names {
      font-family: var(--title-font);
      font-size: 3rem;
      line-height: 1.2;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      margin: 0 auto;
      transform-style: preserve-3d;
      transition: transform 0.5s ease;
      color: white;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    
    .couple-names:hover {
      transform: scale(1.05);
    }
    
    .couple-names .name {
      display: block;
      margin: 8px 0;
    }
    
    .couple-names .ampersand {
      font-size: 3.5rem;
      margin: 5px 0;
      color: #ffd700;
      font-weight: 700;
    }
    
    /* Add parallax effect for couple photo */
    .couple-photo {
      width: 200px;
      height: 200px;
      border-radius: 15px;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 5px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      transform: scale(0);
      animation: scaleIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards 0.5s;
      transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      perspective: 1000px;
    }
    
    .couple-photo:hover {
      transform: scale(1.05) rotateY(10deg);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
    }
    
    @keyframes scaleIn {
      to {
        transform: scale(1);
      }
    }
    
    .couple-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all 0.5s ease;
      transform-style: preserve-3d;
    }
    
    .couple-photo:hover img {
      transform: translateZ(10px);
    }
    
    /* Event cards styling - desktop version */
    .events {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }
    
    .event-card {
      background-color: rgba(255, 255, 255, 0.75);
      padding: 25px;
      border-radius: 20px;
      min-width: 250px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform: translateY(20px);
      opacity: 0;
    }
    
    .event-card.visible {
      transform: translateY(0);
      opacity: 1;
    }
    
    .event-card:nth-child(2) {
      transition-delay: 0.2s;
    }
    
    .event-card:hover {
      transform: translateY(-10px);
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    
    .event-card i {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: var(--accent-color);
      transition: transform 0.5s ease;
    }
    
    .event-card:hover i {
      transform: scale(1.2);
    }
    
    .event-card h3 {
      margin-bottom: 15px;
      font-weight: 700;
      font-size: 1.5rem;
      color: #000;
    }
    
    .event-card p {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      color: #333;
      font-weight: 500;
    }
    
    /* Tambahkan CSS untuk navigation button */
    .nav-button {
      position: fixed;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 10;
      font-size: 1.2rem;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      backdrop-filter: blur(5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .nav-button:hover {
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      transform: translateY(-50%) scale(1.1);
    }
    
    .nav-prev {
      left: 20px;
    }
    
    .nav-next {
      right: 20px;
    }
    
    /* Slide indicators styling */
    .controls {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 15px;
      z-index: 10;
    }
    
    .slide-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.3);
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .slide-indicator.active {
      background-color: white;
      transform: scale(1.3);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }
    
    /* Music control styling */
    .music-control {
      position: fixed;
      top: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 10;
      font-size: 1.2rem;
      color: white;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .music-control:hover {
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      transform: scale(1.1);
    }
    
    /* Map button styling */
    .btn-accent {
      background: linear-gradient(135deg, var(--accent-color), #c5b095);
      color: white;
      margin-top: 25px;
      border: none;
      transform: translateY(0);
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .btn-accent:hover {
      background: linear-gradient(135deg, #c5b095, var(--accent-color));
      transform: translateY(-5px) scale(1.05);
    }
    
    .btn-accent i {
      margin-right: 8px;
    }
    
    /* Page transitions */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    
    /* Event cards styling - mobile version */
    .events-mobile {
      display: none; /* Hidden by default, shown only on mobile */
      flex-direction: column;
      width: 100%;
      padding: 0 10px;
    }
    
    .event-item {
      background-color: rgba(255, 255, 255, 0.75);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 20px;
      padding: 25px 15px;
      margin-bottom: 20px;
      text-align: center;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform: translateY(20px);
      opacity: 0;
      color: #000;
      font-weight: 500;
    }
    
    .event-item.visible {
      transform: translateY(0);
      opacity: 1;
    }
    
    .event-item:nth-child(2) {
      transition-delay: 0.2s;
    }
    
    .event-item h3 {
      font-family: var(--cursive-font);
      font-size: 2rem;
      margin-bottom: 20px;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
      color: #000;
      font-weight: 700;
    }
    
    .event-item .event-icon {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: var(--accent-color);
    }
    
    .event-item .event-details {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    
    .event-item .event-details p {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin: 0;
      color: #333;
      font-weight: 500;
    }
    
    /* Mobile layout styles */
    @media (max-width: 768px) {
      .slide h2 {
        font-size: 2.2rem;
      }
      
      .couple-names {
        font-size: 2rem;
      }
      
      .couple-names .ampersand {
        font-size: 2.4rem;
      }
      
      .couple-photo {
        width: 180px;
        height: 180px;
      }
      
      .slide-content {
        padding: 25px 15px;
        width: 100%;
        max-width: 100%;
      }
      
      /* Display single column events layout on mobile */
      .events {
        display: none;
      }
      
      .events-mobile {
        display: flex;
      }
      
      .nav-button {
        width: 40px;
        height: 40px;
      }
      
      /* Perubahan untuk posisi envelope di mobile */
      .envelope {
        top: 15%;
      }
      
      /* Memperbaiki tampilan background pada mobile */
      .background-flowers {
        background-position: center center !important;
        background-size: cover !important;
      }
      
      /* Pastikan slide sesuai dengan ukuran layar */
      .slide {
        height: 100vh;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    @media (max-width: 480px) {
      .slide h2 {
        font-size: 1.8rem;
      }
      
      .couple-names {
        font-size: 1.6rem;
      }
      
      .couple-names .ampersand {
        font-size: 2rem;
      }
      
      .couple-photo {
        width: 150px;
        height: 150px;
      }
      
      .slide-content {
        padding: 20px 10px;
      }
      
      .event-item {
        padding: 20px 10px;
      }
      
      .event-item h3 {
        font-size: 1.7rem;
      }
      
      .nav-button {
        width: 36px;
        height: 36px;
        font-size: 1rem;
      }
      
      .nav-prev {
        left: 10px;
      }
      
      .nav-next {
        right: 10px;
      }
      
      .music-control {
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
      }
      
      /* Perubahan untuk posisi envelope di mobile kecil */
      .envelope {
        top: 12%;
        font-size: 3.5rem;
      }
      
      /* Perbaikan untuk background pada layar sangat kecil */
      .background-flowers {
        background-position: center center !important;
      }
      
      /* Mengoptimalkan slide untuk scrolling pada perangkat mobile kecil */
      .slide-content {
        max-height: 85vh;
        overflow-y: auto;
      }
    }
  </style>
</head>
<body>
  <!-- Opening Screen -->
  <div class="opening" id="opening">
    <div class="envelope">
      <i class="fas fa-envelope-open-text"></i>
    </div>
    <h2>Undangan Pernikahan</h2>
    <p id="opening-guest">Kepada Yth. Bapak/Ibu/Saudara</p>
    <p id="opening-bold-guest" style="font-size: 1.7rem; font-weight: bold; margin-top: 10px; margin-bottom: 25px; color: #ffd700;"></p>
    <button class="btn" id="open-invite">
      <i class="fas fa-envelope-open"></i> Buka Undangan
    </button>
  </div>
  
  <!-- Slider Container -->
  <div class="slider-container">
    <div class="slider" id="slider">
      <!-- Slide 1: Welcome -->
      <div class="slide slide-1">
        <div class="background-flowers"></div>
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="fade-in-item">Undangan Pernikahan</h2>
          
          <!-- Floral wreath with names -->
          <div class="wreath-container fade-in-item">
            <img src="tempat_nama.gif" alt="Wreath Frame" class="wreath-image">
            <div class="couple-names-centered">
              <div class="couple-names">
                <span class="name">Imam</span>
                <span class="ampersand">&</span>
                <span class="name">Zahra</span>
              </div>
            </div>
          </div>
          
          <p class="wedding-date fade-in-item">17 Mei 2025</p>
          <div id="guest-welcome" class="guest-welcome fade-in-item">Kepada Yth. Bapak/Ibu/Saudara</div>
          <div id="guest-bold-name" class="guest-name fade-in-item"></div>
          <p class="slide-1-note fade-in-item">Kami berharap kehadiran Anda melengkapi kebahagiaan kami</p>
        </div>
      </div>

      <!-- Slide 2: Couple -->
      <div class="slide slide-2">
        <div class="background-flowers"></div>
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2>Mempelai</h2>
          <p class="subtitle">Dengan rahmat Allah SWT, kami mengundang Anda ke pernikahan kami</p>
          
          <!-- Couple photo -->
          <div class="couple-photo">
            <img src="gambar_3.jpeg" alt="Imam & Zahra">
          </div>
            
          <!-- Couple names -->
          <h3 style="font-size: 1.8rem; color: black; margin: 15px 0; font-family: var(--title-font);">Imam & Zahra</h3>
            
          <!-- Parents names in two columns -->
          <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin-top: 20px;">
            <div style="flex: 1; min-width: 200px; max-width: 300px;">
              <h4 style="font-size: 1.2rem; color: black; margin-bottom: 10px;">Imam</h4>
              <p style="color: #333;">Putra dari Bapak Ahmad & Ibu Siti</p>
            </div>
            <div style="flex: 1; min-width: 200px; max-width: 300px;">
              <h4 style="font-size: 1.2rem; color: black; margin-bottom: 10px;">Zahra</h4>
              <p style="color: #333;">Putri dari Bapak Budi & Ibu Ari</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3: Events -->
      <div class="slide slide-3">
        <div class="background-flowers"></div>
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 style="font-family: var(--title-font);">Rangkaian acara pernikahan kami</h2>
          
          <!-- Desktop events layout -->
          <div class="events">
            <div class="event-card">
              <i class="fas fa-ring"></i>
              <h3>Akad Nikah</h3>
              <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
              <p><i class="far fa-clock"></i> 08:00 - 10:00 WIB</p>
              <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna Cempaka Putih, Jakarta</p>
            </div>
            <div class="event-card">
              <i class="fas fa-glass-cheers"></i>
              <h3>Resepsi</h3>
              <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
              <p><i class="far fa-clock"></i> 11:00 - 14:00 WIB</p>
              <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna Cempaka Putih, Jakarta</p>
            </div>
          </div>
          
          <!-- Mobile events layout (like in screenshot) -->
          <div class="events-mobile">
            <div class="event-item">
              <div class="event-icon"><i class="fas fa-ring"></i></div>
              <h3>Akad Nikah</h3>
              <div class="event-details">
                <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
                <p><i class="far fa-clock"></i> 08:00 - 10:00 WIB</p>
                <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna<br>Cempaka Putih, Jakarta</p>
              </div>
            </div>
            <div class="event-item">
              <div class="event-icon"><i class="fas fa-glass-cheers"></i></div>
              <h3>Resepsi</h3>
              <div class="event-details">
                <p><i class="far fa-calendar"></i> Sabtu, 17 Mei 2025</p>
                <p><i class="far fa-clock"></i> 11:00 - 14:00 WIB</p>
                <p><i class="fas fa-map-marker-alt"></i> Gedung Serbaguna<br>Cempaka Putih, Jakarta</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 4: Location -->
      <div class="slide slide-4">
        <div class="background-flowers"></div>
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2>Lokasi</h2>
          <p class="subtitle">Kami menanti kehadiran Anda di tempat pernikahan kami</p>
          <div style="margin-top: 20px;">
            <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Gedung Serbaguna Cempaka Putih</h3>
            <p>Jl. Cempaka Putih Barat No.1, Jakarta Pusat</p>
            <p>DKI Jakarta 10520</p>
          </div>
          <a href="https://maps.google.com/?q=gedung+serbaguna+cempaka+putih" target="_blank" class="btn btn-accent">
            <i class="fas fa-map-marker-alt"></i> Buka di Google Maps
          </a>
          <div style="margin-top: 40px;">
            <p style="font-size: 0.9rem;">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kami</p>
            <h3 style="margin-top: 20px; font-family: var(--title-font);">Imam & Zahra</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation Controls -->
  <button class="nav-button nav-prev" id="nav-prev"><i class="fas fa-chevron-left"></i></button>
  <button class="nav-button nav-next" id="nav-next"><i class="fas fa-chevron-right"></i></button>

  <!-- Slide Indicators -->
  <div class="controls">
    <div class="slide-indicator active" data-slide="0"></div>
    <div class="slide-indicator" data-slide="1"></div>
    <div class="slide-indicator" data-slide="2"></div>
    <div class="slide-indicator" data-slide="3"></div>
  </div>

  <!-- Music Control -->
  <div class="music-control" id="music-control">
    <i class="fas fa-music"></i>
  </div>

  <!-- Audio Player -->
  <audio id="background-music" loop>
    <source src="backgroundsound.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
  // Get elements
  const opening = document.getElementById('opening');
  const openInvite = document.getElementById('open-invite');
  const slider = document.getElementById('slider');
  const slides = document.querySelectorAll('.slide');
  const slideIndicators = document.querySelectorAll('.slide-indicator');
  const navPrev = document.getElementById('nav-prev');
  const navNext = document.getElementById('nav-next');
  const backgroundMusic = document.getElementById('background-music');
  const musicControl = document.getElementById('music-control');
  const eventCards = document.querySelectorAll('.event-card');
  const eventItems = document.querySelectorAll('.event-item');
  const couplePhoto = document.querySelector('.couple-photo img');
  
  // State variables
  let currentSlide = 0;
  let isPlaying = false;
  let autoSlideInterval;
  let isSliderActive = false;
  let touchStartX = 0;
  let touchEndX = 0;
  
  // Parallax effect for couple photo
  if (couplePhoto) {
    document.addEventListener('mousemove', function(e) {
      if (!isSliderActive || currentSlide !== 1) return;
      
      // Get mouse position relative to viewport
      const mouseX = e.clientX / window.innerWidth;
      const mouseY = e.clientY / window.innerHeight;
      
      // Apply small parallax effect to photo
      const moveX = (mouseX - 0.5) * 10;
      const moveY = (mouseY - 0.5) * 10;
      
      couplePhoto.style.transform = `translateX(${moveX}px) translateY(${moveY}px) scale(1.05)`;
    });
    
    // Reset transform when mouse leaves
    document.addEventListener('mouseleave', function() {
      couplePhoto.style.transform = 'translateX(0) translateY(0) scale(1)';
    });
    
    // Handle touch events for mobile parallax
    document.addEventListener('touchmove', function(e) {
      if (!isSliderActive || currentSlide !== 1) return;
      
      const touch = e.touches[0];
      const touchX = touch.clientX / window.innerWidth;
      const touchY = touch.clientY / window.innerHeight;
      
      // Apply smaller parallax effect for touch devices
      const moveX = (touchX - 0.5) * 5;
      const moveY = (touchY - 0.5) * 5;
      
      couplePhoto.style.transform = `translateX(${moveX}px) translateY(${moveY}px) scale(1.03)`;
    });
    
    // Reset transform on touch end
    document.addEventListener('touchend', function() {
      couplePhoto.style.transform = 'translateX(0) translateY(0) scale(1)';
    });
  }
  
  // Get guest name from URL
  function getGuestName() {
    let guest = '';
    const path = window.location.pathname;
    
    if (path.includes('guest=')) {
      const guestMatch = path.match(/guest=([^\/&]+)/);
      if (guestMatch && guestMatch[1]) {
        guest = decodeURIComponent(guestMatch[1]);
      }
    } else {
      const pathSegments = path.split('/').filter(segment => segment !== '');
      if (pathSegments.length > 0) {
        const lastSegment = pathSegments[pathSegments.length - 1];
        if (lastSegment !== 'undangan' && lastSegment !== 'index.php' && lastSegment !== 'index.html') {
          guest = decodeURIComponent(lastSegment);
        }
      }
    }
    
    if (!guest) {
      const urlParams = new URLSearchParams(window.location.search);
      guest = urlParams.get('guest');
    }
    
    return guest || '';
  }
  
  // Set guest name
  function setGuestName(name) {
    if (name) {
      document.getElementById('guest-welcome').textContent = `Kepada Yth. Bapak/Ibu/Saudara`;
      document.getElementById('guest-bold-name').textContent = `${name}`;
      document.getElementById('opening-guest').textContent = `Kepada Yth. Bapak/Ibu/Saudara`;
      document.getElementById('opening-bold-guest').textContent = `${name}`;
    }
  }
  
  // Initialize guest name
  const guestName = getGuestName();
  setGuestName(guestName);
  
  // Activate event items for mobile view
  function activateEventItems() {
    const eventItems = document.querySelectorAll('.event-item');
    eventItems.forEach(item => {
      item.classList.add('visible');
    });
  }
  
      // Function to activate a slide
  function activateSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
      
      // Reset dan triger animasi saat slide menjadi aktif
      if (i === index) {
        // Jika slide 1, tambahkan animasi khusus
        if (i === 0) {
          // Hapus kelas active dan tambahkan kembali untuk memulai ulang animasi
          slide.classList.remove('active');
          setTimeout(() => {
            slide.classList.add('active');
          }, 10);
        }
        
        // Jika slide 3 (events), animasikan kartu
        if (i === 2) {
          eventCards.forEach(card => {
            card.classList.add('visible');
          });
          // Aktifkan juga event items di mobile
          activateEventItems();
        } else {
          // Hapus visibilitas saat meninggalkan slide event
          eventCards.forEach(card => {
            card.classList.remove('visible');
          });
        }
      }
    });
  }
  
  // Go to specific slide
  function goToSlide(slideIndex) {
    if (!isSliderActive) return;
    
    // Ensure slide index is within bounds
    currentSlide = Math.max(0, Math.min(slideIndex, slides.length - 1));
    
    // Move slider
    slider.style.transform = `translateX(-${currentSlide * 25}%)`;
    
    // Update indicators
    slideIndicators.forEach((indicator, index) => {
      indicator.classList.toggle('active', index === currentSlide);
    });
    
    // Activate current slide for animations
    activateSlide(currentSlide);
    
    // Restart auto slide
    restartAutoSlide();
  }
  
  // Next slide function
  function nextSlide() {
    goToSlide((currentSlide + 1) % slides.length);
  }
  
  // Previous slide function
  function prevSlide() {
    goToSlide((currentSlide - 1 + slides.length) % slides.length);
  }
  
  // Auto slide functions
  function startAutoSlide() {
    if (!isSliderActive) return;
    stopAutoSlide();
    autoSlideInterval = setInterval(nextSlide, 5000);
  }
  
  function stopAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval);
      autoSlideInterval = null;
    }
  }
  
  function restartAutoSlide() {
    stopAutoSlide();
    startAutoSlide();
  }
  
  // Toggle music function
  function toggleMusic() {
    if (isPlaying) {
      backgroundMusic.pause();
      musicControl.innerHTML = '<i class="fas fa-volume-mute"></i>';
      isPlaying = false;
    } else {
      backgroundMusic.play().then(() => {
        musicControl.innerHTML = '<i class="fas fa-volume-up"></i>';
        isPlaying = true;
      }).catch(error => {
        console.log("Error playing audio:", error);
      });
    }
  }
  
  // Open invitation
  openInvite.addEventListener('click', function() {
    opening.classList.add('hidden');
    
    // Wait for opening to complete its animation before showing content
    setTimeout(() => {
      isSliderActive = true;
      
      // Activate the first slide - background akan tampil terlebih dahulu
      // karena overlay dan konten memiliki delay dalam CSS
      activateSlide(0);
      
      // Start auto slide and play music
      startAutoSlide();
      
      backgroundMusic.play().then(() => {
        isPlaying = true;
        musicControl.innerHTML = '<i class="fas fa-volume-up"></i>';
      }).catch(error => {
        console.log("Error playing audio:", error);
      });
    }, 1000);
  });
  
  // Navigation event listeners
  navNext.addEventListener('click', nextSlide);
  navPrev.addEventListener('click', prevSlide);
  
  // Slide indicator click events
  slideIndicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      if (isSliderActive) {
        goToSlide(index);
      }
    });
  });
  
  // Music control click handler
  musicControl.addEventListener('click', toggleMusic);
  
  // Touch events for swiping on mobile
  slider.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
  });
  
  slider.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].clientX;
    handleSwipe();
  });
  
  function handleSwipe() {
    const threshold = 100; // minimum distance for swipe
    if (touchStartX - touchEndX > threshold) {
      // Swipe left
      nextSlide();
    } else if (touchEndX - touchStartX > threshold) {
      // Swipe right
      prevSlide();
    }
  }
  
  // Pause auto slide on hover
  slider.addEventListener('mouseenter', () => {
    if (isSliderActive) {
      stopAutoSlide();
    }
  });
  
  slider.addEventListener('mouseleave', () => {
    if (isSliderActive) {
      startAutoSlide();
    }
  });
  
  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!isSliderActive) return;
    
    if (e.key === 'ArrowRight') {
      nextSlide();
    } else if (e.key === 'ArrowLeft') {
      prevSlide();
    }
  });
});
    </script>
</body>
</html>