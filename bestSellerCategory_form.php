<form action="bestSellerCategoryCon.php"  method="get">
  <center>
    <h1>
      Best Sellers Category
    </h1>
   <input type="text" id="category_id" name="category_id" class="category_id" placeholder="category_id" required=""><br><br>

  <input type="text" id="product_name" name="product_name" class="product_name" placeholder="product_name" required="">
  <br><br>

  <input type="text" id="image" name="image" class="image" placeholder="image" required=""><br><br>

  <input type="text" id="price" name="price" class="price" placeholder="price" required=""><br><br>

  <input type="text" id="product_reviews" name="product_reviews" class="product_reviews" placeholder="product_reviews" required=""><br><br>
</center>

  <center><input type="submit" value="Submit" class="submit"></center>
  </form>
<style type="text/css">
  body{
     background-image: url("images/bestsellers.png");
     background-size: cover;
     max-width: 100%;
     /* Center and scale the image nicely */
     background-position: center;
     background-repeat: no-repeat;
  }
  form h1{
    margin-top: 60px;
    color: white;
  }
  form .category_id{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .product_name{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .image{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .price{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .product_reviews{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .submit{
    border-radius: 60px;
    background-color: black;
    color: white;
    margin-top: 20px;
    font-size: 13px;
    font-style: italic;
    width: 74px;
    height: 40px;
    border-color: black;
  }
</style>