<<?php
include_once("db_connect.php");
session_start();
?>


<!doctype html>
<html lang="en">

<?php include("base.php") ?>
<body>
  <main role="main">
      <H1><?php print "Login = " . $_SESSION['username'];?><H1>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">

          <!-- Programs -->
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <div class="programs">
                <h2>Programs</h2>
              </div>
              <div class="card-body">
                <a href="momcardio.html">
                  <h4 class="card-text">Mom Cardio</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>
              <div class="card-body">
                <a href="gainsfornewbies.html">
                  <h4 class="card-text">Gainz for Newbies</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Make New Program</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Find New Programs</button>
          </div>




          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <div class="programs">
                <h2>Teams</h2>
              </div>
              <div class="card-body">
                <a href="coderswholift.html">
                  <h4 class="card-text">Coders Who Lift</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>
              <div class="card-body">
                <a href="gettysburgcyclingclub.html">
                  <h4 class="card-text">Gettysburg Cycling Club</h4>
                </a>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create New Team</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Find New Team</button>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img id="userIcon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png" alt="" width="100px" height="100px">
              <div class="programs">
                <h2>Username</h2>
                <h5>Calories Burned: xx</h5>
                <h5>Weight: xx</h5>
              </div>

              <div class="card-body">
                <a href="gainsfornewbies.html">
                  <h5 class="card-text">Account Settings</h5>
                </a>
                <div class="d-flex justify-content-between align-items-center">

                </div>
              </div>

              <div class="logout">
                <form class="" action="logout.php" method="post">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Find New Team</button>
                </form>

              </div>

            </div>
            <div class="card mb-4 shadow-sm">
              <div class="programs">
                <h2>Friends</h2>
                <h5>superkingjunior</h5>
                <h5>skim</h5>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Add Friend</button>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </main>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>

</html>