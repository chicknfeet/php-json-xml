<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = simplexml_load_file("http://localhost/php-json-xml/system_data/students.xml");

        $student_json = file_get_contents("http://localhost/php-json-xml/system_data/students.json");
        $student_decoded = json_decode($student_json);
    ?>

    <p>
        Hello my name is
        <?php echo $student->name; ?>
        , <?php echo $student->age; ?> years of age.
        , I live in <?php echo $student->address; ?>
    </p>

    <p>
        Hello my name is
        <?php echo $student->name; ?>
        , <?php echo $student->age; ?> years of age.
        , I live in <?php echo $student->address; ?>
    </p>
</body>
</html>
