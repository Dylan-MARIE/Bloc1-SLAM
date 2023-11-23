<?php
function titre (string $content,string $subTitle='',int $level=1): void{
    echo "<h$level>$content</h$level>";
    if($subTitle!=null){
        echo "<p class ='sub-title'>$subTitle</p>";
    }
}

function get(string $key,mixed $defaultValue=null):mixed{
    return $_GET[$key]??$defaultValue;
}

function post(string $key,mixed $defaultValue=null):mixed{
    return $_POST[$key]??$defaultValue;
}

/**
 * Retourne le paragraphe avec les mots mélangés
 * @param string $paragraphe
 * @return string
 */

function shufflePara(string $paragraphe):string{
    $words=explode(" ",strtolower($paragraphe));
    shuffle($words);
    return ucfirst(implode(" ",$words));
}

function generateTable(int $rows, int $cols):string{
    $html='<table border="1">';
    for($i=0;$i<$rows;$i++){
        $html.='<tr>';
        $html.=str_repeat("<td></td>",$cols);
        $html.='</tr>';
    }
    $html.='</table>';
    return $html;
}

const LOREM_IPSUM_ARRAY=[
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra in sem sit amet dapibus. Nullam in porttitor ante. Praesent elementum finibus massa, sit amet rhoncus tortor eleifend ut. Donec laoreet scelerisque eros, semper rutrum nunc condimentum ac. Phasellus condimentum, est id vehicula rhoncus, urna felis pretium quam, ac efficitur ex tellus vitae ante. Suspendisse sit amet tincidunt lacus. Quisque ante ipsum, consectetur quis urna ut, pharetra condimentum eros. Integer ut condimentum lacus. Phasellus tempor turpis non arcu venenatis, eget sodales odio rhoncus. Praesent at ultrices tortor.",
    "In ornare, nulla vitae ultrices porttitor, magna erat sagittis nisl, in imperdiet purus ipsum vel ante. Suspendisse suscipit malesuada magna, vel dignissim libero elementum et. Sed mollis vitae dolor sit amet dignissim. Fusce dui turpis, iaculis in luctus et, mollis at ipsum. In hac habitasse platea dictumst. Vestibulum mattis dapibus posuere. Praesent fringilla tortor id sem ultricies, non iaculis diam maximus. Sed elementum pharetra eros, non mollis felis dapibus eget. Vestibulum eget orci sed diam dictum ultricies ac ac augue. Sed cursus cursus scelerisque. Cras nisi dolor, posuere ac fringilla ut, malesuada vitae tortor.",
    "Curabitur ut justo sed justo feugiat faucibus. Vivamus nec placerat orci. Ut imperdiet mauris ut enim varius placerat. In magna erat, sodales vel blandit nec, auctor malesuada est. Aenean viverra elit a vehicula dignissim. Duis finibus et turpis ac condimentum. Ut gravida, leo ut tincidunt fermentum, dolor leo faucibus mauris, eu pharetra ligula mi non felis. Phasellus non ex mi.",
    "Aliquam mollis lorem a dapibus cursus. Praesent nec rhoncus urna, id ultricies urna. Nam eu viverra nisl. Etiam ac mauris eget ante mollis pellentesque eu nec ex. Donec ac turpis vel odio consequat finibus. Pellentesque sollicitudin, neque nec sodales efficitur, sem lacus laoreet diam, sed iaculis nulla velit sollicitudin turpis. In maximus elit eget enim aliquet consequat.",
    "Ut congue auctor augue, et efficitur metus. Suspendisse sit amet diam a neque efficitur ornare. Phasellus posuere, mauris a fringilla lacinia, nisl velit porta diam, sed gravida leo justo a sapien. In vulputate, lacus eget ultrices hendrerit, sem sapien eleifend massa, non pretium arcu odio quis nisl. Proin et elit ac nulla egestas vehicula vel nec ex. Fusce ut pharetra nunc. Nunc tincidunt porttitor augue, at elementum tortor congue id. Vestibulum efficitur eros urna, ac fermentum sapien sagittis eu. Quisque a blandit massa. Integer neque dui, vestibulum in maximus sit amet, hendrerit vel metus. Aliquam interdum ullamcorper urna a laoreet. Integer non auctor augue. Suspendisse nec ligula erat. Quisque a augue faucibus, laoreet ligula in, euismod est."
];