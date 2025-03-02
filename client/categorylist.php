<div>
    <h1 class="heading mt-3">Categories</h1>
    <?php
        include("./common/db.php");

        $query = "SELECT * FROM `category`";
        $result = $conn->query($query);
        foreach($result as $row){
            $title = ucfirst($row['name']);
            $id = $row['id'];
            echo "<div class=' border border-1 border-secondary p-2 m-3'>
            <a href='?cat-id=$id' class=' text-decoration-none'>$title</a>
            </div>";
        }
    ?>
</div>