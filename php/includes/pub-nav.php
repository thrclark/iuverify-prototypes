
<nav>
    <div class="nav-side-menu"> <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#products" class="collapsed active"> <a href="#">Publishing <span class="arrow"></span></a> </li>
                <ul class="sub-menu" id="products">
                    <li <?php if ($page_title == 'home') { echo 'class="active"'; } ?>> <a href="vfy-pub-home.php">View All Verifications</a></li>
                    <li <?php if ($page_title == 'create-new') { echo 'class="active"'; } ?>><a href="vfy-pub-new-verification.php">Create New Verification</a></li>
                    <li <?php if ($page_title == 'archived') { echo 'class="active"'; } ?>><a href="vfy-pub-archived.php">Archived Verifications</a></li>
                  
                </ul>
                
                
                
                
                
                
              <li data-toggle="collapse" data-target="#service" class="collapsed"> <a href="#">Settings <span class="arrow"></span></a> </li>
                <ul class="sub-menu collapse" id="service">
                    <li><a href="#">General </a></li>
                    <li><a href="#">API Accounts </a></li>
                    
                </ul>
                
                
                
                
                
                
                <!--<li data-toggle="collapse" data-target="#service" class="collapsed"> <a href="#">Admin <span class="arrow"></span></a> </li>
                <ul class="sub-menu collapse" id="service">
                    <li><a href="#">System Parameters </a></li>
                    <li><a href="#">Tenants </a></li>
                    <li><a href="#">Metadata </a></li>
                    <li><a href="#">User Attribute Mappings</a></li>
                </ul>-->
            </ul>
        </div>
    </div>
</nav>