<div class="main" style="display:none;">
    <div id="e">
        <div class="e">
            <div class="e-code">
                <h1>Party</h1>
            </div>
            <h2>Join Sean McGinty's 16th Birthday by clicking the button below.</h2>
            <p>This will allow me to uniquely identify you and gives me an idea for numbers. You can only register one time.</p>
            <?php
                if (isset($_SESSION["serverError"])) {
                    echo '<p style="color:red;font-size:larger;font-weight:bold;">Interal server error, try again</p>';
                    unset($_SESSION["serverError"]);
                };
            ?>
            <a href="javascript:<?php echo (($rows[0]['user'] > 0) ? 'i' : 'a');?>();">Proceed</a>
        </div>
    </div>
    <link rel="stylesheet" href="<?=SITE_URL;?>reg.css">
    <form action="<?=SITE_URL;?>s.php" method="POST">
    <div class="rg-container" style="display:none;">
        <h1>Register</h1>
        <p>You can only fill this out once using your invite code. In another sense, this is an RSVP form. Contact me if you need a new invite.</p>
        <label for="uname"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="uname" id="uname" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <label for="notes"><b>Notes / Questions</b></label>
        <input type="text" placeholder="Enter Notes / Questions" name="notes" id="notes">
        <input type="hidden" name="auth" value=<?=$_GET['auth'];?>>
        <button type="submit" class="registerbtn">Register</button>
    </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
<script>
    document.getElementsByClassName("main")[0].style.display="block";
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('.loader', {opacity: 0, duration: 1, ease: 'Power3.easeInOut'})
    gsap.from('.main', {opacity: 0, duration: 1, ease: 'Power3.easeInOut'})
    function a() {
        document.getElementsByClassName("rg-container")[0].style.display="block";
        document.getElementsByClassName("e")[0].style.display="none";
        gsap.from('.rg-container', {opacity: 0, duration: 0.75, ease: 'Power3.easeInOut'})
    }
    function i() {
        alert("Used auth");
    }
</script>