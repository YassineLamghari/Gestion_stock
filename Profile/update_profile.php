<?php
SESSION_START();
if(!isset($_SESSION["id_user"]) ||  (isset($_SESSION["id_user"]) && $_SESSION['id_user'] =='')) {
    header('location: ../login.php');
}
include("../securite/cnx.php");
?>
<?php
if(isset($_GET["suprrimer_compte"])){
    $id_suprrimer_compte=$_GET['suprrimer_compte'];
    $supp_compte="DELETE FROM users WHERE id='$id_suprrimer_compte'";
    mysqli_query($cnx,$id_suprrimer_compte);
}
?>
<?php
    $id_modifier_compte=$_SESSION['id_user'];
    if(isset($_POST['update_profile'])){
        $new_name=$_POST['new_nom'];
        $new_email=$_POST['new_email'];

        $_SESSION['nom_user']=$new_name;
        $_SESSION['email_user']=$new_email;


        $req_new_info="UPDATE users SET nom='$new_name',email='$new_email' WHERE id='$id_modifier_compte'";
        mysqli_query($cnx,$req_new_info);
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
        <title>Update Profile</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="../dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <?php 
                $page_menu="update_profile";
                include("../menu_mobile.php"); 
                ?>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <?php 
                $page_menu="update_profile";
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
                            <li class="breadcrumb-item"><a href="./mon_profile.php">Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
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
                                        <div class="ml-3">Tom Hanks</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">tomhanks@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-3">Kevin Spacey</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-7.jpg">
                                        </div>
                                        <div class="ml-3">Robert De Niro</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-13.jpg">
                                    </div>
                                    <div class="ml-3">Sony A7 III</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-11.jpg">
                                    </div>
                                    <div class="ml-3">Apple MacBook Pro 13</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-3.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-9.jpg">
                                    </div>
                                    <div class="ml-3">Sony A7 III</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
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
                                            <a href="javascript:;" class="font-medium truncate mr-5">Tom Hanks</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-7.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
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
                        Update Profile
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                            <div class="relative flex items-center p-5">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-6.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium text-base"><?php echo $_SESSION['nom_user'] ?></div>
                                    <div class="text-slate-500"><?php echo ucfirst($_SESSION['role']) ?></div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                    <div class="dropdown-menu w-56">
                                        <ul class="dropdown-content">
                                            <li>
                                                <h6 class="dropdown-header">
                                                    Export Options
                                                </h6>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="box" class="w-4 h-4 mr-2"></i> Indonesia 
                                                    <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <div class="flex p-1">
                                                    <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                    <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center  " href="./mon_profile.php"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                                <a class="flex items-center text-primary font-medium mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Account Settings </a>
                                <a class="flex items-center mt-5" href="./change_password.php"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> User Settings </a>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center" href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Email Settings </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Social Networks </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Tax Information </a>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                                <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Display Information
                                </h2>
                            </div>
                            <?php
                                $data_user=mysqli_fetch_array(mysqli_query($cnx,"SELECT * FROM users WHERE id='$id_modifier_compte'"));
                            ?>
                            <div class="p-5">
                                <div class="flex flex-col-reverse xl:flex-row flex-col">
                                    <div class="flex-1 mt-6 xl:mt-0">
                                        <form method="post" class="grid grid-cols-12 gap-x-5">
                                            <div class="col-span-12 2xl:col-span-6">
                                                <div>
                                                    <label for="update-profile-form-1" class="form-label">Name</label>
                                                    <input id="update-profile-form-1" type="text" class="form-control"  value="<?php echo $data_user['nom'] ?>" name="new_nom">
                                                </div>
                                                <div class="mt-3">
                                                    <label for="update-profile-form-2" class="form-label">Email</label>
                                                    <input id="update-profile-form-1" type="email" class="form-control"  value="<?php echo $data_user['email'] ?>" name="new_email">
                                                </div>
                                            </div>
                                            <div class="col-span-12 2xl:col-span-6">
                                                <div class="mt-3 2xl:mt-0">
                                                    <label for="update-profile-form-3" class="form-label">Postal Code</label>
                                                    <select id="update-profile-form-3" data-search="true" class="tom-select w-full">
                                                        <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                                        <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                                        <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                                        <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                                        <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                                    </select>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                                    <input id="update-profile-form-4" type="text" class="form-control" placeholder="Input text" value="65570828">
                                                </div>
                                            </div>
                                            <div class="col-span-12">
                                                <div class="mt-3">
                                                    <label for="update-profile-form-5" class="form-label">Address</label>
                                                    <textarea id="update-profile-form-5" class="form-control" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-20 mt-3" name="update_profile">Save</button>
                                        </form>
                                        
                                    </div>
                                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img class="rounded-md" alt="Midone - HTML Admin Template" src="../dist/images/profile-6.jpg">
                                                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="mx-auto cursor-pointer relative mt-5">
                                                <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Display Information -->
                        <!-- BEGIN: Personal Information -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Personal Information
                                </h2>
                            </div>
                            <div class="p-5">
                                <form class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-12 xl:col-span-6">
                                        <div>
                                            <label for="update-profile-form-6" class="form-label">Email</label>
                                            <input id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="<?php echo $_SESSION['email_user'] ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-7" class="form-label">Name</label>
                                            <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="<?php echo $_SESSION['nom_user'] ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-8" class="form-label">ID Type</label>
                                            <select id="update-profile-form-8" class="form-select">
                                                <option>IC</option>
                                                <option>FIN</option>
                                                <option>Passport</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-9" class="form-label">ID Number</label>
                                            <input id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" value="357821204950001">
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="mt-3 xl:mt-0">
                                            <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                            <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text" value="65570828">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-11" class="form-label">Address</label>
                                            <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text" value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-12" class="form-label">Bank Name</label>
                                            <select id="update-profile-form-12" data-search="true" class="tom-select w-full">
                                                <option value="1">SBI - STATE BANK OF INDIA</option>
                                                <option value="1">CITI BANK - CITI BANK</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-13" class="form-label">Bank Account</label>
                                            <input id="update-profile-form-13" type="text" class="form-control" placeholder="Input text" value="DBS Current 011-903573-0">
                                        </div>
                                    </div>
                                    <div class="col-span-12 mt-5 flex justify-end">
                                        <a href="../register.php?suprrimer_compte=<?php $_SESSION['id_user']; ?>" class="text-danger flex items-center mt-4"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i><button type="submit" name="del_compte">Delete Account</button> </a>
                                    </div>
                                </form>
                                <!-- <div class="flex justify-end mt-4">
                                    <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                                    <a href="" class="text-danger flex items-center"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete Account </a>
                                </div> -->
                            </div>
                        </div>
                        <!-- END: Personal Information -->
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
    </body>
</html>