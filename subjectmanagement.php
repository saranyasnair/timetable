
    <!DOCTYPE html>
<html lang="en">

<head>
 <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start 
                    </a>
                </li>
				<li>
                    <a href="index.php">Index</a>
                </li>
				
				
                <li>
                    <a href="add_subjects.php">Add Subject</a>
                </li>
                
                <li>
                    <a href="view_subjects.php">View All Sujects</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Automatic Timetable Generator</h1>
                <
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Explore</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>       
<body>

                          <!--  <li><a href="add_subjects.php">add subjects</a></li>
								
							<li><a href="view_subjects.php">View All Subjects</a></li> -->

</body>
</html>
