<style>

footer{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

footer .col{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}
footer .logo{
    margin-bottom: 30px;
}

footer p{
    font-size: 13px;
    margin : 0 0 8px 0;

}

footer a{
    font-size: 13px;
    text-decoration:none ;
    color: #222;
    margin-bottom: 10px;

}

footer .follow {
    margin-top: 20px;
}

footer .follow  i{
    color: #465b52;
    padding-right: 4px;
    cursor: pointer;
}
footer .install .row img{
    border: 1px solid #088178;
    border-radius: 6px;
}

footer .install img{
    margin: 10px 0 15px 0;
}

footer .follow i:hover,
    footer a:hover{
        color: #088178;
    }

footer .copyright{
    width: 100%;
    text-align: center;
}

</style>
<footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.jpeg" width="10%" alt="logo">
            <h4>Contact</h4>
            <p><strong>Address: </strong>123, PV Block, Andheri, Mumbai-400072</p>
            <p><strong>Phone: </strong>9989765456 / 9876543213</p>
            <p><strong>Hours: </strong>10:00 - 18:00, MON - SAT</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Condition</a>
            <a href="#">Contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track my Order</a>
            <a href="#">Help</a>

        </div>

        <div class="col-install">
            <p>Secured Payment Gateways</p>
            <img src="img/pay.png" alt="pay">
        </div>

        <div class="copyright">
            <p>© 2022 Stationery.com All Rights Reserved</p>
          
        </div>
    </footer>