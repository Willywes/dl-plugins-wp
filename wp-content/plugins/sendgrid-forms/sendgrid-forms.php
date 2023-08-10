<?php

use Willywes\SendgridForms\SendgridForm;


// Exit if accessed directly
if (!defined('ABSPATH')) exit;
// If this file is called directly, abort.
if (!defined('WPINC')) exit;


/*
Plugin Name: Sendgrid Forms
Plugin URI: https://devlabs.cl/
Description: Este plugin permite crear formularios de contacto y suscripción con sendgrid y guardar los datos en la base de datos de wordpress
Author: Devlabs
Author URI: https://devlabs.cl/
License: GPLv2 or later
*/

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';


add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('tg-admin-style', TG_URL . 'build/index.css', array(), '1.0.0', 'all');
    wp_enqueue_script('tg-admin-script', TG_URL . 'build/index.js', array('wp-element'), '1.0.0', true);
    wp_localize_script('tg-ajax-script', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('my-ajax-nonce'),
    ]);
});;

add_action('admin_menu', 'sf_menu');

function sf_menu(): void
{
    add_menu_page('Sendgrid Forms', 'Sendgrid Forms', 'manage_options', 'sendgrid-forms', 'sf_admin', 'dashicons-admin-generic', '1');
}


function sf_admin(): void
{
    require_once TG_PATH . 'views/admin.php';
}


add_action('plugins_loaded', 'sf_init_class', 0);

function sf_init_class(): void
{
    class SendgridForms
    {
        private SendgridForm $sendgridForm;

        public function __construct()
        {
            $this->sendgridForm = new SendgridForm();

            add_action('wp_ajax_create_form', [$this, 'create_form']);
            add_action('wp_ajax_nopriv_create_form', [$this, 'create_form']);

            add_action('wp_ajax_get_forms', [$this, 'get_forms']);
            add_action('wp_ajax_nopriv_get_forms', [$this, 'get_forms']);

            add_action('wp_ajax_get_form', [$this, 'get_form']);
            add_action('wp_ajax_nopriv_get_form', [$this, 'get_form']);

            add_action('wp_ajax_delete_form', [$this, 'delete_form']);
            add_action('wp_ajax_nopriv_delete_form', [$this, 'delete_form']);

            add_action('wp_ajax_save_form', [$this, 'save_form']);
            add_action('wp_ajax_nopriv_save_form', [$this, 'save_form']);

        }

        public function create_form(): void
        {
            $name   = $_POST['name'];
            $fields = $_POST['fields'];
            $response = $this->sendgridForm->create_form($name, $fields);
            $response ? wp_send_json_success() : wp_send_json_error();
        }

        public function get_forms(): void
        {
            $response = $this->sendgridForm->get_forms();
            wp_send_json_success($response);
        }

        public function get_form(): void
        {
            $id = $_POST['id'];
            $response = $this->sendgridForm->get_form($id);
            wp_send_json_success($response);
        }

        public function delete_form(): void
        {
            $id = $_POST['id'];
            $response = $this->sendgridForm->delete_form($id);
            $response ? wp_send_json_success() : wp_send_json_error();
        }


        public function save_form(): void
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $fields = $_POST['fields'];
            $response = $this->sendgridForm->save_form($id, $name, $fields);
            $response ? wp_send_json_success() : wp_send_json_error();
        }

    }

    new SendgridForms();
}
