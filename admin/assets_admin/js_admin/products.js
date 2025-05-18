// filepath: c:\xampp\htdocs\web-project-php\admin\assets_admin\js_admin\products.js
function initializeProducts(currentPage, search) {
    var deleteModal = document.getElementById('deleteModal');
    var confirmDeleteBtn = document.getElementById('confirmDelete');
    var productId;

    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        productId = button.getAttribute('data-product-id');
    });

    confirmDeleteBtn.addEventListener('click', function () {
        confirmDeleteBtn.disabled = true;
        confirmDeleteBtn.textContent = 'Đang xóa...';

        fetch('../public/ajax/delete_product.php?id=' + productId, {
            method: 'GET'
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Delete response:', data);
                var modalInstance = bootstrap.Modal.getInstance(deleteModal);
                if (modalInstance) {
                    modalInstance.hide();
                    document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = '';
                } else {
                    console.error('Modal instance not found');
                }

                var alertContainer = document.getElementById('alertContainer');
                alertContainer.innerHTML = `
                <div class="alert alert-${data.success ? 'success' : 'danger'} alert-dismissible fade show" role="alert">
                    ${data.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;

                if (data.success) {
                    var refreshUrl = '/web-project-php/admin/index.php?page=products&p=' + currentPage + (search ? '&search=' + encodeURIComponent(search) : '');
                    console.log('Refreshing table with URL:', refreshUrl);

                    fetch(refreshUrl)
                        .then(response => {
                            console.log('Refresh response status:', response.status);
                            if (!response.ok) {
                                throw new Error('Failed to refresh table: ' + response.status);
                            }
                            return response.text();
                        })
                        .then(html => {
                            console.log('Received HTML length:', html.length);
                            var parser = new DOMParser();
                            var doc = parser.parseFromString(html, 'text/html');

                            var newTableBody = doc.querySelector('#productsTable tbody');
                            var currentTableBody = document.querySelector('#productsTable tbody');
                            if (newTableBody && currentTableBody) {
                                currentTableBody.innerHTML = newTableBody.innerHTML;
                                console.log('Table body updated successfully');
                            } else {
                                console.error('Table body not found - newTableBody:', !!newTableBody, 'currentTableBody:', !!currentTableBody);
                            }

                            var newPagination = doc.querySelector('.pagination');
                            var currentPagination = document.querySelector('.pagination');
                            if (newPagination && currentPagination) {
                                currentPagination.innerHTML = newPagination.innerHTML;
                                console.log('Pagination updated successfully');
                            } else {
                                console.error('Pagination not found - newPagination:', !!newPagination, 'currentPagination:', !!currentPagination);
                            }

                            document.querySelectorAll('.delete-product').forEach(button => {
                                button.addEventListener('click', function () {
                                    productId = this.getAttribute('data-product-id');
                                    var modal = new bootstrap.Modal(deleteModal);
                                    modal.show();
                                });
                            });
                        })
                        .catch(error => {
                            console.error('Error refreshing table:', error);
                            alertContainer.innerHTML += `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Failed to refresh product list: ${error.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                        });
                }
            })
            .catch(error => {
                console.error('Error during delete:', error);
                var modalInstance = bootstrap.Modal.getInstance(deleteModal);
                if (modalInstance) {
                    modalInstance.hide();
                    document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = '';
                }

                var alertContainer = document.getElementById('alertContainer');
                alertContainer.innerHTML = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error deactivating product: ${error.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            })
            .finally(() => {
                confirmDeleteBtn.disabled = false;
                confirmDeleteBtn.textContent = 'Có';
            });

        deleteModal.addEventListener('hidden.bs.modal', function () {
            console.log('Modal closed, checking backdrop');
            if (document.querySelector('.modal-backdrop')) {
                console.warn('Backdrop still present, removing manually');
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                document.body.classList.remove('modal-open');
                document.body.style.overflow = '';
            }
        });
    });
}