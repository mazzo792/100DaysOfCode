<?php
  include 'Includes/header.inc.php';
?>
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                          <form action="Includes/imgUpload.inc.php" method="POST">
                            <img src="Images/Me.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                  <input type="file" name="image"/>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                          <?php
                            include 'Includes/dbh.inc.php';
                            $name = $_SESSION['username'];
                            $select= "SELECT * FROM users WHERE username='$name'";
                            $sql = mysqli_query($conn,$select);
                            $row = mysqli_fetch_assoc($sql);
                          ?>
                                    <h5>
                                        <?php
                                          echo $row['fname']." ".$row['lname'];
                                        ?>
                                    </h5>
                                    <h6>
                                        <?php
                                          echo $row['position'];
                                        ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>10/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="profile.php" class="profile-edit-btn" name="btnAddMore">Edit Profile<a/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Social Media</p>
                            <a href="">Twitter</a><br/>
                            <a href="">Facebook</a><br/>
                            <a href="">Instagram</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">Software Developer</a><br/>
                            <a href="">PHP, HTML, CSS, Pyrhon</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php
                                                      echo $row['username'];
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                    echo $row['fname']." ".$row['lname'];
                                                  ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                    echo $row['email'];
                                                  ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                    echo $row['num'];
                                                  ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                  <?php
                                                    echo $row['profession'];
                                                  ?>
                                                </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Web Developer at click.sd, love to program, inspired by many</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
  </body>
</html>
