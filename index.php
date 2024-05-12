<!doctype html>
<html lang="ar" dir="rt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="partials/style.css">
    <title>iDiscuss</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    .container1 {
        position: relative;
        width: 100%;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden;

        background: linear-gradient(to top,
                rgba(0, 0, 0, 0.5) 50%,
                rgba(0, 0, 0, 0.5) 50%),
            url(desk.jpg);
        background-position: center;
        background-size: cover;
        height: 100vh;
    }

    .container1:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,
                0,
                0,
                0.5);
        /* Adjust the opacity value (0.5) as needed */
        z-index: -1;
        /* Ensure it stays behind the content */
    }

    .content {
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        position: relative;
        /* Ensure that the text remains on top */
        z-index: 1;
        /* Ensure it stays on top of the pseudo-element */
    }
    </style>
</head>

<body>
    <!-- connections with partials folders  -->
    <?php include'partials/_dbconnection.php';?>
    <?php include'partials/_header.php';?>

    <div class="container1">
        <div class="content">

            <h1 style="color: rgb(209, 209, 76)">
                iDiscuss
            </h1>
            <br>
            <br>
            <h5 style="color: white">
                Join the Conversation, Expand Your Knowledge.
            </h5>
            <h5>Empowering Ideas, Enriching Connections, Embracing Diversity.</h5>
           
        </div>
    </div>

    <div class="container my-4">
        <h2 class="text-center">Add Category</h2>
        <form action="add_category.php" method="POST">
            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" required>
            </div>
            <div class="mb-3">
                <label for="category_description" class="form-label">Category Description</label>
                <textarea class="form-control" id="category_description" name="category_description" rows="3"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>


    <!-- categories  -->
    <div class="container my-4">
        <h2 class="text-center">iDiscuss_categories</h2>
        <div class="row">
            <!-- use aloop to fetch categoriesdata from database  -->
            <?php
   $sql="SELECT * FROM `categories`";
   $result=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
//  echo $row['category_id'];
//  echo $row['category_name'];
$id = $row['category_id'];
$cat = $row['category_name'];
$desc = $row['category_description'];
   echo'
     
            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/400x300/?programing/coding/'.$cat.'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="threadlist.php?catid='.$id.'">'.$cat.'</a> </h5>
                        <p class="card-text"> '.substr($desc,0,90).'...</p>
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>
            ';
  }

?>

            <?php   include'partials/_footer.php'; ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
-->


</body>

</html>