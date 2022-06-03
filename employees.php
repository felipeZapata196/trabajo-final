<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$alumnos = getAlumnos();
?>
<div class="row" style="padding-bottom: 10%;">
    <div class="col-12" style="padding-bottom: 5%; padding-top:2.5%;">
        <h1 class="text-center">Lista de alumnos</h1>
    </div>
    <div class="col-12">
        <a href="employee_add.php" class="btn btn-info mb-2" style="background-color:#264653;">Añadir alumno</a>
    </div>
    <div class="col-12" style="padding-bottom: 2%;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th>Dni</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno) { ?>
                        <tr>
                            <td>
                                <?php echo $alumno->id ?>
                            </td>
                            <td>
                                <?php echo $alumno->nombre ?>
                            </td>

                            <td>
                                <?php echo $alumno->curso ?>
                            </td>
                            <td>
                                <?php echo $alumno->dni ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="employee_edit.php?id=<?php echo $alumno->id ?>" style="background-color:#fcbf49;">
                                    Edit </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="employee_delete.php?id=<?php echo $alumno->id ?>">
                                    Delete
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
