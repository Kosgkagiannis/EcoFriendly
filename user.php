<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Page</title>
    <h1 style="text-align:center">Welcome to the user page, <?php echo $_SESSION['sesusername'] ?>!</h1>
    <link rel="stylesheet" href="css/w3css.css"/>
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
        <style>
              #mapid {height: 50%;
                      width: 50%;
                      margin: "auto"}
        </style>
</head>
<body>
    <div id="mapid"></div>
    <!--Buttons for map filtering-->
    <div class="upBar" id=mapFilters>
        <select name="year" id="year">
            <option value="">Select Year</option> <!--runs with javascript/monthDropDown.js-->
        </select>
        <select name="month" id="month">
            <option selected value='1'>January</option>
            <option value='2'>February</option>
            <option value='3'>March</option>
            <option value='4'>April</option>
            <option value='5'>May</option>
            <option value='6'>June</option>
            <option value='7'>July</option>
            <option value='8'>August</option>
            <option value='9'>September</option>
            <option value='10'>October</option>
            <option value='11'>November</option>
            <option value='12'>December</option>
        </select>
        <select name="day" id="day">
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
            <option value="6">Saturday</option>
            <option value="7">Sunday</option>
        </select>
        <input type="time" id="hours" name="hours">        
    </div>

    <script src="leaflet/leaflet.js"></script>
    <script src="heatmap/heatmap.js-master/build/heatmap.js"></script>
    <script src="heatmap/heatmap.js-master/plugins/leaflet-heatmap/leaflet-heatmap.js"></script>
    <script src="leaflet/map.js"> </script>
    <script src="javascript/yearDropDown.js"></script>
    <form action="actions/uploadaction.php">
        <input type="file" id="myFile">
        <input type="submit">
    </form>
</body>
</html>