<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}



/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
  background-color: black;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
  background-color: black;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
  background-color: black;
}

/* Content */
.content {
  background-color: white;
  padding: 6px;
}
.content1 {
  padding: 0px;
  text-align: center;
  background-color: black;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 51%;
    background-color: black;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/home1.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span style="color:black;font-size: 20px;" class="section-heading-upper">FMAC BIKE</span>
                </h2>
                <p style="color:black;font-size:20px;">FMAC BIKE é uma loja online onde encontrará bicicletas, equipamentos e acessórios para as mesmas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="main">
        <div class="content1">
            <p style="font-size:50px;">Escolha a sua bicicleta.</p>
        </div>
        <div class="row">
            <div href="index.php?cmd=produtos&filtro=1" class="column">
                <div class="content">
                    <a href="?cmd=produtos&filtro=1"><img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/ciclismo-de-estrada.jpg" style="width:100%"/></a>
                    <h3><a href="?cmd=produtos&filtro=1" style="color:black;">Estrada</a></h3>
                    <a href="?cmd=produtos&filtro=1" style="color:black;">O Ciclismo de estrada é uma das modalidades do ciclismo, que como o nome indica é realizado na estrada, está modalidade exige mais da sua resistência.</a>
                </div>
            </div>
            <div href="index.php?cmd=produtos&filtro=2" class="column">
                <div class="content">
                    <a href="?cmd=produtos&filtro=2"><img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/BTT.jpg" style="width:100%"/></a>
                    <h3><a href="?cmd=produtos&filtro=2" style="color:black;">BTT</a></h3>
                    <a href="?cmd=produtos&filtro=2" style="color:black;">O BTT ou bicicleta todo o terreno, é praticado em trilhos montanhosos e em serras, dentro desta modalidade existem outras como o Down Hill e o Cross Country.</a>
                </div>
            </div>
        </div>
    </div>
</section>

</html>
