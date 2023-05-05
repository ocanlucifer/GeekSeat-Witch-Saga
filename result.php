<?php include "Calculate.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekSeat::Witch Saga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-3"></div>
        <?php
        $age_p1     = $_POST['age_p1'];
        $year_p1    = $_POST['year_p1'];
        $age_p2     = $_POST['age_p2'];
        $year_p2    = $_POST['year_p2'];
        $val1       = $year_p1 - $age_p1;
        $val2       = $year_p2 - $age_p2;

        $calc   = new Calculate();
        $p1     = $calc->Killed($age_p1, $year_p1);
        $p2     = $calc->Killed($age_p2, $year_p2);
        $avg    = $calc->Average($p1, $p2);

        // echo "val1 = " . $p1 . " and Val2 = " . $p2 . "\r\n average is " . $avg;
        ?>
        <div class="card">
            <div class="card-header">
                GeekSeat::Witch Saga
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Person 1 <?= $p1 < 0 ? '<strong>invalid data</strong>' : ''; ?></h5>
                                <p class="card-text">Born on Year: <strong><?= $year_p1; ?></strong> – <strong><?= $age_p1; ?></strong> = <strong><?= $val1; ?></strong>, number of people killed on year <strong><?= $val1; ?></strong> is <strong><?= $p1; ?></strong>.</p>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Person 2 <?= $p2 < 0 ? '<strong>invalid data</strong>' : ''; ?></h5>
                                <p class="card-text">Born on Year: <strong><?= $year_p2; ?></strong> – <strong><?= $age_p2; ?></strong> = <strong><?= $val2; ?></strong>, number of people killed on year <strong><?= $val2; ?></strong> is <strong><?= $p2; ?></strong>.</p>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Average <?= $avg < 0 ? '<strong>invalid data</strong>' : ''; ?></h5>
                                <p class="card-text">So the average is ( <strong><?= $p1; ?></strong> + <strong><?= $p2; ?></strong> )/2 = <strong><?= $avg; ?></strong></p>
                                <a href="javascript: history.back()" class="card-link">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="card-text">
                            rule to decide the number of villagers
                            she should kill each year.

                        <ul>
                            <li>the 1st year she kills 1 villager</li>
                            <li>On the 2nd year she kills 1 + 1 = 2 villagers</li>
                            <li>On the 3rd year she kills 1 + 1 + 2 = 4 villagers</li>
                            <li>On the 4th year she kills 1 + 1 + 2 + 3 = 7 villagers</li>
                            <li>On the 5th year she kills 1 + 1 + 2 + 3 + 5 = 12 villagers</li>
                            <li>And so on...</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>