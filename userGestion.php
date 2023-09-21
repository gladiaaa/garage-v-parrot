<?php
require('config.php');
?>
<html>
    <head>
    </head>
    <body>
<section>
        <div class="sucess">   
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">Add user</a> | 
    <a href="#">Update user</a> | 
    <a href="#">Delete user</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>
      </section>
      
      <h1>Modifier un élément de la page web</h1>
    <form method="post" action="modifier_element.php">
        <label for="nouvel_element">Nouvel élément :</label>
        <textarea name="nouvel_element" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Modifier">
    </form>
    <label for="cars">Choose a car:</label>
    </body>

    <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>


</select>
</html>