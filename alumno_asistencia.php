<?php
if (!isset($_GET["id"])) exit("No id provided");
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$id = $_GET["id"];
$date = date("Y-m-d");
$employee = getAlumnoById($id);
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center" style="margin-top: 5%; margin-bottom:5%;">Confirmar asistencia al comedor</h1>
    </div>


    <div class="col-12">
        <form action="alumno_comedor.php" method="POST">


            <label for="start">Date:&nbsp;</label>
            <input required id="start" type="date" name="date" value="<?php echo $date ?>" class="form-control mr-2" style="width: 15%;">



    </div>

    <div class="col-12">

        <input type="hidden" name="id" value="<?php echo $employee->id ?>">

        <div class="form-group" style="width: 15%;">
            <label for="name">Name</label>
            <select name="opciones" class="form-control">
                <option disabled value="unset">--Select--</option>
                <option value="asiste">asiste</option>
                <option value="falta">falta</option>
            </select>


        </div>
        <div class="form-group">
            <button class="btn btn-success" style="background-color:#11468F">
                Save
            </button>
        </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";
