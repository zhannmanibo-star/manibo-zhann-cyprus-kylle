<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
        }

        .login-container {
            width: 380px;
            margin: 100px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,.1);
        }

        h1 {
            text-align: center;
            color: #1f2937;
        }

        label {
            display: block;
            margin: 15px 0 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 11px;
            box-sizing: border-box;
            border: 1px solid #d1d5db;
            border-radius: 7px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #4f46e5;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .error {
            padding: 10px;
            background: #fee2e2;
            color: #991b1b;
            border-radius: 7px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Product Login</h1>

        <?php if (!empty($error)): ?>
            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= site_url('login') ?>">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>