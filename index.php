<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dooo | Installation Wizard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="public/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="public/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="public/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="public/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="public/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div>

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Dooo - Movie & Web Series Portal App Installation</h4>

                                    <br>

                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper wizard">
                                        <h3>Pre-Installation</h3>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>1. Please configure your PHP settings to match following
                                                        requirements:</p>
                                                    <div>
                                                        <table id="datatable" class="table table-striped"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>PHP Settings</th>
                                                                    <th>Current Version</th>
                                                                    <th>Required Version</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PHP Version</td>
                                                                    <td><?php echo('<span class="badge badge-success">'.phpversion().'</span>'); ?></td>
                                                                    <td>7.0+</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>2. Please make sure the extensions/settings listed below are
                                                        installed/enabled:</p>
                                                    <div>
                                                        <table id="datatable" class="table table-striped"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Extension/settings</th>
                                                                    <th>Current Settings</th>
                                                                    <th>Required Settings</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>MySQLi</td>
                                                                    <td> <?php if (function_exists("mysqli_connect")) { echo('<span class="badge badge-success">Yes</span>'); } else { echo('<span class="badge badge-danger">No</span>'); } ?>
                                                                    </td>
                                                                    <td>On</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>GD</td>
                                                                    <td> <?php if (extension_loaded('gd') && function_exists('gd_info')) { echo('<span class="badge badge-success">Yes</span>'); } else { echo('<span class="badge badge-danger">No</span>'); } ?>
                                                                    </td>
                                                                    <td>On</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>cURL</td>
                                                                    <td> <?php if (function_exists("curl_version")) { echo('<span class="badge badge-success">Yes</span>'); } else { echo('<span class="badge badge-danger">No</span>'); } ?>
                                                                    </td>
                                                                    <td>On</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>allow_url_fopen</td>
                                                                    <td> <?php if (ini_get('allow_url_fopen')) { echo('<span class="badge badge-success">Yes</span>'); } else { echo('<span class="badge badge-danger">No</span>'); } ?>
                                                                    </td>
                                                                    <td>On</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>date.timezone</td>
                                                                    <td><?php $timezone_settings = ini_get('date.timezone'); if($timezone_settings) { echo '<span class="badge badge-info">'.date_default_timezone_get().'</span>'; } else { echo('<span class="badge badge-danger">No</span>'); } ?>
                                                                    </td>
                                                                    <td>Timezone</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>3. Please make sure you have set the <strong>writable</strong>
                                                        permission on the following folders/files:</p>
                                                    <div>
                                                        <table id="datatable" class="table table-striped"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <tbody>
                                                                <?php
                                                                $myfiles = preg_grep('/^([^.])/', scandir('../'));
                                                                foreach ($myfiles as $value) {
                                                                   if(is_dir('../'.$value)) {
                                                                       ?>
                                                                       <tr>
                                                                           <td>/<?php echo $value; ?></td>
                                                                           <td class="text-center">
                                                                               <i><?php if(is_writable("../$value/")) { echo ('<span class="badge badge-success">Yes</span>'); }  else { echo ('<span class="badge badge-danger">No</span>'); } ?>
                                                                               </i>
                                                                           </td>
                                                                       </tr>
                                                                <?php
                                                                   }
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>






                                        <h3>Database Connection Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <p>Please enter your
                                                    database connection details.</p>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtNameCard"
                                                            class="col-lg-3 col-form-label">Database Host</label>
                                                        <div class="col-lg-9">
                                                            <input id="Database_Host" name="txtNameCard" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="ddlCreditCardType"
                                                            class="col-lg-3 col-form-label">Database User</label>
                                                        <div class="col-lg-9">
                                                            <input id="Database_User" name="txtNameCard" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtNameCard"
                                                            class="col-lg-3 col-form-label">Password</label>
                                                        <div class="col-lg-9">
                                                            <input id="Password" name="txtNameCard" type="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="ddlCreditCardType"
                                                            class="col-lg-3 col-form-label">Database Name</label>
                                                        <div class="col-lg-9">
                                                            <input id="Database_Name" name="txtNameCard" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>







                                        <h3>Administration Details</h3>
                                        <fieldset>
                                            <div class="row">
                                                <p>Please enter your account details for administration.</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtNameCard" class="col-lg-3 col-form-label">First
                                                            Name</label>
                                                        <div class="col-lg-9">
                                                            <input id="First_Name" name="First_Name" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="ddlCreditCardType"
                                                            class="col-lg-3 col-form-label">Last Name</label>
                                                        <div class="col-lg-9">
                                                            <input id="Last_Name" name="txtNameCard" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtNameCard"
                                                            class="col-lg-3 col-form-label">Email</label>
                                                        <div class="col-lg-9">
                                                            <input id="Email" name="txtNameCard" type="email"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="ddlCreditCardType"
                                                            class="col-lg-3 col-form-label">Password</label>
                                                        <div class="col-lg-9">
                                                            <input id="panel_Password" name="txtNameCard" type="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        
                                        <h3>Confirm Detail</h3>
                                        <fieldset>
                                            <div class="row">
                                                <p>Please enter your Confirmation details.</p>
                                            </div>
                                            <div class="col">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtNameCard" class="col-form-label">Licence
                                                            Code</label>
                                                        <div class="col-lg-9">
                                                            <input placeholder="random value" id="licence_code" name="licence_code" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="t_and_c_checkbox">
                                                            <label class="custom-control-label" for="t_and_c_checkbox">I
                                                                agree with the Terms and Conditions.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="public/libs/jquery/jquery.min.js"></script>
    <script src="public/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/libs/metismenu/metisMenu.min.js"></script>
    <script src="public/libs/simplebar/simplebar.min.js"></script>
    <script src="public/libs/node-waves/waves.min.js"></script>

    <!-- Responsive examples -->
    <script src="public/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="public/js/pages/datatables.init.js"></script>

    <!-- form wizard -->
    <script src="public/libs/jquery-steps/build/jquery.steps.js"></script>

    <script src="public/js/app.js"></script>

</body>

</html>

<script>
    $(function ()

        {

            $("#form-horizontal").steps({

                headerTag: "h3",

                bodyTag: "fieldset",

                transitionEffect: "slide",

                onStepChanging: function (event, currentIndex, newIndex) {
                    if(currentIndex == 1) {
                        var Database_Host = document.getElementById("Database_Host").value;
                        var Database_User = document.getElementById("Database_User").value;
                        var Password = document.getElementById("Password").value;
                        var Database_Name = document.getElementById("Database_Name").value;

                        if(Database_Host != "" && Database_User != "" && Password != "" && Database_Name != "") {
                            return true;
                        } else {
                            alert('Please Fill the Details!');
                        }

                    }else if(currentIndex == 2) {
                        var First_Name = document.getElementById("First_Name").value;
                        var Last_Name = document.getElementById("Last_Name").value;
                        var Email = document.getElementById("Email").value;
                        var panel_Password = document.getElementById("panel_Password").value;

                        if(First_Name != "" && Last_Name != "" && Email != "" && panel_Password != "" ) {
                            return true;
                        } else {
                            alert('Please Fill the Details!');
                        }

                    }else {
                        return true;
                    }
                },

                onFinished: function (event, currentIndex) {
                    var licence_code = document.getElementById("licence_code").value;
                    var t_and_c_checkbox = document.getElementById("t_and_c_checkbox").checked;

                    if(t_and_c_checkbox) {
                        if(licence_code == "") {
                            alert('Please Fill the Details!');
                        } else {
                            var Database_Host = document.getElementById('Database_Host').value;
                            var Database_User = document.getElementById('Database_User').value;
                            var Password = document.getElementById('Password').value;
                            var Database_Name = document.getElementById('Database_Name').value;
        
                            var First_Name = document.getElementById('First_Name').value;
                            var Last_Name = document.getElementById('Last_Name').value;
                            var Email = document.getElementById('Email').value;
                            var panel_Password = document.getElementById('panel_Password').value;
        
                            if (Database_Host == "" || Database_User == "" ||
                                Database_Name == "") {
                                alert("Fill Database Connection Details Correctly");
                            } else {
                                if (First_Name == "" || Last_Name == "" || Email == "" || panel_Password == "") {
                                    alert("Fill Administration Details Correctly");
                                } else {
                                    var jsonObjects = {
                                        "Database_Host": Database_Host,
                                        "Database_User": Database_User,
                                        "Password": Password,
                                        "Database_Name": Database_Name,
                                        "First_Name": First_Name,
                                        "Last_Name": Last_Name,
                                        "Email": Email,
                                        "panel_Password": panel_Password,
                                        "licence_code": licence_code
                                    };
                                    $.ajax({
                                        type: 'POST',
                                        url: "connection.php",
                                        contentType: 'application/json',
                                        data: JSON.stringify(jsonObjects),
                                        dataType: 'text',
                                        beforeSend: function () {
                                            $('a[href$="finish"]').text('Finishing...');
                                        },
                                        success: function (response) {
                                            if(response == "Installed Successfully") {
                                                window.location = "../";
                                            } else {
                                                alert(response);
                                            }
                                            $('a[href$="finish"]').text('Finish');
                                        },
                                        error: function (jq, status, message) {
                                            $('a[href$="finish"]').text('Finish');
                                        }
                                    });
                                }
        
                            }
                        }
                    } else {
                        alert('Please Fill the Details!');
                    }
                    
                }

            });

        });
</script>