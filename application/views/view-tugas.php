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
            <form action="<?= base_url('tugas/cetak'); ?>" method="post">
                <table>
                    <tr>
                        <th colspan="3">
                            Form Input Di-Lemas
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <th>NIS</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nis" id="nis">
                        </td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="kelas" id="kelas">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="tanggal" id="tanggal">
                        <th>d/m/yyyy</th>
                        </td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="lahir" id="lahir">
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" id="alamat">
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>
                            <select name="jnk" id="jnk">
                                <option value="">-</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td>
                            <select name="agama" id="agama">
                                <option value="">-</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                    <table>
            </form>

        </center>
</body>

</html>