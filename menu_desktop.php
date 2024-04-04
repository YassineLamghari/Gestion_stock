<nav class="side-nav">
                <a href="../dashboard/index.php" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> GSTOCKS </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="../dashboard/index.php" class="side-menu<?php if($page_menu == 'dashbord') {?> side-menu--active <?php } ?>">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" class="side-menu <?php if($page_menu == 'product_list' || $page_menu == 'add_product'  || $page_menu =='modifier_product') {?> side-menu--active <?php } ?>">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title">
                                Product
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="<?php if($page_menu == 'product_list' || $page_menu == 'add_product' || $page_menu =='modifier_product') {?> side-menu--open side-menu__sub-open <?php } ?>">
                            <li>
                                <a href="../product/product_list.php" class="side-menu<?php if($page_menu == 'product_list') {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon"> <i data-lucide="shopping-cart"></i> </div>
                                    <div class="side-menu__title">Product List</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php if($page_menu == 'modifier_product') { '../product/modifier_product.php';}else{'../product/add_product.php';} ?>" class="side-menu<?php if($page_menu == 'add_product' || $page_menu == 'modifier_product' ) {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon"> <i data-lucide="plus-circle"></i> </div>
                                    <div class="side-menu__title"><?php if($page_menu == 'modifier_product') {echo "Modifier Product";}else{ echo "Add Product";} ?></div>
                                </a>
                            </li>
                        </ul>
                    <li class="side-nav__devider my-6"></li>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
                        <li>
                            <a href="../users/users.php" class="side-menu<?php if($page_menu == 'users') {?> side-menu--active <?php } ?>">
                                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                                <div class="side-menu__title">
                                    Users
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="javascript:;" class="side-menu <?php if($page_menu == 'mon_profile' || $page_menu == 'change_password' || $page_menu == 'update_profile') {?> side-menu--active <?php } ?>">
                            <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="side-menu__title">
                                Profile 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="<?php if($page_menu == 'mon_profile' || $page_menu == 'change_password' || $page_menu == 'update_profile') {?> side-menu--open side-menu__sub-open <?php } ?>">
                            <li>
                                <a href="../profile/mon_profile.php" class="side-menu <?php if($page_menu == 'mon_profile') {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                                    <div class="side-menu__title"> Mon Profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="../profile/update_profile.php" class="side-menu<?php if($page_menu == 'update_profile') {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon"> <i data-lucide="key"></i> </div>
                                    <div class="side-menu__title"> Update Profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="../profile/change_password.php" class="side-menu<?php if($page_menu == 'change_password') {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon"> <i data-lucide="key"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                        <a href="../securite/logout.php" class="side-menu">
                            <div class="side-menu__icon pe-2"> <i data-lucide="log-out"></i> </div>
                            <div class="side-menu__title">Logout </div>
                        </a>
                </ul>
</nav>