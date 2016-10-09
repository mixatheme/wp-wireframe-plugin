<?php
/**
 * CPT dependency class for WPWFP.
 *
 * PHP version 5.6.0
 *
 * @package   WPWFP
 * @author    Tada Burke
 * @version   0.0.1 WPWFP
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 *
 * WPWFP is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * WPWFP is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WPWFP. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 0.0.1 WPWFP
 */
namespace MixaTheme\WPWFP;

/**
 * No direct access to this file.
 *
 * @since 0.0.1 WPWFP
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.0.1 WPWFP
 */
if ( ! class_exists( 'MixaTheme\WPWFP\CPT' ) ) :
	/**
	 * CPT is a WordPress class for Custom Post Types.
	 *
	 * @since 0.0.1 WPWFP
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class CPT {
		/**
		 * Config.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    array $_config
		 */
		private $_config;

		/**
		 * Hooks object.
		 *
		 * @access private
		 * @since  0.0.1 WPWFP
		 * @var    object Hooks
		 */
		private $_hooks;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 0.0.1 WPWFP
		 * @param array  $config Required array of config variables.
		 * @param object $hooks  Optionally DI action & filter hooks.
		 */
		public function __construct( $config, Hooks $hooks = null ) {

			// Config vars.
			$this->_config = $config;
			$this->_hooks  = $hooks;

			// Init hooks.
			if ( $this->_hooks ) {
				$this->_hooks->get_actions( $this );
			}
		}

		/**
		 * Get CPT.
		 *
		 * @since  0.0.1 WPWFP
		 */
		public function get_cpt() {
			if ( $this->_config['args'] ) {
				foreach ( $this->_config['args'] as $key => $value ) {
					register_post_type( $key, $value );
				}
			}
		}

	} // CPT class.

endif; // Thanks for using MixaTheme products!
