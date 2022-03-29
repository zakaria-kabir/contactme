<?php
include "../include/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="./adminstyle.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body>
    <!-- aos initialization -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-sm navbar-light bg-light sticky-top p-0 shadow-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <i class="fa-solid fa-house d-inline-block align-text-center "></i>
                Zakaria
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Go Contact Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- eof nav section -->
    <div class="wrap  py-4">
        <?php
        $sql = "SELECT * FROM contactmeTbl;";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) < 0) {
            echo 'Retrieval of data from Database Failed - #' . mysqli_errno($link) . ': ' . mysqli_error($link);
        } else {
        ?>
            <!-- feedback table -->
            <div class="container-md py-4 collapse" id="contactMeFetchTable">
                <h3 class="text-center">List of Feedbacks</h3>
                <div class="table-responsive">
                    <table class="table table-sm table-success table-hover table-bordered border-primary">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) == 0) {
                                echo '<tr><td colspan="6" class="text-center">No Rows Returned</td></tr>';
                            } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr scope='row'>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['number']}</td>
                                    <td>{$row['subject']}</td>
                                    <td>{$row['messages']}</td>";
                                    echo "<td>";
                                    // echo '<a href="update.php?email=' . $row['email'] . '" class="m-3 py-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                    $list = array($row['email'], $row['messages']);
                                    $qs = http_build_query($list);
                                    echo '<a href="delete.php?' . $qs . '"onclick="return checkdelete()" class="m-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>\n";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- eof feedback table -->
        <?php
        }
        ?>
        <div class="text-center">
            <button class="btn btn-cus " type="button" data-bs-toggle="collapse" data-bs-target="#contactMeFetchTable" aria-expanded="false" aria-controls="contactMeFetchTable" data-aos="flip-right" data-aos-duration="1200">
                View Feedback Messages
            </button>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
        function checkdelete() {
            return confirm("Are you sure want to delete this entry? You won't be able to revert this!")
        }
    </script>
</body>

</html>