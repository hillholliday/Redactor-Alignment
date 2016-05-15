<?php
namespace Craft;

/**
 * Redactor Alignment plugin
 */
class RedactorAlignmentPlugin extends BasePlugin
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Redactor Alignment';
	}

	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.0';
	}

	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'Hill Holliday';
	}

	public function getDeveloperUrl()
	{
		return 'http://hhcc.com';
	}

	/**
	 * @return string
	 */
	public function getPluginUrl()
	{
		return 'https://github.com/hillholliday/Redactor-Alignment';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return $this->getPluginUrl().'/blob/master/README.md';
	}

	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/hillholliday/Redactor-Alignment/master/releases.json';
	}

	/**
	 *
	 */
	public function init()
	{
		if (!craft()->isConsole())
		{
			if (craft()->request->isCpRequest())
			{
				craft()->templates->includeCssResource('redactoralignment/alignment.css');
				craft()->templates->includeJsResource('redactoralignment/alignment.js');
			}
		}
	}

	/**
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'alignment' => array(AttributeType::Mixed, 'default' => array())
		);
	}
}
