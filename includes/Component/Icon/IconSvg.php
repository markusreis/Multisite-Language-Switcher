<?php

namespace lloc\Msls\Component\Icon;

use lloc\Msls\Component\Icon;

/**
 * Class IconSvg
 * @package lloc\Msls\Component
 */
class IconSvg extends Icon {

	/**
	 * @return string
	 */
	protected function path(): string {
		return plugin_dir_path( MSLS_PLUGIN__FILE__ ) . 'css-flags/flags.php';
	}

	/**
	 * @param string $language
	 *
	 * @return string
	 */
	public function get( string $language ): string {
		if ( isset( $this->map[ $language ] ) ) {
			return $this->map[ $language ];
		}

		return $this->maybe( $language, 'flag-icon' );
	}

}