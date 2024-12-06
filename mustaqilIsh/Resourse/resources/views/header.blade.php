<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul id="topnav">
      <li class="active"><a href="{{route('home.page')}}">Asosiy</a></li>
      <li><a href="{{route('umumiy.page')}}">umumiy</a></li>
      <li><a href="{{route('profil.page')}}">Profil</a></li>
    </ul>
    <form action="#" method="post" id="search">
      <fieldset>
        <legend>Site Search</legend>
        <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
        <input type="image" id="go" src="layout/images/search.gif" alt="Search" />
      </fieldset>
    </form>
  </div>
</div>

@yield('content')

<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Raximbayeva Barchinoy <a href="#"></a></p>
    <p class="fl_right">@barchinoyraximbayeva2003@gamil.com<a target="_blank" href="" title="Email"></a></p>
  </div>
</div>