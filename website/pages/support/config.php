<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "website_data";
global $pdo;
$GLOBALS['pdo'] = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

try {
}

catch(PDOException $error) {
    echo "Connection failed";
}

function recordResponse() {
    $sql = "SELECT MAX(response_id) + 1 AS new_response_id FROM form_responses";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();

    $new_response_id = $result[0];
    if ($new_response_id == null) {
        $new_response_id = 0;
    }

    $sql = "INSERT INTO form_responses (response_id, date) VALUES (:response_id, :date_column)";
    $stmt = $GLOBALS['pdo']->prepare($sql);

    $stmt->bindValue(':response_id', $new_response_id, PDO::PARAM_INT);
    $stmt->bindValue(':date_column', date("Y-m-d"), PDO::PARAM_STR);

    $stmt->execute();
}

function getTextFromId(int $id) {
    $sql = "SELECT text_field FROM website_text WHERE text_id = :id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll();
    return $result;
}

function getPhotoFromName(string $name) {
    $sql = "SELECT file_path FROM photo WHERE photo_name = :name";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['name' => $name]);
    $result = $stmt->fetchAll();
    return $result;
}

function getCarouselPhotos() {
    $sql = "SELECT file_path FROM photo WHERE photo_name LIKE 'carousel%'";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getProjectFromId(int $id) {
    $sql = "SELECT * FROM projects WHERE project_id = :id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll();
    return $result;
}

function getProjectInfoFromId(int $id) {
    $sql = "SELECT project_info_text FROM projects p, project_info i WHERE p.project_id = :id AND p.project_id = i.project_id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll();
    return $result;
}

function getProjectImagesFromId(int $id) {
    $sql = "SELECT file_path FROM photo p, project_photos r WHERE r.project_id = :id AND p.photo_id = r.photo_id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll();
    return $result;
}

function getProjectNamesAndCovers() {
    $sql = "SELECT p.project_id, p.project_name, h.file_path FROM projects p, photo h, project_photos r WHERE p.project_id = r.project_id AND h.photo_id = r.photo_id AND r.project_photo_order = 0";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    $projects = $stmt->fetchAll();;

    $i = 0;
    foreach ($projects as $project) {
        if ($i % 3 == 0) {
            echo "<tr>";
        }
        
        echo "<td class='col-sm-4'>
            <div class='container'>
                <a href = 'project-details.php?id=".$project['project_id']."'>
                    <div class = 'image'>
                        <img src='".$project['file_path']."' class='img-fluid aspect-ratio-4x3'>
                        <div class = 'text'> <p>".$project['project_name']."</p> </div>
                    </div>
                </a>
            </div>";
        
        if($i % 3 == 2) {
            echo "</tr>";
        }

        $i++;
    }

    if ($i % 3 != 0) {
        echo "</tr>";
    }
}
?>