<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>

    <!-- Font Awesome for Input & Profile Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #e5e5e5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-card {
            width: 360px;
            background: #ffffff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            position: relative;
        }

        /* Top & Bottom Geometric Background Graphics */
        .card-header-bg {
            position: relative;
            width: 100%;
            height: 140px;
            background: linear-gradient(135deg, #1b5e20, #2e7d32, #43a047);
            clip-path: polygon(0 0, 100% 0, 100% 40%, 80% 100%, 20% 100%, 0 40%);
        }

        .card-footer-bg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 110px;
            background: linear-gradient(135deg, #1b5e20, #2e7d32, #43a047);
            clip-path: polygon(0 60%, 20% 0, 80% 0, 100% 60%, 100% 100%, 0 100%);
            z-index: 1;
        }

        /* User Avatar Circle */
        .avatar-container {
            width: 90px;
            height: 90px;
            background: #333333;
            border-radius: 50%;
            position: absolute;
            top: 25px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            border: 4px solid #ffffff;
            z-index: 2;
        }

        .avatar-container i {
            color: #ffffff;
            font-size: 50px;
        }

        /* Form Body Container */
        .login-body {
            padding: 30px 35px 90px 35px;
            position: relative;
            z-index: 2;
        }

        h1 {
            text-align: center;
            color: #2e7d32;
            font-size: 26px;
            font-weight: 900;
            margin: 10px 0 25px 0;
            letter-spacing: 1px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            color: #333333;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            background: #e0e0e0;
            border-radius: 12px;
            overflow: hidden;
        }

        .input-icon {
            background: #2e7d32;
            color: white;
            padding: 10px 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .input-wrapper input {
            border: none;
            background: transparent;
            padding: 10px;
            width: 100%;
            outline: none;
            font-size: 14px;
            color: #333;
        }

        /* Options Row (Remember me / Forgot password) */
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #333333;
            margin: 15px 0 25px 0;
            font-weight: 500;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .remember-me input {
            cursor: pointer;
        }

        .forgot-link {
            color: #333333;
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 20px;
            background: #2e7d32;
            color: white;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background: #1b5e20;
        }

        /* Error Box */
        .error {
            padding: 10px;
            background: #fee2e2;
            color: #991b1b;
            border-radius: 7px;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <!-- Top Graphic Header -->
        <div class="card-header-bg"></div>
        
        <!-- User Avatar Icon -->
        <div class="avatar-container">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="login-body">
            <h1>FORM LOGIN</h1>

            <?php if (!empty($error)): ?>
                <div class="error">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?= site_url('login') ?>">
                <!-- Username Field -->
                <div class="input-group">
                    <label for="username">User Name</label>
                    <div class="input-wrapper">
                        <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="username" name="username" required>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>

                <!-- Options Row -->
                <div class="options-row">
                    <label class="remember-me">
                        <input type="checkbox" name="remember_me">
                        Remember me
                    </label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">LOGIN</button>
            </form>
        </div>

        <!-- Bottom Graphic Footer -->
        <div class="card-footer-bg"></div>
    </div>

</body>
</html>