<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="tr">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
<div class="box">
    <h1 align="center">CSV Dosyasını MYSQL'e Aktarma Formu</h1>
    <form action="sonuc.php" method="POST" enctype="multipart/form-data">
      <div class="inputBox">
        <input type="text" name="company_name" autocomplete="off" required>
        <label>Kampanya Adı</label>
      </div>
      
      <div class="fileBox">
        <input class="form-control" type="file" name="file" accept=".csv" autocomplete="off" required>
      </div>

      <div class="selectBox">
        <select class="selectForm" name="datet" required>
          <option selected disabled value="">Tarih Seçin</option>
          <option value="2020-06">Haziran 2020</option>
          <option value="2020-07">Temmuz 2020</option>
          <option value="2020-08">Ağustos 2020</option>
        </select>
      </div>

      <div>
        <input type="submit" name="import" value="Verileri Aktar">
      </div>
    </form>
  </div>
</body>
</html>
