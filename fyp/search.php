<?php @include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PaperScrapes</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- css -->
   <link rel="stylesheet" href="css/style.css">

   <!-- php for search -->
   <?php  
    $sql=mysqli_query($conn, "SELECT * FROM `order`");  
    ?>  

</head>
<body>

<?php include 'header.php'; ?>
<div class="container2">
    <h1 class="heading">Orders</h1>
    <div  class="search-form">
        <form action="" method="GET">
            <label for="email">Search By Email:</label>
            <input type="text" id="email" name="email" class="input" autocorrect="none" autoCapitalize="none" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" required>
            <button type="submit">Search</button>
        </form>

    </div>

    <section>
    <table border='1' >
        <tr>
            <th>order id</th>
            <th>name</th>
            <th>number</th>
            <th>email</th>
            <th>method</th>
            <th>flat</th>
            <th>street</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>pin code</th>
            <th>products</th>
            <th>price</th>
            <th>order date</th>
            <th>status</th>
        </tr>
        <?php  
         if(isset($_GET['email']))
         {
             $email = $_GET['email'];

             $query = "SELECT * FROM `order` WHERE email='$email' ";
             $query_run = mysqli_query($conn, $query);

             if(mysqli_num_rows($query_run) > 0)
             {
                while ($row=mysqli_fetch_assoc($query_run)) { ?>  
                    <tr>  
                         <td><?php echo $row['id'] ?></td>  
                         <td><?php echo $row['name'] ?></td>
                         <td><?php echo $row['number'] ?></td>  
                         <td><?php echo $row['email'] ?></td>  
                         <td><?php echo $row['method'] ?></td>  
                         <td><?php echo $row['flat'] ?></td>  
                         <td><?php echo $row['street'] ?></td>  
                         <td><?php echo $row['city'] ?></td>  
                         <td><?php echo $row['state'] ?></td>  
                         <td><?php echo $row['country'] ?></td>  
                         <td><?php echo $row['pin_code'] ?></td>  
                         <td><?php echo $row['total_products'] ?></td>
                         <td><?php echo $row['total_price'] ?></td>
                         <td><?php echo $row['ord_date'] ?></td> 
                         <td>  
                              <?php  
                              if ($row['status']==1) {  
                                   echo "Preparing";  
                              }if ($row['status']==2) {  
                                   echo "Delivering";  
                              }if ($row['status']==3) {  
                                   echo "Arrived";  
                              }  
                              ?>  
                         </td>  
                    </tr>       
              <?php      }  

             }

            }
        ?>  
    </table>
    </section>

</div>

<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>