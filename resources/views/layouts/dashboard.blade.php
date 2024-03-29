<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Minot - Sistem Notulensi Rapat FATISDA UNS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/quill/quill.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!--datatable css-->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!--datatable responsive css-->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/layout.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    @livewireStyles

</head>

<body>
    <div id="layout-wrapper">
        @include('dashboard.layouts.topbar')
        @include('dashboard.layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{-- @yield('content') --}}
                    {{ $slot }}
                </div>
            </div>
            @include('dashboard.layouts.footer')
        </div>
    </div>
    @livewireScripts

    <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/plugins/lord-icon-2.1.0.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/custom.min.js') }}"></script> --}}
    <script src='{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}'></script>
    <script src='{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}'></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/libs/quill/quill.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/js/plugins.min.js') }}"></script> --}}

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>

    {{-- <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script> --}}

    <script src="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-pickers.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    @stack('scripts')

    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateTopik').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteTopik').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditTopik').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditTopik').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateTopik').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteRapat').modal('hide')
        });
    </script>
    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateKategori').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteKategori').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditKategori').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditKategori').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateKategori').modal('show')
        });
    </script>

    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateUnit').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteUnit').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditUnit').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditUnit').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateUnit').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateJabatan').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteJabatan').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditJabatan').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditJabatan').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateJabatan').modal('show')
        });
    </script>
     <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateJabatanPegawai').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteJabatanPegawai').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditJabatanPegawai').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditJabatanPegawai').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateJabatanPegawai').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreatePegawai').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeletePegawai').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditPegawai').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditPegawai').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreatePegawai').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreatePermission').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeletePermission').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditPermission').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditPermission').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreatePermission').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-create-modal', event => {
            $('#modalCreateRole').modal('hide')
        });
        window.addEventListener('close-delete-modal', event => {
            $('#modalDeleteRole').modal('hide')
        });
        window.addEventListener('close-edit-modal', event => {
            $('#modalEditRole').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalEditRole').modal('show')
        });
        window.addEventListener('show-create-modal', event => {
            $('#modalCreateRole').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-edit-modal', event => {
            $('#modalPresensi').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalPresensi').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-edit-modal', event => {
            $('#modalKonfirmasi').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#modalKonfirmasi').modal('show')
        });
    </script>
    <script>
        window.addEventListener('close-create-dokumentasi', event => {
            $('#modalCreateDokumentasi').modal('hide')
        });
        window.addEventListener('close-delete-dokumentasi', event => {
            $('#modalDeleteDokumentasi').modal('hide')
        });
        window.addEventListener('close-edit-dokumentasi', event => {
            $('#modalEditDokumentasi').modal('hide')
        });
        window.addEventListener('show-edit-dokumentasi', event => {
            $('#modalEditDokumentasi').modal('show')
        });
        window.addEventListener('show-create-dokumentasi', event => {
            $('#modalCreateDokumentasi').modal('show')
        });
    </script>

<script>
    window.addEventListener('close-members-modal', event => {
        $('#inviteMembersModal').modal('hide')
    });
</script>
</body>

</html>
