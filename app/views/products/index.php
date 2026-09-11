<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supply Chain Management - Product Management</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #eef2f5;
            color: #333333;
        }

        /* Top Green Navigation Header */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 28px;
            background: #4cb050;
            color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        nav h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .user-nav-info {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 14px;
            color: #e8f5e9;
        }

        /* Container Layout */
        .container {
            width: 95%;
            max-width: 1300px;
            margin: 20px auto;
        }

        /* Top Filter Controls Row */
        .filter-bar {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .filter-group label {
            font-size: 12px;
            font-weight: bold;
            color: #555;
        }

        .filter-group select, .filter-group input {
            padding: 8px 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background: white;
            font-size: 13px;
            color: #333;
            outline: none;
        }

        /* KPI Dashboard Stats Cards */
        .kpi-row {
            display: flex;
            gap: 18px;
            margin-bottom: 25px;
        }

        .kpi-card {
            background: white;
            border-radius: 8px;
            padding: 18px 22px;
            flex: 1;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .kpi-stat {
            display: flex;
            flex-direction: column;
        }

        .kpi-stat .value {
            font-size: 24px;
            font-weight: 800;
            color: #4cb050;
        }

        .kpi-stat .label {
            font-size: 12px;
            color: #6b7280;
            font-weight: 600;
            margin-top: 2px;
        }

        .kpi-divider {
            width: 1px;
            height: 40px;
            background: #e5e7eb;
        }

        /* Header Title & Add Button */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 20px;
            color: #1f2937;
        }

        .page-header p {
            margin: 3px 0 0;
            font-size: 13px;
            color: #6b7280;
        }

        /* Table Card Container */
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }

        .card-header {
            padding: 14px 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h3 {
            margin: 0;
            font-size: 15px;
            color: #4cb050;
            font-weight: 700;
        }

        /* Table Styling matching image */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: #ffffff;
            color: #6b7280;
            font-size: 12px;
            font-weight: 700;
            padding: 14px 20px;
            border-bottom: 1px solid #e5e7eb;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 20px;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
            color: #374151;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f9fafb;
        }

        /* Buttons Styling */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn:hover {
            opacity: 0.88;
        }

        .btn-add {
            background: #4cb050;
            color: white;
        }

        .btn-edit {
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid #bfdbfe;
        }

        .btn-delete {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .btn-logout {
            background: #388e3c;
            color: white;
            padding: 6px 12px;
            font-size: 12px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .actions form {
            margin: 0;
        }

        /* Stock Quantity Trend Badges */
        .badge-qty {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-weight: 600;
        }

        .badge-icon-up {
            color: #4cb050;
            font-weight: bold;
        }

        .badge-icon-down {
            color: #ef4444;
            font-weight: bold;
        }

        /* Alert Messages */
        .alert {
            margin-bottom: 18px;
            padding: 12px 16px;
            border-radius: 6px;
            font-size: 14px;
        }

        .success {
            background: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }

        .error {
            background: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }

        .empty {
            padding: 40px;
            text-align: center;
            color: #9ca3af;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Header / Navbar -->
    <nav>
        <h2>Supply chain management system</h2>

        <div class="user-nav-info">
            <span>Welcome, <strong><?= htmlspecialchars($username ?? 'User') ?></strong></span>
            <a class="btn btn-logout" href="<?= site_url('logout') ?>">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div>
    </nav>

    <main class="container">

        <!-- Top Filter Dropdowns -->
        <div class="filter-bar">
            <div class="filter-group">
                <label>Warehouse</label>
                <select>
                    <option>All</option>
                    <option>Warehouse 1</option>
                    <option>Warehouse 2</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Date</label>
                <input type="text" value="22 May 2026 - 22 June 2026" readonly>
            </div>
        </div>

        <!-- Dashboard Stat Cards / KPI Header Overview -->
        <section class="kpi-row">
            <div class="kpi-card">
                <div class="kpi-stat">
                    <span class="value">6.67%</span>
                    <span class="label">Stockout Rate</span>
                </div>
                <div class="kpi-divider"></div>
                <div class="kpi-stat">
                    <span class="value" style="font-size: 18px; color:#333;">1</span>
                    <span class="label">Out of Stock Products</span>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-stat">
                    <span class="value">2.17%</span>
                    <span class="label">Return Rate</span>
                </div>
                <div class="kpi-divider"></div>
                <div class="kpi-stat">
                    <span class="value" style="font-size: 18px; color:#333;">124</span>
                    <span class="label">Returned Units</span>
                </div>
            </div>

            <div class="kpi-card">
                <div class="kpi-stat">
                    <span class="value">1.11%</span>
                    <span class="label">Backorder Rate</span>
                </div>
                <div class="kpi-divider"></div>
                <div class="kpi-stat">
                    <span class="value" style="font-size: 18px; color:#333;">5,717</span>
                    <span class="label">Ordered Units</span>
                </div>
            </div>
        </section>

        <!-- Dynamic Header & Add Action -->
        <div class="page-header">
            <div>
                <h1>Products Inventory</h1>
                <p>Manage and monitor available warehouse stock.</p>
            </div>

            <a class="btn btn-add" href="<?= site_url('products/create') ?>">
                <i class="fa-solid fa-plus"></i> Add Product
            </a>
        </div>

        <!-- Feedback Alert Messages -->
        <?php if (!empty($success)): ?>
            <div class="alert success">
                <?= htmlspecialchars($success) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert error">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <!-- Product Table Card -->
        <section class="card">
            <div class="card-header">
                <h3>Product Stock Details</h3>
            </div>

            <?php if (empty($products)): ?>
                <div class="empty">
                    No products found in inventory.
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity (In Hand)</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><strong>#<?= (int) $product['id'] ?></strong></td>

                                <td>
                                    <strong><?= htmlspecialchars($product['product_name']) ?></strong>
                                </td>

                                <td style="color: #6b7280;">
                                    <?= htmlspecialchars($product['description']) ?>
                                </td>

                                <td>
                                    <strong>₱<?= number_format((float) $product['price'], 2) ?></strong>
                                </td>

                                <td>
                                    <div class="badge-qty">
                                        <span><?= (int) $product['quantity'] ?></span>
                                        <?php if ((int)$product['quantity'] > 20): ?>
                                            <i class="fa-solid fa-arrow-up badge-icon-up"></i>
                                        <?php else: ?>
                                            <i class="fa-solid fa-arrow-down badge-icon-down"></i>
                                        <?php endif; ?>
                                    </div>
                                </td>

                                <td style="color: #6b7280;">
                                    <?= htmlspecialchars($product['created_at']) ?>
                                </td>

                                <td>
                                    <div class="actions">
                                        <a class="btn btn-edit" href="<?= site_url('products/edit/' . $product['id']) ?>">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </a>

                                        <form method="POST" action="<?= site_url('products/delete/' . $product['id']) ?>" onsubmit="return confirm('Delete this product?');">
                                            <button class="btn btn-delete" type="submit">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>

</body>
</html>