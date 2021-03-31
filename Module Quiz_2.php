interface
MusicianInterface {

public function play();
}
class Guitaristimplements
MusicianInterface {

public function play() {

echo "La La La";
}
}
$obj = new Guitarist();

$obj->play();