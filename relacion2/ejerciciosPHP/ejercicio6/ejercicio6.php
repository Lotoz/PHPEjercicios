<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <title>Tabla de datos</title>
</head>

<body>
    <h1>Tabla con xml lectura desde PHP</h1>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-success">
                            <th scope="col ">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Titulo de trabajo</th>
                            <th scope="col">Cumpleaños</th>
                            <th scope="col">Numero de telefono</th>
                            <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php


                        $xml = simplexml_load_file('dataset.xml');
                        foreach ($xml->record as $record) {
                            $name = $record->name;
                            $lastname = $record->lastname;
                            $gender = $record->gender;
                            $job_title = $record->job_title;
                            $birthdate = $record->birthdate;
                            $phone_number = $record->phone_number;
                            $email_address = $record->email_address;

                            echo "<tr>
                    <td>$name</td>
                    <td>$lastname</td>
                    <td>$gender</td>
                    <td>$job_title</td>
                    <td>$birthdate</td>
                    <td>$phone_number</td>
                    <td>$email_address</td>
                    </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>