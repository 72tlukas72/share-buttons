<?php 

return function (array $extend_args) {
 $extend_args['output'] .= "<h2>Sdílet</h2>";
 $extend_args['output'] .= "<a href='#' class='social-fb icon brands fa-facebook-f' target='_blank' rel='nofollow' title='Sdílet na Facebook'></a>";
 $extend_args['output'] .= "<a href='#' class='social-tw icon brands fa-twitter' target='_blank' rel='nofollow' title='Sdílet na Twitter' style='margin-left:10px;margin-right:10px'></a>";
 $extend_args['output'] .= "<a href='#' class='social-li icon brands fa-linkedin' target='_blank' rel='nofollow' title='Sdílet na LinkedIn'></a>";
 
 $extend_args['output'] .= "<script>var url = encodeURIComponent('".Sunlight\Core::getCurrentUrl()->build()."');var title = encodeURIComponent('".Sunlight\Template::siteTitle()." - ".$extend_args['article']['title']."');";
 $extend_args['output'] .= "$('.social-fb').attr('onclick', \"window.open('https://www.facebook.com/sharer.php?u=\"+url+\"','_blank','width=520,height=300,menubar=no,top=200,left=200'); return false\");";
 $extend_args['output'] .= "$('.social-tw').attr('onclick', \"window.open('https://twitter.com/share?url=\"+url+\"&text=\"+title+\"','_blank','width=520,height=300,menubar=no,top=200,left=200'); return false\");";
 $extend_args['output'] .= "$('.social-li').attr('onclick', \"window.open('http://www.linkedin.com/shareArticle?mini=true&url=\"+url+\"&title=\"+title+\"','_blank','width=520,height=300,menubar=no,top=200,left=200'); return false\");</script>";
};
