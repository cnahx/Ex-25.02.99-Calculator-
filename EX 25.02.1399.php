<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="EX%2025.02.99%20CSS%20FILE.css" rel="stylesheet">
    <title>Calculator</title>
	
</head>
<body>

<br>
	<div class="bg">
<p class="S1">لطفا عدد مورد نظر را وارد کنید </p>
<br>
<div class="forum">
    <form class="container4" method="post">
        <input class="S3" type="text" name="numb1">
        <input class="S3" type="text" name="numb2">

        <select class="input" name="operator" id="">
            <option class="input" >انتخاب کنید</option>
            <option class="input" >جمع</option>
            <option class="input" >تفریق</option>
            <option class="input" >ضرب</option>
            <option class="input" >تقسیم</option>
            <option class="input" >توان 2</option>
        </select>
        <button class="button" type="submit" name="submit" value="submit">محاسبه</button>
    </form>
</div>
<p class="S1">جواب شما</p>
<div class="S1" >
    <?php

    if (isset($_POST['submit'])) {
        $result1 = $_POST['numb1'];
        $result2 = $_POST['numb2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'انتخاب کنید':
                echo "یکی از اعمال را انتخاب کنید";
                break;
            case 'جمع':
                echo $result1 + $result2;
                break;
            case 'تفریق':
                echo $result1 - $result2;
                break;
            case 'ضرب':
                echo $result1 * $result2;
                break;
            case 'تقسیم':
                echo $result1 / $result2;
                break;
            case 'توان 2':
                echo $result1 ** $result2;
                break;
        }
    }


    ?>
</div>
<p class="S12"> است </p>
</div>
</body>
</html>