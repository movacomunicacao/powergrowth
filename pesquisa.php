<?php include('inc/head.php'); 
?>
<body class="bg-light consulta cadastro">

    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-10 col-lg-10 py-auto">
    <h1>Relatórios</h1>
        <?php 
        include('inc/database.php');
        //include('consulta.php');


        $conn = db();

        $producer_id = $_POST['producer_id'];

        echo'<pre>';
        foreach($conn->query(" SELECT * FROM data WHERE id_producer = $producer_id ") as $row) {
            $title = $row['title'];
            $id_producer = $row['id'];

            echo (' <td value="'.$id_producer.'">'.$title.'</td>');
        }

        ?>


</div>
      </div>
        </div>

    
    
</body>

</html>