<?php

include('inc/database.php');
$conn	= db();

if(isset($_GET['id_relatorio'])){

  $id_relatorio = $_GET['id_relatorio'];
 
  foreach($conn->query(" SELECT * FROM data WHERE id = $id_relatorio") as $row) {

    //$producer_title                 = $row['title'];

    $id_producer                    = $row['id_producer'];

    $race                           = $row['race'];
    $weight_birth                   = $row['weight_birth'];
    $weight_calfs                   = $row['weight_calfs'];

    $number_calfs                   = $row['number_calfs'];
    $age_calfs                      = $row['age_calfs'];
    $weight_wean                    = $row['weight_wean'];
    $wean_days                      = $row['wean_days'];
    $number_births                  = $row['number_births'];

    $producer_column1               = $row['producer_column1'];
    $producer_milk_kglt             = $row['producer_milk_kglt'];
    $producer_sucedaneo_kglt        = $row['producer_sucedaneo_kglt'];
    $producer_sucedaneo_kglt2       = $row['producer_sucedaneo_kglt2'];
    $producer_enrichment_kglt2      = $row['producer_enrichment_kglt2'];
    $producer_feed_column1          = $row['producer_feed_column1'];
    $producer_feed_kglt2            = $row['producer_feed_kglt2'];

    $nutrition_milk_diet            = $row['nutrition_milk_diet'];
    $nutrition_milk_kglt            = $row['nutrition_milk_kglt'];
    $nutrition_kalvolac_diet        = $row['nutrition_kalvolac_diet'];
    $nutrition_kalvolac_kglt        = $row['nutrition_kalvolac_kglt'];
    $nutrition_kalvolac_dilution    = $row['nutrition_kalvolac_dilution'];
    $nutrition_enrichment_kglt      = $row['nutrition_enrichment_kglt'];
    $nutrition_enrichment_kglt2     = $row['nutrition_enrichment_kglt2'];
    $nutrition_feed_kglt2           = $row['nutrition_feed_kglt2'];

    $nutrition_milk_diet            = $row['nutrition_milk_diet'];
    $nutrition_milk_kglt            = $row['nutrition_milk_kglt'];
    $nutrition_kalvolac_diet        = $row['nutrition_kalvolac_diet'];
    $nutrition_kalvolac_kglt        = $row['nutrition_kalvolac_kglt'];
    $nutrition_kalvolac_dilution    = $row['nutrition_kalvolac_dilution'];

    $protein                        = $row['protein'];
    $fat                            = $row['fat'];
    $lactose                        = $row['lactose'];
    $fiber                          = $row['fiber'];
    $mineral                        = $row['mineral'];

    $date = date('Y/m/d h:i:s', time());


  }


}else{

$id_producer                    = $_POST['producer'];

$race                           = $_POST['race'];
$weight_birth                   = $_POST['weight_birth'];
$weight_calfs                   = $_POST['weight_calfs'];

$number_calfs                   = $_POST['number_calfs'];
$age_calfs                      = $_POST['age_calfs'];
$weight_wean                    = $_POST['weight_wean'];
$wean_days                      = $_POST['wean_days'];
$number_births                  = $_POST['number_births'];

$producer_column1               = $_POST['producer_column1'];
$producer_milk_kglt             = $_POST['producer_milk_kglt'];
$producer_sucedaneo_kglt        = $_POST['producer_sucedaneo_kglt'];
$producer_sucedaneo_kglt2       = $_POST['producer_sucedaneo_kglt2'];
$producer_enrichment_kglt2      = $_POST['producer_enrichment_kglt2'];
$producer_feed_column1          = $_POST['producer_feed_column1'];
$producer_feed_kglt2            = $_POST['producer_feed_kglt2'];

$nutrition_milk_diet            = $_POST['nutrition_milk_diet'];
$nutrition_milk_kglt            = $_POST['nutrition_milk_kglt'];
$nutrition_kalvolac_diet        = $_POST['nutrition_kalvolac_diet'];
$nutrition_kalvolac_kglt        = $_POST['nutrition_kalvolac_kglt'];
$nutrition_kalvolac_dilution    = $_POST['nutrition_kalvolac_dilution'];
$nutrition_enrichment_kglt      = $_POST['nutrition_enrichment_kglt'];
$nutrition_enrichment_kglt2     = $_POST['nutrition_enrichment_kglt2'];
$nutrition_feed_kglt2           = $_POST['nutrition_feed_kglt2'];

$nutrition_milk_diet            = $_POST['nutrition_milk_diet'];
$nutrition_milk_kglt            = $_POST['nutrition_milk_kglt'];
$nutrition_kalvolac_diet        = $_POST['nutrition_kalvolac_diet'];
$nutrition_kalvolac_kglt        = $_POST['nutrition_kalvolac_kglt'];
$nutrition_kalvolac_dilution    = $_POST['nutrition_kalvolac_dilution'];

$protein                        = $_POST['protein'];
$fat                            = $_POST['fat'];
$lactose                        = $_POST['lactose'];
$fiber                          = $_POST['fiber'];
$mineral                        = $_POST['mineral'];

$date = date('Y/m/d h:i:s', time());
  
}



