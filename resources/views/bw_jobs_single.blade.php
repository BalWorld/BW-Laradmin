@extends('layout')
@section('content')

<td>{{ $job->bw_job_name }}</td>
<td>{{ $job->bw_job_title }}</td>
<td>{{ $job->bw_job_description }}</td>
<td>{{ $job->bw_job_pskills }}</td>
<td>{{ $job->bw_job_sskills }}</td>
<td>{{ $job->bw_job_oskills }}</td>
<td>{{ $job->bw_job_location }}</td>
<td>{{ $job->bw_job_minexp }} - {{ $job->bw_job_maxexp }}</td>
<td>{{ $job->bw_job_sal }}</td>
<td>{{ $job->bw_job_type }}</td>
<td>{{ $job->bw_job_wlocation }}</td>

@endsection
