<?php include "header.php" ?>

<!-- Čia kontaktų puslapio vidinė dalis -->

<div class="container foto">
    <h3>Kaip mus rasti?</h3>

    <p>
        Įmonę „Keliauk pėsčiomis“ rasite Vytauto g. 5, Dusetos, Zarasų raj. LT-32309. Mus legvai galite pasiekti žemiau nurodytais būdais.
    </p>
    <div class="col s4">

        <div class="images">
            <div class="flexbox1">
                <div>
                    <img src="foto/Autobusas.jpg" alt="Image" height="100" width="150">
                    <h5>Autobusu</h5>
                    <p><a href="https://www.118.lt/transporto-tvarkarasciai/paieska/dusetos-utena" target="_blank">Autobusų tvarkaraščiai</a></p>
                </div>

                <div>
                    <img src="foto/Traukinys.jpg" alt="Image" height="100" width="150">
                    <h5>Traukiniu</h5>
                    <p><p><a href="https://www.traukiniobilietas.lt/portal/routes-schedules" target="_blank">Traukinių tvarkaraščiai</a></p></p>
                </div>
                <div>
                    <img src="foto/Automobilis.jpg" alt="Image" height="100" width="150">
                    <h5>Automobiliu</h5>
                    <p><p><a href="https://www.google.com/maps/d/viewer?ie=UTF8&oe=UTF8&msa=0&mid=1iqY48eEpYUzHZOrVC-CNvdNeObk&ll=55.19004016814186%2C23.88127499999996&z=7" target="_blank">Automobilių maršrutai</a></p></p>
                </div>
            </div>


        </div>

        <div class="flexbox2">
            <div class="mapsbytext">

                <p>Vytauto g. 5, Dusetos, Zarasų r., LT-32309,<br> tel. (8–385) 56849 <br> el. paštas: keliauk@pesciomis.lt kodas: 188738178. </p>
            </div>
            <div class="googlemap">

                <iframe class="mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35931.591335214056!2d25.768808780664443!3d55.74591638273078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e80279d0ee5d7d%3A0x36b9628b2bfb2ab4!2sSartai%20Regional%20Park!5e0!3m2!1sen!2slt!4v1583517547113!5m2!1sen!2slt" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>


    <h6>Susisiekite su mumis!</h6>

    <form action="action_page.php" class="grey darken-1 formosklase">

        <label for="fname">Jūsų vardas</label>
        <input type="text" id="fname" name="firstname" placeholder="Vardas, pavardė">

        <label for="email">El. paštas</label>
        <input type="text" id="lname" name="lastname" placeholder="El. pašto adresas">

        <label for="subject">Tema</label>
        <textarea id="subject" name="subject" placeholder="Jus dominanti tema" style="height:200px"></textarea>

        <input type="submit" value="Siųsti užklausą">

    </form>

</div>
<?php include "footer.php" ?>