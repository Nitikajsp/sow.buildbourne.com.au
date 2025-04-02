@extends('layouts.app')
@section('content')

<div id="app" class="layout-wrapper">

    @include('include.sidebar')

    <div class="container addcartwidth">
        @include('include.navbar')

        <div class="d-flex justify-content-between align-items-center mt-3 p-3">
            <h2>Site Work</h2>
            <a href="{{ route('workgroup.addworkquestion') }}" class="btn btn-dark">+ Add Question</a>
        </div>

        <form method="POST" action="{{ route('parties.saveSiteWork', ['party' => $party->id, 'list' => $listId]) }}" id="siteWorkForm">
            @csrf

            <!-- Question 1 -->

            <div class="card mb-3 ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.1 Access Road to Site</h5>
                    <div>
                        <label class="me-3">By Builder
                            <input type="checkbox" name="access_road" value="builder" class="form-check-input">
                        </label>
                        <label class="me-3">By Owner
                            <input type="checkbox" name="access_road" value="owner" class="form-check-input">
                        </label>
                        <label>N/A
                            <input type="checkbox" name="access_road" value="na" class="form-check-input">
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="access_road_option" id="access_fixed" value="fixed_price">
                        <label class="form-check-label" for="access_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="access_road_option" id="access_provisional" value="provisional_sum">
                        <label class="form-check-label" for="access_provisional">Provisional Sum</label>
                    </div>
                </div>

            </div>

            <!-- Question 2 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.2 Site Clearing</h5>
                    <div>
                        <label class="me-3">By Builder <input type="checkbox" class="form-check-input" name="site_clearing_by[]" value="builder"></label>
                        <label class="me-3">By Owner <input type="checkbox" class="form-check-input" name="site_clearing_by[]" value="owner"></label>
                        <label>N/A <input type="checkbox" class="form-check-input" name="site_clearing_by[]" value="na"></label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="site_clearing_option" id="clearing_fixed" value="fixed_price">
                        <label class="form-check-label" for="clearing_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="site_clearing_option" id="clearing_provisional" value="provisional_sum">
                        <label class="form-check-label" for="clearing_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>


            <!-- Question 3 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.3 Excavation of Site</h5>
                    <div>
                        <label class="me-3">
                            By Builder <input type="checkbox" class="form-check-input" name="excavation_by" value="builder">
                        </label>
                        <label class="me-3">
                            By Owner <input type="checkbox" class="form-check-input" name="excavation_by" value="owner">
                        </label>
                        <label>
                            N/A <input type="checkbox" class="form-check-input" name="excavation_by" value="na">
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="excavation_type" id="excavation_fixed" value="fixed_price">
                        <label class="form-check-label" for="excavation_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="excavation_type" id="excavation_provisional" value="provisional_sum">
                        <label class="form-check-label" for="excavation_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>


            <!-- Question 4 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.4 Removal of Soil & Tree Debris</h5>
                    <div>
                        <label class="me-3">
                            By Builder <input type="checkbox" class="form-check-input" name="removal_by" value="builder">
                        </label>
                        <label class="me-3">
                            By Owner <input type="checkbox" class="form-check-input" name="removal_by" value="owner">
                        </label>
                        <label>
                            N/A <input type="checkbox" class="form-check-input" name="removal_by" value="na">
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="removal_type" id="removal_fixed" value="fixed_price">
                        <label class="form-check-label" for="removal_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="removal_type" id="removal_provisional" value="provisional_sum">
                        <label class="form-check-label" for="removal_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>


            <!-- Question 5 -->

            <div class="card mb-3">
                <div class="card-header">
                    <h5>1.5 Initial Power to Site</h5>
                </div>
                <div class="card-body">
                    <p>Power Supply:</p>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="power_supply" id="power_owner" value="owner">
                        <label class="form-check-label" for="power_owner">To site by owner</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="power_supply" id="arial_temp" value="aerial_temporary">
                        <label class="form-check-label" for="arial_temp">Aerial temporary by builder
                            <small>(Aerial mains supply to temporary power pole)</small>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="power_supply" id="underground_temp" value="underground_temporary">
                        <label class="form-check-label" for="underground_temp">Underground temporary by builder
                            <small>(Underground mains supply to meter box on stand)</small>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="power_supply" id="generator_temp" value="generator_temporary">
                        <label class="form-check-label" for="generator_temp">Generator temporary by builder
                            <small>(Hire rate as allowed in the contract price)</small>
                        </label>
                    </div>
                    <p><strong>Note :</strong> <em> If required - temporary power by generator will be at a weekly hire rate of $165.00 inc. GST.</em></p>
                </div>
            </div>

            <!-- Question 6 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.6 Water to Site</h5>
                    <div>
                        <label class="me-3">
                            By Builder <input type="checkbox" class="form-check-input" name="water_supply" value="builder">
                        </label>
                        <label class="me-3">
                            By Owner <input type="checkbox" class="form-check-input" name="water_supply" value="owner">
                        </label>
                        <label>
                            N/A <input type="checkbox" class="form-check-input" name="water_supply" value="na">
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="water_cost" id="water_fixed" value="fixed_price">
                        <label class="form-check-label" for="water_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="water_cost" id="water_provisional" value="provisional_sum">
                        <label class="form-check-label" for="water_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>


            <!-- Question 7 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.7 Site Clean (During Construction)</h5>
                    <div>
                        <label class="me-3">
                            By Builder <input type="checkbox" class="form-check-input" name="site_clean" value="builder">
                        </label>
                        <label class="me-3">
                            By Owner <input type="checkbox" class="form-check-input" name="site_clean" value="owner">
                        </label>
                        <label>
                            N/A <input type="checkbox" class="form-check-input" name="site_clean" value="na">
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="site_clean_cost" id="site_clean_fixed" value="fixed_price">
                        <label class="form-check-label" for="site_clean_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="site_clean_cost" id="site_clean_provisional" value="provisional_sum">
                        <label class="form-check-label" for="site_clean_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>

            <!-- Question 8 -->

            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>1.8 Internal Clean (Prior to Handover)</h5>
                    <div>
                        <label class="me-3">
                            By Builder <input type="checkbox" class="form-check-input" name="internal_clean" value="builder">
                        </label>
                        <label class="me-3">
                            By Owner <input type="checkbox" class="form-check-input" name="internal_clean" value="owner">
                        </label>
                        <label>
                            N/A <input type="checkbox" class="form-check-input" name="internal_clean" value="na">
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <p>If by builder:</p>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="internal_clean_cost" id="internal_clean_fixed" value="fixed_price">
                        <label class="form-check-label" for="internal_clean_fixed">Fixed price included in quote</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="internal_clean_cost" id="internal_clean_provisional" value="provisional_sum">
                        <label class="form-check-label" for="internal_clean_provisional">Provisional Sum</label>
                    </div>
                </div>
            </div>

            <div class="container my-4">
                <div class="card p-3">
                    <h5>1.9 Termite Protection</h5>
                    <p><strong>Note 1:</strong> <em>No allowance has been made for termite protection other than pipe penetrations in concrete slabs as applicable. Protection provided is the minimum as per the building code of Australia for steel framing.</em></p>

                    <!-- Request Further Protection -->

                    <div class="mb-3">
                        <label class="me-2">- Request further protection:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="termite_protection_request" id="yesOption" value="yes">
                            <label class="form-check-label" for="yesOption">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="termite_protection_request" id="noOption" value="no">
                            <label class="form-check-label" for="noOption">No</label>
                        </div>
                    </div>

                    <!-- Builder / Owner Checkboxes -->

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="termite_protection_by[]" id="builderOption" value="builder">
                            <label class="form-check-label" for="builderOption">By Builder</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="termite_protection_by[]" id="ownerOption" value="owner">
                            <label class="form-check-label" for="ownerOption">By Owner</label>
                        </div>
                    </div>

                    <!-- Protection Type -->

                    <div class="mb-3">
                        <label for="protectionType">- Protection type:</label>
                        <input type="text" class="form-control form-control-sm w-50 d-inline-block ms-2" name="termite_protection_type" id="protectionType" placeholder="Enter protection type">
                    </div>
                </div>
            </div>

            <div class="container my-4">
                <div class="card p-3">
                    <h5>1.10 Site Works Notes</h5>
                    <div class="d-flex align-items-center">

                        <!-- Label and Input -->

                        <label for="siteWorksNotes" class="me-2 mb-0">Notes to above:</label>
                        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                            name="site_works_notes" id="siteWorksNotes" placeholder="Enter site works notes">
                    </div>
                </div>
            </div>

            @include('question.foundations_and_concreting')

            @include('question.drainer_plumber_gas_fitter')

            @include('question.carpenter')

            @include('question.carpenter_interior')

            @include('question.bricklayer_masonry')

            @include('question.roof_plumber')

            @include('question.windows_entry_doors')

            @include('question.electrician')

            @include('question.plasterer_internal_linings')

            @include('question.kitchen_joinery')

            @include('question.wall_floor_tiler')

            @include('question.painter')

            @include('question.pc_selections')

            @include('question.amounts_additional_notes')

            @include('question.schedule_of_provisional_sums')

            <div class="d-flex justify-content-end mb-5 px-3">
                <button type="submit" class="btn btn-dark me-2">Save</button>
                <button type="submit" class="btn btn-danger me-2">Save & Send</button>
                <a href="#" class="btn btn-outline-dark ">Cancel</a>
            </div>
        </form>
    </div>
