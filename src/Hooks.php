<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @file
 */

namespace MediaWiki\Extension\BoilerPlate;

use OutputPage;
use Skin;

class Hooks {

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
	 * @param OutputPage $out
	 * @param Skin $skin
	 */
	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ): void {
		$config = $out->getConfig();
		if ( $config->get( 'BoilerPlateVandalizeEachPage' ) ) {
			$out->addModules( 'oojs-ui-core' );
			$out->addHtml( self::createBoilerPlateTag() );
	
			// Ajoutez le module de ressources ici
			$out->addModules( 'ext.boilerPlate' );
		}
	}
	/**
	 * Create a custom HTML tag for BoilerPlate.
	 * @return string
	 */
	private static function createBoilerPlateTag() {
		// You can customize the tag here as per your requirement
		return '<a href="#" class="boilerplate-tag">Take Summary</a>';
	}
}

