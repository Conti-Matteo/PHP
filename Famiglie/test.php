<?php 
    $Famiglie=file_get_contents("Famiglie.json");
    $db = json_decode($Famiglie);
    //var_dump($db);
    $n=$_GET["n"];
    $PrimaPersona = $db[$n];
    //var_dump($PrimaPersona);
    $campi["id_famiglia"]="Codice famiglia ";
    $campi["id_compo"]="Componente numero ";
    $campi["tipo"]="Ruolo nella famiglia ";
    $campi["cognome"]="Cognome ";
    $campi["nome"]="Nome ";
    $campi["sesso"]="Sesso ";
    $campi["nas_luogo"]="Luogo di nascita ";
    $campi["nas_regione"]="Regione di nascita ";
    $campi["nas_prov"]="Provincia di nascita ";
    $campi["nas_cap"]="CAP del comune di nascita";
    $campi["nas_belf"]="Codice Catastale del comune";
    $campi["nas_pre"]="Prefisso telefonico ";
    $campi["data_nascita"]="Data di nascita ";
    $campi["cod_fis"]="Codice fiscale";
    $campi["res_luogo"]="Luogo di residenza ";
    $campi["res_regione"]="Regione di residenza ";
    $campi["res_prov"]="Provincia di residenza ";
    $campi["res_cap"]="Cap del paese di residenza ";
    $campi["indirizzo"]="Indirizzo ";
    $campi["telefono"]="Numero di telefono ";
    $campi["email"]="E-mail ";
    $campi["pwd_email"]="Password ";
    $campi["tit_studio"]="Titolo di studio ";
    $campi["professione"]="Professione ";
    $campi["sta_civ"]="Stato civile ";
    $campi["targa"]="Targa dell'auto ";
    $campi["part_iva"]="Partita IVA ";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Gestione Famiglie</title>
  </head>
  <body>
    <div class="container">
        <h1 class="alert alert-info">Gestionale Famiglie</h1>

        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=<?php if ($PrimaPersona->sesso == "F") echo "img/Female.jpeg"; else echo "img/male.jpeg"; ?> alt="Card image cap">
                <div class="Card-body">
                    <h5 class="card-title"><?php echo $PrimaPersona->cognome."  ".$PrimaPersona->nome;?> </h5>
                    <p class="card-text">
                        <?php 
                        //per ogni propietà dell'oggetto a differenza di cognome e nome
                        foreach($PrimaPersona as $campo => $valore)
                        {
                        echo $campo;
                        echo "  ";
                        echo $valore;
                        echo "<br>";
                        }
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>