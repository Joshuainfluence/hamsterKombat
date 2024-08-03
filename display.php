<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Details</title>
    <link rel="stylesheet" href="bootstrap5.min.css">
</head>

<body class="bg-dark">
    <div class="container-fluid bg-dark">
        <div class="row bg-dark">
            <h2 class="text-danger">INFLUENCE CHAMBER</h2>
        </div>
        <div class="row bg-dark">
            <div class="col">
                <div class="card table responsive bg-dark text-success">
                    <div class="card-header">

                    </div>
                    <div class="card-body text-success">
                        <h1 class="text-success">Location Details</h1>
                        <table class="table table-bordered text-success" border="1">
                            <tr>
                                <th>Latitude</th>
                                <th>Longitude</th>
                            </tr>
                            <?php
                            $location = "details.txt";
                            if (file_exists($location)) {
                                $file = fopen($location, 'r');
                                while (($line = fgets($file)) !== false) {
                                    $coordinates = explode(",", trim($line));
                                    if (count($coordinates) == 2) {
                                        echo "<tr><td>{$coordinates[0]}</td><td>{$coordinates[1]}</td></tr>";
                                    }
                                }
                                fclose($file);
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-dark mt-4">
            <div class="col">
                <div class="card table responsive bg-dark text-success">
                    <div class="card-header">

                    </div>
                    <div class="card-body text-success">
                        <h1 class="text-success">Location Details</h1>
                        <table class="table table-bordered text-success" border="1">
                            <tr>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>IP</th>
                                <th>Phone</th>
                            </tr>
                            <?php
                            $location = "file.txt";
                            if (file_exists($location)) {
                                $file = fopen($location, 'r');
                                while (($line = fgets($file)) !== false) {
                                    $coordinates = explode(",", trim($line));
                                    if (count($coordinates) == 4) {
                                        echo "<tr><td>{$coordinates[0]}</td><td>{$coordinates[1]}</td><td>{$coordinates[2]}</td><td>{$coordinates[3]}</td></tr>";
                                    }
                                }
                                fclose($file);
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>