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

   <!-- php for order -->
   <?php  
    $sql=mysqli_query($conn, "SELECT * FROM `order`");  
    /* Update Order Stauts With ID */
    if (isset($_GET['id']) && isset($_GET['status'])) {  
      $id=$_GET['id'];  
      $status=$_GET['status'];  
      mysqli_query($conn, "UPDATE `order` SET `status` = '$status' WHERE `order`.`id` = '$id'");
      header("location:orders.php");  
      die();  
    }  
    ?>  

</head>
<body>

<?php include 'header.php'; ?>
<div class="container2">
    <section class="products"> 
        <h1 class="heading">Orders</h1>

    </section>

    <table border='1'>
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
            <th>actions</th>
        </tr>
        <?php  
          /* Orders Loop */
           if (mysqli_num_rows($sql)>0) {  
                 while ($row=mysqli_fetch_assoc($sql)) { ?>  
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
                      <td>  
                           <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
                                <option value="">Update</option>  
                                <option value="1">Preparing</option>  
                                <option value="2">Delivering</option>  
                                <option value="3">Arrived</option>  
                           </select>  
                      </td>  
                 </tr>       
           <?php      }  
            } ?>  
    </table>

<script type="text/javascript">  
      function status_update(value,id){  
           let url = "http://localhost/fyp/orders.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
 </script>  


</div>

<!-- js file link  -->
<script src="js/script.js"></script>


</body>
</html>