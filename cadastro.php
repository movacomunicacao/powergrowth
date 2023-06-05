
<?php 

include('inc/head.php'); 
include('inc/database.php');


if(isset($_GET['action'])){
    $action = $_GET['action'];

    if($action == 'yes'){

        $title = $_POST['title'];
        $farm = $_POST['farm'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $farm_tec = $_POST['farm_tec'];
        $agrifirm_tec = $_POST['agrifirm_tec'];


        $conn	= db();
        $query	= $conn->prepare(" INSERT INTO producer (title, farm, city, state , phone, email, farm_tec, agrifirm_tec) VALUES ('$title', '$farm', '$city', '$state', '$phone', '$email', '$farm_tec', '$agrifirm_tec' );
        ");
        $query->execute();

        
        echo("Enviado com sucesso.");
    }else{
        echo("Erro!");

    }

}



?>

<body class="bg-light cadastro">

    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-10 col-lg-6 py-auto">

        <H1>Cadastro de Produtor</H1>

        <form action="cadastro.php?action=yes" method="post"  enctype="multipart/form-data">

        <label>Nome:</label><br>
        <input type="text" name="title" value="" id="title" style=" width: 70%;"><br>

        <label>Fazenda:</label><br>
        <input type="text" name="farm" value="" id="farm" style=" width: 70%;"><br>

        <label>Cidade:</label><br>
        <input type="text" name="city" value="" id="city" style=" width: 30%;"><br>

        <label>Estado:</label><br>
        <input type="text" name="state" value="" id="state"  style=" width: 30%;"><br>

        <label>Celular:</label><br>
        <input type="text" name="phone" value="" id="phone" placeholder=" (**) *****-****" style=" width: 30%;"><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="" id="email" placeholder=" nome@email.com" style=" width: 30%;"><br>

        <label>Técnico da Fazenda:</label><br>
        <input type="text" name="farm_tec" value="" id="farm_tec" style=" width: 70%;"><br>

        <label>Técnico da Agrifirm Responsável:</label><br>
        <input type="text" name="agrifirm_tec" value="" id="agrifirm_tec" style=" width: 70%;"><br>

        <input type="submit" value="Enviar" id="submit" style=" width: 30%; margin-top:20px" />

        </form>
        

        </div>
      </div>
    </div>

 
</body>

</html>