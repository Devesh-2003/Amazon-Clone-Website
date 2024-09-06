<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <a href="index.php"><img src="./assets/amazon_logo.png" width="100" alt=""></a>
        <div class="nav-country">
            <img src="./assets/location_icon.png" height="20" alt="">
            <div>
                <p>Deliver to</p>
                <h1>United Kingdom</h1>
            </div>
        </div>
        <div class="nav-search">
            <div class="nav-search-category">
                <p>All</p>
                <img src="./assets/dropdown_icon.png" height="12" alt="">
            </div>
            <input type="text" class="nav-search-input" placeholder="Search Amazon">
            <img src="./assets/search_icon.png" class="nav-search-icon" alt="">
        </div>
        <div class="nav-language">
            <img src="./assets/us_flag.png" width="25px" alt="">
            <p>EN</p>
            <img src="./assets/dropdown_icon.png" width="8px" alt="">
        </div>
        <div class="nav-texts">
            <p><a href="/login.php">Hello, sign in</a></p>
            <h1>Account & Lists <img src="./assets/dropdown_icon.png" width="8px" alt=""> </h1>
        </div>
        <div class="nav-texts">
            <p>Returns</p>
            <h1>& Orders</h1>
        </div>
        <a href="/login.php" class="mobile-user-icon" style="display: none;">
            <img src="./assets/user.png">
        </a>
        <a href="cart.php" class="nav-cart">
            <img src="./assets/cart_icon.png" width="35px" alt="">
            <h4>Cart</h4>
        </a>
    </nav>

    <div class="checkout">
        <h1>Checkout</h1>
        <br>
        <h4>Select the Payment option from which you want to pay</h4>
        <br>
        <form id="paymentForm">
            <label>
                <input type="radio" name="paymentOption" value="upi"> UPI
            </label><br>
            <hr>
            <label>
                <input type="radio" name="paymentOption" value="netbanking"> Net Banking
            </label><br>
            <hr>
            <label>
                <input type="radio" name="paymentOption" value="debitCard"> Debit Card
            </label><br>
            <hr>
            <label>
                <input type="radio" name="paymentOption" value="creditCard"> Credit Card
            </label><br>
            <hr><br>

            <button type="submit" style="text-align: center;">Pay</button>
        </form>
    </div>

    

    <script src="./checkout.js"></script>
</body>

</html>
