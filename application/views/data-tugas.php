<html>

<head>
    <meta charset="utf-8">
    <title>Di-Lemas</title>
    <link rel="stylesheet" type="text/css" href="<?php echo
                                                    base_url() ?>assets/css/styletugas.css">
</head>


<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Di-Lemas</h1>
                <h3>Aplikasi Sederhana Digital Learning Management System</h3>
            </hgroup>
        </header>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Data Anda Telah diinput
                    </th>
                </tr>

                <tr>
                    <td>Nama</td>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <?= $nis; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tanggal; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $lahir; ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelmin</td>
                    <td>:</td>
                    <td>
                        <?= $jnk; ?>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('tugas');
                                    ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
</body>

</html>