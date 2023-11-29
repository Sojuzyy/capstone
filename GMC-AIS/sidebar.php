        <nav class="nav navbar navbar-expand" style="background-color: #351C13;">
            <a href="#offcanvasBar" class="nav-link active btn" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasBar">
                <i class="fa-solid fa-bars" style="color: white;"></i>
            </a>
        </nav>
        
        <div class="offcanvas offcanvas-start sidebar" style="width: 20%; color: white; background-color: #351C13;" tabindex="-1" id="offcanvasBar" aria-labelledby="offcanvasBarLabel">
            <div class="offcanvas-header">
                <div class="row" style="padding-top: 3%;">
                    <div class="col">
                        <center>
                            <i class="fa-solid fa-user" style="width: 50%; height: 50%; position: center;"></i>
                            <h5 class="offcanvas-title" id="offcanvasBarLabel">User's Lastname, Firstname</h5>
                        </center>
                    </div>
                </div>
            </div>
            <hr>
            <div class="offcanvas-body">
                <div>
                    <a href="student-dboard.php" class="nav-link active sidebar-menu" style="font-size: x-large;">Dashboard</a>
                </div>
                <br>
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Schedule
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item sidebar-menu" href="stud-class-sched.php" style="font-size: large;">Class Schedule</a>
                        </li>
                        <li>
                            <a class="dropdown-item sidebar-menu" href="calendar-events.php" style="font-size: large;">School Events</a>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="dropdown mt-3">
                    <a href="#" class="nav-link active dropdown-toggle sidebar-menu" type="button" data-bs-toggle="dropdown" style="font-size: x-large;">
                        Appointment
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item sidebar-menu" href="appointment.php" style="font-size: large;">Appointment Summary</a></li>
                        <li><a class="dropdown-item sidebar-menu" href="appt-request-page.php" style="font-size: large;">Appointment Request Form</a></li>
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