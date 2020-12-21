<?php include('abstract-views/header.php'); ?>

    <h1>Registration</h1>

    <form action="index.php" method="post">
        <input type="hidden" name="action" value="submit_registration">

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" id="fname">
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname">
        </div>

        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" name="birthday" id="birthday">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


<?php include('abstract-views/footer.php'); ?>