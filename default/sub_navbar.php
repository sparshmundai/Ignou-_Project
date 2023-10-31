<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
		  <a class="navbar-brand" href="index.php"><h2><?=$cat;?></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
			<!--
              <li class="nav-item active">
                <a class="nav-link" href="mobile.php">Samsung<span class="sr-only">(current)</span></a>
              </li> 
			  -->
			  <?php  foreach($sub_brand as $id => $arr) {  ?>
				  <li class="nav-item">
					<a class="nav-link" href="brand-product.php?brand=<?=$arr['id'];?>&catid=<?=$cat_id;?>"><?=strtoupper($arr['brand']);?></a>
				  </li>
			  
			  <?php } ?>
			</ul>
          </div>
        </div>
      </nav>
    </header>