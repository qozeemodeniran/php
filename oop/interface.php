<?php 
interface SocialApp {
    public function default_tones();
}

class Facebook implements SocialApp {
    public function default_tones() {
        echo "smush\n";
    }
}

class Instagram implements SocialApp {
    public function default_tones() {
        echo "ping\n";
    }
}

class Snapchat implements SocialApp {
    public function default_tones() {
        echo "ding\n";
    }
}

class Whatsapp implements SocialApp {
    public function default_tones() {
        echo "bang\n";
    }
}

$fb = new Facebook();
$fb->default_tones();

$in = new Instagram();
$in->default_tones();

$wa = new Whatsapp();
$wa->default_tones();

$sc = new Snapchat();
$sc->default_tones();
?>