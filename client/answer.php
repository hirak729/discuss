<div class="container">
    <div class="offset-sm-1">
    <h5 class="fs-4 fw-bold text-dark mt-3">Answers:</h5>
    <?php
        $query = "SELECT * FROM `answers` WHERE `question_id` = $q_id";
        $result = $conn->query($query);
        foreach($result as $row){
            $answer = $row['answer'];
            echo "<div class='row'>
            <p class='mb-2 p-2 fw-normal fs-5 text-dark border-bottom border-2 border-secondary'>$answer</p>
            </div>";
        }

    ?>
    </div>
</div>