
<!DOCTYPE html>
<html>

<head>

    <title>Add Product</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
        }

        .container {
            width: 500px;
            margin: 60px auto;
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            color: #e91e63;
            font-size: 32px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            color: black;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px;
            margin-bottom: 20px;
            border: 2px solid #f48fb1;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #e91e63;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 10px;
        }

        .add-button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #c2185b;
        }

        .back-button {
            background-color: black;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .back-button:hover {
            background-color: #333;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Add Product</h2>

        <form action="<?= site_url('/products/create') ?>" method="POST">

            <label>Product Name</label>

            <input
                type="text"
                name="product_name"
                placeholder="Enter product name"
                required
            >


            <label>Description</label>

            <textarea
                name="description"
                placeholder="Enter product description"
                required
            ></textarea>


            <label>Price</label>

            <input
                type="number"
                name="price"
                step="0.01"
                placeholder="Enter price"
                required
            >


            <label>Quantity</label>

            <input
                type="number"
                name="quantity"
                placeholder="Enter quantity"
                required
            >


            <div class="buttons">

                <a
                    class="back-button"
                    href="<?= site_url('/products') ?>"
                >
                    Back
                </a>

                <button
                    class="add-button"
                    type="submit"
                >
                    Add Product
                </button>

            </div>

        </form>

    </div>

</body>

</html>

