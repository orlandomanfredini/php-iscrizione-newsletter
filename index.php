<!-- Creare una pagina html con il form di iscrizione ad una newsletter.
La pagina deve contenere un form con un input di tipo email
 e un bottone di invio.
I form invierà i dati alla stessa pagina index.php con metodo POST.
Nel momento in cui il form viene inviato recuperiamo la mail dell’utente
 e usando una funzione controlliamo che sia formattata bene con queste logiche:
la mail deve contenere la @
la mail deve contenere un punto .
Se la mail è corretta allora stampare nella pagina un messaggio si success
 usando il componente alert di Bootstrap
altrimenti stampate un messaggio di error sempre con un componente alert di Bootstrap.
Inizialmente mettere tutto il codice nel file index.php, poi quando funziona tutto. 
spostate la funzione in un file utilities.php ed includetelo
 nel file inde.php come visto in classe. -->

 <?php
 $email = $_POST['email'] ?? '';

// $email = $_POST['email'] ? $_POST['email'] : ''



// if(array_key_exists('email', $_POST)){
//     $email = $_POST['email'];
// }



 include __DIR__ . '/utilities.php';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FORM NEWSLETTER</title>
 </head>
 <body>
    <div class="container text-center mt-5">
        <h1 class="text-primary" >NEWSLETTER</h1>
      <form action="" method="POST" class="d-flex justify-content-center">
      
        <input class="align-self-center" type="text" name="email" id="email" placeholder="Inserisci email...">
        <button class="btn btn-primary px-2 py-0 mx-1">INVIA</button>
      </form>
     <?php if (checkEmail($email)){ ?>
        <div class="alert alert-success mt-3 " role="alert">
           CORRECT MAIL
        </div>
     <?php } else { ?>
        <div class="alert alert-danger mt-3 " role="alert">
           REPEAT
        </div>
     <?php } ?>
    </div>
    
</body>
</html>