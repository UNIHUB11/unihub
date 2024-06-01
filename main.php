<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Logo with bg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body{
        background-color: rgb(114, 172, 172);
      }
      .carousel-inner{
        max-height: 600px;
      }
      .carousel-item{
        max-height: 600px;
      }
      .carousel-indicators li {
        width: 10px;
        height: 10px;
        border-radius: 100%;
      }
      .carousel-indicators [data-bs-target] {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 10px;
        height: 10px; 
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity .6s ease;
        border-radius: 100%;
      }
      li::marker{font-size: 0%;}
      .navigation{
        position: relative;
        background-color: rgb(114, 172, 172);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
      }
      .navigation ul{
        width: 400px;
        display: flex;
      }
      .navigation ul li{
        list-style: none;
        position: relative;
        width: 200px;
        height: 80px;
        z-index: 3;
      }
      .navigation img {
            height: 80px;
            width: auto;
        }
        .navigation ul li a:hover {
            color: #f1ed06;
        }
      .navigation ul li a{
        text-decoration: #0e0d0d;
        color: #0e0d0d; 
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
      }
      .navigation ul li a .icon{
        position: relative;
        display: block;
        width: 50px;
        height: 55px;
        text-align: center;
        line-height: 65px;
        color: #222327;
        font-size: 1.5em;
        transition: 0.5s;
        transition-delay: 0s;
        border-radius: 50%; 
      }
      @media screen and (max-width: 768px) {
            .navigation img {
                height: 60px;
            }

            .navigation ul li {
                margin-right: 10px;
            }
        }
        * {
  box-sizing: border-box;
}

.navbar {
  overflow: hidden;
  background-color: rgb(243, 171, 227);
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: rgb(27, 26, 26);
  align-items: start;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
    position: relative;
    display: inline-block;
  }

  .dropbtn {
    background-color: #12d7e6;
    color: rgb(14, 13, 13);
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropbtn:hover, .dropbtn:focus {
    background-color: #11a0f3;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #0bdceb;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    left: 0;
    top: 100%;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown-content ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .dropdown-content li {
    padding: 12px 16px;
    text-decoration: none;
  }

  .dropdown-content li:hover {background-color: #09daf5;}

  .dropdown-content .sub-menu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
  }
  .sub-menu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    background-color: #0ae5ec; /* Background color for sub-menu */
    border-left: 1px solid #ccc; /* Add a border on the left side for separation */
    border-top: none; /* Remove top border for better appearance */
    border-radius: 0 4px 4px 0; /* Rounded corners for the sub-menu */
  }
  .dropdown-content li:hover .sub-menu {
    display: block;
  }
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    justify-items: center;
    padding: 20px;
    overflow-x: auto; /* Enable horizontal scrolling if items exceed container width */
}
.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Set minimum width to 300px */
    gap: 20px;
    justify-items: center;
    padding: 20px;
    overflow-x: auto; /* Enable horizontal scrolling if items exceed container width */
}

.category-image {
    width: 300px; /* Set width to 300px */
    height: 300px; /* Set height to 300px */
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
#small-dialog1 {
  background: var(--bg-color);
  background-image: url('https://cdn-icons-png.flaticon.com/512/535/535239.png');
  background-size: 50px;
  background-repeat: no-repeat;
  text-align: left;
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

#small-dialog1 {
    max-width: 566px;
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
    border: 1px solid var(--border-color-light);
    outline: none !important;
}
optgroup,option{
  background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEyL3Jhd3BpeGVsb2ZmaWNlMjBfYmFja2dyb3VuZF9pbGx1c3RyYXRpb25fb2ZfYV9mYWxsX3Bhc3RlbF9iYWNrZ19hMGM1YzU4MC1kODBhLTQ0ZjEtYjhjNy1jNWI4Y2E0NzMxNTRfMS5qcGc.jpg');
  background-repeat: no-repeat;
}
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
      cursor: inherit;
      line-height: inherit;
      outline: none;
    }
