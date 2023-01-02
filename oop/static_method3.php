
<?php
// To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com\n";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>