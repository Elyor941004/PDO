<?php
    include 'PdoRequest.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cut Link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    
</head>
<body>
    <!-- <script>
        window.location.href = '<?=$_GET['cut_link'];?>'
    </script> -->
    <div class="container text-center">
        <div class="row" style="margin-top: 20%;">
            <a href="/">
                <h1>Cut Link</h1>
            </a>
        </div>
        <div class="row">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="cut_link" id="cut_link" value="<?=$_GET['cut_link']?>" class="form-control" placeholder="Вставьте ссылку" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary"  type="submit" id="button-addon2">Выполнить</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="jquery.3.6.0.js"></script>
<script>
        $(document).ready(function(){
          $("#button-addon2").click(function(){
            var cut_link = document.getElementById('cut_link').value;
            if (cut_link.length == 0) {
                alert("Warning! You haven\'nt filled the input");
            }
          });
        });
</script>
<style>
        a{
            text-decoration: none;
            color: black
        }
      
    </style>