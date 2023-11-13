<?php
$host = "localhost";
$user = "root";
// $pass = "eiML.f=6m688K7A0VH==;fl,Jo";
$pass = "";
$db = "website_data";
global $pdo;
$GLOBALS['pdo'] = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

try {
}

catch(PDOException $error) {
    echo "Connection failed";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    foreach ($data as $item) {
        $id = $item['id'];
        $type = $item['type'];

        if ($type === "text") {
            $content = $item['content'];
            saveText($content, $id);
        } elseif ($type === "image") {
            $src = $item['src'];
            saveImage($src, $id);
        }
    }
}


function saveText(string $text, int $id) {
    $sql = "UPDATE website_text SET text_field = :text WHERE text_id = :id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['text' => $text, 'id' => $id]);
}

function saveImage(string $path, int $id) {
    $sql = "UPDATE photo SET file_path = :path WHERE photo_id = :id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['path' => $path, 'id' => $id]);
}

function getTextFromId(int $id) {
    $sql = "SELECT text_field FROM website_text WHERE text_id = :id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetchAll();
    return $result;
}

function getPhotoIDFromName(string $name) {
    $sql = "SELECT photo_id FROM photo WHERE photo_name = :name";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute(['name' => $name]);
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
    $sql = "SELECT file_path, photo_id FROM photo WHERE photo_name LIKE 'carousel%'";
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

//Function for adding a new project to the project page
function addNewProject(array $file_names, int $count, string $project_name, string $city, string $state, 
string $date, string $project_description) {

    //Turns all the ids from the respective tables into integer values
    $project_id = $GLOBALS['pdo']->query("SELECT COUNT(*) FROM projects");
    $project_id_val = $project_id->fetchColumn();
    
    $photo_id = $GLOBALS['pdo']->query("SELECT COUNT(*) FROM photo");
    $photo_id_val = $photo_id->fetchColumn();

    $project_photos_id = $GLOBALS['pdo']->query("SELECT COUNT(*) FROM project_photos");
    $project_photos_id_val = $project_photos_id->fetchColumn() + 1;

    //Rest of code handles the inserts of data needed to add the project
    $project_insert = "INSERT INTO projects(project_id,project_name,project_description,project_city,project_state) 
    VALUES(?, ?, ?, ?, ?)";
    $stmtOne = $GLOBALS['pdo']->prepare($project_insert);
    $stmtOne->execute([$project_id_val, $project_name, $project_description, $city, $state]);
    
    for($i = 0; $i < $count; $i++) {
        $file_path = "../media/images/projects/" . $file_names[$i];
        $photo_insert = "INSERT INTO photo(photo_id, photo_name, file_path, page_id, photo_date) VALUES(?, ?, ?, ?, ?)";
        $stmtTwo = $GLOBALS['pdo']->prepare($photo_insert);
        $stmtTwo->execute([$photo_id_val + $i, $file_names[$i], $file_path, "project_details", $date]);

        $project_photos_insert = "INSERT INTO project_photos(project_photo_id, photo_id, project_id, project_photo_order) VALUES(?, ?, ?, ?)";
        $stmtThree = $GLOBALS['pdo']->prepare($project_photos_insert);
        $stmtThree->execute([$project_photos_id_val + $i, $photo_id_val + $i, $project_id_val, $i]);
    }
}

//Function for removing a project from the projects page.
function removeProject(int $id, array $projectImages) {
    $removeProjectPhotos = $GLOBALS['pdo']->query("DELETE FROM project_photos WHERE project_id='$id'");
    $removeProjects = $GLOBALS['pdo']->query("DELETE FROM projects WHERE project_id='$id'");
    foreach($projectImages as $image) {
        $removePhoto = $GLOBALS['pdo']->query("DELETE FROM photo WHERE file_path = '$image[file_path]'");
    }
}
?>
