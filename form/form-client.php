<?php include 'headers.php'; ?>

<div class="container-fluid">

    <div class="container">
        <h2>Add Client Form</h2>
        <form class="form-horizontal" role="form" id="contactForm" data-toggle="validator" class="shake">
            <div class="form-group">
                <label class="control-label col-sm-2" for="First_Name">First_Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="First_Name" placeholder="Enter First_Name" name="First_Name" data-error="Pleace enter  First_Name" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Last_Name">Last_Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Last_Name" placeholder="Enter Last_Name" name="Last_Name" data-error="Pleace enter  Last_Name" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Title">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Title" placeholder="Enter Title" name="Title" data-error="Pleace enter  Title" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Departament">Departament:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Departament" placeholder="Enter Departament" name="Departament" data-error="Pleace enter  Departament" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Account_Name">Account_Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Account_Name" placeholder="Enter Account_Name" name="Account_Name" data-error="Pleace enter  Account_Name" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Email_Address">Email_Address:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Email_Address" placeholder="Enter Email_Address" name="Email_Address" data-error="Pleace enter  Email_Address" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="First_Name">Fax:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Fax" placeholder="Enter Fax" name="Fax" data-error="Pleace enter  Fax" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Phone">Phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Phone" placeholder="Enter Phone" name="Phone" data-error="Pleace enter  Phone" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Address_Street">Address_Street:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Address_Street" placeholder="Address_Street" name="Address_Street" data-error="Pleace enter  Address_Street" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Address_City">Address_City:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Address_City" placeholder="Enter Address_City" name="Address_City" data-error="Pleace enter  Address_City" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="State">State:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="State" placeholder="Enter State" name="State" data-error="Pleace enter  State" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Postal_Code">Postal_Code:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Postal_Code" placeholder="Enter Postal_Code" name="Postal_Code" data-error="Pleace enter  Postal_Code" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Country">Country:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Country" placeholder="Enter Country" name="Country" data-error="Pleace enter  Country" required>
                </div>
                <div class="help-block with-errors text-danger"></div>
            </div>


            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="form-submit" class="btn btn-primary pull-right float-right">Submit</button>
                    <div id="msgSubmit" class="h4 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>   


    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- JQuery Export datatable csv,excel pdf -->
    <script src="asset/js/jquery-1.12.4.js"></script>
    <script src="asset/js/jquery.dataTables.min.js"></script>
    <script src="asset/js/dataTables.buttons.min.js"></script>
    <script src="asset/js/jszip.min.js"></script>
    <script src="asset/js/pdfmake.min.js"></script>
    <script src="asset/js/vfs_fonts.js"></script>
    <script src="asset/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="asset/js/loader.js"></script>


    <!-- Web Service Login -->
    <script src="asset/js/jquery-1.11.2.min.js"></script>
    <script src="asset/js/validator.min.js"></script>
    <script src="asset/js/form-scripts.js"></script>
</body>
</html>