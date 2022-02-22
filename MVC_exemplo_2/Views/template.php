<!-- Este é o template utilizado por todo o site, tendo o cabeçalho e rodapé -->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="formatação/estilo.css">
    </head>
    <body>
        <!-----------CABEÇALHO----------->
        <!---------------------->

        <?php

        $this->carregarViewNoTemplate($nomeView,$dadosModel);
        
        ?>
        <!---------------------->
        <!-----------RODAPÉ----------->
    </body>
</html>
