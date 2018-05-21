<?PHP
class ColorGenerator
{

    public function generateArray($count)
    {
        $colors = array();

        $functions = array('ColorGenerator::randomA', 'ColorGenerator::randomB');

        for($i = 1; $i <= $count; $i++){
            $randomFunction = $functions[array_rand($functions)];

            $color = call_user_func($randomFunction);
            $text = 'Color by Generator ' . str_replace('ColorGenerator::random','',$randomFunction);

            $textColor = $this->textColor($color);

            $colors[$color]['text'] = $text;
            $colors[$color]['text_color'] = $textColor;
        }

        return $colors;
    }

    private function randomA()
    {
        $color = substr(md5(rand()), 0, 6);

        return '#' . $color;
    }

    private function randomB()
    {
        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = $rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

        return '#' . $color;
    }

    private function textColor($color)
    {
        $color = str_replace('#', '', $color);

        $red = hexdec(substr($color,0,2));
        $green = hexdec(substr($color,2,2));
        $blue = hexdec(substr($color,4,2));

        if(($red*0.299 + $green*0.587 + $blue*0.114) > 186){
            $text_color = 'black';
        }else{
            $text_color = 'white';
        }

        return $text_color;
    }

}
