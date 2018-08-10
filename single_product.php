<?php
include('config.php');
if(isset($_GET['id'])){
$id  = $_GET['id'];
$sql="select * from product where id='$id'";
$select=$conn->query($sql);
$result=mysqli_fetch_assoc($select);
/* echo "<pre>";
print_r($result); */
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
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">
<input type="hidden" name="business" value="jatin12@gmail.com">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php echo $result['product_name']; ?>">
<input type="hidden" name="item_number" value="<?php echo $result['id']; ?>">
<input type="hidden" name="amount" value="<?php echo $result['prize']; ?>">
<input type="hidden" name="currency_code" value="USD">
<!-- Specify URLs -->
<!-- <input type="hidden" name="p3" id="paypalValid" value="1">
<input type="hidden" name="t3" value="M"> -->
<!-- custom variable user ID -->
<!-- specify urls -->
<input type="hidden" name="cancel_return" value="localhost/paypal_integration_php/success.php">
<input type="hidden" name="return" value="http://localhost/paypals/sucess.php"> 
<!-- <input type="hidden" name="notify_url" value="<?php echo $notifyURL; ?>"> -->
<div class="spe-prods">
<div class="mainbox">
<h3><?php  echo $result['product_name'];?> </h3>
<img class="rotprod" src="upload/<?php  echo $result['image'];?>" alt="">
</div>
<div class="price-big">
<div>
<div class="floatting-price">
<h3><?php  echo $result['prize']; ?></h3>
</div>
</div>
<div class="ordersection">
<input type="submit" class="buybtn" value="BUY"/>
</div>
</div>
</div>
</form>
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