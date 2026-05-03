<?php
$usuarios = [
    [
        "nombre" => "Felipe",
        "rol" => "Administrador",
        "activa" => true
    ],
    [
        "nombre" => "Maria",
        "rol" => "Gerente",
        "activa" => true
    ],
    [
        "nombre" => "Luis",
        "rol" => "Cajero",
        "activa" => true
    ]

];
$i=0;


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
$j=0;
?>

<div class="pb-2 mb-0">
    <div class="d-flex justify-content-between">
        <h1 class="tipoLetra fw-bold pb-2 fs-4">Usuarios</h1>
        <!--Boton agregar-->
        <button id="btn_abrir_usuario" class="boton-azul-hover btn bg-primary me-2 text-white border border-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF" class="icon icon-tabler icons-tabler-filled icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 4a1 1 0 0 1 1 1v6h6a1 1 0 0 1 0 2h-6v6a1 1 0 0 1 -2 0v-6h-6a1 1 0 0 1 0 -2h6v-6a1 1 0 0 1 1 -1" /></svg>
            Agregar usuario
        </button>

        <!--Modal agregar-->
            <dialog id = "modal_agregar" class ="border rounded border-primary p-4 ">
                <h1 class="fs-4 pb-3">Agregar usuario</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="small">Nombre completo</h2>
                        <div class = "mb-3">
                            <input type = "text" class = "form-control" id = "nuevoNombre" placeholder = "Nombre" require>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h2 class="small">Correo electronico</h2>
                        <div class = "mb-3">
                            <input type = "text" class = "form-control" id = "nuevoCorreo" placeholder = "Correo" require>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="small">Contraseña</h2>
                        <div class = "mb-3">
                            <input type = "text" class = "form-control" id = "nuevoPassword" placeholder = "Contraseña" require>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h2 class="small">Confirmar contraseña</h2>
                        <div class = "mb-3">
                            <input type = "text" class = "form-control" id = "confirmarPassword" placeholder = "Confirmar contraseña" require>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="small">Rol</h2>
                        <select name="rol" class="form-select" id="nuevoRol">
                            <option value="admin">Administrador</option>
                            <option value="gerente">Gerente</option>
                            <option value="cajero">Cajero</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <h2 class="small">Tienda asignada</h2> 
                        <select class="form-select" id="nuevaTienda">
                            <option>Selecciona una tienda</option>
                            <?php while ($j<count($tiendas)) { ?>
                            <?php $t = $tiendas[$j]; ?>
                                <option value="<?= $t['nombre'] ?>">
                                    <?= $t['nombre'] ?>
                                </option>   
                            <?php $j++; ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>


 
                <!--Botones-->
                <div class = "d-flex justify-content-center gap-5 mt-4">
                    <button id="btn_cancelar_usuario" class = "boton-rojo-hover btn bg-danger text-white">
                        Cancelar
                    </button>
                    <button id ="btn_agregar_usuario" class = "boton-verde-hover btn bg-success text-white">
                        Agregar
                    </button>
                </div>
            </dialog>


    </div>
    <div class="d-flex">
        <form class="w-50" role="search">
            <div class="input-group border border-primary rounded">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                </span>
                <input id="search_usuarios" class="form-control border-1" type="search" placeholder="Buscar usuario...">
            </div>
        </form>
        <form action="#" method="">
            <div class="d-flex dropdown px-3">
                <button class="btn btn-light border border-primary dropdown-toggle shadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Todos los roles
                </button>
                <ul class="dropdown-menu shadow">
                    <li><a class="dropdown-item" href="#">Todos los roles</a></li>
                    <li><a class="dropdown-item" href="#">Administrador</a></li>
                    <li><a class="dropdown-item" href="#">Gerente</a></li>
                    <li><a class="dropdown-item" href="#">Cajero</a></li>
                </ul>
            </div>
        </form>
    </div>

    <div class="card shadow mt-3">
        <div class="card-body overflow-auto" style="max-height: 60vh;">
            <!-- Card de usuarios -->
            <?php while ($i < count($usuarios)) {?>
            <?php $user = $usuarios[$i]; ?>
                <div class="mb-2 overflow-auto p-1">
                    <div class="card-body p-0 border border-primary rounded-1">
                        <div class = "card-body titulo-secundario d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                            <div>
                                <h2 class="mt-2 d-block fw-semibold mb-1 fs-5">
                                    <?= $user["nombre"]?>
                                </h2>
                                <span class="d-block badge bg-primary rounded-5">
                                    <?= $user["rol"]?>
                                </span>
                            </div>

                            <div class="mt-3 ms-auto">
                                <button class="boton-azul-hover btn bg-primary btn-sm me-2 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" /><path d="M16 5l3 3" /></svg>
                                    Editar
                                </button>
                                <button class="boton-rojo-hover btn bg-danger btn-sm me-2 text-white">
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
<!--Jquery modal-->
<script>
    $(document).ready(function () {
        const dialog= document.getElementById('modal_agregar');
        // Abre el modal de agregar
        $("#btn_abrir_usuario").click(function () {
            dialog.showModal();
        });

        $("#btn_cancelar_usuario").click(function () {
            dialog.close();
        });

        $("#btn_agregar_usuario").click(function () {
            alert("Agregaste un nuevo usuario");
            //agregar con PHP no JQUERY
        });


    });

</script>