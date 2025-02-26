<div class="container">
    <h1 class="heading mt-3">Signup</h1>
    <form action="./server/requests.php" method="post">
        <div class="col-6 offset-sm-3 mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username"  class="form-control" id="username" placeholder="Enter your name">
        </div>
        <div class="col-6 offset-sm-3 mb-3">
            <label for="email" class="form-label">User Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="col-6 offset-sm-3 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
        </div>
        <div class="col-6 offset-sm-3 mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
        </div>
        <div class="col-6 offset-sm-3">
        <button type="submit" name="signup" class="btn btn-primary">Signup</button>
        </div>
    </form>
</div>