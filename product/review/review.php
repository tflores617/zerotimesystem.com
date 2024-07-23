<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ses_start();
$title = "Zero Time Brush";
$banner_title = "Leave us a Review";
$t = "<link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/redesign/pages/review.css\" />";
require($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");?>
<script>
    let n = <?php echo $_SESSION["nonce"];?>
</script>

<div class="review-wrapper">
    <div class="form-wrapper">
        <div class="form-cont">
            <?php echo session_id();?>
        </div>

        <div class="form-cont">
            <?php echo $_SESSION["nonce"];?>
        </div>

        <!-- <div class="form-cont">
            <input id="order-number" placeholder="Your Order Number"/>
        </div>-->

        <div class="form-cont">
            <input id="name" placeholder="Name"/>
        </div>

        <div class="form-cont">
            <input id="title" placeholder="Review Title"/>
        </div>

        <div class="form-cont">
            <input id="email" type="text" placeholder="Email"/>
        </div>

        <div class="form-cont">
            <textarea id="body" placeholder="Enter Review Here"></textarea>
        </div>

        <div class="form-cont">
            <button onclick="checkReview()"> Submit Review</button>
        </div>
    </div>
    <div id="output">

    </div>
</div>






<script>
    function checkReview(){

        console.log('validate');

        if(validateName() === "1"){
            
        }
        var valid = true;
        if (valid) {
            sendReview();
        }
    }
    function displayError(str){
        //display string to screen
    }



    function sendReview(obj){
        console.log('ajax');
        $.ajax({
            method: 'post',
            url:'forms/submit_review.php',
            dataType: 'json',
            success: function(data){
                console.log('success');
                console.log(data);
            },
            data: {
                'email': $('#email').val(),
                'title': $('#title').val(),
                'body': $('#body').val(),
                'orderNumber': $('#order-number').val(),
                'name': $('#name').val()
            },
            error: function(obj, status, error){
                console.log('error');
                console.log(error);
                console.log(status);
                console.log(obj);
            },
            complete: function(){
                console.log('Ajax call complete!');
            }
        })
    }

    function validateEmail(){

    }
    function validateBody(){

    }
    function validateTitle(){

    }
    function validateName(){

    }
</script>





<?php require($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");?>

<?php
    function ses_start(){
        session_start();
        $hash = hash("sha256", session_id());
        $date = getdate(time());
        $hash_string = hash("sha256", $date["seconds"] 
            . $date["weekday"] . $date[0] . substr($hash, 12) );
        $_SESSION["nonce"] = $hash_string;
        el("=========================================================");
        el("ID : " . session_id() . "// NONCE : " . $_SESSION["nonce"]);
    }


    function el($str){
        //error_log($str, 3, $_SERVER["DOCUMENT_ROOT"] . "/log/test.log");
        error_log($str, 0);
    }
?>