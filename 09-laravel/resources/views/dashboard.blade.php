<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button :href="route('logout')"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Log Out
    </button>
</form>
