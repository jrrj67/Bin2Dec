<html lang="en">
<?php
session_start();
require_once('materialize/templates/header.php');
?>
<body>
<?php require('materialize/templates/main.php') ?>
<div class="row">
    <div class="col s12"><p>s12</p></div>
</div>
<div class="container center">
    <form action="back-end/api.php" method="post">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title">Conversor de números binários para decimais</span>
                        <div class="card-content">
                            Digite um número binário:
                            <div class="input-field inline">
                                <input type="text" name="data" autocomplete="off">
                                <label>Número</label>
                                <span class="helper-text spinner-red" data-error="wrong" data-success="right">
                                    Jquery
                                </span>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Converter
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="collection">
                            <a class="collection-item">Resultado em decimal:</a>
                            <a class="collection-item">
                                <h4>
                                    <?php
                                    if (isset($_SESSION['result'])) {
                                        echo $_SESSION['result'];
                                        session_destroy();
                                    }
                                    ?>
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php require('materialize/templates/footer.php') ?>
</body>
</html>