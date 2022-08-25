<?php

   $artworkElements = [
      [
         "title" => 'Pisces',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1646090981111-CUHO7LLK9XEEIO25G127/Fish-in-situ.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Yokai',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1646183256003-BQLEVBO3Z1GXGQ4JUARU/yokaiinsitu-2000.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Los Cangrejos',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1649195204318-2WOHOQBJ6T404TGIYV5H/CrabsinSitu-texture2.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Snow Crows',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1654981476908-EA8C489H18DWNT71OYJ4/crowsinsitu-cropped6sqsp.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Chinese Lunar New Year Series',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1646165889155-9Q4KK0YURFC73AV4PKIO/Pig-situ.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Experimental',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1651604950528-TMTYW3K53IY6GIIR4RN6/AOK-cropped.jpg?format=1000w',
         'author' => 'Signorella'
      ],
      [
         "title" => 'Former Life',
         "image" => 'https://images.squarespace-cdn.com/content/v1/6152591795c7f8217431ee46/1646248338014-ZGOPDFXEUQ7W4GHQEZWR/priorlife.jpg?format=1000w',
         'author' => 'Signorella'
      ],
   ];

   header('Content-Type: application/json');
	
   echo json_encode($artworkElements);