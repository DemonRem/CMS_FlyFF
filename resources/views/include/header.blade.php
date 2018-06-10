<nav class="ui menu stackable">
	<div class="ui container">
		<a href="{{ route('home') }}" class="header item"><img class="logo" src="http://simg.gpotato.eu/common/icon/flyff.png"></a>
		<a href="{{ route('ranking.player') }}" class="item">@lang('site.nav.ranking')</a>
		<a href="{{ route('register') }}" class="item">@lang('site.nav.download')</a>
		<a href="{{ route('password.request') }}" class="item">@lang('site.nav.support')</a>
		<a href="{{ route('home') }}" class="item">@lang('site.nav.shop')</a>
		<div class="right menu">
			@auth
				<div class="ui dropdown icon item">
					<span>{{ auth()->user()->name }} <i class="user circle icon"></i></span>
					<div class="menu">
						<div class="item">My account</div>
						<div class="divider"></div>
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="item">
							<i class="sign out icon"></i>@lang('site.home.aside.my_account.logout')
						</a>
					</div>
				</div>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			@else
				<a href="{{ route('login') }}" class="item">@lang('site.nav.login')</a>
				<a href="{{ route('register') }}" class="item">@lang('site.nav.register')</a>
			@endauth
		</div>
	</div>
</nav>
<header class="ui container">
	<section class="logo">
		<img src="http://eu-uimg-wgp.webzen.com/788253779/Banner/07072014_111943_flyff-logo-new_407839.png" alt="logo">
	</section>
</header>