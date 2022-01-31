<!DOCTYPE html>
<html lang="en">
<body>
<br>
<br>
<br>
<br>


<?php include 'header-style.php'; ?>
<?php include 'navigation.php';?>



<div class="container">
<!--    <form id="myForm" method="post" enctype="multipart/form-data">-->
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputEmail1" ><b style="color: #1c7430"> First Name</b></label>
                    <input type="text" class="form-control" id="fname" aria-describedby="emailHelp"
                           placeholder="first name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Last Name</b></label>
                    <input type="text" class="form-control" id="lname" aria-describedby="emailHelp"
                           placeholder="Enter Your Last Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Address</b></label>
                    <input type="text" class="form-control" id="address" aria-describedby="emailHelp"
                           placeholder="Enter Your Address">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Email</b></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Enter Your Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Telephone Number</b></label>
                    <input type="text" class="form-control" id="teli" aria-describedby="emailHelp"
                           placeholder="Enter Your Telephone Number">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Father Name</b></label>
                    <input type="text" class="form-control" id="fatherName" aria-describedby="emailHelp"
                           placeholder="Enter Your Father Name">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1"><b style="color: #1c7430"> Father Telephone</b></label>
                    <input type="text" class="form-control" id="fteli" placeholder="Enter Your Father Telephone">
                </div>

            </div>
            <div class="col-sm">

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Mother Name</b></label>
                    <input type="text" class="form-control" id="mName" aria-describedby="emailHelp"
                           placeholder="Enter Your Mother Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b style="color: #1c7430"> Mother Telephone</b></label>
                    <input type="text" class="form-control" id="mTele" aria-describedby="emailHelp"
                           placeholder="Enter Your Mother Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"><b style="color: #1c7430"> Birth Day</b></label>
                    <input type="text" class="form-control" id="bDay" placeholder="Enter Your Birth Day">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1"><b style="color: #1c7430"> Registration Day </b></label>
                    <input type="date" class="form-control" id="reDya" placeholder="Registration Day">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1"><b style="color: #1c7430"> Select Team Type</b></label>
                    <select id="teamType" class="custom-select custom-select-lg mb-3">
                        <option selected>Select Team Type</option>
                        <option value="Un19">Un19</option>
                        <option value="Un13">Un13</option>
                        <option value="Un17">Un17</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1"><b style="color: #1c7430"> Select Coach</b></label>
                    <select id="coachName" class="custom-select custom-select-lg mb-3">
                        <option selected>Select Coach</option>
                        <option value="Ishan Madushanka">Ishan Madushanka</option>
                        <option value="Nuwan Chinthaka">Nuwan Chinthaka</option>
                        <option value="Sanath jayasuriya">Sanath jayasuriya</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1"><b style="color: #1c7430"> Select profile pictures</b></label>
                            <div class="custom-file">
                                <input type="file" name="pPicture[]" class="custom-file-input" id="pPicture">
                                <label class="custom-file-label" >Choose file</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1"><b style="color: #1c7430"> Bank Slip image</b></label>
                                <div class="custom-file">
                                    <input type="file" name="bankSlip[]" class="custom-file-input" id="bankSlip">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <button class="theme-btn btn-style-one" type="button" onclick="registrationClient()">
        <i class="btn-curve"></i>
        <span class="btn-title">Submit</span>
    </button>
       
<!--    </form>-->
</div>
<br>
<br>
<?php include "footer.php"?>



<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/TweenMax.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jarallax.min.js"></script>
<script src="js/custom-script.js"></script>
<script src="iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
<script src="config/registration.js"></script>
</body>

</html>