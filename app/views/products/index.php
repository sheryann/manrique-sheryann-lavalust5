<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>

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
            width: 92%;
            margin: 40px auto;
            background-color: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .title h2 {
            margin: 0;
            color: #e91e63;
            font-size: 32px;
        }

        .title p {
            margin-top: 8px;
            color: #555;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .add-button {
            background-color: #e91e63;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .add-button:hover {
            background-color: #c2185b;
        }

        .logout-button {
            background-color: black;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .logout-button:hover {
            background-color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #e91e63;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 13px;
            border: 1px solid #eee;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #fff0f5;
        }

        .edit {
            color: #e91e63;
            font-weight: bold;
            text-decoration: none;
        }

        .delete {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .edit:hover,
        .delete:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div class="title">
                <h2>Product Management</h2>

                <p>
                    Welcome, <strong><?= $username ?></strong>
                </p>
            </div>

            <div class="buttons">

                <a class="add-button"
                   href="<?= site_url('/products/create') ?>">
                    + Add Product
                </a>

                <a class="logout-button"
                   href="<?= site_url('/logout') ?>">
                    Logout
                </a>

            </div>

        </div>

        <table>

            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>

            <?php foreach ($products as $product): ?>

            <tr>

                <td><?= $product['id'] ?></td>

                <td><?= $product['product_name'] ?></td>

                <td><?= $product['description'] ?></td>

                <td><?= $product['price'] ?></td>

                <td><?= $product['quantity'] ?></td>

                <td><?= $product['created_at'] ?></td>

                <td>

                    <a class="edit"
                       href="<?= site_url('/products/edit/' . $product['id']) ?>">
                        Edit
                    </a>

                    |

                    <a class="delete"
                       href="<?= site_url('/products/delete/' . $product['id']) ?>">
                        Delete
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>

</body>
</html>