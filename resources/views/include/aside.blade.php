<aside>
	@auth
		<div class="box" id="my_account">
			<div class="ui attached message">
				<h1 class="header">@lang('site.title.my_account')</h1>
			</div>
			<div class="ui attached fluid segment">
				<form id="logout-form" action="{{ route('logout') }}" method="POST">
					@csrf
					<button class="ui red fluid mini basic button" type="submit"><i class="sign out icon"></i>@lang('site.home.aside.my_account.logout')</button>
				</form>
			</div>
		</div>
	@endauth
	<div class="box">
		<div class="ui attached message">
			<h1 class="header">@lang('site.title.server_info')</h1>
		</div>
		<div class="ui attached fluid segment">
			<h1>Content</h1>
		</div>
	</div>
</aside>