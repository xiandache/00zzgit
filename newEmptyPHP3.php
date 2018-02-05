<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
}
.menuitem {
  padding:8px;
  margin-top:7px;
  border-bottom:1px solid #f1f1f1;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:lightblue;
  float:left;
  width:20%;
  padding:10px 15px;
  margin-top:7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width:80%;
  }
  .right {
    width:100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;">

<div style="background-color:#f1f1f1;padding:15px;">
  <h1>The Puplit Rock</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem">The Drive</div>
    <div class="menuitem">The Walk</div>
    <div class="menuitem">The Return</div>
    <div class="menuitem">The End</div>
  </div>

  <div class="main">
    <h2>The Walk</h2>
    <p>The walk to the Pulpit Rock will take you approximately two hours, give or take an hour depending on the weather conditions and your physical shape.</p>
    <img src="apple-touch-icon - NW.png" style="width:50%">
  </div>

  <div class="right">
    <h2>What?</h2>
    <p>The Pulpit Rock is a part of a mountain that looks like a pulpit.</p>
    <h2>Where?</h2>
    <p>The Pulpit Rock is in Norway.</p>
    <h2>Price?</h2>
    <p>The Walk is free!</p>
  </div>
</div>

<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;">This web page is a part of a demonstration of fluid web design made by w3schools.com. Resize the browser window to see the content respond to the resizing.</div>

</body>
</html>