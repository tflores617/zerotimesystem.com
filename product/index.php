<?php
    $title = "Zero Time Product";
    $banner_title = "Why Zero Time?";
    $t = "<link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/redesign/pages/index.css\" />" . 
        "<link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/redesign/pages/product.css\" />" .
        "<link type=\"text/css\" rel=\"stylesheet\" href=\"/product/modal/modal.css\" />".
        "<script src=\"/product/modal/modal.js\"/></script>";
    require($_SERVER["DOCUMENT_ROOT"] . "/includes/header.php");
?>
<div class="product-body">
    <section class="text">
        
        <div class="section-full-cont">
            <span class="text first">
                <span class="indent">While </span>using the Zero Time system, 
                stylists noticed not only how much time it saved but also surprisingly 
                how much product was being saved. After testing, we decided to have a 
                professional study done by Bria Institute. Bria has its own pharmacist 
                and salon with a laboratory just for beauty products. The President and 
                CEO Arun Nandagiri has many patents of his own, which include beauty and 
                hair color products. 
            </span>
            <span class="text">
                <span class="indent">During</span> the study, 
                stylists used approximately 32% less product than the conventional brush 
                for root touches and 15% less product for application to the whole head. 
                The new brush system also took 26% less time to apply product to the 
                roots when compared to a conventional brush and bowl. 
            </span>
            
        </div>
    </section>
    
    <div class="vert-space"></div>
    <section class="three-images">
        <div class="three-img-section-cont">
            <img src="/images/graphs/average-time-roots.png"/>
        </div>
        <div class="three-img-section-cont">
            <img src="/images/graphs/average-amount-roots.png"/>
        </div>
        <div class="three-img-section-cont">
            <img src="/images/graphs/average-whole-head.png"/>
        </div>
        
    </section>
    <div class="clear-button-cont">
        <a class="clear-button" href="/docs/zero-time-study.doc">
            <span>Download the Entire Study</span>
        </a>
    </div>
    <div class="vert-space"></div>
    <div id="revCont" class="reviews-cont" onload="populateReviews()">

    </div>
            
</div>
<script>
    document.querySelectorAll('.three-img-section-cont').forEach((cont)=>{
        cont.children[0].addEventListener('click', function(){
            openModal(cont.children[0].src);
        });
    });
    let currentAmount = 0; 
    function populateReviews(){
        $.ajax({
            url: 'get_reviews.php',
            method: 'post',
            data: currentAmount,
            success: (data)=>{
                try{
                    JSON.parse(data);
                    currentAmount = data.currentAmount;
                    data.reviews.forEach((review)=>{
                        fillReview(review);
                    });
                } catch e {
                    
                }

            }
        });
    }

    function fillReview(revObj){
        let revCont = document.querySelector('#revCont'),
            review = document.createElement('div'),
            titleSpan = document.createElement('span'),
            bodySpan = document.createElement('span'),
            nameSpan = document.createElement('span'),
            dateSpan = document.createElement('span');
        titleSpan.innerHTML = revObj.title;
        bodySpan.innerHTML = revObj.body;
        nameSpan.innerHTML = revObj.name;
        dateSpan.innerHTML = revObj.date;
        review.appendChild(nameSpan);
        review.appendChild(titleSpan);
        review.appendChild(bodySpan);
        review.appendChild(dateSpan);
        revCont.appendChild(review);
        
    }

    
</script>
<!-- END MAIN CONTENT-->
<?php require($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");?>
