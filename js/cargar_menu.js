fetch('menu.html')
    .then(response => response.text())
    .then(html =>{
        document.getElementById('menu').innerHTML=html;

        const contenido = document.getElementById('contenido-principal');
        const columna = document.querySelector('#menu .col.p-0');
        if (contenido && columna) columna.appendChild(contenido);

    const pagina =window.location.href;

    switch(true){
        //Caso 1 Dashboard
        case pagina.includes('dashboard.html'):
            document.querySelector('#menu a[href="dashboard.html"]').classList.add('active');
            break;
        //Caso 2 Punto de venta
        case pagina.includes('punto_venta.html'):
            document.querySelector('#menu a[href="punto_venta.html"]').classList.add('active');
            break;
        //Caso 3 Historial
        case pagina.includes('historial.html'):
            document.querySelector('#menu a[href="historial.html"]').classList.add('active');
            break;
        //Caso 4 Inventario
        case pagina.includes('inventario.html'):
            document.querySelector('#menu a[href="inventario.html"]').classList.add('active');
            break;
        //Caso 5 Usuarios
        case pagina.includes('usuarios.html'):
            document.querySelector('#menu a[href="usuarios.html"]').classList.add('active');
            break;
        //Caso 6 Tiendas
        case pagina.includes('tiendas.html'):
            document.querySelector('#menu a[href="tiendas.html"]').classList.add('active');
            break;
        //Caso 7 Reportes
        case pagina.includes('reportes.html'):
            document.querySelector('#menu a[href="reportes.html"]').classList.add('active');
            break;
        //Caso 8 Configuracion
        case pagina.includes('configuracion.html'):
            document.querySelector('#menu a[href="configuracion.html"]').classList.add('active');
            break;
        //Caso 9 Mi perfil
        case pagina.includes('perfil.html'):
            document.querySelector('#menu a[href="perfil.html"]').classList.add('active');
            break;
    }

    })
    .catch(error => console.log('Error al cargar el menu:', error))
