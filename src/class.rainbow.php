<?php
/**
 * @Package Rainbow Text by Afid Arifin
 * @Version v1.0
 * @Created 17/03/2021
 * @Web     https://afidarifin.com
 */
class Rainbow {
  protected $rainbow;
  protected $colors;
  protected $font;
  protected $data;

  public function generate($text = '', $path = 'data') {
    $this->colors = [
      '#ff0000', '#ff3300',
      '#ff6600', '#ff9900',
      '#ffcc00', '#ffff00',
      '#ccff00', '#99ff00',
      '#66ff00', '#33ff00',
      '#00ff00', '#00ff33',
      '#00ff66', '#00ff99',
      '#00ffcc', '#00ffff',
      '#00ccff', '#0099ff',
      '#0066ff', '#0033ff',
      '#0000ff', '#3300ff',
      '#6600ff', '#9900ff',
      '#cc00ff', '#ff00ff',
      '#ff00cc', '#ff0099',
      '#ff0066', '#ff0033',
    ];

    if(!is_dir($path)) {
      mkdir($path);
    }

    $i = 0;
    foreach(str_split($text) as $this->font) {
      if($this->font != '') {
        $this->rainbow .= '<font color="'.$this->colors[$i].'">'.$this->font.'</font>';
      } else {
        $this->rainbow .= '';
      }

      $i++;
      if($i == count($this->colors)) {
        $i = 0;
      }
    }

    $data = md5($text);
    if(file_exists($path.'/'.$data.'.txt')) {
      return $this->rainbow;
    } else {
      if(file_put_contents($path.'/'.$data.'.txt', nl2br($this->rainbow))) {
        return $this->rainbow;
      }
    }
  }

  public function getLink($path = 'data', $position = '') {
    $this->data = scandir($path);
    if($position) {
      echo '<a href="'.$path.'/'.$this->data[$position].'">'.$this->data[$position].'</a>';
    } else {
      for($i = 2; $i < count($this->data); $i++) {
        echo ''.($i - 1).'. <a href="'.$path.'/'.$this->data[$i].'">'.$this->data[$i].'</a><br/>';
      }
    }
  }
}
?>