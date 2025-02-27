<div class="container">
    <h1 class="heading mt-3">Ask A Question</h1>
    <form action="./server/requests.php" method="post">
        <div class="col-6 offset-sm-3 mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter question">
        </div>
        <div class="col-6 offset-sm-3 mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description"></textarea>
        </div>
        <div class="col-6 offset-sm-3 mb-3">
            <label for="category" class="form-label">Category</label>
            <?php
                include("category.php");
            ?>
        </div>
        <div class="col-6 offset-sm-3">
        <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
        </div>
    </form>
</div>