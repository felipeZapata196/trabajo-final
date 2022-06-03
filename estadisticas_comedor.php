<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$date = date("Y-m-d");

if (isset($_GET["date"])) {
    $date = $_GET["date"];
}

$start = date("Y-m-d");
$end = date("Y-m-d");
if (isset($_GET["start"])) {
    $start = $_GET["start"];
}
if (isset($_GET["end"])) {
    $end = $_GET["end"];
}

$alumnos = getEmployeesWithAttendanceCount($start, $end);
$cursos = getAsistenciaPorCurso($date);
$mesas = getAsistenciaPorMesa($date);
?>




<div style="width:70%; margin:auto">

    <div class="row" style="padding-top: 3%; padding-bottom:3%">
        <div class="col-12" style="padding-top: 5%; padding-bottom:5%">
            <h1 class="text-center">Estadísticas del comedor</h1>
        </div>

        <div class="col-12" style="padding-top: 5%; padding-bottom:2%;">
            <h4 class="text-left">Asistencia al comedor</h4>
        </div>
        <div class="col-12">

            <form action="estadisticas_comedor.php" class="form-inline mb-2">
                <label for="start">Start:&nbsp;</label>
                <input required id="start" type="date" name="start" value="<?php echo $start ?>" class="form-control mr-2">
                <label for="end">End:&nbsp;</label>
                <input required id="end" type="date" name="end" value="<?php echo $end ?>" class="form-control">
                <button class="btn btn-success ml-2" style="background-color:#4895ef;">Filtrar</button>
            </form>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th> cuenta asistencia</th>
                            <th>cuenta faltas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $alumno) { ?>
                            <tr>
                                <td>
                                    <?php echo $alumno->nombre ?>
                                </td>
                                <td>
                                    <?php echo $alumno->cuenta_asistencia ?>
                                </td>
                                <td>
                                    <?php echo $alumno->cuenta_faltas ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row" style="padding-top: 5%; padding-bottom:5%">

        <div class="col-12" style="padding-top: 1%; padding-bottom:2%">
            <h4 class="text-left">Número de asistentes por curso</h4>
        </div>

        <div class="col-12">

            <form action="estadisticas_comedor.php" class="form-inline mb-2">
                <label for="start">Date:&nbsp;</label>
                <input required id="start" type="date" name="date" value="<?php echo $date ?>" class="form-control mr-2">

                <button class="btn btn-success ml-2" style="background-color:#4895ef;">Filtrar</button>
            </form>
        </div>

        <div class="col-12">


            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Clase</th>
                            <th> cuenta asistencia</th>
                            <th>cuenta faltas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cursos as $curso) { ?>
                            <tr>
                                <td>
                                    <?php echo $curso->curso ?>
                                </td>
                                <td>
                                    <?php echo $curso->cuenta_asistencia ?>
                                </td>
                                <td>
                                    <?php echo $curso->cuenta_faltas ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 5%; padding-bottom:10%;">

        <div class="col-12" style="padding-top: 1%; padding-bottom:2%">

            <h4 class="text-left">Número de asistentes por mesa</h4>

        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>posición_comedor</th>
                            <th> numero comensales</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mesas as $mesa) { ?>
                            <tr>
                                <td>
                                    <?php echo $mesa->posicion_comedor ?>
                                </td>
                                <td>
                                    <?php echo $mesa->cuenta_asistencia ?>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include_once "footer.php";
