<?php 
    include "includes/header.php";
    include "includes/nav.php";
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="text-center">~CONTACT US~</h1>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 ">
            <div class="message">
                <h2>Send a Message</h2>
                <form action="contact.php">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                    </div>
    
                    <div class="form-group">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" class="form-control" name="mobile" id="mobile">
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
    
                    </div>
    
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-5">
            <div class="help">
                <div class="how">
                    <h2>How can we help ?</h2>
                    <p>Get in touch with us for any kind of professional inquiries.</p>
                    <p>We’d love to hear from you</p>
                </div>

                <div class="contact">
                    <h2>Contact No.</h2>
                    <p><i class="fa fa-phone" style="font-size:24px"></i> +44 189 280 5040</p>
                    <p><i class="fa fa-phone" style="font-size:24px"></i> +33 17 585 0312 </p>
                    <p><i class="fa fa-phone" style="font-size:24px"></i> +61 1800 861 302</p>
                </div>

                <div class="location">
                    <h2>Location</h2>
                    <address>
                        <h5>Bangalore, India</h5>
                        <p>Tower B, 5th floor, Swamy Vivekananda Road, Sadanandanagar,Bennigana Halli, Bengaluru - 560 016</p>
                    </address>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include "includes/footer.php";?>











