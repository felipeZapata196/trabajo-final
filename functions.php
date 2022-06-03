<?php


//conteo asistencia al comedor
function getEmployeesWithAttendanceCount($start, $end)
{
    $query = "select alumnos.nombre, 
sum(case when status = 'asiste' then 1 else 0 end) as cuenta_asistencia,
sum(case when status = 'falta' then 1 else 0 end) as cuenta_faltas 
 from asistencia_comedor
 inner join alumnos on alumnos.id = asistencia_comedor.alumnoId
 where date >= ? and date <= ?
 group by alumnoId;";
    $db = getDatabase();
    $statement = $db->prepare($query);
    $statement->execute([$start, $end]);
    return $statement->fetchAll();
}

function saveAttendanceData($date, $alumnos)
{
    deleteAttendanceDataByDate($date);
    $db = getDatabase();
    $db->beginTransaction();
    $statement = $db->prepare("INSERT INTO asistencia_comedor(alumnoId, date, status) VALUES (?, ?, ?)");
    foreach ($alumnos as $alumno) {
        $statement->execute([$alumno->id, $date, $alumno->status]);
    }
    $db->commit();
    return true;
}




function deleteAttendanceDataByDate($date)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM asistencia_comedor WHERE date = ?");
    return $statement->execute([$date]);
}
function getAttendanceDataByDate($date)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT alumnoId, status FROM asistencia_comedor WHERE date = ?");
    $statement->execute([$date]);
    return $statement->fetchAll();
}


//CRUD

function eliminarAlumno($id)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM alumnos WHERE id = ?");
    return $statement->execute([$id]);
}

function actualizarAlumno($name, $id)
{
    $db = getDatabase();
    $statement = $db->prepare("UPDATE alumnos SET nombre = ? WHERE id = ?");
    return $statement->execute([$name, $id]);
}
function getAlumnoById($id)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT id, nombre FROM alumnos WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetchObject();
}

function guardarAlumno($name)
{
    $db = getDatabase();
    $statement = $db->prepare("INSERT INTO alumnos(nombre) VALUES (?)");
    return $statement->execute([$name]);
}

function getAlumnos()
{
    $db = getDatabase();
    $statement = $db->query("SELECT * FROM alumnos");
    return $statement->fetchAll();
}
function getAlumnosCurso($curso)
{
    $db = getDatabase();
    $statement = $db->query("SELECT id, nombre FROM alumnos where curso='$curso'");
    return $statement->fetchAll();
}



function asistencia_comedor($alumnoId, $date, $opciones)
{

    $db = getDatabase();
    $db->beginTransaction();
    $statement = $db->prepare("INSERT INTO asistencia_comedor(alumnoId, date, status) VALUES (?, ?, ?)");
    $statement->execute([$alumnoId, $date, $opciones]);

    $db->commit();
    return true;
}



function getAsistenciaPorCurso($date)
{
    $query = "select alumnos.curso, sum(case when status = 'asiste' then 1 else 0 end) as cuenta_asistencia, 
    sum(case when status = 'falta' then 1 else 0 end) as cuenta_faltas from asistencia_comedor
     inner join alumnos on alumnos.id = asistencia_comedor.alumnoId where date =? 
     group by alumnos.curso;";
    $db = getDatabase();
    $statement = $db->prepare($query);
    $statement->execute([$date]);
    return $statement->fetchAll();
}


function getAsistenciaPorMesa($date)
{
    $query = "select alumnos.posicion_comedor, sum(case when status = 'asiste' then 1 else 0 end) as cuenta_asistencia, 
    sum(case when status = 'falta' then 1 else 0 end) as cuenta_faltas from asistencia_comedor
     inner join alumnos on alumnos.id = asistencia_comedor.alumnoId where date =? 
     group by alumnos.posicion_comedor;";
    $db = getDatabase();
    $statement = $db->prepare($query);
    $statement->execute([$date]);
    return $statement->fetchAll();
}


//Acceso a las variable de entorno



function getVarFromEnvironmentVariables($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("The environment file ($file) does not exists. Please create it");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("The specified key (" . $key . ") does not exist in the environment file");
    }
}


//acceso a la base de Datos,
function getDatabase()
{
    $password = getVarFromEnvironmentVariables("MYSQL_PASSWORD");
    $user = getVarFromEnvironmentVariables("MYSQL_USER");
    $dbName = getVarFromEnvironmentVariables("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
