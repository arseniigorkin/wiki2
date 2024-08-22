<?php

use MediaWiki\MediaWikiServices;

/**
 * SkinTemplate class for the Medik skin
 * https://bitbucket.org/wikiskripta/medik
 *
 * @ingroup Skins
 * @author Petr Kajzar
 * @license https://creativecommons.org/publicdomain/zero/1.0/ CC0-1.0
 */
class SkinMedik extends SkinTemplate {
	/** @var string lowercase skin name */
	public $skinname = 'medik';
	/** @var string full skin name */
	public $stylename = 'Medik';
	/** @var string skin template */
	public $template = 'MedikTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'theme-color', RequestContext::getMain()->getConfig()->get( 'MedikColor' ) );
		
		if ( MediaWikiServices::getInstance()
			->getUserOptionsLookup()
			->getOption( $this->getSkin()->getUser(), 'skin-responsive' ) ) {
				$out->addMeta( 'viewport', 'width=device-width' );
		}

		$out->addModuleStyles( [ 'skins.medik' ] );

		$out->addModules( [ 'skins.medik.js' ] );
	}

}
