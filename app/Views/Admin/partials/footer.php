    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; SMK BHS 2025</span>
                <span> | All Rights Reserved</span>
                <br>
                <p>PROJECT BY <a href="#" id="project-by" title="free css templates">Billy Ramdhani</a> </p>
                <div id="programmer-info"
                    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); z-index: 1000; border-radius: 8px;">
                    <h5>Programmer Info</h5>
                    <p>Billy Ramdhani</p>
                    <p>Team Kids</p>
                    <button id="close-info"
                        style="margin-top: 10px; padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 4px;">Close</button>
                </div>
                <div id="overlay"
                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;">
                </div>
                <script>
                document.getElementById('project-by').addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('programmer-info').style.display = 'block';
                    document.getElementById('overlay').style.display = 'block';
                });

                document.getElementById('close-info').addEventListener('click', function() {
                    document.getElementById('programmer-info').style.display = 'none';
                    document.getElementById('overlay').style.display = 'none';
                });

                document.getElementById('overlay').addEventListener('click', function() {
                    document.getElementById('programmer-info').style.display = 'none';
                    document.getElementById('overlay').style.display = 'none';
                });
                </script>
            </div>
        </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('admin/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('admin/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('assets/js/demo/chart-pie-demo.js'); ?>"></script>

    </body>

    </html>