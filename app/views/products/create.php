<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            background: #f3f4f6;
            color: #1f2937;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 100%;
            max-width: 650px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }

        h1 {
            margin-top: 0;
        }

        .subtitle {
            margin-bottom: 25px;
            color: #6b7280;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-family: inherit;
            font-size: 15px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79,70,229,.15);
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 11px 17px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: white;
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }

        .cancel {
            background: #64748b;
        }

        @media (max-width: 600px) {
            .row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <main class="card">
        <h1>Add Product</h1>

        <p class="subtitle">
            Enter the information of the new product.
        </p>

        <form
            method="POST"
            action="<?= site_url('products/store') ?>"
        >
            <div class="form-group">
                <label for="product_name">Product Name</label>

                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description</label>

                <textarea
                    id="description"
                    name="description"
                    required
                ></textarea>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="price">Price</label>

                    <input
                        type="number"
                        id="price"
                        name="price"
                        min="0"
                        step="0.01"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>

                    <input
                        type="number"
                        id="quantity"
                        name="quantity"
                        min="0"
                        step="1"
                        required
                    >
                </div>
            </div>

            <div class="actions">
                <button class="btn" type="submit">
                    Save Product
                </button>

                <a
                    class="btn cancel"
                    href="<?= site_url('products') ?>"
                >
                    Cancel
                </a>
            </div>
        </form>
    </main>
</body>
</html>