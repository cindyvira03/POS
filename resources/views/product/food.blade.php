<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Food and Beverages</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <select id="pilihan" onchange="showTable()">
        <option value="">Pilih</option>
        <option value="makanan">Makanan</option>
        <option value="minuman">Minuman</option>
    </select>

    <div id="tabelMakanan" style="display:none;">
        <h2>Daftar Makanan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nasi Goreng</td>
                    <td>10</td>
                    <td>20000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mie Goreng</td>
                    <td>8</td>
                    <td>18000</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="tabelMinuman" style="display:none;">
        <h2>Daftar Minuman</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Minuman</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Es Teh</td>
                    <td>15</td>
                    <td>5000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Es Jeruk</td>
                    <td>12</td>
                    <td>6000</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function showTable() {
            var pilihan = document.getElementById("pilihan").value;
            if (pilihan === "makanan") {
                document.getElementById("tabelMakanan").style.display = "block";
                document.getElementById("tabelMinuman").style.display = "none";
            } else if (pilihan === "minuman") {
                document.getElementById("tabelMakanan").style.display = "none";
                document.getElementById("tabelMinuman").style.display = "block";
            } else {
                document.getElementById("tabelMakanan").style.display = "none";
                document.getElementById("tabelMinuman").style.display = "none";
            }
        }
    </script>

</body>

</html>