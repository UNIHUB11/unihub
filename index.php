<?php
session_start();
if (!isset($_SESSION['USER_LOGIN']) || $_SESSION['USER_LOGIN'] != 'yes') {
    header("Location: login.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
    <link rel="icon" href="Logo with bg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      /* Reset box model and set default styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Body styles */
body {
  background-color: #ccc;
  font-family: Arial, sans-serif;
}

/* Carousel styles */
.carousel-inner,
.carousel-item {
  max-height: 600px;
}
    .my-nav {
      font-size: x-large;
      padding: 10px 20px;
      position: absolute;
      width: 100%;
      z-index: 1000; /* Ensure navbar is on top of other content */
    }
    .navbar-nav .nav-link:hover {
      color: orange; /* Set hover color to orange */
    }

.carousel-item {
  height: 100vh;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-radius: 100%;
}

.carousel-indicators [data-bs-target] {
  display: block;
  width: 10px;
  height: 10px;
  margin: 0 3px;
  background-color: #fff;
  border-radius: 100%;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}

.carousel-indicators [data-bs-target]:hover {
  opacity: 1;
}


/* Grid styles */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 20px;
  justify-items: center;
  padding: 20px;
  overflow-x: auto;
}

.category-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 20px;
  justify-items: center;
  padding: 20px;
  overflow-x: auto;
}

.category-image {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  overflow: hidden;
}

.category-link {
  text-align: center;
  text-decoration: none;
  color: #333;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Dialog styles */
#location{
  background-image: url('https://i.pinimg.com/originals/e6/84/d2/e684d28d15c0cd42069bec09ea7d2a95.jpg');
  background-repeat: no-repeat;
}
.modal-body,.modal-header,.modal-footer{
  background-color: bisque;
}
#small-dialog1 {
  background-color: var(--bg-color);
  background-image: url('https://cdn-icons-png.flaticon.com/512/535/535239.png');
  background-size: 50px;
  background-repeat: no-repeat;
  max-width: 650px;
  margin: 40px auto;
  position: relative;
  text-align: center;
  border-radius: 8px;
}

.select-city h3 {
  margin: 20px;
  font-size: 22px;
}

.select-city p {
  font-size: 1em;
  font-weight: 500;
  margin-bottom: 0.5em;
}

.list_of_cities {
  width: 100%;
  padding: 12px;
  border: 1px solid var(--border-color-light);
  color: var(--heading-color);
  font-size: 14px;
  background: var(--bg-grey);
}

.list_of_cities:focus {
  outline: none;
}


/* Custom select styles */
select {
  appearance: none;
  background-color: transparent;
  background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEyL3Jhd3BpeGVsb2ZmaWNlMjBfYmFja2dyb3VuZF9pbGx1c3RyYXRpb25fb2ZfYV9mYWxsX3Bhc3RlbF9iYWNrZ19hMGM1YzU4MC1kODBhLTQ0ZjEtYjhjNy1jNWI4Y2E0NzMxNTRfMS5qcGc.jpg');
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: pointer;
  line-height: inherit;
  outline: none;
}

/* Responsive layout */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}
.w3l-footer-22 .footer-hny {
  background: #232020;
}

.w3l-footer-22 .footer-hny li {
  list-style: none;
}

.w3l-footer-22 a.logo-footer {
  color: #fff;
  font-weight: 900;
}

.w3l-footer-22 span.lohny {
  color: #ff7315;
  margin-bottom: 0;
}

