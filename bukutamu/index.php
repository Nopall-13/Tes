<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Buku Tamu</h1>
    <form action="simpan.php" method="POST">
      <input type="text" name="nama" placeholder="Nama Anda" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="pesan" placeholder="Pesan Anda" required></textarea>
      <button type="submit">Kirim</button>
    </form>

    <h2>Data Tamu</h2>
    <table>
      <tr><th>Nama</th><th>Email</th><th>Pesan</th><th>Tanggal</th></tr>
      <?php
        $result = $conn->query("SELECT * FROM tamu ORDER BY id DESC");
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['nama']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['pesan']}</td>
                  <td>{$row['tanggal']}</td>
                </tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>