// EXCEL TREATMENT
// Docs https://phpspreadsheet.readthedocs.io/en/latest/topics/accessing-cells/#looping-through-cells
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
$spreadsheet = $reader->load('base.xlsx');
$sheet = $spreadsheet->getActiveSheet();

// Update Cell Values
$sheet->setCellValue('D15', $race);
$sheet->setCellValue('D17', $weight_birth);
$sheet->setCellValue('D18', $weight_calfs);

$sheet->setCellValue('I11', $producer_milk_kglt);
$sheet->setCellValue('J11', $producer_column1);
$sheet->setCellValue('I12', $producer_sucedaneo_kglt);
$sheet->setCellValue('K12', $producer_sucedaneo_kglt2);
$sheet->setCellValue('I13', $producer_enrichment_kglt2);
$sheet->setCellValue('J13', '1');
$sheet->setCellValue('I14', '2');
$sheet->setCellValue('J14', $producer_feed_column1);

$sheet->setCellValue('I19', $nutrition_milk_kglt);
$sheet->setCellValue('J19', $nutrition_milk_diet);
$sheet->setCellValue('I20', $nutrition_kalvolac_dilution);
$sheet->setCellValue('J20', $nutrition_kalvolac_kglt);
$sheet->setCellValue('K20', $nutrition_kalvolac_diet);
$sheet->setCellValue('I21', $nutrition_enrichment_kglt2);
$sheet->setCellValue('J21', $nutrition_enrichment_kglt);
$sheet->setCellValue('I22', $nutrition_feed_kglt2);


$datename = date('Y_m_d__h_i_s');
$filename = $datename."__".$id_producer.".xlsx";
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save('results/'.$filename);

//Load saved sheet
$spreadsheet2 = $reader->load('results/'.$filename);

//Get Cell Formula
//$cellValue = $spreadsheet2->getActiveSheet()->getCell('B8')->getValue();

//Get Cell Value
//$cellValue = $spreadsheet2->getActiveSheet()->getCell('B8')->getCalculatedValue();

//VALUES FOR CHART BUILDING (FROM THE SAVED EXCEL SHEET)
$producer_em    = $spreadsheet2->getActiveSheet()->getCell('B114')->getCalculatedValue();
$producer_pm    = $spreadsheet2->getActiveSheet()->getCell('B113')->getCalculatedValue();
$producer_goal  = $spreadsheet2->getActiveSheet()->getCell('B112')->getCalculatedValue();

$agrifirm_em    = $spreadsheet2->getActiveSheet()->getCell('C114')->getCalculatedValue();
$agrifirm_pm    = $spreadsheet2->getActiveSheet()->getCell('C113')->getCalculatedValue();
$agrifirm_goal  = $spreadsheet2->getActiveSheet()->getCell('C112')->getCalculatedValue();

$kcalkg           = $spreadsheet2->getActiveSheet()->getCell('M15')->getCalculatedValue();
$producer_solids  = $spreadsheet2->getActiveSheet()->getCell('H15')->getCalculatedValue();
$nutrition_solids = $spreadsheet2->getActiveSheet()->getCell('H23')->getCalculatedValue();


//UPDATE DATA TABLE
//include('inc/database.php');
//$conn	= db();
$query	= $conn->prepare("INSERT INTO data (id_producer, race, number_calfs, weight_birth, weight_calfs, age_calfs, weight_wean, wean_days, number_births, producer_column1, producer_milk_kglt, producer_sucedaneo_kglt, producer_sucedaneo_kglt2, producer_enrichment_kglt2, producer_feed_column1, producer_feed_kglt2, nutrition_milk_diet, nutrition_milk_kglt, nutrition_kalvolac_diet, nutrition_kalvolac_kglt, nutrition_kalvolac_dilution, nutrition_enrichment_kglt, nutrition_enrichment_kglt2, nutrition_feed_kglt2, protein, fat, lactose, fiber,  mineral, kcalkg, producer_solids, nutrition_solids, filename, date) VALUES ('$id_producer', '$race', '$number_calfs', '$weight_birth', '$weight_calfs', '$age_calfs', '$weight_wean', '$wean_days', '$number_births', '$producer_column1', '$producer_milk_kglt', '$producer_sucedaneo_kglt', '$producer_sucedaneo_kglt2', '$producer_enrichment_kglt2', '$producer_feed_column1', '$producer_feed_kglt2', '$nutrition_milk_diet', '$nutrition_milk_kglt', '$nutrition_kalvolac_diet', '$nutrition_kalvolac_kglt', '$nutrition_kalvolac_dilution', '$nutrition_enrichment_kglt', '$nutrition_enrichment_kglt2', '$nutrition_feed_kglt2', '$protein', '$fat', '$lactose', '$fiber',  '$mineral', '$kcalkg', '$producer_solids', '$nutrition_solids', '$filename', '$date') ");
$query->execute();

