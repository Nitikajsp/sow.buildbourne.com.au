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

        <form method="POST" action="{{ route('parties.saveSiteWork', ['party' => $party->id, 'list' => $listId]) }}">
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

                        <!-- Hidden dummy input to enforce required -->
                        <input type="checkbox" name="dummy_{{ $question->id }}" style="display:none" required>

                        @foreach($values as $value)
                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - by builder"
                                class="form-check-input"
                                id="question_{{ $question->id }}_{{ $loop->parent->index }}_{{ $loop->index }}_builder">
                            <label class="form-check-label" for="question_{{ $question->id }}_{{ $loop->parent->index }}_{{ $loop->index }}_builder">
                                by builder
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - by owner"
                                class="form-check-input"
                                id="question_{{ $question->id }}_owner_{{ $loop->parent->index }}_{{ $loop->index }}_owner">
                            <label class="form-check-label" for="question_{{ $question->id }}_owner_{{ $loop->parent->index }}_{{ $loop->index }}_owner">
                                by owner
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="checkbox"
                                name="questions[{{ $question->id }}][]"
                                value="{{ trim($value) }} - N/A"
                                class="form-check-input"
                                id="question_{{ $question->id }}_na_{{ $loop->parent->index }}_{{ $loop->index }}_na">
                            <label class="form-check-label" for="question_{{ $question->id }}_na_{{ $loop->parent->index }}_{{ $loop->index }}_na">
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

<!-- JavaScript to handle removing 'required' from dummy input -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.question-block').forEach(block => {
            const checkboxes = block.querySelectorAll('input[type="checkbox"]:not([name^="dummy_"])');
            const dummy = block.querySelector('input[name^="dummy_"]');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                    dummy.required = !anyChecked;
                });
            });
        });
    });
</script>

@endsection