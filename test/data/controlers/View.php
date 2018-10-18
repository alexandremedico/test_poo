<?php


class View
{
  public function createView($asort)
  {
    $menuElements = array_diff(scandir('./view/layout'), [
      ".",
      "..",
      "layout",
    ]);
    if ($asort == true) {
      //var_dump($menuElements);die;
      asort($menuElements);
    } else {
      arsort($menuElements);
    }
    $element = "";
    $element .= file_get_contents('./view/head.html');

    foreach ($menuElements as $key => $value) {
      $element .= file_get_contents('./view/layout/' . $value);
    }
    $element .= file_get_contents('./view/foot.html');
    echo $element;
  }
}
