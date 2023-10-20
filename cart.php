<?php
include 'head.php'; 

?>

<html>

<head></head>
<style>
  .cart-page {
    margin: 80px auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  .cart-info {
    display: flex;
    flex-wrap: wrap;
  }

  th {
    text-align: left;
    padding: 5px;
    color: #fff;
    background: #ff523b;
    font-weight: normal;
  }

  td {
    padding: 10px 5px;
  }

  td input {
    width: 40px;
    height: 30px;
    padding: 5px;
  }

  td a {
    color: #ff523b;
    font-size: 12px;
  }

  td img {
    width: 80px;
    height: 80px;
    margin-right: 10px;
  }

  .total-price {
    display: flex;
    justify-content: flex-end;
  }

  .total-price table {
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 400px;
  }

  td:last-child {
    text-align: right;
  }

  th:last-child {
    text-align: right;
  }

  @media only screen and (max-width:600px) {
    .cart-info p {
      display: none;
    }
  }
</style>

<body>
  <div class="container cart-page">
    <table>
      <tr>
        <th>Product</th>
        <th>Weight</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remove</th>      
        <th></th>  
        <th>total</th>
      </tr>
      <?php
      
      
      if(isset($_SESSION['id'])){
      if($_SESSION['loggedin'] == "true"){
        $subtotal=0;
        $c=$_SESSION['id'];
        include 'dbconnect.php';
        $q = "SELECT *  FROM `user` WHERE `user_id`='$c'";
        $r=mysqli_query($conn,$q);
        while($r1=mysqli_fetch_assoc($r)){
            $cat_id=$r1['user_id']."<br>";
        
        // $sql = "SELECT * FROM `product` WHERE c_id_fk='$cat_id';";
        $sql = "SELECT *  FROM `cart` WHERE `user_id_fk` ='$cat_id';";
        $res=mysqli_query($conn,$sql);
        // $row=mysqli_fetch_assoc($res);
        while($row=mysqli_fetch_assoc($res))
        {
          $cart_id=$row['cart_id']."<br>";
          $user_id=$row['user_id_fk']."<br>";
          $pro_id=$row['product_id_fk']."<br>";
          $quant=$row['quantity'];
           
           $sql1 = "SELECT *  FROM `product` WHERE `product_id` ='$pro_id';";
           $res1=mysqli_query($conn,$sql1);
            // $row=mysqli_fetch_assoc($res);
           while($row1=mysqli_fetch_assoc($res1))
           {
            $product_name=$row1['product_name'];
            $product_pri=$row1['price'];
            $product_img=$row1['image'];
            $product_we=$row1['weight'];     
          
?>
          <tr>
            <td>
              <div class='cart-info'>
                <img src='Adminfinal/images/<?php echo $product_img; ?>' width='400 vh'>
                <div>
                  <p><?php echo $product_name; ?>
                    <input type='hidden' class='iprice' value=<?php #echo $value['price']; ?>>
                  </p>
                </div>
              </div>
            </td>
            <td>
            <p><?php echo $product_we; ?>gm</p>
            </td>
            <td>
            <p><?php echo $product_pri; ?></p>
            <td>
            <p><?php echo $quant; ?></p>
            </td>
            <td>
            <form action='man_cart.php' method='POST'>
                <!-- <span class="btn minus" data-id="2721888517">-</span>
                <input class='text-center iquant' onchange=" return subtot()" type='number' value=<?php #echo $value['quantity']; ?> min='1' max='10'>
                <span class="btn plus" data-id="2721888517">+</span> -->
                
                <button name='remove_item' class='btn btn-small btn-outline-danger bi bi-trash3' onclick="header(man_cart.php);"></button>
            <input type='hidden' name='item_name' value='<?php #echo $value['item_name']; ?>' >
            <input type='hidden' name='pid' value='<?php echo $pro_id;?>' >
            </td> 
            </form>
            </td>
            <td></td>
          <!-- </form> -->
            </td>
            <?php //echo $value['price'];
            ?>
            <!-- <td></td> -->
            <td id='itotal' name='itotal' value=""><?php
            $total=0;
            $total=$product_pri*$quant;
            echo $total.".00";
            ?></td>
          </tr>


        <?php
        
        $subtotal+=$total;
        }
      }
    }
        ?>


      <?php
      }

      ?>
      
    </table>
    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal </td>
          <td>₹<?php echo $subtotal ?></td>
        </tr>
        <!-- <tr>
          <td>Tax </td>
          <td>₹20 </td>
        </tr>
        <tr>
          <td>Total </td>
          <td>₹<?php #echo $stotal+20; ?></td>
        </tr> -->
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <form action="checkout.php" class="contaner-fluid d-flex flex-row-reverse" id=checkout method="post">
    <button type="submit" class="btn btn-dark text-light" id="checkout"
                name="checkout">
                <!-- <a href="checkout.php">  -->
                    Checkout</button>
                    </form>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <?php # }   }?>
  <script>
    var pri = document.getElementsByClassName('iprice');
    var qua = document.getElementsByClassName('number');
    var itotal = document.getElementsByClassName('itotal');
    //var itotal=document.getElementById('itotal');
    function subtot() {
      for (i = 0; i < pri.length; i++) {
        itotal[i].innnerText = (pri[i].value) * (iquant[i].value);
        document.getElementById("demo1").innerHTML=itotal[i];

        // itotal[i].value=(pri[i].value)*(iquant[i].value);
      }
    }
    subtot();
  </script>
</body>

</html>
<?php 
}else{
  echo "<script>alert('Please login');
  window.location.href='login.php';
  </script>";
}

include 'foot.php'; 

?>