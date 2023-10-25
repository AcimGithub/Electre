<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Matriks Electre</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 50px;
            text-align: center;
        }

        input[type="number"] {
            width: 50px;
            text-align: center;
        }

        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h2>Input Matriks Electre</h2>
    <form action="{{ url('store') }}" method="post">
        @csrf
        <label for="kriteria1">Bobot Kriteria 1:</label>
        <input type="number" name="bobot[]" id="kriteria1" step="0.01" required><br><br>

        <label for="kriteria2">Bobot Kriteria 2:</label>
        <input type="number" name="bobot[]" id="kriteria2" step="0.01" required><br><br>

        <label for="kriteria3">Bobot Kriteria 3:</label>
        <input type="number" name="bobot[]" id="kriteria3" step="0.01" required><br><br>

        <label for="kriteria4">Bobot Kriteria 4:</label>
        <input type="number" name="bobot[]" id="kriteria4" step="0.01" required><br><br>

        <label for="kriteria5">Bobot Kriteria 5:</label>
        <input type="number" name="bobot[]" id="kriteria5" step="0.01" required><br><br>

        <table>

            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Alternatif 1</th>
                    <th>Alternatif 2</th>
                    <th>Alternatif 3</th>
                    <th>Alternatif 4</th>
                    <th>Alternatif 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kriteria 1</td>
                    <td><input type="text" name="k[1][1]"></td>
                    <td><input type="text" name="k[1][2]"></td>
                    <td><input type="text" name="k[1][3]"></td>
                    <td><input type="text" name="k[1][4]"></td>
                    <td><input type="text" name="k[1][5]"></td>
                </tr>
                <tr>
                    <td>Kriteria 2</td>
                    <td><input type="text" name="k[2][1]"></td>
                    <td><input type="text" name="k[2][2]"></td>
                    <td><input type="text" name="k[2][3]"></td>
                    <td><input type="text" name="k[2][4]"></td>
                    <td><input type="text" name="k[2][5]"></td>
                </tr>
                <tr>
                    <td>Kriteria 3</td>
                    <td><input type="text" name="k[3][1]"></td>
                    <td><input type="text" name="k[3][2]"></td>
                    <td><input type="text" name="k[3][3]"></td>
                    <td><input type="text" name="k[3][4]"></td>
                    <td><input type="text" name="k[3][5]"></td>
                </tr>
                <tr>
                    <td>Kriteria 4</td>
                    <td><input type="text" name="k[4][1]"></td>
                    <td><input type="text" name="k[4][2]"></td>
                    <td><input type="text" name="k[4][3]"></td>
                    <td><input type="text" name="k[4][4]"></td>
                    <td><input type="text" name="k[4][5]"></td>
                </tr>
                <tr>
                    <td>Kriteria 5</td>
                    <td><input type="text" name="k[5][1]"></td>
                    <td><input type="text" name="k[5][2]"></td>
                    <td><input type="text" name="k[5][3]"></td>
                    <td><input type="text" name="k[5][4]"></td>
                    <td><input type="text" name="k[5][5]"></td>
                </tr>
            </tbody>
        </table>

        <button type="submit" value="Proses"></button>
    </form>
</body>

</html>