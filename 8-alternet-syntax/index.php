<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid #000;
            border-collapse: collapse;
        }
        tr, td{
             border: 1px solid #000;
        }
    </style>
</head>
<body>
    <table >
        <?php for($i = 1; $i <= 10 ; $i++): ?>
        <tr>
             <?php for($j = 1; $j <= 10 ; $j++): ?>
                <td><?php echo $i*$j ?></td>
             <?php endfor; ?>
           
        </tr>
        <?php endfor; ?>
    </table>

    <!-- create dynamically list or menu -->



    <?php 
        $fruits = ["Apple", "Banana", "Orange", "Kuwi", "Pomegrante"]; ?>

        <ul>
           <?php  foreach($fruits as $fruit): ?>
            <li><?php echo $fruit ?></li>
            <?php endforeach ; ?>
        </ul>
   
</body>
</html>