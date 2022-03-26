<?php
include_once './include/config.php';
?>
<?php
include_once './include/createtable.php';

if (isset($_POST['submitted'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT IGNORE INTO contactmeTbl (name, email, number, subject, messages) VALUES ('$name','$email','$number','$subject','$message')";
    mysqli_query($link, $sql);
}
mysqli_close($link);
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
    <link rel="stylesheet" href="./style.css">
    <title>Contact Me</title>
</head>

<body>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-house d-inline-block align-text-center"></i>
                Zakaria
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./admin/index.php">Go Admin Panel</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- eof nav section -->
    <!-- contactForm -->
    <section id="contact">
        <div class="container py-4 vh-100 d-flex flex-column justify-content-center">
            <div class="contacttitle text-center">
                <h2>Get in Touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ut dolores accusantium enim fugit,
                    neque obcaecati
                    nostrum ratione aperiam repellendus delectus, tenetur odit possimus reprehenderit eum voluptatum
                    explicabo eveniet
                    ipsum?</p>
            </div>
            <div class="row">
                <div class="col-auto col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="./img/mail.svg" id="heroimg" alt="">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <form id="contactForm" action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control rounded-pill" id="name" type="text" placeholder="Enter your Name" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control rounded-pill" id="emailAddress" type="email" placeholder="Enter your Email Address" name="email" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="number">Contact Number</label>
                            <input class="form-control rounded-pill" id="number" type="tel" placeholder="Enter your Contact Number" name="number" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="subject">What's About?</label>
                            <input class="form-control rounded-pill" id="subject" type="text" placeholder="Regarding...." name="subject" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control rounded-3" id="message" type="text" placeholder="What's inside your head? Feel free to share with me." style="height: 8rem;" name="message" required></textarea>
                        </div>
                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Thank you for your feedback.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->
                        <div class="d-grid">
                            <button class="btn btn-sm rounded-pill" type="submit" id="submit" name="submitted">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--eof contactForm -->
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</body>

</html>
<!-- <script>
    $(document).ready(function() {
        $('#submit').click(function() {
            $('.alert').show()
        })
    });
</script> -->