.list_of_cities option {
  background-color: rgba(255, 255, 255, 0.8);
  background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTEyL3Jhd3BpeGVsb2ZmaWNlMjBfYmFja2dyb3VuZF9pbGx1c3RyYXRpb25fb2ZfYV9mYWxsX3Bhc3RlbF9iYWNrZ19hMGM1YzU4MC1kODBhLTQ0ZjEtYjhjNy1jNWI4Y2E0NzMxNTRfMS5qcGc.jpg');

}
    
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}
    </style>
    <title>UNIHUB MENU</title>
</head>
<body>
  <div class="container-fluid">
  <div class="navigation">
    <a href="Main.html"><img src="Logo.png" style="height: 150px; width: 300px;"></a>
    <h1>Universal Shop Hub</h1>
    <ul>
      <li class="list active" ><a href="#home"> Home</a>
      </li>
      <li class="list active" ><a href="#"> Search</a>
      </li>
      <li class="list active" ><a href="login.php"> Login/Signup</a>
      </li>
      <li class="list active"><a href="#"> Contact</a>
      </li>
    </ul>
  </div>
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
  <!--Carousel-->
  <div class="row">
    <div class="col-md-12">
    <div id="items" class="carousel slide mt-3" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#items" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#items" data-bs-slide-to="1"></li>
          <li data-bs-target="#items" data-bs-slide-to="2"></li>
          <li data-bs-target="#items" data-bs-slide-to="3"></li>
          <li data-bs-target="#items" data-bs-slide-to="4"></li>
          <li data-bs-target="#items" data-bs-slide-to="5"></li>
          <li data-bs-target="#items" data-bs-slide-to="6"></li>
        </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" style="max-height: 600px;" src="https://images.unsplash.com/photo-1600585154084-4e5fe7c39198?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      <div class="carousel-caption"><h2 class="text-bg-info">FURNITURE</h2></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 700px;" src="https://as1.ftcdn.net/v2/jpg/04/29/05/20/1000_F_429052080_ycazkIWim4TW2v3h2Ms3zLq438jlwnJk.jpg" alt="">
        <div class="carousel-caption"><h2 class="text-bg-warning">ELECTRONICS</h2></div>
      </div>
      <div class="carousel-item">
        <img  class="d-block w-100" style="max-height: 600px;" src="https://as1.ftcdn.net/v2/jpg/06/51/72/96/1000_F_651729655_wyx8hIJ9QMWRfxRRTp6vceVztBwJA6b0.jpg" alt="">
        <div class="carousel-caption" style="position: absolute;top:-10px;"><h2 class="text-bg-success">HOME NEEDS</h2></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://as1.ftcdn.net/v2/jpg/03/05/92/84/1000_F_305928424_visqTeQnMLvzfT3XBtDZWX9TNTlVLML6.jpg" alt="">
        <div class="carousel-caption"style="position: absolute;top:-10px;"><h2 class="text-bg-primary">FASHION</h2></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://thumbs.dreamstime.com/b/balanced-diet-food-background-balanced-diet-food-background-organic-food-healthy-nutrition-superfoods-meat-fish-legumes-nuts-121936796.jpg?w=1400" alt="">
        <div class="carousel-caption"><h2 class="text-bg-warning">VEGETABLES & MEAT-GROCERIES</h2></div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height: 600px;" src="https://thumbs.dreamstime.com/b/assorted-indian-recipes-food-various-spices-rice-wooden-table-92742528.jpg?w=768" alt="">
        <div class="carousel-caption"><h2 class="text-bg-danger">FOOD</h2></div>
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

