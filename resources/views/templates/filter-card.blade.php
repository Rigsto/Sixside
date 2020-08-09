@foreach ($items as $item)
    @if ($filter_by == 'location')
        <li class="list-inline-item">
            <button class="category-name btn py-1 px-3 mt-2 mb-lg-3 my-lg-0" onclick="filter_jobs_action({{ $item->id  }}, null)">{{ $item->location }}</button>
        </li>
    @else
        <li class="list-inline-item">
            <button class="category-name btn py-1 px-3 mt-2 mb-lg-3 my-lg-0" onclick="filter_jobs_action(null, {{ $item->id }})">{{ $item->name }}</button>
        </li>
    @endif
@endforeach