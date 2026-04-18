<!DOCTYPE html>
<html lang="fr">
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une ville</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="admin-container">

    <div class="admin-header">
        <h1 class="jaune">Ajouter une <span>Ville</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>
    </div>
        <div class="actions-bar">
        <a href="table1_gestion.php" class="btn-retour">← Retour au tableau de bord</a>
    </div>
     <div class="form-wrap">
<form method="POST" enctype="multipart/form-data" action="table1_new_valide.php">
      <div class="form-field">
   nom de la ville:<input type="text" name="name"><br>
     </div>
    <div class="form-field">
    pays de la ville:<input type="text" name="pays"><br>
      </div>
     <div class="form-field">
    population de la ville:<input type="number" name="population"><br>
      </div>
     <div class="form-field">
    superficie de la ville:<input type="number" step="0.01" name="superficie"><br>
      </div>
     <div class="form-field">
    date de fondation de la ville:<input type="text" name="date"><br>
      </div>
     <div class="form-field">
    ville photos:<input type="file" accept="image/*" name="photos" required><br>
      </div>
     <div class="form-field">
    langue de la ville:<input type="texte" name="langue"><br>
     </div>
     <button type="submit" class="btn-ajouter">Ajouter la ville</button>
</form>

 </div>
</tbody>
</table>
</body>
</html>