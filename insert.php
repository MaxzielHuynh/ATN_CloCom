<?php
include ('productCRUD.php');

if(isset($_POST['add'])){
    $obj = new ProductCRUD();
    $success = $obj->createProduct($_POST['code'], $_POST['name'], $_POST['price'], $_POST['image'], $_POST['details']);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>ATN Shop | Insert</title>

    </head>
    <body>
        <div class="container">
        <h2>Add a new toy</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="code">Product Code:</label>
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
                <button type="submit" class="btn btn-primary" name="add" >Add New</button>
            </form>
        </div>
    </body>
</html>
