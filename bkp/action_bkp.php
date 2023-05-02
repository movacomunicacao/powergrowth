<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
$raca                           = $_POST['raca'];
$peso_nasc                      = $_POST['peso_nasc'];
$peso_bezerras                  = $_POST['peso_bezerras'];

$produtor_coluna1               = $_POST['produtor_coluna1'];
$produtor_leite_kglt            = $_POST['produtor_leite_kglt'];
$produtor_sucedaneo_kglt        = $_POST['produtor_sucedaneo_kglt'];
$produtor_sucedaneo_kglt2       = $_POST['produtor_sucedaneo_kglt2'];
$produtor_enriquecimento_kglt2  = $_POST['produtor_enriquecimento_kglt2'];
$produtor_racao_coluna1         = $_POST['produtor_racao_coluna1'];
$produtor_racao_kglt2           = $_POST['produtor_racao_kglt2'];

$nutricao_leite_dieta           = $_POST['nutricao_leite_dieta'];
$nutricao_leite_kglt            = $_POST['nutricao_leite_kglt'];
$nutricao_kalvolac_dieta        = $_POST['nutricao_kalvolac_dieta'];
$nutricao_kalvolac_kglt         = $_POST['nutricao_kalvolac_kglt'];
$nutricao_kalvolac_diluicao     = $_POST['nutricao_kalvolac_diluicao'];
$nutricao_enriquecimento_kglt   = $_POST['nutricao_enriquecimento_kglt'];
$nutricao_enriquecimento_kglt2  = $_POST['nutricao_enriquecimento_kglt2'];
$nutricao_racao_kglt2           = $_POST['nutricao_racao_kglt2'];

// Sheet Treatment
// Docs https://phpspreadsheet.readthedocs.io/en/latest/topics/accessing-cells/#looping-through-cells

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
$spreadsheet = $reader->load('base.xlsx');
$sheet = $spreadsheet->getActiveSheet();

// Update Cell Values
$sheet->setCellValue('D15', $raca);
$sheet->setCellValue('D17', $peso_nasc);
$sheet->setCellValue('D18', $peso_bezerras);

$sheet->setCellValue('I11', $produtor_leite_kglt);
$sheet->setCellValue('J11', $produtor_coluna1);
$sheet->setCellValue('I12', $produtor_sucedaneo_kglt);
$sheet->setCellValue('K12', $produtor_sucedaneo_kglt2);
$sheet->setCellValue('I13', $produtor_enriquecimento_kglt2);
$sheet->setCellValue('J13', '1');
$sheet->setCellValue('I14', '2');
$sheet->setCellValue('J14', $produtor_racao_coluna1);

$sheet->setCellValue('I19', $nutricao_leite_kglt);
$sheet->setCellValue('J19', $nutricao_leite_dieta);
$sheet->setCellValue('I20', $nutricao_kalvolac_diluicao);
$sheet->setCellValue('J20', $nutricao_kalvolac_kglt);
$sheet->setCellValue('K20', $nutricao_kalvolac_dieta);
$sheet->setCellValue('I21', $nutricao_enriquecimento_kglt2);
$sheet->setCellValue('J21', $nutricao_enriquecimento_kglt);
$sheet->setCellValue('I22', $nutricao_racao_kglt2);

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save('test2.xlsx');

//Load saved sheet
$spreadsheet2 = $reader->load('test2.xlsx');

//Get Cell Formula
//$cellValue = $spreadsheet2->getActiveSheet()->getCell('B8')->getValue();

//Get Cell Value
//$cellValue = $spreadsheet2->getActiveSheet()->getCell('B8')->getCalculatedValue();


//Chart Building
$produtor_em    = $spreadsheet2->getActiveSheet()->getCell('B114')->getCalculatedValue();
$produtor_pm    = $spreadsheet2->getActiveSheet()->getCell('B113')->getCalculatedValue();
$produtor_meta  = $spreadsheet2->getActiveSheet()->getCell('B112')->getCalculatedValue();

$agrifirm_em    = $spreadsheet2->getActiveSheet()->getCell('C114')->getCalculatedValue();
$agrifirm_pm    = $spreadsheet2->getActiveSheet()->getCell('C113')->getCalculatedValue();
$agrifirm_meta  = $spreadsheet2->getActiveSheet()->getCell('C112')->getCalculatedValue();

/*
echo "<br>
$produtor_em <br>
$produtor_pm  <br>
$produtor_meta <br>
<br>
$agrifirm_em <br>
$agrifirm_pm <br>
$agrifirm_meta <br>
<br>";
*/

?>

<head>
    <?php include('inc/head.php'); ?>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart', 'bar']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawProdutorChart);
      google.charts.setOnLoadCallback(drawAgrifirmChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawProdutorChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
           ['Element', 'GPD', { role: 'style' }],
           ['EM', <?=$produtor_em?>, 'silver'],            // RGB value
           ['PM', <?=$produtor_pm?>, 'yellow'],
           ['Meta', <?=$produtor_meta?>, 'green' ], // CSS-style declaration
        ]);

        // Set chart options
        var options = {'title':'Produtor',
                       'legend': { position: 'none', maxLines: 3 },
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('produtor_chart'));
        chart.draw(data, options);
      }

      function drawAgrifirmChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
           ['Element', 'GPD', { role: 'style' }],
           ['EM', <?=$agrifirm_em?>, 'silver'],            // RGB value
           ['PM', <?=$agrifirm_pm?>, 'yellow'],
           ['Meta', <?=$agrifirm_meta?>, 'green' ], // CSS-style declaration
        ]);

        // Set chart options
        var options = {'title':'Agrifirm',
                       'legend': { position: 'none', maxLines: 3 },
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('agrifirm_chart'));
        chart.draw(data, options);
      }

    </script>
  </head>

<body class="bg-light">
  <div id="produtor_chart"></div>
  <div id="agrifirm_chart"></div>
</body>

</html>
