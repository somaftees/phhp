<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="css/sty.css">
</head>
<body>
<div style="text-align: center;">
<h1>View Products</h1>
  <button class="button1" role="button" type="submit" value="Submit">
                    <a href="insert.php">
                  إضــافــة الــمــنــتــج
            </a>
                </button>
</div>
<div class="product-cards">
  
    <?php
    include "db.php";
    $sql = "SELECT * FROM `products`;";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("query failed".mysqli_error());
            }
            else {
            while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="product-card">
                <form method="POST" action="delete.php" enctype="multipart/form-data">
                    <img src="<?php echo $row["image"]; ?>"  alt="Product Image">
                    <h2><?php echo htmlspecialchars($row["name"]); ?></h2>
                    <p><?php echo htmlspecialchars($row["dicreption"]); ?></p>
                    <p><?php echo htmlspecialchars($row["price"]); ?></p>
                    
                    <input type="hidden" name="names" value="<?php echo htmlspecialchars($row["name"]); ?>">
                    <button class="button-44" role="button" type="submit" value="Submit" >حـــــذف الــمــنــتــج</button>
                </form>
                <form method="POST" action="edit.php" enctype="multipart/form-data">
                  <input type="hidden" name="names" value="<?php echo htmlspecialchars($row["name"]); ?>">
                  <button class="button-33" role="button" type="submit" value="Submit">
                    <a href="edit.php?id=<?php echo $row['id']; ?>">
                  تــعــديــل الــمــنــتــج
            </a>
                </button>
                </form>
    </div>
<?php
            }
}

?>
</div>
</body>
</html>