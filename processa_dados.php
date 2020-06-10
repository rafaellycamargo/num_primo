<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Processa Dados</title>

</head>
<body>
    <?php
        $num = $_POST["num"];
        $divisor = 0;

        for ($i = 2 ; $i < $num ; $i++) {
            if ($num % $i == 0) {
                $divisor++;
            }
        }

        if ($divisor > 0) {
            echo "Não é primo";
        }
        else {
            echo "É primo";
        }
    ?>
</body>
</html>