
            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © {{ date('Y') }} <a href="https://gatewayautomations.com/" target="_blank">Gatewayautomations.com</a> All rights reserved
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER CLOSED -->

        </div>
        <!-- page -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- SIDE-MENU JS -->
        <script src="{{ asset('backend/assets/plugins/sidemenu/sidemenu.js') }}"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/p-scroll/pscroll.js') }}"></script>

        <!-- STICKY JS -->
        <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>

        
        <!-- APEXCHART JS -->
        <script src="{{ asset('backend/assets/js/apexcharts.js') }}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('backend/assets/plugins/select2/select2.full.min.js') }}"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('backend/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

        <!-- INTERNAL DATA-TABLES JS-->
        <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/jszip.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('backend/assets/js/table-data.js') }}"></script>

        <!-- Bootstrap-Date Range Picker js-->
		<script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

		<!-- bootstrap-datepicker js (Date picker Style-01) -->
		<script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/js/datepicker.js') }}"></script>

		<!-- Amaze UI Date Picker js-->
		<script src="{{ asset('backend/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>

		<!-- Simple Date Time Picker js-->
		<script src="{{ asset('backend/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>

		<!-- BOOTSTRAP MAX-LENGTH JS -->
		<script src="{{ asset('backend/assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js') }}"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="{{ asset('backend/assets/js/formelementadvnced.js') }}"></script>

        <!--Internal Fileuploads js-->
		<script src="{{ asset('backend/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

        <!--Internal Fancy uploader js-->
		<script src="{{ asset('backend/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
		<script src="{{ asset('backend/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

        <!-- INDEX JS -->
        <script src="{{ asset('backend/assets/js/index1.js') }}"></script>
        <script src="{{ asset('backend/assets/js/index.js') }}"></script>

        <!-- Reply JS-->
		<script src="{{ asset('backend/assets/js/reply.js') }}"></script>

        
        <!-- COLOR THEME JS -->
        <script src="{{ asset('backend/assets/js/themeColors.js') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

        <!-- SWITCHER JS -->
        <script src="{{ asset('backend/assets/switcher/js/switcher.js') }}"></script>

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
				const rows = document.querySelectorAll("tr[data-href]");

				rows.forEach(row => {
					row.addEventListener("click", function (e) {
						// Check if the click is inside the first column (checkbox column)
						if (e.target.closest("td:first-child")) {
							// Clicked in the first column → do nothing
							return;
						}

						// Otherwise, redirect to the row's data-href
						window.location.href = this.dataset.href;
					});
				});
			});
		</script>

      
        <!-- ABOUT US PAGE ER MULTIPLE CARD ADD ER JONNO  -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const wrapper = document.getElementById('cards-wrapper');
                const addBtn = document.getElementById('add-card-btn');

                // Add new card
                addBtn.addEventListener('click', function() {
                    const index = wrapper.querySelectorAll('.about-card-item').length + 1;

                    const card = document.createElement('div');
                    card.classList.add('about-card-item', 'my-4', 'p-3');
                    card.style.border = '1px solid rgb(68, 68, 68)';
                    card.style.position = 'relative';

                    card.innerHTML = `
                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 remove-card-btn">&times;</button>

                        <div class="form-group mb-3">
                            <label for="logo_${index}" class="form-label fw-semibold">Card logo</label>
                            <input type="text" class="form-control w-100" maxlength="250" name="logo[]" id="logo_${index}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="heading_${index}" class="form-label fw-semibold">Card heading</label>
                            <input type="text" class="form-control w-100" maxlength="250" name="heading[]" id="heading_${index}">
                        </div>

                        <div class="form-group mb-2">
                            <label for="text_${index}" class="form-label fw-semibold">Card text</label>
                            <textarea class="form-control w-100" maxlength="500" rows="2" name="text[]" id="text_${index}"></textarea>
                        </div>
                    `;

                    wrapper.appendChild(card);
                    updateRemoveButtons();
                });

                // Remove card
                wrapper.addEventListener('click', function(e) {
                    if (e.target.classList.contains('remove-card-btn')) {
                        e.target.closest('.about-card-item').remove();
                        updateRemoveButtons();
                    }
                });

                // Show/hide remove buttons
                function updateRemoveButtons() {
                    const cards = wrapper.querySelectorAll('.about-card-item');
                    cards.forEach(card => {
                        const removeBtn = card.querySelector('.remove-card-btn');
                        removeBtn.style.display = (cards.length > 1) ? 'block' : 'none';
                    });
                }

                updateRemoveButtons();
            });
        </script>

    </body>


<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:08:40 GMT -->
</html>
