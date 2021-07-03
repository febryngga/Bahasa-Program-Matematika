<html>

<head>
    <title>Febri Dwi Anggara | 181021400265</title>
</head>

<body>
    <h1>Kalkulator</h1>
    <form method="post">
        <label>
            <input type="number" name="x" placeholder="Input Nilai 1">
        </label>
        <select name="operator">
            <option selected disabled>Pilih Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            <option value="^">^</option>
        </select>
        <label>
            <input type="number" name="y" placeholder="Input Nilai 2">
        </label>
        <input type="submit" name="count" value="Submit">
        <input type="reset" onclick="location.href = '?clear'" value="Clear">
    </form>

    <?php
    if (isset($_POST['count'])) {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $operator = $_POST["operator"];
        switch ($operator) {
            case ($operator == '+'):
                $z = $x + $y;
                echo "<br>Hasil Penjumlahan $x + $y = $z ";
                break;
            case ($operator == '-'):
                $z = $x - $y;
                echo "<br>Hasil Pengurangan $x - $y = $z ";
                break;
            case ($operator == '*'):
                $z = $x * $y;
                echo "<br>Hasil Perkalian $x x $y = $z ";
                break;
            case ($operator == '/'):
                $z = $x / $y;
                echo "<br>Hasil Pembagian $x / $y = $z ";
                break;
            case ($operator == '%'):
                $z = $x % $y;
                echo "<br>Hasil $x Modulus $y = $z ";
                break;
            case ($operator == '^'):
                $z = pow($x, $y);
                echo "<br>Hasil Akar Pangkat Dua ($x, $y) = $z ";
                break;
        }
    }
    ?>
</body>

</html>