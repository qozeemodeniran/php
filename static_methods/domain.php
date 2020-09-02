<?php

class Domain
{
	protected static function getWebsiteName()
	{
		return "qozeemodeniran.github.io";
	}
}

class DomainQoz extends Domain
{
	public $websiteName;
	public function __construct()
	{
		$this->websiteName = parent::getWebsiteName();
	}
}

$DomainQoz = new DomainQoz;
echo $DomainQoz->websiteName;

?>