</div>

<!-- Data Preview Modal -->

<div class="modal fade" id="jsonPreviewModal" tabindex="-1" aria-labelledby="jsonPreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jsonPreviewModalLabel">Data Preview</h5>

                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">

                <!-- <div class="table-responsive"> -->

                <table class="table table-striped table-bordered">
                    <tbody id="jsonPreviewTable"></tbody>
                </table>

                <!-- </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
                <button type="button" id="confirmSubmit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $("#siteWorkForm").on("submit", function(e) {
            e.preventDefault();
            let formData = {};
            $(this).serializeArray().forEach(field => {
                if (formData[field.name]) {
                    if (!Array.isArray(formData[field.name])) {
                        formData[field.name] = [formData[field.name]];
                    }
                    formData[field.name].push(field.value);
                } else {
                    formData[field.name] = field.value || "N/A";
                }
            });

            let previewContent = "";
            for (let key in formData) {
                let value = formData[key];
                if (Array.isArray(value)) {
                    value = value.filter(Boolean).length > 0 ? value.join(", ") : "N/A";
                } else {
                    value = value || "N/A";
                }

                previewContent += `
                <tr>
                    <td><strong>${key.replace(/_/g, " ")}</strong></td>
                    <td>${value}</td>
                </tr>`;
            }

            $("#jsonPreviewTable").html(previewContent);

            $("#jsonPreviewModal").modal("show");
        });

        $("#confirmSubmit").on("click", function() {
            $("#siteWorkForm").off("submit").submit();
        });
    });
</script>

@endsection