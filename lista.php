<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$curso = 0;
$date = date("Y-m-d");
if (isset($_GET["curso"])) {
    $curso = $_GET["curso"];
}

$alumnos = getAlumnosCurso($curso);
?>


<div class="row">
    <div class="col-12" style="margin-top: 2%; margin-bottom:2%;">
        <h1 class="text-center">Asistencia al comedor</h1>
    </div>





    <form action="lista.php">
        <h3>Elige tu curso</h3>
        <div class="form-inline mb-2">
            <select class="form-select" name="curso" style="width:15%">
                <option disabled value="unset">--Select--</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>


        <input class="btn btn-success ml-2" type="submit" style="margin-bottom: 2rem; background-color:#4895ef;">
    </form>

    <div class="col-12">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Alumno</th>
                        <th> Comedor</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno) { ?>
                        <tr>
                            <td>

                                <?php echo $alumno->nombre ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="alumno_asistencia.php?id=<?php echo $alumno->id ?>">
                                    Confirmar asistencia <i class="fa fa-edit"></i>
                                </a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
