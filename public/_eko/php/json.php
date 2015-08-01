<?php

header('Content-Type: application/json');

$news = array();

$news[] = array('title' => 'Lorem ipsum dolor sit amet',
        'url' => 'http://google.com',
        'image' => 'http://cdn.klimg.com/resized/630x/g/k/u/kumpulan_meme_sudah_kuduga_yang_bikin_dunia_maya_geger/meme_sudah_kuduga-20150518-011-rita.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo felis, sagittis nec neque eu, maximus feugiat nibh. Etiam porttitor porta quam nec lobortis. Nam facilisis nulla et lorem dignissim, in gravida leo auctor. Duis id tempor neque. Nulla vestibulum elit at augue sollicitudin, eu auctor turpis lobortis. Mauris luctus fringilla dolor, eget vulputate sem feugiat in. Donec pharetra ligula tincidunt, tincidunt mauris non, sagittis nisi. Morbi lacinia tortor et finibus elementum. Sed aliquam ante nec tincidunt convallis. Donec bibendum eleifend arcu, at elementum mi luctus sit amet. Donec vitae purus vel metus elementum aliquam. Suspendisse vitae risus ac orci ultricies rhoncus. Fusce dapibus rhoncus nisl dignissim semper.');

$news[] = array('title' => 'Lorem ipsum dolor sit amet 2',
        'url' => 'http://google.co.id',
        'image' => 'http://cdn.klimg.com/resized/630x/g/k/u/kumpulan_meme_sudah_kuduga_yang_bikin_dunia_maya_geger/meme_sudah_kuduga-20150518-011-rita.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo felis, sagittis nec neque eu, maximus feugiat nibh. Etiam porttitor porta quam nec lobortis. Nam facilisis nulla et lorem dignissim, in gravida leo auctor. Duis id tempor neque. Nulla vestibulum elit at augue sollicitudin, eu auctor turpis lobortis. Mauris luctus fringilla dolor, eget vulputate sem feugiat in. Donec pharetra ligula tincidunt, tincidunt mauris non, sagittis nisi. Morbi lacinia tortor et finibus elementum. Sed aliquam ante nec tincidunt convallis. Donec bibendum eleifend arcu, at elementum mi luctus sit amet. Donec vitae purus vel metus elementum aliquam. Suspendisse vitae risus ac orci ultricies rhoncus. Fusce dapibus rhoncus nisl dignissim semper.');

echo json_encode(array('data'=>$news));