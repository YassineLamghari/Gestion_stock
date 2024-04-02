<?php
SESSION_START();

include("../securite/cnx.php");
?>
<?php
$msg = "";
$id_modifier=$_GET["modifier_product"];
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['add_product'])){
    $libelle = $_POST['Libelle'];
    $qte=$_POST['Qte'];
    $prix=$_POST['Prix'];

    if($qte>=0 and $prix>=0){
        $req_add_product="UPDATE product SET libelle='$libelle' ,qte='$qte',prix='$prix' where id='$id_modifier'";
    if((mysqli_query($cnx, $req_add_product))){
        header("location: ./product_list.php");
    }}else{
        $msg="Qte or Prix Invalid !";
}
}
?>
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="../dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Add Product</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="../dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <?php
                $page_menu="modifier_product";
                include("../menu_mobile.php");
            ?>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <?php
                $page_menu="modifier_product";
                include("../menu_desktop.php");
            ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier Product</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <!-- <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                            <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-6.jpg">
                                        </div>
                                        <div class="ml-3">Robert De Niro</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-3">Kevin Spacey</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-1.jpg">
                                        </div>
                                        <div class="ml-3">Kevin Spacey</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-9.jpg">
                                    </div>
                                    <div class="ml-3">Sony A7 III</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-5.jpg">
                                    </div>
                                    <div class="ml-3">Nike Tanjun</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-12.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Q90 QLED TV</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-2.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <!-- <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-content">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-1.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                        <?php
                            include("../menu_account.php");
                        ?>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Modifier Product 
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5 ">
                    <div class="intro-y col-span-12 lg:col-span-12 justify-content-center mx-auto">
                        <!-- BEGIN: Form Layout -->
                        <?php
                            $data_product=mysqli_fetch_array(mysqli_query($cnx,"SELECT * FROM product WHERE id ='$id_modifier'"));
                        ?>
                        <form method="post" class="intro-y box p-5">
                            <?php
                                echo '<h1 class="text-center text-danger">' . $msg . '</h1>';
                            ?>
                            <div>
                                <label for="crud-form-1" class="form-label">Product Name</label>
                                <input id="crud-form-1" type="text" class="form-control w-full" value="<?php echo $data_product['libelle'];?>" name="Libelle">
                            </div>
                            <!-- <div class="mt-3">
                                <label for="crud-form-2" class="form-label">Category</label>
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2" multiple>
                                    <option value="1" selected>Sport & Outdoor</option>
                                    <option value="2">PC & Laptop</option>
                                    <option value="3" selected>Smartphone & Tablet</option>
                                    <option value="4">Photography</option>
                                </select>
                            </div> -->
                            <div class="mt-3">
                                <label for="crud-form-3" class="form-label">Quantity</label>
                                <div class="input-group">
                                    <input id="crud-form-3" type="number" class="form-control" value="<?php echo $data_product['Qte'];?>" aria-describedby="input-group-1" name="Qte">
                                    <div id="input-group-1" class="input-group-text">pcs</div>
                                </div>
                            </div>
                            <!-- <div class="mt-3">
                                <label for="crud-form-4" class="form-label">Weight</label>
                                <div class="input-group">
                                    <input id="crud-form-4" type="text" class="form-control" placeholder="Weight" aria-describedby="input-group-2">
                                    <div id="input-group-2" class="input-group-text">grams</div>
                                </div>
                            </div> -->
                            <div class="mt-3">
                                <label class="form-label">Price</label>
                                <div class="sm:grid grid-cols-3 gap-2">
                                    <div class="input-group">
                                        <input type="number" class="form-control" value="<?php echo $data_product['Prix'];?>" aria-describedby="input-group-3" name="Prix" accept="any">
                                        <div id="input-group-3" class="input-group-text">Unit</div>
                                    </div>
                                    <!-- <div class="input-group mt-2 sm:mt-0">
                                        <div id="input-group-4" class="input-group-text">Wholesale</div>
                                        <input type="text" class="form-control" placeholder="Wholesale" aria-describedby="input-group-4">
                                    </div>
                                    <div class="input-group mt-2 sm:mt-0">
                                        <div id="input-group-5" class="input-group-text">Bulk</div>
                                        <input type="text" class="form-control" placeholder="Bulk" aria-describedby="input-group-5">
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="mt-3">
                                <label>Active Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Description</label>
                                <div class="mt-2">
                                    <div class="editor">
                                        <p>Content of the editor.</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="text-right mt-5">
                                <button type="restart" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="submit" name="add_product" class="btn btn-primary w-24">Save</button>
                            </div>
                        </form>
                        <!-- END: Form Layout -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="../dist/js/app.js"></script>
        <!-- END: JS Assets-->
        <script src="../dist/js/ckeditor-classic.js"></script>
    </body>
</html>