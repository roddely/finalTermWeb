<div class="d-flex">

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="bg-white border-bottom p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="search-bar">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control bg-light border-start-0" placeholder="Search...">
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light position-relative">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    <button class="btn btn-light position-relative">
                        <i class="bi bi-chat"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">5</span>
                    </button>
                    <div class="dropdown">
                        <button class="btn d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" class="avatar" alt="Admin">
                            <div class="d-none d-md-block text-start">
                                <div class="fw-bold">Alex Johnson</div>
                                <div class="small text-muted">Admin</div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="p-4">
            <!-- Stats Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="card border-top border-4 border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="text-muted">Total Revenue</div>
                                    <h3 class="mb-0">$891,234.78</h3>
                                    <div class="small text-success">
                                        <i class="bi bi-arrow-up"></i> 8.2% vs last month
                                    </div>
                                </div>
                                <div class="stat-icon bg-primary-subtle">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-top border-4 border-success">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="text-muted">Total Orders</div>
                                    <h3 class="mb-0">13,849</h3>
                                    <div class="small text-success">
                                        <i class="bi bi-arrow-up"></i> 5.7% vs last month
                                    </div>
                                </div>
                                <div class="stat-icon bg-success-subtle">
                                    <i class="bi bi-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-top border-4 border-info">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="text-muted">Total Customers</div>
                                    <h3 class="mb-0">9,721</h3>
                                    <div class="small text-success">
                                        <i class="bi bi-arrow-up"></i> 12.3% vs last month
                                    </div>
                                </div>
                                <div class="stat-icon bg-info-subtle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-top border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="text-muted">Average Order</div>
                                    <h3 class="mb-0">$64.35</h3>
                                    <div class="small text-danger">
                                        <i class="bi bi-arrow-down"></i> 2.4% vs last month
                                    </div>
                                </div>
                                <div class="stat-icon bg-warning-subtle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Revenue Overview</h5>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-secondary">Weekly</button>
                                    <button class="btn btn-sm btn-outline-secondary active">Monthly</button>
                                    <button class="btn btn-sm btn-outline-secondary">Yearly</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Customer Distribution</h5>
                        </div>
                        <div class="card-body">
                            <div class="map-placeholder"></div>
                            <div class="row text-center mt-4">
                                <div class="col-3">
                                    <div class="text-muted small">USA</div>
                                    <div class="fw-bold">42%</div>
                                </div>
                                <div class="col-3">
                                    <div class="text-muted small">Europe</div>
                                    <div class="fw-bold">27%</div>
                                </div>
                                <div class="col-3">
                                    <div class="text-muted small">Asia</div>
                                    <div class="fw-bold">18%</div>
                                </div>
                                <div class="col-3">
                                    <div class="text-muted small">Other</div>
                                    <div class="fw-bold">13%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tables Section -->
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Orders</h5>
                                <a href="orders.html" class="btn btn-link">View All</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#43261</td>
                                        <td>Emma Thompson</td>
                                        <td>Oct 2, 2025</td>
                                        <td>$320.50</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td><button class="btn btn-sm btn-light">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#43260</td>
                                        <td>Michael Chen</td>
                                        <td>Oct 2, 2025</td>
                                        <td>$149.99</td>
                                        <td><span class="badge bg-primary">Processing</span></td>
                                        <td><button class="btn btn-sm btn-light">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#43259</td>
                                        <td>Sophia Rodriguez</td>
                                        <td>Oct 1, 2025</td>
                                        <td>$79.95</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td><button class="btn btn-sm btn-light">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#43258</td>
                                        <td>James Wilson</td>
                                        <td>Oct 1, 2025</td>
                                        <td>$249.99</td>
                                        <td><span class="badge bg-danger">Failed</span></td>
                                        <td><button class="btn btn-sm btn-light">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Best Selling Products</h5>
                                <a href="products.html" class="btn btn-link">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg" class="product-img" alt="Headphones">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Premium Wireless Headphones</h6>
                                            <div class="text-muted small">$249.99</div>
                                        </div>
                                        <div class="text-end">
                                            <div>843 sold</div>
                                            <div class="text-success small">156 in stock</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg" class="product-img" alt="Smart Watch">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Smart Watch Series 5</h6>
                                            <div class="text-muted small">$299.99</div>
                                        </div>
                                        <div class="text-end">
                                            <div>721 sold</div>
                                            <div class="text-success small">89 in stock</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://images.pexels.com/photos/6976094/pexels-photo-6976094.jpeg" class="product-img" alt="TV">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">Ultra HD 4K TV 55"</h6>
                                            <div class="text-muted small">$699.99</div>
                                        </div>
                                        <div class="text-end">
                                            <div>654 sold</div>
                                            <div class="text-warning small">42 in stock</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../assets_admin/js_admin/home.js"></script>