<div class="container mx-auto py-8">
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
      <a href="furniture.html" class="category-link">
          <img src="https://www.decorpot.com/images/500618969Living-Room-Furniture-Essentials_Main.jpg" alt="Furniture" class="category-image">
          <span><h3>FURNITURE</h3></span>
      </a>
      <a href="electronics.html" class="category-link">
          <img src="https://media.istockphoto.com/id/1196974664/photo/set-of-home-kitchen-appliances-in-the-room-on-the-wall-background.jpg?s=612x612&w=0&k=20&c=dUSAMg-LUh6j-4437kz30w8k7KgJiR8yrTTXhGiFh0s=" alt="Electronics" class="category-image">
          <span><h3>ELECTRONICS</h3></span>
      </a>
      <a href="home-needs.html" class="category-link">
          <img src="https://st3.depositphotos.com/1734074/12953/v/950/depositphotos_129537034-stock-illustration-purchase-cleaning-supplies-and-tools.jpg" alt="Home Needs" class="category-image">
          <span><h3>HOME NEEDS</h3></span>
      </a>
      <a href="fashion.html" class="category-link">
          <img src="https://st2.depositphotos.com/1389715/5407/i/450/depositphotos_54070855-stock-photo-brand-new-interior-of-cloth.jpg" alt="Fashion" class="category-image">
          <span><h3>FASHION</h3></span>
      </a>
      <a href="groceries.html" class="category-link">
          <img src="https://www.bucuti.com/storage/app/uploads/public/5f5/fe2/981/thumb_2322_1920_1080_0_0_crop.jpeg" alt="Groceries" class="category-image">
          <span><h3>GROCERIES</h3></span>
      </a>
      <a href="food.html" class="category-link">
          <img src="https://b.zmtcdn.com/data/pictures/chains/2/20842/7e95a4eec835cbbe4958c7d24c54578a_featured_v2.jpg" alt="Food" class="category-image">
          <span><h3>FOOD</h3></span>
      </a>
  </div>
</div>
   <div id="home" style="padding-left: 10px;">
  <h1 style="border: solid 3px black; width: fit-content;padding-right: 100px;padding-left: 50px;">ABOUT US</h1>
  <p><h4>Discover Endless Possibilities at Universal Shop Hub</h4>

    Welcome to Universal Shop Hub, where your shopping journey begins and ends with endless possibilities. We pride ourselves on being more than just a marketplace; we\'re your partner in finding the perfect products to enhance your life.
    
    <h4>Explore Diverse Categories</h4>
    
    From fashion to electronics, home decor to outdoor essentials, and everything in between, Universal Shop Hub\'s diverse range of categories ensures that there\'s something for everyone. Whether you\'re a trendsetter, a tech enthusiast, a homemaker, or an adventurer, we have curated collections tailored to your unique tastes and lifestyle.
    
    <h4>Shop with Confidence</h4>
    
    We understand that trust is paramount when it comes to online shopping. That\'s why Universal Shop Hub goes above and beyond to ensure a seamless and secure shopping experience for our valued customers. Our stringent quality control measures and reliable customer service team are here to address any concerns and guarantee your satisfaction.
    
    <h4>Stay Ahead of the Curve</h4>
    
    With constantly updated inventories featuring the latest products and innovations, you\'ll always be ahead of the curve when you shop with Universal Shop Hub. Whether it\'s the hottest fashion trends, cutting-edge gadgets, or must-have home essentials, we keep our finger on the pulse to bring you the best of what\'s new and exciting.
    
    <h4>Save Time and Effort</h4>
    
    Why waste time navigating multiple websites when you can find everything you need right here? Say goodbye to the hassle of endless searches and enjoy the convenience of shopping for all your needs in one place. With Universal Shop Hub\'s intuitive interface and efficient search tools, you\'ll spend less time scrolling and more time discovering.
    
    <h4>Join Our Community</h4>
    
    Become part of our growing community of savvy shoppers who trust Universal Shop Hub to fulfill their every need. Follow us on social media, sign up for exclusive deals and promotions, and join the conversation with fellow enthusiasts. At Universal Shop Hub, shopping isn\'t just a transaction—it\'s an experience.
    
    <h4>Start Your Journey Today</h4>
    
    Ready to embark on a shopping adventure like no other? Dive into our expansive catalog, unleash your creativity, and let your imagination run wild. Whatever you\'re searching for, you\'ll find it here at Universal Shop Hub, where every shopping need is not just met but exceeded.</p>
  </div>
  </body>
</html>

';
?>