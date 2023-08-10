<?php

namespace Willywes\WPThemeGenerator;

class FileGenerator
{

    public function __construct()
    {
    }

    public function generateBaseThemeStyle($theme_path, $theme): void
    {
        try {

            $tags = $this->arrayToStringArray($theme['tags']);


            $file = "/*!
                Theme Name: {$theme['name']}
                Theme URI: {$theme['uri']}
                Author: {$theme['author']}
                Author URI: {$theme['authorUri']}
                Description: {$theme['description']}
                Version: {$theme['version']}
                Tested up to: 5.4
                Requires PHP: 5.6
                License: GNU General Public License v2 or later
                License URI: LICENSE
                Text Domain: {$theme['slug']}
                Tags: {$tags}
                */

                @import \"theme\";
                @import \"custom\";
                @import \"bootstrap-override\";

                body{
                  color: white;
                }";

            $file = str_replace('  ', '', $file);
            file_put_contents($theme_path . '/scss/style.scss', $file);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    public function generateCustomPostTypes($theme_path, $theme): void
    {
        try{
            $custom_post_types = $theme['customPostTypes'];

            $file = "<?php \n";

            foreach ($custom_post_types as $custom_post_type) {

                $singular = $custom_post_type['singularName'];
                $plural = $custom_post_type['pluralName'];
                $slug =  $this->slugify($singular);

                $file .= "function {$slug}_post_type() {
                        \$labels = array(
                            'name'                  => _x( '{$plural}', 'Post Type General Name', 'text_domain' ),
                            'singular_name'         => _x( '{$singular}', 'Post Type Singular Name', 'text_domain' ),
                            'menu_name'             => __( '{$plural}', 'text_domain' ),
                            'name_admin_bar'        => __( '{$singular}', 'text_domain' ),
                    
                        );
                        \$args = array(
                            'label'                 => __( '{$singular}', 'text_domain' ),
                            'description'           => __( 'Tipo {$plural}', 'text_domain' ),
                            'labels'                => \$labels,
                            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
                            'taxonomies'            => array( 'category', 'post_tag' ),
                            'hierarchical'          => false,
                            'public'                => true,
                            'show_ui'               => true,
                            'show_in_menu'          => true,
                            'menu_position'         => 5,
                            'menu_icon'             => 'dashicons-building',
                            'show_in_admin_bar'     => true,
                            'show_in_nav_menus'     => true,
                            'can_export'            => true,
                            'has_archive'           => true,
                            'exclude_from_search'   => false,
                            'publicly_queryable'    => true,
                            'capability_type'       => 'page',
                        );
                        register_post_type( '{$slug}', \$args );
                    
                    }
                        add_action( 'init', '{$slug}_post_type', 0 );
                    
                    
               ";
            }

            $file = str_replace('  ', '', $file);
            file_put_contents($theme_path . '/functions/custom-post-types.php', $file);

//            wp_send_json_success(['file' => $file]);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function arrayToStringArray($items): string
    {
//        $items = explode(',', $items);
        $items = array_map(function ($item) {
            return trim($item);
        }, $items);
        return implode(', ', $items);
    }

    public function slugify($text): string
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

}
