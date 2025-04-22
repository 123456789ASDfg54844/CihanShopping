<?php session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Cihan Shopping Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/red.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->

<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->
				



			
<!-- ========================================= SECTION – HERO : END ========================================= -->	
				<!-- ============================================== INFO BOXES ============================================== -->

<!-- ============================================== INFO BOXES : END ============================================== -->		
			</div><!-- /.homebanner-holder -->
			
		</div><!-- /.row -->

		<!-- ============================================== SCROLL TABS ============================================== -->
		<div  >
		
		<img src="Cihan Shop.png"  width="1200" height="500">
		<div class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>Why Shop With Us</h2>
            <p>Discover the advantages that make us the preferred choice for online shopping</p>
        </div>
        
        <div class="features-container">
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fa fa-truck"></i>
                </div>
                <h3>Free Shipping</h3>
                <p>On all orders over $99</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fa fa-credit-card"></i>
                </div>
                <h3>Secure Payment</h3>
                <p>100% secure payment</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fa fa-refresh"></i>
                </div>
                <h3>Easy Returns</h3>
                <p>30 days return policy</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fa fa-headphones"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Dedicated customer service</p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Features Section Styles */
    .features-section {
        background-color: white;
        color: #333;
        padding: 60px 0;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-title h2 {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
        color: #333;
    }
    
    .section-title h2:after {
        content: '';
        position: absolute;
        width: 60px;
        height: 3px;
        background-color:rgb(0, 0, 0);
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .section-title p {
        font-size: 16px;
        color: #777;
    }
    
    .features-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }
    
    .feature-box {
        flex: 1 1 250px;
        max-width: 300px;
        text-align: center;
        padding: 30px 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        margin-bottom: 20px;
    }
    
    .feature-icon i {
        font-size: 40px;
        color:rgb(0, 0, 0);
        background-color: rgba(76, 175, 80, 0.1);
        width: 80px;
        height: 80px;
        line-height: 80px;
        border-radius: 50%;
        display: inline-block;
    }
    
    .feature-box h3 {
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #333;
    }
    
    .feature-box p {
        color: #666;
        font-size: 14px;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .features-container {
            flex-direction: column;
            align-items: center;
        }
        
        .feature-box {
            width: 100%;
            max-width: 100%;
        }
    }
    
    /* Note: This assumes Font Awesome is included in your project */
    /* If you don't have Font Awesome, add this line to your head section: */
    /* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> */
</style>


			<div class="more-info-tab clearfix">
			   <h3 class="new-product-title pull-left">All Products</h3>
		<!-- 		<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
					<li class="active"><a href="#all" data-toggle="tab">All</a></li>
					<li><a href="#books" data-toggle="tab">Books</a></li>
					<li><a href="#furniture" data-toggle="tab">Furniture</a></li>
				</ul> -->
			</div>

			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" >
<?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		<div class="item">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$<?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">$<?php echo htmlentities($row['productPriceBeforeDiscount']);?>	</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
		<?php if($row['productAvailability']=='In Stock'){?>
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-info">Add to Cart</a></div>
				<?php } else {?>
						<div class="action" style="color:red">Out of Stock</div>
					<?php } ?>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>



			</div>
		</div>
		    

         <!-- ============================================== TABS ============================================== -->
	
		
<hr />

<?php include('includes/brands-slider.php');?>


</div>
</div>




<?php include('includes/footer.php');?>



	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>


	

</body>
</html>