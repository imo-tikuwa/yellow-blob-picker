<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>noto-emoji-yellow-blobs demo_iconpicker</title>
    <link rel="shortcut icon" href="data:png;base64,">
    <meta name="description" content="An Icon Font Generated By IcoMoon.io">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="demo-files/demo.css">
    <link rel="stylesheet" href="css/jquery.yellow-blob-picker.css">
</head>
<body>
    <div class="clearfix mhl mtl pt1">
        <form method="POST" action="./demo_iconpicker.php">
            <input type="text" id="icon-picker" name="picker1" value="<?= htmlspecialchars($_POST['picker1'])?>" />
            <button type="submit" class="btn">POST</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.yellow-blob-picker.js"></script>
    <script type="text/javascript">
        $(() => {
            let picker = $('#icon-picker').yellowBlobPicker({
                iconsPerPage: 30,
            });
            console.log(picker);
        });
    </script>
</body>
</html>
