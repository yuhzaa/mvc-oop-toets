<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>
    <a href="<?= URLROOT; ?>/country/index">Landen</a>

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam</th>
        </thead>
        <tbody>
    	    <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['name']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>