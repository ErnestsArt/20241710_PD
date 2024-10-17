<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jautā man!</h1>

    <form action="" method="post">
    <div>
        <label for="name">ievadi savu vārdu: </label>
        <input type="name" name="name" id="name" required>
    </div>

    <div>
        <label for="email">ievadi savu email: </label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="messaget">izvēlies ziņas veidu:</label>

        <select name="message" id="message-select">
            <option value="">--Please choose an option--</option>
            <option value="Atsauksme">Atsauksme</option>
            <option value="Ieteikums">Ieteikums</option>
            <option value="Jautājums">Jautājums</option>
        </select>
    </div>

    <div>
        <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
        <input type="checkbox" name="yes" id="yes">
        <label for="yes">Piekrītu</label>
    </div>

    <div>
        <legend>Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</legend>
        <input type="checkbox" name="yes" id="yes">
        <label for="yes">Piekrītu</label>
    </div>

    <div>
    <input type="submit" value="Submitt" />
    </div>
    </form>

    <div>
        <p>Lapu Navigācija</p>
        <ul>
            <li><a href="index.php">Index lapa</a></li>
            <li><a href="portfolio.php">Portfolio lapa</a></li>
        </ul>
    </div>

</body>
</html>