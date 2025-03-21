@extends('layouts.app')
@section('content')
<div id="app" class="layout-wrapper">

    @include('include.sidebar')

    <div class="container addcartwidth">
        @include('include.navbar')

        <div class="d-flex justify-content-between align-items-center mt-3 p-3">
            <h2>Site Work</h2>
            <span>Work Type: <strong>{{ ucfirst($party->work_type) }}</strong></span>
            <a href="{{ route('workgroup.addworkgroup') }}" class="btn btn-dark">+ Add Group</a>
        </div>

        <form method="POST" action="{{ route('parties.saveSiteWork', ['party' => $party->id, 'list' => $listId]) }}" id="siteWorkForm">
            @csrf

            @foreach($groups as $group)
            <div class="card mb-3">
                <div class="card-header">
                    <h5>{{ $group->group_name }}</h5>
                </div>
                <div class="card-body">

                    <input type="hidden" name="group_ids[]" value="{{ $group->id }}">

                    @if($group->questions->count())
                    @foreach($group->questions as $question)
                    @php
                    $values = explode(',', $question->question_value);
                    @endphp

                    <div class="question-block mb-3">
                        <label class="form-label">{{ $question->question_title }}</label>

                        @foreach($values as $value)
                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - by builder"
                                class="form-check-input"
                                data-question-id="{{ $question->id }}">
                            <label class="form-check-label">
                                by builder
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - by owner"
                                class="form-check-input"
                                data-question-id="{{ $question->id }}">
                            <label class="form-check-label">
                                by owner
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - N/A"
                                class="form-check-input"
                                data-question-id="{{ $question->id }}">
                            <label class="form-check-label">
                                N/A
                            </label>
                        </div>
                        @endforeach
                    </div>

                    @endforeach
                    @else
                    <p class="text-muted">No questions found for this group.</p>
                    @endif
                </div>
            </div>
            @endforeach

            <!-- Submit section -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-dark me-2">Save</button>
                <button type="submit" name="save_send" class="btn btn-success me-2">Save & Send</button>
                <a href="{{ route('parties.show', $party->id) }}" class="btn btn-outline-dark">Cancel</a>
            </div>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('siteWorkForm');

        form.addEventListener('submit', function(e) {
            let errorMessages = [];

            document.querySelectorAll('.question-block').forEach(block => {
                const checkboxes = block.querySelectorAll('input[type="checkbox"]');
                const anyChecked = Array.from(checkboxes).some(cb => cb.checked);

                if (!anyChecked) {
                    const label = block.querySelector('label').innerText;
                    errorMessages.push(`- ${label}`);
                }
            });

            if (errorMessages.length > 0) {
                e.preventDefault();
                alert("Please select at least one option for the following question(s):\n\n" + errorMessages.join('\n'));
            }
        });
    });
</script>
@endsection