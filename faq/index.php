<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
$title = "Zero Time FAQs";
$banner_title = "Zero Time FAQs";
$t = "<link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/redesign/pages/faq.css\" />";
require($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
?>
<div id="faq-section">
    <div class="faq">
      <div class="question">
        What is the best way to mix your product in the bowl?
      </div>
      <div class="answer">
        If you dont weigh your product try pouring your peroxide in first.  If your shake the bowl a bit it will settle perfectly at the measuring line then add your color.
            Using a whisk to mix the product saves the life of your bristles.  Tilt bowl and blend away!
      </div>
    </div>

    <div class="faq">
      <div class="question">
        Does this brush really use 23 percent less time?
      </div>
      <div class="answer">
        At least!  After the small learning curve many have found they can do a root touch up in 6 to 10 minutes.  Fun to time yourself!
      </div>
    </div>

    <div class="faq">
      <div class="question">
        The turqoise bristles are cool and soft but they seem hard to clean.
      </div>
      <div class="answer">
        There are a lot of bristles to clean.   Big brush!   It helps to push on them under hot water to seperate them.
             A dish cleaning brush will speed this up for the brush and bowl.  It also saves your hands.
      </div>
    </div>
    <div class="faq">
      <div class="question">
        Love the curved brush but sometimes it doesnt hit the head.
      </div>
      <div class="answer">
        Everyone has a different head size so sometimes the large brush is just too big.  Try the medium size.
     It also helps to rock the brush to get both sections at once.
      </div>
    </div>


</div>



<!--
<script>
  $('.question').click(function(){
     $(this).next().toggle();

     if ($(this).css('border-bottom') === '1px solid #000000') {
         $(this).css('border-bottom', 'none');
     } else {
         $(this).css('border-bottom', '1px solid #000000');
     }
  });
</script>
-->
<?php require($_SERVER['DOCUMENT_ROOT'] . "/includes/footer2.php");?>