sleep(1);

$sql = "SELECT MAX(id) FROM data";
$query	= $conn->prepare($sql);
$query->execute();
$id_data = $query->fetchColumn();

foreach($conn->query(" SELECT * FROM producer WHERE id = $id_producer") as $row) {
  $producer_title         = $row['title'];
  $producer_farm          = $row['farm'];
  $producer_city          = $row['city'];
  $producer_state         = $row['state'];
  $producer_phone         = $row['phone'];
  $producer_email         = $row['email'];
  $producer_farm_tec      = $row['farm_tec'];
  $producer_agrifirm_tec  = $row['agrifirm_tec'];
}

$sql = "SELECT value FROM race WHERE id = $race";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_race = $query->fetchColumn();

$sql = "SELECT value FROM milk WHERE id = $producer_column1";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_column1 = $query->fetchColumn();

$sql = "SELECT value FROM kglt WHERE id = $producer_milk_kglt";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_milk_kglt = $query->fetchColumn();

$sql = "SELECT value FROM kglt WHERE id = $producer_sucedaneo_kglt";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_sucedaneo_kglt = $query->fetchColumn();

$sql = "SELECT value FROM dilution WHERE id = $producer_sucedaneo_kglt2";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_sucedaneo_kglt2 = $query->fetchColumn();

$sql = "SELECT value FROM enrichment WHERE id = $producer_enrichment_kglt2";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_enrichment_kglt2 = $query->fetchColumn();

$sql = "SELECT value FROM feed WHERE id = $producer_feed_column1";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_feed_column1 = $query->fetchColumn();

$sql = "SELECT value FROM kglt2 WHERE id = $producer_feed_kglt2";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_producer_feed_kglt2 = $query->fetchColumn();

$sql = "SELECT value FROM milk WHERE id = $nutrition_milk_diet";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_milk_diet = $query->fetchColumn();

$sql = "SELECT value FROM kglt WHERE id = $nutrition_milk_kglt";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_milk_kglt = $query->fetchColumn();

$sql = "SELECT value FROM diet WHERE id = $nutrition_kalvolac_diet";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_kalvolac_diet = $query->fetchColumn();

$sql = "SELECT value FROM kglt WHERE id = $nutrition_kalvolac_kglt";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_kalvolac_kglt = $query->fetchColumn();

$sql = "SELECT value FROM dilution WHERE id = $nutrition_kalvolac_dilution";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_kalvolac_dilution = $query->fetchColumn();

$sql = "SELECT value FROM diet2 WHERE id = $nutrition_enrichment_kglt";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_enrichment_kglt = $query->fetchColumn();


$sql = "SELECT value FROM enrichment WHERE id = $nutrition_enrichment_kglt2";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_enrichment_kglt2 = $query->fetchColumn();

$sql = "SELECT value FROM kglt2 WHERE id = $nutrition_feed_kglt2";
$query	= $conn->prepare($sql);
$query->execute();
$fetch_nutrition_feed_kglt2 = $query->fetchColumn();