.w3l-footer-22 .text-txt h3 {
  color: #fff;
  font-size: 26px;
  line-height: 30px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.w3l-footer-22 p {
  font-weight: normal;
  font-size: 16px;
  color: #a09292;
}

.w3l-footer-22 ul.social-footerhny li {
  display: inline;
  margin-right: 16px;
}

.w3l-footer-22 ul.social-footerhny li a {
  color: #fff;
  display: inline-block;
  width: 36px;
  height: 36px;
  background-color: #3a3535;
  text-align: center;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
}

.w3l-footer-22 ul.social-footerhny li a span.fa {
  color: #fff;
  font-size: 18px;
  line-height: 37px;
  margin: 0;
}

.w3l-footer-22 ul.social-footerhny li a:hover {
  background: #ff7315;
  transition: 0.3s ease;
}

.w3l-footer-22 .subscride-link h4 {
  font-size: 22px;
  margin-top: 81px;
  color: #fff;
}

.w3l-footer-22 .sub-one-left h6,
.w3l-footer-22 .sub-two-right h6 {
  color: #fff;
  font-size: 20px;
  line-height: 20px;
  text-transform: uppercase;
  margin-bottom: 25px;
}

.w3l-footer-22 .sub-one-left p,
.w3l-footer-22 .sub-two-right p {
  font-style: normal;
  font-weight: normal;
  line-height: 25px;
  color: #a09292;
}

.w3l-footer-22 .sub-columns {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-top: 60px;
}

.w3l-footer-22 .footer-hny-ul {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.w3l-footer-22 .footer-hny-ul li a {
  font-style: normal;
  font-weight: normal;
  font-size: 15px;
  line-height: 24px;
  color: #a09292;
  margin: 0 0 10px 0;
  display: block;
}

.w3l-footer-22 .sub-two-right ul li {
  display: inline-block;
}

.w3l-footer-22 a.pay-method {
  color: #acb2b7;
}

.w3l-footer-22 a.pay-method span {
  font-size: 34px;
  margin: 0 10px 0px 0;
}

.w3l-footer-22 a.pay-method:hover {
  color: #a09292;
}

.w3l-footer-22 ul.social li,
.w3l-footer-22 ul.jst-link li {
  display: inline-block;
  margin-right: 15px;
}

.w3l-footer-22 .columns p a,
.w3l-footer-22 .columns ul li a {
  font-size: 16px;
  line-height: 20px;
  color: #a09292;
}

.w3l-footer-22 .footer-hny-ul li a:hover,
.w3l-footer-22 .columns p a:hover,
.w3l-footer-22 .columns ul li a:hover {
  color: #ff7315;
}

.w3l-footer-22 .right-side h4 {
  font-size: 36px;
  line-height: 46px;
  color: #fff;
}

.w3l-footer-22 .below-section {
  align-items: center;
  margin-top: 60px;
  border-top: 1px solid #565252;
  padding-top: 36px;
}

.w3l-footer-22 #movetop {
  position: fixed;
  bottom: 100px;
  right: 15px;
  z-index: 99;
  font-size: 16px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  width: 38px;
  height: 38px;
  background: #3a3535;
  padding: 0;
  line-height: 38px;
  transition: 0.5s ease-out;
  border-radius: 50%;
}

.w3l-footer-22 #movetop:hover {
  background: #ff7315;
}

@media (max-width: 992px) {
  .w3l-footer-22 .right-side {
    margin-top: 2em;
  }

  .w3l-footer-22 .right-side h4 {
    font-size: 32px;
    line-height: 42px;
  }
}

@media (max-width: 768px) {
  .w3l-footer-22 .sub-columns {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
    margin-top: 40px;
  }

  .w3l-footer-22 .columns p a,
  .w3l-footer-22 .columns ul li a {
    font-size: 15px;
  }

  .w3l-footer-22 .below-section {
    align-items: center;
    margin-top: 40px;
    padding-top: 20px;
    text-align: center;
  }

  .w3l-footer-22 ul.jst-link {
    margin-bottom: 10px;
  }
}

@media (max-width: 600px) {
  .w3l-footer-22 .right-side h4 {
    font-size: 24px;
    line-height: 30px;
  }

  .w3l-footer-22 .sub-one-left h6,
  .w3l-footer-22 .sub-two-right h6 {
    font-size: 18px;
    line-height: 18px;
    margin-bottom: 20px;
  }
}
.lohny {
   margin-bottom: 0;
   color: #ff7315;
 }

    </style>
    <title>UNIHUB MENU</title>
</head>
<body>
  
