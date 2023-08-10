export const initialTheme = {
    name: 'My Theme',
    slug: 'my-theme',
    description: 'My Theme Description',
    uri: 'https://devlabs.cl',
    author: 'My Name',
    authorUri: 'https://devlabs.cl',
    tags: ['blog', 'noticias'],
    version: '1.0.0',
    menus : [
        {
            name: 'Menu Principal',
            slug: 'primary-menu',
        },
        {
            name: 'Menu Secundario',
            slug: 'secondary-menu',
        },
        {
            name: 'Menu Footer',
            slug: 'footer-menu',
        }
    ],
    customPostTypes: [
        {
            singularName: 'Servicio',
            pluralName: 'Servicios',
        },
        {
            singularName: 'Producto',
            pluralName: 'Productos',
        }
    ],
}

