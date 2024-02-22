<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\insertstyle.css" />
  <script src="js/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- jQuery script -->
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
  <!-- Popper.js script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <title>Insert products</title>
</head>

<body>
  <div class="container">
    <!--translate-->
    <div id="google_translate_element"></div>
    <!--Go up-->
    <button onclick="scrollToTop()" id="scroll-to-top" title="الرجوع لأعلى">&#11161;</button>
    <!--Nav bar section-->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light" style="background: #5f8e7f">
        <div class="container-fluid">
          <div class="col-md-3">
            <div class="navbar-brand"
              style="color:#c3efe3; display: flex; justify-content: space-between; align-items: center;">
              <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: 900;">
                <img src="image\shop.png" width="20%" height="20%" style="margin-right: 10px;" alt="...">
              </a>
              <button class="navbar-toggle" onclick="toggleMenu()"><span class="navbar-toggler-icon"></span></button>
              </button>
            </div>
          </div>
          <div class="col-md-4">
              <div class="navbar-nav">
                <ul class="navbar-menu" id="navbar-menu">
                <li><a class="nav-link" href="shop.php" style="font-weight:800; color:#c3efe3;">تــســوق</a></li>
                <li><a class="nav-link" href="about.php" style="font-weight:500; color:#c3efe3;">عــن مــتــجــرنــا</a></li>
                <li><a class="nav-link" href="index.php #contact" style="font-weight:300; color:#c3efe3;">تــواصــل
                  مــعــنــا</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="search-box">
                <input type="text" placeholder="بــحــث" onkeyup="search()" oninput="search()" class="search-input"
                  style="background-image: url(image/search.png); background-repeat: no-repeat; background-size: 9%; width: 100%; height: 1px solid; border: 1px solid #ccc; border-color: rgb(253, 253, 253); align-items: center; outline: none; padding: 5px; border-radius: 3px; display: flex; flex-direction: row; text-align: right;">
              </div>
              <div class="product-list" style="display: none; padding: 20px 0;">
                <div class="product-detail" style="font-size: 20px;">
                  <a href="win.php">مجموعة الشتاء</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="summer.php">مجموعة الصيف</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="aut.php">مجموعة الخريف</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="spring.php">مجموعة الربيع</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="index.php #sale"> تخفيضات</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="index.php #contact"> تواصل معنا</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="shop.php"> تسوق</a>
                </div>
                <div class="product-detail" style="font-size: 20px;">
                  <a href="login.php"> تسجيل الدخول</a>
                </div>
              </div>
          </div>
          </div>
      </nav>
    </div>
    <div class="container">
      <div class="container"
        style="background-image:url(image/insertbg.png); background-repeat: no-repeat; background-size: 100%;">
        <div class="container">
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div class="insert">
          <form id="productForm" method="POST"  action="ins.php" enctype="multipart/form-data">
            <h1 style="top: 0; margin: 10px; text-align: center; color: #2a6854;">إضافة منتجات</h1>
            <label for="productName">إسم المنتج</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="productdesc">الــوصــف</label>
            <input type="text" id="desc" name="desc" required>
            <br>
            <label for="productPrice">السعر</label>
            <input type="number" id="price" name="price" required>
            <br>
            <label for="productImage">الصورة</label>
            <input type="file" id="image" name="image" required>
            <br>
            <button class="button-33" type="submit">إضافة
              المنتج</button>
          </form>
        </div>
        <div class="container" style="text-align: center;">
        <br><br><br><br>
        <button class="button-33" role="button" type="submit" value="Submit">
        <a href="products.php">عــرض كــل الــمــنــتــجــات</a>
        </button>
       </div>
        <div class="container">
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
    <!--footer-->
    <div class="container">
      <footer class="footer">
        <div class="text-center p-4" style="background: #5f8e7f; height: 30px;">
          Tasnim Ftees&copy; 2023
        </div>
        <!-- Copyright -->
      </footer>
    </div>
</body>

</html>