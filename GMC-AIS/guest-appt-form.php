                        <form action="" method="get">
                            <div class="container">
                                <div class="row needs-validation">
                                    <h1 class="modal-title fs-5 subtitle">Information</h1>
                                    <br>
                                    <div class="col-sm-4">
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="m-initial" id="m-initial" class="form-control" placeholder="M.I">
                                    </div>
                                </div>
                                <hr>
                                <div class="row needs-validation">
                                    <h1 class="modal-title fs-5 subtitle">Additional Information</h1>
                                    <br>
                                    <div class="col-sm-5">
                                        <input type="email" name="email" id="guest-email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="tel" name="contact" id="contact" class="form-control" placeholder="Contact Number" pattern="[0-9]{11}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row needs-validation">
                                    <div class="col-sm-12">
                                        <input type="file" name="pic" id="pic" class="form-control" placeholder="1x1 Picture" required>
                                        <!-- <label for="pic" class="col-form-label">1x1 Picture</label> -->
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="file" name="validid" id="validid" class="form-control" placeholder="Valid ID">
                                        <!-- <label for="validid" class="col-form-label">Valid ID</label> -->
                                    </div>
                                </div>
                                <hr>
                                <div class="row needs-validation">
                                    <h1 class="modal-title fs-5 subtitle">Request</h1>
                                    <br>
                                    <div class="col-sm-5">
                                        <input type="date" name="date" id="date" class="form-control" placeholder="Date" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="time" id="time" class="form-select" aria-label="Select Time" required>
                                            <option selected placeholder="Select Time">Select Time</option>
                                            <option value="08:00">08:00AM to 09:00AM</option>
                                            <option value="09:00">09:00AM to 10:00AM</option>
                                            <option value="10:00">10:00AM to 11:00AM</option>
                                            <option value="11:00">11:00AM to 12:00PM</option>
                                            <option value="12:00">12:00PM to 01:00PM</option>
                                            <option value="13:00">01:00PM to 02:00PM</option>
                                            <option value="14:00">02:00PM to 03:00PM</option>
                                            <option value="15:00">03:00PM to 04:00PM</option>
                                            <option value="16:00">04:00PM to 05:00PM</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row needs-validation">
                                    <div class="col-sm-12">
                                        <select name="purpose" id="purpose" class="form-select" placeholder="Purpose" required>
                                            <option value="default" placeholder="Select Purpose of Visit">Select Purpose of Visit</option>
                                            <option value="Inquiry">Inquiry</option>
                                            <option value="Admission_Requirements">Admission Requirements</option>
                                            <option value="Transferee">Transferee Procedure</option>
                                            <option value="Faculty">Faculty</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row needs-validation">
                                    <div class="col-sm-12">
                                        <input type="text" name="visitto" id="visitto" class="form-control" placeholder="Person to Visit" required>
                                    </div>
                                </div>
                            </div>
                        </form>