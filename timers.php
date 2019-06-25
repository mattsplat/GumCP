<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./static/images/raspberry.png" type="image/png"/>
    <link rel="icon" href="./static/images/raspberry.png" type="image/png"/>
    <title>GumCP Dashboard</title>
    <link href="./static/css.php" rel="stylesheet" type="text/css">
    <script src="./static/js.php" type="text/javascript">
    </script>
    <script type="text/javascript">

    </script>
</head>

<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php"><img src="./static/images/raspberry.png"/>GumCP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    include_once('./include/menu.php');
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>


    <div id="system-status" class="panel panel-default" style="margin-bottom: 5px">
        <div class="panel-heading">
            <h3 class="panel-title">Timers </a--></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn pull-right btn-primary"><strong>+</strong></button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Status</th>
                            <th>Description</th>
                            <th>On Minutes</th>
                            <th>Off Minutes</th>
                            <th>State Start</th>
                            <th>State</th>
                            <th>PIN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Active</td>
                            <td>Grow Light</td>
                            <td>1080</td>
                            <td>360</td>
                            <td>04:00</td>
                            <td>On</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Active</td>
                            <td>Nutrient Pump 1</td>
                            <td>15</td>
                            <td>15</td>
                            <td>04:00</td>
                            <td>On</td>
                            <td>13</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="top-processes" class="panel panel-default" style="margin-bottom: 5px">
        <div class="panel-heading">
            <h3 class="panel-title">Sensors</h3>
        </div>
        <div class="panel-body">

        </div>
    </div>

    <div id="top-processes" class="panel panel-default" style="margin-bottom: 5px">
        <div class="panel-heading">
            <h3 class="panel-title">Conditionals</h3>
        </div>
        <div class="panel-body">

        </div>
    </div>


</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Not GumCP Anymore</p>
    </div>
</footer>
<div id="dialog-placeholder"></div>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</body>
</body>
</html>
