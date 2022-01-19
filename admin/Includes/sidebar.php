<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">Super Admin Dashboard </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               
            </div>
          <!-- Nav Item - Access panel Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Access Panel</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Access Panel:</h6>
                        <a class="collapse-item" href="memberlist.php"> <i data-feather='user-check'></i>Member List</a>
                        <a class="collapse-item" href="#"> <i data-feather='user-check'></i>Member Levels</a>
                        <a class="collapse-item" href="adminlist.php"> <i data-feather='user-check'></i>Admin List</a>
                        <a class="collapse-item" href="frenchiselist.php"> <i data-feather='user-check'></i>Franchise List</a>
                        <div class="collapse-divider"></div>
                      
                    </div>
                </div>
            </li>


            <!-- Freanchise  Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefranchise"
                    aria-expanded="true" aria-controls="collapsefranchise">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Franchise</span>
                </a>
                <div id="collapsefranchise" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Franchise:</h6>
                        <a class="collapse-item" href="#"><i data-feather='user-check'></i>KYC's checklist</a>
                        <ol type="KYC's checklist">
                       
                            <a class="collapse-item" href="verifiedkyc.php">Verified KYC</a>        
                         </ol>
                        <a class="collapse-item" href="#"><i data-feather='user-plus'></i>Add new franchise</a>
                       
                        <a class="collapse-item" href="frenchisepayout.php"><i data-feather='file-plus'></i>Payouts</a>

                        <a class="collapse-item" href="#">Credit Loans</a>
                        <ol type="KYC's checklist">
                                   <a class="collapse-item" href="franchiseloanreport.php">Load Loan Reports</a>         
                         </ol>
                        <a class="collapse-item"  href="#"></i><span data-i18n="Credits">Credits</span></a>
                        <ol type="KYC's checklist">
                                   <a class="collapse-item" href="creditrecords.php">Credits Reports</a>         
                         </ol>


                      

                        
                    </div>
                </div>
            </li>


             <!--Member setting  Menu -->
 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-cogs"></i>
                    <span>Members Settings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         
                        <a class="collapse-item" href="#">Add New Member</a>
                        <a class="collapse-item" href="addupcomingincomes.php">Add Upcoming Incomes</a>
                        <a class="collapse-item" href="memkycchecklist.php">KYCschecklist</a>

                        <a class="collapse-item" href="membankaccount.php">Bank accounts</a>
                        
                        <a class="collapse-item" href="mempancardverifiy.php">Pancard Verifications</a>
                        <a class="collapse-item" href="membonusbv.php">Bonus BV</a>
                        <a class="collapse-item" href="mempayout.php">Payouts</a>
                    </div>
                </div>
            </li>

             <!--Organization chart -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#OrganizationChart"
                    aria-expanded="true" aria-controls="OrganizationChart">  
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Organization Chart</span>
                </a>
                <div id="OrganizationChart" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">     
                        
                    </div>
                </div>
            </li>


              <!--Notification Management -->

              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#NotificationManagement"
                    aria-expanded="true" aria-controls="NotificationManagement">  
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Notification Management</span>
                </a>
                <div id="NotificationManagement" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">     
                    <a class="collapse-item" href="membernotification.php">Member Notifications</a>
                    <a class="collapse-item" href="franchisenotification.php">Franchise Notifications</a>
                    <a class="collapse-item" href="franchisenotice.php">Franchise Notice</a>
                    <a class="collapse-item" href="membernotice.php">Member Notice</a>
                    <a class="collapse-item" href="membertraining.php">Member Training</a>
                    </div>
                </div>
            </li>


              <!--Products-->

              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Products"
                    aria-expanded="true" aria-controls="Products">  
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Products</span>
                </a>
                <div id="Products" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">     
                   
                    <a class="collapse-item" href="productcatagory.php"><i data-feather='list'></i>Category</a>
                    <a class="collapse-item" href="productlist.php"><i data-feather='list'></i>Product list</a>
                    <a class="collapse-item" href="productpackageslist.php"> <i data-feather='package'></i>Packages List</a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i> Purchase Price</a>
                    <OL>
                    <a class="collapse-item" href="productnotice.php"> <i data-feather='feather'></i> Product Notice</a>
                    <a class="collapse-item" href="packagenotice.php"> <i data-feather='feather'></i> Package Notice</a>
                   </OL>
                    </div>
                </div>
            </li>

    <!--Income-->

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Income"
                    aria-expanded="true" aria-controls="Income">  
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Income</span>
                </a>
                <div id="Income" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">     
                  
                    <a class="collapse-item" href="frenchiseincome.php"><i data-feather='list'></i>Franchise Income</a>
                    <a class="collapse-item" href="#"> <i data-feather='package'></i>Performance Bonous</a>
             <ol>
                    <a class="collapse-item" href="businessleader.php"> <i data-feather='feather'></i>Business Leader </a>
                    <a class="collapse-item" href="loyalleader.php"> <i data-feather='feather'></i>Loyal Leader </a>
                    <a class="collapse-item" href="silverleader.php"> <i data-feather='feather'></i>Silver Leader </a>
                    <a class="collapse-item" href="goldenleader.php"> <i data-feather='feather'></i>Golden Leader </a>
                    <a class="collapse-item" href="platinumleader.php"> <i data-feather='feather'></i>Platinum Leader </a>
                    <a class="collapse-item" href="dynamicleader.php"> <i data-feather='feather'></i>Dynamic Leader </a>
                    <a class="collapse-item" href="superdynamicleader.php"> <i data-feather='feather'></i>Super Dynamic Leader</a>    
            </ol>    
                    <a class="collapse-item" href="sponserclubincome.php"><i data-feather='list'></i>Sponser Club Income</a>

                    <a class="collapse-item" href="#"><i data-feather='list'></i>Leadership Club Income</a>
            <ol>
                    <a class="collapse-item" href="silverclubincome.php"> <i data-feather='feather'></i>Silver Club Income </a>
                    <a class="collapse-item" href="goldenclubincome.php"> <i data-feather='feather'></i>Golden Income </a>
                    <a class="collapse-item" href="platinumclubincome.php"> <i data-feather='feather'></i>Platinum Income</a>
                    <a class="collapse-item" href="dynamicclubincome.php"> <i data-feather='feather'></i>Dynamic Income </a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>Super Dynamic Income</a>    
             </ol> 

            <a class="collapse-item" href=""><i data-feather='list'></i>Star Club Income</a>
             <ol>
                    <a class="collapse-item" href="starplatinumleaderinc.php"> <i data-feather='feather'></i>Platinum Leader Income </a>
                    <a class="collapse-item" href="stardynamicleaderinc.php"> <i data-feather='feather'></i>Dynamic Leader Income </a>
                    <a class="collapse-item" href="superdynamicclubincome.php"> <i data-feather='feather'></i>Super Dynamic Leader Income</a>    
             </ol> 

             <a class="collapse-item" href=""><i data-feather='list'></i>Dynamic Club Income</a>
             <ol>
                    <a class="collapse-item" href="dynamicleaderinc.php"> <i data-feather='feather'></i>Dynamic Leader Income </a>
                    <a class="collapse-item" href="supdynamicleaderinc.php"> <i data-feather='feather'></i>Super Dynamic Leader Income</a>    
             </ol> 
             <a class="collapse-item" href=""><i data-feather='list'></i>Target Club Income</a>
             <ol>
             <a class="collapse-item" href="tar_silverclubincome.php"> <i data-feather='feather'></i>Silver Club Income </a>
                    <a class="collapse-item" href="tar_goldenleaderinc.php"> <i data-feather='feather'></i>Golden Leader Income </a>
                    <a class="collapse-item" href="tar_platinumleaderinc.php"> <i data-feather='feather'></i>Platinum Leader Income</a>
                    <a class="collapse-item" href="tar_dynamicleaderinc.php"> <i data-feather='feather'></i>Dynamic Leader Income </a>
                    <a class="collapse-item" href="tar_superdynleaderinc.php"> <i data-feather='feather'></i>Super Dynamic Leader Income</a>   
             </ol> 
             <a class="collapse-item" href="#"> <i data-feather='feather'></i>Royal Club Income </a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>% 1 Leg Qualifier</a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>% 2 Leg Qualifier<</a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>% 3 Leg Qualifier< </a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>% 4 or More Leg Qualifier<</a>   
             </ol> 

             <a class="collapse-item" href="specialclubinc.php"> <i data-feather='feather'></i>Special Club Income </a>

                    </div>
                </div>
            </li>



            <!--Report-->

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Report"
                    aria-expanded="true" aria-controls="Report">  
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Report</span>
                </a>
                <div id="Report" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">     
                  
                    <a class="collapse-item" href="refund_report.php"><i data-feather='list'></i>Refund report</a>
                    <a class="collapse-item" href="Promotional_Achievements.php"> <i data-feather='package'></i>Promotional Achievements </a>
                  
                    <a class="collapse-item" href="income_statement.php"> <i data-feather='feather'></i>Income Statements </a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>Top Earner</a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>Promotion Leader Status</a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>Member TDS Report </a>
                    <a class="collapse-item" href="#"> <i data-feather='feather'></i>Franchise TDS Report </a>
                    
   
                    </div>
                </div>
            </li>
            


            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->