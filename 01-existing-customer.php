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
                <h3>Welcome back!</h3>
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
                <p>Enter your phone number</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <form>
                            <div class="form-group">
                                <label for="welcomephone">Phone number</label>
                                <input type="number" class="form-control" id="welcomephone" placeholder="224-000-0000">
                            </div>
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