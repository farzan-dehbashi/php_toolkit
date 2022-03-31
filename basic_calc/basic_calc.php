<html>
<body>
    <form action="basic_calc.php" method="get">
        <input type="number"name="var2">
        <br>
        <input type="number" name="var1">
        <br>
        <input type="submit">
    </form>
    Answer: <?php echo $_GET["var1"] + $_GET["var2"]?>
</body>
</html>