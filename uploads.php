<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <input for="image">Cat pictures! </label>
    <input type="file" name="image">
    </form>

    <form action="upload.php" method="post" enctype="multipart/form-data">
   <fieldset>
     
        <legend>Select a maintenance drone</legend>

        <div>
            <input type="radio" id="huey" 
                   name="drone" value="huey" checked />
            <label for="huey">Huey</label>
        </div>

        <div>
            <input type="radio" id="dewey" 
                   name="drone" value="dewey" />
            <label for="dewey">Dewey</label>
        </div>

        <div>
            <input type="radio" id="louie" 
                   name="drone" value="louie" />
            <label for="louie">Louie</label>
        </div>

    </fieldset>
  
</form>




</body>
</html>