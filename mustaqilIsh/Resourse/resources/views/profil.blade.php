@extends('header')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoFolio | Portfolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">PhotoFolio</a></h1>
      <p>Free Website Template</p>
    </div>
    <div class="fl_right"><a href="#"><img src="../images/demo/468x60.gif" alt="" /></a></div>
  </div>
</div>
@section('content')
<div class="wrapper col2">
  <div id="container" class="clear"> 
    <div id="portfolio">
      <div class="portfoliocontainer clear">
        <div class="fl_right">
          <ul>
            <li><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
            <li><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
            <li class="last"><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
            <li><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
            <li><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
            <li class="last"><img src="../images/demo/210x150.gif" alt="" />
              <p class="name">Project Name</p>
              <p class="readmore"><a href="#">View Project Details &raquo;</a></p>
            </li>
          </ul>
        </div>
      </div>     
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Next &raquo;</a></li>
      </ul>
    </div>
    @append
  </div>
</div>
</body>
</html>
