$(document).ready(function() {
    // use esta configuracion simple para valores por defecto
    //$('div.expandable p').expander();
    // *** O ***
    // configure de la siguiente manera
    $('p.expandable').expander({
        slicePoint: 500, // si eliminamos por defecto es 100 caracteres
        expandText: '[Leer más...]', // por defecto es 'read more...'
        collapseTimer: 0, // tiempo de para cerrar la expanción si desea poner 0 para no cerrar
        userCollapseText: '[^]' // por defecto es 'read less...'
    });
});