<?php
require_once 'config.php';
require_once 'server.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div class="col-4 h-100 offset-1 border">
        <h2>Create new post:</h2>
        <form enctype="multipart/form-data" method="POST" action="">
            <div class="form-group">
                <label for="imagefile">Choose a picture!</label>
                <input type="file" class="form-control-file" name="imagefile" id="imagefile" required>
            </div>
            <div class="form-group">
                <label for="inputName">Name:</label>
                <input type="text" class="form-control" name="name" id="inputName" required>
            </div>
            <div class="form-group">
                <label for="inputComment">Comment:</label>
                <textarea class="form-control" name="comment" id="inputComment" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="inputCategory">Comment:</label>
                <select class="form-control" name="category" id="inputCategory">
                    <option value="car">Car</option>
                    <option value="phone">Phone</option>
                    <option value="toy">Toy</option>
                    <option value="furniture">Furniture</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="uploadPost">Upload</button>
            </div>
        </form>
    </div>
</body>

</html>
