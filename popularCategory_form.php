
<form action="popularCategoryCon.php"  method="get">
  <center>
    <h1>
      Popular Category
    </h1>
  <input type="text" id="category_id" name="category_id" class="category_id" placeholder="category_id" required=""><br><br>

  <input type="text" id="productName" name="productName" class="productName" placeholder="productName" required="">
  <br><br>

  <input type="text" id="image_path" name="image_path" class="image_path" placeholder="image_path" required=""><br><br>

  <input type="text" id="product_price" name="product_price" class="product_price" placeholder="product_price" required=""><br><br>
</center>
  <center><input type="submit" value="Submit" class="submit"></center>

  </form>
  
  <style type="text/css">
  body{
     background-image: url("images/popularImage.png");
     background-size: cover;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
     max-width: 100%;
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
  form .productName{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .image_path{
    margin-top: 30px;
    border-color: white;
    width: 300px;
    height:40px;
  }
  form .product_price{
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