        <div class="buy-now-cont">
            <button id="buyNow" class="buy-now" onclick="window.location.replace('https://zerotimesystem-com.3dcartstores.com/Zero-Time-System-Brush_p_12.html');"><span>Buy Now!</span></button>
        </div>
        <footer>
          <div id="footer-l-cont" class="footer-cont">
            <a href="mailto:zerotimesystem@gmail.com"><i class="far fa-envelope social email"></i><span class="social">Zerotimesystem@gmail.com</span></a>
          </div>
          <div id="footer-m-cont" class="footer-cont">
            
          </div>
          <div id="footer-r-cont" class="footer-cont">
            <div class="social-cont">
              <a id="fb" class="social" href=""><i class="fab fa-facebook-square social"></i><span class="social">@Zerotimesystem</span></a>
            </div>
            <div class="social-cont">
              <a id="ig" class="social" href="https://www.instagram.com/zerotimesystem/?hl=en" ><i class="fab fa-instagram social"></i><span class="social">@Zerotimesystem</span></a>
            </div>
          </div>
        </footer>
      </div><!-- CONTENT END -->

    </div> <!-- WRAPPER END -->
    <script>
        let comingSoon = function(event){
            console.log('hover');
            button = document.querySelector('#buyNow');
            let span = document.createElement('span');
            span.appendChild(document.createTextNode('Coming Soon!'));
            button.replaceChild(span, button.children[0]);
            button.removeEventListener('mouseover', comingSoon);
            button.removeEventListener('click', comingSoon);
        }
        //document.querySelector('#buyNow').addEventListener('mouseover', comingSoon);
        //document.querySelector('#buyNow').addEventListener('click', comingSoon);
    </script>
    
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '195663178777515');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=195663178777515&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    
    
  </body>
  
</html>
