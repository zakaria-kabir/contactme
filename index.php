<?php
session_start();
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
    $_SESSION["success"] = "Thanks for your feedback";
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
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contact Me</title>
</head>

<body>
    <!-- aos initialization -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-sm navbar-light bg-light fixed-top p-0 shadow-lg bg-transparent">
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
                        <a class="nav-link active" aria-current="page" href="./admin/index.php">Go Admin Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- eof nav section -->
    <!-- contactForm -->
    <section id="contact" class="bg-dark d-flex flex-column justify-content-center align-self-center min-vh-100">
        <div class="container my-4 p-md-5 pb-md-3 pt-md-2 pt-5" data-aos="flip-right" data-aos-duration="1000">
            <div class="contacttitle text-center pb-2">
                <h2>Get in Touch</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12 d-flex flex-column justify-content-center order-md-1 form-wrap bg-transparent">
                    <form id="contactForm" action="" method="POST" class="form-wrap row g-sm-3 ">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="name">
                                <p class="m-0">Name</p>
                            </label>
                            <input class="form-control rounded-pill" id="name" type="text" placeholder="Enter your Name" name="name" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="number">
                                <p class="m-0">Contact Number</p>
                            </label>
                            <input class="form-control rounded-pill" id="number" type="tel" placeholder="Enter your Contact Number" name="number" required />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="emailAddress">
                                <p class="m-0">Email Address</p>
                            </label>
                            <input class="form-control rounded-pill" id="emailAddress" type="email" placeholder="Enter your Email Address" name="email" required />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="subject">
                                <p class="m-0">What's About?</p>
                            </label>
                            <input class="form-control rounded-pill" id="subject" type="text" placeholder="Regarding...." name="subject" required />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="message">
                                <p class="m-0">Message</p>
                            </label>
                            <textarea class="form-control rounded-3 h-75" id="message" type="text" placeholder="What's inside your head? Feel free to share with me." name="message" required></textarea>
                        </div>
                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Thank you for your feedback.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->
                        <div class="col-12  text-center">
                            <button class="btn rounded-pill btn-cus" type="submit" id="submit" name="submitted">Send Message <span><i class="fa-solid fa-paper-plane "></i></span></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-sm-12 order-md-0 p-3 detaills-wrap d-flex justify-content-center">
                    <div class="details text-center text-white align-self-center ">
                        <p><i class="fa-solid fa-envelope "></i> :<a href="mailto: zakariak5469@gmail.com">
                                zakariak5469@gmail.com</a></p>
                        <p><i class="fa-solid fa-link"></i> :<a href="https://zakaria-kabir.me/">
                                zakaria-kabir.me</a></p>
                        <p><i class="fa-solid fa-phone "></i> : +8801705300966</p>
                        <p><i class="fa-solid fa-location-dot "></i> : Adabar, Dhaka, 1207, Bangladesh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--eof contactForm -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
?>
    <script>
        Swal.fire('Thank you for your feedback!')
    </script>
<?php
    session_unset();
    session_destroy();
}
?>