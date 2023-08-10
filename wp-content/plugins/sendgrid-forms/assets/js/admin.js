const $ = jQuery;


jQuery(document).ready(function ($) {
    // Handler para el evento click del botón "Crear tema"
    $('#btn-create-theme').on('click', function (e) {
        e.preventDefault();

        // Obtén los datos del formulario, asumiendo que los campos tienen los siguientes IDs
        const themeName = $('#theme-name').val();

        // Datos que se enviarán al servidor
        const data = {
            action: 'tg_create_theme', // Nombre del action hook registrado en el servidor
            data: {
                theme_name: themeName,
                // Agrega aquí otros datos que necesites enviar al servidor para configurar el tema
            }
        };

        $.ajax({
            url: ajax_object.ajax_url, // URL del archivo admin-ajax.php
            type: 'POST', // Método de envío de datos
            data: data, // Datos que se enviarán al servidor
            dataType: 'json', // Tipo de respuesta del servidor
            beforeSend: function () {
                // Se ejecuta antes de enviar los datos
                console.log(data);
            },
            success: function (response) {
                // Se ejecuta cuando se recibe una respuesta del servidor
                console.log(response);
            }
        });
    });
});

const saveThemeSettings = (data) => {
    $.ajax({
        url: ajax_object.ajax_url, // URL del archivo admin-ajax.php
        type: 'POST', // Método de envío de datos
        data: data, // Datos que se enviarán al servidor
        dataType: 'json', // Tipo de respuesta del servidor
        beforeSend: function () {
            // Se ejecuta antes de enviar los datos
            console.log(data);
        },
        success: function (response) {
            // Se ejecuta cuando se recibe una respuesta del servidor
            console.log(response);
        }
    });
}

const slugify = (text) => {
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '');            // Trim - from end of text
}

const ThemeGenerator = {
    name: 'ThemeGenerator',
    version: '1.0.0',
    author: 'Devlabs',
    init: function () {
        this.bindEvents();
        console.log('Theme Generator initialized')
    },
    generateTheme: () => {
        alert('Theme generated')
    },
    bindEvents: () => {
        $(document).on('click', '.sendgrid-forms .sendgrid-forms__button', function (e) {
            e.preventDefault();
            ThemeGenerator.generateTheme();
        });
    }
};

const defaultThemeSettings = {
    name: 'Theme Name',
    author: 'Theme Author',
    version: '1.0.0',
    description: 'Theme Description',
    themeUri: '',
    authorUri: '',
    textDomain: '',
    domainPath: '',
    tags: [],

    pages: [],
    custom_post_types: [],
    custom_taxonomies: [],
    custom_meta_boxes: [],
    custom_widgets: [],
    custom_shortcodes: [],
    custom_menus: [],
    custom_sidebars: [],
    custom_styles: [],
}

let themeSettings = null;

const syncSettings = (settings) => {
    localStorage.setItem('sendgrid-forms-settings', JSON.stringify(settings));
}

const getSettings = () => {
    const settings = localStorage.getItem('sendgrid-forms-settings');
    console.log(settings);
    return settings ? JSON.parse(settings) : defaultThemeSettings;
}

const setSettings = (settings) => {
    localStorage.setItem('sendgrid-forms-settings', JSON.stringify(settings));
}

const resetSettings = () => {
    localStorage.removeItem('sendgrid-forms-settings');
}

const setThemeName = (name) => {
    themeSettings.name = name;
    syncSettings(themeSettings);
}


$(document).ready(function () {
    ThemeGenerator.init();
    syncSettings(defaultThemeSettings);
});


