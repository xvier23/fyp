
<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>
<header class="header">

   <div class="flex">

      <a href="index.php" class="logo">PaperScrapes</a>

      <nav class="navbar">
         <?php
            /* Admin */
            if(isset($_SESSION["useruid"])){
              if ($_SESSION["useruid"] === 'admin' ){
                echo "<a href='admin.php'>Add products</a>";
                echo "<a href='orders.php'>View Orders</a>";
                echo "<a href='manage.php'>Statics</a>";
                
              }
            }
          ?>

         <a href="products.php">view products</a>
         <?php
            /* Users */
            if (isset($_SESSION["useruid"])) {
              echo "<a href='search.php'>Check Orders</a>";
              echo "<a href='logout.php'>Logout</a>";
            }
            else {
              echo "<a href='signup.php'>Sign up</a>";
              echo "<a href='login.php'>Log in</a>";
            }
          ?>
          
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>

