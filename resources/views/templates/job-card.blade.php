@foreach ($jobs as $job)
<div class="col-12 col-lg-4 mb-4">
    <a href="{{ route('jobs.jobDetail',['slug' => $job->slug]) }}">
        <div class="job-card p-4">
            <h5 class="mb-1">{{ $job->title }}</h5>
            <p class="text-secondary mb-3">by {{ $job->company->company_name }}</p>
            <p class="text-secondary">Apply Before</p>
            <p class="text-primary-red mb-3">{{ date_format(date_create($job->end_date),"d F Y") }}</p>
            <div class="row text-primary-red font-weight-medium">
                <div class="col-12 col-lg-6">
                    <p class="truncate-text"><i class="fas fa-map-marker-alt mr-1"></i>{{ $job->company->address }}</p>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="text-lg-right truncate-text"><i class="fas fa-suitcase mr-1"></i>{{ $job->category->name }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
@endforeach