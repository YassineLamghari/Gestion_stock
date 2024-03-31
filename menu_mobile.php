<div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../dist/images/logo.svg">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="../dashboard/index.php" class="menu <?php if($page_menu =='dashboard') { ?> menu--active <?php } ?>">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu <?php if($page_menu =='product_list' || $page_menu== 'add_product') { ?> menu--active <?php } ?>">
                            <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="menu__title"> Product <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="<?php if($page_menu =='product_list' || $page_menu== 'add_product') { ?> menu__sub-open <?php } ?>">
                            <li>
                                <a href="../product/product_list.php" class="menu <?php if($page_menu =='product_list') { ?> menu--active <?php } ?>">
                                    <div class="menu__icon"> <i data-lucide="shopping-cart"></i> </div>
                                    <div class="menu__title">Product List </div>
                                </a>
                            </li>
                            <li>
                            <li>
                                <a href="../product/add_product.php" class="menu <?php if($page_menu =='add_product') { ?> menu--active <?php } ?>">
                                    <div class="menu__icon"> <i data-lucide="plus-circle"></i> </div>
                                    <div class="menu__title">Add Product</div>
                                </a>
                            </li>
                        </ul>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="../users/users.php" class="menu <?php if($page_menu =='users') { ?> menu--active <?php } ?>">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title">Users</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu <?php if($page_menu =='mon_profile' || $page_menu== 'change_password') { ?> menu--active <?php } ?>">
                            <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="<?php if($page_menu =='mon_profile' || $page_menu== 'change_password') { ?> menu__sub-open  <?php } ?>">
                            <li>
                                <a href="../profile/mon_profile.php" class="menu <?php if($page_menu =='mon_profile') { ?> menu--active <?php } ?>">
                                    <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                                    <div class="menu__title"> Mon Profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="../profile/change_password.php" class="menu <?php if($page_menu =='change_password') { ?> menu--active <?php } ?>">
                                    <div class="menu__icon"> <i data-lucide="key"></i> </div>
                                    <div class="menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__devider my-6"></li>
                        <ul class="">
                                <li class="side-nav__devider my-6"></li>
                                <a href="../securite/logout.php" class="menu">
                                    <div class="menu__icon"> <i data-lucide="log-out"></i> </div>
                                    <div class="menu__title"> Logout </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>