/*
// ALL DATA VARIABLES
echo "
$fetch_producer_column1 <br>
$fetch_producer_milk_kglt <br>
$fetch_producer_sucedaneo_kglt <br>
$fetch_producer_sucedaneo_kglt2 <br>
$fetch_producer_enrichment_kglt2 <br>
$fetch_producer_feed_column1 <br>
$fetch_producer_feed_kglt2 <br>
$fetch_nutrition_milk_diet <br>
$fetch_nutrition_milk_kglt <br>
$fetch_nutrition_kalvolac_diet <br>
$fetch_nutrition_kalvolac_kglt <br>
$fetch_nutrition_kalvolac_dilution <br>
$fetch_nutrition_enrichment_kglt <br>
$fetch_nutrition_enrichment_kglt2 <br>
$fetch_nutrition_feed_kglt2 <br>
";
*/

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include('inc/head.php'); ?>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart', 'bar']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawproducerChart);
      google.charts.setOnLoadCallback(drawAgrifirmChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawproducerChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
           ['Element', 'GPD', { role: 'style' }],
           ['EM', <?=$producer_em?>, 'silver'],            // RGB value
           ['PM', <?=$producer_pm?>, 'yellow'],
           ['goal', <?=$producer_goal?>, 'green' ], // CSS-style declaration
        ]);

        // Set chart options
        var options = {'title':'Produtor',
                       'legend': { position: 'none', maxLines: 3 },
                       'width':'100%',
                       'height':300,
                        'max': 1000
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('producer_chart'));
        chart.draw(data, options);
      }

      function drawAgrifirmChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
           ['Element', 'GPD', { role: 'style' }],
           ['EM', <?=$agrifirm_em?>, 'silver'],            // RGB value
           ['PM', <?=$agrifirm_pm?>, 'yellow'],
           ['goal', <?=$agrifirm_goal?>, 'green' ], // CSS-style declaration
        ]);

        // Set chart options
        var options = {'title':'Agrifirm',
                       'legend': { position: 'none', maxLines: 3 },
                       'width':'100%',
                       'height':300,
                       'max': 1000
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('agrifirm_chart'));
        chart.draw(data, options);
      }

    </script>
  </head>

<body>

  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-12">
        <p>
          <h2 class="mt-3"><?=$producer_title?></h2>
          <strong>Fazenda:</strong> <?=$producer_farm?><br>
          <strong>Cidade:</strong> <?=$producer_city?>/<?=$producer_state?><br>
          <strong>Telefone:</strong> <?=$producer_phone?><br>
          <strong>E-mail:</strong> <?=$producer_email?><br>
          <strong>Técnico Fazenda:</strong> <?=$producer_farm_tec?><br>
          <strong>Técnico Agrifirm:</strong> <?=$producer_agrifirm_tec?><br>
        </p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12">
        <h2>Produtor</h2>
        <table>
          <tr>
            <th>Coluna 1</th>
            <th>Kg/Lt</th>
            <th>Kg/Lt2</th>
            <th>R$/Kg/Lt</th>
          </tr>
          <tr>
            <td><?=$fetch_producer_column1?></td>
            <td><?=$fetch_producer_milk_kglt?></td>
            <td></td>
            <td>2,8</td>
          </tr>
          <tr>
            <td>Sucedâneo</td>
            <td><?=$fetch_producer_sucedaneo_kglt?></td>
            <td><?=$fetch_producer_sucedaneo_kglt2?></td>
            <td>22</td>
          </tr>
          <tr>
            <td>Enriquecimento</td>
            <td>Marca</td>
            <td><?=$fetch_producer_enrichment_kglt2?></td>
            <td>16</td>
          </tr>
          <tr>
            <td><?=$fetch_producer_feed_column1?></td>
            <td></td>
            <td><?=$fetch_producer_feed_kglt2?></td>
            <td>2,5</td>
          </tr>
          <tr class="table-result">
            <td>Sólidos no leite/sucedâneo</td>
            <td><?=round($producer_solids,2)?></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>


    <div class="row justify-content-center mt-5">
      <div class="col-12">
        <h2>Nutrição Agrifirm</h2>
        <table>
          <tr>
            <th>Dieta Atual</th>
            <th>Kg/Lt</th>
            <th></th>
            <th>R$/Kg/Lt</th>
          </tr>
          <tr>
            <td><?=$fetch_nutrition_milk_diet?></td>
            <td><?=$fetch_nutrition_milk_kglt?></td>
            <td></td>
            <td>2,8</td>
          </tr>
          <tr>
            <td><?=$fetch_nutrition_kalvolac_diet?></td>
            <td><?=$fetch_nutrition_kalvolac_kglt?></td>
            <td><?=$fetch_nutrition_kalvolac_dilution?></td>
            <td>22</td>
          </tr>
          <tr>
            <td>Enriquecimento</td>
            <td><?=$fetch_nutrition_enrichment_kglt?></td>
            <td><?=$fetch_nutrition_enrichment_kglt2?></td>
            <td>16</td>
          </tr>
          <tr>
            <td>Ração Pré Inicial Agrifirm</td>
            <td></td>
            <td><?=$fetch_nutrition_feed_kglt2?></td>
            <td>2,5</td>
          </tr>
          <tr class="table-result">
            <td>Sólidos no leite/sucedâneo</td>
            <td><?=round($nutrition_solids,2)?></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>


    <div id="producer_chart"></div>
    <div id="agrifirm_chart"></div>

  </div>

</body>

</html>
