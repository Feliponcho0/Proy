<div class="titulo-principal pb-2 mb-0">
    <div class="d-flex justify-content-between">
        <h1 class="tipoLetra fw-bold pb-2">Usuarios</h1>
        <!--Boton agregar-->
        <form class="" action="" method="">
            <button class="boton-azul-hover btn bg-primary me-2 text-white border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF" class="icon icon-tabler icons-tabler-filled icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 4a1 1 0 0 1 1 1v6h6a1 1 0 0 1 0 2h-6v6a1 1 0 0 1 -2 0v-6h-6a1 1 0 0 1 0 -2h6v-6a1 1 0 0 1 1 -1" /></svg>
                Agregar usuario
            </button>
        </form>
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
    <div class="row mt-3">
        <div class="col-md-12 mb-3">
            <div class="card shadow">
                <div>
                    <div class="card-body titulo-secundario d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                        <div>
                            <h2 class="mt-2 d-block fw-semibold mb-1">Samuel Santos</h2>
                            <span class="d-block badge bg-primary rounded-5">Administrador</span>
                        </div>
                        <div class="mt-3 ms-auto">
                            <form action="" method="">
                                <button class="boton-azul-hover btn bg-primary btn-sm me-2 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415" /><path d="M16 5l3 3" /></svg>
                                    Editar
                                </button>
                                <button class="boton-rojo-hover btn bg-danger btn-sm me-2 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-cancel"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /><path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17 21l4 -4" /></svg>
                                    Desactivar
                                </button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>