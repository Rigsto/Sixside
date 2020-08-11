@foreach ($items as $item)
    @if ($filter_by == 'location')
        <li class="list-inline-item">
            <button class="category-name btn py-lg-1 px-3 mt-0 mt-lg-2 mb-lg-3 my-lg-0" onclick="filter_jobs_action(this, {{ $item->id  }}, null)">{{ $item->location }}</button>
            <input type="hidden" name="loc_id" value="{{ $item->id }}">
        </li>
    @else
        <li class="list-inline-item">
            <button class="category-name btn py-lg-1 px-3 mt-0 mt-lg-2 mb-lg-3 my-lg-0" onclick="filter_jobs_action(this, null, {{ $item->id }})">{{ $item->name }}</button>
            <input type="hidden" name="cat_id" value="{{ $item->id }}">
        </li>
    @endif
@endforeach