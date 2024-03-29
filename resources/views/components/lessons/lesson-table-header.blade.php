<th class="text-slate-400 hover:text-slate-500 hover:underline transition-all duration-150">
  <!-- !!!!! DON'T CHANGE THE INDENTATION OF THE HREF, IT WILL MESS UP THE URL !!!!! -->
  <a
    href="/lessons-grid/
								{{ !request('sort-direction') ? '?sort-field=' . $sortField . '&sort-direction=asc' : '' }}
								{{ request('sort-field') && request('sort-field') == $sortField && request('sort-direction') && request('sort-direction') == 'asc' ? '?sort-field=' . $sortField . '&sort-direction=desc' : '' }}
								{{ request('sort-field') && request('sort-field') != $sortField ? '?sort-field=' . $sortField . '&sort-direction=asc' : '' }}
								{{ request('search') && !request('sort-direction') ? '&search=' . request('search') : '' }}
								{{ request('search') && request('sort-direction') === 'asc' ? '&search=' . request('search') : '' }}
								{{ request('search') && request('sort-direction') === 'desc' && request('sort-field') == $sortField ? '?search=' . request('search') : '' }}
								{{ request('search') && request('sort-direction') === 'desc' && request('sort-field') != $sortField ? '&search=' . request('search') : '' }}
								">
    {{ $content }}
    @if (request('sort-field') === $sortField)
      @if (request('sort-direction') && request('sort-direction') === 'asc')
        <span>↑</span>
      @endif
      @if (request('sort-direction') && request('sort-direction') === 'desc')
        <span>↓</span>
      @endif
    @endif
  </a>
</th>
