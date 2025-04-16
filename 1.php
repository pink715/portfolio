<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burn Book</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;600&display=swap');

    :root {
      --pink: #ff69b4;
      --dark-pink: #ff1493;
      --white: #ffffff;
      --black: #000000;
      --shadow: rgba(0, 0, 0, 0.3);
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #ffd1dc, #ffe6f7);
      color: var(--black);
    }

    header {
      background: var(--pink);
      padding: 2rem;
      text-align: center;
      color: var(--white);
    }

    header h1 {
      font-family: 'Pacifico', cursive;
      font-size: 3rem;
    }

    nav a {
      color: var(--white);
      text-decoration: none;
      margin: 0 1rem;
      font-weight: bold;
    }

    main {
      max-width: 900px;
      margin: 2rem auto;
      background: var(--white);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 8px 20px var(--shadow);
    }

    h2 {
      color: var(--dark-pink);
      margin-top: 0;
    }

    .quote {
      font-style: italic;
      color: var(--pink);
      margin-bottom: 2rem;
    }

    .post {
      margin-bottom: 2rem;
    }

    .like-btn {
      background: var(--pink);
      color: var(--white);
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 30px;
      cursor: pointer;
      margin-top: 0.5rem;
    }

    form input, form textarea {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.75rem;
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    form button {
      background: var(--dark-pink);
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
    }

    .chatbox {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: var(--white);
      border: 2px solid var(--pink);
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px var(--shadow);
      width: 300px;
    }

    .chatbox h3 {
      margin-top: 0;
      color: var(--pink);
    }

    .chatbox select, .chatbox input {
      width: 100%;
      margin-bottom: 0.5rem;
      padding: 0.5rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Burn Book</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#blog">Blog</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <main id="home">
    <p class="quote">"On Wednesdays we wear pink."</p>

    <section id="blog">
      <h2>Latest Blog Post</h2>
      <div class="post">
        <h3>This is So Fetch</h3>
        <p>We’re bringing back the glam. Stay tuned for fashion, drama, and real talk.</p>
        <button class="like-btn" onclick="likePost(this)">Like ❤️ <span>0</span></button>
      </div>

      <h2>Leave a Comment</h2>
      <form action="submit_comment.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <textarea name="comment" rows="4" placeholder="Write something..." required></textarea>
        <button type="submit">Post</button>
      </form>
    </section>

    <section id="contact">
      <h2>Contact Us</h2>
      <p>Want to spill some tea or collab? Slide into our inbox.</p>
      <form>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Email">
        <textarea rows="4" placeholder="Your Message"></textarea>
        <button type="submit">Send</button>
      </form>
    </section>
  </main>

  

  <script>
    function likePost(button) {
      let countSpan = button.querySelector("span");
      let count = parseInt(countSpan.innerText);
      count++;
      countSpan.innerText = count;
    }

    function chatResponse() {
      let input = document.getElementById('chatInput').value.toLowerCase();
      let mode = document.getElementById('personality').value;
      let reply = "";

      if (mode === "listen") {
        reply = "Tell me more, I'm here for it.";
      } else if (mode === "judge") {
        reply = "That's cute, but are you really doing that?";
      }

      document.getElementById('botReply').innerText = reply;
    }
  </script>

</body>
</html>

<!-- submit_comment.php (for reference, not active in HTML) -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    // Here you'd connect to the database and save it
    echo "<p>Thanks, $name! We got your burn 💅</p>";
}
?>