<?php if (!empty($msg)) { echo '<h2 style="color:green; text-align:center;">' . $msg . '</h2>'; } ?>
    <?php if (!isset($_SESSION['USER_LOGIN'])) ?>
    <h2 >Welcome, <?php echo $_SESSION['USER_NAME']; ?>!</h2>
  
  <nav class="my-nav navbar navbar-light navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-size:xx-large;"><img src="Logo.png" style="height: 150px; width: 200px;"><span style="background-color:bisque;border:solid 4px orange;">UNIVERSAL<span class="lohny">SHOP</span>HUB</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><span class="lohny">Login/Signup</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#location"><span class="lohny">Location</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkout.php">Checkout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="location" class="modal" data-bs-backdrop="static">
    <div class="modal-dialog">
    <div class="modal-content text-dark">
    <div class="modal-header">
    <h1 class="modal-title">Location</h1>
    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <div id="small-dialog1" class="mfp-hide">
        <div class="select-city">
          <h3> Please Select Your Location</h3>
          <select class="list_of_cities">
            <optgroup label="Popular Cities">
              <option selected style="display:none;color:#eee;">Select City</option>
              <option>Hyderabad</option>
              <option>Mumbai</option>
              <option>Chennai</option>
              <option>Bhopal</option>
              <option>Kolkata</option>
              <option>Thiruvanathapuram</option>
              <option>Bangalore</option>
              <option>New Delhi</option>
              <option>Vizag</option>
              <option>Patna</option>
              <option>Jaipur</option>
              <option>Gujarat</option>
              <option>Assam</option>
              <option>Goa</option>
            </optgroup>
            <optgroup label="Telangana">
              <option>Hyderabad</option>
              <option>Warangal</option>
              <option>Karimnagar</option>
              <option>Nalogonda</option>
              <option>Medak</option>
            </optgroup>
            <optgroup label="Maharastra">
              <option>Mumbai</option>
              <option>Nagpur</option>
              <option>Solapur</option>
              <option>Pune</option>
              <option>Aurangabad</option>
            </optgroup>
            <optgroup label="Tamil Nadu">
              <option>Chennai</option>
              <option>Tanjavur</option>
              <option>Madhurai</option>
              <option>Coimbatore</option>
              <option>Rameshwaram</option>
            </optgroup>
            <optgroup label="Madhya Pradesh">
              <option>Bhopal</option>
              <option>Indore</option>
              <option>Ujjain</option>
              <option>Seoni</option>
              <option>Jabalpur</option>
            </optgroup>
            <optgroup label="West Bengal">
              <option>Kolkata</option>
              <option>Howrah</option>
              <option>Darjeeling</option>
              <option>Barrackpur</option>
              <option>Kamarhati</option>
            </optgroup>
            <optgroup label="Kerala">
              <option>Thiruvanathapuram</option>
              <option>Kochi</option>
              <option>Palakkad</option>
              <option>Thrissur</option>
              <option>Kottayam</option>
            </optgroup>
            <optgroup label="Karnataka">
              <option>Bangalore</option>
              <option>Udipi</option>
              <option>Mangaluru</option>
              <option>Raipur</option>
              <option>Ballar</option>
            </optgroup>
            <optgroup label="Delhi">
              <option>New Delhi</option>
              <option>Agra</option>
              <option>Gokalpuri</option>
              <option>Mandoli</option>
              <option>Deoli</option>
            </optgroup>
            <optgroup label="Andhra Pradesh">
              <option>Vizag</option>
              <option>Vijayawada</option>
              <option>Kadapa</option>
              <option>Kurnool</option>
              <option>Nellore</option>
            </optgroup>
            <optgroup label="Bihar">
              <option>Patna</option>
              <option>Gaya</option>
              <option>Darbhanga</option>
              <option>Nalanda</option>
              <option>Rajgir</option>
            </optgroup>
            <optgroup label="Rajasthan">
              <option>Jaipur</option>
              <option>Udaipur</option>
              <option>Jodhpur</option>
              <option>Alwar</option>
              <option>Ajmer</option>
            </optgroup>
            <optgroup label="Gujarat">
              <option>Gujarat</option>
              <option>Ahmedabad</option>
              <option>Surat</option>
              <option>Rajkot</option>
              <option>Dwaraka</option>
            </optgroup>
            <optgroup label="Assam">
              <option>Assam</option>
              <option>Nagoan</option>
              <option>Guwahati</option>
              <option>Jorhat</option>
              <option>Tinsukia</option>
            </optgroup>
            <optgroup label="Goa">
              <option>Goa</option>
              <option>Panaji</option>
              <option>Vasco Da Gama</option>
              <option>Pali</option>
              <option>Dicholi</option>
            </optgroup>
            <optgroup label="Odisha">
              <option>Bhubaneswar</option>
              <option>Puri</option>
              <option>Cuttack</option>
              <option>Rourkela</option>
              <option>Sambalpur</option>
            </optgroup>
            <optgroup label="Punjab">
              <option>Lahore</option>
              <option>Amritsar</option>
              <option>Faisalabad</option>
              <option>Multān</option>
              <option>Rawalpindi</option>
            </optgroup>
            <optgroup label="Jharkand">
              <option>Ranchi</option>
              <option>Jamshedpur</option>
              <option>Dhanbad</option>
              <option>Hazaribagh</option>
              <option>Bokaro</option>
            </optgroup>
            <optgroup label="Haryana">
              <option>Gurugram</option>
              <option>Panipat</option>
              <option>Hisar</option>
              <option>Ambala</option>
              <option>Karnal</option>
            </optgroup>
            <optgroup label="Manipur">
              <option>Imphal</option>
              <option>Moirang</option>
              <option>Andro</option>
              <option>Saitu-Gamphazol</option>
              <option>Thoubal</option>
            </optgroup>
            <optgroup label="Mizoram">
              <option>Baltimore</option>
              <option>Frederick</option>
              <option>Rockville</option>
              <option>Gaithersburg</option>
              <option>Bowie</option>
            </optgroup>
            <optgroup label="Nagaland">
              <option>Nagaland</option>
            </optgroup>
            <optgroup label="Meghalaya">
              <option>Meghalaya</option>
            </optgroup>
            <optgroup label="Sikkim">
              <option>Sikkim</option>
            </optgroup>
            <optgroup label="Arunachal Pradesh">
              <option>Arunachal Pradesh</option>
            </optgroup>
            <optgroup label="Chattisgarh">
              <option>Chattisgarh</option>
            </optgroup>
            <optgroup label="Chandigarh">
              <option>Chandigarh</option>
            </optgroup>
            <optgroup label="Tripura">
              <option>Tripura</option>
            </optgroup>
            <optgroup label="Ladakh">
              <option>Ladakh</option>
            </optgroup>
            <optgroup label="Jammu And Kashmir">
              <option>Jammu And Kashmir</option>
            </optgroup>
          </select>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" data-bs-dismiss="modal">SUBMIT</button>
    </div>
    </div>
    </div>
  </div>
  <!--Carousel-->
  <div class="row">
    <div class="col-md-12">
    <div id="items" class="carousel slide my-carousel" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#items" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#items" data-bs-slide-to="1"></li>
          <li data-bs-target="#items" data-bs-slide-to="2"></li>
          <li data-bs-target="#items" data-bs-slide-to="3"></li>
          <li data-bs-target="#items" data-bs-slide-to="4"></li>
          <li data-bs-target="#items" data-bs-slide-to="5"></li>
          <li data-bs-target="#items" data-bs-slide-to="6"></li>
        </ol>
      <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" style="max-height: 600px;" src="https://images.unsplash.com/photo-1600585154084-4e5fe7c39198?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 700px;" src="https://trendylifestories.com/wp-content/uploads/2021/07/swboHdeD9J3HTkFtl5wzr-transformed.png" alt="">
      </div>
      <div class="carousel-item">
        <img  class="d-block w-100" style="max-height: 600px;" src="https://i.pinimg.com/736x/4c/66/71/4c6671c0ebb3c8aaaba0b23c50197fe0.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://stanlil.co.uk/wp-content/uploads/2017/02/Dior-Project-101.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://thumbs.dreamstime.com/b/balanced-diet-food-background-balanced-diet-food-background-organic-food-healthy-nutrition-superfoods-meat-fish-legumes-nuts-121936796.jpg?w=1400" alt="">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://thumbs.dreamstime.com/b/assorted-indian-recipes-food-various-spices-rice-wooden-table-92742528.jpg?w=768" alt="">
      </div>
      <a href="#items" class="carousel-control-prev" data-bs-target="#items" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#items" class="carousel-control-next" data-bs-target="#items" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a> 
      </div> 
      </div>
    </div>
  </div>
    <script>
      // Toggle the visibility of sub-menus
      document.querySelectorAll('.dropdown-content li').forEach(item => {
        item.addEventListener('mouseover', () => {
          const subMenu = item.querySelector('.sub-menu');
          if (subMenu) {
            subMenu.style.display = 'block';
          }
        });
    
        item.addEventListener('mouseout', () => {
          const subMenu = item.querySelector('.sub-menu');
          if (subMenu) {
            subMenu.style.display = 'none';
          }
        });
      });
    </script>
