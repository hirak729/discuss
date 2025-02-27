<div class="container">
    <h1 class="heading mt-3">Questions</h1>
    <div class="col-8">
    <?php
        include("./common/db.php");

        $query = "SELECT * FROM `questions`";
        $result = $conn->query($query);
        foreach($result as $row){
            // echo $row['title'];
            $title = $row['title'];
            $id = $row['id'];
            echo "<div class='card p-2 m-3'>
            <h5><a href='?q-id=$id' class='text-decoration-none'>$title</a></h5>
            </div>";
        }
    ?>
    </div>
</div>
