<?php include 'modulos/header.php'; ?>

<main class="pt-5 mx-lg-5">

    <!-- ESCRIBA AQUÍ SU CODIGO -->
    <div class="container-fluid mt-0">
        <div class="card card-cascade wider">
            <div class="view view-cascade gradient-card-header orange">
                <h5 class="card-header-title white-text my-2">
                    <center> <b>MI LISTA</b> </center>
            </div>
            <div class="card-body card-body-cascade">
                <div class="table-responsive">
                    <style>
                        .table {
                            display: table;
                            border-collapse: collapse;
                        }

                        .table .table-row {
                            display: table-row;
                        }

                        .table .table-cell {
                            display: table-cell;
                            text-align: left;
                            vertical-align: top;
                            border: 1px solid black;
                        }
                    </style>

                    <table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">NOMBRE
                                </th>
                                <th class="th-sm">APELLIDO PATERNO
                                </th>
                                <th class="th-sm">APELLIDO MATERNO
                                </th>
                                <th class="th-sm">NUMERO DE CASO
                                </th>
                                <th class="th-sm">CODIGO DNA
                                </th>
                                <th class="th-sm">EDITAR
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>juan</td>
                                <td>juan</td>
                                <td>juan</td>
                                <td>juan</td>
                                <td>juan</td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

</main>
<?php include 'modulos/footer.php'; ?>