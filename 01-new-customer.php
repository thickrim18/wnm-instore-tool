<?php include 'html-head.php'; ?>
    <header>
        <!-- header.container.branding -->
        <div class="container-fluid">
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
            </div>
        </div>
        <!-- header.container.page-title -->
        <div class="container-fluid">
            <div class="page-title">
                <h3>Welcome, let's get you signed up!</h3>
            </div>
        </div>
    </header>
    <!-- /end header -->

    <!-- /start main-content -->
    <div class="main">
        <div class="container">
            <!-- MAIN CONTENT HERE::::: -->
            <div class="row intro">
                <div class="col">
                <p>Please fill out the form below to get started</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <form>
                            <div class="form-group">
                                <label for="welcomephone">Phone Number</label>
                                <input type="number" class="form-control" id="welcomephone" placeholder="224-000-0000">
                            </div>

                            <div class="form-group">
                                <label for="welcomephone">Your Name</label>
                                <input type="text" class="form-control" id="welcomephone" placeholder="John Doe">
                            </div>

                            <div class="form-group">
                                <label for="welcomephone">Your Email Address</label>
                                <input type="email" class="form-control" id="welcomephone" placeholder="example@gmail.com">
                            </div>

                            <hr>

                            <div class="form-group">
                                <p>What kind of vehicle do you drive?</p>
                                <div class="row">
                                    <!-- Year -->
                                    <div class="col">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Year</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                        </select>
                                    </div>
                                    <!-- Make -->
                                    <div class="col">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Make</option>
                                            <option>Acura</option>
                                            <option>M3</option>
                                            <option>Honda</option>
                                            <option>Toyota</option>
                                        </select>
                                    </div>
                                    <!-- Model -->
                                    <div class="col">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Model</option>
                                            <option>TLX</option>
                                            <option>M5</option>
                                            <option>CRV</option>
                                            <option>Tundra</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <hr>


                            <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OF MAIN CONTENT ABOVE THIS LINE ::::: -->
        </div>
    </div>
    <!-- end/main-content -->
    <!-- start/footer -->
    <footer class="footer">
        <div class="container">
        <span class="text-muted">
            <div class="row">
                <div class="col">Welcome!</div>
                <div class="col right-foot">
                    .right-foot
                </div>
            </div>
        </span>
        </div>
    </footer>
    <!-- end/footer -->
<?php include 'html-foot.php'; ?>