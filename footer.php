    
    <!-- Čia pasikartojanti visuose puslapiuose apatinė dalis -->
    </main>

    <footer class="page-footer teal darken-2">
          <div class="container">
      
            <div class="row">
 
              <div class="col l6 s12">
                <h5 class="white-text">Quote of the day</h5>
                <p class="grey-text text-lighten-4">Growing old is mandatory, but growing up is optional.</p>
              </div>

              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">If you dare</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="foto/smile1.jpg">click me</a></li>
                  <li><a class="grey-text text-lighten-3" href="foto/smile2.jpg">and me</a></li>
                  <li><a class="grey-text text-lighten-3" href="foto/smile3.jpg">me too</a></li>
                  <li><a class="grey-text text-lighten-3" href="foto/smile4.jpg">me three</a></li>
                </ul>
                
              </div>
           


            </div>
          </div>
          <div class="footer-copyright">
          <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
            <div class="container">

            © 2020 Copyright
            <a class="grey-text text-lighten-4 right" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">CLICK</a>
            <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=b417ad819f92290e0e7debbb41c8b82dbec8e308'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/646772/t/2"></script>
            </div>
          </div>
        </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/script.js"></script>

    



<body onload="startTime()">

<div id="txt"></div>
</body>
</html>