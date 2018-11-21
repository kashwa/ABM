<?php

    require_once 'dbconnection.php';

    // Get all users data.
    $selectQuery = $db->prepare("SELECT * FROM abms");
    $selectQuery->execute();
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>ABM Task</title>
    </head>
    <body>
    <div class="row">
        <div class="col">
            <div class="container">
                <?php if(!empty($selectQuery)){ ?>
                    <table id="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($selectQuery as $user) { ?>
                            <tr>
                                <td><?php echo $user['id']; ?>&nbsp;&nbsp;</td>
                                <td><?php echo $user['name'] ?>&nbsp; &nbsp;</td>
                                <td><?php echo $user['age'] ?>&nbsp;</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>

        <div class="col">
            <!-- here add button and display form -->
            <button id="btn"  style="margin: 35px 5px;" class="btn btn-primary">Form</button>
            <br>
            <form action="send.php" class="module">
                <label for="name">Name</label>
                <input type="text" autocomplete="off" class="form-control" id="name" placeholder="Enter name" name="name" required>
                <br>
                <label for="mobile_no">age</label>
                <input type="text" autocomplete="off" class="form-control" id="age" name="age" placeholder="Age" required>
                <br>
                <input type="submit" value="insert" class="submit">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
    </body>
</html>
