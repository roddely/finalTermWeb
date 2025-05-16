<div class="d-flex">

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="bg-white border-bottom p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="search-bar">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control bg-light border-start-0"
                            placeholder="Search orders...">
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light position-relative">
                        <i class="bi bi-bell"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    <div class="dropdown">
                        <button class="btn d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg"
                                class="avatar" alt="Admin">
                            <div class="d-none d-md-block text-start">
                                <div class="fw-bold">Alex Johnson</div>
                                <div class="small text-muted">Admin</div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Orders Content -->
        <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Orders</h2>
                <div class="d-flex gap-2">
                    <select class="form-select">
                        <option>All Orders</option>
                        <option>Pending</option>
                        <option>Processing</option>
                        <option>Completed</option>
                        <option>Cancelled</option>
                    </select>
                    <button class="btn btn-primary">
                        <i class="bi bi-download me-2"></i>Export
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Products</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD43261</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg"
                                                alt="Customer" class="avatar me-2">
                                            <div>
                                                <h6 class="mb-0">Emma Thompson</h6>
                                                <small class="text-muted">emma.t@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 items</td>
                                    <td>Oct 2, 2025</td>
                                    <td>$320.50</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-light me-2"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-light"><i class="bi bi-printer"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD43260</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg"
                                                alt="Customer" class="avatar me-2">
                                            <div>
                                                <h6 class="mb-0">Michael Chen</h6>
                                                <small class="text-muted">m.chen@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1 item</td>
                                    <td>Oct 2, 2025</td>
                                    <td>$149.99</td>
                                    <td><span class="badge bg-primary">Processing</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-light me-2"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-light"><i class="bi bi-printer"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD43259</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg"
                                                alt="Customer" class="avatar me-2">
                                            <div>
                                                <h6 class="mb-0">Sophia Rodriguez</h6>
                                                <small class="text-muted">s.rodriguez@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>3 items</td>
                                    <td>Oct 1, 2025</td>
                                    <td>$79.95</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-light me-2"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-light"><i class="bi bi-printer"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>