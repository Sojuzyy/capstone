        <nav class="nav navbar navbar-expand" style="background-color: #351C13;">
            <a href="#offcanvasBar" class="nav-link active btn" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasBar">
                <i class="fa-solid fa-bars" style="color: white;"></i>
            </a>
        </nav>
        
        <div class="offcanvas offcanvas-start sidebar" style="width: 20%; color: white; background-color: #351C13;" tabindex="-1" id="offcanvasBar" aria-labelledby="offcanvasBarLabel">
            <div class="offcanvas-header">
                <div class="row" style="padding-top: 3%;">
                    <div class="col">
                            <i class="fa-solid fa-user" style="width: 50%; height: 50%; position: center;"></i>
                            <h5 class="offcanvas-title" id="offcanvasBarLabel">Admin's Lastname, Firstname</h5>
                    </div>
                </div>
            </div>
            <hr>
            <div class="offcanvas-body">
                <div>
                    <a href="admin-dboard.php" class="nav-link active sidebar-menu" style="font-size: x-large;">Dashboard</a>
                </div>
                <br>
                
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Schedule
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item sidebar-menu" href="schedule.php" style="font-size: large;">Schedule</a>
                        </li>
                        <li>
                            <a class="dropdown-item sidebar-menu" href="calendar-events.php" style="font-size: large;">School Events</a>
                        </li>
                    </ul>
                </div>
                <br>
                
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Manage Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item sidebar-menu" href="admin-studentmanagement.php" style="font-size: large;">Student Account</a></li>
                        <li><a class="dropdown-item sidebar-menu" href="admin-appt-mngt.php" style="font-size: large;">Staff Account</a></li>
                    </ul>
                </div>
                <br>
                
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Appointment
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item sidebar-menu" href="admin-appt-summary.php" style="font-size: large;">Appointment Summary</a></li>
                        <li><a class="dropdown-item sidebar-menu" href="admin-appt-mngt.php" style="font-size: large;">Appointment Management</a></li>
                    </ul>
                </div>
                <br>
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Settings
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item sidebar-menu" href="#" style="font-size: large;">Personal Details</a></li>
                        <li><a class="dropdown-item sidebar-menu" href="#" style="font-size: large;">Password and Security</a></li>
                    </ul>
                </div>
                <br>
                <hr>
                <div>
                    <a href="index.php" class="nav-link active sidebar-menu" style="font-size: x-large;">Logout</a>
                </div>
            </div>
        </div>