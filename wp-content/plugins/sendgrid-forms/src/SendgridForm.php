<?php

namespace Willywes\SendgridForms;

// create sendgrid forms to manage forms, include configurations and list of forms
use JetBrains\PhpStorm\ArrayShape;

class SendgridForm
{

    public function __construct()
    {
        $this->createTableIfNotExists();
    }

    public function create_form($name, $fields): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        return $wpdb->insert(
            $table_name,
            [
                'name' => $name,
                'fields' => json_encode($fields)
            ]
        );
    }

    public function get_forms(): array
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        $sql        = "SELECT * FROM $table_name";
        $results    = $wpdb->get_results($sql);
        return array_map(function ($result) {return $this->map_form($result);}, $results);
    }

    public function get_form($id): array
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        $sql        = "SELECT * FROM $table_name WHERE id = $id";
        $results    = $wpdb->get_results($sql);

        if (count($results) === 0) {
            return [];
        }

        return $this->map_form($results[0]);
    }

    public function delete_form($id): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        return $wpdb->delete($table_name, ['id' => $id]);
    }

    public function save_form($id, $name, $fields): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        return $wpdb->update(
            $table_name,
            [
                'name' => $name,
                'fields' => $fields,
            ],
            ['id' => $id]
        );
    }


    public function get_form_submissions($id): array
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_form_submissions';
        $sql        = "SELECT * FROM $table_name WHERE sendgrid_form_id = $id";
        $results    = $wpdb->get_results($sql);

        return array_map(function ($result) {return $this->map_form_submission($result);}, $results);
    }

    public function save_form_submission($sendgrid_form_id, $data): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_form_submissions';
        return $wpdb->insert(
            $table_name,
            [
                'sendgrid_form_id' => $sendgrid_form_id,
                'data' => $data,
            ]
        );
    }

    public function delete_form_submission($id): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_form_submissions';
        return $wpdb->delete($table_name, ['id' => $id]);
    }

    public function delete_form_submissions($sendgrid_form_id): bool
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_form_submissions';
        return $wpdb->delete($table_name, ['sendgrid_form_id' => $sendgrid_form_id]);
    }

   private function map_form($result): array
    {
        return [
            'id' => $result->id,
            'name' => $result->name,
            'fields' => json_decode($result->fields),
        ];
    }

    private function map_form_submission($result): array
    {
        return [
            'id' => $result->id,
            'sendgrid_form_id' => $result->sendgrid_form_id,
            'data' => json_decode($result->data),
        ];
    }

    private function createTableIfNotExists(): void
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sendgrid_forms';
        $sql        = "SHOW TABLES LIKE '$table_name'";
        $result     = $wpdb->get_results($sql);
        if (count($result) === 0) {
            $charset_collate = $wpdb->get_charset_collate();
            $sql             = "CREATE TABLE $table_name (
                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                    name varchar(255) NOT NULL,
                    fields longtext NOT NULL,
                    sender_email varchar(255) NOT NULL,
                    sender_name varchar(255) NOT NULL,
                    api_key varchar(255) NOT NULL,
                    created_at datetime DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY  (id)
                ) $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }


        $table_name = $wpdb->prefix . 'sendgrid_form_submissions';
        $sql        = "SHOW TABLES LIKE '$table_name'";
        $result     = $wpdb->get_results($sql);
        if (count($result) === 0) {
            $charset_collate = $wpdb->get_charset_collate();
            $sql             = "CREATE TABLE $table_name (
                    id mediumint(9) NOT NULL AUTO_INCREMENT,
                    sendgrid_form_id mediumint(9) NOT NULL,
                    data longtext NOT NULL,
                    created_at datetime DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY  (id)
                ) $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

    }
}
