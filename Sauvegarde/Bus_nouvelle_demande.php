</head>

  <body>
    <h1>NOUVELLE DEMANDE ANNEE SCOLAIRE 2014-2015</h1>
      <br>
      <p>Merci de saisir le nom, le prénom et la date de naissance de votre enfant : </p>

  <form method="post" action="traitement.php">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="Ex : Nom" size="30" maxlength="10" value="<?php echo $name;?>"/>
    </p>
    <p>
        <label for="prénom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="Ex : Prénom" size="30" maxlength="10" />
  </p>
  <p>
        <label for="naissance">Date de naissance :</label>
        <input type="date" name="naissance" id="naissance" size="30" maxlength="10" />
  </p>
<input type="submit" value="Valider">
<button type="submit" class="btn btn-default">Submit</button>
</form>




  </body>
</html>