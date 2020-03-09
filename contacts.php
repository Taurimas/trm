<?php include "header.php" ?>

<!-- Čia kontaktų puslapio vidinė dalis -->

<div class="container">
    <h3>Kaip mus rasti?</h3>

    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam dolore facere animi amet eos, distinctio aliquid accusantium blanditiis recusandae corrupti. Sint dolorem nihil numquam ipsam praesentium quae obcaecati et modi.lorem
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum libero impedit corrupti soluta dolorum. Repudiandae rem nam praesentium molestiae nostrum libero tempora doloremque at rerum deserunt sequi, suscipit, autem eveniet.
    </p>
    <div class="col s4">

    <div class="images">
    <div class= "flexbox1">
    <div>
        <img src="foto/Autobusas.jpg" alt="Image" height="100" width="150">
        <h5>takas</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quae esse rerum laboriosam possimus eum dolore ea dicta expedita nemo nobis molestias placeat ipsam voluptate, non dolorum! Impedit, cupiditate rem!</p>
    </div>

    <div>
        <img src="foto/Traukinys.jpg" alt="Image" height="100" width="150">
        <h5>takas</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quae esse rerum laboriosam possimus eum dolore ea dicta expedita nemo nobis molestias placeat ipsam voluptate, non dolorum! Impedit, cupiditate rem!</p>
    </div>
    </div>
    <div>
        <img src="foto/Automobilis.jpg" alt="Image" height="100" width="100">
        <h5>takas</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quae esse rerum laboriosam possimus eum dolore ea dicta expedita nemo nobis molestias placeat ipsam voluptate, non dolorum! Impedit, cupiditate rem!</p>
    </div>

    </div>
    <div class = "googlemap">

<iframe class ="mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35931.591335214056!2d25.768808780664443!3d55.74591638273078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e80279d0ee5d7d%3A0x36b9628b2bfb2ab4!2sSartai%20Regional%20Park!5e0!3m2!1sen!2slt!4v1583517547113!5m2!1sen!2slt" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

</div>

<div class="container">
  <form action="action_page.php">

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