<form class="d-inline" action="{{route('setLanguageLocale',$lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn p-2">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="25" height="25"/>
    </button>
</form>