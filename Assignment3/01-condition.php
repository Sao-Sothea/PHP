<?php
    
   // isset() use for check is varibale or not
   // unset() use for unset varibale
    // echo isset($_POST['txt-a']); //check if  $_POST['txt-a'] have or not
    // if(isset($_POST['txt-a'])){
    //     $a = $_POST['txt-a'];
    //     $b = $_POST['txt-b'];

    //     echo "<h1>A= $a</h1>";
    //     echo "<h1>B= $b</h1>";
    // }

    // if(isset($_POST['btn-submit'])){
    //          $a = $_POST['txt-a'];
    //          $b = $_POST['txt-b'];
    
    //        echo "<h1>A= $a</h1>";
    //         echo "<h1>B= $b</h1>";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
    <div class="col-4 mx-auto border-2">
        <form action="" method="POST">
            <label for="">Number a</label>
            <input type="text" placeholder="Value a" name="txt-a" class="form-control my-2">
            <label for="">Number b</label>
            <input type="text" placeholder="Value b" name="txt-b" class="form-control my-2">
            <button name="btn-submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <div class="col-6 mx-auto">
        <table class="table table-hover table-dark">
            <tr>
                <th>Number a</th>
                <th>Number b</th>
                <th>Maximum number</th>
            </tr>
           <?php
                if(isset($_POST['btn-submit'])){
                    $a = $_POST['txt-a'];
                    $b = $_POST['txt-b'];
                    $max_txt='';
                    if($a>$b){
                        $max_txt='A is bigger than B';
                    }
                    elseif($a==$b){
                        $max_txt="A is equal B";
                    }
                    else{
                        $max_txt="B is bigger than A";
                    }
                }
            echo '
                <tr>
                    <td>'.$a.'</td>
                    <td>'.$b.'</td>
                    <td>'.$max_txt.'</td>
                </tr>
            ';
           ?>
        </table>
    </div>
</body>
</html>