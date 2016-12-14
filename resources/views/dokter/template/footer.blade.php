    <!-- Javascript source -->
    <script src="{{ URL::asset('assets/dashboard/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-notify.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/paper-dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dashboard/js/jquery-confirm.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-*.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // Submit confirm
            $('.btn-confirm-d').on('click', function (event) {
            event.preventDefault();
            
                $.confirm({
                
                    title: 'Simpan!',
                    content: 'Data yang telah anda masukkan tidak dapat diubah. Periksa data terlebih dahulu',
                    buttons: {
                        confirm: {
                            btnClass: 'btn-primary z-depth-0',
                            text: 'Simpan',
                            keys: ['enter'],
                            action: function () {
                                $('.form-tambah-d').submit();
                            }
                        },
                        cancel: {
                            btnClass: 'z-depth-0 btn-muted',
                            text: 'Batal',
                            action: function () {
                                $.alert('Periksa data kembali');
                            }
                        }
                    }
                });
            
            });

            // Submit confirm
            $('.btn-confirm-r').on('click', function (event) {
            event.preventDefault();
            
                $.confirm({
                
                    title: 'Simpan!',
                    content: 'Data yang telah anda masukkan tidak dapat diubah. Periksa data terlebih dahulu',
                    buttons: {
                        confirm: {
                            btnClass: 'btn-primary z-depth-0',
                            text: 'Simpan',
                            keys: ['enter'],
                            action: function () {
                                $('.form-tambah-r').submit();
                            }
                        },
                        cancel: {
                            btnClass: 'z-depth-0 btn-muted',
                            text: 'Batal',
                            action: function () {
                                $.alert('Periksa data kembali');
                            }
                        }
                    }
                });
            
            });

            // Ketika klik selesai
            $('button.btn-selesai').confirm({

                content: 'Selesai menambahkan data?',
                buttons: {
                    Ok: {
                        btnClass: 'btn-success btn-fill',
                        text: 'Ok',
                        keys: ['enter'],
                        action: function () {
                            location.href = this.$target.attr('href');
                        }
                    },
                    Batal: {
                        btnClass: 'btn-fill btn-default ',
                        text: 'Batal',
                    }
                }
            });
        });
    </script>
</body>
</html>