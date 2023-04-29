<?php @include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- css -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <!-- php for graph -->
   <?php 
   
   $query = mysqli_query($conn, "SELECT ord_date AS ord_date, SUM(total_price) as total FROM `order` GROUP BY ord_date");
   
   foreach($query as $data)
   {
      $date[] = $data['ord_date'];
      $amount[] = $data['total'];
   }

   ?>
</head>
<body>

<?php include 'header.php'; ?>
<div class="container">
<section class="products">

   <h1 class="heading">Total Sales</h1>
   <div>
   <canvas id="myChart"></canvas>
   </div>
<!-- graph 1 -->
   <script>
   
   const labels = <?php echo json_encode($date)?>;
   const data = {
   labels: labels,
   datasets: [{
      label: 'Sales',
      data: <?php echo json_encode($amount)?>,
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
   }]
   };

   const config = {
   type: 'line',
   data: data,
   };
      var myChart = new Chart(
         document.getElementById('myChart'),
         config
      );

   </script>
</div>

</section>


</div>

<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>