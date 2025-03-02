<div class="container">
    
    <div class="row">
        <div class="col-8">
        <h1 class="heading mt-3">Questions</h1>
    <?php
        include("./common/db.php");

        if (isset($_SESSION['user'])) {
            $current_user_id = $_SESSION['user']['user_id'];
        } else {
            $current_user_id = null;
        }

        if(isset($_GET['cat-id'])){
            $cat_id = $_GET['cat-id'];
            $query = "SELECT * FROM `questions` WHERE category_id = $cat_id";
        }
        elseif(isset($_GET['u-id'])){
            $U_id = $_GET['u-id'];
            $query = "SELECT * FROM `questions` WHERE user_id = $U_id";  
        }
        elseif(isset($_GET['latest'])){
            $query = "SELECT * FROM `questions` ORDER BY `id` DESC";
        }
        elseif(isset($_GET['search'])){
            $search = $_GET['search'];
            $query = "SELECT * FROM `questions` WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
        }
        else{
            $query = "SELECT * FROM `questions`";
        }

        $result = $conn->query($query);
        foreach($result as $row){
            $title = $row['title'];
            $id = $row['id'];
            $u_id = $row['user_id'];
            echo "<div class='d-flex justify-content-between border border-1 border-secondary p-2 m-3'>
            <h6><a href='?q-id=$id' class=' text-decoration-none'>$title</a></h6>";
            if (isset($_GET['u-id']) && $_GET['u-id'] == $current_user_id) {
                echo "<a href='./server/requests.php?delete=$id' class='btn btn-danger text-light'>Delete</a>";
            }
            echo "</div>";
        }
    ?>
    </div>
    <div class="col-4">
        <?php
            include('categorylist.php');
        ?>
    </div>
    </div>
</div>