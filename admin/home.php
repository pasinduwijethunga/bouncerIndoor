<?php include 'header.php';
include '../db/dbConnection.php';

// $result=mysqli_query($connection,"SELECT COUNT(*) AS `Unverified_users` FROM user_details WHERE is_verified = 0");
// $data=mysqli_fetch_assoc($result);
// $Unverified_users = $data['Unverified_users'];


?>
    <style>
        .my-card
        {
            position:absolute;
            left:40%;
            top:-20px;
            border-radius:50%;
        }
    </style>
<main class="app-content">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">

    <div class="jumbotron">
        <div class="row w-100">
            <h1 style="text-align:center"> Bouncer Indoor Sports Admin panel</h1>

        </div>
    </div>
</main>
<?php include 'footer.php'; ?>