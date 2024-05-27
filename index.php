<?php 
require_once 'funcions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      </div>
    </div>
  </header>
<body>
    <div class = "container mt-5">
        <form id = "feadback" method="post" onsubmit = "return false" >
            <input required   class="form-control"  type="name" name='name' placeholder = "имя" ><br>
            <input required   class="form-control" type="name" name='last_name' placeholder = 'фамилия' ><br>
            <input required   class="form-control"  type="name" name='father_name' placeholder = 'отчество' ><br>
            <input required   class="form-control" type="tel" name='tel' placeholder = 'номер' ><br>
            <input required   class="form-control" type="email" name='email' placeholder = 'email' ><br>
            <input required   class="form-control" list = 'manajer-list'name='maneger' type="int" placeholder = 'выберите менеджера' ><br>
            <datalist id="manajer-list">
                <?php
                foreach($manager_ql as $line){
                ?>
                <option value="<?= $line["id"]?>"><?= $line["name"] ?></option>
                <?php 
                }
                ?>
            </datalist>
            <input required  id="password-input" class="form-control" type="password" name= 'password' placeholder = 'пароль'><br>
            <input required  id="password-input" class="form-control" type="password" name= 'comfirm_password'  placeholder  = 'подтвердть пароль'><br>
            <label><input required name = "check" type="checkbox" class="password-checkbox">соглавасие на получение информационных рассылок </label><br>
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                    <input type="file" name = "passport" />
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary text-danger">удалть</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary text-success">скачать</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                    <input type="file" name = "propiska">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary text-danger">удалть</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary text-success">скачать</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col">
                <div class="card shadow-sm">
                <input type="file" name = "dogovor">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary text-danger">удалть</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary text-success">скачать</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
            <input required  class= 'text-success mt-3' type="submit">
        </form>
        <script>

        $("document").ready( function() {

            $("#feadback").on("submit",function() {

                let dataForm = $(this).serialize() 

                $.ajax({
                    url : "/create.php",
                    method : "post",
                    dataType : "html",
                    data : dataForm
                })
                document.querySelector('form').reset()

            })

        })
        </script>
    <div\>
</body>
<footer class="text-body-secondary py-5">
    <div class="container">
    </div>
</footer>
</html>