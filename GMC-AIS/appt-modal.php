      
      
      <!-- Modal when Setting Appointment -->
        <div class="modal fade" id="apptmodal" tabindex="-1" aria-labelledby="apptmodallabel" aria-hidden="true" data-bs-theme="dark">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="apptmodallabel">Appointment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Want to set an appointment as a guest?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn gmc-btn" data-bs-target="#guestappt" data-bs-toggle="modal">Yes</button>
                        <button type="button" class="btn gmc-btn" data-bs-target="#haveanaccount" data-bs-toggle="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Guest Appointment -->
        <div class="modal fade" id="guestappt" aria-hidden="true" aria-labelledby="guestappt" tabindex="-1" data-bs-theme="dark">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="guestappt">Guest Appointment Request Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            require('guest-appt-form.php')
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn gmc-btn" data-bs-dismiss="modal">Submit</button>
                        <button type="button" class="btn gmc-btn" data-bs-target="#apptmodal" data-bs-toggle="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for Login -->
        <div class="modal fade" id="haveanaccount" aria-hidden="true" aria-labelledby="haveanaccount" tabindex="-1" data-bs-theme="dark">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="haveanaccount">Login</h1>
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            require('login.php')
                        ?>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <h5 class="fs-5">Don't Have Account? <a role="button" data-bs-target="#registeranaccount" data-bs-toggle="modal" class="fs-5" href="">Register</a></h5> -->
                                <h5 class="fs-5">Forgot Password? <a role="button" data-bs-target="#resetpw" data-bs-toggle="modal" class="fs-5" href="">Reset Here</a></h5>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn gmc-btn" onclick="validate()">Submit</button>
                    </div>
                </div>
            </div>
        </div>

          <!-- Modal for Register -->
          <div class="modal fade" id="registeranaccount" aria-hidden="true" aria-labelledby="registeranaccount" tabindex="-1" data-bs-theme="dark">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="registeranaccount">Register</h1>
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            require('register.php')
                        ?>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="fs-5">Already Have Account? <a role="button" data-bs-target="#haveanaccount" data-bs-toggle="modal" class="fs-5" href="">Login</a></h5>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn gmc-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Password Reset -->
        <div class="modal fade" id="resetpw" aria-hidden="true" aria-labelledby="resetpw" tabindex="-1" data-bs-theme="dark">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="resetpw">Forgot Password</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            require('resetpw.php')
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn gmc-btn" data-bs-dismiss="modal" disabled>Submit</button>
                        <button type="button" class="btn gmc-btn" data-bs-target="#haveanaccount" data-bs-toggle="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>