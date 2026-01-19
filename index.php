<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>warung Kopi</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>☕ warung Kopi</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="transactions/index.php">Beli Kopi</a>
      <a href="transactions/beli.php">Transaksi</a>
      <a href="auth/register.php">Login</a>
      <a href="admin/login-admin.php">Register</a>
    </nav>
  </header>

  <section class="menu">
    <h2>Menu Kami</h2>
    <div class="item">
      <h3>Americano</h3>
      <p>Rp 20.000</p>
     <button class="btn" onclick="beli('Americano')">beli</button>
    </div>
    <div class="item">
      <h3>Cappuccino</h3>
      <p>Rp 25.000</p>
      <button class="btn" onclick="beli('Cappuccino')">beli</button>
    </div>
    <div class="item">
      <h3>Latte</h3>
      <p>Rp 23.000</p>
      <button class="btn" onclick="beli('Latte')">beli</button>
    </div>
    <div class="item">
      <h3> good day</h3>
      <p>Rp 15.000</p>
      <button class="btn" onclick="beli('good day')">beli</button>
    </div>
  </section>
  
  

  
  <footer>
    <p>© 2025 warung kopi</p>
  </footer>
</body>
</html>
