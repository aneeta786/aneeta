<?php
include('config.php');
$sql="select * from product";
$select=$conn->query($sql);
while($result=mysqli_fetch_assoc($select)){
$sql1[]=$result;
//print_r($sql1);
}
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
//$paypal_id='aneetarajput922-facilitator@gmail.com'; // Business email ID
$paypal_id='aneetarajput922-facilitator@gmail.com';
?>
<h4>Welcome, Guest</h4>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>A free Bootstrap / HTML5 / CSS3 product display template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>    
<link href='http://fonts.googleapis.com/css?family=Indie Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--Choco bar Theme CSS style -->
<link href="css/products.css" rel="stylesheet">     
<link rel="stylesheet" href="css/animate.css">   
</head>
<body >
<!-- Special Products section starts-->
<div class="section outdiv" id="specialities">
<div class="container">
<div class="col-md-12"><h1 class="text-center wow pulse"><span>Our Specialities</span></h1>
<p class="sub-headers text-center">Top rated by customers!</p>
<div class="speciality wow fadeIn" data-wow-delay="0.6s">
<?php
foreach($sql1 as $value){
?>
<div class="spe-prods">
<div class="mainbox">
<h3><?php  echo $value['product_name'];?> </h3>
<img class="rotprod" src="upload/<?php  echo $value['image'];?>" alt="">
</div>
<div class="price-big">
<div>
<div class="floatting-price">
<h3><?php  echo $value['prize']; ?></h3>
</div>
</div>
<div class="ordersection">
<a class="buybtn" href="single_product.php?id=<?php echo  $value['id'];?>">View</a>
</div>
</div>
</div>
<?php } ?>         
</div>
</div>   
</div>
<div class="space text-center">
<a class="btn btn-danger btn-lg wow bounceIn" href="http://www.jquery-az.com/"><i class="icon-upload-alt"></i>Download Code</a>
</div>    
</div>                           
<!--Special Products Ending here -->            
<!-- Required JavaScript libraris collection -->    
<!--The jQuery library from local-->    
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap library from local -->        
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- In own hosting -->
<!-- <script src="js/wow.min.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
//Initializing WOW aninations
new WOW().init();
</script>
</form>
</body>
</html>                    