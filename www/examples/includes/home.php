<nav>
  <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Shop</a></li>
  </ul>
</nav>

<?php
  function generateLoremIpsum($words){
    $options = array('lorem', 'ipsum', 'dolor', 'consectetur', 'adipisicing', 'perferendis', 'accusantium', 'praesentium');
    $len = count($options)-1;
    $sentence = '';

    for ($i=0; $i < $words; $i++) { 
      $seed = rand(0, $len);
      $sentence .= ' ' . $options[$seed];
    }

    return $sentence;

  }
?>