<div class="container mx-auto py-8">
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
      <a href="furniture.php" class="category-link">
          <img src="https://www.decorpot.com/images/500618969Living-Room-Furniture-Essentials_Main.jpg" alt="Furniture" class="category-image">
          <span><h3>FURNITURE</h3></span>
      </a>
      <a href="electronics.php" class="category-link">
          <img src="https://media.istockphoto.com/id/1196974664/photo/set-of-home-kitchen-appliances-in-the-room-on-the-wall-background.jpg?s=612x612&w=0&k=20&c=dUSAMg-LUh6j-4437kz30w8k7KgJiR8yrTTXhGiFh0s=" alt="Electronics" class="category-image">
          <span><h3>ELECTRONICS</h3></span>
      </a>
      <a href="home-needs.php" class="category-link">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeEC57WHs_nfbe19md_0UEF81yAPtQCtDXB_e0I_hhKz0ZJpr6SuCr2r-_22OFsZcGRDw&usqp=CAU" alt="Home Needs" class="category-image">
          <span><h3>HOME NEEDS</h3></span>
      </a>
      <a href="fashion.php" class="category-link">
          <img src="https://st2.depositphotos.com/1389715/5407/i/450/depositphotos_54070855-stock-photo-brand-new-interior-of-cloth.jpg" alt="Fashion" class="category-image">
          <span><h3>FASHION</h3></span>
      </a>
      <a href="groceries.php" class="category-link">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWaGfKGJ6R12pDqmMUmIG-9yAufzyS2KW4mA&s" alt="Groceries" class="category-image">
          <span><h3>GROCERIES</h3></span>
      </a>
      <a href="food.php" class="category-link">
          <img src="https://b.zmtcdn.com/data/pictures/chains/2/20842/7e95a4eec835cbbe4958c7d24c54578a_featured_v2.jpg" alt="Food" class="category-image">
          <span><h3>FOOD</h3></span>
      </a>
  </div>
