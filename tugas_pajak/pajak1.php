<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }


    td {
        padding: 1em;
    }

</style>

<div class="" ></div>

<body>
    <form action="pajak2.php" method="POST">
        
        <table border=1 style="border-colaapse : collapse : width : 50%">


            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td>

                    <input type="teks" class="form-control" name="nama">

                </td>
            </tr>

            <tr>
                <td>Divisi/Jabatan</td>
                <td>:</td>
                <td>

                    <input type="teks" class="form-control" name="divisi">

                </td>
            </tr>

            <tr>
                <td>Gaji Perbulan</td>
                <td>:</td>
                <td>

                    <input type="number" class="form-control" name="gaji">

                </td>
            </tr>

            <tr>
                <td>Apakah Anda Memiliki NPWP?</td>
                <td>:</td>
                <td>
                        <input type="radio" name="npwp" value="ya">Punya
                        <input type="radio" name="npwp" value="gak:)">Tidak punya
                </td>
            </tr>

            <tr>
                
                <td>
                <button type="submit" name="submit"> Submit </button>
        </td>
        </tr>  
        
        
    
</table>
    </from>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>