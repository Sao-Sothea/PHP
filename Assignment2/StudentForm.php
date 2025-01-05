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
    <div class="col-5 p-3 mx-auto bg-secondary">
        <form action="student.php" method="POST" >
            <label for="id-field">ID: </label>
            <input type="text" name="txt-id" id="id-field" class="form-control" placeholder="Enter ID">

            <label for="name-field">Name: </label>
            <input type="text" name="txt-name" id="name-field" class="form-control" placeholder="Enter Name">

            <label for="gender-field">Gender: </label>
            <select name="txt-gender" id="gender-field" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="score1-field">Score1: </label>
            <input type="text" name="txt-score1" id="score1-field" class="form-control" placeholder="Enter Score1">
            <label for="score2-field" >Score2: </label>
            <input type="text" name="txt-score2" id="score2-field" class="form-control" placeholder="Enter Score2">
            <label for="score3-field">Score3: </label>
            <input type="text" name="txt-score3" id="score3-field" class="form-control" placeholder="Enter Score3">

            <button class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>