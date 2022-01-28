<?php
include 'header.php';
include '../db/dbConnection.php';
?>


<main class="app-content">
    <div class="app-title">
        <div>
<!--            <p><a class="btn btn-primary icon-btn" href="add-product"><i class="fa fa-plus"></i>Add New </a></p>-->
            <br>
            <h1><i class="fa fa-th-list"></i>All Register</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>Name</th>
<!--                            <th>last_name</th>-->
                            <th>address</th>
                            <th>email</th>
<!--                            <th>telephone</th>-->
<!--                            <th>father_name</th>-->
<!--                            <th>father_teli</th>-->
<!--                            <th>mother_name</th>-->
<!--                            <th>mother_teli</th>-->
<!--                            <th>birthday</th>-->
                            <th>registation_date</th>
                            <th>team_type</th>
                            <th>coach_name</th>
<!--                            <th>gender</th>-->
<!--                            <th>status</th>-->
<!--                            <th>Price</th>-->
<!--                            <th>Price</th>-->
                            <th>Slip image</th>
                            <!-- <th>Added Date/Time</th> -->
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = 'SELECT * FROM `registation`';
                        $result = mysqli_query($connection, $sql);
                        while ($dataRow = mysqli_fetch_assoc($result)) {
                            $slip_image_sql="SELECT * FROM `payment_slip_image` WHERE `register_id`={$dataRow['register_id']}";
                            $result_slip_image=mysqli_query($connection,$slip_image_sql);
                            $fetch_data=mysqli_fetch_assoc($result_slip_image);
                            echo '<tr>';
                            echo '<td >'.$dataRow['frist_name'].'&nbsp;'.$dataRow['last_name'].'</td>';
//                            echo '<td >'.$dataRow['last_name'].'</td>';
                            echo '<td >'.$dataRow['address'].'</td>';
                            echo '<td >'.$dataRow['email'].'</td>';
//                            echo '<td >'.$dataRow['telephone'].'</td>';
//                            echo '<td >'.$dataRow['father_name'].'</td>';
//                            echo '<td >'.$dataRow['father_teli'].'</td>';
//                            echo '<td >'.$dataRow['mother_name'].'</td>';
//                            echo '<td >'.$dataRow['mother_teli'].'</td>';
//                            echo '<td >'.$dataRow['birthday'].'</td>';
                            echo '<td >'.$dataRow['registation_date'].'</td>';
                            echo '<td >'.$dataRow['team_type'].'</td>';
                            echo '<td >'.$dataRow['coach_name'].'</td>';
//                            echo '<td >'.$dataRow['gender'].'</td>';
//                            echo '<td >'.$dataRow['status'].'</td>';
                            echo '<td >'."<img src='../galleryImg/".$fetch_data['slipe_image_name']."' width='50' >".'</td>';
                            echo "<td><a onClick=\"javascript: return confirm('Please confirm Activate');\"href='action-page.php?id=$dataRow[register_id]'>{$dataRow['status']}</a></td>";
                            echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\"href='action-delete.php?id=$dataRow[register_id]'>Delete</a></td>";
                            echo "<td><a href='action-edit?id=$dataRow[register_id]'>Edit</a></td>";
                            echo '</tr>';
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>