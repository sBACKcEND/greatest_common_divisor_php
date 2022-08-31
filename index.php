<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finding GCD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-25 mx-auto mt-5 text-bg-dark bg-opacity-75">
                    <div class="card-header"><h2>Find the GCD</h2></div><br>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="" class="form-label">1st number:</label>
                                <input type="text" name="first" value="" class="form-control" required>
                                <label for="" class="form-label mt-3">2nd number:</label>
                                <input type="text" name="second" value="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-warning">Find</button>
                            </div>
                            <br>

                            <?php

                            if (isset($_GET['first'])) {
                                $a = $_GET['first'];
                                $b = $_GET['second'];

                                function gcd($a, $b)
                                {
                                    if ($a == 0)
                                    return $b;
                                    if ($b == 0)
                                    return $a;

                                    if ($a == $b)
                                    return $a;

                                    if ($a < $b)
                                    return gcd($a, $b-$a);
                                    return gcd($a-$b, $b); 
                                }
                                echo "Answer: <br> GCD of $a and $b is ", gcd($a , $b);
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>