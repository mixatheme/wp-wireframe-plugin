<?php
/**
 * Module_UI_Interface is a Wireframe module interface.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   0.1.0 Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Namespace.
 *
 * @since 5.3.0 PHP
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * No direct access to this file.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 0.1.0 Wireframe
 * @since 0.1.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Module_UI_Interface' ) ) :
	/**
	 * Module_UI_Interface contract for front-end presentation.
	 *
	 * Security Reminder: If you are saving any data to the Database, you should
	 * validate and/or sanitize untrusted data before entering into the database.
	 * All untrusted data should be escaped before output.
	 *
	 * @since 2.9.0 WordPress
	 * @since 0.1.0 Wireframe
	 * @since 0.1.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	interface Module_UI_Interface {
		/**
		 * Enqueue Styles.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function styles();

		/**
		 * Enqueue Scripts.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function scripts();

		/**
		 * Enqueue Media Modal.
		 *
		 * @since 0.1.0 Wireframe
		 * @since 0.1.0 Wireframe_Plugin
		 */
		public function mediamodal();

	} // Module_UI_Interface.

endif; // Thanks for using MixaTheme products!
