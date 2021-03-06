<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หน้าหลัก Gap System</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">

  </head>

  <body>

    <!-- Navigation -->
<?php include_once('template/header.php');
      include_once('template/content/tabpane.php');
      include_once('template/footer.php'); ?>
    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

    <script>
      $('#go-profile-input_btn').click(function(){
          var x = document.getElementById('group-info-regis');
          var y = document.getElementById('group-profile-regis');
           if (x.style.display === 'none') {
               x.style.display = 'block';
           } else {
               x.style.display = 'none';
           }
           if (y.style.display === 'none') {
               y.style.display = 'block';
           } else {
               y.style.display = 'none';
           }
       });
       $('#back_btn').click(function(){
           var x = document.getElementById('group-info-regis');
           var y = document.getElementById('group-profile-regis');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
            if (y.style.display === 'none') {
                y.style.display = 'block';
            } else {
                y.style.display = 'none';
            }
        });

        $.Thailand({
            database: './jquery.Thailand.js/database/db.json', // path หรือ url ไปยัง database
            $district: $('#subDistrictRegis'), // input ของตำบล
            $amphoe: $('#districtRegis'), // input ของอำเภอ
            $province: $('#provinceRegis'), // input ของจังหวัด
            $zipcode: $('#postalRegis'), // input ของรหัสไปรษณีย์
        });


    </script>

  </body>

</html>
