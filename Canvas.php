<!DOCTYPE html>
<html style="width: 1500px; height: 100%; background-color: lightgrey">
<head>
    <title>Room 1</title>
    <meta charset="utf-8" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div hidden>
    <span id="active_tool">brush</span>
    <span id="width_brush">5</span>
    <span id="color_brush">#223355</span>

</div>
<div id="er404" hidden>
    <div style="justify-content: center;display: flex;flex-direction: row">
        <img src="images/error-404.png" class="img-responsive">
    </div>
</div>


<div style="height: 100%">
    <canvas id="conv" width="1500" height="820" style="background-color: white;">
        Element dont work on this browser!
    </canvas>
</div>
<script src="js/canvas_draw.js"></script>
</body>
</html>

