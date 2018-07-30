<?php include 'headers.php'; ?>

<div class="container-fluid">

    <div class="container">
        <h2>Delete Client Form</h2>
        <form class="form-horizontal" role="form" id="delete-client" data-toggle="validator" class="shake">
            <div class="form-group">
                <label class="control-label col-sm-2" for="ID">ID:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="ID" placeholder="Enter ID" name="ID" data-error="Pleace enter  ID" required>
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
<script src="asset/js/delete-client.js"></script>
</body>
</html>