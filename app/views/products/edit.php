<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #e91e63;
        }

        label {
            font-weight: bold;
            color: black;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #c2185b;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Edit Product</h2>

        <form action="<?= site_url('/products/update/' . $product['id']) ?>" method="POST">

            <label>Product Name:</label>
            <input
                type="text"
                name="product_name"
                value="<?= $product['product_name'] ?>"
                required
            >

            <label>Description:</label>
            <textarea name="description" required><?= $product['description'] ?></textarea>

            <label>Price:</label>
            <input
                type="number"
                name="price"
                step="0.01"
                value="<?= $product['price'] ?>"
                required
            >

            <label>Quantity:</label>
            <input
                type="number"
                name="quantity"
                value="<?= $product['quantity'] ?>"
                required
            >

            <button type="submit">Update Product</button>

        </form>

        <a class="back" href="<?= site_url('/products') ?>">
            ← Back to Products
        </a>

    </div>

</body>
</html>