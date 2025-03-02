<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="heading mt-3">Questions</h1>
    <?php
        include("./common/db.php");
        $query = "SELECT * FROM `questions` WHERE `id` = $q_id";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $c_id = $row['category_id'];

        echo "
            <h4 class='mt-5 fw-bold text-primary'>Question: $row[title]</h4x>
            <p class='mt-3 fw-normal text-dark fs-5'>$row[description]</p>
        ";
        include('answer.php');
    ?>
    <form action="./server/requests.php" method="post">
    <input type="hidden" name="q_id" value="<?php echo $q_id; ?>">
    <textarea name="answer" class="form-control mt-3" placeholder="Write your answer...."></textarea>
    <button class="btn btn-primary mt-3">Submit Your Answer</button>
    </form>    
    </div>
    <div class="col-4">
        
        <?php
            $catquery = "SELECT name FROM `category` WHERE `id`=$c_id";
            $catresult = $conn->query($catquery);
            $catrow = $catresult->fetch_assoc();
            $name = ucfirst($catrow['name']);

            echo "<h1 class='heading mt-3'>$name</h1>";

            $query = "SELECT * FROM `questions` WHERE `category_id`=$c_id AND `id`!=$q_id";
            $result = $conn->query($query);
            foreach($result as $row){
                $title = $row['title'];
                $id = $row['id'];
                echo "
                <div class=' border border-1 border-secondary p-2 m-3'>
                <a href='?q-id=$id' class='text-dark fs-6 text-decoration-none'>$title</a>
                </div>";
            }
        ?>
    </div>
    </div>    
</div>