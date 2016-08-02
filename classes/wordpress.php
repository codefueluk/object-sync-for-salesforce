<?php
/**
 * @file
 */

class Wordpress {

	protected $wpdb;
    protected $version;
    protected $text_domain;

    /**
    * Objects, properties, and methods to get core WordPress data for the plugin
    *
    * @param object $wpdb
    * @param string $version
    * @param string $text_domain
    * @throws \Exception
    */
	public function __construct( $wpdb, $version, $text_domain ) {
		$this->wpdb = &$wpdb;
		$this->version = $version;
		$this->text_domain = $text_domain; 
	}

	/**
    * Get WordPress fields for an object
    * 
    * @param string $wordpress_object
    * @param string $id_field
    * @return array $object_fields
    */
    public function get_wordpress_object_fields( $wordpress_object, $id_field = 'ID' ) {

		if ( $wordpress_object === 'user' ) {
			$meta_table = $this->wpdb->prefix . 'usermeta';
			$content_table = $this->wpdb->prefix . 'users';
			$object_name = 'user';
			$where = '';
			$ignore_keys = array( // keep it simple and avoid security risks
				'user_pass',
				'user_activation_key',
				'session_tokens',
			);
		} else if ( $wordpress_object === 'comment' ) {
			$meta_table = $this->wpdb->prefix . 'commentmeta';
			$content_table = $this->wpdb->prefix . 'comments';
			$object_name = 'comment';
			$id_field = 'comment_ID';
			$where = '';
			$ignore_keys = array();
		} else {
			$meta_table = $this->wpdb->prefix . 'postmeta';
			$content_table = $this->wpdb->prefix . 'posts';
			$object_name = 'post';
			$where = 'AND ' . $content_table . '.post_type = "' . $wordpress_object . '"';
			$ignore_keys = array();
		}

        $select_content = 'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "' . $content_table . '"';
        $content_fields = $this->wpdb->get_results( $select_content );

        $select_meta = $select = '
        SELECT DISTINCT ' . $meta_table . '.meta_key
        FROM ' . $content_table . '
        LEFT JOIN ' . $meta_table . '
        ON ' . $content_table . '.' . $id_field . ' = ' . $meta_table . '.' . $object_name . '_id
        WHERE ' . $meta_table . '.meta_key != "" 
        ' . $where . '
        ';
        $meta_fields = $this->wpdb->get_results( $select_meta );

        $object_fields = array();

        foreach ( $content_fields as $key => $value ) {
        	if ( !in_array( $value->COLUMN_NAME, $ignore_keys ) ) {
        		$object_fields[] = array( 'key' => $value->COLUMN_NAME );
        	}
        }

        foreach ( $meta_fields as $key => $value ) {
        	if ( !in_array( $value->meta_key, $ignore_keys ) ) {
        		$object_fields[] = array( 'key' => $value->meta_key );
        	}
        }

        // should cache that array
        
		return $object_fields;

    }

}