<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <title>Gráficos</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php include 'terceiroGrafico.php' ?>
        </div>
        <div class="col-md-6">
            <?php include 'segundoGrafico.php' ?>
        </div>
            
    </div>
</div>
<div class="container">
    <div class="col-lg-12" style="background-color: black;">
    <div style="margin: -120px;">
    </div>

    <?php include 'primeiroGrafico.php' ?>
    </div>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>