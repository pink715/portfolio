<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make It Iconic</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #fdfcf8;
      color: #2c2c2c;
      line-height: 1.6;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background: #8B0000;
      color: #fff;
    }

    .logo {
      font-size: 2.4rem;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .hero {
      text-align: center;
      padding: 80px 20px;
      background: #fff5f5;
    }

    .hero h1 {
      font-size: 3.4rem;
      margin-bottom: 16px;
      color: #8B0000;
      font-family: 'Playfair Display', serif;
    }

    .hero p {
      font-size: 1.3rem;
      margin-bottom: 24px;
      color: #444;
    }

    .btn {
      padding: 14px 30px;
      background: #8B0000;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: #a00000;
    }

    .section {
      padding: 50px 20px;
      max-width: 1100px;
      margin: auto;
    }

    .section h2,
    .magazine-section h2,
    .viewers-section h2 {
      text-align: center;
      margin-bottom: 35px;
      color: #8B0000;
      font-size: 2.2rem;
      font-family: 'Playfair Display', serif;
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 24px;
    }

    .video-card {
      background: #fff0f0;
      padding: 18px;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }

    .video-card iframe {
      width: 100%;
      height: 180px;
      border: none;
      border-radius: 12px;
    }

    .cta-section {
      background: #fff2f0;
      color: #222;
      padding: 60px 20px;
      text-align: center;
    }

    .cta-section h2 {
      font-size: 2.6rem;
      margin-bottom: 20px;
      font-family: 'Playfair Display', serif;
    }

    .cta-section a {
      background: #8B0000;
      color: #fff;
      padding: 14px 30px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
    }

    .icon-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 24px;
    }

    .icon-card {
      background: #fffaf8;
      padding: 20px;
      border-radius: 14px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .icon-card h3 {
      margin-bottom: 12px;
      color: #8B0000;
    }

    .creator-section {
      background: #fff;
      color: #333;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 16px;
      max-width: 600px;
      margin: auto;
    }

    form input,
    form textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1rem;
    }

    form button {
      padding: 14px;
      background: #8B0000;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    footer {
      background: #fdf0f0;
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      color: #555;
    }

    .magazine-section, .viewers-section {
      background: #fef9f4;
      padding: 60px 20px;
    }

    .magazine-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 24px;
    }

    .magazine-card {
      background: #ffffff;
      padding: 24px;
      border-radius: 14px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.06);
    }

    .viewers-section p {
      font-size: 1.1rem;
      text-align:center;
      max-width: 640px;
      margin:auto;
      color: #666;
    }

    @media screen and (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 10px;
      }

      .hero h1 {
        font-size: 2.2rem;
      }

      .hero p {
        font-size: 1.1rem;
      }

      .section h2,
      .magazine-section h2,
      .viewers-section h2 {
        font-size: 1.8rem;
      }

      .cta-section h2 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
  <div class="logo">Make It Iconic</div>
  <nav>
    <ul>
      <li><a href="#videos">Videos</a></li>
      <li><a href="#magazine">Magazine</a></li>
      <li><a href="#viewers">Viewers</a></li>
      <li><a href="#submit">Submit</a></li>
    </ul>
  </nav>
</header>

<section class="hero">
  <h1>Build Brands That Last</h1>
  <p>Decode the branding secrets behind the most iconic names—from pop stars to powerhouse businesses.</p>
  <a href="#videos" class="btn">Start Watching</a>
</section>

<section class="section" id="videos">
  <h2>Featured Videos</h2>
  <div class="video-grid">
    <div class="video-card">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID1" allowfullscreen></iframe>
    </div>
    <div class="video-card">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID2" allowfullscreen></iframe>
    </div>
    <div class="video-card">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID3" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="magazine-section" id="magazine">
  <h2>Magazines</h2>
  <div class="magazine-grid">
    <div class="magazine-card">
      <h3>BTS: Global Branding Icons</h3>
      <p>Read the detailed article inspired by our full-length video. Styled and formatted like a high-end magazine!</p>
    </div>
    <div class="magazine-card">
      <h3>Apple's Timeless Identity</h3>
      <p>Explore how Apple became a modern luxury lifestyle brand—and why it still leads today.</p>
    </div>
    <div class="magazine-card">
      <h3>Netflix: Storytelling & Strategy</h3>
      <p>The evolution from DVD rentals to world-dominating content creation. Read the strategy breakdown.</p>
    </div>
  </div>
</section>

<section class="viewers-section" id="viewers">
  <h2>From Our Viewers</h2>
  <p>Have something to say about branding? Share your perspective and we might feature your work in our magazine section!</p>
</section>

<section class="creator-section" id="submit">
  <h2>Submit Your Work</h2>
  <form>
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <textarea rows="6" placeholder="Your Branding Insight, Article, or Review"></textarea>
    <button type="submit">Submit</button>
  </form>
</section>

<section class="cta-section">
  <h2>Make Brands, Not Just Content</h2>
  <a href="#submit">Become a Contributor</a>
</section>



</body>
</html>
