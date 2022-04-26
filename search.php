<?php include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart items</title>
</head>

<body>
    <div>
   <br> <h1 class="Font1">Taste of India</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/5.jpeg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">PIZZA</h5>
                        <p class="card-text">Rs. 99</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="PIZZA">
                        <input type="hidden" name="Price" value="99">
                    </div>
                </div>
                </form>
            </div>
            
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/7.jpeg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Paneer PIZZA</h5>
                        <p class="card-text">Rs. 129</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="P_PIZZA">
                        <input type="hidden" name="Price" value="129">
                    </div>
        </div>
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/R.jfif" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">NOODLES</h5>
                        <p class="card-text">Rs. 49</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Noodles">
                        <input type="hidden" name="Price" value="49">
                    </div>
        </div>
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/op.jfif" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Chicken NOODLES</h5>
                        <p class="card-text">Rs. 89</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="CNoodles">
                        <input type="hidden" name="Price" value="89">
                    </div>
        </div>

        
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/hg.jpg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Chicken Momo</h5>
                        <p class="card-text">Rs. 65</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Cmomo">
                        <input type="hidden" name="Price" value="89">
                    </div>
        </div>

        
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/chf.jpg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Fruit Milkshake</h5>
                        <p class="card-text">Rs. 89</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Fshake">
                        <input type="hidden" name="Price" value="89">
                    </div>
        </div>

        
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/v.jpg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Dal Dhokali</h5>
                        <p class="card-text">Rs. 150</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="DalD">
                        <input type="hidden" name="Price" value="89">
                    </div>
        </div>

        
    </div>
</form>

<div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/fg.jpg" class="card-img-top">
                    <div class="card-body text-center" >
                        <h5 class="card-title">Kathi Roll</h5>
                        <p class="card-text">Rs. 50</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="Krol">
                        <input type="hidden" name="Price" value="89">
                    </div>
        </div>

        
    </div>
</form>

</body>

</html>