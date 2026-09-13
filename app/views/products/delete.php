<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
        }

        .container {
            width: 450px;
            margin: 100px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            color: #e91e63;
        }

        .warning {
            color: black;
            margin-bottom: 25px;
        }

        .product-info {
            text-align: left;
            background-color: #fff0f5;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .product-info p {
            margin: 8px 0;
        }

        .delete-button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .delete-button:hover {
            background-color: #c2185b;
        }

        .cancel {
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Delete Product</h2>

        <p class="warning">
            Are you sure you want to delete this product?
        </p>

        <div class="product-info">

            <p>
                <strong>Product Name:</strong>
                <?= $product['product_name'] ?>
            </p>

            <p>
                <strong>Description:</strong>
                <?= $product['description'] ?>
            </p>

            <p>
                <strong>Price:</strong>
                <?= $product['price'] ?>
            </p>

            <p>
                <strong>Quantity:</strong>
                <?= $product['quantity'] ?>
            </p>

        </div>

        <form
            action="<?= site_url('/products/destroy/' . $product['id']) ?>"
            method="POST"
        >

            <button class="delete-button" type="submit">
                Yes, Delete
            </button>

            <a class="cancel" href="<?= site_url('/products') ?>">
                Cancel
            </a>

        </form>

    </div>

</body>
</html>