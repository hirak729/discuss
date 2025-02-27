<select name="category" class="form-control" id="category">
    <option value="">Select Category</option>
    <?php
    include("./common/db.php");

    $query = "SELECT * FROM `category`";
    $result = $conn->query($query);
    foreach($result as $row){
        echo "<option value='".$row['id']."'>".ucfirst($row['name'])."</option>";
    }
    ?>
</select>