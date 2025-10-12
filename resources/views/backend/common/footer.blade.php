                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Gateway Automation {{ \Carbon\Carbon::now()->year }}</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Bootstrap & Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script>



        <!-- Before </body> -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

        <!-- Bootstrap JS (with Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

        {{-- data table js integration for message table  --}}
        <script>
            $(document).ready(function() {
                $('#messages-table').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    pageLength: 10,
                    lengthMenu: [5, 10, 25, 50],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search messages..."
                    }
                });
            });
        </script>

        {{-- select all functionality for bulk delete --}}
        {{-- <script>
            document.getElementById('select-all').addEventListener('change', function(e) {
                let checkboxes = document.querySelectorAll('input[name="ids[]"]');
                checkboxes.forEach(cb => cb.checked = e.target.checked);
            });
        </script> --}}

        {{-- select all functionality for bulk delete at table footer checkbox --}}
        <script>
            function toggleSelectAll(source) {
                let checkboxes = document.querySelectorAll('input[name="ids[]"]');
                checkboxes.forEach(cb => cb.checked = source.checked);

                // Keep both header and footer checkboxes in sync
                document.getElementById('select-all').checked = source.checked;
                document.getElementById('select-all-footer').checked = source.checked;
            }

            document.getElementById('select-all').addEventListener('change', function() {
                toggleSelectAll(this);
            });

            document.getElementById('select-all-footer').addEventListener('change', function() {
                toggleSelectAll(this);
            });
        </script>


        {{-- clickable table row functionality  --}}
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll("tr[data-href]").forEach(row => {
                    row.addEventListener("click", function () {
                        window.location.href = this.dataset.href;
                    });
                });
            });
        </script>

    </body>
</html>
