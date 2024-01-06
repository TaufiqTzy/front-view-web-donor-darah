<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Tabel dengan Tag &lt;a&gt;</title>
    <style>
        /* Ini hanya untuk mengatur tampilan tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Tautan untuk menampilkan tabel 1 -->
    <a href="#" id="tombol1">Tampilkan Tabel 1</a>
    
    <!-- Tautan untuk menampilkan tabel 2 -->
    <a href="#" id="tombol2">Tampilkan Tabel 2</a>

    <!-- Tabel 1 -->
    <table id="tabel1" style="display: none;">
        <thead>
            <tr>
                <th>Header 1</th>
                <th>Header 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1.1</td>
                <td>Data 1.2</td>
            </tr>
            <!-- Tambahkan baris-baris lain di sini -->
        </tbody>
    </table>

    <!-- Tabel 2 -->
    <table id="tabel2" style="display: none;">
        <thead>
            <tr>
                <th>Header A</th>
                <th>Header B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data A.1</td>
                <td>Data B.1</td>
            </tr>
            <!-- Tambahkan baris-baris lain di sini -->
        </tbody>
    </table>

    <script>
        // Fungsi untuk menampilkan tabel yang sesuai ketika tautan diklik
        function tampilkanTabel(idTabel) {
            const tabel1 = document.getElementById("tabel1");
            const tabel2 = document.getElementById("tabel2");
            
            if (idTabel === "tabel1") {
                tabel1.style.display = "table";
                tabel2.style.display = "none";
            } else if (idTabel === "tabel2") {
                tabel1.style.display = "none";
                tabel2.style.display = "table";
            }
        }

        // Menambahkan event listener ke tautan-tautan
        document.getElementById("tombol1").addEventListener("click", function() {
            tampilkanTabel("tabel1");
        });

        document.getElementById("tombol2").addEventListener("click", function() {
            tampilkanTabel("tabel2");
        });
    </script>
</body>
</html>
