@include('layout.header')

@include('layout.sidebar')

    <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">

    <section>

        @include('layout.sidebar')

        <div class="main-content">

            @include('layout.navbar')

            <div class="page-content" id="div_principal">
                <div class="header">
                    <h2>Administrar <strong>Inventarios</strong></h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="dashboard.html">ESCALA</a>
                            </li>
                            <li><a href="tables.html">Empresas</a>
                            </li>
                            <li class="active">Inventarios</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="panel">
                                <div class="panel-header">
                                    <h3><i class="fa fa-cogs"></i> <strong>Elegir </strong> parámetros</h3>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Selecciona el proveedor</label>
                                            <select id="selectProveedor" class="form-control">
                                                <option value="default">--Todos--</option>
                                                <option value="Proveedor 1">Proveedor 1</option>
                                                <option value="Proveedor 2">Proveedor 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pos-rel">
                                                <label class="form-label">Color</label>
                                                <input type="text" id="inputColor" class="color-picker form-control" data-color="#18A689">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Rango de fechas</label>
                                                <div class="input-daterange b-datepicker input-group" id="datepicker">
                                                    <input type="text" id="inputFechaInicio" class="input-sm form-control" name="start" placeholder="Inicio..."/>
                                                    <span class="input-group-addon">a</span>
                                                    <input type="text" id="inputFechaFin" class="input-sm form-control" name="end" placeholder="Fin..."/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pos-rel" style="text-align:end;margin-top:30px;">
                                                <button class="btn btn-dark" id="btnAgregarTabla">
                                                    Agregar tabla
                                                </button>
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

        @include('layout.sidebar')

    </section>

    @include('layout.quickview')

    @include('layout.search')

    <div class="loader-overlay">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

        <script src="../assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
        <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
        <script src="../assets/global/plugins/tether/js/tether.min.js"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/global/plugins/appear/jquery.appear.js"></script>
        <script src="../assets/global/plugins/jquery-cookies/jquery.cookies.min.js"></script>
        <script src="../assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js"></script>
        <script src="../assets/global/plugins/bootbox/bootbox.min.js"></script>
        <script src="../assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
        <script src="../assets/global/plugins/charts-sparkline/sparkline.min.js"></script>
        <script src="../assets/global/plugins/retina/retina.min.js"></script>
        <script src="../assets/global/plugins/select2/dist/js/select2.full.min.js"></script>
        <script src="../assets/global/plugins/icheck/icheck.min.js"></script>
        <script src="../assets/global/plugins/backstretch/backstretch.min.js"></script>
        <script src="../assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../assets/global/plugins/charts-chartjs/Chart.min.js"></script>
        <script src="../assets/global/js/builder.js"></script>
        <script src="../assets/global/js/sidebar_hover.js"></script>
        <script src="../assets/global/js/application.js"></script>
        <script src="../assets/global/js/plugins.js"></script>
        <script src="../assets/global/js/widgets/notes.js"></script>
        <script src="../assets/global/js/quickview.js"></script>
        <script src="../assets/global/js/pages/search.js"></script>

        <script src="../assets/global/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/global/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="../assets/global/js/pages/table_dynamic.js"></script>

    <script src="../assets/global/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
    <script src="../assets/global/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
    <script src="../assets/global/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
    <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <!-- >Bootstrap Date Picker -->
    <script src="../assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
    <script src="../assets/global/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
    <script src="../assets/global/plugins/rateit/jquery.rateit.min.js"></script> <!-- Rating star plugin -->
    <script src="../assets/global/js/pages/form_plugins.js"></script>

        @section('js')
        @show

        <script src="../assets/admin/layout1/js/layout.js"></script>

        <script>
            var cont = 0;
            $('#btnAgregarTabla').click(function ()
            {
                let cadena_titulo_tabla = '<h3><i class="fa fa-table"></i> <strong>Tabla inventario</strong> opciones <small>';
                cadena_titulo_tabla += ( $('#selectProveedor').val() != 'default' ? 'Proveedor ' + $('#selectProveedor').val() : 'Cualquier proveedor' )
                                    + ' ' + ( $('#inputFechaInicio').val() != '' ? 'De ' + $('#inputFechaInicio').val() + ' a ' + $('#inputFechaFin').val() : '' );
                cadena_titulo_tabla += '</small></h3>';

                console.log(cadena_titulo_tabla);

var conten="{!! $contenido !!}";
console.log(conten);
$('#div_principal').append('<div class="row"><div class="col-lg-12 portlets"><div class="panel"><div class="panel-header panel-controls tabla'+cont+'" '+($('#inputColor').val() != '' ? 'style="background:'+$('#inputColor').val()+'"' : '')+'>'+
                    cadena_titulo_tabla+
                    '</div>' +
                    '<div class="panel-content"> <div class="filter-left">' +
                    ' <table id="tabla'+cont+'" class="table table-dynamic table-tools" data-table-name="Total users">'+
                    "<thead> <tr>" +
                    " <th>Nombre</th>" +
                    " <th>Descripcion</th>" +
                    " <th class='hidden-350'>Codigo</th>" +
                    " <th class='hidden-1024'>Fecha</th> " +
                    "<th class='hidden-480'>Acciones</th>"+
                    "</tr> </thead> <tbody>" +
                    conten+
                    "</table>" +
                    " </div> </div> " +
                    "</div> </div> " +
                    "</div>");

                var oTable = $('#tabla'+cont+'').dataTable({
                    "aoColumnDefs": [{
                        "bSortable": false,
                        "aTargets": [0]
                    }],
                    "aaSorting": [
                        [1, 'asc']
                    ],
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
                    },
                    'buttons' : [
                        {
                            extend: 'excelHtml5',
                            title: $(this).data('table-name') || "Your custom name",
                            className: 'btn btn-default'
                        },
                        {
                            extend: 'pdfHtml5',
                                title: $(this).data('table-name') || "Your custom name",
                            className: 'btn btn-default'
                        },
                        {
                            extend: 'csvHtml5',
                                title: $(this).data('table-name') || "Your custom name",
                            className: 'btn btn-default'
                        },
                        {
                            extend: 'copyHtml5',
                                className: 'btn btn-default'
                        }
                    ]
                });


                    $('.panel-controls.tabla'+cont+'').each(function() {
                        var controls_html = '<div class="control-btn">' + '<a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>' + '<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">' + '<i class="icon-settings"></i>' + '</a>' + '<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">' + '<li><a href="#">Action</a>' + '</li>' + '<li><a href="#">Another action</a>' + '</li>' + '<li><a href="#">Something else here</a>' + '</li>' + '</ul>' + '<a href="#" class="panel-popout hidden tt" title="Pop Out/In"><i class="icons-office-58"></i></a>' + '<a href="#" class="panel-maximize hidden"><i class="icon-size-fullscreen"></i></a>' + '<a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>' + '<a href="#" class="panel-close"><i class="icon-trash"></i></a>' + '</div>';
                        $(this).append(controls_html);
                    });
                    $('.md-panel-controls').each(function() {
                        var controls_html = '<div class="control-btn">' + '<a href="#" class="panel-reload hidden"><i class="mdi-av-replay"></i></a>' + '<a class="hidden" id="dropdownMenu1" data-toggle="dropdown">' + '<i class="mdi-action-settings"></i>' + '</a>' + '<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">' + '<li><a href="#">Action</a>' + '</li>' + '<li><a href="#">Another action</a>' + '</li>' + '<li><a href="#">Something else here</a>' + '</li>' + '</ul>' + '<a href="#" class="panel-popout hidden tt" title="Pop Out/In"><i class="mdi-action-open-in-browser"></i></a>' + '<a href="#" class="panel-maximize hidden"><i class="mdi-action-launch"></i></a>' + '<a href="#" class="panel-toggle"><i class="mdi-navigation-expand-more"></i></a>' + '<a href="#" class="panel-close"><i class="mdi-action-delete"></i></a>' + '</div>';
                        $(this).append(controls_html);
                    });
                // Remove Panel


                cont++;
            });

        </script>
    </body>
</html>

