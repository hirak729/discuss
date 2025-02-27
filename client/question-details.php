<div class="container">
    <h1 class="heading mt-3">Questions</h1>
    <div class="col-8">
    <?php
        include("./common/db.php");
        $query = "SELECT * FROM `questions` WHERE `id` = $q_id";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();

        echo "
            <h4 class='mt-5 text-primary'>Question: $row[title]</h4>
            <p class='mt-3 fs-5'>$row[description]</p>
        ";
    ?>
    <textarea class="form-control mt-3">Write your answer....</textarea>
    <button class="btn btn-primary mt-3">Submit</button>
    </div>
</div>