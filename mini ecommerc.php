<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Mini E-Commerce</title>
  <style>
    :root {
      --primary: #4a90e2;
      --light: #f8f9fa;
      --dark: #2c3e50;
      --gray: #6c757d;
      --radius: 8px;
      --shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--light);
      color: var(--dark);
      line-height: 1.6;
    }

    header {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 1.5rem;
      font-size: 1.5rem;
      box-shadow: var(--shadow);
    }

    .container {
      max-width: 960px;
      margin: 2rem auto;
      background: white;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 2rem;
    }

    h2 {
      margin-bottom: 1rem;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ddd;
      border-radius: var(--radius);
    }

    button {
      padding: 0.6rem 1.2rem;
      background-color: var(--primary);
      color: white;
      border: none;
      border-radius: var(--radius);
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    button:hover {
      background-color: #357ab8;
      transform: scale(1.03);
    }

    .hidden {
      display: none;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 2rem;
    }

    .card {
      border: 1px solid #eee;
      padding: 1rem;
      border-radius: var(--radius);
      background: #fdfdfd;
      box-shadow: var(--shadow);
      margin-bottom: 1rem;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .admin-panel {
      padding: 1rem;
      margin-top: 2rem;
      background: #eef4ff;
      border-left: 4px solid var(--primary);
      border-radius: var(--radius);
    }

    .welcome {
      font-weight: bold;
    }

    @media (max-width: 600px) {
      .top-bar {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>Mini E-Commerce Site</header>
  <div class="container">

    <!-- Login -->
    <div id="loginBox">
      <h2>Login</h2>
      <input type="text" id="username" placeholder="Username" />
      <input type="password" id="password" placeholder="Password" />
      <button onclick="login()">Login</button>
      <p id="loginError" style="color: red; margin-top: 1rem;"></p>
    </div>

    <!-- Main App -->
    <div id="app" class="hidden">
      <div class="top-bar">
        <div class="welcome">Welcome, <span id="displayUser"></span></div>
        <div>
          <button onclick="logout()">Logout</button>
          <button id="adminBtn" class="hidden" onclick="toggleAdmin()">Admin Dashboard</button>
        </div>
      </div>

      <!-- Admin -->
      <div id="adminPanel" class="admin-panel hidden">
        <h3>Admin Dashboard</h3>
        <p>This is a basic panel. You can extend it with product management features.</p>
      </div>

      <h2>Products</h2>
      <div id="productList" class="product-grid"></div>

      <h2>Your Cart</h2>
      <div id="cartList"></div>
    </div>
  </div>

  <script>
    const users = {
      user: "1234",
      admin: "admin123"
    };

    const products = [
      { id: "1", name: "T-Shirt", price: 20 },
      { id: "2", name: "Sneakers", price: 50 },
      { id: "3", name: "Backpack", price: 35 },
      { id: "4", name: "Cap", price: 15 }
    ];

    let currentUser = localStorage.getItem("user");

    window.onload = () => {
      if (currentUser) showApp();
      renderProducts();
      renderCart();
    };

    function login() {
      const u = document.getElementById("username").value.trim();
      const p = document.getElementById("password").value.trim();

      if (users[u] && users[u] === p) {
        currentUser = u;
        localStorage.setItem("user", u);
        showApp();
      } else {
        document.getElementById("loginError").innerText = "Invalid username or password";
      }
    }

    function logout() {
      localStorage.removeItem("user");
      currentUser = null;
      document.getElementById("app").classList.add("hidden");
      document.getElementById("loginBox").classList.remove("hidden");
    }

    function showApp() {
      document.getElementById("loginBox").classList.add("hidden");
      document.getElementById("app").classList.remove("hidden");
      document.getElementById("displayUser").innerText = currentUser;

      if (currentUser === "admin") {
        document.getElementById("adminBtn").classList.remove("hidden");
      }
    }

    function toggleAdmin() {
      const panel = document.getElementById("adminPanel");
      panel.classList.toggle("hidden");
    }

    function renderProducts() {
      const list = document.getElementById("productList");
      list.innerHTML = "";
      products.forEach(p => {
        list.innerHTML += `
          <div class="card">
            <h4>${p.name}</h4>
            <p>Price: $${p.price}</p>
            <button onclick="addToCart('${p.id}')">Add to Cart</button>
          </div>
        `;
      });
    }

    function renderCart() {
      const cart = JSON.parse(localStorage.getItem("cart") || "[]");
      const list = document.getElementById("cartList");
      list.innerHTML = "";

      if (cart.length === 0) {
        list.innerHTML = "<p>Your cart is empty.</p>";
        return;
      }

      cart.forEach(id => {
        const p = products.find(prod => prod.id === id);
        if (p) {
          list.innerHTML += `
            <div class="card cart-item">
              <span>${p.name} - $${p.price}</span>
              <button onclick="removeFromCart('${id}')">Remove</button>
            </div>
          `;
        }
      });
    }

    function addToCart(id) {
      let cart = JSON.parse(localStorage.getItem("cart") || "[]");
      cart.push(id);
      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart();
    }

    function removeFromCart(id) {
      let cart = JSON.parse(localStorage.getItem("cart") || "[]");
      const index = cart.indexOf(id);
      if (index !== -1) cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart();
    }
  </script>
</body>
</html>
