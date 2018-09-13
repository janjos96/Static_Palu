<!DOCTYPE html>
<html lang="pt">

<?php include 'parts/head.php'; ?>

<body>

  <?php include 'parts/nav_store.php'; ?>
  <?php include 'parts/login.php'; ?>

  <div class="gridcontainer_store">

    <div class="article" data-aos="fade-up" data-aos-duration="1500"  data-aos-once="true">

      <div class="article_header">
        <div class="ind_articleimage">
          <img src="media/images/artigos/azul_surfboard/cover.png"/>
        </div>
        <p class="titleind">T-Shirt #1 PALU ORIGINAL</p>
        <p class="priceind">19.99€</p>
        <p class="sizes">S</p>
        <p class="sizes">M</p>
        <p class="sizes">L</p>
        <p class="addtocart">Add to Cart</p>


        <button class="ind_button">See More</button>

        </div>

    </div>

    <div class="article_details" data-aos="fade-up" data-aos-duration="1500"  data-aos-once="true">

      <img class="logoimg" src="media/images/artigos/azul_surfboard/logo.png"/>

      <div class="description1">
        <p class="description_title">Descrição</p>
        <p class="description_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur lorem vestibulum risus posuere pretium. Quisque sed mattis nisl. Mauris nec molestie ipsum, ac molestie erat. Donec dapibus velit eget nisi blandit dictum. Suspendisse at placerat sapien. Fusce gravida massa vitae nisl accumsan, eget sodales sem tempus. Vestibulum a faucibus mi.</p>
      </div>

      <div class="frontimg">
        <img id="frontimg" src="media/images/artigos/azul_surfboard/front.png"/>
      </div>

      <div class="details1">
        <img id="details1" src="media/images/artigos/azul_surfboard/detail1.png"/>
      </div>

  </div>


  <script src="js/aos.js"></script>
  <script>
  AOS.init();
  </script>

  <?php include 'parts/footer.php'; ?>
</body>
</html>
