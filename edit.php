<?php
include "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = ?";
    
    $do = $conn->prepare($query);
    $do->bind_param("i", $id);
    $do->execute();
    
    $result = $do->get_result();

    if($result->num_rows >  0){
        $row = $result->fetch_assoc();
    } 
}

if(isset($_POST['update_product'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $i = basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $i);
        $image = "img/" . $i;
    } else {
        $image = $row["image"];
    }

    $query = "UPDATE products SET name = ?, dicreption = ?, price = ?, image = ? WHERE id = ?";
    $do = $conn->prepare($query);
    $do->bind_param("ssisi", $name, $desc, $price, $image, $id);

    if($do->execute()){
        echo "Product updated successfully.";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($row["name"]) ? htmlspecialchars($row["name"]) : ''; ?>"><br>

    <label for="desc">Description:</label>
    <input type="text" id="desc" name="desc" value="<?php echo isset($row["dicreption"]) ? htmlspecialchars($row["dicreption"]) : ''; ?>"><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="<?php echo isset($row["price"]) ? htmlspecialchars($row["price"]) : ''; ?>"><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" value="Submit" name="update_product">تــعــديــل الــمــنــتــج</button>
</form>