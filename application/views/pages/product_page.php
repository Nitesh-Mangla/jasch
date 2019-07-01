<div class="header_bg"></div>
<div class="main_page">
<div class="col-sm-10 mx-auto row">
    <section class="sub-hero row">
        <div class="col-md-12 pb-4 pt-3" data-aos="fade-up">
            <h1 class="same_heading" style="color:#fff!important;">Products</h1>
            <p style="color:#fff!important;" class="gettext">Jasch Leather Cloth offers appealing products to a massive number of customers, from synthetic leather cover materials for automotive interiors to residential building materials, shoes and handbags, mainly focusing on the surface decorative covering. We offer the products that become a part of your lifestyle.</p>
            
        </div>
    </section>
</div>
<section class="products-filter pb-5">
    <div class="col-sm-10 mx-auto">
        <ul class="nav nav-tabs card-header-tabs filter_ul_1" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link custom_menu active show" id="sub2-tab" onclick="filterSelection('sub_01')" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Coated Fabrics</a>
            <p class="hide">Jasch Leather Cloth offers appealing products to a massive number of customers, from synthetic leather cover materials for automotive interiors to residential building materials, shoes and handbags, mainly focusing on the surface decorative covering. We offer the products that become a part of your lifestyle.</p>
          </li>
          <li class="nav-item">
            <a class="nav-link custom_menu" id="sub3-tab" onclick="filterSelection('sub_02')" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">PU Resins</a>
            <p  class="hide">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe doloribus est numquam possimus. Ex hic, nobis optio accusamus expedita, eum quisquam officiis, quidem excepturi facilis quo quae eius ducimus velit.</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.jasch.biz/" target="_blank">Industrial Gauges</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active filter_ul_2" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
          <button class="btn active" onclick="filterSelection('sub_21')"> PVC</button>
          <button class="btn" onclick="filterSelection('sub_22')"> PU</button>
        </div>

        <div class="tab-pane fade filter_ul_2" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
            
          <button class="btn active" onclick="filterSelection('sub_31')"> 1k ADHESIVEC</button>
          
          <button class="btn" onclick="filterSelection('sub_32')"> 1k ADHESIVE-1</button>
          
          <button class="btn" onclick="filterSelection('sub_33')"> SEMI -PU,PU TOP COAT</button>
          <button class="btn" onclick="filterSelection('sub_34')"> 1K SKIN PU</button>
          <button class="btn" onclick="filterSelection('sub_35')"> 2K ADHESIVE</button>
          <button class="btn" onclick="filterSelection('sub_36')"> POLYESTER POLYOL</button>
        </div>
      </div>

        <div class="row">
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
              <a href="<?php echo base_url();?>product_detail">
                  <img src="<?php echo base_url();?>assets/img/products/products_01.jpg" alt="" style="width:100%">
                  <h4>Automotive</h4>
              </a>
            </div>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_02.jpg" alt="" style="width:100%">
              <h4>Transport</h4>
            </div>
            </a>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_03.jpg" alt="" style="width:100%">
              <h4>Furnishings</h4>
            </div>
           </a>
          </div>
          
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
              <img src="<?php echo base_url();?>assets/img/products/products_04.jpg" alt="" style="width:100%">
              <h4>Footwear</h4>
            </a>
            </div>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_05.jpg" alt="" style="width:100%">
              <h4>Leather Goods</h4>
            </a>
            </div>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_06.jpg" alt="" style="width:100%">
              <h4>Luggage</h4>
            </a>
            </div>
          </div>

          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
              <img src="<?php echo base_url();?>assets/img/products/products_07.jpg" alt="" style="width:100%">
              <h4>Garments & Fashion</h4>
            </a>
            </div>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_08.jpg" alt="" style="width:100%">
              <h4>Polymeric Films and Membranes</h4>
            </a>
            </div>
          </div>
          <div class="column sub_01 sub_21 sub_22">
            <div class="content">
            <a href="<?php echo base_url();?>product_detail">
            <img src="<?php echo base_url();?>assets/img/products/products_09.jpg" alt="" style="width:100%">
              <h4>Sports</h4>
            </a>
            </div>
          </div>
        </div>
    </div>
</section>
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>