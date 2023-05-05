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
        <div class="card">
            <div class="card-header">
                GeekSeat::Witch Saga
            </div>
            <div class="card-body">
                <form method="POST" action="result.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="Age Person 1" aria-label="Age Person 1" name="age_p1" required id="age1" autocomplete="off">
                                <label for="age1">Age Person 1</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="Year Person 1" aria-label="Year Person 1" name="year_p1" required id="year1" autocomplete="off">
                                <label for="year1">Year Person 1</label>
                            </div>
                        </div>
                    </div>
                    <div class="py-1"></div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="Age Person 2" aria-label="Age Person 2" name="age_p2" required id="age2" autocomplete="off">
                                <label for="age2">Age Person 2</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="Year Person 2" aria-label="Year Person 2" name="year_p2" required id="year2" autocomplete="off">
                                <label for="year2">Year Person 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="py-1"></div>

                    <button class="btn btn-x btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>