</div>
   <div id="home" style="padding-left: 10px;">
  <h1 style="border: solid 3px black; width: fit-content;padding-right: 100px;padding-left: 50px;">ABOUT US</h1>
  <p><h4>Discover Endless Possibilities at Universal Shop Hub</h4>

    Welcome to Universal Shop Hub, where your shopping journey begins and ends with endless possibilities. We pride ourselves on being more than just a marketplace; we're your partner in finding the perfect products to enhance your life.
    
    <h4>Explore Diverse Categories</h4>
    
    From fashion to electronics, home decor to outdoor essentials, and everything in between, Universal Shop Hub's diverse range of categories ensures that there's something for everyone. Whether you're a trendsetter, a tech enthusiast, a homemaker, or an adventurer, we have curated collections tailored to your unique tastes and lifestyle.
    
    <h4>Shop with Confidence</h4>
    
    We understand that trust is paramount when it comes to online shopping. That's why Universal Shop Hub goes above and beyond to ensure a seamless and secure shopping experience for our valued customers. Our stringent quality control measures and reliable customer service team are here to address any concerns and guarantee your satisfaction.
    
    <h4>Stay Ahead of the Curve</h4>
    
    With constantly updated inventories featuring the latest products and innovations, you'll always be ahead of the curve when you shop with Universal Shop Hub. Whether it's the hottest fashion trends, cutting-edge gadgets, or must-have home essentials, we keep our finger on the pulse to bring you the best of what's new and exciting.
    
    <h4>Save Time and Effort</h4>
    
    Why waste time navigating multiple websites when you can find everything you need right here? Say goodbye to the hassle of endless searches and enjoy the convenience of shopping for all your needs in one place. With Universal Shop Hub's intuitive interface and efficient search tools, you'll spend less time scrolling and more time discovering.
    
    <h4>Join Our Community</h4>
    
    Become part of our growing community of savvy shoppers who trust Universal Shop Hub to fulfill their every need. Follow us on social media, sign up for exclusive deals and promotions, and join the conversation with fellow enthusiasts. At Universal Shop Hub, shopping isn't just a transaction—it's an experience.
    
    <h4>Start Your Journey Today</h4>
    
    Ready to embark on a shopping adventure like no other? Dive into our expansive catalog, unleash your creativity, and let your imagination run wild. Whatever you're searching for, you'll find it here at Universal Shop Hub, where every shopping need is not just met but exceeded.</p>
  </div>
  <section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <h3><a class="logo-footer" href="index.php">
          UNI<span class="lohny">HUB</span></a>
                <div class="right-side col-lg-8 pl-lg-5">
                    <div class="sub-columns">
                        <div class="sub-one-left">

                        </div>
                        <div class="sub-two-right">
                            <h6>Our Store</h6>
                            <p class="mb-5">Uppal,Hyderabad,Telangana,500092</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-section row">
                <div class="columns col-lg-6 text-lg-right">
                  <p>© 2024 UNIHUB. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
  </body>
</html>
