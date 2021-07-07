	<div class="y">
<h1>Our Technology Blog Feed</h1>
</div>
	<div>

  <?php
  include('rssclass.php');

  $feedlist = new rss('http://www.blog.neudeep.com/feed/');
  echo $feedlist->display(3,"Neudeep Technology Blog");

  $feedlist = new rss('https://www.redminelab.com/feed/');
  echo $feedlist->display(3,"Redmine Lab");
  
  $feedlist = new rss('http://feeds.feedburner.com/MaholDotOrg');
  echo $feedlist->display(3,"MaholDotOrg");
  ?> 
  </div>
    
</br></br></br></br></br>
 <style>
.y h1{
font-weight: bold;
 text-align: center;
font-size: 48px;
align-items: center;
}
      .vas{
    float:left;
    width:300px;
    padding:30px;
    padding-left : 60px;
}
.title-head {
    font-size:18px;
    font-weight:bold;
    text-align:left;
    background-color:#081313;
    color:#FFFFFF;
    padding:5px;}
.feeds-links {
    background-color:#D5F9F9;
    box-shadow: 10px 5px 5px #838383;
    text-align:left;
    padding:5px;
    border:1px solid #dedede;
 }
  </style>
