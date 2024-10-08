
<div class="div-spacing"></div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="card font-size-modulo shadow-lg">
            <div style="background:#235B4E" class="card-header d-flex justify-content-between align-items-center">
                <h5 class="text-center background-modal color-text-tittle mb-0">Domicilio</h5>
                <button style="background:#235B4E;border: none" onclick="addDomiclio()" type="button" class="btn btn-light" 
                    aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Agregar nuevo domicilio">
                    <i style="color:white" class="fa fa-plus icono-pequeno-tabla"></i>
                    <span class="hide-menu text-button-add"></span>
                </button>
            </div>
            <div class="card-body">
                <?php include 'Domicilio/DomicilioP.php'; ?>
                <?php include 'Domicilio/AgregarDomicilio.php'; ?>
            </div>
        </div>
        <!--
        <div class="card font-size-modulo shadow-lg">
            <h5 class="card-header text-center background-modal color-text-tittle">Domicilio</h5>
            <button onclick="agregarEditarFalta(null)" type="button" class="btn btn-light card-header" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus icono-pequeno-tabla"></i>
                <span class="hide-menu text-button-add"></span>
            </button>
            <div class="card-body">
                <?php //include 'Domicilio/DomicilioP.php' ?>
            </div>
        </div>
-->
    </div>
    <div class="col-12 col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="card font-size-modulo shadow-lg">
            <h5 class="card-header text-center background-modal color-text-tittle">Forma de pago</h5>
            <div class="card-body">
                <?php include 'FormaPago/index.php' ?>
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <!--
    <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
        <div class="card font-size-modulo shadow-lg">
            <h5 class="card-header text-center background-modal color-text-tittle">Jefe inmediato</h5>
            <div class="card-body">
                <?php //include 'Jefe/index.php' ?>
            </div>
        </div>
    </div>
-->
    <div class="col-12 col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="card font-size-modulo shadow-lg">
            <h5 class="card-header text-center background-modal color-text-tittle">Capacidades diferentes</h5>
            <div class="card-body">
                <?php include 'CapacidadesDif/index.php' ?>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="card font-size-modulo shadow-lg">
            <h5 class="card-header text-center background-modal color-text-tittle">Lengua materna</h5>
            <div class="card-body">
                <?php include 'Lengua/index.php' ?>
            </div>
        </div>
    </div>
</div>