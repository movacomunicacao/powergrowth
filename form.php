<?php include('inc/head.php'); ?>

  <body class="bg-light">

    <div class="container-fluid">
      <div class="row justify-content-center py-5 text-center">

        <div class="col-12 col-lg-6 bg-white p-5 rounded">

          <h1 class="mb-5">Power Growth</h1>


          <form class="text-start" action="action.php" method="post" enctype="multipart/form-data">
            <h2>Inicial</h2><br>
            
            <p>
              <label class="text-start">Produtor:</label><br>
              <select class="producer col-12 p-2" name="producer">

                <?php

                include('inc/database.php');
                $conn	= db();
                foreach($conn->query(" SELECT * FROM producer ") as $row) {
                  $title = $row['title'];
                  $id_producer = $row['id'];

                  echo '<option value="'.$id_producer.'">'.$title.'</option>';
                }

                ?>

              </select>
            </p>



            <p>
              <label class="text-start">Raça:</label><br>
              <select class="race col-12 p-2" name="race">
                <option value="1">Holandês</option>
                <option value="2">Girolando</option>
                <option value="3">Jersey</option>
                <option value="4">Cruzadas</option>
              </select>
            </p>

            <p>
              <label class="text-start">Número de Bezerras:</label><br>
              <input type="text" class="number_calfs col-12 p-2" name="number_calfs">
            </p>

            <p>
              <label class="text-start">Peso Médio Nascimento:</label><br>
              <select class="weight_birth col-12 p-2" name="weight_birth">
                <option value="1">30</option>
                <option value="2">35</option>
                <option value="3">40</option>
                <option value="4">45</option>
                <option value="5">50</option>
                <option value="6">55</option>
                <option value="7">60</option>
                <option value="8">65</option>
                <option value="9">70</option>
                <option value="10">75</option>
                <option value="11">80</option>
                <option value="12">85</option>
                <option value="13">90</option>
                <option value="14">95</option>
                <option value="15">100</option>
              </select>
            </p>

            <p>
              <label class="text-start">Peso Médio Bezerras:</label><br>
              <select class="weight_calfs col-12 p-2" name="weight_calfs">
                <option value="1">30</option>
                <option value="2">35</option>
                <option value="3">40</option>
                <option value="4">45</option>
                <option value="5">50</option>
                <option value="6">55</option>
                <option value="7">60</option>
                <option value="8">65</option>
                <option value="9">70</option>
                <option value="10">75</option>
                <option value="11">80</option>
                <option value="12">85</option>
                <option value="13">90</option>
                <option value="14">95</option>
                <option value="15">100</option>
              </select>
            </p>

            <p>
              <label class="text-start">Idade Bezerras (dias):</label><br>
              <input type="text" class="age_calfs col-12 p-2" name="age_calfs">
            </p>

            <p>
              <label class="text-start">Peso Desmame:</label><br>
              <input type="text" class="weight_wean col-12 p-2" name="weight_wean">
            </p>

            <p>
              <label class="text-start">Dias Desmame:</label><br>
              <input type="text" class="wean_days col-12 p-2" name="wean_days">
            </p>

            <p>
              <label class="text-start">Número Partos Mês:</label><br>
              <input type="text" class="number_births col-12 p-2" name="number_births">
            </p>

            <hr>
            <h2>Producer</h2><br>

            <p>
              <label class="text-start">Coluna 1</label><br>
              <select class="producer_column1 col-12 p-2" name="producer_column1">
                <option value="1">Sem Leite</option>
                <option value="2">Leite In Natura</option>
                <option value="3">Leite Descarte</option>
              </select>
            </p>

            <p>
              <label class="text-start">Kg ou Lt:</label><br>
              <select class="producer_milk_kglt col-12 p-2" name="producer_milk_kglt">
                <option value="1">0</option>
                <option value="2">4</option>
                <option value="3">5</option>
                <option value="4">6</option>
                <option value="5">7</option>
                <option value="6">8</option>
              </select>
            </p>

            <p>
              <label class="text-start">Sucedâneo:</label><br>
              <select class="producer_sucedaneo_kglt col-12 p-2" name="producer_sucedaneo_kglt">
                <option value="1">0</option>
                <option value="2">4</option>
                <option value="3">5</option>
                <option value="4">6</option>
                <option value="5">7</option>
                <option value="6">8</option>
              </select>
            </p>

            <p>
              <label class="text-start">Diluição:</label><br>
              <select class="producer_sucedaneo_kglt2 col-12 p-2" name="producer_sucedaneo_kglt2">
                <option value="1">0,0</option>
                <option value="2">1:6</option>
                <option value="3">1:7</option>
                <option value="4">1:8</option>
                <option value="5">1:9</option>
              </select>
            </p>

            <p>
              <label class="text-start">Enriquecimento:</label><br>
              <select class="producer_enrichment_kglt2 col-12 p-2" name="producer_enrichment_kglt2">
                <option value="1">0</option>
                <option value="2">5</option>
                <option value="3">10</option>
                <option value="4">15</option>
                <option value="5">20</option>
                <option value="6">25</option>
                <option value="7">30</option>
                <option value="8">35</option>
                <option value="9">40</option>
                <option value="10">45</option>
                <option value="11">50</option>
                <option value="12">75</option>
                <option value="13">100</option>
                <option value="14">125</option>
                <option value="15">150</option>
              </select>
            </p>

            <p>
              <label class="text-start">Ração:</label><br>
              <select class="producer_feed_column1 col-12 p-2" name="producer_feed_column1">
                <option value="1">Ração Comercial 18%</option>
                <option value="2">Ração Comercial 20%</option>
                <option value="3">Ração Comercial 22%</option>
                <option value="4">Ração Comercial 24%</option>
              </select>
            </p>

            <p>
              <label class="text-start">Ração Kg ou Lt 2:</label><br>
              <select class="producer_feed_kglt2 col-12 p-2" name="producer_feed_kglt2">
                <option value="1">0</option>
                <option value="2">0,250</option>
                <option value="3">0,300</option>
                <option value="4">0,350</option>
                <option value="5">0,400</option>
                <option value="6">0,450</option>
                <option value="7">0,500</option>
                <option value="8">0,750</option>
                <option value="9">1,000</option>
              </select>
            </p>

            <hr>
            <h2>Nutrição Agrifirm</h2><br>

            <p>
              <label class="text-start">Leite</label><br>
              <select class="nutrition_milk_diet col-12 p-2" name="nutrition_milk_diet">
                <option value="1">Sem Leite</option>
                <option value="2">leite In Natura</option>
                <option value="3">Leite Descarte</option>
              </select>
            </p>

            <p>
              <label class="text-start">Kg ou Lt:</label><br>
              <select class="nutrition_milk_kglt col-12 p-2" name="nutrition_milk_kglt">
                <option value="1">0</option>
                <option value="2">4</option>
                <option value="3">5</option>
                <option value="4">6</option>
                <option value="5">7</option>
                <option value="6">8</option>
              </select>
            </p>

            <p>
              <label class="text-start">Dieta</label><br>
              <select class="nutrition_kalvolac_diet col-12 p-2" name="nutrition_kalvolac_diet">
                <option value="1">Kalvolac</option>
                <option value="2">Kalvolac Quick</option>
              </select>
            </p>

            <p>
              <label class="text-start">Kg ou Lt:</label><br>
              <select class="nutrition_kalvolac_kglt col-12 p-2" name="nutrition_kalvolac_kglt">
                <option value="1">0</option>
                <option value="2">4</option>
                <option value="3">5</option>
                <option value="4">6</option>
                <option value="5">7</option>
                <option value="6">8</option>
              </select>
            </p>

            <p>
              <label class="text-start">Diluição:</label><br>
              <select class="nutrition_kalvolac_dilution col-12 p-2" name="nutrition_kalvolac_dilution">
                <option value="1">0,0</option>
                <option value="2">1:6</option>
                <option value="3">1:7</option>
                <option value="4">1:8</option>
                <option value="5">1:9</option>
              </select>
            </p>

            <p>
              <label class="text-start">Enriquecimento:</label><br>
              <select class="nutrition_enrichment_kglt col-12 p-2" name="nutrition_enrichment_kglt">
                <option value="1">Kalvolac</option>
                <option value="2">Kalvolac Quick</option>
                <option value="3">Vetilac Azul</option>
              </select>
            </p>

            <p>
              <label class="text-start">Enriquecimento Kg ou Lt:</label><br>
              <select class="nutrition_enrichment_kglt2 col-12 p-2" name="nutrition_enrichment_kglt2">
                <option value="1">0</option>
                <option value="2">5</option>
                <option value="3">10</option>
                <option value="4">15</option>
                <option value="5">20</option>
                <option value="6">25</option>
                <option value="7">30</option>
                <option value="8">35</option>
                <option value="9">40</option>
                <option value="10">45</option>
                <option value="11">50</option>
                <option value="12">75</option>
                <option value="13">100</option>
                <option value="14">125</option>
                <option value="15">150</option>
              </select>
            </p>

            <p>
              <label class="text-start">Ração Pré Inicial Agrifirm:</label><br>
              <select class="nutrition_feed_kglt2 col-12 p-2" name="nutrition_feed_kglt2">
                <option value="1">0</option>
                <option value="2">0,250</option>
                <option value="3">0,300</option>
                <option value="4">0,350</option>
                <option value="5">0,400</option>
                <option value="6">0,450</option>
                <option value="7">0,500</option>
                <option value="8">0,750</option>
                <option value="9">1,000</option>
              </select>
            </p>


            <hr>
            <h2>Sucedâneo</h2><br>

            <p>
              <label class="text-start">Proteína</label><br>
              <input type="text" class="protein col-12 p-2" name="protein">
            </p>

            <p>
              <label class="text-start">Gordura</label><br>
              <input type="text" class="fat col-12 p-2" name="fat">
            </p>

            <p>
              <label class="text-start">Lactose</label><br>
              <input type="text" class="lactose col-12 p-2" name="lactose">
            </p>

            <p>
              <label class="text-start">Fibra</label><br>
              <input type="text" class="fiber col-12 p-2" name="fiber">
            </p>

            <p>
              <label class="text-start">M. Mineral</label><br>
              <input type="text" class="mineral col-12 p-2" name="mineral">
            </p>


            <input type="submit" name="" value="Gerar" class="mt-3 btn btn-primary">
          </form>

        </div>
      </div>
    </div>



  </body>
</html>
