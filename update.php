<?php
include ('productCRUD.php');

if(isset($_POST['update'])){
    $obj = new ProductCRUD();
    $success = $obj->updateProduct($_POST['name'], $_POST['price'], $_POST['image'], $_POST['details']);
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h2>Update Item</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                <label for="code" >Product Code: </label>
                    <input type="text" class="form-control" placeholder="Enter Code" id="code" name="code">
                </div>
                <div class="form-group">
                    <label for="code">Product Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="code">Product price:</label>
                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="code">Product Image:</label>
                    <input type="text" class="form-control" placeholder="Enter Image" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="code">Product Details:</label>
                    <input type="text" class="form-control" placeholder="Enter Details" id="details" name="details">
                </div>
                <button type="submit" class="btn btn-primary" name="add" >Update    </button>
            </form>
        </div>
    </body>
</html>
