<!--11. Создать форму с input[type="file"]. В неё загружать файл.
Сохранять его рядом в папку image если он расширения jpg или png, иначе отдавать ошибку.
Проверку сделать в виде функции validateFile($name);-->

<?php
$name = $_FILES['file']['name'] ?? '';
$tmpName = $_FILES['file']['tmp_name'] ?? '';
$uploadDir = './images/';
$uploadFile = $name ? $uploadDir . basename($name) : '';


function validateFile($tmpName): bool
{
    if ($tmpName) {
        $fInfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($fInfo, $tmpName);
        $allowed = ['image/jpeg', 'image/png'];
        finfo_close($fInfo);

        if (!in_array($mime, $allowed)) {
            return false;
        }
    }

    return true;
}

$checkValidateFile = validateFile($tmpName);
?>

<div class="wrapper-output">
    <?php
    if ($name && !$checkValidateFile) {
        echo '<span class="output-error">Загруженный файл не соответствует расширению jpg или png!!!</span>';
    } elseif ($name && $checkValidateFile) {

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755);
        }

        if ($uploadFile && move_uploaded_file($tmpName, $uploadFile)) {
            echo '<span class="output-success">Файл загружен успешно!</span>';
        } else {
            echo '<span class="output-success">Файл не загружен!</span>';
        }
    }
    ?>
</div>

<div class="wrapper-form">
    <form method="post" class="form" enctype="multipart/form-data">
        <label for="file">Загрузите файл:</label>
        <input type="file" class="file" name="file" required>
        <button type="submit" class="btn-save">Сохранить</button>
    </form>
</div>
