<?php

$tiendas = [
    [
        "nombre" => "Abarrotes López",
        "rfc" => "ABC123",
        "activa" => true
    ],
    [
        "nombre" => "Taqueria Don Felipe",
        "rfc" => "DEF456",
        "activa" => false
    ],
    [
        "nombre" => "Farmacia para tontos",
        "rfc" => "GHI789",
        "activa" => true
    ]
];
$i=0;

?>
<div class="pb-2 mb-0">
    <div class="d-flex justify-content-between">
        <h1 class="tipoLetra fw-bold pb-2 fs-4">Tiendas</h1>
        <!--Boton agregar-->
        <div class = "ms-auto">
            <button onclick="window.miModal.showModal();" class="boton-azul-hover btn bg-primary me-2 text-white" type = "submit"">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF" class="icon icon-tabler icons-tabler-filled icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 4a1 1 0 0 1 1 1v6h6a1 1 0 0 1 0 2h-6v6a1 1 0 0 1 -2 0v-6h-6a1 1 0 0 1 0 -2h6v-6a1 1 0 0 1 1 -1" /></svg>
                Nueva tienda
            </button>
            <dialog id = "miModal" class = "border rounded border-primary p-4">
                <h3>
                    Nueva tienda
                </h3>
                <div class = "form-floating mb-3">
                    <input type = "text" class = "form-control" id = "nuevoNombre" placeholder = "Nombre de tu empresa" require>
                    <label for = "nuevoNombre">
                        Nombre de tu empresa
                    </label>
                </div>
                <div class = "form-floating mb-3">
                    <input type = "text" class = "form-control" id = "nuevoRFC" placeholder = "RFC" require>
                    <label for = "nuevoRFC">
                        RFC
                    </label>
                </div>
                <div class = "d-flex justify-content-center gap-2 mt-4">
                    <div class = "mb-3 mt-4">
                        <button onclick = "window.miModal.close();" class = "boton-rojo-hover btn bg-danger text-white">
                            Cancelar
                        </button>
                        <button onclick = "agregarTienda(); window.miModal.close();" class = "boton-verde-hover btn bg-success text-white">
                            Agregar
                        </button>
                    </div>
                </div>
            </dialog>
        </div>
    </div>
    <div class = "d-flex">
        <form class = "w-50" role = "search">
            <div class = "input-group border border-primary rounded">
                <span class = "input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                </span>
                <input id="search_inventario" class="form-control border-1" type="search" placeholder="Buscar tienda...">
            </div>
        </form>
        <form action="#" method="">
            <div class = "dropdown px-3">
                <button class = "btn btn-light border border-primary dropdown-toggle" type = "button" id = "botonT" data-bs-toggle="dropdown" aria-expanded="false">
                    Todas las tiendas
                </button>
                <ul class = "dropdown-menu filtroT" aria-labelledby = "botonT">
                    <li><a class = "dropdown-item" href = "#">Todas las tiendas</a></li>
                    <li><a class = "dropdown-item" href = "#">Tiendas Activas</a></li>
                    <li><a class = "dropdown-item" href = "#">Tiendas Inactivas</a></li>
                </ul>
            </div>
        </form>
        <form action = "#" method = "">
            <div class = "dropdown">
                <button class = "btn btn-light border border-primary dropdown-toggle" type = "button" id = "orden" data-bs-toggle="dropdown" aria-expanded="false">
                    Orden
                </button>
                <ul class = "dropdown-menu ordenT" aria-labelledby = "orden">
                    <li><a class = "dropdown-item" href = "#">A - Z</a></li>
                    <li><a class = "dropdown-item" href = "#">Z - A</a></li>
                </ul>
            </div>
        </form>
    </div>

    <div class="card shadow mt-3">
        <div class="card-body overflow-auto" style="max-height: 60vh;">
            <!-- Card de usuarios -->
            <?php while ($i < count($tiendas)) {?>
            <?php $tienda = $tiendas[$i]; ?>
                <div class="mb-2 overflow-auto p-2">
                    <div class="card-body p-0 border border-primary rounded-1">
                        <div class = "card-body titulo-secundario d-flex gap-2">
                            <svg xmlns = "http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/></svg>
                            <div>
                                <h2 class = "mt-2 d-block fw-semibold mb-1">
                                    <?= $tienda["nombre"] ?>
                                </h2>
                                <small class = "d-block fw-semibold">
                                    RFC: <?= $tienda["rfc"] ?>
                                </small>
                            </div>
                            <div class="mt-2 ms-auto">
                                <span class = " ms-2" title = "Tienda Activa"></span>
                                <button class="boton-azul-hover btn bg-primary btn-sm me-2 text-white d-inline-flex align-items-center" type = "button"">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" /><path d="M16 5l3 3" /></svg>
                                    Editar
                                </button>
                                <button class="boton-rojo-hover btn bg-danger btn-sm me-2 text-white d-inline-flex align-items-center" type="button"">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-cancel"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /><path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17 21l4 -4" /></svg>
                                    Desactivar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++; ?>
            <?php } ?>
        </div>
    </div>
</div>




<!--CODIGO DE JAVASCRIPT DE FELIPE

<script>
    document.querySelectorAll('.filtroT').forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('botonT').textContent = this.textContent;
        });
    });

    document.querySelectorAll('.ordenT').forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('orden').textContent = this.textContent;
        });
    });

    function agregarTienda() {
        const nombre = document.getElementById('nuevoNombre').value;
        const rfc = document.getElementById('nuevoRFC').value;
        if (nombre.trim() === "" || rfc.trim() === "") {
            alert("Por favor, llena todos los campos");
            return;
        }

        const nuevaCard = `
            <div class="col-md-12 mb-3" id = "agregar">
                <div class="card shadow">
                    <div class="card-body titulo-secundario d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16"><path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/></svg>
                        <div>
                            <h2 class="mt-2 d-block fw-semibold mb-1">
                                ${nombre}
                            </h2>
                            <small class="d-block fw-semibold">
                                RFC: ${rfc}
                            </small>
                        </div>
                        <div class="mt-2 ms-auto">
                            <form action="" method="">
                                <span class = " ms-2" title = "Tienda Activa"></span>
                                <button class="boton-azul-hover btn bg-primary btn-sm me-2 text-white d-inline-flex align-items-center" type = "button"">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" /><path d="M16 5l3 3" /></svg>
                                    Editar
                                </button>
                                <button class="boton-rojo-hover btn bg-danger btn-sm me-2 text-white d-inline-flex align-items-center" type="button"">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-cancel"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /><path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17 21l4 -4" /></svg>
                                    Desactivar
                                </button>
                            </form>                   
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.getElementById("listaTiendas").insertAdjacentHTML("afterbegin", nuevaCard);
        document.getElementById('nuevoNombre').value = "";
        document.getElementById('nuevoRFC').value = "";
    } FIN DE CODIGO DE JS DE FELIPE-->
<!--
    // function addTienda() {
    // const nombreNew = document.getElementById('nuevoNombre').value;

    //     const addStore = `
    //         <ul class="dropdown-menu shadow p-1 border-1">
    //             <li class="dropdown-item" type = "button"">
    //                 ${nombreNew}
    //             </li>
    //         </ul>
    //     `;
    //     document.getElementById("add").insertAdjacentHTML("beforeend", addStore);
    //     document.getElementById('nuevoNombre').value = "";
    // }

</script>

-->
