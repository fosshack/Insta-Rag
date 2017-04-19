<?php

function getFeed() {
    $content = file_get_contents("http://rss.cnn.com/rss/edition.rss");
    $x = new SimpleXmlElement($content);
    echo "<ul>";
    $i=0;
    foreach($x->channel->item as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
        $i++;
        if($i==6)
         break;
    }
    echo "</ul>";
}

function getFeed1() {
    $content = file_get_contents("http://rss.cnn.com/rss/edition_sport.rss");
    $x = new SimpleXmlElement($content);
    echo "<ul>";
    $i=0;
    foreach($x->channel->item as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
        $i++;
        if($i==5)
         break;
    }
    echo "</ul>";
  }

  function getFeed2() {
      $content = file_get_contents("http://rss.cnn.com/rss/edition_space.rss");
      $x = new SimpleXmlElement($content);
      echo "<ul>";
      $i=0;
      foreach($x->channel->item as $entry) {
          echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
          $i++;
          if($i==5)
           break;
      }
      echo "</ul>";
    }

    function getFeed3() {
        $content = file_get_contents("http://rss.cnn.com/rss/edition_entertainment.rss");
        $x = new SimpleXmlElement($content);
        echo "<ul>";
        $i=0;
        foreach($x->channel->item as $entry) {
            echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
            $i++;
            if($i==5)
             break;
        }
        echo "</ul>";
      }

      function getFeedStock() {
          $content = file_get_contents("http://rss.cnn.com/rss/money_markets.rss");
          $x = new SimpleXmlElement($content);
          echo "<ul>";
          $i=0;
          foreach($x->channel->item as $entry) {
              echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
              $i++;
              if($i==10)
               break;
          }
          echo "</ul>";
        }



            function getFeedtech() {
                $content = file_get_contents("http://rss.cnn.com/rss/edition_technology.rss");
                $x = new SimpleXmlElement($content);
                echo "<ul>";
                $i=0;
                foreach($x->channel->item as $entry) {
                    echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
                    $i++;
                    if($i==10)
                     break;
                }
                echo "</ul>";
              }
?>
