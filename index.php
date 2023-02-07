<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
</head>

<body>

    <div class="container">
        <form action="/Contact us_Get_Post.php" method="post">
            <?php if(isset($_GET['error'])) {?>
            p class="error"> <?php echo $_GET['error'];?>}<p>
            <p}
        <div class="mb-3 mt-3">
                <label for="First Name" class="form-label">First Name:</label>
                <input type="First Name" class="form-control" id="First Name" placeholder="Enter your first name" name="First Name">
            </div>
            <div class="mb-3 mt-3">
                <label for="Last Name" class="form-label">Last Name:</label>
                <input type="Last Name" class="form-control" id="Last Name" placeholder="Enter your last name" name="Last Name">
            </div>
            
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-2">
                <label for="Phone No" class="form-label">Phone No:</label>
                <input type="Phone No" class="form-control" id="Phone No" placeholder="Enter your Phone No" name="Phone No">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>