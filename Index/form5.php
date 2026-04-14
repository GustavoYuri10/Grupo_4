   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

   </head>
   <body>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
       <form action="a5.php" method="post">
       <?php Include ("header.php")?>
        <pre>
            <label for="">Numero</label>
            <input type="number" name="VALOR1" id=""><br>
             <input type="submit" value="Enviar" class="btn btn-primary"> 

             <input type="reset" value="Limpar" class="btn btn-secondary">
              </pre>
             <?php include ("footer.php") ?>
   </body>
   </html>
