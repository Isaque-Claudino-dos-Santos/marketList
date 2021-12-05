<?php
require_once('./apis/function.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Products</title>
</head>
<body>
    <main>
        <div class="title">
            <h1>Register Products</h1>
            <button><a href="/">Goto Home</a></button>
        </div>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"/>
            
            <label for="price">Price</label>
            <input type="text" id="price" name="price"/>

            <select id="category" name="category">
                <option value="" hidden selected>Category</option>
                <option value="drink">Drink</option>
                <option value="vegetable">Vegetable</option>
                <option value="grains">Grains</option>
            </select>
            <button>Register</button>
        </form>
    </main>
</body>
</html>