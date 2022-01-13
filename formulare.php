<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first register application</title>
    <link rel="stylesheet" href="formulare.css">
</head>

<body>
    <?php
    if(!empty($_POST)){
        var_dump($_POST);
    }
    ?>
    <form  action="formulare.php" method="post">

        
            <p> NAME <input type="text" name="name"/></p>
        

            <p> FIRSTNAME <input type="text" firstname="firstname"/></p>

            <p> EMAIL ADRESSE <input type="text" email adresse="email adresse"/></p>

            <p> PASSWORD <input type="text" password="password"
        

        <div>
        <label for="birthdate">Date de naissance</label>
        <input type="date" id="birthdate"
        name="birthdate"  value="aaaa-mm-jj"
        " >
        </div>

        <div>
        <input type="radio" id="Choice1"
        name="gender" value="Homme">
        <label for="Choice1">Homme</label>

        <input type="radio" id="Choice2"
        name="gender" value="Femme">
        <label for="Choice2">Femme</label>
        </div>

        <div>
        <label for="nationality">Nationnalitée </label>
        <select name="nationality">
        <option value="">-- select one --</option>
        <option value="">French</option>
        <option value="Eu country">Europienne</option>
        <option value="NON EU country">Else </option>  
        </div>

       

        <div>
        <label for="msg">Commentaires </label>
        <textarea id="msg" name="user_message" rows="6" cols="60"></textarea>
        </div>


        <div class="button">
        <button type="submit">S'enregistrer</button>
        </div>

        <div class="button">
        <button type="reset">reset</button>
        </div>
    </form>

    
</body>
</html>