@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

@endpush





@section('content')

<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        @include('include.navbar')
        <div class="container-fluid mt-4">
            <h2 class="mb-4">Submission Details</h2>
            <div class="card-body">
                <form method="POST" action="{{ route('submission.update', $submissionId) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="submission_id" value="{{ $submissionId }}">

                    <div style="background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;">
                        <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                            <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                            </div>
                        </div>
                        <table
                            style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                            <tbody>
                                <tr>
                                    <td
                                        colspan="3"
                                        style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                        1) SITE WORKS
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.1 Access Road to Site</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder
                                        <input type="radio" name="sow[site_work][access_road]" value="builder" class="form-check-input"
                                            {{ (isset($workData['sow']['site_work']['access_road']) && $workData['sow']['site_work']['access_road'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner
                                        <input type="radio" name="sow[site_work][access_road]" value="owner" class="form-check-input"
                                            {{ (isset($workData['sow']['site_work']['access_road']) && $workData['sow']['site_work']['access_road'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" name="sow[site_work][access_road]" value="na" class="form-check-input"
                                            {{ (isset($workData['sow']['site_work']['access_road']) && $workData['sow']['site_work']['access_road'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>

                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][access_road_option]" id="access_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['access_road_option']) && $workData['sow']['site_work']['access_road_option'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="access_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][access_road_option]" id="access_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['access_road_option']) && $workData['sow']['site_work']['access_road_option'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="access_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="access_road_to_site" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][access_road_to_site]"
                                        id="access_road_to_site" placeholder="Enter access road to site notes"
                                        value="{{ isset($workData['sow']['site_work']['access_road_to_site']) ? $workData['sow']['site_work']['access_road_to_site'] : '' }}">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.2 Site Clearing</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder
                                        <input type="radio" class="form-check-input" name="sow[site_work][site_clearing_by]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['site_clearing_by']) && $workData['sow']['site_work']['site_clearing_by'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner
                                        <input type="radio" class="form-check-input" name="sow[site_work][site_clearing_by]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['site_clearing_by']) && $workData['sow']['site_work']['site_clearing_by'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input" name="sow[site_work][site_clearing_by]" value="na"
                                            {{ (isset($workData['sow']['site_work']['site_clearing_by']) && $workData['sow']['site_work']['site_clearing_by'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>

                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][site_clearing_option]" id="clearing_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['site_clearing_option']) && $workData['sow']['site_work']['site_clearing_option'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="clearing_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][site_clearing_option]" id="clearing_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['site_clearing_option']) && $workData['sow']['site_work']['site_clearing_option'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="clearing_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="site_clearing" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][site_clearing]"
                                        id="site_clearing" placeholder="Enter site clearing notes"
                                        value="{{ isset($workData['sow']['site_work']['site_clearing']) ? $workData['sow']['site_work']['site_clearing'] : '' }}">
                                </div>
                            </div>
                        </div>



                        <!-- Question 3 -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.3 Excavation of Site</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder
                                        <input type="radio" class="form-check-input" name="sow[site_work][excavation_by]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['excavation_by']) && $workData['sow']['site_work']['excavation_by'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner
                                        <input type="radio" class="form-check-input" name="sow[site_work][excavation_by]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['excavation_by']) && $workData['sow']['site_work']['excavation_by'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input" name="sow[site_work][excavation_by]" value="na"
                                            {{ (isset($workData['sow']['site_work']['excavation_by']) && $workData['sow']['site_work']['excavation_by'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>

                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][excavation_type]" id="excavation_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['excavation_type']) && $workData['sow']['site_work']['excavation_type'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="excavation_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][excavation_type]" id="excavation_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['excavation_type']) && $workData['sow']['site_work']['excavation_type'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="excavation_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="excavation_of_site" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][excavation_of_site]"
                                        id="excavation_of_site" placeholder="Enter excavation of site notes"
                                        value="{{ isset($workData['sow']['site_work']['excavation_of_site']) ? $workData['sow']['site_work']['excavation_of_site'] : '' }}">
                                </div>
                            </div>
                        </div>


                        <!-- Question 4 -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.4 Removal of Soil & Tree Debris</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder
                                        <input type="radio" class="form-check-input" name="sow[site_work][removal_by]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['removal_by']) && $workData['sow']['site_work']['removal_by'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner
                                        <input type="radio" class="form-check-input" name="sow[site_work][removal_by]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['removal_by']) && $workData['sow']['site_work']['removal_by'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input" name="sow[site_work][removal_by]" value="na"
                                            {{ (isset($workData['sow']['site_work']['removal_by']) && $workData['sow']['site_work']['removal_by'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>

                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][removal_type]" id="removal_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['removal_type']) && $workData['sow']['site_work']['removal_type'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="removal_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][removal_type]" id="removal_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['removal_type']) && $workData['sow']['site_work']['removal_type'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="removal_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="soil_tree" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][soil_tree]"
                                        id="soil_tree" placeholder="Enter removal of soil & tree debris notes"
                                        value="{{ isset($workData['sow']['site_work']['soil_tree']) ? $workData['sow']['site_work']['soil_tree'] : '' }}">
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
                                    <input type="radio" class="form-check-input" name="sow[site_work][initial_power]" id="power_owner" value="owner"
                                        {{ (isset($workData['sow']['site_work']['initial_power']) && $workData['sow']['site_work']['initial_power'] == 'owner') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="power_owner">To site by owner</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][initial_power]" id="arial_temp" value="aerial_temporary"
                                        {{ (isset($workData['sow']['site_work']['initial_power']) && $workData['sow']['site_work']['initial_power'] == 'aerial_temporary') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="arial_temp">Aerial temporary by builder
                                        <small>(Aerial mains supply to temporary power pole)</small>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][initial_power]" id="underground_temp" value="underground_temporary"
                                        {{ (isset($workData['sow']['site_work']['initial_power']) && $workData['sow']['site_work']['initial_power'] == 'underground_temporary') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="underground_temp">Underground temporary by builder
                                        <small>(Underground mains supply to meter box on stand)</small>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][initial_power]" id="generator_temp" value="generator_temporary"
                                        {{ (isset($workData['sow']['site_work']['initial_power']) && $workData['sow']['site_work']['initial_power'] == 'generator_temporary') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="generator_temp">Generator temporary by builder
                                        <small>(Hire rate as allowed in the contract price)</small>
                                    </label>
                                </div>
                                <p><strong>Note :</strong> <em> If required - temporary power by generator will be at a weekly hire rate of $165.00 inc. GST.</em></p>
                                <div class="d-flex align-items-center">
                                    <label for="initial_power_to_site" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][initial_power_to_site]"
                                        id="initial_power_to_site" placeholder="Enter initial power to site notes"
                                        value="{{ isset($workData['sow']['site_work']['initial_power_to_site']) ? $workData['sow']['site_work']['initial_power_to_site'] : '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.6 Water to Site</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder <input type="radio" class="form-check-input" name="sow[site_work][water_supply]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['water_supply']) && $workData['sow']['site_work']['water_supply'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner <input type="radio" class="form-check-input" name="sow[site_work][water_supply]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['water_supply']) && $workData['sow']['site_work']['water_supply'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A <input type="radio" class="form-check-input" name="sow[site_work][water_supply]" value="na"
                                            {{ (isset($workData['sow']['site_work']['water_supply']) && $workData['sow']['site_work']['water_supply'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][water_cost]" id="water_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['water_cost']) && $workData['sow']['site_work']['water_cost'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="water_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][water_cost]" id="water_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['water_cost']) && $workData['sow']['site_work']['water_cost'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="water_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="water_to_site" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][water_to_site]"
                                        id="water_to_site" placeholder="Enter water to site notes"
                                        value="{{ isset($workData['sow']['site_work']['water_to_site']) ? $workData['sow']['site_work']['water_to_site'] : '' }}">
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.7 Site Clean (During Construction)</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder <input type="radio" class="form-check-input" name="sow[site_work][site_clean]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['site_clean']) && $workData['sow']['site_work']['site_clean'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner <input type="radio" class="form-check-input" name="sow[site_work][site_clean]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['site_clean']) && $workData['sow']['site_work']['site_clean'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A <input type="radio" class="form-check-input" name="sow[site_work][site_clean]" value="na"
                                            {{ (isset($workData['sow']['site_work']['site_clean']) && $workData['sow']['site_work']['site_clean'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][site_clean_cost]" id="site_clean_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['site_clean_cost']) && $workData['sow']['site_work']['site_clean_cost'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="site_clean_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][site_clean_cost]" id="site_clean_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['site_clean_cost']) && $workData['sow']['site_work']['site_clean_cost'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="site_clean_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="site_clean_notes" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][site_clean_notes]"
                                        id="site_clean_notes" placeholder="Enter site clean notes"
                                        value="{{ isset($workData['sow']['site_work']['site_clean_notes']) ? $workData['sow']['site_work']['site_clean_notes'] : '' }}">
                                </div>
                            </div>
                        </div>



                        <!-- Question 8 -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>1.8 Internal Clean (Prior to Handover)</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder <input type="radio" class="form-check-input" name="sow[site_work][internal_clean]" value="builder"
                                            {{ (isset($workData['sow']['site_work']['internal_clean']) && $workData['sow']['site_work']['internal_clean'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner <input type="radio" class="form-check-input" name="sow[site_work][internal_clean]" value="owner"
                                            {{ (isset($workData['sow']['site_work']['internal_clean']) && $workData['sow']['site_work']['internal_clean'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A <input type="radio" class="form-check-input" name="sow[site_work][internal_clean]" value="na"
                                            {{ (isset($workData['sow']['site_work']['internal_clean']) && $workData['sow']['site_work']['internal_clean'] == 'na') ? 'checked' : '' }}>
                                    </label>

                                </div>
                            </div>
                            <div class="card-body">
                                <p>If by builder:</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][internal_clean_cost]" id="internal_clean_fixed" value="fixed_price"
                                        {{ (isset($workData['sow']['site_work']['internal_clean_cost']) && $workData['sow']['site_work']['internal_clean_cost'] == 'fixed_price') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="internal_clean_fixed">Fixed price included in quote</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="sow[site_work][internal_clean_cost]" id="internal_clean_provisional" value="provisional_sum"
                                        {{ (isset($workData['sow']['site_work']['internal_clean_cost']) && $workData['sow']['site_work']['internal_clean_cost'] == 'provisional_sum') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="internal_clean_provisional">Provisional Sum</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="internal_clean" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][internal_clean]"
                                        id="internal_clean" placeholder="Enter internal clean notes"
                                        value="{{ isset($workData['sow']['site_work']['internal_clean']) ? $workData['sow']['site_work']['internal_clean'] : '' }}">
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
                                        <input class="form-check-input" type="radio" name="sow[site_work][termite_protection_request]" id="yesOption" value="yes"
                                            {{ (isset($workData['sow']['site_work']['termite_protection_request']) && $workData['sow']['site_work']['termite_protection_request'] == 'yes') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="yesOption">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[site_work][termite_protection_request]" id="noOption" value="no"
                                            {{ (isset($workData['sow']['site_work']['termite_protection_request']) && $workData['sow']['site_work']['termite_protection_request'] == 'no') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="noOption">No</label>
                                    </div>
                                </div>

                                <!-- Builder / Owner radio buttons -->
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[site_work][termite_protection_by]" id="builderOption" value="builder"
                                            {{ (isset($workData['sow']['site_work']['termite_protection_by']) && $workData['sow']['site_work']['termite_protection_by'] == 'builder') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="builderOption">By Builder</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[site_work][termite_protection_by]" id="ownerOption" value="owner"
                                            {{ (isset($workData['sow']['site_work']['termite_protection_by']) && $workData['sow']['site_work']['termite_protection_by'] == 'owner') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="ownerOption">By Owner</label>
                                    </div>
                                </div>

                                <!-- Protection Type -->
                                <div class="mb-3">
                                    <label for="protectionType">- Protection type:</label>
                                    <input type="text" class="form-control form-control-sm w-50 d-inline-block ms-2" name="sow[site_work][termite_protection_type]" id="protectionType" placeholder="Enter protection type"
                                        value="{{ isset($workData['sow']['site_work']['termite_protection_type']) ? $workData['sow']['site_work']['termite_protection_type'] : '' }}">
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
                                        name="sow[site_work][site_works_notes]" id="siteWorksNotes" placeholder="Enter site works notes"
                                        value="{{ isset($workData['sow']['site_work']['site_works_notes']) ? $workData['sow']['site_work']['site_works_notes'] : '' }}">
                                </div>
                            </div>
                        </div>


                        <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                            <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                            </div>
                        </div>
                        <table
                            style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                            <tbody>
                                <tr>
                                    <td
                                        colspan="3"
                                        style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                        2) FOUNDATIONS & CONCRETING
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <!-- 2.1 Surveyor Set Out Section -->
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>2.1 Surveyor Set Out</h5>
                                <div>
                                    <label class="me-3">
                                        By Builder
                                        <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="builder"
                                            {{ (isset($workData['sow']['surveyor_set_out']['surveyor_set']) && $workData['sow']['surveyor_set_out']['surveyor_set'] == 'builder') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        By Owner
                                        <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="owner"
                                            {{ (isset($workData['sow']['surveyor_set_out']['surveyor_set']) && $workData['sow']['surveyor_set_out']['surveyor_set'] == 'owner') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="na"
                                            {{ (isset($workData['sow']['surveyor_set_out']['surveyor_set']) && $workData['sow']['surveyor_set_out']['surveyor_set'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>

                            <div class="card-body d-flex align-items-center">
                                <label for="surveyor_set_out" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[surveyor_set_out][surveyor_set_out]" id="surveyor_set_out" placeholder="Enter Surveyor Set Out notes"
                                    value="{{ isset($workData['sow']['surveyor_set_out']['surveyor_set_out']) ? $workData['sow']['surveyor_set_out']['surveyor_set_out'] : '' }}">
                            </div>
                        </div>

                        <!-- 2.2 Concrete Slab Floors -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>2.2 Concrete Slab Floors</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label class="me-3">
                                        Sub Floor
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="sub_floor"
                                            {{ (isset($workData['sow']['surveyor_set_out']['concrete_slab_floors']) && $workData['sow']['surveyor_set_out']['concrete_slab_floors'] == 'sub_floor') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        Ground Floor
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="ground_floor"
                                            {{ (isset($workData['sow']['surveyor_set_out']['concrete_slab_floors']) && $workData['sow']['surveyor_set_out']['concrete_slab_floors'] == 'ground_floor') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        1st Floor
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="first_floor"
                                            {{ (isset($workData['sow']['surveyor_set_out']['concrete_slab_floors']) && $workData['sow']['surveyor_set_out']['concrete_slab_floors'] == 'first_floor') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="na"
                                            {{ (isset($workData['sow']['surveyor_set_out']['concrete_slab_floors']) && $workData['sow']['surveyor_set_out']['concrete_slab_floors'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>

                                <div class="mb-2">
                                    <p>
                                        - Specification: As per detailed engineer’s plans & specs
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][specification]" value="engineers_plans"
                                            {{ (isset($workData['sow']['surveyor_set_out']['specification']) && $workData['sow']['surveyor_set_out']['specification'] == 'engineers_plans') ? 'checked' : '' }}>
                                    </p>

                                    <p class="mb-1">
                                        - Classification:
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][classification]" value="standard_spec"
                                            {{ (isset($workData['sow']['surveyor_set_out']['classification']) && $workData['sow']['surveyor_set_out']['classification'] == 'standard_spec') ? 'checked' : '' }}>
                                        Standard Specification for up to "M Class"

                                        <input type="radio" class="form-check-input ms-3" name="sow[surveyor_set_out][classification]" value="other"
                                            {{ (isset($workData['sow']['surveyor_set_out']['classification']) && $workData['sow']['surveyor_set_out']['classification'] == 'other') ? 'checked' : '' }}>
                                        Other:

                                        <input type="text" class="form-control d-inline-block w-50 ms-2" name="sow[surveyor_set_out][classification_other_text]" placeholder="Enter other classification"
                                            value="{{ $workData['sow']['surveyor_set_out']['classification_other_text'] ?? '' }}">
                                    </p>
                                </div>

                                <div class="mb-2">
                                    Notes to above:
                                    <input type="text" class="form-control mt-1" name="sow[surveyor_set_out][concrete_slab_notes]" placeholder=".............................................................................."
                                        value="{{ $workData['sow']['surveyor_set_out']['concrete_slab_notes'] ?? '' }}">
                                </div>

                                <small class="d-block">
                                    <strong>Note 1:</strong> Piering if required and /or indicated on engineer's plans will be charged at $110.00 inc. GST & Builders Margin per lineal metre.
                                </small>
                            </div>
                        </div>



                        <!-- 2.3 Electrical -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>2.3 Electrical</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label class="me-3">
                                        Underground
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="underground"
                                            {{ (isset($workData['sow']['surveyor_set_out']['electrical_type']) && $workData['sow']['surveyor_set_out']['electrical_type'] == 'underground') ? 'checked' : '' }}>
                                    </label>
                                    <label class="me-3">
                                        Aerial
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="aerial"
                                            {{ (isset($workData['sow']['surveyor_set_out']['electrical_type']) && $workData['sow']['surveyor_set_out']['electrical_type'] == 'aerial') ? 'checked' : '' }}>
                                    </label>
                                    <label>
                                        N/A
                                        <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="na"
                                            {{ (isset($workData['sow']['surveyor_set_out']['electrical_type']) && $workData['sow']['surveyor_set_out']['electrical_type'] == 'na') ? 'checked' : '' }}>
                                    </label>
                                </div>

                                <p>- If underground, is entry conduit required to be set in concrete?</p>
                                <label class="me-2">
                                    <input type="radio" class="form-check-input" name="sow[surveyor_set_out][underground_conduit]" value="yes"
                                        {{ (isset($workData['sow']['surveyor_set_out']['underground_conduit']) && $workData['sow']['surveyor_set_out']['underground_conduit'] == 'yes') ? 'checked' : '' }}>
                                    Yes
                                </label>
                                <label>
                                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][underground_conduit]" value="no"
                                        {{ (isset($workData['sow']['surveyor_set_out']['underground_conduit']) && $workData['sow']['surveyor_set_out']['underground_conduit'] == 'no') ? 'checked' : '' }}>
                                    No
                                </label>
                                <small><strong>Note :</strong> For location of sub-board/metre box see electrical plan)</small>

                                <p class="mt-2">- Are other electrical conduits required to be set in concrete?</p>
                                <label class="me-2">
                                    <input type="radio" class="form-check-input" name="sow[surveyor_set_out][other_conduits]" value="yes"
                                        {{ (isset($workData['sow']['surveyor_set_out']['other_conduits']) && $workData['sow']['surveyor_set_out']['other_conduits'] == 'yes') ? 'checked' : '' }}>
                                    Yes
                                </label>
                                <label>
                                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][other_conduits]" value="no"
                                        {{ (isset($workData['sow']['surveyor_set_out']['other_conduits']) && $workData['sow']['surveyor_set_out']['other_conduits'] == 'no') ? 'checked' : '' }}>
                                    No
                                </label>

                                <p class="mt-2">
                                    If "Yes", then list:
                                    <input type="text" class="form-control d-inline-block w-50 ms-2" name="sow[surveyor_set_out][other_conduits_list]" placeholder="Enter conduit details"
                                        value="{{ $workData['sow']['surveyor_set_out']['other_conduits_list'] ?? '' }}">
                                </p>
                                <small><strong>Note :</strong> For location of other electrical conduits see electrical plan</small>

                                <div class="d-flex align-items-center mt-2">
                                    <label for="electrical" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[surveyor_set_out][electrical]" id="electrical" placeholder="Enter electrical notes"
                                        value="{{ $workData['sow']['surveyor_set_out']['electrical'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Section 2.4 Verandah Slab/s -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>2.4 Verandah Slab/s</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <!-- Verandah Specifications Radio Buttons -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_specs]" value="plans_and_specs"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_specs']) && $workData['sow']['surveyor_set_out']['verandah_specs'] == 'plans_and_specs') || old('sow.surveyor_set_out.verandah_specs') == 'plans_and_specs' ? 'checked' : '' }}>
                                        Par Plans & Specifications
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_specs]" value="na"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_specs']) && $workData['sow']['surveyor_set_out']['verandah_specs'] == 'na') || old('sow.surveyor_set_out.verandah_specs') == 'na' ? 'checked' : '' }}>
                                        N/A
                                    </label>
                                </div>

                                <div>
                                    <p>- Plain concrete standard non-slip cove finish:</p>

                                    <!-- Verandah Finish Radio Buttons -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_finish]" value="plain_concrete"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_finish']) && $workData['sow']['surveyor_set_out']['verandah_finish'] == 'plain_concrete') || old('sow.surveyor_set_out.verandah_finish') == 'plain_concrete' ? 'checked' : '' }}>
                                        Plain Concrete
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_finish]" value="other"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_finish']) && $workData['sow']['surveyor_set_out']['verandah_finish'] == 'other') || old('sow.surveyor_set_out.verandah_finish') == 'other' ? 'checked' : '' }}>
                                        Other
                                    </label>

                                    <p class="mt-2">- If Other:</p>

                                    <!-- Verandah Other Options -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_other]" value="colour"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_other']) && $workData['sow']['surveyor_set_out']['verandah_other'] == 'colour') || old('sow.surveyor_set_out.verandah_other') == 'colour' ? 'checked' : '' }}>
                                        Colour
                                    </label>
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_other]" value="stencil"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_other']) && $workData['sow']['surveyor_set_out']['verandah_other'] == 'stencil') || old('sow.surveyor_set_out.verandah_other') == 'stencil' ? 'checked' : '' }}>
                                        Stencil
                                    </label>
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_other]" value="pattern"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_other']) && $workData['sow']['surveyor_set_out']['verandah_other'] == 'pattern') || old('sow.surveyor_set_out.verandah_other') == 'pattern' ? 'checked' : '' }}>
                                        Pattern
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][verandah_other]" value="exposed_aggregate"
                                            {{ (isset($workData['sow']['surveyor_set_out']['verandah_other']) && $workData['sow']['surveyor_set_out']['verandah_other'] == 'exposed_aggregate') || old('sow.surveyor_set_out.verandah_other') == 'exposed_aggregate' ? 'checked' : '' }}>
                                        Exposed Aggregate
                                    </label>

                                    <p class="mt-2">Notes to above:</p>
                                    <!-- Verandah Notes Text Field -->
                                    <input type="text" class="form-control" name="sow[surveyor_set_out][verandah_notes]" placeholder=".............................................................................."
                                        value="{{ old('sow.surveyor_set_out.verandah_notes', isset($workData['sow']['surveyor_set_out']['verandah_notes']) ? $workData['sow']['surveyor_set_out']['verandah_notes'] : '') }}">
                                </div>
                            </div>
                        </div>


                        <!-- Section 2.5 -->
                        <!-- Section 2.5 Paths or Driveway -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>2.5 Paths or Driveway</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <!-- Driveway Specifications Radio Buttons -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_specs]" value="plans_and_specs"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_specs']) && $workData['sow']['surveyor_set_out']['driveway_specs'] == 'plans_and_specs') ? 'checked' : 'checked' }}>
                                        Par Plans & Specifications
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_specs]" value="na"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_specs']) && $workData['sow']['surveyor_set_out']['driveway_specs'] == 'na') ? 'checked' : '' }}>
                                        N/A
                                    </label>
                                </div>

                                <div>
                                    <p>- Plain concrete standard non-slip cove finish:</p>

                                    <!-- Driveway Finish Radio Buttons -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_finish]" value="plain_concrete"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_finish']) && $workData['sow']['surveyor_set_out']['driveway_finish'] == 'plain_concrete') ? 'checked' : 'checked' }}>
                                        Plain Concrete
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_finish]" value="other"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_finish']) && $workData['sow']['surveyor_set_out']['driveway_finish'] == 'other') ? 'checked' : '' }}>
                                        Other
                                    </label>

                                    <p class="mt-2">- If Other:</p>

                                    <!-- Driveway Other Options -->
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_other]" value="colour"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_other']) && $workData['sow']['surveyor_set_out']['driveway_other'] == 'colour') ? 'checked' : '' }}>
                                        Colour
                                    </label>
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_other]" value="stencil"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_other']) && $workData['sow']['surveyor_set_out']['driveway_other'] == 'stencil') ? 'checked' : '' }}>
                                        Stencil
                                    </label>
                                    <label class="me-3">
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_other]" value="pattern"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_other']) && $workData['sow']['surveyor_set_out']['driveway_other'] == 'pattern') ? 'checked' : '' }}>
                                        Pattern
                                    </label>
                                    <label>
                                        <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][driveway_other]" value="exposed_aggregate"
                                            {{ (isset($workData['sow']['surveyor_set_out']['driveway_other']) && $workData['sow']['surveyor_set_out']['driveway_other'] == 'exposed_aggregate') ? 'checked' : '' }}>
                                        Exposed Aggregate
                                    </label>

                                    <p class="mt-2">Notes to above:</p>
                                    <!-- Driveway Notes Text Field -->
                                    <input type="text" class="form-control" name="sow[surveyor_set_out][driveway_notes]" placeholder=".............................................................................."
                                        value="{{ isset($workData['sow']['surveyor_set_out']['driveway_notes']) ? $workData['sow']['surveyor_set_out']['driveway_notes'] : '' }}">
                                </div>
                            </div>
                        </div>
                        <!-- Section 2.6 Tank Pads or Other -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>2.6 Tank Pads or Other</h5>
                            </div>
                            <div class="mb-2 px-3 pt-2">
                                <!-- Tank Pads Radio Buttons -->
                                <label class="me-3">
                                    <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][tank_pads]" value="plans_and_specs"
                                        {{ (isset($workData['sow']['surveyor_set_out']['tank_pads']) && $workData['sow']['surveyor_set_out']['tank_pads'] == 'plans_and_specs') ? 'checked' : '' }}>
                                    Par Plans & Specifications
                                </label>
                                <label>
                                    <input type="radio" class="form-check-input me-1" name="sow[surveyor_set_out][tank_pads]" value="na"
                                        {{ (isset($workData['sow']['surveyor_set_out']['tank_pads']) && $workData['sow']['surveyor_set_out']['tank_pads'] == 'na') ? 'checked' : '' }}>
                                    N/A
                                </label>
                            </div>
                            <div class="card-body">
                                <p>Notes to above:</p>
                                <!-- Tank Pads Notes Text Field -->
                                <input type="text" class="form-control" name="sow[surveyor_set_out][tank_pads_notes]" placeholder=".............................................................................."
                                    value="{{ $workData['sow']['surveyor_set_out']['tank_pads_notes'] ?? '' }}">
                            </div>
                        </div>

                        <!-- Yellow Note -->
                        <div class="alert alert-warning mt-4">
                            <strong>Section Note: Foundations & Concreting</strong><br>
                            No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder's margin and GST. This rate will be inclusive of both labour and equipment hire.
                        </div>



                        <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                            <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                            </div>
                        </div>
                        <table
                            style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                            <tbody>
                                <tr>
                                    <td
                                        colspan="3"
                                        style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                        3) DRAINER – PLUMBER – GAS FITTER </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Section 3.1 -->
                        <div class="card p-4 my-3">

                            <h5>3.1 Drainage to Concrete Slab Floors</h5>

                            <!-- Par Plans & Specifications / N/A -->
                            <div class="d-flex align-items-center mb-2">
                                <span>Par Plans & Specifications</span>
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][drainage_option]" value="plans"
                                    {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['drainage_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['drainage_option'] == 'plans') ? 'checked' : '' }}>
                                <span>N/A</span>
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][drainage_option]" value="na"
                                    {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['drainage_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['drainage_option'] == 'na') ? 'checked' : '' }}>
                            </div>

                            <div>
                                <p><strong>Note:</strong> To correctly determine the position of drainage pipes prior to concrete being poured, the following information is to be provided:</p>
                                <ul>
                                    <li>Bathrooms: Toilet suites, bath type/s, & Vanity type/s – see “PC selections” section.</li>

                                    <!-- Kitchen Layout -->
                                    <li>Kitchen:
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_plan]" value="floor_plan"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['kitchen_plan']) && $workData['sow']['drainage_to_concrete_slab_floors']['kitchen_plan'] == 'floor_plan') ? 'checked' : '' }}>
                                        As per floor plan
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_plan]" value="manufacturer_plan"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['kitchen_plan']) && $workData['sow']['drainage_to_concrete_slab_floors']['kitchen_plan'] == 'manufacturer_plan') ? 'checked' : '' }}>
                                        Or As per manufacturer layout plan
                                    </li>

                                    <!-- Floor Wastes -->
                                    <li>Floor wastes:
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][floor_wastes]" value="standard"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['floor_wastes']) && $workData['sow']['drainage_to_concrete_slab_floors']['floor_wastes'] == 'standard') ? 'checked' : '' }}>
                                        Standard Bathroom & Ensuite floor wastes shown on plan
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][floor_wastes]" value="na"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['floor_wastes']) && $workData['sow']['drainage_to_concrete_slab_floors']['floor_wastes'] == 'na') ? 'checked' : '' }}>
                                        or N/A
                                    </li>
                                </ul>

                                <div class="mt-1">Additional floor wastes (e.g., Laundry floor where grading to outside is not possible may require dry waste) shown on plan.</div>

                                <!-- Notes Textarea -->
                                <div class="mt-2">Notes to above:
                                    <textarea class="form-control mt-1" rows="2" name="sow[drainage_to_concrete_slab_floors][drainage_notes]" placeholder="..............................................................................">
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['drainage_notes']) ? $workData['sow']['drainage_to_concrete_slab_floors']['drainage_notes'] : '' }}
                                    </textarea>
                                </div>

                                <p class="mt-2"><strong>Note:</strong> Special requirements for drainage pipes must be noted clearly e.g., in-wall rear entry to vanity.</p>
                            </div>
                        </div>


                        <!-- Section 3.2 -->
                        <div class="card p-4">
                            <h5>3.2 Sewerage System</h5>

                            <!-- Options Row -->
                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <div class="me-3 mb-2">
                                    <span>Town Sewer</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="town_sewer"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system'] == 'town_sewer') ? 'checked' : '' }}>
                                </div>
                                <div class="me-3 mb-2">
                                    <span>Aerated/Septic</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="aerated_septic"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system'] == 'aerated_septic') ? 'checked' : '' }}>
                                </div>
                                <div class="me-3 mb-2">
                                    <span>Pump Out</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="pump_out"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system'] == 'pump_out') ? 'checked' : '' }}>
                                </div>
                                <div class="me-3 mb-2">
                                    <span>Existing</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="existing"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system'] == 'existing') ? 'checked' : '' }}>
                                </div>
                                <div class="me-3 mb-2">
                                    <span>N/A</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sewerage_system]" value="na"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_system'] == 'na') ? 'checked' : '' }}>
                                </div>
                            </div>

                            <!-- Notes & Details -->
                            <div>
                                <p>- Approved System:
                                    <span class="ms-2">BY BUILDER</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="by_builder"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['approved_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['approved_system'] == 'by_builder') ? 'checked' : '' }}>
                                    <span class="ms-3">BY OWNER</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="by_owner"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['approved_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['approved_system'] == 'by_owner') ? 'checked' : '' }}>
                                    <span class="ms-3">or N.A. TOWN SEWER</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][approved_system]" value="na_town_sewer"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['approved_system']) && $workData['sow']['drainage_to_concrete_slab_floors']['approved_system'] == 'na_town_sewer') ? 'checked' : '' }}>
                                </p>

                                <p>- If by builder:
                                    <span class="ms-2">1) Fixed price included in quote</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][builder_price]" value="fixed_price"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['builder_price']) && $workData['sow']['drainage_to_concrete_slab_floors']['builder_price'] == 'fixed_price') ? 'checked' : '' }}>
                                    <span class="ms-3">2) Provisional Sum</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][builder_price]" value="provisional_sum"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['builder_price']) && $workData['sow']['drainage_to_concrete_slab_floors']['builder_price'] == 'provisional_sum') ? 'checked' : '' }}>
                                </p>

                                <p>- Aerated/septic system show location of tank on plan
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][septic_location]" value="yes"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['septic_location']) && $workData['sow']['drainage_to_concrete_slab_floors']['septic_location'] == 'yes') ? 'checked' : '' }}>
                                </p>

                                <p>- Aerated/septic system connection show approved sprinkler system location on plan
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][sprinkler_location]" value="yes"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['sprinkler_location']) && $workData['sow']['drainage_to_concrete_slab_floors']['sprinkler_location'] == 'yes') ? 'checked' : '' }}>
                                </p>

                                <p>- Existing septic or "system by owner" show location of system and sprinkler area on plan
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][existing_system_location]" value="yes"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['existing_system_location']) && $workData['sow']['drainage_to_concrete_slab_floors']['existing_system_location'] == 'yes') ? 'checked' : '' }}>
                                </p>

                                <!-- Notes Textarea -->
                                <div class="mt-3">
                                    Notes to above:
                                    <textarea class="form-control mt-2" rows="3" name="sow[drainage_to_concrete_slab_floors][sewerage_notes]" placeholder="..............................................................................">
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['sewerage_notes']) ? $workData['sow']['drainage_to_concrete_slab_floors']['sewerage_notes'] : '' }}
                                    </textarea>
                                </div>

                                <p class="mt-3"><strong>Note:</strong> Allowance for sewer pipe connection to sewer main or tank is 10m from the last pickup point at house. Extra over 10m will be charged at $55.00 per meter including builder's margin and GST. Allowance is made for standard authority connection fee to sewer only (if applicable), extra contributions, levies, or access fees are payable by owners.</p>
                            </div>
                        </div>


                        <!-- Section 3.3 Stormwater -->
                        <div class="card p-4">

                            <div class="mb-4 rounded p-3">
                                <h5 class="mb-2">3.3 Stormwater</h5>
                                <div class="d-flex align-items-center flex-wrap mb-3">
                                    <div class="me-3 mb-2">
                                        <span>Town Stormwater</span>
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="town_stormwater" class="ms-1"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option'] == 'town_stormwater') ? 'checked' : '' }}>
                                    </div>
                                    <div class="me-3 mb-2">
                                        <span>To Tank/s</span>
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="tank" class="ms-1"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option'] == 'tank') ? 'checked' : '' }}>
                                    </div>
                                    <div class="me-3 mb-2">
                                        <span>Rubble Pits</span>
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="rubble_pits" class="ms-1"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option'] == 'rubble_pits') ? 'checked' : '' }}>
                                    </div>
                                    <div class="me-3 mb-2">
                                        <span>Existing</span>
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][stormwater_option]" value="existing" class="ms-1"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option']) && $workData['sow']['drainage_to_concrete_slab_floors']['stormwater_option'] == 'existing') ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <ul class="mb-2 ps-3">
                                    <li>To tank/s then (A) show location of tank on plan</li>
                                    <li>(B) Are pressurised PVC down pipes required?
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pvc_required]" value="yes" class="ms-1"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['pvc_required']) && $workData['sow']['drainage_to_concrete_slab_floors']['pvc_required'] == 'yes') ? 'checked' : '' }}> Yes
                                        <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pvc_required]" value="no" class="ms-2"
                                            {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['pvc_required']) && $workData['sow']['drainage_to_concrete_slab_floors']['pvc_required'] == 'no') ? 'checked' : '' }}> No
                                    </li>
                                    <li>Rubble pit then show location and design on plan</li>
                                    <li>Existing or "by owner" then show location on plan</li>
                                </ul>

                                <p class="small">
                                    <strong>Note:</strong> Allowance for stormwater pipe connection to stormwater main, tank, or rubble pit is 10 (ten) meters from the last pick-up point at the house. Extra over 10 meters will be charged at a rate of $36.00 per meter, including builder's margin and GST.
                                </p>

                                <p>Notes to above:</p>
                                <textarea name="sow[drainage_to_concrete_slab_floors][stormwater_notes]" rows="2" class="form-control" placeholder="................................................................................">{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['stormwater_notes']) ? $workData['sow']['drainage_to_concrete_slab_floors']['stormwater_notes'] : '' }}</textarea>
                            </div>
                        </div>



                        <!-- Section 3.4 Plumbing Layout Plan -->
                        <div class="card p-4">
                            <div class="mb-4 rounded p-3">
                                <h6 class="mb-2">3.4 Plumbing Layout Plan</h6>
                                <div class="d-flex align-items-center flex-wrap mb-2">
                                    <span>As per plans provided, completed, and signed by owners</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][plumbing_plan_provided]" class="ms-1 me-3"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['plumbing_plan_provided']) && $workData['sow']['drainage_to_concrete_slab_floors']['plumbing_plan_provided'] == 'yes') ? 'checked' : '' }}>
                                </div>
                                <p class="small"><strong>Note:</strong> This plan is to include the preferred position of: Rainwater tank/s (if applicable) including position of designated fire tank (if applicable), Water pump (if applicable), BASIX rainwater storage tank, Hot water tank and or solar panels, shower rose's and tap handles, bath spouts and tap handles, washing machine cocks (under tub or cupboard or over machine), Dishwasher cock, Spa Bath pump (if applicable), outside taps, and Gas points & Bottles (if applicable). Locations may be subject to change by plumber if required; however the owner will be notified if changes are required.</p>
                                <p>Final kitchen layout plan provided (To show gas/dishwasher/sink etc.):
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_layout]" value="yes" class="ms-1"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['kitchen_layout']) && $workData['sow']['drainage_to_concrete_slab_floors']['kitchen_layout'] == 'yes') ? 'checked' : '' }}> Yes
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][kitchen_layout]" value="no" class="ms-2"
                                        {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['kitchen_layout']) && $workData['sow']['drainage_to_concrete_slab_floors']['kitchen_layout'] == 'no') ? 'checked' : '' }}> No
                                </p>
                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="plumbing_layout_plan" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][plumbing_layout_plan]" id="plumbing_layout_plan" placeholder="Enter Plumbing Layout Plan notes"
                                        value="{{ isset($workData['sow']['site_work']['plumbing_layout_plan']) ? $workData['sow']['site_work']['plumbing_layout_plan'] : '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="card p-4 my-3">
                            <div class="rounded p-3">
                                <h5 class="mb-2">3.5 Water Services</h5>
                                <div class="d-flex align-items-center flex-wrap mb-2">
                                    <span>Town Supply & BASIX Rainwater System</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="town_basix" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_service']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_service'] == 'town_basix') ? 'checked' : '' }}>
                                    <span>Tank Supply</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="tank" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_service']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_service'] == 'tank') ? 'checked' : '' }}>
                                    <span>Town & Tank</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="town_tank" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_service']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_service'] == 'town_tank') ? 'checked' : '' }}>
                                    <span>Existing</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_service]" value="existing" class="ms-1" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_service']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_service'] == 'existing') ? 'checked' : '' }}>
                                </div>

                                <p>- Water service type:</p>
                                <div class="d-flex align-items-center mb-2">
                                    <span>Standard hot & cold water</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_type]" value="standard" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_type'] == 'standard') ? 'checked' : '' }}>
                                    <span>ALL copper hot & cold (additional cost)</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_type]" value="copper" class="ms-1" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_type'] == 'copper') ? 'checked' : '' }}>
                                </div>

                                <p>- Water tank supply:</p>
                                <div class="d-flex align-items-center mb-2">
                                    <span>By owner</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][tank_supply]" value="owner" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['tank_supply']) && $workData['sow']['drainage_to_concrete_slab_floors']['tank_supply'] == 'owner') ? 'checked' : '' }}>
                                    <span>By builder</span>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][tank_supply]" value="builder" class="ms-1 me-3" {{ (isset($workData['sow']['drainage_to_concrete_slab_floors']['tank_supply']) && $workData['sow']['drainage_to_concrete_slab_floors']['tank_supply'] == 'builder') ? 'checked' : '' }}>
                                </div>

                                <div class="mb-2">
                                    <span>Type:</span>
                                    <input type="text" name="sow[drainage_to_concrete_slab_floors][tank_type]" class="form-control d-inline-block ms-1" style="width:150px;" value="{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['tank_type']) ? $workData['sow']['drainage_to_concrete_slab_floors']['tank_type'] : 'POLY' }}">
                                    <span class="ms-3">Size:</span>
                                    <input type="text" name="sow[drainage_to_concrete_slab_floors][tank_size]" class="form-control d-inline-block ms-1" style="width:100px;" value="{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['tank_size']) ? $workData['sow']['drainage_to_concrete_slab_floors']['tank_size'] : '1500 x 2' }}">
                                </div>
                            </div>
                        </div>

                        <!-- Water Pump -->
                        <div class="mb-3">
                            <p>- Water pump:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_pump]" value="owner" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['water_pump']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_pump'] == 'owner' ? 'checked' : '' }}> By owner
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][water_pump]" value="builder" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['water_pump']) && $workData['sow']['drainage_to_concrete_slab_floors']['water_pump'] == 'builder' ? 'checked' : '' }}> By builder
                                </label>
                            </div>
                        </div>

                        <!-- BASIX Tank -->
                        <div class="mb-3">
                            <p>- BASIX tank supply:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][basix_tank]" value="owner" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['basix_tank']) && $workData['sow']['drainage_to_concrete_slab_floors']['basix_tank'] == 'owner' ? 'checked' : '' }}> By owner
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][basix_tank]" value="builder" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['basix_tank']) && $workData['sow']['drainage_to_concrete_slab_floors']['basix_tank'] == 'builder' ? 'checked' : '' }}> By builder
                                </label>
                            </div>
                        </div>


                        <small><strong>Note 1:</strong> Allowance is made for connection to water service main (main near side of house) to meter max. 6m and from meter to house max. 6m. If connecting to water tank a 12m total max. run is allowed.</small>

                        <small><strong>Note 2:</strong> Extra over 6 metre's from town water or 12 metre's from water tank will be charged at $25 per metre including builder's margin and GST.</small>

                        <small><strong>Note 3:</strong> If water main is across road cost to bore under road is an extra cost as invoiced by plumber plus builder's margin plus GST.</small>


                        <div class="mb-3">
                            <p>- Hot Water Service Supply:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_service]" value="fixed_price"
                                        {{ isset($workData['drainage_to_concrete_slab_floors']['hot_water_service']) && $workData['drainage_to_concrete_slab_floors']['hot_water_service'] == 'fixed_price' ? 'checked' : '' }}> Fixed price included in quote
                                </label>

                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_service]" value="provisional_sum"
                                        {{ isset($workData['drainage_to_concrete_slab_floors']['hot_water_service']) && $workData['drainage_to_concrete_slab_floors']['hot_water_service'] == 'provisional_sum' ? 'checked' : '' }}> Provisional Sum
                                </label>
                            </div>
                        </div>

                        <!-- Hot Water Service Type -->
                        <div class="mb-3">
                            <p>- Hot water service type:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="solar" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'solar' ? 'checked' : '' }}> Solar
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="electric" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'electric' ? 'checked' : '' }}> Electric
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="combination" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'combination' ? 'checked' : '' }}> Combination
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="heat_pump" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'heat_pump' ? 'checked' : '' }}> Heat pump
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="gas" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'gas' ? 'checked' : '' }}> Gas
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][hot_water_type]" value="other" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['hot_water_type'] == 'other' ? 'checked' : '' }}> Other
                                </label>
                            </div>
                        </div>

                        <!-- Solar Hot Water Booster -->
                        <div class="mb-3">
                            <p>- Solar hot water booster:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_booster]" value="electric" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['solar_booster']) && $workData['sow']['drainage_to_concrete_slab_floors']['solar_booster'] == 'electric' ? 'checked' : '' }}> Electric
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_booster]" value="gas" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['solar_booster']) && $workData['sow']['drainage_to_concrete_slab_floors']['solar_booster'] == 'gas' ? 'checked' : '' }}> Gas
                                </label>
                            </div>
                        </div>

                        <!-- Solar Hot Water Tank -->
                        <div class="mb-3">
                            <p>- Solar hot water tank:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_tank]" value="roof" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['solar_tank']) && $workData['sow']['drainage_to_concrete_slab_floors']['solar_tank'] == 'roof' ? 'checked' : '' }}> On Roof
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][solar_tank]" value="ground" {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['solar_tank']) && $workData['sow']['drainage_to_concrete_slab_floors']['solar_tank'] == 'ground' ? 'checked' : '' }}> On Ground
                                </label>
                            </div>
                        </div>

                        <!-- Special Installations -->
                        <div class="mb-3">
                            <p>- Special installations:</p>
                            <div class="ms-4">
                                <label>
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="water_to_fridge"
                                        {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['special_installations']) && $workData['sow']['drainage_to_concrete_slab_floors']['special_installations'] == 'water_to_fridge' ? 'checked' : '' }}>
                                    Water to fridge
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="hot_water_to_dishwasher"
                                        {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['special_installations']) && $workData['sow']['drainage_to_concrete_slab_floors']['special_installations'] == 'hot_water_to_dishwasher' ? 'checked' : '' }}>
                                    Hot water to dishwasher
                                </label>
                                <label class="ms-3">
                                    <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][special_installations]" value="other"
                                        {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['special_installations']) && $workData['sow']['drainage_to_concrete_slab_floors']['special_installations'] == 'other' ? 'checked' : '' }}>
                                    Other
                                </label>
                            </div>
                        </div>


                        <!-- Notes Box -->
                        <div class="mb-3">
                            <p>Notes to above:</p>
                            <textarea class="form-control" name="sow[drainage_to_concrete_slab_floors][notes]" rows="3">{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['notes']) ? $workData['sow']['drainage_to_concrete_slab_floors']['notes'] : '' }}</textarea>
                        </div>

                        <!-- Q1: Warning Section -->
                        <div class="p-3 mb-3 bg-warning-subtle">
                            <p><strong>IMPORTANT</strong></p>
                            <p>Water supply and services in fire risk areas may have specific requirements to meet council consent. Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>
                            <p>Checked:
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][fire_risk_checked]" value="checked"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['fire_risk_checked']) && $workData['sow']['drainage_to_concrete_slab_floors']['fire_risk_checked'] == 'checked' ? 'checked' : '' }} class="ms-2 me-2"> Bushfire Attack Level
                            </p>
                            <p>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</p>
                            <p>Checked By:
                                <input type="text" name="sow[drainage_to_concrete_slab_floors][checked_by]" value="{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['checked_by']) ? $workData['sow']['drainage_to_concrete_slab_floors']['checked_by'] : 'Inspector Name' }}" class="form-control d-inline-block" style="width: 200px;">
                            </p>
                        </div>
                    </div>


                    <!-- Main section -->
                    <div class="p-4 my-3">

                        <!-- Q2: Tapware -->
                        <div class="card p-4 my-3">
                            <h5>3.6 Tapware & PC Items </h5>
                            <div class="d-flex align-items-center mb-2">
                                <span>Per PC Selection Section</span>
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pc_selection]" value="yes" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['pc_selection']) && $workData['sow']['drainage_to_concrete_slab_floors']['pc_selection'] == 'yes' ? 'checked' : '' }}>
                            </div>
                            <p>🛈 <strong>Note:</strong> PC items with special requirements should have installation instructions from the manufacturer also attached.
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][pc_checked]" value="checked" class="ms-2"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['pc_checked']) && $workData['sow']['drainage_to_concrete_slab_floors']['pc_checked'] == 'checked' ? 'checked' : '' }}> (Checked)
                            </p>
                            <div class="d-flex align-items-center">

                                <!-- Label and Input -->
                                <label for="tapware_pc_items" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][tapware_pc_items]" id="tapware_pc_items"
                                    placeholder="Enter Tapware & PC Items notes"
                                    value="{{ isset($workData['sow']['site_work']['tapware_pc_items']) ? $workData['sow']['site_work']['tapware_pc_items'] : '' }}">
                            </div>
                        </div>
                    </div>

                    <!-- Q3: Gasfitter -->
                    <!-- Q3: Gasfitter -->
                    <div class="card p-4 my-3">
                        <h5>3.7 Gasfitter</h5>

                        <!-- Gas Type Selection -->
                        <p>
                            <span>Natural Gas
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="natural_gas" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_type'] == 'natural_gas' ? 'checked' : '' }}>
                            </span>
                            <span>LPG Gas
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="lpg_gas" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_type'] == 'lpg_gas' ? 'checked' : '' }}>
                            </span>
                            <span>N/A
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_type]" value="na" class="ms-1"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_type']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_type'] == 'na' ? 'checked' : '' }}>
                            </span>
                        </p>

                        <!-- Gas Service To -->
                        <p>- Gas service to:
                            <span class="ms-3">Hot water
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="hot water" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to'] == 'hot water' ? 'checked' : '' }}>
                            </span>
                            <span>Oven
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="oven" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to'] == 'oven' ? 'checked' : '' }}>
                            </span>
                            <span>Cook top
                                <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_service_to]" value="cook top" class="ms-1 me-3"
                                    {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_service_to'] == 'cook top' ? 'checked' : '' }}>
                            </span>
                            <span>Bayonet’s No:
                                <input type="number" name="sow[drainage_to_concrete_slab_floors][bayonet_no]" value="{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['bayonet_no']) ? $workData['sow']['drainage_to_concrete_slab_floors']['bayonet_no'] : 0 }}" class="ms-1" style="width: 60px;">
                            </span>
                        </p>

                        <!-- Plumbing Layout Plan -->
                        <p>- Gas points and appliances etc. shown on plumbing layout plan
                            <input type="radio" class="form-check-input" name="sow[drainage_to_concrete_slab_floors][gas_layout_plan]" value="yes" class="ms-1 me-3"
                                {{ isset($workData['sow']['drainage_to_concrete_slab_floors']['gas_layout_plan']) && $workData['sow']['drainage_to_concrete_slab_floors']['gas_layout_plan'] == 'yes' ? 'checked' : '' }}>
                        </p>

                        <!-- Notes Section -->
                        <div class="p-3 mb-3 bg-light">
                            <p>📝 Notes to above:</p>
                            <textarea class="form-control" name="sow[drainage_to_concrete_slab_floors][notes]" rows="2" placeholder="Enter notes here...">{{ isset($workData['sow']['drainage_to_concrete_slab_floors']['notes']) ? $workData['sow']['drainage_to_concrete_slab_floors']['notes'] : '' }}</textarea>
                        </div>

                        <!-- Section Note -->
                        <div class="p-3 bg-warning-subtle">
                            <p class="mb-0">
                                <strong>Drainer-Plumber-Gas Fitter Section Note:</strong><br>
                                No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder’s margin and GST. This rate will be inclusive of both labour and equipment hire.
                            </p>
                        </div>
                    </div>



                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                        </div>
                    </div>
                    <table
                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                        <tbody>
                            <tr>
                                <td
                                    colspan="3"
                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                    4) CARPENTER (Construction & Exterior) </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card p-4 my-3">
                        <h6>4.1 Steel House Floor System</h6>
                        <div class="d-flex align-items-center mb-2">
                            <label class="me-2">Per Plans & Specifications</label>
                            <input type="radio" name="sow[carpenter][plans_specifications]" value="yes" class="form-check-input"
                                {{ isset($workData['carpenter']['plans_specifications']) && $workData['carpenter']['plans_specifications'] == 'yes' ? 'checked' : '' }}>

                            <label class="me-2">N/A</label>
                            <input type="radio" name="sow[carpenter][plans_specifications]" value="na" class="form-check-input"
                                {{ isset($workData['carpenter']['plans_specifications']) && $workData['carpenter']['plans_specifications'] == 'na' ? 'checked' : '' }}>
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <td>- Termite resistant particle board floor sheeting:</td>
                                <td>
                                    <label class="form-check-input">N/A</label>
                                    <input type="radio" name="sow[carpenter][termite_resistant]" value="na" class="form-check-input"
                                        {{ isset($workData['carpenter']['termite_resistant']) && $workData['carpenter']['termite_resistant'] == 'na' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <label class="form-check-input">Yes</label>
                                    <input type="radio" name="sow[carpenter][termite_resistant]" value="yes" class="form-check-input"
                                        {{ isset($workData['carpenter']['termite_resistant']) && $workData['carpenter']['termite_resistant'] == 'yes' ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>- Other:</td>
                                <td>
                                    <label class="form-check-input">N/A</label>
                                    <input type="radio" name="sow[carpenter][other]" value="na" class="form-check-input"
                                        {{ isset($workData['carpenter']['other']) && $workData['carpenter']['other'] == 'na' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <label class="form-check-input">Yes</label>
                                    <input type="radio" name="sow[carpenter][other]" value="yes" class="form-check-input"
                                        {{ isset($workData['carpenter']['other']) && $workData['carpenter']['other'] == 'yes' ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>- Floor Insulation:</td>
                                <td>
                                    <label class="form-check-input">N/A</label>
                                    <input type="radio" name="sow[carpenter][floor_insulation]" value="na" class="form-check-input"
                                        {{ isset($workData['carpenter']['floor_insulation']) && $workData['carpenter']['floor_insulation'] == 'na' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <label class="form-check-input">Yes</label>
                                    <input type="radio" name="sow[carpenter][floor_insulation]" value="yes" class="form-check-input"
                                        {{ isset($workData['carpenter']['floor_insulation']) && $workData['carpenter']['floor_insulation'] == 'yes' ? 'checked' : '' }}>
                                </td>
                            </tr>
                        </table>

                        <div class="d-flex align-items-center mt-3">
                            <label for="steel_house_floor_system" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[carpenter][steel_house_floor_system_notes]"
                                id="steel_house_floor_system"
                                value="{{ isset($workData['carpenter']['steel_house_floor_system_notes']) ? $workData['carpenter']['steel_house_floor_system_notes'] : '' }}"
                                placeholder="Enter steel house floor system notes">
                        </div>
                    </div>

                    <!-- Section 4.2 -->
                    <div class="card p-4 my-3">
                        <h6>4.2 Steel Verandah Floor System</h6>
                        <div class="d-flex align-items-center mb-2">
                            <span>Per Plans & Specifications</span>
                            <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['verandah_plans_specifications'] ?? '') == 'yes' ? 'checked' : '' }}>
                            <span>N/A</span>
                            <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="no" class="form-check-input"
                                {{ ($workData['carpenter']['verandah_plans_specifications'] ?? 'no') == 'no' ? 'checked' : '' }}>
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <td>- Fibrous cement floor sheeting:</td>
                                <td>
                                    N/A <input type="radio" name="sow[carpenter][fibrous_cement]" value="no" class="form-check-input"
                                        {{ ($workData['carpenter']['fibrous_cement'] ?? 'no') == 'no' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="sow[carpenter][fibrous_cement]" value="yes" class="form-check-input"
                                        {{ ($workData['carpenter']['fibrous_cement'] ?? '') == 'yes' ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>- Treated pine decking:</td>
                                <td>
                                    N/A <input type="radio" name="sow[carpenter][treated_pine]" value="no" class="form-check-input"
                                        {{ ($workData['carpenter']['treated_pine'] ?? 'no') == 'no' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="sow[carpenter][treated_pine]" value="yes" class="form-check-input"
                                        {{ ($workData['carpenter']['treated_pine'] ?? '') == 'yes' ? 'checked' : '' }}>
                                </td>
                            </tr>
                            <tr>
                                <td>- Hardwood decking:</td>
                                <td>
                                    N/A <input type="radio" name="sow[carpenter][hardwood_decking]" value="no" class="form-check-input"
                                        {{ ($workData['carpenter']['hardwood_decking'] ?? 'no') == 'no' ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <input type="radio" name="sow[carpenter][hardwood_decking]" value="yes" class="form-check-input"
                                        {{ ($workData['carpenter']['hardwood_decking'] ?? '') == 'yes' ? 'checked' : '' }}> (Timber Selection)
                                </td>
                            </tr>
                        </table>
                        <div class="d-flex align-items-center">
                            <label for="steel_verandah_floor_system" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][steel_verandah_floor_system]" id="steel_verandah_floor_system"
                                value="{{ $workData['site_work']['steel_verandah_floor_system'] ?? '' }}"
                                placeholder="Enter steel verandah floor system notes">
                        </div>
                    </div>


                    <!-- Section 4.3 -->
                    <div class="card p-4 my-3">
                        <h6>4.3 Timber Verandah Floor System</h6>
                        <div class="d-flex align-items-center mb-2">
                            <span>Per Plans & Specifications</span>
                            <input type="radio" name="sow[carpenter][timber_verandah_plans_specifications]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['timber_verandah_plans_specifications'] ?? '') == 'yes' ? 'checked' : '' }}>
                            <span>N/A</span>
                            <input type="radio" name="sow[carpenter][timber_verandah_plans_specifications]" value="na" class="form-check-input"
                                {{ ($workData['carpenter']['timber_verandah_plans_specifications'] ?? 'na') == 'na' ? 'checked' : '' }}>
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <td colspan="3">
                                    Per Plans & Specifications
                                    <input type="radio" name="sow[carpenter][timber_verandah_per_plans]" value="yes" class="form-check-input"
                                        {{ ($workData['carpenter']['timber_verandah_per_plans'] ?? '') == 'yes' ? 'checked' : '' }}>
                                    N/A
                                    <input type="radio" name="sow[carpenter][timber_verandah_per_plans]" value="no" class="form-check-input"
                                        {{ ($workData['carpenter']['timber_verandah_per_plans'] ?? 'no') == 'no' ? 'checked' : '' }}>
                                </td>
                            </tr>
                        </table>

                        <div class="p-3 mt-3" style="background-color: #e8f4ff;">
                            <p>🛈 <strong>Floor Systems Note 1:</strong> Floor systems in fire risk areas may have specific requirements to meet council consent, such as fibre cement sheet lining under...</p>
                            <p>🛈 <strong>Floor Systems Note 2:</strong> Conditions of Development Consent, Bushfire Assessment...
                                <input type="radio" name="sow[carpenter][bushfire_assessment]" value="yes" class="form-check-input"
                                    {{ ($workData['carpenter']['bushfire_assessment'] ?? '') == 'yes' ? 'checked' : '' }}> (Checked)
                            </p>
                        </div>

                        <div class="d-flex align-items-center">
                            <label for="timber_verandah_floor_system" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][timber_verandah_floor_system]" id="timber_verandah_floor_system"
                                value="{{ $workData['site_work']['timber_verandah_floor_system'] ?? '' }}"
                                placeholder="Enter timber verandah floor system notes">
                        </div>
                    </div>


                    <!-- Section 4.4 -->
                    <div class="card p-4 my-3">
                        <h6>4.4 Frames</h6>

                        <div class="d-flex align-items-center mb-2">
                            <span>Per Plans & Specifications</span>
                            <input type="radio" name="sow[carpenter][frames_plans_specifications]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['frames_plans_specifications'] ?? '') == 'yes' ? 'checked' : '' }}>
                        </div>

                        <p>
                            - Standard 2750mm high (nom.)
                            <input type="radio" name="sow[carpenter][standard_height]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['standard_height'] ?? '') == 'yes' ? 'checked' : '' }}>
                            Other heights:
                            <input type="text" name="sow[carpenter][other_heights]" class="form-check-input" style="width: 150px;"
                                value="{{ $workData['carpenter']['other_heights'] ?? '' }}">
                        </p>

                        <p>
                            - Window & door sizes as per section 8 “windows & entry doors”
                            <input type="radio" name="sow[carpenter][window_door_sizes]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['window_door_sizes'] ?? '') == 'yes' ? 'checked' : '' }}> (Checked)
                        </p>

                        <p>
                            - Sisalation foil (sarking) to wall exterior prior to cladding <br>
                            <input type="radio" name="sow[carpenter][sisalation_standard]" value="yes" class="form-check-input"
                                {{ ($workData['carpenter']['sisalation_standard'] ?? '') == 'yes' ? 'checked' : '' }}> Standard
                            <input type="radio" name="sow[carpenter][sisalation_standard]" value="na" class="form-check-input"
                                {{ ($workData['carpenter']['sisalation_standard'] ?? '') == 'na' ? 'checked' : '' }}>
                            Other:
                            <input type="text" name="sow[carpenter][sisalation_other_text]" class="ms-2" style="width: 150px;"
                                value="{{ $workData['carpenter']['sisalation_other_text'] ?? '' }}">
                        </p>

                        <div class="d-flex align-items-center">
                            <label for="frames" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][frames]" id="frames"
                                value="{{ $workData['site_work']['frames'] ?? '' }}"
                                placeholder="Enter Frames notes">
                        </div>
                    </div>

                    <div class="card p-4 my-3">

                        <!-- Section 4.5 -->
                        <h5 class="mt-4">4.5 Roof Trusses & Beams</h5>

                        <!-- Q1 -->
                        <div class="card p-3 my-2">
                            <div class="d-flex align-items-center mb-2">
                                <span>Per Council Approved Plans & Specifications</span>
                                <input type="radio" name="sow[carpenter][approved_plans]" value="yes" class="form-check-input"
                                    {{ ($workData['carpenter']['approved_plans'] ?? '') == 'yes' ? 'checked' : '' }}>
                                <span class="ms-3">N/A</span>
                                <input type="radio" name="sow[carpenter][approved_plans]" value="na" class="form-check-input"
                                    {{ ($workData['carpenter']['approved_plans'] ?? '') == 'na' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="card p-3 my-2">
                            <div>Ceiling type:</div>
                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <input type="radio" name="sow[carpenter][ceiling_type]" value="standard_level" class="form-check-input"
                                        {{ ($workData['carpenter']['ceiling_type'] ?? '') == 'standard_level' ? 'checked' : '' }}> Standard level
                                </div>
                                <div class="me-3">
                                    <input type="radio" name="sow[carpenter][ceiling_type]" value="raked" class="form-check-input"
                                        {{ ($workData['carpenter']['ceiling_type'] ?? '') == 'raked' ? 'checked' : '' }}> Raked
                                </div>
                                <div class="me-3">
                                    <input type="radio" name="sow[carpenter][ceiling_type]" value="scissor_raked" class="form-check-input"
                                        {{ ($workData['carpenter']['ceiling_type'] ?? '') == 'scissor_raked' ? 'checked' : '' }}> Scissor raked
                                </div>
                                <div class="me-3">
                                    <input type="radio" name="sow[carpenter][ceiling_type]" value="other" class="form-check-input"
                                        {{ ($workData['carpenter']['ceiling_type'] ?? '') == 'other' ? 'checked' : '' }}> Other
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="card p-3 my-2">
                            <div class="d-flex align-items-center">
                                <span>If "Not standard level" - check plans type/location etc.</span>
                                <input type="radio" name="sow[carpenter][per_plans_specifications]" value="yes" class="form-check-input ms-2"
                                    {{ ($workData['carpenter']['per_plans_specifications'] ?? '') == 'yes' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Notes -->
                        <div class="d-flex align-items-center">
                            <label for="steel_house_floor_system" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][steel_house_floor_system]" id="steel_house_floor_system"
                                value="{{ $workData['site_work']['steel_house_floor_system'] ?? '' }}"
                                placeholder="Enter steel house floor system notes">
                        </div>
                    </div>

                    <!-- Section 4.6 -->
                    <!-- Section 4.6 -->
                    <div class="card p-4 my-3">

                        <h5 class="mt-4">4.6 Verandahs</h5>

                        <!-- Q5 -->
                        <div class="card p-3 my-2 ">
                            <div class="d-flex align-items-center mb-2">
                                <span>Per Plans & Specifications</span>
                                <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="yes" class="form-check-input"
                                    {{ $workData['sow']['carpenter']['verandah_plans_specifications'] ?? '' == 'yes' ? 'checked' : '' }}>
                                <span>N/A</span>
                                <input type="radio" name="sow[carpenter][verandah_plans_specifications]" value="na" class="form-check-input"
                                    {{ $workData['sow']['carpenter']['verandah_plans_specifications'] ?? '' == 'na' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="card p-3 my-2">
                            @php
                            $verandahType = $workData['sow']['carpenter']['verandah_type'] ?? '';
                            @endphp

                            <div>
                                <input type="radio" name="sow[carpenter][verandah_type]" value="broken_pitch" class="form-check-input"
                                    {{ $verandahType == 'broken_pitch' ? 'checked' : '' }}>
                                Broken pitch off main roof, raked fibre cement sheet lining under
                            </div>
                            <div>
                                <input type="radio" name="sow[carpenter][verandah_type]" value="dropped_verandah" class="form-check-input"
                                    {{ $verandahType == 'dropped_verandah' ? 'checked' : '' }}>
                                Dropped verandah, raked fibre cement sheet lining under
                            </div>
                            <div>
                                <input type="radio" name="sow[carpenter][verandah_type]" value="raked_broken_pitch" class="form-check-input"
                                    {{ $verandahType == 'raked_broken_pitch' ? 'checked' : '' }}>
                                Raked or broken pitch verandah’s with level linings (subject to heights)
                            </div>
                            <div>
                                <input type="radio" name="sow[carpenter][verandah_type]" value="under_main_roof" class="form-check-input"
                                    {{ $verandahType == 'under_main_roof' ? 'checked' : '' }}>
                                Under main roof with fibre cement sheet level linings
                            </div>
                            <div>
                                <input type="radio" name="sow[carpenter][verandah_type]" value="bull_nose_roof" class="form-check-input"
                                    {{ $verandahType == 'bull_nose_roof' ? 'checked' : '' }}>
                                Bull nose roof std. treated pine posts, beams, whaling plate and hockey stick rafters
                            </div>

                            <small><strong>Note :</strong> Bullnose verandah's over 1.8 metre's may require "hockey stick rafters" and battens. At 1.8 metres or less verandah's only require hip & gable end rafters.</small>

                            <div class="mt-2">
                                <input type="radio" name="sow[carpenter][verandah_type]" value="other" class="form-check-input"
                                    {{ $verandahType == 'other' ? 'checked' : '' }}>
                                Other verandah type:
                                <input type="text" name="sow[carpenter][other_verandah_type]" class="form-control mt-1"
                                    value="{{ $workData['sow']['carpenter']['other_verandah_type'] ?? '' }}" placeholder="Specify other verandah type">
                            </div>
                            <small><strong>Note :</strong> For "other verandah" types check plans/specifications as required (e.g., Members to be timber, timber type, size, dressed sawn etc).</small>
                        </div>

                        <!-- Q7 -->
                        <div class="card p-3 my-2">
                            <div>Notes to above:</div>
                            <input type="text" name="sow[carpenter][notes_to_above]" class="form-control mt-1"
                                value="{{ $workData['sow']['carpenter']['notes_to_above'] ?? '' }}" placeholder="Enter your notes here...">
                        </div>

                        <!-- Q8 -->
                        <div class="card p-3 my-2">
                            <div class="d-flex align-items-center">
                                <span>Per Plans & Specifications</span>
                                <input type="radio" name="sow[carpenter][q8_option]" value="per_plans" class="form-check-input"
                                    {{ $workData['sow']['carpenter']['q8_option'] ?? '' == 'per_plans' ? 'checked' : '' }}>
                                <span>N/A</span>
                                <input type="radio" name="sow[carpenter][q8_option]" value="na" class="form-check-input"
                                    {{ $workData['sow']['carpenter']['q8_option'] ?? '' == 'na' ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>


                    <div class="card p-4 my-3">

                        <!-- Section 4.7 -->
                        <h5 class="mt-4">4.7 External Stairs</h5>

                        <!-- Q9 -->
                        <div class="card p-3 my-2">
                            <div class="d-flex align-items-center mb-2">
                                <span>Per Plans & Specifications</span>
                                <input type="radio" name="sow[carpenter][q9_option]" value="per_plans" class="form-check-input"
                                    {{ ($workData['sow']['carpenter']['q9_option'] ?? '') == 'per_plans' ? 'checked' : '' }}>
                                <span class="ms-3">N/A</span>
                                <input type="radio" name="sow[carpenter][q9_option]" value="na" class="form-check-input"
                                    {{ ($workData['sow']['carpenter']['q9_option'] ?? 'na') == 'na' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Q10 -->
                        <div class="card p-3 my-2">
                            <div>- If by builder:</div>
                            <div class="d-flex flex-wrap">
                                <div class="me-4">
                                    <input type="radio" name="sow[carpenter][q10_option]" value="fixed_price" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['q10_option'] ?? 'fixed_price') == 'fixed_price' ? 'checked' : '' }}>
                                    Fixed price included in quote
                                </div>
                                <div>
                                    <input type="radio" name="sow[carpenter][q10_option]" value="provisional_sum" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['q10_option'] ?? '') == 'provisional_sum' ? 'checked' : '' }}>
                                    Provisional Sum
                                </div>
                            </div>
                        </div>

                        <!-- Q11 -->
                        <div class="card p-3 my-2">
                            <div>- Tread type:</div>
                            <div class="d-flex flex-wrap">
                                <div class="me-4">
                                    <input type="radio" name="sow[carpenter][q11_tread_type]" value="precast_concrete" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['q11_tread_type'] ?? 'precast_concrete') == 'precast_concrete' ? 'checked' : '' }}>
                                    Precast concrete
                                </div>
                                <div class="me-4">
                                    <input type="radio" name="sow[carpenter][q11_tread_type]" value="treaded_pine" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['q11_tread_type'] ?? '') == 'treaded_pine' ? 'checked' : '' }}>
                                    Treaded pine
                                </div>
                                <div>
                                    <input type="radio" name="sow[carpenter][q11_tread_type]" value="hardwood" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['q11_tread_type'] ?? '') == 'hardwood' ? 'checked' : '' }}>
                                    Hardwood
                                </div>
                            </div>
                        </div>

                        <!-- Q12 -->
                        <div class="card p-3 my-2">
                            <div class="d-flex align-items-center">
                                <span>Per Plans & Specifications</span>
                                <input type="radio" name="sow[carpenter][q12_approval]" value="per_plans" class="form-check-input"
                                    {{ ($workData['sow']['carpenter']['q12_approval'] ?? 'per_plans') == 'per_plans' ? 'checked' : '' }}>
                                <span class="ms-3">N/A</span>
                                <input type="radio" name="sow[carpenter][q12_approval]" value="na" class="form-check-input"
                                    {{ ($workData['sow']['carpenter']['q12_approval'] ?? '') == 'na' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Hardwood Options -->
                        <div class="mt-4">
                            <h5>Hardwood Options</h5>
                            <div>- If <strong>“Hardwood”</strong> then:</div>
                            <div class="mt-2">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][hardwood_option]" value="sawn_unseasoned" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['hardwood_option'] ?? '') == 'sawn_unseasoned' ? 'checked' : '' }}>
                                    <label class="form-check-label">Sawn unseasoned</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][hardwood_option]" value="dressed_seasoned" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['hardwood_option'] ?? '') == 'dressed_seasoned' ? 'checked' : '' }}>
                                    <label class="form-check-label">Dressed seasoned – Type e.g. Merbau</label>
                                    <input type="text" name="dressed_seasoned_type"
                                        class="ms-1 form-control d-inline-block w-auto"
                                        value="{{ $workData['dressed_seasoned_type'] ?? '' }}"
                                        placeholder="............................">
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][hardwood_option]" value="kiln_dried_dressed" class="form-check-input"
                                        {{ ($workData['sow']['carpenter']['hardwood_option'] ?? '') == 'kiln_dried_dressed' ? 'checked' : '' }}>
                                    <label class="form-check-label">Kiln dried dressed – Type e.g. Spotted Gum</label>
                                    <input type="text" name="sow[carpenter][kiln_dried_dressed_type]"
                                        class="ms-1 form-control d-inline-block w-auto"
                                        value="{{ $workData['sow']['carpenter']['kiln_dried_dressed_type'] ?? '' }}"
                                        placeholder="............................">
                                </div>
                            </div>
                        </div>

                        <!-- Important Section -->
                        <div class="p-3 my-4" style="background-color: #f97316; color: #fff; border: 2px solid #000;">
                            <h5><strong>IMPORTANT!</strong></h5>
                            <p class="mb-1">
                                Timber Stairs in fire risk areas may have specific requirements to meet council consent.
                                Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.
                            </p>

                            <div class="d-flex align-items-center mb-2">
                                <label class="me-2">Checked:</label>
                                <input type="radio" name="sow[carpenter][checked]" value="yes" class="form-check-input me-2"
                                    {{ ($workData['sow']['carpenter']['checked'] ?? '') == 'yes' ? 'checked' : '' }}>
                                <span>Bushfire Attack Level</span>
                            </div>

                            <div class="mb-2">
                                <label class="me-2">Checked By:</label>
                                <input type="text" name="sow[carpenter][checked_by]"
                                    class="form-control d-inline-block w-auto"
                                    value="{{ $workData['sow']['carpenter']['checked_by'] ?? '' }}"
                                    placeholder="Enter name">
                            </div>

                            <small>(N/A; 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
                        </div>

                        <!-- Notes to above -->
                        <div class="d-flex align-items-center">
                            <label for="verandahs" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][verandahs]" id="verandahs"
                                value="{{ $workData['sow']['site_work']['verandahs'] ?? '' }}"
                                placeholder="Enter verandahs notes">
                        </div>

                    </div>

                    <!-- Section 4.8 -->
                    <div class="card p-4 my-3">
                        <div class="mt-4">
                            <h5>4.8 Features / Trims etc</h5>

                            <!-- Question Block 1 -->
                            <div class="mb-2">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][options]" value="na" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['options']) && $workData['sow']['carpenter']['options'] == 'na' ? 'checked' : '' }}>
                                    <label class="form-check-label">N/A</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][options]" value="locations_per_plans" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['options']) && $workData['sow']['carpenter']['options'] == 'locations_per_plans' ? 'checked' : '' }}>
                                    <label class="form-check-label">Locations per plans</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][options]" value="selections_attached" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['options']) && $workData['sow']['carpenter']['options'] == 'selections_attached' ? 'checked' : '' }}>
                                    <label class="form-check-label">Selections/type etc. attached</label>
                                </div>
                            </div>

                            <!-- Question Block 2 -->
                            <div class="mb-2">
                                <div class="fw-bold">- Gable Vents:</div>
                                @php
                                $gableOptions = [
                                'required' => 'Required',
                                'na' => 'N/A',
                                'decorative_only' => 'Decorative only',
                                'active_working' => 'Active/Working',
                                'cut_out_hidden' => 'Cut out hidden',
                                'decorative_brick_surround' => 'Decorative brick surround',
                                ];
                                @endphp
                                @foreach($gableOptions as $value => $label)
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][gable_vents]" value="{{ $value }}" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['gable_vents']) && $workData['sow']['carpenter']['gable_vents'] == $value ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $label }}</label>
                                </div>
                                @endforeach
                            </div>

                            <!-- Question Block 3 -->
                            <div class="mb-2">
                                <div class="fw-bold">- Gable friezes & finials:</div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][gable_friezes_finials]" value="selection_attached" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['gable_friezes_finials']) && $workData['sow']['carpenter']['gable_friezes_finials'] == 'selection_attached' ? 'checked' : '' }}>
                                    <label class="form-check-label">Selection/type attached</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][gable_friezes_finials]" value="na" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['gable_friezes_finials']) && $workData['sow']['carpenter']['gable_friezes_finials'] == 'na' ? 'checked' : '' }}>
                                    <label class="form-check-label">N/A</label>
                                </div>
                            </div>

                            <!-- Question Block 4 -->
                            <div class="mb-2">
                                <div class="fw-bold">- Verandah post decorative bases:</div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][verandah_post_bases]" value="selection_attached" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['verandah_post_bases']) && $workData['sow']['carpenter']['verandah_post_bases'] == 'selection_attached' ? 'checked' : '' }}>
                                    <label class="form-check-label">Selection/type attached</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sow[carpenter][verandah_post_bases]" value="na" class="form-check-input"
                                        {{ isset($workData['sow']['carpenter']['verandah_post_bases']) && $workData['sow']['carpenter']['verandah_post_bases'] == 'na' ? 'checked' : '' }}>
                                    <label class="form-check-label">N/A</label>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        <div class="mt-4">
                            <h6>Notes to above:</h6>
                            <textarea name="sow[carpenter][verandah_notes]" class="form-control mt-1" rows="3"
                                placeholder="Enter any additional notes here...">{{ isset($workData['sow']['carpenter']['verandah_notes']) ? $workData['sow']['carpenter']['verandah_notes'] : '' }}</textarea>
                        </div>
                    </div>


                    <div class="card p-4 my-3">
                        <!-- 4.9 Exterior Door Selections & Exterior Door Furniture -->
                        <div class="mt-4">
                            <h5>4.9 Exterior Door Selections & Exterior Door Furniture</h5>
                            <p>- Door selections & Door furniture as per section 8 "Windows & Entry Doors"</p>

                            <div class="form-check">
                                <input type="radio"
                                    class="form-check-input"
                                    id="doorSelectionsChecked"
                                    name="sow[carpenter][door_selections_checked]"
                                    value="checked"
                                    {{ isset($workData['sow']['carpenter']['door_selections_checked']) && $workData['sow']['carpenter']['door_selections_checked'] == 'checked' ? 'checked' : '' }}>
                                <label class="form-check-label" for="doorSelectionsChecked">(Checked)</label>
                            </div>
                        </div>
                    </div>


                    <div class="card p-4 my-3">
                        <div class="mt-4">
                            <h5>4.10 Eaves and Soffit Linings</h5>

                            <!-- Standard option -->
                            <div class="form-check">
                                <input type="radio"
                                    class="form-check-input"
                                    id="standardEaves"
                                    name="sow[carpenter][eaves_option]"
                                    value="standard"
                                    {{ isset($workData['sow']['carpenter']['eaves_option']) && $workData['sow']['carpenter']['eaves_option'] == 'standard' ? 'checked' : '' }}>
                                <label class="form-check-label" for="standardEaves">
                                    Standard Fibrous Cement Sheet lining to eaves with plastic joiners
                                </label>
                            </div>

                            <!-- Other option + text input -->
                            <div class="form-check mt-1 d-flex align-items-center">
                                <input type="radio"
                                    class="form-check-input"
                                    id="otherEaves"
                                    name="sow[carpenter][eaves_option]"
                                    value="other"
                                    {{ isset($workData['sow']['carpenter']['eaves_option']) && $workData['sow']['carpenter']['eaves_option'] == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label me-2" for="otherEaves">
                                    Other eaves lining:
                                </label>
                                <input type="text"
                                    class="form-control d-inline-block w-50"
                                    name="sow[carpenter][eaves_other_text]"
                                    value="{{ isset($workData['sow']['carpenter']['eaves_other_text']) ? $workData['sow']['carpenter']['eaves_other_text'] : '' }}"
                                    placeholder="Specify other eaves lining">
                            </div>

                            <!-- Notes -->
                            <div class="mt-2">
                                <label for="eavesNotes">Notes to above:</label>
                                <textarea class="form-control mt-1"
                                    id="eavesNotes"
                                    name="sow[carpenter][eaves_notes]"
                                    rows="2"
                                    placeholder="................................................................................................................">{{ isset($workData['sow']['carpenter']['eaves_notes']) ? $workData['sow']['carpenter']['eaves_notes'] : '' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- 4.11 External Cladding -->
                    <div class="card p-4 my-3">
                        <div class="mt-4">
                            <h5>4.11 External Cladding</h5>

                            <!-- Per Plans & Specs -->
                            <div class="d-flex align-items-center mb-2">
                                <label class="me-2">Per Plans & Specifications:</label>

                                <div class="form-check me-3">
                                    <input type="radio" class="form-check-input"
                                        name="sow[carpenter][cladding_per_plans]"
                                        id="claddingPerPlans"
                                        value="yes"
                                        {{ isset($workData['sow']['carpenter']['cladding_per_plans']) && $workData['sow']['carpenter']['cladding_per_plans'] == 'yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="claddingPerPlans">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input"
                                        name="sow[carpenter][cladding_per_plans]"
                                        id="claddingPerPlansNA"
                                        value="na"
                                        {{ isset($workData['sow']['carpenter']['cladding_per_plans']) && $workData['sow']['carpenter']['cladding_per_plans'] == 'na' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="claddingPerPlansNA">N/A</label>
                                </div>
                            </div>

                            <!-- Timber & Weathertex -->
                            <div class="mb-2">
                                <input type="radio"
                                    class="form-check-input"
                                    name="sow[carpenter][cladding_type]"
                                    id="claddingTimber"
                                    value="timber"
                                    {{ isset($workData['sow']['carpenter']['cladding_type']) && $workData['sow']['carpenter']['cladding_type'] == 'timber' ? 'checked' : '' }}>
                                <label class="form-check-label me-2" for="claddingTimber">Timber & Weathertex Weatherboard:</label>

                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_timber_type]"
                                    value="{{ $workData['sow']['carpenter']['cladding_timber_type'] ?? '' }}"
                                    placeholder="Type">
                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][profile]"
                                    value="{{ $workData['sow']['carpenter']['profile'] ?? '' }}"
                                    placeholder="Profile">
                            </div>

                            <!-- Fibrous Cement Weatherboard -->
                            <div class="mb-2">
                                <input type="radio"
                                    class="form-check-input"
                                    name="sow[carpenter][cladding_type]"
                                    id="claddingFibrousWeatherboard"
                                    value="fibrous_weatherboard"
                                    {{ isset($workData['sow']['carpenter']['cladding_type']) && $workData['sow']['carpenter']['cladding_type'] == 'fibrous_weatherboard' ? 'checked' : '' }}>
                                <label class="form-check-label me-2" for="claddingFibrousWeatherboard">Fibrous Cement Weatherboard:</label>

                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_fibrous_type]"
                                    value="{{ $workData['sow']['carpenter']['cladding_fibrous_type'] ?? 'SCYAM' }}"
                                    placeholder="Type">
                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_fibrous_profile]"
                                    value="{{ $workData['sow']['carpenter']['cladding_fibrous_profile'] ?? 'STRIA' }}"
                                    placeholder="Profile">
                            </div>

                            <!-- Fibrous Cement Sheet or Other -->
                            <div class="mb-2">
                                <input type="radio"
                                    class="form-check-input"
                                    name="sow[carpenter][cladding_type]"
                                    id="claddingFibrousSheet"
                                    value="fibrous_sheet"
                                    {{ isset($workData['sow']['carpenter']['cladding_type']) && $workData['sow']['carpenter']['cladding_type'] == 'fibrous_sheet' ? 'checked' : '' }}>
                                <label class="form-check-label me-2" for="claddingFibrousSheet">Fibrous Cement Sheet or Other:</label>

                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_fibrous_other_type]"
                                    value="{{ $workData['sow']['carpenter']['cladding_fibrous_other_type'] ?? '' }}"
                                    placeholder="Type">
                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_fibrous_other_profile]"
                                    value="{{ $workData['sow']['carpenter']['cladding_fibrous_other_profile'] ?? '' }}"
                                    placeholder="Profile">
                            </div>

                            <!-- Metal -->
                            <div class="mb-2">
                                <input type="radio"
                                    class="form-check-input"
                                    name="sow[carpenter][cladding_type]"
                                    id="claddingMetal"
                                    value="metal"
                                    {{ isset($workData['sow']['carpenter']['cladding_type']) && $workData['sow']['carpenter']['cladding_type'] == 'metal' ? 'checked' : '' }}>
                                <label class="form-check-label me-2" for="claddingMetal">Metal:</label>

                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_metal_type]"
                                    value="{{ $workData['sow']['carpenter']['cladding_metal_type'] ?? '' }}"
                                    placeholder="Type">
                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_metal_profile]"
                                    value="{{ $workData['sow']['carpenter']['cladding_metal_profile'] ?? '' }}"
                                    placeholder="Profile">
                                <input type="text" class="form-control d-inline-block w-auto ms-2"
                                    name="sow[carpenter][cladding_metal_colour]"
                                    value="{{ $workData['sow']['carpenter']['cladding_metal_colour'] ?? '' }}"
                                    placeholder="Colour">
                            </div>

                            <!-- Gable Options -->
                            <div class="mt-3">
                                <label>Gable options:</label>
                                <div class="mt-1">
                                    <input type="radio"
                                        class="form-check-input"
                                        name="sow[carpenter][gable_option]"
                                        id="gableSame"
                                        value="same"
                                        {{ isset($workData['sow']['carpenter']['gable_option']) && $workData['sow']['carpenter']['gable_option'] == 'same' ? 'checked' : '' }}>
                                    <label class="form-check-label me-4" for="gableSame">Gables & walls "same as selected"</label>

                                    <input type="radio"
                                        class="form-check-input ms-3"
                                        name="sow[carpenter][gable_option]"
                                        id="gableFibreCement"
                                        value="fibre_cement"
                                        {{ isset($workData['sow']['carpenter']['gable_option']) && $workData['sow']['carpenter']['gable_option'] == 'fibre_cement' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gableFibreCement">Gables only in "Std. fibre cement sheet"</label>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="mt-2">
                                <label for="cladding_notes">Notes to above:</label>
                                <textarea class="form-control mt-1"
                                    id="cladding_notes"
                                    name="sow[carpenter][cladding_notes]"
                                    rows="2"
                                    placeholder="................................................................................................................">{{ $workData['sow']['carpenter']['cladding_notes'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="card p-4 my-3">
                        <!-- External Balustrade Section -->
                        <div class="p-2 mb-3">
                            <h5>4.12 External Balustrade</h5>
                            <div class="d-flex align-items-center mb-2">
                                <div class="form-check me-3">
                                    <input type="radio" name="sow[carpenter][balustrade]" value="plans_specifications" class="form-check-input" id="balustrade_plans" {{ old('sow.carpenter.balustrade', $workData['sow']['carpenter']['balustrade'] ?? '') == 'plans_specifications' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="balustrade_plans">Per Plans & Specifications</label>
                                </div>
                                <div class="form-check me-3">
                                    <input type="radio" name="sow[carpenter][balustrade]" value="by_others" class="form-check-input" id="balustrade_by_others" {{ old('sow.carpenter.balustrade', $workData['sow']['carpenter']['balustrade'] ?? '') == 'by_others' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="balustrade_by_others">By Others</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="sow[carpenter][balustrade]" value="na" class="form-check-input" id="balustrade_na" {{ old('sow.carpenter.balustrade', $workData['sow']['carpenter']['balustrade'] ?? '') == 'na' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="balustrade_na">N/A</label>
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="p-2 mb-3">
                            <label>- If by builder:</label>
                            <div class="form-check">
                                <input type="radio" name="sow[carpenter][builder_option]" value="fixed_price" class="form-check-input" id="builder_fixed_price" {{ old('sow.carpenter.builder_option', $workData['sow']['carpenter']['builder_option'] ?? '') == 'fixed_price' ? 'checked' : '' }}>
                                <label class="form-check-label" for="builder_fixed_price">1) Fixed price included in quote</label>
                            </div>
                            <div class="form-check mt-1">
                                <input type="radio" name="sow[carpenter][builder_option]" value="provisional_sum" class="form-check-input" id="builder_provisional_sum" {{ old('sow.carpenter.builder_option', $workData['sow']['carpenter']['builder_option'] ?? '') == 'provisional_sum' ? 'checked' : '' }}>
                                <label class="form-check-label" for="builder_provisional_sum">2) Provisional Sum</label>
                                <span class="ms-2">Amount to be shown at Section 16 "Schedule of Provisional Sums"</span>
                            </div>
                        </div>

                        <div class="p-2 mb-3">
                            <label for="balustrade_manufacturer">- Balustrade manufacturer:</label>
                            <input type="text" name="sow[carpenter][balustrade_manufacturer]" id="balustrade_manufacturer" class="form-control" value="{{ old('sow.carpenter.balustrade_manufacturer', $workData['sow']['carpenter']['balustrade_manufacturer'] ?? '') }}">
                        </div>

                        <!-- Question 4 -->
                        <div class="p-2 mb-3">
                            <label>- Balustrade types:</label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    Type 1: <input type="text" name="sow[carpenter][balustrade_type_1]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_type_1', $workData['sow']['carpenter']['balustrade_type_1'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    Location 1: <input type="text" name="sow[carpenter][balustrade_location_1]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_location_1', $workData['sow']['carpenter']['balustrade_location_1'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    Type 2: <input type="text" name="sow[carpenter][balustrade_type_2]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_type_2', $workData['sow']['carpenter']['balustrade_type_2'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    Location 2: <input type="text" name="sow[carpenter][balustrade_location_2]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_location_2', $workData['sow']['carpenter']['balustrade_location_2'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    Type 3: <input type="text" name="sow[carpenter][balustrade_type_3]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_type_3', $workData['sow']['carpenter']['balustrade_type_3'] ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    Location 3: <input type="text" name="sow[carpenter][balustrade_location_3]" class="form-control d-inline-block w-75" value="{{ old('sow.carpenter.balustrade_location_3', $workData['sow']['carpenter']['balustrade_location_3'] ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        <div class="p-2 mb-3">
                            <p><i class="bi bi-info-circle"></i> <strong>Note 1:</strong> Balustrades to verandahs and/or stairs are required when the drop to ground is over 1 (One) metre.</p>
                            <p><i class="bi bi-info-circle"></i> <strong>Note 2:</strong> Are there any special requirements for the builder such as fixing points or blocking?</p>
                            <div>
                                <input type="radio" name="sow[carpenter][checked_with_manufacturer]" class="form-check-input" value="1" {{ old('sow.carpenter.checked_with_manufacturer', $workData['sow']['carpenter']['checked_with_manufacturer'] ?? '') == '1' ? 'checked' : '' }}> (Checked with Manufacturer)
                            </div>
                        </div>

                        <!-- Notes to above -->
                        <div class="p-2 mb-3">
                            <label for="balustrade_notes"><i class="bi bi-clipboard"></i> Notes to above:</label>
                            <textarea id="balustrade_notes" name="sow[carpenter][balustrade_notes]" class="form-control" rows="3" placeholder="Enter any relevant notes here...">{{ old('sow.carpenter.balustrade_notes', $workData['sow']['carpenter']['balustrade_notes'] ?? '') }}</textarea>
                        </div>

                        <!-- Important Box -->
                        <div class="p-3 mb-3" style="background: linear-gradient(to right, #ff7e5f, #feb47b); color: black;">
                            <strong>IMPORTANT</strong>
                            <p>Exposed exterior elements in fire risk areas may have specific requirements to meet council consent. Conditions of the development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>

                            <div class="d-flex align-items-center">
                                <label class="me-2">Checked:</label>
                                <input type="radio" name="sow[carpenter][fire_risk_checked]" value="1" class="form-check-input" id="fire_risk_checked" {{ old('sow.carpenter.fire_risk_checked', $workData['sow']['carpenter']['fire_risk_checked'] ?? '') == '1' ? 'checked' : '' }}>
                                <label for="fire_risk_checked">Bushfire Attack Level</label>
                            </div>

                            <div class="mt-2">
                                <label for="checked_by">Checked By:</label>
                                <input type="text" id="checked_by" name="sow[carpenter][checked_by]" class="form-control d-inline-block w-50 ms-2" value="{{ old('sow.carpenter.checked_by', $workData['sow']['carpenter']['checked_by'] ?? '') }}" placeholder="Signature or Name">
                            </div>

                            <small>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
                        </div>
                    </div>



                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                        </div>
                    </div>
                    <table
                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                        <tbody>
                            <tr>
                                <td
                                    colspan="3"
                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                    5) CARPENTER (Interior) </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="card p-4 my-3">

                        <!-- Section 5.1 -->
                        <h5 class="mt-4">5.1 Mouldings</h5>

                        <!-- Question 1 -->
                        <div class="p-3 mb-3 bg-white rounded shadow-sm">
                            <label><strong>1) Architraves</strong></label>

                            <!-- Pinetim Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][architrave]" id="architrave_pinetim" value="pinetim"
                                    {{ isset($workData['sow']['carpenter_interior']['architrave']) && $workData['sow']['carpenter_interior']['architrave'] == 'pinetim' ? 'checked' : '' }}>
                                <label class="form-check-label" for="architrave_pinetim">
                                    Standard Pinetim profile - Finish size 66x18mm nominal (std)
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][architrave_pinetim_profile]"
                                    value="{{ $workData['sow']['carpenter_interior']['architrave_pinetim_profile'] ?? '' }}"
                                    placeholder="Profile e.g., BERKELEY">
                            </div>


                            <!-- Meranti Option -->
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][architrave]" id="architrave_meranti" value="meranti"
                                    {{ isset($workData['sow']['carpenter_interior']['architrave']) && $workData['sow']['carpenter_interior']['architrave'] == 'meranti' ? 'checked' : '' }}>
                                <label class="form-check-label" for="architrave_meranti">
                                    Meranti
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][architrave_meranti_size]"
                                    value="{{ $workData['sow']['carpenter_interior']['architrave_meranti_size'] ?? '' }}"
                                    placeholder="Size mm Approx. Finish Size">
                            </div>


                            <!-- Other Material & Profile -->
                            <div class="mt-2">
                                <label for="architrave_other">Other Material & Profile:</label>
                                <input type="text" class="form-control w-50" id="architrave_other" name="sow[carpenter_interior][architrave_other]"
                                    value="{{ $workData['sow']['carpenter_interior']['architrave_other'] ?? '' }}"
                                    placeholder="Specify other material/profile">
                            </div>

                            <!-- Notes Section -->
                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="mouldings" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][mouldings]"
                                    id="mouldings"
                                    value="{{ $workData['sow']['site_work']['mouldings'] ?? '' }}"
                                    placeholder="Enter mouldings notes">
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="p-3 mb-3 bg-white rounded shadow-sm">
                            <label><strong>2) Skirting</strong></label>

                            <!-- Pinetim Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][skirting]" id="skirting_pinetim" value="pinetim"
                                    {{ isset($workData['sow']['carpenter_interior']['skirting']) && $workData['sow']['carpenter_interior']['skirting'] == 'pinetim' ? 'checked' : '' }}>
                                <label class="form-check-label" for="skirting_pinetim">
                                    Standard Pinetim profile - Finish size 66x18mm nominal (std)
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][skirting_pinetim_profile]"
                                    value="{{ $workData['sow']['carpenter_interior']['skirting_pinetim_profile'] ?? '' }}"
                                    placeholder="Profile e.g., BERKELEY">
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][skirting]" id="skirting_meranti" value="meranti"
                                    {{ isset($workData['sow']['carpenter_interior']['skirting']) && $workData['sow']['carpenter_interior']['skirting'] == 'meranti' ? 'checked' : '' }}>
                                <label class="form-check-label" for="skirting_meranti">
                                    Meranti
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][skirting_meranti_size]"
                                    value="{{ $workData['sow']['carpenter_interior']['skirting_meranti_size'] ?? '' }}"
                                    placeholder="Size mm Approx. Finish Size">
                            </div>


                            <!-- Other Material & Profile -->
                            <div class="mt-2">
                                <label for="skirting_other">Other Material & Profile:</label>
                                <input type="text" class="form-control w-50" id="skirting_other" name="sow[carpenter_interior][skirting_other]"
                                    value="{{ $workData['sow']['carpenter_interior']['skirting_other'] ?? '' }}"
                                    placeholder="Specify other material/profile">
                            </div>

                            <!-- Notes Section -->
                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="skirting" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][skirting]"
                                    id="skirting"
                                    value="{{ $workData['sow']['site_work']['skirting'] ?? '' }}"
                                    placeholder="Enter skirting notes">
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="p-3 mb-3 bg-white rounded shadow-sm">
                            <label><strong>3) Reveals, Jambs, Pelmets & Trims</strong></label>

                            <!-- Standard Pine Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][reveals]" id="reveals_standard_pine" value="standard_pine"
                                    {{ isset($workData['sow']['carpenter_interior']['reveals']) && $workData['sow']['carpenter_interior']['reveals'] == 'standard_pine' ? 'checked' : '' }}>
                                <label class="form-check-label" for="reveals_standard_pine">
                                    Standard Pine
                                </label>
                            </div>


                            <!-- Other Material Type -->
                            <div class="mt-2">
                                <label for="reveals_other">Other Material Type:</label>
                                <input type="text" class="form-control w-50" id="reveals_other" name="sow[carpenter_interior][reveals_other]"
                                    value="{{ $workData['sow']['carpenter_interior']['reveals_other'] ?? '' }}"
                                    placeholder="Specify other material type">
                            </div>

                            <!-- Notes Section -->
                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="reveals_jambs_pelmets_trims" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][reveals_jambs_pelmets_trims]"
                                    id="reveals_jambs_pelmets_trims"
                                    value="{{ $workData['sow']['site_work']['reveals_jambs_pelmets_trims'] ?? '' }}"
                                    placeholder="Enter reveals, jambs, pelmets & trims notes">
                            </div>
                        </div>
                        <!-- Question 4 -->
                        <div class="p-3 mb-3 bg-white rounded shadow-sm">
                            <label><strong>4) Moulding Finish</strong></label>

                            <!-- Painted Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][moulding_finish]" id="painted" value="Painted"
                                    {{ isset($workData['sow']['carpenter_interior']['moulding_finish']) && $workData['sow']['carpenter_interior']['moulding_finish'] == 'Painted' ? 'checked' : '' }}>
                                <label class="form-check-label" for="painted">Painted</label>
                            </div>

                            <!-- Stained Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][moulding_finish]" id="stained" value="Stained"
                                    {{ isset($workData['sow']['carpenter_interior']['moulding_finish']) && $workData['sow']['carpenter_interior']['moulding_finish'] == 'Stained' ? 'checked' : '' }}>
                                <label class="form-check-label" for="stained">Stained</label>
                            </div>


                            <!-- Notes Section -->
                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="moulding_finish" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][moulding_finish]"
                                    id="moulding_finish"
                                    value="{{ $workData['sow']['site_work']['moulding_finish'] ?? '' }}"
                                    placeholder="Enter moulding finish notes">
                            </div>
                        </div>
                    </div>


                    <div class="card p-4 my-3">
                        <!-- Section 5.2 -->
                        <h5 class="mt-4">5.2 Doors</h5>

                        <!-- Question 5 -->
                        <div class="p-3 mb-3 bg-white rounded shadow-sm">
                            <label><strong>Interior Passage Doors</strong></label>

                            <!-- Standard Range Hume Door Option -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_doors]" id="standard_hume" value="Standard Range Hume Door"
                                    {{ isset($workData['carpenter_interior']['interior_doors']) && $workData['carpenter_interior']['interior_doors'] == 'Standard Range Hume Door' ? 'checked' : '' }}>
                                <label class="form-check-label" for="standard_hume">
                                    Standard Range Hume Door
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][standard_hume_style]"
                                    value="{{ $workData['carpenter_interior']['standard_hume_style'] ?? '' }}"
                                    placeholder="Style e.g., Sorrento 5">
                            </div>


                            <!-- Other Hume Door Type Option -->
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_doors]" id="other_hume" value="Other Hume Door Type"
                                    {{ isset($workData['carpenter_interior']['interior_doors']) && $workData['carpenter_interior']['interior_doors'] == 'Other Hume Door Type' ? 'checked' : '' }}>
                                <label class="form-check-label" for="other_hume">
                                    Other Hume Door Type
                                </label>
                                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][other_hume_type]"
                                    value="{{ $workData['carpenter_interior']['other_hume_type'] ?? '' }}"
                                    placeholder="Specify other door type">
                            </div>

                            <!-- Cavity Sliding Doors -->
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Cavity Sliding Doors</strong></label>

                                <!-- Standard Range Hume Door Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][cavity_sliding_doors]" id="standard_cavity_hume" value="Standard Range Hume Door"
                                        {{ isset($workData['carpenter_interior']['cavity_sliding_doors']) && $workData['carpenter_interior']['cavity_sliding_doors'] == 'Standard Range Hume Door' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="standard_cavity_hume">
                                        Standard Range Hume Door
                                    </label>
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][cavity_hume_style]"
                                        value="{{ $workData['carpenter_interior']['cavity_hume_style'] ?? '' }}"
                                        placeholder="Style e.g., Sorrento 5">
                                </div>
                            </div>


                            <!-- Built-in Robes & Cupboards -->
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Built-in Robes & Cupboards:</strong></label>

                                <!-- Standard Range Hume Door Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][built_in_robes]" id="standard_robe_hume" value="Standard Range Hume Door"
                                        {{ isset($workData['carpenter_interior']['built_in_robes']) && $workData['carpenter_interior']['built_in_robes'] == 'Standard Range Hume Door' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="standard_robe_hume">
                                        Standard Range Hume Door
                                    </label>
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][built_in_robe_style]"
                                        value="{{ $workData['carpenter_interior']['built_in_robe_style'] ?? '' }}"
                                        placeholder="Style e.g., Sorrento 5">
                                </div>
                            </div>

                            <!-- Sliding Robe Track Colour -->
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Sliding Robe Track Colour:</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][sliding_robe_track]" id="sliding_robe_track" value="custom"
                                        {{ isset($workData['carpenter_interior']['sliding_robe_track']) && $workData['carpenter_interior']['sliding_robe_track'] == 'custom' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sliding_robe_track">Custom Colour</label>
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][sliding_robe_track_colour]"
                                        value="{{ $workData['carpenter_interior']['sliding_robe_track_colour'] ?? '' }}"
                                        placeholder="Specify colour e.g., Black, Silver">
                                </div>
                            </div>


                            <!-- Notes for Doors -->
                            <div class="d-flex align-items-center">
                                <label for="doors" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][doors]" id="doors"
                                    value="{{ $workData['site_work']['doors'] ?? '' }}"
                                    placeholder="Enter doors notes">
                            </div>
                        </div>


                        <div class="card p-4 my-3">
                            <!-- Section 5.3 -->
                            <h5 class="mt-4">5.3 Internal Door Furniture</h5>

                            <!-- Question 5 -->
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Interior Passage Doors</strong></label>

                                <!-- Bright Chrome Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="bright_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['interior_passage_doors']) && $workData['sow']['carpenter_interior']['interior_passage_doors'] == 'bright_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Bright Chrome</label><br>
                                </div>

                                <!-- Satin Chrome Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="satin_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['interior_passage_doors']) && $workData['sow']['carpenter_interior']['interior_passage_doors'] == 'satin_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Satin Chrome</label><br>
                                </div>

                                <!-- Polished Brass Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="polished_brass"
                                        {{ isset($workData['sow']['carpenter_interior']['interior_passage_doors']) && $workData['sow']['carpenter_interior']['interior_passage_doors'] == 'polished_brass' ? 'checked' : '' }}>
                                    <label class="form-check-label">Polished Brass</label><br>
                                </div>

                                <!-- Other Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="other"
                                        {{ isset($workData['sow']['carpenter_interior']['interior_passage_doors']) && $workData['sow']['carpenter_interior']['interior_passage_doors'] == 'other' ? 'checked' : '' }}>
                                    <label class="form-check-label">Other</label>
                                </div>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Privacy Snibs to:</strong></label>

                                <!-- WC's Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="wc"
                                        {{ isset($workData['sow']['carpenter_interior']['privacy_snibs']) && $workData['sow']['carpenter_interior']['privacy_snibs'] == 'wc' ? 'checked' : '' }}>
                                    <label class="form-check-label">WC's</label><br>
                                </div>

                                <!-- Bathrooms Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="bathrooms"
                                        {{ isset($workData['sow']['carpenter_interior']['privacy_snibs']) && $workData['sow']['carpenter_interior']['privacy_snibs'] == 'bathrooms' ? 'checked' : '' }}>
                                    <label class="form-check-label">Bathrooms</label><br>
                                </div>

                                <!-- Ensuites Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="ensuites"
                                        {{ isset($workData['sow']['carpenter_interior']['privacy_snibs']) && $workData['sow']['carpenter_interior']['privacy_snibs'] == 'ensuites' ? 'checked' : '' }}>
                                    <label class="form-check-label">Ensuites</label><br>
                                </div>

                                <!-- Others Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="others"
                                        {{ isset($workData['sow']['carpenter_interior']['privacy_snibs']) && $workData['sow']['carpenter_interior']['privacy_snibs'] == 'others' ? 'checked' : '' }}>
                                    <label class="form-check-label">Others</label>
                                </div>
                            </div>



                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Robes & Cupboards (Swinging Doors):</strong></label>

                                <!-- Std. Rectangular Cut Out Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="rectangular_cutout"
                                        {{ isset($workData['sow']['carpenter_interior']['robes_cupboards']) && $workData['sow']['carpenter_interior']['robes_cupboards'] == 'rectangular_cutout' ? 'checked' : '' }}>
                                    <label class="form-check-label">Std. Rectangular Cut Out</label><br>
                                </div>

                                <!-- Circular (54mm dia.) Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="circular_54mm"
                                        {{ isset($workData['sow']['carpenter_interior']['robes_cupboards']) && $workData['sow']['carpenter_interior']['robes_cupboards'] == 'circular_54mm' ? 'checked' : '' }}>
                                    <label class="form-check-label">Circular (54mm dia.)</label><br>
                                </div>

                                <!-- Polished Brass Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="polished_brass"
                                        {{ isset($workData['sow']['carpenter_interior']['robes_cupboards']) && $workData['sow']['carpenter_interior']['robes_cupboards'] == 'polished_brass' ? 'checked' : '' }}>
                                    <label class="form-check-label">Polished Brass</label><br>
                                </div>

                                <!-- Satin Chrome Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="satin_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['robes_cupboards']) && $workData['sow']['carpenter_interior']['robes_cupboards'] == 'satin_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Satin Chrome</label><br>
                                </div>

                                <!-- Polished Chrome Option -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="polished_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['robes_cupboards']) && $workData['sow']['carpenter_interior']['robes_cupboards'] == 'polished_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Polished Chrome</label>
                                </div>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Smart Robes (Sliding Doors):</strong></label>

                                <!-- Smart Robes Pulls Options -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="flush_pulls"
                                        {{ isset($workData['sow']['carpenter_interior']['smart_robes']) && $workData['sow']['carpenter_interior']['smart_robes'] == 'flush_pulls' ? 'checked' : '' }}>
                                    <label class="form-check-label">Flush Pulls</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="square"
                                        {{ isset($workData['sow']['carpenter_interior']['smart_robes']) && $workData['sow']['carpenter_interior']['smart_robes'] == 'square' ? 'checked' : '' }}>
                                    <label class="form-check-label">Square</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="radius"
                                        {{ isset($workData['sow']['carpenter_interior']['smart_robes']) && $workData['sow']['carpenter_interior']['smart_robes'] == 'radius' ? 'checked' : '' }}>
                                    <label class="form-check-label">Radius</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="satin_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['smart_robes']) && $workData['sow']['carpenter_interior']['smart_robes'] == 'satin_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Satin Chrome</label><br>
                                </div>

                                <!-- Colour Selection Options -->
                                <p><strong>Colour Selection:</strong></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="polished_brass"
                                        {{ isset($workData['sow']['carpenter_interior']['colour_selection']) && $workData['sow']['carpenter_interior']['colour_selection'] == 'polished_brass' ? 'checked' : '' }}>
                                    <label class="form-check-label">Polished Brass</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="polished_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['colour_selection']) && $workData['sow']['carpenter_interior']['colour_selection'] == 'polished_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Polished Chrome</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="satin_chrome"
                                        {{ isset($workData['sow']['carpenter_interior']['colour_selection']) && $workData['sow']['carpenter_interior']['colour_selection'] == 'satin_chrome' ? 'checked' : '' }}>
                                    <label class="form-check-label">Satin Chrome</label><br>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="other"
                                        {{ isset($workData['sow']['carpenter_interior']['colour_selection']) && $workData['sow']['carpenter_interior']['colour_selection'] == 'other' ? 'checked' : '' }}>
                                    <label class="form-check-label">Other</label>
                                </div>
                            </div>


                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Door Stops</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][door_stops]" value="required_hinged"
                                        {{ isset($workData['sow']['carpenter_interior']['door_stops']) && $workData['sow']['carpenter_interior']['door_stops'] == 'required_hinged' ? 'checked' : '' }}>
                                    <label class="form-check-label">Required for Hinged Passage Doors - Type</label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][door_stops]" value="by_others"
                                        {{ isset($workData['sow']['carpenter_interior']['door_stops']) && $workData['sow']['carpenter_interior']['door_stops'] == 'by_others' ? 'checked' : '' }}>
                                    <label class="form-check-label">By Others</label><br>
                                </div>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Notes to Above:</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][notes_to_above]"
                                        value="{{ isset($workData['sow']['carpenter_interior']['notes_to_above']) ? $workData['sow']['carpenter_interior']['notes_to_above'] : '' }}"
                                        placeholder="Style e.g., Sorrento 5">
                                </div>
                            </div>
                        </div>


                        <div class="card p-4 my-3">

                            <h5 class="mt-4">5.4 Built in Robes & Cupboards</h5>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Wardrobes & W.I.R</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="standard_shelf"
                                        {{ isset($workData['sow']['carpenter_interior']['wardrobes']) && $workData['sow']['carpenter_interior']['wardrobes'] == 'standard_shelf' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard single white melamine shelf at hanging height including hanging rod
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="shelving_by_owners"
                                        {{ isset($workData['sow']['carpenter_interior']['wardrobes']) && $workData['sow']['carpenter_interior']['wardrobes'] == 'shelving_by_owners' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving other than standard by owners
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="all_shelving"
                                        {{ isset($workData['sow']['carpenter_interior']['wardrobes']) && $workData['sow']['carpenter_interior']['wardrobes'] == 'all_shelving' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        All shelving
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="shelving_per_list"
                                        {{ isset($workData['sow']['carpenter_interior']['wardrobes']) && $workData['sow']['carpenter_interior']['wardrobes'] == 'shelving_per_list' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving per list below
                                    </label><br>
                                </div>
                            </div>



                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>List of shelves by owner</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelf_style]"
                                        placeholder="Style e.g., Sorrento 5"
                                        value="{{ isset($workData['sow']['carpenter_interior']['shelf_style']) ? $workData['sow']['carpenter_interior']['shelf_style'] : '' }}">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_gripper_hinged"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'standard_gripper_hinged' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard gripper catch to hinged doors
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_1"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'other_1' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Other
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_gripper_hinged_2"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'standard_gripper_hinged_2' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard gripper catch to hinged doors
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_2"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'other_2' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Other
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_passage_wir"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'standard_passage_wir' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard passage set to walk-in robe doors
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_3"
                                        {{ isset($workData['sow']['carpenter_interior']['shelves']) && $workData['sow']['carpenter_interior']['shelves'] == 'other_3' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Other
                                    </label><br>
                                </div>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Linen Cupboards</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="standard_four_shelves"
                                        {{ isset($workData['sow']['carpenter_interior']['linen_cupboards']) && $workData['sow']['carpenter_interior']['linen_cupboards'] == 'standard_four_shelves' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard four white melamine shelves spaced evenly
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="shelving_by_owners"
                                        {{ isset($workData['sow']['carpenter_interior']['linen_cupboards']) && $workData['sow']['carpenter_interior']['linen_cupboards'] == 'shelving_by_owners' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving other than standard by owners
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="all_shelving"
                                        {{ isset($workData['sow']['carpenter_interior']['linen_cupboards']) && $workData['sow']['carpenter_interior']['linen_cupboards'] == 'all_shelving' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        All shelving
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="shelving_per_list"
                                        {{ isset($workData['sow']['carpenter_interior']['linen_cupboards']) && $workData['sow']['carpenter_interior']['linen_cupboards'] == 'shelving_per_list' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving per list below
                                    </label><br>
                                </div>
                            </div>


                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>List of shelves by owner</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelves_list]"
                                        placeholder="Style e.g., Sorrento 5"
                                        value="{{ isset($workData['sow']['carpenter_interior']['shelves_list']) ? $workData['sow']['carpenter_interior']['shelves_list'] : '' }}">
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch]" value="standard"
                                    {{ isset($workData['sow']['carpenter_interior']['gripper_catch']) && $workData['sow']['carpenter_interior']['gripper_catch'] == 'standard' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Standard gripper catch to hinged doors
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch_other]" value="other"
                                    {{ isset($workData['sow']['carpenter_interior']['gripper_catch_other']) && $workData['sow']['carpenter_interior']['gripper_catch_other'] == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Other
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob]" value="standard"
                                    {{ isset($workData['sow']['carpenter_interior']['dummy_knob']) && $workData['sow']['carpenter_interior']['dummy_knob'] == 'standard' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Standard dummy knob to hinged doors
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob_other]" value="other"
                                    {{ isset($workData['sow']['carpenter_interior']['dummy_knob_other']) && $workData['sow']['carpenter_interior']['dummy_knob_other'] == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Other
                                </label><br>
                            </div>


                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Broom Cupboards (Generally single door cupboards unless noted on plan)</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_standard]" value="standard"
                                        {{ isset($workData['sow']['carpenter_interior']['broom_shelf_standard']) && $workData['sow']['carpenter_interior']['broom_shelf_standard'] == 'standard' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard single white melamine shelf at approx 1.8m height
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_owner]" value="custom"
                                        {{ isset($workData['sow']['carpenter_interior']['broom_shelf_owner']) && $workData['sow']['carpenter_interior']['broom_shelf_owner'] == 'custom' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving other than standard by owners
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_all]" value="all"
                                        {{ isset($workData['sow']['carpenter_interior']['broom_shelf_all']) && $workData['sow']['carpenter_interior']['broom_shelf_all'] == 'all' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        All shelving
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_listed]" value="listed"
                                        {{ isset($workData['sow']['carpenter_interior']['broom_shelf_listed']) && $workData['sow']['carpenter_interior']['broom_shelf_listed'] == 'listed' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving per list below
                                    </label>
                                </div>
                            </div>
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>List of shelves by owner</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelves_list]"
                                        placeholder="Style e.g., Sorrento 5"
                                        value="{{ isset($workData['sow']['carpenter_interior']['shelves_list']) ? $workData['sow']['carpenter_interior']['shelves_list'] : '' }}">
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch]" value="standard"
                                    {{ isset($workData['sow']['carpenter_interior']['gripper_catch']) && $workData['sow']['carpenter_interior']['gripper_catch'] == 'standard' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Standard gripper catch to hinged doors
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][other_option1]" value="other"
                                    {{ isset($workData['sow']['carpenter_interior']['other_option1']) && $workData['sow']['carpenter_interior']['other_option1'] == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Other
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob]" value="standard_dummy_knob"
                                    {{ isset($workData['sow']['carpenter_interior']['dummy_knob']) && $workData['sow']['carpenter_interior']['dummy_knob'] == 'standard_dummy_knob' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Standard dummy knob to hinged doors
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][other_option2]" value="other"
                                    {{ isset($workData['sow']['carpenter_interior']['other_option2']) && $workData['sow']['carpenter_interior']['other_option2'] == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Other
                                </label><br>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Walk in Pantry</strong></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving]" value="standard"
                                        {{ isset($workData['sow']['carpenter_interior']['pantry_shelving']) && $workData['sow']['carpenter_interior']['pantry_shelving'] == 'standard' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Standard four white melamine shelves spaced evenly
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_other]" value="other"
                                        {{ isset($workData['sow']['carpenter_interior']['pantry_shelving_other']) && $workData['sow']['carpenter_interior']['pantry_shelving_other'] == 'other' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving other than standard
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_owner]" value="by_owner"
                                        {{ isset($workData['sow']['carpenter_interior']['pantry_shelving_owner']) && $workData['sow']['carpenter_interior']['pantry_shelving_owner'] == 'by_owner' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        By owner
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_all_shelving]" value="all"
                                        {{ isset($workData['sow']['carpenter_interior']['pantry_all_shelving']) && $workData['sow']['carpenter_interior']['pantry_all_shelving'] == 'all' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        All shelving
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_list]" value="per_list"
                                        {{ isset($workData['sow']['carpenter_interior']['pantry_shelving_list']) && $workData['sow']['carpenter_interior']['pantry_shelving_list'] == 'per_list' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Shelving per list below
                                    </label><br>
                                </div>
                            </div>
                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>List of shelves by owner</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelf_style]"
                                        placeholder="Style e.g., Sorrento 5"
                                        value="{{ isset($workData['sow']['carpenter_interior']['shelf_style']) ? $workData['sow']['carpenter_interior']['shelf_style'] : '' }}">
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][swinging_doors]" value="standard_passage"
                                    {{ isset($workData['sow']['carpenter_interior']['swinging_doors']) && $workData['sow']['carpenter_interior']['swinging_doors'] == 'standard_passage' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Standard passage set to swinging doors
                                </label><br>

                                <input class="form-check-input" type="radio" name="sow[carpenter_interior][swinging_doors]" value="na"
                                    {{ isset($workData['sow']['carpenter_interior']['swinging_doors']) && $workData['sow']['carpenter_interior']['swinging_doors'] == 'na' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    N/A
                                </label><br>
                            </div>

                            <div class="p-3 mb-3 bg-white rounded shadow-sm">
                                <label><strong>Notes to Built-in Robes & Cupboards</strong></label>
                                <div class="form-check">
                                    <input type="text" class="form-control mt-1 w-50" name="built_in_robes_notes"
                                        value="{{ isset($workData['built_in_robes_notes']) ? $workData['built_in_robes_notes'] : '' }}"
                                        placeholder="Style e.g., Sorrento 5">
                                </div>
                            </div>

                            <div class="card mb-3">
                                <h5 class="mt-4">5.5 Timber Polished Floors</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="By Owners" id="radio_by_owners"
                                        {{ isset($workData['sow']['carpenter_interior']['timber_polished_floors']) && $workData['sow']['carpenter_interior']['timber_polished_floors'] == 'By Owners' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio_by_owners">
                                        By Owners
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="Areas as indicated on plans" id="radio_areas_indicated"
                                        {{ isset($workData['sow']['carpenter_interior']['timber_polished_floors']) && $workData['sow']['carpenter_interior']['timber_polished_floors'] == 'Areas as indicated on plans' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio_areas_indicated">
                                        Areas as indicated on plans
                                    </label><br>

                                    <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="N/A" id="radio_na"
                                        {{ isset($workData['sow']['carpenter_interior']['timber_polished_floors']) && $workData['sow']['carpenter_interior']['timber_polished_floors'] == 'N/A' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio_na">
                                        N/A
                                    </label><br>
                                </div>

                                <p>🛈 <strong>Note:</strong> Freedom Homes generally will not contract to install timber flooring however we will allow our clients to have flooring installed if required during the course of construction. An extra administration fee will be applied to cover supervision & organisation of trades as required etc.
                                    The client will be responsible for contracting the supply, fixing, & polishing of floors, including all associated costs. If the floor installation delays other work proceeding, Freedom Homes may claim an extension to the contract completion date.
                                </p>

                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="timber_polished_floors_notes" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][timber_polished_floors]" id="timber_polished_floors_notes"
                                        value="{{ isset($workData['sow']['site_work']['timber_polished_floors']) ? $workData['sow']['site_work']['timber_polished_floors'] : '' }}"
                                        placeholder="Enter timber polished floors notes">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                        </div>
                    </div>
                    <table
                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                        <tbody>
                            <tr>
                                <td
                                    colspan="3"
                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                    6) BRICKLAYER / MASONRY
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card p-3 mb-3">

                        <h5>6.1 Exterior Face Brickwork</h5>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][exterior_face_brickwork_plans]" value="as_shown_on_plans"
                                    {{ isset($workData['sow']['bricklayer_masonry']['exterior_face_brickwork_plans']) && $workData['sow']['bricklayer_masonry']['exterior_face_brickwork_plans'] == 'as_shown_on_plans' ? 'checked' : '' }}>
                                As shown on plans
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][exterior_face_brickwork_na]" value="na"
                                    {{ isset($workData['sow']['bricklayer_masonry']['exterior_face_brickwork_na']) && $workData['sow']['bricklayer_masonry']['exterior_face_brickwork_na'] == 'na' ? 'checked' : '' }}>
                                N/A
                            </label>
                        </div>

                        <!-- Face Brick Selections -->
                        <h6>Face Brick Selections</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_commons]" value="Commons_only"
                                {{ isset($workData['sow']['bricklayer_masonry']['face_brick_commons']) && $workData['sow']['bricklayer_masonry']['face_brick_commons'] == 'Commons_only' ? 'checked' : '' }}>
                            <label class="form-check-label">Commons only</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_selected]" value="Selected_bricks_Supplier"
                                {{ isset($workData['sow']['bricklayer_masonry']['face_brick_selected']) && $workData['sow']['bricklayer_masonry']['face_brick_selected'] == 'Selected_bricks_Supplier' ? 'checked' : '' }}>
                            <label class="form-check-label">Selected bricks: Supplier</label>
                            <input type="text" class="form-control mt-1 w-50" name="sow[bricklayer_masonry][supplier_name]" placeholder="Supplier Name"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['supplier_name']) ? $workData['sow']['bricklayer_masonry']['supplier_name'] : '' }}">
                        </div>

                        <div class="form-group mt-2">
                            <label for="brick_name">Brick Name:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][brick_name]" id="brick_name"
                                placeholder="Enter Brick Name" value="{{ isset($workData['sow']['bricklayer_masonry']['brick_name']) ? $workData['sow']['bricklayer_masonry']['brick_name'] : '' }}">
                        </div>

                        <div class="form-group mt-2">
                            <label for="blend">Blend:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][blend]" id="blend" placeholder="Enter Blend"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['blend']) ? $workData['sow']['bricklayer_masonry']['blend'] : '' }}">
                        </div>

                        <!-- Laying -->
                        <h6>Laying</h6>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][standard_laying_stretcher_bond]" value="standard_laying"
                                {{ isset($workData['sow']['bricklayer_masonry']['standard_laying_stretcher_bond']) && $workData['sow']['bricklayer_masonry']['standard_laying_stretcher_bond'] == 'standard_laying' ? 'checked' : '' }}>
                            <label class="form-check-label ms-2">Standard laying in stretcher bond</label>
                            <span class="mx-2">OR</span>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][custom_laying_style]"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['custom_laying_style']) ? $workData['sow']['bricklayer_masonry']['custom_laying_style'] : '' }}"
                                placeholder="Enter custom laying style">
                        </div>

                        <!-- Standard Sisalation Foil -->
                        <h6>Standard Sisalation Foil</h6>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][standard_sisalation_foil]" value="standard_sisalation"
                                {{ isset($workData['sow']['bricklayer_masonry']['standard_sisalation_foil']) && $workData['sow']['bricklayer_masonry']['standard_sisalation_foil'] == 'standard_sisalation' ? 'checked' : '' }}>
                            <label class="form-check-label ms-2">Standard sisalation foil (sarking) to exterior brick veneer cavity walls</label>
                            <span class="mx-2">Other:</span>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_sisalation_foil]"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['other_sisalation_foil']) ? $workData['sow']['bricklayer_masonry']['other_sisalation_foil'] : '' }}"
                                placeholder="Enter other details">
                        </div>

                        <!-- Sills -->
                        <h6>Sills</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sills]" value="Cavity_walls"
                                {{ isset($workData['sow']['bricklayer_masonry']['sills']) && $workData['sow']['bricklayer_masonry']['sills'] == 'Cavity_walls' ? 'checked' : '' }}>
                            <label class="form-check-label">Cavity walls (standard brick on edge sloped)</label>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sills]" value="Single_brick_walls"
                                {{ isset($workData['sow']['bricklayer_masonry']['sills']) && $workData['sow']['bricklayer_masonry']['sills'] == 'Single_brick_walls' ? 'checked' : '' }}>
                            <label class="form-check-label ms-2">Single brick walls (std cut soldier course flush)</label>
                            <span class="mx-2">Other:</span>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_sills]"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['other_sills']) ? $workData['sow']['bricklayer_masonry']['other_sills'] : '' }}"
                                placeholder="Specify Other">
                        </div>


                        <!-- Brickwork Over Windows & Doors -->
                        <h6>Brickwork Over Windows & Doors</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_over_windows_doors]"
                                value="In_bond_as_a_single_course_or_out_of_bond_as_a_soldier_course"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_over_windows_doors']) && $workData['sow']['bricklayer_masonry']['brickwork_over_windows_doors'] == 'In_bond_as_a_single_course_or_out_of_bond_as_a_soldier_course' ? 'checked' : '' }}>
                            <label class="form-check-label">In bond as a single course or out of bond as a soldier course</label>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_over_windows_doors]"
                                value="Over_windows_doors_as_a_soldier_course"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_over_windows_doors']) && $workData['sow']['bricklayer_masonry']['brickwork_over_windows_doors'] == 'Over_windows_doors_as_a_soldier_course' ? 'checked' : '' }}>
                            <label class="form-check-label ms-2">Over windows & doors as a soldier course</label>
                            <span class="mx-2">OR</span>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_brickwork]"
                                value="{{ $workData['sow']['bricklayer_masonry']['other_brickwork'] ?? '' }}"
                                placeholder="Specify Other">
                        </div>


                        <!-- Brickwork Under Doors -->
                        <h6>Brickwork Under Doors</h6>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_under_doors]" value="Under_doors_entry_and_laundry_doors"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_under_doors']) && $workData['sow']['bricklayer_masonry']['brickwork_under_doors'] == 'Under_doors_entry_and_laundry_doors' ? 'checked' : '' }}>
                            <label class="form-check-label ms-2">Under doors, entry and laundry doors (generally tiled thresholds)</label>
                            <span class="mx-2">OR</span>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_brickwork_under_doors]"
                                value="{{ $workData['sow']['bricklayer_masonry']['other_brickwork_under_doors'] ?? '' }}"
                                placeholder="Specify Other">
                        </div>

                        <!-- Notes -->
                        <div class="card p-3 mb-3">
                            <h6>Notes to Laying:</h6>
                            <textarea class="form-control w-75" rows="3" name="sow[bricklayer_masonry][notes_to_laying]"
                                placeholder="Enter any additional notes">{{ $workData['sow']['bricklayer_masonry']['notes_to_laying'] ?? '' }}</textarea>
                        </div>
                        <!-- Mortar Colour Selection -->
                        <h6>Mortar (NOTE: SUPPLY OF MORTAR IS BY OWNER FOR KIT ONLY)</h6>
                        <h6>Colour selection</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_natural_grey"
                                {{ ($workData['sow']['bricklayer_masonry']['mortar_colour'] ?? '') == 'Standard_natural_grey' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard natural grey</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_off_white"
                                {{ ($workData['sow']['bricklayer_masonry']['mortar_colour'] ?? '') == 'Standard_off_white' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard off-white</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Oxide_coloured"
                                {{ ($workData['sow']['bricklayer_masonry']['mortar_colour'] ?? '') == 'Oxide_coloured' ? 'checked' : '' }}>
                            <label class="form-check-label">Oxide coloured</label>
                        </div>

                        <div class="form-group mt-2">
                            <label>Approx Colour:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][approx_colour]" placeholder="Enter Approx Colour"
                                value="{{ $workData['sow']['bricklayer_masonry']['approx_colour'] ?? '' }}">
                        </div>

                        <div class="form-group mt-2">
                            <label>Notes to above:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][mortar_notes]" placeholder="Enter Notes"
                                value="{{ $workData['sow']['bricklayer_masonry']['mortar_notes'] ?? '' }}">
                        </div>

                        <!-- Joint selection -->
                        <h6>Joint selection</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Flush"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'Flush' ? 'checked' : '' }}>
                            <label class="form-check-label">Flush</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Raked"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'Raked' ? 'checked' : '' }}>
                            <label class="form-check-label">Raked</label>
                        </div>

                        <div class="form-group mt-2">
                            <label>Other:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_joint]" placeholder="Specify Other"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['other_joint']) ? $workData['sow']['bricklayer_masonry']['other_joint'] : '' }}">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                            <label>Description:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][na_description]" placeholder="Enter Description"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['na_description']) ? $workData['sow']['bricklayer_masonry']['na_description'] : '' }}">
                        </div>



                        <!-- Feature Work -->
                        <h6>Feature Work</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Sandstone_capping_to_piers"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'Sandstone_capping_to_piers' ? 'checked' : '' }}>
                            <label class="form-check-label">Sandstone capping to piers (See PC Allowance)</label>
                        </div>

                        <div class="form-group mt-2">
                            <label for="supplier_sandstone">Supplier:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_sandstone]" id="supplier_sandstone" placeholder="Enter Supplier"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['supplier_sandstone']) ? $workData['sow']['bricklayer_masonry']['supplier_sandstone'] : '' }}">
                        </div>

                        <div class="form-group mt-2">
                            <label for="style_sandstone">Style:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_sandstone]" id="style_sandstone" placeholder="Enter Style"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['style_sandstone']) ? $workData['sow']['bricklayer_masonry']['style_sandstone'] : '' }}">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Quoins"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'Quoins' ? 'checked' : '' }}>
                            <label class="form-check-label">- Quoins (See PC Allowance)</label>
                        </div>

                        <div class="form-group mt-2">
                            <label for="supplier_quoins">Supplier:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_quoins]" id="supplier_quoins" placeholder="Enter Supplier"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['supplier_quoins']) ? $workData['sow']['bricklayer_masonry']['supplier_quoins'] : '' }}">
                        </div>

                        <div class="form-group mt-2">
                            <label for="style_quoins">Style:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_quoins]" id="style_quoins" placeholder="Enter Style"
                                value="{{ isset($workData['sow']['bricklayer_masonry']['style_quoins']) ? $workData['sow']['bricklayer_masonry']['style_quoins'] : '' }}">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Bulls eye openings"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'Bulls eye openings' ? 'checked' : '' }}>
                            <label class="form-check-label">- Bulls eye openings for gable vents or Windows</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Corbelling or other features"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'Corbelling or other features' ? 'checked' : '' }}>
                            <label class="form-check-label">- Corbelling or other features as shown on plans and described as follows;</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['feature_work']) && $workData['sow']['bricklayer_masonry']['feature_work'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>


                        <!-- Sub Floor Vents -->
                        <h6>Sub Floor Vents</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Standard_vent_built_into_brickwork_by_bricklayer_formed_using_brick_batts"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'Standard_vent_built_into_brickwork_by_bricklayer_formed_using_brick_batts' ? 'checked' : '' }}>
                            <label class="form-check-label">- Standard vent built into brickwork by bricklayer formed using brick batts.</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Terracotta_or_coloured_precast_concrete"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'Terracotta_or_coloured_precast_concrete' ? 'checked' : '' }}>
                            <label class="form-check-label">Terracotta or coloured precast concrete</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                            <label for="supplier_terracotta">Supplier:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_terracotta]" id="supplier_terracotta" placeholder="Enter Supplier"
                                value="{{ $workData['sow']['bricklayer_masonry']['supplier_terracotta'] ?? '' }}">
                            <label for="style_terracotta">Style:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_terracotta]" id="style_terracotta" placeholder="Enter Style"
                                value="{{ $workData['sow']['bricklayer_masonry']['style_terracotta'] ?? '' }}">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Fire_compliant_for_Fire_Risk_Areas"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'Fire_compliant_for_Fire_Risk_Areas' ? 'checked' : '' }}>
                            <label class="form-check-label">Fire compliant for Fire Risk Areas</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['sub_floor_vents']) && $workData['sow']['bricklayer_masonry']['sub_floor_vents'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                            <label for="supplier_fire_compliant">Supplier:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_fire_compliant]" id="supplier_fire_compliant" placeholder="Enter Supplier"
                                value="{{ $workData['sow']['bricklayer_masonry']['supplier_fire_compliant'] ?? '' }}">
                            <label for="style_fire_compliant">Style:</label>
                            <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_fire_compliant]" id="style_fire_compliant" placeholder="Enter Style"
                                value="{{ $workData['sow']['bricklayer_masonry']['style_fire_compliant'] ?? '' }}">
                        </div>

                        <!-- Weep Holes -->
                        <h6>Weep Holes</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Standard_weep_holes"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'Standard_weep_holes' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard weep holes (open perps)</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Fire_compliant_weep_holes_with_spark_arrester_inserts"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'Fire_compliant_weep_holes_with_spark_arrester_inserts' ? 'checked' : '' }}>
                            <label class="form-check-label">Fire compliant weep holes with spark arrester inserts</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Other"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'Other' ? 'checked' : '' }}>
                            <label class="form-check-label">Other</label><br>
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['weep_holes']) && $workData['sow']['bricklayer_masonry']['weep_holes'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                        </div>

                        <!-- Openings to Support Brickwork -->
                        <h6>Openings to Support Brickwork</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Galvanised_arch_bars_to_be_installed_over_square_arch_openings"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'Galvanised_arch_bars_to_be_installed_over_square_arch_openings' ? 'checked' : '' }}>
                            <label class="form-check-label">Galvanised arch bars to be installed over square arch openings</label><br>

                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'N_A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Curved_arch_openings_as_per_plans_Extra_Cost"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'Curved_arch_openings_as_per_plans_Extra_Cost' ? 'checked' : '' }}>
                            <label class="form-check-label">Curved arch openings as per plans (@ Extra Cost)</label><br>

                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'N_A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Standard_steel_door_jamb_to_single_brick_garage_P_A_door_opening"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'Standard_steel_door_jamb_to_single_brick_garage_P_A_door_opening' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard steel door jamb to single brick garage P.A door opening</label><br>

                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A"
                                {{ isset($workData['sow']['bricklayer_masonry']['brickwork_openings']) && $workData['sow']['bricklayer_masonry']['brickwork_openings'] == 'N_A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label><br>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="exterior_face_brickwork" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][exterior_face_brickwork]" id="exterior_face_brickwork" placeholder="Enter exterior face brickwork notes"
                                value="{{ $workData['sow']['site_work']['exterior_face_brickwork'] ?? '' }}">
                        </div>



                        <!-- Interior Feature Face Brickwork -->
                        <div class="card p-3 mb-3">
                            <h6>6.2 Interior Feature Face Brickwork</h6>

                            <!-- radio for "As shown on plans" -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][interior_feature_face_brickwork]" value="As_shown_on_plans"
                                {{ isset($workData['sow']['bricklayer_masonry']['interior_feature_face_brickwork']) && $workData['sow']['bricklayer_masonry']['interior_feature_face_brickwork'] == 'As_shown_on_plans' ? 'checked' : '' }}>
                            <label class="form-check-label">As shown on plans</label><br>

                            <!-- radio for "N/A" -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][interior_feature_face_brickwork]" value="N_A"
                                {{ isset($workData['sow']['bricklayer_masonry']['interior_feature_face_brickwork']) && $workData['sow']['bricklayer_masonry']['interior_feature_face_brickwork'] == 'N_A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <h6>Face Brick Selections</h6>

                            <!-- radio for "Commons only" -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_selections]" value="Commons_only"
                                    {{ isset($workData['sow']['bricklayer_masonry']['face_brick_selections']) && $workData['sow']['bricklayer_masonry']['face_brick_selections'] == 'Commons_only' ? 'checked' : '' }}>
                                <label class="form-check-label">Commons only</label><br>
                            </div>

                            <!-- Form for Selected bricks -->
                            <div class="form-check">
                                <label class="form-check-label">Selected bricks</label><br>

                                <label for="supplier" class="mt-2">Supplier:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier]" value="{{ $workData['sow']['bricklayer_masonry']['supplier'] ?? '' }}">

                                <label for="brick_name" class="mt-2">Brick Name:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][brick_name]" value="{{ $workData['sow']['bricklayer_masonry']['brick_name'] ?? '' }}">

                                <label for="blend" class="mt-2">Blend:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][blend]" value="{{ $workData['sow']['bricklayer_masonry']['blend'] ?? '' }}">
                            </div>

                            <h6>Mortar</h6>
                            <h6>Colour selection:</h6>

                            <!-- radio for Standard natural grey -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_natural_grey"
                                {{ isset($workData['sow']['bricklayer_masonry']['mortar_colour']) && $workData['sow']['bricklayer_masonry']['mortar_colour'] == 'Standard_natural_grey' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard natural grey</label>

                            <!-- radio for Standard off-white -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_off_white"
                                {{ isset($workData['sow']['bricklayer_masonry']['mortar_colour']) && $workData['sow']['bricklayer_masonry']['mortar_colour'] == 'Standard_off_white' ? 'checked' : '' }}>
                            <label class="form-check-label">Standard off-white</label>

                            <!-- radio for Oxide coloured -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Oxide_coloured"
                                {{ isset($workData['sow']['bricklayer_masonry']['mortar_colour']) && $workData['sow']['bricklayer_masonry']['mortar_colour'] == 'Oxide_coloured' ? 'checked' : '' }}>
                            <label class="form-check-label">Oxide coloured</label>

                            <!-- Input field for notes -->
                            <div class="form-group mt-2">
                                <label for="colcor_Selection_note">Notes to above:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colcor_Selection_note]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colcor_Selection_note'] ?? '' }}">
                            </div>

                            <h6>Joints</h6>
                            <h6>Joint selection:</h6>

                            <!-- radio for Flush -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Flush"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'Flush' ? 'checked' : '' }}>
                            <label class="form-check-label">Flush</label>

                            <!-- radio for Raked -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Raked"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'Raked' ? 'checked' : '' }}>
                            <label class="form-check-label">Raked</label>

                            <!-- radio for Other -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Other"
                                {{ isset($workData['sow']['bricklayer_masonry']['joint_selection']) && $workData['sow']['bricklayer_masonry']['joint_selection'] == 'Other' ? 'checked' : '' }}>
                            <label class="form-check-label">Other</label>

                            <!-- Input field for Description -->
                            <div class="form-group mt-2">
                                <label for="joint_description">Description:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][joint_description]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['joint_description'] ?? '' }}">
                            </div>

                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="interior_feature_face_brickwork" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][interior_feature_face_brickwork]" id="interior_feature_face_brickwork"
                                    placeholder="Enter interior feature face brickwork notes"
                                    value="{{ $workData['sow']['site_work']['interior_feature_face_brickwork'] ?? '' }}">
                            </div>
                        </div>


                        <div class="card p-3 mb-3">
                            <h6>6.3 Exterior Brickwork - "Bag Rendered"</h6>

                            <!-- radio for As Selected -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][bag_rendered_selection]" value="As_Selected"
                                {{ isset($workData['sow']['bricklayer_masonry']['bag_rendered_selection']) && $workData['sow']['bricklayer_masonry']['bag_rendered_selection'] == 'As_Selected' ? 'checked' : '' }}>
                            <label class="form-check-label">As Selected</label><br>

                            <!-- radio for N/A -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][bag_rendered_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['bag_rendered_selection']) && $workData['sow']['bricklayer_masonry']['bag_rendered_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <!-- Colour selection -->
                            <div class="form-check">
                                <label class="form-check-label">Colour selection:</label><br>

                                <!-- Standard natural grey -->
                                <label for="colour_standard_natural_grey">Standard natural grey</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_natural_grey]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_standard_natural_grey'] ?? '' }}">

                                <!-- Standard off-white -->
                                <label for="colour_standard_off_white">Standard off-white</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_off_white]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_standard_off_white'] ?? '' }}">

                                <!-- Oxide coloured -->
                                <label for="colour_oxide_coloured">Oxide coloured</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_oxide_coloured]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_oxide_coloured'] ?? '' }}">
                            </div>

                            <!-- Notes to above -->
                            <div class="form-group mt-2">
                                <label for="notes_bag_rendered">Notes to above:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][notes_bag_rendered]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['notes_bag_rendered'] ?? '' }}">
                            </div>

                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="interior_feature_face_brickwork" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][interior_feature_face_brickwork]" id="interior_feature_face_brickwork"
                                    placeholder="Enter bag rendered notes"
                                    value="{{ $workData['sow']['site_work']['interior_feature_face_brickwork'] ?? '' }}">
                            </div>
                        </div>
                        <div class="card p-3 mb-3">
                            <h6>6.4 Exterior Brickwork - "Skim Rendered"</h6>

                            <!-- radio for As Selected -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][skim_rendered_selection]" value="As_Selected"
                                {{ isset($workData['sow']['bricklayer_masonry']['skim_rendered_selection']) && $workData['sow']['bricklayer_masonry']['skim_rendered_selection'] == 'As_Selected' ? 'checked' : '' }}>
                            <label class="form-check-label">As Selected</label><br>

                            <!-- radio for N/A -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][skim_rendered_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['skim_rendered_selection']) && $workData['sow']['bricklayer_masonry']['skim_rendered_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <!-- Colour selection -->
                            <div class="form-check">
                                <label class="form-check-label">Colour selection:</label><br>

                                <!-- Standard natural grey -->
                                <label for="colour_standard_natural_grey">Standard natural grey</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_natural_grey]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_standard_natural_grey'] ?? '' }}">

                                <!-- Standard off-white -->
                                <label for="colour_standard_off_white">Standard off-white</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_off_white]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_standard_off_white'] ?? '' }}">

                                <!-- Oxide coloured -->
                                <label for="colour_oxide_coloured">Oxide coloured</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_oxide_coloured]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['colour_oxide_coloured'] ?? '' }}">
                            </div>

                            <!-- Notes to above -->
                            <div class="form-group mt-2">
                                <label for="notes_skim_rendered">Notes to above:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][notes_skim_rendered]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['notes_skim_rendered'] ?? '' }}">
                            </div>

                            <div class="d-flex align-items-center">
                                <!-- Label and Input -->
                                <label for="skim_rendered" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][skim_rendered]" id="skim_rendered" placeholder="Enter skim rendered notes"
                                    value="{{ $workData['sow']['site_work']['skim_rendered'] ?? '' }}">
                            </div>
                        </div>

                        <div class="card p-3 mb-3">
                            <h6>6.5 Exterior Brickwork - "Full Render Coat Finish"</h6>

                            <!-- radio for As Selected -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][full_render_coat_selection]" value="As_Selected"
                                {{ isset($workData['sow']['bricklayer_masonry']['full_render_coat_selection']) && $workData['sow']['bricklayer_masonry']['full_render_coat_selection'] == 'As_Selected' ? 'checked' : '' }}>
                            <label class="form-check-label">As Selected</label><br>

                            <!-- radio for N/A -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][full_render_coat_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['full_render_coat_selection']) && $workData['sow']['bricklayer_masonry']['full_render_coat_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <!-- Colour selection -->
                            <div class="form-check">
                                <label for="colour_standard_natural_grey">Standard natural grey</label>
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][colour_standard_natural_grey]" value="Standard_natural_grey"
                                    {{ isset($workData['sow']['bricklayer_masonry']['colour_standard_natural_grey']) && $workData['sow']['bricklayer_masonry']['colour_standard_natural_grey'] == 'Standard_natural_grey' ? 'checked' : '' }}>
                            </div>

                            <div class="d-flex align-items-center mt-2">
                                <!-- Label and Input -->
                                <label for="full_render_coat_finish" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][full_render_coat_finish]" id="full_render_coat_finish" placeholder="Enter full render coat finish notes"
                                    value="{{ $workData['sow']['site_work']['full_render_coat_finish'] ?? '' }}">
                            </div>
                        </div>

                        <div class="card p-3 mb-3">
                            <h6>6.6 Exterior Brickwork - "Other Coating Finish"</h6>

                            <!-- radio for As Selected -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_coating_finish_selection]" value="As_Selected"
                                {{ isset($workData['sow']['bricklayer_masonry']['other_coating_finish_selection']) && $workData['sow']['bricklayer_masonry']['other_coating_finish_selection'] == 'As_Selected' ? 'checked' : '' }}>
                            <label class="form-check-label">As Selected</label><br>

                            <!-- radio for N/A -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_coating_finish_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['other_coating_finish_selection']) && $workData['sow']['bricklayer_masonry']['other_coating_finish_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <!-- Description and type input -->
                            <div class="form-check mt-2">
                                <label for="description_type">Description and type is:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][description_type]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['description_type'] ?? '' }}">
                            </div>

                            <div class="d-flex align-items-center mt-2">
                                <!-- Label and Input -->
                                <label for="other_coating_finish" class="me-2 mb-0">Notes to above:</label>
                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                    name="sow[site_work][other_coating_finish]" id="other_coating_finish" placeholder="Enter other coating finish notes"
                                    value="{{ $workData['sow']['site_work']['other_coating_finish'] ?? '' }}">
                            </div>
                        </div>


                        <div class="card p-3 mb-3">
                            <h6>6.7 Other Masonry</h6>

                            <!-- radio for Per Plans & Specifications -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_selection]" value="Per_Plans_&_Specifications"
                                {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_selection']) && $workData['sow']['bricklayer_masonry']['other_masonry_selection'] == 'Per_Plans_&_Specifications' ? 'checked' : '' }}>
                            <label class="form-check-label">Per Plans & Specifications</label>

                            <!-- radio for N/A -->
                            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_selection]" value="N/A"
                                {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_selection']) && $workData['sow']['bricklayer_masonry']['other_masonry_selection'] == 'N/A' ? 'checked' : '' }}>
                            <label class="form-check-label">N/A</label>

                            <div class="form-check mt-2">
                                <!-- Concrete Block Work radio -->
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Concrete_block_work"
                                    {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_type']) && $workData['sow']['bricklayer_masonry']['other_masonry_type'] == 'Concrete_block_work' ? 'checked' : '' }}>
                                <label for="style">Concrete block work</label><br>

                                <!-- Aerated Concrete radio -->
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Aerated_concrete_(Hebel)"
                                    {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_type']) && $workData['sow']['bricklayer_masonry']['other_masonry_type'] == 'Aerated_concrete_(Hebel)' ? 'checked' : '' }}>
                                <label for="style">Aerated concrete (Hebel)</label><br>

                                <!-- Blue Board radio -->
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Blue_Board_(Fibre_Cement_Sheet_Acrylic_Rendered)"
                                    {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_type']) && $workData['sow']['bricklayer_masonry']['other_masonry_type'] == 'Blue_Board_(Fibre_Cement_Sheet_Acrylic_Rendered)' ? 'checked' : '' }}>
                                <label for="style">Blue Board (Fibre Cement Sheet Acrylic Rendered)</label><br>

                                <!-- Foam Board radio -->
                                <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Foam_Board_(Foam_Board_Sheet_Acrylic_Rendered)"
                                    {{ isset($workData['sow']['bricklayer_masonry']['other_masonry_type']) && $workData['sow']['bricklayer_masonry']['other_masonry_type'] == 'Foam_Board_(Foam_Board_Sheet_Acrylic_Rendered)' ? 'checked' : '' }}>
                                <label for="style">Foam Board (Foam Board Sheet Acrylic Rendered)</label>
                            </div>

                            <!-- Notes Input Field -->
                            <div class="form-group mt-2">
                                <label>Notes to above:</label>
                                <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][masonry_notes]"
                                    value="{{ $workData['sow']['bricklayer_masonry']['masonry_notes'] ?? '' }}">
                            </div>
                        </div>
                    </div>


                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                        </div>
                    </div>
                    <table
                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                        <tbody>
                            <tr>
                                <td
                                    colspan="3"
                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                    7) ROOF & ROOF PLUMBER </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card p-3 mb-3">

                        <h5>7.1 Metal Fascia & Barges</h5>
                        <label for="Colour selection">Colour selection</label>
                        <div class="d-flex">
                            <!-- Zincalume radio -->
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_fascia_barges]" value="Zincalume"
                                    {{ isset($workData['sow']['roof_plumber']['roof_fascia_barges']) && $workData['sow']['roof_plumber']['roof_fascia_barges'] == 'Zincalume' ? 'checked' : '' }}>
                                Zincalume
                            </label>

                            <!-- Colorbond radio -->
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_fascia_barges]" value="Colorbond_colour"
                                    {{ isset($workData['sow']['roof_plumber']['roof_fascia_barges']) && $workData['sow']['roof_plumber']['roof_fascia_barges'] == 'Colorbond_colour' ? 'checked' : '' }}>
                                Colorbond colour
                            </label>
                        </div>

                        <div class="d-flex align-items-center mt-2">
                            <!-- Label and Input -->
                            <label for="metal_fascia_barges" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][metal_fascia_barges]" id="metal_fascia_barges" placeholder="Enter metal fascia & barges notes"
                                value="{{ $workData['sow']['site_work']['metal_fascia_barges'] ?? '' }}">
                        </div>
                    </div>


                    <div class="card p-3 mb-3">
                        <h5>7.2 Metal Gutters</h5>

                        <!-- Colour Selection -->
                        <label for="Colour selection">Colour selection</label>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_colour]" value="Zincalume"
                                    {{ isset($workData['sow']['roof_plumber']['metal_gutters_colour']) && $workData['sow']['roof_plumber']['metal_gutters_colour'] == 'Zincalume' ? 'checked' : '' }}>
                                Zincalume
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_colour]" value="Colorbond_colour"
                                    {{ isset($workData['sow']['roof_plumber']['metal_gutters_colour']) && $workData['sow']['roof_plumber']['metal_gutters_colour'] == 'Colorbond_colour' ? 'checked' : '' }}>
                                Colorbond colour
                            </label>
                        </div>

                        <!-- Gutter Type -->
                        <label for="Gutter type">Gutter type</label>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_type]" value="Squareline"
                                    {{ isset($workData['sow']['roof_plumber']['metal_gutters_type']) && $workData['sow']['roof_plumber']['metal_gutters_type'] == 'Squareline' ? 'checked' : '' }}>
                                Squareline
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_type]" value="Quad_gutter"
                                    {{ isset($workData['sow']['roof_plumber']['metal_gutters_type']) && $workData['sow']['roof_plumber']['metal_gutters_type'] == 'Quad_gutter' ? 'checked' : '' }}>
                                Quad gutter
                            </label>
                        </div>

                        <!-- Metal Leaf Guard -->
                        <label for="Metal leaf guard">Metal leaf guard</label>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_leaf_guard]" value="Yes"
                                    {{ isset($workData['sow']['roof_plumber']['metal_leaf_guard']) && $workData['sow']['roof_plumber']['metal_leaf_guard'] == 'Yes' ? 'checked' : '' }}>
                                Yes
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_leaf_guard]" value="No"
                                    {{ isset($workData['sow']['roof_plumber']['metal_leaf_guard']) && $workData['sow']['roof_plumber']['metal_leaf_guard'] == 'No' ? 'checked' : '' }}>
                                No
                            </label>
                        </div>

                        <!-- Notes Input -->
                        <div class="d-flex align-items-center mt-2">
                            <label for="metal_gutters" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][metal_gutters]" id="metal_gutters" placeholder="Enter metal gutters notes"
                                value="{{ $workData['sow']['site_work']['metal_gutters'] ?? '' }}">
                        </div>
                    </div>

                    <div class="card p-3 mb-3">
                        <h5>7.3 Downpipes</h5>

                        <!-- Colour Selection -->
                        <label for="Colour selection">Colour selection</label>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_colour]" value="Colorbond_Colour"
                                    {{ ($workData['sow']['roof_plumber']['downpipes_colour'] ?? '') == 'Colorbond_Colour' ? 'checked' : '' }}>
                                Colorbond Colour
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_colour]" value="Or Paint_Colour"
                                    {{ ($workData['sow']['roof_plumber']['downpipes_colour'] ?? '') == 'Or Paint_Colour' ? 'checked' : '' }}>
                                Or Paint Colour
                            </label>
                        </div>

                        <!-- Type -->
                        <label for="Type">Type</label>
                        <div class="d-flex">
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_type]" value="Standard_PVC_90mm_dia_Round"
                                    {{ ($workData['sow']['roof_plumber']['downpipes_type'] ?? '') == 'Standard_PVC_90mm_dia_Round' ? 'checked' : '' }}>
                                Standard PVC 90mm dia. Round
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_type]" value="OTHER"
                                    {{ ($workData['sow']['roof_plumber']['downpipes_type'] ?? '') == 'OTHER' ? 'checked' : '' }}>
                                OTHER (Eg. Rectangular metal or Round metal)
                            </label>
                        </div>

                        <!-- Notes -->
                        <div class="form-group mt-2">
                            <label>Notes to above:</label>
                            <input type="text" class="form-control w-50" name="sow[roof_plumber][downpipes_notes]" placeholder="Enter Notes"
                                value="{{ $workData['sow']['roof_plumber']['downpipes_notes'] ?? '' }}">
                        </div>

                        <!-- Additional radio Options -->
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_position_plan]" value="Show_preferred_position"
                                {{ ($workData['sow']['roof_plumber']['downpipes_position_plan'] ?? '') == 'Show_preferred_position' ? 'checked' : '' }}>
                            Show preferred position of downpipes on plumbing & drainage plan
                        </label>
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_position_na]" value="N/A"
                                {{ ($workData['sow']['roof_plumber']['downpipes_position_na'] ?? '') == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_not_all_same]" value="Show_various_positions"
                                {{ ($workData['sow']['roof_plumber']['downpipes_not_all_same'] ?? '') == 'Show_various_positions' ? 'checked' : '' }}>
                            If NOT all the same type or colour show various positions on plan
                        </label>
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_various_positions_na]" value="N/A"
                                {{ ($workData['sow']['roof_plumber']['downpipes_various_positions_na'] ?? '') == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_water_tank_location]" value="Show_water_tank_location"
                                {{ ($workData['sow']['roof_plumber']['downpipes_water_tank_location'] ?? '') == 'Show_water_tank_location' ? 'checked' : '' }}>
                            Show water tank location or direction to stormwater on plans
                        </label>
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_water_tank_na]" value="N/A"
                                {{ ($workData['sow']['roof_plumber']['downpipes_water_tank_na'] ?? '') == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>

                        <!-- Notes Input -->
                        <div class="d-flex align-items-center">
                            <label for="downpipes" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][downpipes]" id="downpipes" placeholder="Enter downpipes notes"
                                value="{{ $workData['sow']['site_work']['downpipes'] ?? '' }}">
                        </div>
                    </div>


                    <div class="card p-3 mb-3">
                        <h5>7.4 Metal Roof & Cappings</h5>

                        <!-- radio for As shown on plans -->
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_cappings]" value="As_shown_on_plans"
                                {{ $workData['sow']['roof_plumber']['metal_roof_cappings'] ?? '' == 'As_shown_on_plans' ? 'checked' : '' }}>
                            As shown on plans
                        </label>

                        <!-- radio for N/A -->
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_cappings]" value="N/A"
                                {{ $workData['sow']['roof_plumber']['metal_roof_cappings'] ?? '' == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>

                        <!-- Colour selection -->
                        <div>
                            <label for="Colour selection">Colour selection</label><br>
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_colour]" value="Zincalume"
                                    {{ $workData['sow']['roof_plumber']['roof_colour'] ?? '' == 'Zincalume' ? 'checked' : '' }}>
                                Zincalume
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_colour]" value="Colorbond_colour"
                                    {{ $workData['sow']['roof_plumber']['roof_colour'] ?? '' == 'Colorbond_colour' ? 'checked' : '' }}>
                                Colorbond colour
                            </label>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="metal_roof_cappings" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][metal_roof_cappings]" id="metal_roof_cappings" placeholder="Enter metal roof & cappings notes"
                                value="{{ $workData['sow']['site_work']['metal_roof_cappings'] ?? '' }}">
                        </div>
                    </div>


                    <div class="card p-3 mb-3">
                        <h5>7.5 Roof Tiles</h5>

                        <!-- radio for As shown on plans -->
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_tiles]" value="As_shown_on_plans"
                                {{ $workData['sow']['roof_plumber']['roof_tiles'] ?? '' == 'As_shown_on_plans' ? 'checked' : '' }}>
                            As shown on plans
                        </label>

                        <!-- radio for N/A -->
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_tiles]" value="N/A"
                                {{ $workData['sow']['roof_plumber']['roof_tiles'] ?? '' == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>

                        <!-- Tile type selection -->
                        <div>
                            <label for="Tile type">Tile type</label><br>
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][tile_type]" value="Concrete"
                                    {{ $workData['sow']['roof_plumber']['tile_type'] ?? '' == 'Concrete' ? 'checked' : '' }}>
                                Concrete
                            </label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][tile_type]" value="Terracotta"
                                    {{ $workData['sow']['roof_plumber']['tile_type'] ?? '' == 'Terracotta' ? 'checked' : '' }}>
                                Terracotta
                            </label>
                        </div>

                        <!-- Selected tiles details -->
                        <div>
                            <label for="Selected tiles">Selected tiles</label><br>

                            <!-- Supplier input -->
                            <div class="form-group mt-2">
                                <label for="supplier">Supplier</label>
                                <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_supplier]" placeholder="Enter Supplier"
                                    value="{{ $workData['sow']['roof_plumber']['tile_supplier'] ?? '' }}">
                            </div>

                            <!-- Style input -->
                            <div class="form-group mt-2">
                                <label for="style">Style</label>
                                <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_style]" placeholder="Enter Style"
                                    value="{{ $workData['sow']['roof_plumber']['tile_style'] ?? '' }}">
                            </div>

                            <!-- Colour input -->
                            <div class="form-group mt-2">
                                <label for="colour">Colour</label>
                                <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_colour]" placeholder="Enter Colour"
                                    value="{{ $workData['sow']['roof_plumber']['tile_colour'] ?? '' }}">
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="roof_tiles" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][roof_tiles]" id="roof_tiles" placeholder="Enter roof tiles notes"
                                value="{{ $workData['sow']['site_work']['roof_tiles'] ?? '' }}">
                        </div>
                    </div>


                    <div class="card p-3 mb-3">
                        <h6 class="mb-4">7.6 Insulation / Moisture Barriers</h6>

                        <!-- Standard for Metal Roof -->
                        <label for="Standard for Metal Roof">Standard for Metal Roof</label>
                        <div class="d-flex">
                            <!-- radio for 55mm Anticon Blanket -->
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_standard]" value="55mm_Anticon_Blanket_(Foil_backed_blanket)_Verandah's_NOT_included"
                                    {{ $workData['sow']['roof_plumber']['metal_roof_standard'] ?? '' == "55mm_Anticon_Blanket_(Foil_backed_blanket)_Verandah's_NOT_included" ? 'checked' : '' }}>
                                55mm Anticon Blanket (Foil backed blanket) Verandah's NOT included
                            </label>
                            <!-- radio for N/A -->
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_standard]" value="N/A"
                                    {{ $workData['sow']['roof_plumber']['metal_roof_standard'] ?? '' == 'N/A' ? 'checked' : '' }}>
                                N/A
                            </label>
                        </div>

                        <!-- Standard for Tiled Roof -->
                        <label for="Standard for Tiled Roof">Standard for Tiled Roof</label>
                        <div class="d-flex">
                            <!-- radio for Sisalation foil -->
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][tiled_roof_standard]" value="Sisalation_foil_(sarking)"
                                    {{ $workData['sow']['roof_plumber']['tiled_roof_standard'] ?? '' == 'Sisalation_foil_(sarking)' ? 'checked' : '' }}>
                                Sisalation foil (sarking)
                            </label>
                            <!-- radio for N/A -->
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][tiled_roof_standard]" value="N/A"
                                    {{ $workData['sow']['roof_plumber']['tiled_roof_standard'] ?? '' == 'N/A' ? 'checked' : '' }}>
                                N/A
                            </label>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="moisture_barriers" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][moisture_barriers]" id="moisture_barriers" placeholder="Enter Insulation / Moisture Barriers notes"
                                value="{{ $workData['sow']['site_work']['moisture_barriers'] ?? '' }}">
                        </div>
                    </div>

                    <div class="card p-3 mb-3">
                        <h5>7.7 Roof Vents</h5>

                        <!-- radio for "As shown on plans" -->
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_plans]" value="As_shown_on_plans"
                                {{ $workData['sow']['roof_plumber']['roof_vents_plans'] ?? '' == 'As_shown_on_plans' ? 'checked' : '' }}>
                            As shown on plans
                        </label>

                        <!-- radio for "N/A" -->
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_plans]" value="N/A"
                                {{ $workData['sow']['roof_plumber']['roof_vents_plans'] ?? '' == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>

                        <!-- Colour selection -->
                        <label for="Colour selection">Colour selection</label>
                        <div class="d-flex">
                            <!-- radio for Zincalume -->
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_colour]" value="Zincalume"
                                    {{ $workData['sow']['roof_plumber']['roof_vents_colour'] ?? '' == 'Zincalume' ? 'checked' : '' }}>
                                Zincalume
                            </label>

                            <!-- radio for Colorbond colour -->
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_colour]" value="Colorbond_colour"
                                    {{ $workData['sow']['roof_plumber']['roof_vents_colour'] ?? '' == 'Colorbond_colour' ? 'checked' : '' }}>
                                Colorbond colour
                            </label>
                        </div>

                        <!-- Selection for Supplier -->
                        <label for="Supplier">Supplier</label>
                        <div>
                            <input type="text" class="form-control w-50" name="sow[roof_plumber][roof_vents_supplier]" placeholder="Enter Supplier"
                                value="{{ $workData['sow']['roof_plumber']['roof_vents_supplier'] ?? '' }}">
                        </div>

                        <!-- Selection for Style -->
                        <label for="Style">Style</label>
                        <div>
                            <input type="text" class="form-control w-50" name="sow[roof_plumber][roof_vents_style]" placeholder="Enter Style"
                                value="{{ $workData['sow']['roof_plumber']['roof_vents_style'] ?? '' }}">
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="roof_vents" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][roof_vents]" id="roof_vents" placeholder="Enter roof vents notes"
                                value="{{ $workData['sow']['site_work']['roof_vents'] ?? '' }}">
                        </div>
                    </div>

                    <div class="card p-3 mb-3">
                        <h5>7.8 Sky Lights</h5>

                        <!-- radio for "As shown on plans" -->
                        <label class="form-check-label me-3">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_plans]" value="As_shown_on_plans"
                                {{ $workData['sow']['roof_plumber']['sky_lights_plans'] ?? '' == 'As_shown_on_plans' ? 'checked' : '' }}>
                            As shown on plans
                        </label>

                        <!-- radio for "N/A" -->
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_plans]" value="N/A"
                                {{ $workData['sow']['roof_plumber']['sky_lights_plans'] ?? '' == 'N/A' ? 'checked' : '' }}>
                            N/A
                        </label>

                        <!-- Colour selection -->
                        <label for="Colour selection">Colour selection</label>
                        <div class="d-flex">
                            <!-- radio for Zincalume -->
                            <label class="form-check-label me-3">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_colour]" value="Zincalume"
                                    {{ $workData['sow']['roof_plumber']['sky_lights_colour'] ?? '' == 'Zincalume' ? 'checked' : '' }}>
                                Zincalume
                            </label>

                            <!-- radio for Colorbond colour -->
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_colour]" value="Colorbond_colour"
                                    {{ $workData['sow']['roof_plumber']['sky_lights_colour'] ?? '' == 'Colorbond_colour' ? 'checked' : '' }}>
                                Colorbond colour
                            </label>
                        </div>

                        <!-- Selection for Supplier -->
                        <label for="Supplier">Supplier</label>
                        <div>
                            <input type="text" class="form-control w-50" name="sow[roof_plumber][sky_lights_supplier]" placeholder="Enter Supplier"
                                value="{{ $workData['sow']['roof_plumber']['sky_lights_supplier'] ?? '' }}">
                        </div>

                        <!-- Selection for Style -->
                        <label for="Style">Style</label>
                        <div>
                            <input type="text" class="form-control w-50" name="sow[roof_plumber][sky_lights_style]" placeholder="Enter Style"
                                value="{{ $workData['sow']['roof_plumber']['sky_lights_style'] ?? '' }}">
                        </div>

                        <!-- Important Section -->
                        <div class="p-3 mb-3" style="background: linear-gradient(to right, #ff7e5f, #feb47b); color: black;">
                            <strong>IMPORTANT</strong>
                            <p>Roofing and Rainwater goods in fire risk areas may have specific requirements to meet council consent (e.g. Leafless guttering, & Valleys Screened). Conditions of development application MUST be checked prior to finalisation of selection.</p>

                            <!-- radio for "Bushfire Attack Level" -->
                            <div class="d-flex align-items-center">
                                <label class="me-2">Checked:</label>
                                <input type="radio" name="sow[roof_plumber][fire_risk_checked]" checked class="me-3">
                                <label>Bushfire Attack Level</label>
                            </div>

                            <!-- Input for "Checked By" -->
                            <div class="mt-2">
                                <label for="checked_by">Checked By:</label>
                                <input type="text" id="checked_by" name="sow[roof_plumber][checked_by]" class="form-control d-inline-block w-50 ms-2" placeholder="Signature or Name"
                                    value="{{ $workData['sow']['roof_plumber']['checked_by'] ?? '' }}">
                            </div>

                            <!-- Fire Risk Levels -->
                            <small>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
                        </div>

                        <div class="d-flex align-items-center">
                            <!-- Label and Input -->
                            <label for="sky_lights" class="me-2 mb-0">Notes to above:</label>
                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                name="sow[site_work][sky_lights]" id="sky_lights" placeholder="Enter sky lights notes"
                                value="{{ $workData['sow']['site_work']['sky_lights'] ?? '' }}">
                        </div>
                    </div>




                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                        </div>
                    </div>
                    <table
                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                        <tbody>
                            <tr>
                                <td
                                    colspan="3"
                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                    8) WINDOWS & ENTRY DOORS </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="card p-3 mb-3">
                        <h5>8.1 Timber Hinged Entry Doors & Sidelights</h5>

                        <!-- Door Manufacturer -->
                        <div class="mb-3">
                            <label><strong>- Standard units by “Hume Doors”</strong></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="hume_doors" name="door_manufacturer" value="Hume Doors"
                                    {{ $workData['door_manufacturer'] ?? '' == 'Hume Doors' ? 'checked' : '' }}>
                                <label class="form-check-label" for="hume_doors">Hume Doors</label>
                            </div>
                            <span class="mx-2">OR</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="other_doors" name="door_manufacturer" value="Other"
                                    {{ $workData['door_manufacturer'] ?? '' == 'Other' ? 'checked' : '' }}>
                                <label class="form-check-label" for="other_doors">Other</label>
                            </div>
                            <input type="text" name="other_manufacturer" class="form-control mt-2 w-25"
                                placeholder="Manufacturer's Name"
                                value="{{ $workData['other_manufacturer'] ?? '' }}">
                        </div>

                        <!-- Entry Door Section -->
                        <div class="mb-3">
                            <label>- Entry door</label>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" id="entry_door_yes" name="entry_door_selected" value="Yes"
                                    {{ $workData['entry_door_selected'] ?? '' == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="entry_door_yes">Yes</label>
                            </div>

                            <span class="ms-3">Type:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="entry_door_type"
                                value="{{ $workData['entry_door_type'] ?? '' }}">

                            <span>Glass:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="entry_door_glass" placeholder="e.g., OBSCURE"
                                value="{{ $workData['entry_door_glass'] ?? '' }}">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="entry_door_na" name="entry_door_selected" value="NA"
                                    {{ $workData['entry_door_selected'] ?? '' == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label" for="entry_door_na">N/A</label>
                            </div>
                        </div>

                        <!-- Side lights -->
                        <div class="mb-2">
                            <label>- Side lights</label>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="side_lights_selected" value="Yes"
                                    {{ $workData['side_lights_selected'] ?? '' == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>

                            <span class="ms-3">Type:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="side_lights_type"
                                value="{{ $workData['side_lights_type'] ?? '' }}">

                            <span>Glass:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="side_lights_glass"
                                value="{{ $workData['side_lights_glass'] ?? '' }}">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="side_lights_selected" value="NA"
                                    {{ $workData['side_lights_selected'] ?? '' == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label">N/A</label>
                            </div>
                        </div>

                        <!-- Laundry door -->
                        <div class="mb-2">
                            <label>- Laundry door</label>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="laundry_door_selected" value="Yes"
                                    {{ $workData['laundry_door_selected'] ?? '' == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>

                            <span class="ms-3">Type:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="laundry_door_type"
                                value="{{ $workData['laundry_door_type'] ?? '' }}">

                            <span>Glass:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="laundry_door_glass"
                                value="{{ $workData['laundry_door_glass'] ?? '' }}">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="laundry_door_selected" value="NA"
                                    {{ $workData['laundry_door_selected'] ?? '' == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label">N/A</label>
                            </div>
                        </div>

                        <!-- Garage P.A door -->
                        <div class="mb-2">
                            <label>- Garage P.A door</label>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="garage_pa_selected" value="Yes"
                                    {{ $workData['garage_pa_selected'] ?? '' == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>

                            <span class="ms-3">Type:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="garage_pa_type"
                                value="{{ $workData['garage_pa_type'] ?? '' }}">

                            <span>Glass:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="garage_pa_glass"
                                value="{{ $workData['garage_pa_glass'] ?? '' }}">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="garage_pa_selected" value="NA"
                                    {{ $workData['garage_pa_selected'] ?? '' == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label">N/A</label>
                            </div>
                        </div>

                        <!-- Other hinged entry -->
                        <div class="mb-2">
                            <label>- Other hinged entry</label>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="other_hinged_entry_selected" value="Yes"
                                    {{ $workData['other_hinged_entry_selected'] ?? '' == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>

                            <span class="ms-3">Type:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="other_hinged_entry_type"
                                value="{{ $workData['other_hinged_entry_type'] ?? '' }}">

                            <span>Glass:</span>
                            <input type="text" class="form-control d-inline-block w-25 mx-2" name="other_hinged_entry_glass"
                                value="{{ $workData['other_hinged_entry_glass'] ?? '' }}">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="other_hinged_entry_selected" value="NA"
                                    {{ $workData['other_hinged_entry_selected'] ?? '' == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label">N/A</label>
                            </div>
                        </div>

                        <!-- Notes to above -->
                        <div class="mb-3">
                            <label><strong>Notes to above:</strong></label>
                            <textarea class="form-control" rows="3" name="notes_above" placeholder="Enter notes...">{{ $workData['notes_above'] ?? '' }}</textarea>
                        </div>

                        <!-- Hinges -->
                        <div class="mb-3">
                            <label><strong>- Hinges as applicable:</strong></label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hinges" value="Standard FB steel"
                                    {{ $workData['hinges'] ?? '' == 'Standard FB steel' ? 'checked' : '' }}>
                                <label class="form-check-label">Standard FB steel</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hinges" value="Zinc coated"
                                    {{ $workData['hinges'] ?? '' == 'Zinc coated' ? 'checked' : '' }}>
                                <label class="form-check-label">Zinc coated</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hinges" value="Brass"
                                    {{ $workData['hinges'] ?? '' == 'Brass' ? 'checked' : '' }}>
                                <label class="form-check-label">Brass</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hinges" value="Stainless steel or Satin Chrome"
                                    {{ $workData['hinges'] ?? '' == 'Stainless steel or Satin Chrome' ? 'checked' : '' }}>
                                <label class="form-check-label">Stainless steel or Satin Chrome</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hinges" value="Bright Chrome"
                                    {{ $workData['hinges'] ?? '' == 'Bright Chrome' ? 'checked' : '' }}>
                                <label class="form-check-label">Bright Chrome</label>
                            </div>
                        </div>

                        <!-- Notes to hinges -->
                        <div class="mb-3">
                            <label><strong>Notes to above:</strong></label>
                            <textarea class="form-control" rows="3" name="hinges_notes" placeholder="Enter notes...">{{ $workData['hinges_notes'] ?? '' }}</textarea>
                        </div>
                    </div>

                    <div class="card p-3 mb-3">
                        <h5>8.2 Exterior Timber Door Furniture</h5>

                        <!-- Exterior Locks -->
                        <div class="mb-3">
                            <label><strong>- Exterior locks</strong></label>
                            <input type="text" class="form-control mb-2" name="exterior_manufacturer" placeholder="Manufacturer's Name"
                                value="{{ $workData['exterior_manufacturer'] ?? '' }}">
                            <input type="text" class="form-control" name="exterior_selection" placeholder="Selection"
                                value="{{ $workData['exterior_selection'] ?? '' }}">
                        </div>


                        <!-- Feature Entry Lock -->
                        <div class="mb-3">
                            <label><strong>- Feature entry lock (@ Extra Cost)</strong></label>
                            <input type="text" class="form-control mb-2" name="feature_manufacturer" placeholder="Manufacturer's Name"
                                value="{{ $workData['feature_manufacturer'] ?? '' }}">
                            <input type="text" class="form-control mb-2" name="feature_selection" placeholder="Selection"
                                value="{{ $workData['feature_selection'] ?? '' }}">
                            <small class="text-muted">Entry only additional to other exterior door locks</small>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="feature_entry" value="OR" id="feature_or"
                                    {{ isset($workData['feature_entry']) && $workData['feature_entry'] == 'OR' ? 'checked' : '' }}>
                                <label class="form-check-label" for="feature_or">OR</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="feature_entry" value="NA" id="feature_na"
                                    {{ isset($workData['feature_entry']) && $workData['feature_entry'] == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label" for="feature_na">N/A</label>
                            </div>
                        </div>

                        <!-- All timber entry's keyed alike -->
                        <div class="mb-3">
                            <label><strong>- All timber entry's keyed alike:</strong></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keyed_alike" value="Yes" id="keyed_yes"
                                    {{ isset($workData['keyed_alike']) && $workData['keyed_alike'] == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="keyed_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keyed_alike" value="No" id="keyed_no"
                                    {{ isset($workData['keyed_alike']) && $workData['keyed_alike'] == 'No' ? 'checked' : '' }}>
                                <label class="form-check-label" for="keyed_no">No</label>
                            </div>
                        </div>


                        <!-- Deadbolts to doors -->
                        <div class="mb-3">
                            <label><strong>- Deadbolts to doors:</strong></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolts" value="No" id="deadbolt_no"
                                    {{ isset($workData['deadbolts']) && $workData['deadbolts'] == 'No' ? 'checked' : '' }}>
                                <label class="form-check-label" for="deadbolt_no">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolts" value="Yes" id="deadbolt_yes"
                                    {{ isset($workData['deadbolts']) && $workData['deadbolts'] == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="deadbolt_yes">Yes</label>
                            </div>
                            <input type="text" class="form-control mt-2" name="deadbolt_manufacturer" placeholder="Manufacturer's Name"
                                value="{{ isset($workData['deadbolt_manufacturer']) ? $workData['deadbolt_manufacturer'] : '' }}">
                            <input type="text" class="form-control mt-2" name="deadbolt_selection" placeholder="Selection"
                                value="{{ isset($workData['deadbolt_selection']) ? $workData['deadbolt_selection'] : '' }}">
                        </div>

                        <!-- Deadbolt locations -->
                        <div class="mb-3">
                            <label><strong>- Apply to:</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolt_location" value="Main entry" id="loc_main"
                                    {{ isset($workData['deadbolt_location']) && $workData['deadbolt_location'] == 'Main entry' ? 'checked' : '' }}>
                                <label class="form-check-label" for="loc_main">Main entry</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolt_location" value="Garage" id="loc_garage"
                                    {{ isset($workData['deadbolt_location']) && $workData['deadbolt_location'] == 'Garage' ? 'checked' : '' }}>
                                <label class="form-check-label" for="loc_garage">Garage</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolt_location" value="Laundry" id="loc_laundry"
                                    {{ isset($workData['deadbolt_location']) && $workData['deadbolt_location'] == 'Laundry' ? 'checked' : '' }}>
                                <label class="form-check-label" for="loc_laundry">Laundry</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deadbolt_location" value="Other" id="loc_other"
                                    {{ isset($workData['deadbolt_location']) && $workData['deadbolt_location'] == 'Other' ? 'checked' : '' }}>
                                <label class="form-check-label" for="loc_other">Other</label>
                            </div>
                            <input type="text" class="form-control mt-2 w-50" name="deadbolt_other" placeholder="Specify other"
                                value="{{ isset($workData['deadbolt_other']) ? $workData['deadbolt_other'] : '' }}">
                        </div>


                        <!-- Bolt options -->
                        <div class="mb-3">
                            <label><strong>- Standard barrel bolts to double timber entry doors</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="standard_barrel" value="Yes" id="barrel_yes"
                                    {{ isset($workData['standard_barrel']) && $workData['standard_barrel'] == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="barrel_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="standard_barrel" value="NA" id="barrel_na"
                                    {{ isset($workData['standard_barrel']) && $workData['standard_barrel'] == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label" for="barrel_na">N/A</label>
                            </div>
                        </div>


                        <!-- Slide bolts -->
                        <div class="mb-3">
                            <label><strong>- Slide bolts to double timber entry doors (@ Extra Cost)</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="slide_bolt" value="Yes" id="slide_yes"
                                    {{ isset($workData['slide_bolt']) && $workData['slide_bolt'] == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="slide_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="slide_bolt" value="NA" id="slide_na"
                                    {{ isset($workData['slide_bolt']) && $workData['slide_bolt'] == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label" for="slide_na">N/A</label>
                            </div>
                        </div>

                        <!-- Keyed bolts -->
                        <div class="mb-3">
                            <label><strong>- Keyed bolts to double timber entry doors (@ Extra Cost)</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keyed_bolt" value="Yes" id="keyedbolt_yes"
                                    {{ isset($workData['keyed_bolt']) && $workData['keyed_bolt'] == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="keyedbolt_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keyed_bolt" value="NA" id="keyedbolt_na"
                                    {{ isset($workData['keyed_bolt']) && $workData['keyed_bolt'] == 'NA' ? 'checked' : '' }}>
                                <label class="form-check-label" for="keyedbolt_na">N/A</label>
                            </div>
                        </div>


                        <!-- Colour Selection -->
                        <div class="mb-3">
                            <label><strong>- Colour Selection</strong></label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color_selection" value="Bright chrome" id="color1"
                                    {{ isset($workData['color_selection']) && $workData['color_selection'] == 'Bright chrome' ? 'checked' : '' }}>
                                <label class="form-check-label" for="color1">Bright chrome</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color_selection" value="Satin chrome" id="color2"
                                    {{ isset($workData['color_selection']) && $workData['color_selection'] == 'Satin chrome' ? 'checked' : '' }}>
                                <label class="form-check-label" for="color2">Satin chrome</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color_selection" value="Polished brass" id="color3"
                                    {{ isset($workData['color_selection']) && $workData['color_selection'] == 'Polished brass' ? 'checked' : '' }}>
                                <label class="form-check-label" for="color3">Polished brass</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color_selection" value="Other" id="color4"
                                    {{ isset($workData['color_selection']) && $workData['color_selection'] == 'Other' ? 'checked' : '' }}>
                                <label class="form-check-label" for="color4">Other</label>
                            </div>
                            <input type="text" class="form-control mt-2 w-50" name="color_other" placeholder="Other Colour"
                                value="{{ isset($workData['color_other']) ? $workData['color_other'] : '' }}">
                        </div>


                        <div class="card p-3 mb-3">
                            <h5 class="font-weight-bold mb-2">8.3 Windows & Door Units / Sliders</h5>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Standard aluminium units by:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_units]"
                                        value="{{ isset($workData['sow']['windows_and_entry_doors']) && isset($workData['sow']['windows_and_entry_doors']['aluminium_units']) ? $workData['sow']['windows_and_entry_doors']['aluminium_units'] : 'Tecno' }}">
                                    <small class="form-text text-muted">Manufacturer's Name</small>
                                </div>
                            </div>




                            <!-- Aluminium Door, Sliding, and Window -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Aluminium:</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_door_units]" value="door_units"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_door_units']) && $workData['sow']['windows_and_entry_doors']['aluminium_door_units'] == 'door_units' ? 'checked' : '' }}>
                                        <label class="form-check-label">Door units <span class="text-success" style="font-size: 1.5em;"></span></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_sliding_doors]" value="sliding_doors"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_sliding_doors']) && $workData['sow']['windows_and_entry_doors']['aluminium_sliding_doors'] == 'sliding_doors' ? 'checked' : '' }}>
                                        <label class="form-check-label">Sliding doors <span class="text-success" style="font-size: 1.5em;"></span></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_windows]" value="windows"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_windows']) && $workData['sow']['windows_and_entry_doors']['aluminium_windows'] == 'windows' ? 'checked' : '' }}>
                                        <label class="form-check-label">Windows <span class="text-success" style="font-size: 1.5em;"></span></label>
                                    </div>
                                    <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_colour]"
                                        value="{{ isset($workData['sow']['windows_and_entry_doors']['aluminium_colour']) ? $workData['sow']['windows_and_entry_doors']['aluminium_colour'] : 'Woodlands Grey' }}">
                                    <small class="form-text text-muted">Colour Selection</small>
                                </div>
                            </div>
                            <!-- Sliding, Double Hung, Other -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_sliding]" value="sliding"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_sliding']) && $workData['sow']['windows_and_entry_doors']['aluminium_sliding'] == 'sliding' ? 'checked' : '' }}>
                                        <label class="form-check-label">Sliding</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_double_hung]" value="double_hung"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_double_hung']) && $workData['sow']['windows_and_entry_doors']['aluminium_double_hung'] == 'double_hung' ? 'checked' : '' }}>
                                        <label class="form-check-label">Double hung</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_other]" value="other"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['aluminium_other']) && $workData['sow']['windows_and_entry_doors']['aluminium_other'] == 'other' ? 'checked' : '' }}>
                                        <label class="form-check-label">Other</label>
                                    </div>
                                    <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_other_details]"
                                        value="{{ isset($workData['sow']['windows_and_entry_doors']['aluminium_other_details']) ? $workData['sow']['windows_and_entry_doors']['aluminium_other_details'] : 'Ann' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Timber:</label>
                                <div class="col-sm-9">
                                    <!-- Door Units -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_door_units]" value="door_units"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_door_units']) && $workData['sow']['windows_and_entry_doors']['timber_door_units'] == 'door_units' ? 'checked' : '' }}>
                                        <label class="form-check-label">Door units
                                            <input type="radio" name="timber_door_units_na" value="na"
                                                {{ isset($workData['timber_door_units_na']) && $workData['timber_door_units_na'] == 'na' ? 'checked' : '' }}> N/A
                                            <span class="text-success" style="font-size: 1.5em;"></span>
                                        </label>
                                    </div>

                                    <!-- Sliding Doors -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_sliding_doors]" value="sliding_doors"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_sliding_doors']) && $workData['sow']['windows_and_entry_doors']['timber_sliding_doors'] == 'sliding_doors' ? 'checked' : '' }}>
                                        <label class="form-check-label">Sliding doors
                                            <input type="radio" name="timber_sliding_doors_na" value="na"
                                                {{ isset($workData['timber_sliding_doors_na']) && $workData['timber_sliding_doors_na'] == 'na' ? 'checked' : '' }}> N/A
                                            <span class="text-success" style="font-size: 1.5em;"></span>
                                        </label>
                                    </div>

                                    <!-- Windows -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_windows]" value="windows"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_windows']) && $workData['sow']['windows_and_entry_doors']['timber_windows'] == 'windows' ? 'checked' : '' }}>
                                        <label class="form-check-label">Windows
                                            <input type="radio" name="sow[windows_and_entry_doors][timber_windows_na]" value="na"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['timber_windows_na']) && $workData['sow']['windows_and_entry_doors']['timber_windows_na'] == 'na' ? 'checked' : '' }}> N/A
                                            <span class="text-success" style="font-size: 1.5em;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <!-- Sliding, Double Hung, Other -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_sliding]" value="sliding"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_sliding']) && $workData['sow']['windows_and_entry_doors']['timber_sliding'] == 'sliding' ? 'checked' : '' }}>
                                        <label class="form-check-label">Sliding</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_double_hung]" value="double_hung"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_double_hung']) && $workData['sow']['windows_and_entry_doors']['timber_double_hung'] == 'double_hung' ? 'checked' : '' }}>
                                        <label class="form-check-label">Double hung</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_other]" value="other"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['timber_other']) && $workData['sow']['windows_and_entry_doors']['timber_other'] == 'other' ? 'checked' : '' }}>
                                        <label class="form-check-label">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Window locks keyed alike:</label>
                                <div class="col-sm-9">
                                    <!-- Yes, No Options -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_locks_keyed_alike]" value="yes"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['window_locks_keyed_alike']) && $workData['sow']['windows_and_entry_doors']['window_locks_keyed_alike'] == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_locks_keyed_alike]" value="no"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['window_locks_keyed_alike']) && $workData['sow']['windows_and_entry_doors']['window_locks_keyed_alike'] == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Door units/sliders keyed alike:</label>
                                <div class="col-sm-9">
                                    <!-- Yes Option -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_units_keyed_alike]" value="yes"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['door_units_keyed_alike']) && $workData['sow']['windows_and_entry_doors']['door_units_keyed_alike'] == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <!-- No Option -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_units_keyed_alike]" value="no"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['door_units_keyed_alike']) && $workData['sow']['windows_and_entry_doors']['door_units_keyed_alike'] == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="font-italic small mt-3">
                                <span class="font-weight-bold" style="font-style: normal;">Note:</span> Generally timber entry doors, door units and windows CANNOT be ALL keyed alike as a group.
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12">All double door units and sliding door units to indicate active leaf on plan</label>
                                <div class="col-sm-12">
                                    <!-- Active Leaf Option -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][double_door_active_leaf]" value="active_leaf"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['double_door_active_leaf']) && $workData['sow']['windows_and_entry_doors']['double_door_active_leaf'] == 'active_leaf' ? 'checked' : '' }}>
                                        <label class="form-check-label">()</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12">Standard Pre-Primed timber reveals (Not applicable for Timber Units)</label>
                                <div class="col-sm-12">
                                    <!-- Pre-Primed Timber Reveals Option -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][standard_preprimed_reveals]" value="preprimed"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['standard_preprimed_reveals']) && $workData['sow']['windows_and_entry_doors']['standard_preprimed_reveals'] == 'preprimed' ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12">OR Meranti timber reveals (Suitable for a stainable finish)</label>
                                <div class="col-sm-12">
                                    <!-- Meranti Timber Reveals Option -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][meranti_reveals]" value="meranti"
                                            {{ isset($workData['sow']['windows_and_entry_doors']['meranti_reveals']) && $workData['sow']['windows_and_entry_doors']['meranti_reveals'] == 'meranti' ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Notes to above:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="sow[windows_and_entry_doors][notes_to_above]">{{ isset($workData['sow']['windows_and_entry_doors']['notes_to_above']) ? $workData['sow']['windows_and_entry_doors']['notes_to_above'] : '' }}</textarea>
                                </div>
                            </div>


                            <div class="card p-3 mb-3">
                                <h5>8.4 Window and Door Units Glazing</h5>

                                <div class="font-italic small mt-3">
                                    <span class="font-weight-bold" style="font-style: normal;">Note:</span> Unless otherwise specified below, ALL windows and door unit glass will be clear glazed with the exception of WC's, Bathrooms, and Ensuites which will be obscure glass.
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">-Specific glazing requirements</label>
                                    <div class="col-sm-9">
                                        <!-- Yes Option for Glazing Requirements -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_requirements]" id="glazing_yes" value="yes"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_requirements']) && $workData['sow']['windows_and_entry_doors']['glazing_requirements'] == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="glazing_yes">Yes</label>
                                        </div>
                                        <!-- No Option for Glazing Requirements -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_requirements]" id="glazing_no" value="no"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_requirements']) && $workData['sow']['windows_and_entry_doors']['glazing_requirements'] == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="glazing_no">No</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location1]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['location1']) ? $workData['sow']['windows_and_entry_doors']['location1'] : 'FRONT ENTRANCE TO BOTH UNITS' }}"></label>
                                    <div class="col-sm-9">
                                        <!-- Clear Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="clear1" value="clear"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type1']) && $workData['sow']['windows_and_entry_doors']['glazing_type1'] == 'clear' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="clear1">Clear glass</label>
                                        </div>
                                        <!-- Obscure Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="obscure1" value="obscure"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type1']) && $workData['sow']['windows_and_entry_doors']['glazing_type1'] == 'obscure' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="obscure1">Obscure glass</label>
                                        </div>
                                        <!-- Other Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="other1" value="other"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type1']) && $workData['sow']['windows_and_entry_doors']['glazing_type1'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other1">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location2]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['location2']) ? $workData['sow']['windows_and_entry_doors']['location2'] : '' }}"></label>
                                    <div class="col-sm-9">
                                        <!-- Clear Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="clear2" value="clear"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type2']) && $workData['sow']['windows_and_entry_doors']['glazing_type2'] == 'clear' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="clear2">Clear glass</label>
                                        </div>
                                        <!-- Obscure Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="obscure2" value="obscure"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type2']) && $workData['sow']['windows_and_entry_doors']['glazing_type2'] == 'obscure' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="obscure2">Obscure glass</label>
                                        </div>
                                        <!-- Other Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="other2" value="other"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type2']) && $workData['sow']['windows_and_entry_doors']['glazing_type2'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other2">Other</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location3]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['location3']) ? $workData['sow']['windows_and_entry_doors']['location3'] : '' }}"></label>
                                    <div class="col-sm-9">
                                        <!-- Clear Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="clear3" value="clear"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type3']) && $workData['sow']['windows_and_entry_doors']['glazing_type3'] == 'clear' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="clear3">Clear glass</label>
                                        </div>
                                        <!-- Obscure Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="obscure3" value="obscure"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type3']) && $workData['sow']['windows_and_entry_doors']['glazing_type3'] == 'obscure' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="obscure3">Obscure glass</label>
                                        </div>
                                        <!-- Other Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="other3" value="other"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type3']) && $workData['sow']['windows_and_entry_doors']['glazing_type3'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other3">Other</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location4]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['location4']) ? $workData['sow']['windows_and_entry_doors']['location4'] : '' }}"></label>
                                    <div class="col-sm-9">
                                        <!-- Clear Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="clear4" value="clear"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type4']) && $workData['sow']['windows_and_entry_doors']['glazing_type4'] == 'clear' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="clear4">Clear glass</label>
                                        </div>
                                        <!-- Obscure Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="obscure4" value="obscure"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type4']) && $workData['sow']['windows_and_entry_doors']['glazing_type4'] == 'obscure' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="obscure4">Obscure glass</label>
                                        </div>
                                        <!-- Other Glass Option -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="other4" value="other"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['glazing_type4']) && $workData['sow']['windows_and_entry_doors']['glazing_type4'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other4">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Notes to above:</label>
                                    <div class="col-sm-9">
                                        <textarea name="sow[windows_and_entry_doors][notes]" class="form-control">{{ isset($workData['sow']['windows_and_entry_doors']['notes']) ? $workData['sow']['windows_and_entry_doors']['notes'] : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="font-italic small mt-3">
                                    NOTE BASIX ASSESSMENT MAY REQUIRE SPECIFIC GLAZING
                                </div>

                                <div class="font-italic small mt-3">
                                    NOTE BUSHFIRE ASSESSMENT MAY REQUIRE TOUGHENED GLASS
                                </div>
                            </div>

                            <div class="card p-3 mb-3">
                                <h5>8.5 Flyscreens</h5>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Type:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="fibreglass" name="sow[windows_and_entry_doors][flyscreen_type]" value="fibreglass"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['flyscreen_type']) && $workData['sow']['windows_and_entry_doors']['flyscreen_type'] == 'fibreglass' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fibreglass">Standard fibreglass mesh</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="steel" name="sow[windows_and_entry_doors][flyscreen_type]" value="steel"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['flyscreen_type']) && $workData['sow']['windows_and_entry_doors']['flyscreen_type'] == 'steel' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="steel">Stainless steel mesh (@ Extra Cost) <span class="small text-muted">Suitable for fire regulations</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="other" name="sow[windows_and_entry_doors][flyscreen_type]" value="other"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['flyscreen_type']) && $workData['sow']['windows_and_entry_doors']['flyscreen_type'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="flyscreens" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][flyscreens]" id="flyscreens"
                                        value="{{ isset($workData['sow']['site_work']['flyscreens']) ? $workData['sow']['site_work']['flyscreens'] : '' }}" placeholder="Enter flyscreens notes">
                                </div>
                            </div>


                            <div class="card p-3 mb-3">

                                <h5>8.6 Security Doors</h5>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- If by builder: 1) Fixed price included in quote</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_price]" value="fixed"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['security_door_price']) && $workData['sow']['windows_and_entry_doors']['security_door_price'] == 'fixed' ? 'checked' : '' }}>
                                            <label class="form-check-label">Per Selections Below</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_na]" value="na"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['security_door_na']) && $workData['sow']['windows_and_entry_doors']['security_door_na'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label">N/A</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Or 2) Provisional Sum</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_sum]" value="provisional"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['security_door_sum']) && $workData['sow']['windows_and_entry_doors']['security_door_sum'] == 'provisional' ? 'checked' : '' }}>
                                            <label class="form-check-label">
                                                <img src="https://via.placeholder.com/150x30?text=Amount+to+be+shown+at+Section+16+'Schedule+of+Provisional+Sums'" alt="Provisional Sum Note">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Security grille standard pattern: (Fitted to Sliding Doors with Deadlocks)</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="vinyl" name="sow[windows_and_entry_doors][security_grille_pattern]" value="vinyl"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['security_grille_pattern']) && $workData['sow']['windows_and_entry_doors']['security_grille_pattern'] == 'vinyl' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="vinyl">Vinyl mesh</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="stainless" name="sow[windows_and_entry_doors][security_grille_pattern]" value="stainless"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['security_grille_pattern']) && $workData['sow']['windows_and_entry_doors']['security_grille_pattern'] == 'stainless' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="stainless">Stainless steel mesh <span class="small text-muted">Suitable for fire regulations</span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Selection:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sow[windows_and_entry_doors][security_door_supplier]" class="form-control mb-2"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['security_door_supplier']) ? $workData['sow']['windows_and_entry_doors']['security_door_supplier'] : '' }}" placeholder="Supplier">
                                        <input type="text" name="sow[windows_and_entry_doors][security_door_style]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['security_door_style']) ? $workData['sow']['windows_and_entry_doors']['security_door_style'] : '' }}" placeholder="Style">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Entries requiring security doors:</label>
                                    <div class="col-sm-9">
                                        <textarea name="sow[windows_and_entry_doors][security_door_entries]" class="form-control">{{ isset($workData['sow']['windows_and_entry_doors']['security_door_entries']) ? $workData['sow']['windows_and_entry_doors']['security_door_entries'] : '' }}</textarea>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="security_doors" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][security_doors]" id="security_doors"
                                        value="{{ isset($workData['sow']['site_work']['security_doors']) ? $workData['sow']['site_work']['security_doors'] : '' }}" placeholder="Enter security doors notes">
                                </div>
                            </div>

                            <div class="card p-3 mb-3">

                                <h5>8.7 Security Window Shutters</h5>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- If by builder: 1) Fixed price included in quote</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_price]" value="fixed"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['window_shutter_price']) && $workData['sow']['windows_and_entry_doors']['window_shutter_price'] == 'fixed' ? 'checked' : '' }}>
                                            <label class="form-check-label">Per Quote Attached</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_na]" value="na"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['window_shutter_na']) && $workData['sow']['windows_and_entry_doors']['window_shutter_na'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label">N/A</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Or 2) Provisional Sum</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_sum]" value="provisional"
                                                {{ isset($workData['sow']['windows_and_entry_doors']['window_shutter_sum']) && $workData['sow']['windows_and_entry_doors']['window_shutter_sum'] == 'provisional' ? 'checked' : '' }}>
                                            <label class="form-check-label">
                                                <img src="https://via.placeholder.com/150x30?text=Amount+to+be+shown+at+Section+16+'Schedule+of+Provisional+Sums'" alt="Provisional Sum Note">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Selection:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sow[windows_and_entry_doors][window_shutter_supplier]" class="form-control mb-2"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['window_shutter_supplier']) ? $workData['sow']['windows_and_entry_doors']['window_shutter_supplier'] : '' }}" placeholder="Supplier">
                                        <input type="text" name="sow[windows_and_entry_doors][window_shutter_style]" class="form-control"
                                            value="{{ isset($workData['sow']['windows_and_entry_doors']['window_shutter_style']) ? $workData['sow']['windows_and_entry_doors']['window_shutter_style'] : '' }}" placeholder="Style">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Notes to above:</label>
                                    <div class="col-sm-9">
                                        <textarea name="sow[windows_and_entry_doors][general_notes]" class="form-control">{{ isset($workData['sow']['windows_and_entry_doors']['general_notes']) ? $workData['sow']['windows_and_entry_doors']['general_notes'] : '' }}</textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="card p-3 mb-3">
                                <h5>8.8 Garage Doors</h5>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Door type:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_type]" id="roller" value="roller"
                                                {{ isset($workData['windows_and_entry_doors']['door_type']) && $workData['windows_and_entry_doors']['door_type'] == 'roller' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="roller">Roller door</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_type]" id="panel" value="panel"
                                                {{ isset($workData['windows_and_entry_doors']['door_type']) && $workData['windows_and_entry_doors']['door_type'] == 'panel' ? 'checked' : 'checked' }}>
                                            <label class="form-check-label" for="panel">Panel lift</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Colorbond Colour:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sow[windows_and_entry_doors][colorbond_colour]" class="form-control"
                                                    value="{{ isset($workData['windows_and_entry_doors']['colorbond_colour']) ? $workData['windows_and_entry_doors']['colorbond_colour'] : 'Woodlands Grey' }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Supplier:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sow[windows_and_entry_doors][supplier]" class="form-control"
                                                    value="{{ isset($workData['windows_and_entry_doors']['supplier']) ? $workData['windows_and_entry_doors']['supplier'] : 'HVGO' }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Style:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sow[windows_and_entry_doors][style]" class="form-control"
                                                    value="{{ isset($workData['windows_and_entry_doors']['style']) ? $workData['windows_and_entry_doors']['style'] : 'MADISON' }}">
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][wood_grain]" id="wood_grain" value="wood_grain"
                                                {{ isset($workData['windows_and_entry_doors']['wood_grain']) && $workData['windows_and_entry_doors']['wood_grain'] == 'wood_grain' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="wood_grain">Wood grain</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][other]" id="other" value="other"
                                                {{ isset($workData['windows_and_entry_doors']['other']) && $workData['windows_and_entry_doors']['other'] == 'other' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Motorised openings:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][motorised_openings]" id="all_doors" value="all_doors"
                                                {{ isset($workData['windows_and_entry_doors']['motorised_openings']) && $workData['windows_and_entry_doors']['motorised_openings'] == 'all_doors' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="all_doors">All garage doors</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][motorised_openings]" id="listed_doors" value="listed_doors"
                                                {{ isset($workData['windows_and_entry_doors']['motorised_openings']) && $workData['windows_and_entry_doors']['motorised_openings'] == 'listed_doors' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="listed_doors">Doors as listed</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-warning mt-4">
                                    <p><strong>IMPORTANT!</strong></p>
                                    <p>Windows and Entry Doors in fire risk areas may have specific requirements to meet council consent. Conditions of development application MUST be checked prior to finalisation of selections.</p>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Checked:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][checked]" id="checked" value="checked"
                                                {{ isset($workData['windows_and_entry_doors']['checked']) && $workData['windows_and_entry_doors']['checked'] == 'checked' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="checked"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Checked By:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sow[windows_and_entry_doors][checked_by]" class="form-control"
                                            value="{{ $workData['windows_and_entry_doors']['checked_by'] ?? '' }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Bushfire Attack Level:</label>
                                    <div class="col-sm-9">
                                        <select name="sow[windows_and_entry_doors][bushfire_attack_level]" class="form-control">
                                            <option value="na" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == 'na') ? 'selected' : '' }}>NA</option>
                                            <option value="12.5" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == '12.5') ? 'selected' : '' }}>12.5</option>
                                            <option value="18" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == '18') ? 'selected' : '' }}>18</option>
                                            <option value="25" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == '25') ? 'selected' : '' }}>25</option>
                                            <option value="40" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == '40') ? 'selected' : '' }}>40</option>
                                            <option value="fz" {{ (isset($workData['windows_and_entry_doors']['bushfire_attack_level']) && $workData['windows_and_entry_doors']['bushfire_attack_level'] == 'fz') ? 'selected' : '' }}>FZ (as per AS3899-2009)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="garage_doors" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][garage_doors]" id="garage_doors"
                                        value="{{ $workData['site_work']['garage_doors'] ?? '' }}" placeholder="Enter garage doors notes">
                                </div>
                            </div>


                            <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                </div>
                            </div>
                            <table
                                style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                <tbody>
                                    <tr>
                                        <td
                                            colspan="3"
                                            style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                            9) ELECTRICIAN </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="card p-3 mb-3">

                                <h5>9.1 Power into property</h5>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property]" id="by_builder" value="by_builder"
                                                {{ isset($workData['sow']['electrician']['power_into_property']) && $workData['sow']['electrician']['power_into_property'] == 'by_builder' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="by_builder">By Builder</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property]" id="by_owner" value="by_owner"
                                                {{ isset($workData['sow']['electrician']['power_into_property']) && $workData['sow']['electrician']['power_into_property'] == 'by_owner' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="by_owner">By Owner</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property]" id="na" value="na"
                                                {{ isset($workData['sow']['electrician']['power_into_property']) && $workData['sow']['electrician']['power_into_property'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="na">N/A</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property_price]" id="fixed_10mtrs" value="fixed_10mtrs"
                                                {{ isset($workData['sow']['electrician']['power_into_property_price']) && $workData['sow']['electrician']['power_into_property_price'] == 'fixed_10mtrs' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fixed_10mtrs">If by builder: 1) Fixed price included in quote up to 10 mtr's</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property_price]" id="fixed_plan" value="fixed_plan"
                                                {{ isset($workData['sow']['electrician']['power_into_property_price']) && $workData['sow']['electrician']['power_into_property_price'] == 'fixed_plan' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fixed_plan">2) Fixed price included in quote as per plan's</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][power_into_property_price]" id="provisional_sum" value="provisional_sum"
                                                {{ isset($workData['sow']['electrician']['power_into_property_price']) && $workData['sow']['electrician']['power_into_property_price'] == 'provisional_sum' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="provisional_sum">Or 3) Provisional Sum</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <p>OWNER PAYING FOR POLE TO FRONT OF PROPERTY</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="power_into_property" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][power_into_property]" id="power_into_property"
                                        value="{{ isset($workData['sow']['site_work']['power_into_property']) ? $workData['sow']['site_work']['power_into_property'] : '' }}" placeholder="Enter power into property notes">
                                </div>

                            </div>

                            <div class="card p-3 mb-3">
                                <h5>9.2 Connection to Dwelling</h5>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Service provider connection fee:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][service_provider_fee]" id="provisional_sum_fee" value="provisional_sum"
                                                {{ isset($workData['sow']['electrician']['service_provider_fee']) && $workData['sow']['electrician']['service_provider_fee'] == 'provisional_sum' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="provisional_sum_fee">Provisional Sum</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][service_provider_fee]" id="fixed_builder" value="fixed_builder"
                                                {{ isset($workData['sow']['electrician']['service_provider_fee']) && $workData['sow']['electrician']['service_provider_fee'] == 'fixed_builder' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fixed_builder">Fixed price by builder</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][service_provider_fee]" id="by_owner_fee" value="by_owner"
                                                {{ isset($workData['sow']['electrician']['service_provider_fee']) && $workData['sow']['electrician']['service_provider_fee'] == 'by_owner' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="by_owner_fee">By owner</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Connection type:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][connection_type]" id="provisional_sum_type" value="provisional_sum"
                                                {{ isset($workData['sow']['electrician']['connection_type']) && $workData['sow']['electrician']['connection_type'] == 'provisional_sum' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="provisional_sum_type">Provisional Sum</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][connection_type]" id="fixed_builder_type" value="fixed_builder"
                                                {{ isset($workData['sow']['electrician']['connection_type']) && $workData['sow']['electrician']['connection_type'] == 'fixed_builder' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="fixed_builder_type">Fixed price by builder</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][underground]" id="underground" value="underground"
                                                {{ isset($workData['sow']['electrician']['underground']) && $workData['sow']['electrician']['underground'] == 'underground' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="underground">Underground</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][existing_sub_board]" id="existing_sub_board" value="existing_sub_board"
                                                {{ isset($workData['sow']['electrician']['existing_sub_board']) && $workData['sow']['electrician']['existing_sub_board'] == 'existing_sub_board' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="existing_sub_board">From existing sub board</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][existing_meter_box]" id="existing_meter_box" value="existing_meter_box"
                                                {{ isset($workData['sow']['electrician']['existing_meter_box']) && $workData['sow']['electrician']['existing_meter_box'] == 'existing_meter_box' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="existing_meter_box">From existing meter box</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][public_main_dwelling]" id="public_main_dwelling" value="public_main_dwelling"
                                                {{ isset($workData['sow']['electrician']['public_main_dwelling']) && $workData['sow']['electrician']['public_main_dwelling'] == 'public_main_dwelling' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="public_main_dwelling">Public main to dwelling</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][aerial]" id="aerial" value="aerial"
                                                {{ isset($workData['sow']['electrician']['aerial']) && $workData['sow']['electrician']['aerial'] == 'aerial' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="aerial">Aerial</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][existing_sub_board_pole]" id="existing_sub_board_pole" value="existing_sub_board_pole"
                                                {{ isset($workData['sow']['electrician']['existing_sub_board_pole']) && $workData['sow']['electrician']['existing_sub_board_pole'] == 'existing_sub_board_pole' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="existing_sub_board_pole">From existing sub board or meter box on pole</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][public_main_dwelling_aerial]" id="public_main_dwelling_aerial" value="public_main_dwelling_aerial"
                                                {{ isset($workData['sow']['electrician']['public_main_dwelling_aerial']) && $workData['sow']['electrician']['public_main_dwelling_aerial'] == 'public_main_dwelling_aerial' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="public_main_dwelling_aerial">Public main to dwelling</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][public_private_aerial]" id="public_private_aerial" value="public_private_aerial"
                                                {{ isset($workData['sow']['electrician']['public_private_aerial']) && $workData['sow']['electrician']['public_private_aerial'] == 'public_private_aerial' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="public_private_aerial">Public main to private pole/s then aerial to dwelling</label>
                                        </div>

                                        <div class="form-check ml-4">
                                            <input class="form-check-input" type="radio" name="sow[electrician][public_private_underground]" id="public_private_underground" value="public_private_underground"
                                                {{ isset($workData['sow']['electrician']['public_private_underground']) && $workData['sow']['electrician']['public_private_underground'] == 'public_private_underground' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="public_private_underground">Public main to private pole/s then underground to dwelling</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Metering:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][metering]" id="meter_box_pole" value="meter_box_pole"
                                                {{ (isset($workData['sow']['electrician']['metering']) && $workData['sow']['electrician']['metering'] === 'meter_box_pole') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meter_box_pole">Meter box on pole or other structure - sub board to dwelling</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][metering]" id="meter_box_dwelling" value="meter_box_dwelling"
                                                {{ (isset($workData['sow']['electrician']['metering']) && $workData['sow']['electrician']['metering'] === 'meter_box_dwelling') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meter_box_dwelling">Meter box to dwelling</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- Show preferred position on Electrical Plan of:</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][electrical_plan_position]" id="meter_box_sub_board" value="meter_box_sub_board"
                                                {{ (isset($workData['sow']['electrician']['electrical_plan_position']) && $workData['sow']['electrician']['electrical_plan_position'] === 'meter_box_sub_board') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="meter_box_sub_board">Meter box or sub board</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][electrical_plan_position]" id="aerial_point" value="aerial_point"
                                                {{ (isset($workData['sow']['electrician']['electrical_plan_position']) && $workData['sow']['electrician']['electrical_plan_position'] === 'aerial_point') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="aerial_point">Aerial point of attachment (if applicable)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][electrical_plan_position_checked]" id="checked" value="checked"
                                                {{ (isset($workData['sow']['electrician']['electrical_plan_position_checked']) && $workData['sow']['electrician']['electrical_plan_position_checked'] === 'checked') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="checked">Checked</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Notes to above:</label>
                                    <div class="col-sm-9">
                                        <p>
                                            Note1: Aerial consumer mains connection up to 10 Metres is standard and included. Underground mains connection & or distances over 10 Metres will be at an extra cost unless otherwise stated. A Provisional Sum if agreed will provide an allowance amount for the works. Cost of work over the allowance charged at cost plus margin on the sum over, or a credit given if within allowance.
                                        </p>
                                        <p>
                                            Note2: Power provider mains should be checked to ensure adequate supply is available to the dwelling. For example - Three phase power may be required for Air Conditioning, Rural Availability, and Transformer Availability & Size.
                                        </p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sow[electrician][provider_checked]" id="provider_checked" value="provider_checked"
                                                {{ (isset($workData['sow']['electrician']['provider_checked']) && $workData['sow']['electrician']['provider_checked'] === 'provider_checked') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="provider_checked">(Checked with Provider)</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="connection_to_dwelling" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][connection_to_dwelling]" id="connection_to_dwelling" placeholder="Enter connection to dwelling notes"
                                        value="{{ isset($workData['sow']['site_work']['connection_to_dwelling']) ? $workData['sow']['site_work']['connection_to_dwelling'] : '' }}">
                                </div>
                            </div>


                            <div class="card p-3 mb-3">
                                <h5>9.3 Electrical Wiring</h5>

                                <!-- Radio Buttons for Builder or Owner -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[electrician][by_builder]" id="by_builder" value="by_builder"
                                                {{ isset($workData['sow']['electrician']['by_builder']) && $workData['sow']['electrician']['by_builder'] == 'by_builder' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="by_builder">By Builder</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[electrician][by_builder]" id="by_owner" value="by_owner"
                                                {{ isset($workData['sow']['electrician']['by_builder']) && $workData['sow']['electrician']['by_builder'] == 'by_owner' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="by_owner">By Owner</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- If by builder: Fixed price included in quote -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">- If by builder: 1) Fixed price included in quote</label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="sow[electrician][fixed_price_quote]" id="fixed_price_quote" value="fixed_price_quote"
                                            {{ isset($workData['sow']['electrician']['fixed_price_quote']) && $workData['sow']['electrician']['fixed_price_quote'] == 'fixed_price_quote' ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SEE LAYOUTS</label>
                                    <div class="col-sm-9">
                                        <!-- Power Points Internal -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Power points internal</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][power_points_internal]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['power_points_internal'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Power Points External -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Power points External Weatherproof Qty</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][power_points_external]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['power_points_external'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Light Points Internal -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Light Points Internal</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][light_points_internal]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['light_points_internal'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Light Points External -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Light Points External</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][light_points_external]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['light_points_external'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- 2 Way Light Switches -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">2 Way Light Switches</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][light_switches_2way]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['light_switches_2way'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Ceiling Fans -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Ceiling Fans</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][ceiling_fans]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['ceiling_fans'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Exhaust Fans -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Exhaust Fans</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][exhaust_fans]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['exhaust_fans'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Phone Points -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Phone Points</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][phone_points]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['phone_points'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Television Points -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Television Points</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][television_points]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['television_points'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Internet Points -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Internet Points</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][internet_points]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['internet_points'] ?? '' }}">
                                            </div>
                                        </div>

                                        <!-- Smoke Detectors -->
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Smoke Detectors</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sow[electrician][smoke_detectors]" class="form-control" placeholder="Qty ="
                                                    value="{{ $workData['sow']['electrician']['smoke_detectors'] ?? '' }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <!-- As per electrical layout plans -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[electrician][electrical_layout_plans]" id="electrical_layout_plans" value="electrical_layout_plans"
                                                        {{ isset($workData['sow']['electrician']['electrical_layout_plans']) && $workData['sow']['electrician']['electrical_layout_plans'] == 'electrical_layout_plans' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="electrical_layout_plans">- As per electrical layout plans, completed & signed by owners</label>
                                                </div>

                                                <!-- As per kitchen manufacturers layout plan provided -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[electrician][kitchen_layout_plans]" id="kitchen_layout_plans" value="kitchen_layout_plans"
                                                        {{ isset($workData['sow']['electrician']['kitchen_layout_plans']) && $workData['sow']['electrician']['kitchen_layout_plans'] == 'kitchen_layout_plans' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="kitchen_layout_plans">- As per kitchen manufacturers layout plan provided</label>
                                                </div>

                                                <!-- As per plumbing & drainage layout plan -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[electrician][plumbing_layout_plans]" id="plumbing_layout_plans" value="plumbing_layout_plans"
                                                        {{ isset($workData['sow']['electrician']['plumbing_layout_plans']) && $workData['sow']['electrician']['plumbing_layout_plans'] == 'plumbing_layout_plans' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="plumbing_layout_plans">- As per plumbing & drainage layout plan (showing locations of hot water service, pumps etc)</label>
                                                </div>

                                                <!-- As per PC selections -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[electrician][pc_selections]" id="pc_selections" value="pc_selections"
                                                        {{ isset($workData['sow']['electrician']['pc_selections']) && $workData['sow']['electrician']['pc_selections'] == 'pc_selections' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="pc_selections">- As per PC selections</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-muted mb-3">
                                    <strong>Note 1:</strong> Unless otherwise specified herein all light fittings (with the exception of garage fluro lights) including ceiling fans are to be purchased by the owner and provided when requested by the electrician for installation. If not provided as requested batten holders only will be fitted.
                                </div>

                                <div class="text-muted mb-3">
                                    <strong>Note 2:</strong> Power supply to pumps and septic system is included up to a distance of 10 Metres. Distances over 10 Metres will be charged as an extra at cost plus builder's margin. Extra Standard Internal lights will be charged at $60.00 each, extra internal double power points will be charged at $60.00 each, and extra external power points will be charged at $100.00 each.
                                </div>

                                <div class="text-muted mb-3">
                                    <strong>Note 3:</strong> Appliances to be installed which may require special wiring (e.g., 15 amp outlets for dryers or pumps, Hot water services with twin elements or boosters for solar, and cooktops which require an extra phase) should have installation requirements attached from the manufacturer or list special requirements below
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sow[electrician][checked]" id="checked" value="checked"
                                            {{ isset($workData['sow']['electrician']['checked']) && $workData['sow']['electrician']['checked'] == 'checked' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="checked">(Checked)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Special requirements:</label>
                                    <textarea name="sow[electrician][special_requirements]" class="form-control">
                                    {{ isset($workData['sow']['electrician']['special_requirements']) ? $workData['sow']['electrician']['special_requirements'] : '' }}
                                    </textarea>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">- Power Supply to Waste Water System (Septic)</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="sow[electrician][power_supply_waste_water]" class="form-control mb-2" value="{{ isset($workData['sow']['electrician']['power_supply_waste_water']) ? $workData['sow']['electrician']['power_supply_waste_water'] : 'Position Shown on Plans' }}">
                                        <input type="text" name="sow[electrician][length_run_system]" class="form-control" value="{{ isset($workData['sow']['electrician']['length_run_system']) ? $workData['sow']['electrician']['length_run_system'] : 'Length of run to system (max 15m)' }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Optimum Air <br>See Quote <br>Air conditioning</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="sow[electrician][air_conditioning_type]" class="form-control mb-2" value="{{ isset($workData['sow']['electrician']['air_conditioning_type']) ? $workData['sow']['electrician']['air_conditioning_type'] : 'Type SPLIT SYSTEM' }}">
                                        <input type="text" name="sow[electrician][air_conditioning_supply]" class="form-control mb-2" value="{{ isset($workData['sow']['electrician']['air_conditioning_supply']) ? $workData['sow']['electrician']['air_conditioning_supply'] : 'Supply required' }}">
                                        <input type="text" name="sow[electrician][air_conditioning_position]" class="form-control" value="{{ isset($workData['sow']['electrician']['air_conditioning_position']) ? $workData['sow']['electrician']['air_conditioning_position'] : 'Position Shown on Electrical Plan' }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">- Indicate specific items on Plan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="sow[electrician][specific_items_plan]" class="form-control" value="{{ isset($workData['sow']['electrician']['specific_items_plan']) ? $workData['sow']['electrician']['specific_items_plan'] : 'Type & Supply required' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Other items</label>
                                    <input type="text" name="sow[electrician][other_items]" class="form-control" value="{{ isset($workData['sow']['electrician']['other_items']) ? $workData['sow']['electrician']['other_items'] : 'Positions shown on Electrical Plan' }}">
                                </div>

                                <div class="form-group">
                                    <label>- Light Switch's & Power Points</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[electrician][light_switch_type]" id="standard_white" value="standard_white"
                                            {{ isset($workData['sow']['electrician']['light_switch_type']) && $workData['sow']['electrician']['light_switch_type'] == 'standard_white' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="standard_white">Standard White</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sow[electrician][light_switch_type]" id="other" value="other"
                                            {{ isset($workData['sow']['electrician']['light_switch_type']) && $workData['sow']['electrician']['light_switch_type'] == 'other' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                    <input type="text" name="sow[electrician][light_switch_manufacturer]" class="form-control mb-2" value="{{ isset($workData['sow']['electrician']['light_switch_manufacturer']) ? $workData['sow']['electrician']['light_switch_manufacturer'] : '' }}" placeholder="Manufacturer:">
                                    <input type="text" name="sow[electrician][light_switch_type_text]" class="form-control mb-2" value="{{ isset($workData['sow']['electrician']['light_switch_type_text']) ? $workData['sow']['electrician']['light_switch_type_text'] : '' }}" placeholder="Type:">
                                    <input type="text" name="sow[electrician][light_switch_pn]" class="form-control" value="{{ isset($workData['sow']['electrician']['light_switch_pn']) ? $workData['sow']['electrician']['light_switch_pn'] : '' }}" placeholder="Style or P/N:">
                                </div>

                                <div class="text-muted mb-3">
                                    <strong>Note 4:</strong> Light Fittings other than standard batten holders are to be supplied by the owner prior to final fit out. The cost of assembly and fitting of lights and fans will be charged as an extra being cost plus builder's margin and GST.
                                </div>

                                <div class="text-muted mb-3">
                                    <strong>Note 5:</strong> No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder's margin and GST. This rate will be inclusive of both labour and equipment hire.
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- Label and Input -->
                                    <label for="electrical wiring" class="me-2 mb-0">Notes to above:</label>
                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                        name="sow[site_work][electrical_wiring]" id="electrical_wiring" placeholder="Enter electrical wiring notes"
                                        value="{{ isset($workData['sow']['site_work']['electrical_wiring']) ? $workData['sow']['site_work']['electrical_wiring'] : '' }}">
                                </div>
                            </div>


                            <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                </div>
                            </div>
                            <table
                                style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                <tbody>
                                    <tr>
                                        <td
                                            colspan="3"
                                            style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                            10) PLASTERER & INTERNAL LININGS
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="card p-3 mb-3">

                                <h5>10.1 Insulation</h5>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">- Standard R1.5 batts to external walls & R3.0 batts to ceilings (Incl. Garage)</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][standard_insulation]" id="standard_insulation" value="standard_insulation"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['standard_insulation']) && $workData['sow']['plasterer_and_internal_linings']['standard_insulation'] == 'standard_insulation' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="standard_insulation"></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][standard_insulation]" id="standard_insulation_na" value="na"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['standard_insulation']) && $workData['sow']['plasterer_and_internal_linings']['standard_insulation'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="standard_insulation_na">N/A</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">- Additional insulation noted on plan (eg. Sound proofing internal walls)</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][additional_insulation]" id="additional_insulation" value="additional_insulation"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['additional_insulation']) && $workData['sow']['plasterer_and_internal_linings']['additional_insulation'] == 'additional_insulation' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="additional_insulation"></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][additional_insulation]" id="additional_insulation_na" value="na"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['additional_insulation']) && $workData['sow']['plasterer_and_internal_linings']['additional_insulation'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="additional_insulation_na">N/A</label>
                                        </div>
                                        <input type="text" name="sow[plasterer_and_internal_linings][additional_insulation_type]" class="form-control"
                                            value="{{ isset($workData['sow']['plasterer_and_internal_linings']['additional_insulation_type']) ? $workData['sow']['plasterer_and_internal_linings']['additional_insulation_type'] : '' }}" placeholder="Type">
                                    </div>

                                    <div class="form-group">
                                        <label>Notes to above:</label>
                                        <textarea name="sow[plasterer_and_internal_linings][insulation_notes]" class="form-control">
                                        {{ isset($workData['sow']['plasterer_and_internal_linings']['insulation_notes']) ? $workData['sow']['plasterer_and_internal_linings']['insulation_notes'] : '' }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-3 mb-3">
                                <h5>10.2 Wall & Ceiling's</h5>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">- Standard plasterboard to walls and ceilings, and water resistant plasterboard as required to wet areas.</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][standard_plasterboard]" id="standard_plasterboard" value="standard_plasterboard"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['standard_plasterboard']) && $workData['sow']['plasterer_and_internal_linings']['standard_plasterboard'] == 'standard_plasterboard' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="standard_plasterboard"></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][standard_plasterboard]" id="standard_plasterboard_na" value="na"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['standard_plasterboard']) && $workData['sow']['plasterer_and_internal_linings']['standard_plasterboard'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="standard_plasterboard_na">N/A</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">- Other lining types noted on plan</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][other_lining_types]" id="other_lining_types" value="other_lining_types"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['other_lining_types']) && $workData['sow']['plasterer_and_internal_linings']['other_lining_types'] == 'other_lining_types' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other_lining_types"></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][other_lining_types]" id="other_lining_types_na" value="na"
                                                {{ isset($workData['sow']['plasterer_and_internal_linings']['other_lining_types']) && $workData['sow']['plasterer_and_internal_linings']['other_lining_types'] == 'na' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="other_lining_types_na">N/A</label>
                                        </div>
                                        <input type="text" name="sow[plasterer_and_internal_linings][other_lining_types_text]" class="form-control"
                                            value="{{ isset($workData['sow']['plasterer_and_internal_linings']['other_lining_types_text']) ? $workData['sow']['plasterer_and_internal_linings']['other_lining_types_text'] : '' }}"
                                            placeholder="Type">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Notes to above:</label>
                                    <textarea name="sow[plasterer_and_internal_linings][wall_ceiling_notes]" class="form-control">
                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['wall_ceiling_notes']) ? $workData['sow']['plasterer_and_internal_linings']['wall_ceiling_notes'] : '' }}
                                    </textarea>
                                </div>

                                <div class="card p-3 mb-3">
                                    <h5>10.3 Ceiling Cornice - (Wall to Ceiling Junction Finish)</h5>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Type:</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][ceiling_cornice_type]" id="standard_cove" value="standard_cove"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type']) && $workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type'] == 'standard_cove' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="standard_cove">Standard 90mm Cove</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][ceiling_cornice_type]" id="square_set" value="square_set"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type']) && $workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type'] == 'square_set' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="square_set">Square set</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][ceiling_cornice_type]" id="plaster_cornice" value="plaster_cornice"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type']) && $workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type'] == 'plaster_cornice' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="plaster_cornice">Plaster cornice</label>
                                            </div>
                                            <input type="text" name="sow[plasterer_and_internal_linings][ceiling_cornice_type_text]" class="form-control"
                                                value="{{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type_text']) ? $workData['sow']['plasterer_and_internal_linings']['ceiling_cornice_type_text'] : '' }}"
                                                placeholder="Type/s">
                                        </div>
                                    </div>
                                </div>


                                <div class="text-muted mt-3">
                                    Note: A combination of the above selections could apply in selected areas of the home. Where this is the case, it must be shown where non-standard 90 cove is required. Square setting may, in some situations (e.g., raked ceilings), be the required finish as cove or cornice cannot be installed satisfactorily.
                                </div>
                                <div class="form-group">
                                    <label>Notes to above:</label>
                                    <textarea name="sow[plasterer_and_internal_linings][wall_ceiling_notes]" class="form-control">
                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['wall_ceiling_notes']) ? $workData['sow']['plasterer_and_internal_linings']['wall_ceiling_notes'] : '' }}
                                    </textarea>
                                </div>

                                <div class="card p-3 mb-3">
                                    <h5>10.4 Plaster Features</h5>

                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">- Ceiling roses, Wall panels etc. Selections and locations shown on plans</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][ceiling_roses]" id="ceiling_roses" value="ceiling_roses"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_roses']) && $workData['sow']['plasterer_and_internal_linings']['ceiling_roses'] == 'ceiling_roses' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="ceiling_roses">Per Plans & Specifications</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][ceiling_roses]" id="ceiling_roses_na" value="na"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['ceiling_roses']) && $workData['sow']['plasterer_and_internal_linings']['ceiling_roses'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="ceiling_roses_na">N/A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">- Wall cut outs - position/s & size/s shown on plans</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][wall_cut_outs]" id="wall_cut_outs" value="wall_cut_outs"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['wall_cut_outs']) && $workData['sow']['plasterer_and_internal_linings']['wall_cut_outs'] == 'wall_cut_outs' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="wall_cut_outs"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][wall_cut_outs]" id="wall_cut_outs_na" value="na"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['wall_cut_outs']) && $workData['sow']['plasterer_and_internal_linings']['wall_cut_outs'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="wall_cut_outs_na">N/A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">- Arch's - position/s & type/s (i.e. square or curved) shown on plans</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][archs]" id="archs" value="archs"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['archs']) && $workData['sow']['plasterer_and_internal_linings']['archs'] == 'archs' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="archs"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][archs]" id="archs_na" value="na"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['archs']) && $workData['sow']['plasterer_and_internal_linings']['archs'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="archs_na">N/A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">- Vaulted or coffered ceilings - position/s shown on plans</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][vaulted_ceilings]" id="vaulted_ceilings" value="vaulted_ceilings"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['vaulted_ceilings']) && $workData['sow']['plasterer_and_internal_linings']['vaulted_ceilings'] == 'vaulted_ceilings' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="vaulted_ceilings"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][vaulted_ceilings]" id="vaulted_ceilings_na" value="na"
                                                    {{ isset($workData['sow']['plasterer_and_internal_linings']['vaulted_ceilings']) && $workData['sow']['plasterer_and_internal_linings']['vaulted_ceilings'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="vaulted_ceilings_na">N/A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Notes to above:</label>
                                        <textarea name="sow[plasterer_and_internal_linings][notes_above_features]" class="form-control">
                                        {{ isset($workData['sow']['plasterer_and_internal_linings']['notes_above_features']) ? $workData['sow']['plasterer_and_internal_linings']['notes_above_features'] : '' }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="card p-3 mb-3">
                                    <h5>10.5 Plaster Bulk Heads</h5>

                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">- Bulk Heads - position/s shown on plans</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][bulk_heads]" id="bulk_heads" value="bulk_heads" {{ isset($workData['plasterer_and_internal_linings']['bulk_heads']) && $workData['plasterer_and_internal_linings']['bulk_heads'] == 'bulk_heads' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulk_heads"></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[plasterer_and_internal_linings][bulk_heads]" id="bulk_heads_na" value="na" {{ isset($workData['plasterer_and_internal_linings']['bulk_heads']) && $workData['plasterer_and_internal_linings']['bulk_heads'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulk_heads_na">N/A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Notes to above:</label>
                                        <textarea name="sow[plasterer_and_internal_linings][notes_above_bulk_heads]" class="form-control">{{ isset($workData['plasterer_and_internal_linings']['notes_above_bulk_heads']) ? $workData['plasterer_and_internal_linings']['notes_above_bulk_heads'] : 'BULKHEADS TO KITCHENS' }}</textarea>
                                    </div>

                                    <div class="text-muted mt-3">
                                        Note: Bulkheads in 2 storey construction are sometimes required for 1st floor drainage installation. Location and size will generally be discussed on-site during construction.
                                    </div>
                                </div>


                                <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                    <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                    </div>
                                </div>
                                <table
                                    style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                    <tbody>
                                        <tr>
                                            <td
                                                colspan="3"
                                                style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                                11) RADIO & JOINERY
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                                <div class="card p-3 mb-3">
                                    <h5>11.1 Radio</h5>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][radio_fixed_price]" id="radio_fixed_price" value="fixed"
                                                    {{ isset($workData['sow']['radio_and_joinery']['radio_fixed_price']) && $workData['sow']['radio_and_joinery']['radio_fixed_price'] == 'fixed' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio_fixed_price">If by builder: 1) Fixed price included in quote</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][radio_fixed_price]" id="radio_provisional_sum" value="provisional"
                                                    {{ isset($workData['sow']['radio_and_joinery']['radio_fixed_price']) && $workData['sow']['radio_and_joinery']['radio_fixed_price'] == 'provisional' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio_provisional_sum">Or 2) Provisional Sum</label>
                                            </div>
                                            <img src="https://via.placeholder.com/150x30?text=Amount+to+be+shown+at+Section+16+'Schedule+of+Provisional+Sums'" alt="Provisional Sum Note">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Radio Manufacturer:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sow[radio_and_joinery][radio_manufacturer]" class="form-control"
                                                value="{{ isset($workData['sow']['radio_and_joinery']['radio_manufacturer']) ? $workData['sow']['radio_and_joinery']['radio_manufacturer'] : 'PRESTIGE' }}">
                                            <small class="form-text text-muted">Manufacturer's Name</small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Radio Layout Plan Attached:</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][radio_layout_plan]" id="radio_layout_yes" value="yes"
                                                    {{ isset($workData['sow']['radio_and_joinery']['radio_layout_plan']) && $workData['sow']['radio_and_joinery']['radio_layout_plan'] == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio_layout_yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][radio_layout_plan]" id="radio_layout_no" value="no"
                                                    {{ isset($workData['sow']['radio_and_joinery']['radio_layout_plan']) && $workData['sow']['radio_and_joinery']['radio_layout_plan'] == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio_layout_no">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Appliances: Note: See "PC Selections" section</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][appliances_supply_fit]" id="appliances_supply_fit" value="supply_fit"
                                                    {{ isset($workData['sow']['radio_and_joinery']['appliances_supply_fit']) && $workData['sow']['radio_and_joinery']['appliances_supply_fit'] == 'supply_fit' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="appliances_supply_fit">Supply & fit by radio manufacturer</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Sink supply:</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][sink_supply_only]" id="sink_supply_only" value="supply_only"
                                                    {{ isset($workData['sow']['radio_and_joinery']['sink_supply_only']) && $workData['sow']['radio_and_joinery']['sink_supply_only'] == 'supply_only' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="sink_supply_only">Supply only by builder</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][sink_by_others]" id="sink_by_others" value="by_others"
                                                    {{ isset($workData['sow']['radio_and_joinery']['sink_by_others']) && $workData['sow']['radio_and_joinery']['sink_by_others'] == 'by_others' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="sink_by_others">By others:</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Range hood installation:</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][range_hood_builder]" id="range_hood_builder" value="by_builder"
                                                    {{ isset($workData['sow']['radio_and_joinery']['range_hood_builder']) && $workData['sow']['radio_and_joinery']['range_hood_builder'] == 'by_builder' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="range_hood_builder">By builder</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][range_hood_recirculated]" id="range_hood_recirculated" value="recirculated"
                                                    {{ isset($workData['sow']['radio_and_joinery']['range_hood_recirculated']) && $workData['sow']['radio_and_joinery']['range_hood_recirculated'] == 'recirculated' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="range_hood_recirculated">Re-circulated into room</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][range_hood_vented]" id="range_hood_vented" value="vented"
                                                    {{ isset($workData['sow']['radio_and_joinery']['range_hood_vented']) && $workData['sow']['radio_and_joinery']['range_hood_vented'] == 'vented' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="range_hood_vented">Vented to atmosphere</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">- Bulkheads to overhead cupboards required:</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][bulkheads_required]" id="bulkheads_required_yes" value="yes"
                                                    {{ isset($workData['sow']['radio_and_joinery']['bulkheads_required']) && $workData['sow']['radio_and_joinery']['bulkheads_required'] == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulkheads_required_yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][bulkheads_required]" id="bulkheads_required_or" value="or"
                                                    {{ isset($workData['sow']['radio_and_joinery']['bulkheads_required']) && $workData['sow']['radio_and_joinery']['bulkheads_required'] == 'or' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulkheads_required_or">OR</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][bulkheads_required]" id="bulkheads_required_na" value="na"
                                                    {{ isset($workData['sow']['radio_and_joinery']['bulkheads_required']) && $workData['sow']['radio_and_joinery']['bulkheads_required'] == 'na' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulkheads_required_na">N/A</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][bulkheads_by]" id="bulkheads_by_plasterer" value="plasterer"
                                                    {{ isset($workData['sow']['radio_and_joinery']['bulkheads_by']) && $workData['sow']['radio_and_joinery']['bulkheads_by'] == 'plasterer' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulkheads_by_plasterer">By plasterer</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][bulkheads_by]" id="bulkheads_by_radio" value="radio"
                                                    {{ isset($workData['sow']['radio_and_joinery']['bulkheads_by']) && $workData['sow']['radio_and_joinery']['bulkheads_by'] == 'radio' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bulkheads_by_radio">By radio manufacturer</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Notes to above:</label>
                                        <textarea name="sow[radio_and_joinery][radio_notes]" class="form-control">{{ isset($workData['sow']['radio_and_joinery']['radio_notes']) ? $workData['sow']['radio_and_joinery']['radio_notes'] : 'UNIT ONE BEIGE TONES UNIT TWO BLACK WHITE' }}</textarea>
                                    </div>



                                    <div class="card p-3 mb-3">
                                        <h5>11.2 Vanity Units</h5>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][vanity_pc_selections]" id="vanity_pc_selections" value="pc_selections"
                                                        {{ isset($workData['radio_and_joinery']['vanity_pc_selections']) && $workData['radio_and_joinery']['vanity_pc_selections'] == 'pc_selections' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="vanity_pc_selections">Per PC Selections</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][vanity_by_owner]" id="vanity_by_owner" value="by_owner"
                                                        {{ isset($workData['radio_and_joinery']['vanity_by_owner']) && $workData['radio_and_joinery']['vanity_by_owner'] == 'by_owner' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="vanity_by_owner">By Owner</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">- Vanity Supply:</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][vanity_supply]" id="standard_vanity" value="standard"
                                                        {{ isset($workData['radio_and_joinery']['vanity_supply']) && $workData['radio_and_joinery']['vanity_supply'] == 'standard' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="standard_vanity">Standard vanity units selected from retail supplier (See PC Selections)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][vanity_supply]" id="custom_vanity" value="custom"
                                                        {{ isset($workData['radio_and_joinery']['vanity_supply']) && $workData['radio_and_joinery']['vanity_supply'] == 'custom' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="custom_vanity">Custom made vanity/s by radio manufacturer</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="vanity_units" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][vanity_units]" id="vanity_units" placeholder="Enter vanity units notes"
                                                value="{{ isset($workData['site_work']['vanity_units']) ? $workData['site_work']['vanity_units'] : '' }}">
                                        </div>
                                    </div>

                                    <div class="card p-3 mb-3">
                                        <h5>11.3 Laundry Tub/Units</h5>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][laundry_pc_selections]" id="laundry_pc_selections" value="pc_selections"
                                                        {{ isset($workData['radio_and_joinery']['laundry_pc_selections']) && $workData['radio_and_joinery']['laundry_pc_selections'] == 'pc_selections' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="laundry_pc_selections">Per PC Selections</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][laundry_by_owner]" id="laundry_by_owner" value="by_owner"
                                                        {{ isset($workData['radio_and_joinery']['laundry_by_owner']) && $workData['radio_and_joinery']['laundry_by_owner'] == 'by_owner' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="laundry_by_owner">By Owner</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">- Tub Supply:</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][tub_supply_builder]" id="tub_supply_builder" value="builder"
                                                        {{ isset($workData['radio_and_joinery']['tub_supply_builder']) && $workData['radio_and_joinery']['tub_supply_builder'] == 'builder' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tub_supply_builder">Tub supply only by Builder (See PC Selections)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][tub_supply_custom]" id="tub_supply_custom" value="custom"
                                                        {{ isset($workData['radio_and_joinery']['tub_supply_custom']) && $workData['radio_and_joinery']['tub_supply_custom'] == 'custom' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tub_supply_custom">Custom made unit by radio manufacturer</label>
                                                </div>
                                                <div class="form-check">
                                                    <label>
                                                        Amount to be shown at Section 16 "Schedule of Provisional Sums"
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="laundry_tub" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][laundry_tub]" id="laundry_tub" placeholder="Enter laundry tub/units notes"
                                                value="{{ isset($workData['site_work']['laundry_tub']) ? $workData['site_work']['laundry_tub'] : '' }}">
                                        </div>
                                    </div>


                                    <div class="card p-3 mb-3">
                                        <h5>11.4 Shelving</h5>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][shelving_additional]" id="shelving_additional" value="additional"
                                                        {{ isset($workData['radio_and_joinery']['shelving_additional']) && $workData['radio_and_joinery']['shelving_additional'] == 'additional' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="shelving_additional">Additional Non Standard</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][shelving_na]" id="shelving_na" value="na"
                                                        {{ isset($workData['radio_and_joinery']['shelving_na']) && $workData['radio_and_joinery']['shelving_na'] == 'na' ? 'checked' : '' }} checked>
                                                    <label class="form-check-label" for="shelving_na">N/A</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Shelving Manufacturer:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="shelving_manufacturer" class="form-control"
                                                    value="{{ isset($workData['shelving_manufacturer']) ? $workData['shelving_manufacturer'] : '' }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Non standard shelving by others shown on plan:</label>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][shelving_by_others]" id="shelving_by_others_yes" value="yes"
                                                        {{ isset($workData['radio_and_joinery']['shelving_by_others']) && $workData['radio_and_joinery']['shelving_by_others'] == 'yes' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="shelving_by_others_yes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][shelving_by_others]" id="shelving_by_others_no" value="no"
                                                        {{ isset($workData['radio_and_joinery']['shelving_by_others']) && $workData['radio_and_joinery']['shelving_by_others'] == 'no' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="shelving_by_others_no">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="shelving" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][shelving]" id="shelving" placeholder="Enter shelving notes"
                                                value="{{ isset($workData['site_work']['shelving']) ? $workData['site_work']['shelving'] : '' }}">
                                        </div>
                                    </div>


                                    <div class="card p-3 mb-3">
                                        <h5>11.5 Staircases & Balustrades (Internal)</h5>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][staircase_selections]" id="staircase_selections" value="selections"
                                                        {{ isset($workData['radio_and_joinery']['staircase_selections']) && $workData['radio_and_joinery']['staircase_selections'] == 'selections' ? 'checked' : '' }} checked>
                                                    <label class="form-check-label" for="staircase_selections">Per Selections & Plans</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][staircase_na]" id="staircase_na" value="na"
                                                        {{ isset($workData['radio_and_joinery']['staircase_na']) && $workData['radio_and_joinery']['staircase_na'] == 'na' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="staircase_na">N/A</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="font-weight-bold mb-2">Staircase</div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][staircase_fixed_price]" id="staircase_fixed_price" value="fixed_price"
                                                        {{ isset($workData['radio_and_joinery']['staircase_fixed_price']) && $workData['radio_and_joinery']['staircase_fixed_price'] == 'fixed_price' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="staircase_fixed_price">Fixed Price included in Quote</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Manufacturer's Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sow[radio_and_joinery][staircase_manufacturer]" class="form-control"
                                                    value="{{ isset($workData['radio_and_joinery']['staircase_manufacturer']) ? $workData['radio_and_joinery']['staircase_manufacturer'] : '' }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>
                                                    Amount to be shown at Section 16 "Schedule of Provisional Sums"
                                                </label>
                                            </div>
                                        </div>

                                        <div class="font-weight-bold mb-2">Balustrade</div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sow[radio_and_joinery][balustrade_fixed_price]" id="balustrade_fixed_price" value="fixed_price"
                                                        {{ isset($workData['radio_and_joinery']['balustrade_fixed_price']) && $workData['radio_and_joinery']['balustrade_fixed_price'] == 'fixed_price' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="balustrade_fixed_price">Fixed Price included in Quote</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Manufacturer's Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="sow[radio_and_joinery][balustrade_manufacturer]" class="form-control"
                                                    value="{{ isset($workData['radio_and_joinery']['balustrade_manufacturer']) ? $workData['radio_and_joinery']['balustrade_manufacturer'] : '' }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>
                                                    Amount to be shown at Section 16 "Schedule of Provisional Sums"
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Notes to above:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][special_fixing_checked]" id="special_fixing_checked" value="checked"
                                                    {{ isset($workData['radio_and_joinery']['special_fixing_checked']) && $workData['radio_and_joinery']['special_fixing_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="special_fixing_checked">
                                                    <strong>Note 1:</strong> Special fixing points or blocking may be required. This should be checked with the manufacturer before wall and ceiling linings are installed.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[radio_and_joinery][beading_trimming_checked]" id="beading_trimming_checked" value="checked"
                                                    {{ isset($workData['radio_and_joinery']['beading_trimming_checked']) && $workData['radio_and_joinery']['beading_trimming_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="beading_trimming_checked">
                                                    <strong>Note 2:</strong> Beadings and trimming off, if required, will be charged as an extra. (Staircase supplier/installer should generally supply and install all necessary moldings required to trim off the staircase to linings).
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="staircases_balustrades" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][staircases_balustrades]" id="staircases_balustrades" placeholder="Enter Staircases & Balustrades (Internal) notes"
                                                value="{{ isset($workData['site_work']['staircases_balustrades']) ? $workData['site_work']['staircases_balustrades'] : '' }}">
                                        </div>
                                    </div>


                                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                        </div>
                                    </div>
                                    <table
                                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                        <tbody>
                                            <tr>
                                                <td
                                                    colspan="3"
                                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                                    12) WALL & FLOOR TILER
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <div class="card p-3 mb-3">
                                        <h4>12) WALL & FLOOR TILER</h4>

                                        <h5>12.1 Wall & Floor Tiling Notes</h5>

                                        <div class="font-weight-bold mb-2">Floor Tiling</div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][floor_tiling_note_1_checked]" id="floor_tiling_note_1_checked" value="checked"
                                                    {{ isset($workData['sow']['wall_and_floor_tiling_notes']['floor_tiling_note_1_checked']) && $workData['sow']['wall_and_floor_tiling_notes']['floor_tiling_note_1_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="floor_tiling_note_1_checked">
                                                    <strong>Note 1:</strong> As shown on plans (Standard locations are wet area floors eg bathrooms, ensuite, laundry and WC). Other areas (not std. wet area's) should be clearly marked on plans or noted.
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][floor_tiling_note_2_checked]" id="floor_tiling_note_2_checked" value="checked"
                                                    {{ isset($workData['sow']['wall_and_floor_tiling_notes']['floor_tiling_note_2_checked']) && $workData['sow']['wall_and_floor_tiling_notes']['floor_tiling_note_2_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="floor_tiling_note_2_checked">
                                                    <strong>Note 2:</strong> All tiles are as per selections made and per detail quote provided by the tile retailer and signed as accepted by the owner. The quote must clearly state which tile is chosen for each area, including any feature tiles.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p>
                                                <strong>Note 3:</strong> Cost to lay in quotation includes tiles at a minimum size of 150x150 and a maximum of 300x300 & standard mosaic sheet tiles, laid in a square pattern. Other greater or smaller tile sizes and patterns and features will be charged as an extra to lay. The PC allowance for supply is $35 inc. GST per metre square. Grouting to floors is standard sand/cement based, coloured grout will be charged as an extra.
                                            </p>
                                        </div>

                                        <div class="font-weight-bold mb-2">Wall Tiling</div>

                                        <div class="form-group">
                                            <p>
                                                <strong>Note 1:</strong> Generally laid in wet areas and kitchen splashbacks (includes skirting tiles).
                                            </p>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wall_tiling_note_2_checked]" id="wall_tiling_note_2_checked" value="checked"
                                                    {{ isset($workData['sow']['wall_and_floor_tiling_notes']['wall_tiling_note_2_checked']) && $workData['sow']['wall_and_floor_tiling_notes']['wall_tiling_note_2_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="wall_tiling_note_2_checked">
                                                    <strong>Note 2:</strong> All tiles are as per selections made and per detail quote provided by the tile retailer and signed as accepted by the owner. The quote must clearly state which tile is chosen for each area, including any feature tiles.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p>
                                                <strong>Note 3:</strong> Cost to fix walls in quotation includes tiles at a minimum size of 150x150 or 200x100 and a maximum of 450x250 fixed in a square pattern. Other greater or smaller tile sizes and patterns and features will be charged as an extra to fix. The PC allowance for supply is $35 inc GST per metre square. Grouting to walls is a standard white grout, coloured grout will be charged as an extra.
                                            </p>
                                        </div>

                                        <div class="font-weight-bold mb-2">Steps to Spa Baths</div>

                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">N/A</label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][steps_spa_note_1_checked]" id="steps_spa_note_1_checked" value="checked"
                                                    {{ isset($workData['sow']['wall_and_floor_tiling_notes']['steps_spa_note_1_checked']) && $workData['sow']['wall_and_floor_tiling_notes']['steps_spa_note_1_checked'] == 'checked' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="steps_spa_note_1_checked">
                                                    <strong>Note 1:</strong> Clearly mark location of step / s on floor plan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p>
                                                <strong>Note 2:</strong> Discuss any special requirements directly with tiling sub-contractor and/or note details at section 12.11 "Special Wall & Floor Tiler Instructions"
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="wall_floor_tilings" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][wall_floor_tiling]" id="wall_floor_tiling" placeholder="Enter wall & floor tiling notes"
                                                value="{{ isset($workData['sow']['site_work']['wall_floor_tiling']) ? $workData['sow']['site_work']['wall_floor_tiling'] : '' }}">
                                        </div>

                                        <div class="card p-3 mb-3">
                                            <h5>12.2 Laundry</h5>

                                            <div class="font-weight-bold mb-2">Floor</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    @php
                                                    $laying = isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_floor_laying']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_floor_laying'] : '';
                                                    @endphp
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_floor_laying]" id="laundry_floor_lay_standard" value="standard"
                                                            {{ $laying == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_floor_laying]" id="laundry_floor_lay_diagonal" value="diagonal"
                                                            {{ $laying == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_floor_laying]" id="laundry_floor_features" value="features"
                                                            {{ $laying == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                    <div class="text-muted">UNIT I SAMETILE AS MAIN FLOOR</div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Waste:</label>
                                                <div class="col-sm-9">
                                                    @php
                                                    $waste = isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_floor_waste']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_floor_waste'] : '';
                                                    $grate = isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_grate_type']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_grate_type'] : '';
                                                    @endphp
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_floor_waste]" id="laundry_floor_waste_graded" value="graded"
                                                            {{ $waste == 'graded' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_floor_waste_graded">Floor graded to outside</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_floor_waste]" id="laundry_floor_waste_dry" value="dry"
                                                            {{ $waste == 'dry' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_floor_waste_dry">Floor waste (dry) T / SCREV</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_grate_type]" id="laundry_grate_stainless" value="stainless"
                                                            {{ $grate == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_grate_type]" id="laundry_grate_chrome" value="chrome"
                                                            {{ $grate == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_grate_type]" id="laundry_grate_brass" value="brass"
                                                            {{ $grate == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_grate_type]" id="laundry_grate_other" value="other"
                                                            {{ $grate == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_grate_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Wall</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    @php
                                                    $wall = isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_laying']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_laying'] : '';
                                                    @endphp
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_wall_laying]" id="laundry_wall_lay_standard" value="standard"
                                                            {{ $wall == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_wall_lay_standard">Laid standard (Single tile skirting & splash back over laundry tub) TO BOTH UNITS</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][laundry_wall_laying]" id="laundry_wall_lay_non_standard" value="non_standard"
                                                            {{ $wall == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="laundry_wall_lay_non_standard">Non standard (eg Wall Tiles to 1200mm High etc)</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][laundry_wall_requirements]" class="form-control mt-2" placeholder="Requirements"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_requirements']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_requirements'] : '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][laundry_wall_height]" class="form-control mt-2" placeholder="Height"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_height']) ? $workData['sow']['wall_and_floor_tiling_notes']['laundry_wall_height'] : '' }}">
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <label for="laundry" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][laundry]" id="laundry" placeholder="Enter laundry notes"
                                                    value="{{ isset($workData['sow']['site_work']['laundry']) ? $workData['sow']['site_work']['laundry'] : '' }}">
                                            </div>
                                        </div>


                                        <div class="card p-3 mb-3">
                                            <h5>12.3 Bathroom</h5>

                                            <div class="font-weight-bold mb-2">Floor</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_floor_laying]" id="bathroom_floor_lay_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_floor_laying]" id="bathroom_floor_lay_diagonal" value="diagonal"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying'] == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_floor_laying]" id="bathroom_floor_features" value="features"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_floor_laying'] == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Shower hob:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_shower_hob]" id="bathroom_shower_hob_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_shower_hob']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_shower_hob'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_shower_hob_standard">Standard (no hob)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_shower_hob]" id="bathroom_shower_hob_brick" value="brick"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_shower_hob']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_shower_hob'] == 'brick' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_shower_hob_brick">Brick hob</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Floor grate / s</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_stainless" value="stainless"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_chrome" value="chrome"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_brass" value="brass"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_other" value="other"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">FLOOR</div>

                                            <div class="font-weight-bold mb-2">Wall</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_wall_laying]"
                                                            id="ensuite_wall_lay_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_wall_lay_standard">Laid standard
                                                            <span class="text-muted">(Tiles 600mm above bath including return end/s and bath raiser tiles to brickwork or block work. Shower recess to 1800mm minimum. Single tile splash back to vanity and the remainder of walls single skirting tile.)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_wall_laying]"
                                                            id="ensuite_wall_lay_non_standard" value="non_standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_laying'] == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_wall_lay_non_standard">Non standard (eg Wall Tiles to 1200mm High etc)</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite_wall_requirements]"
                                                        class="form-control mt-2"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_requirements']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_requirements'] : '' }}"
                                                        placeholder="Requirements SEE LAYOUTS & JACOBA QUOTES">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite_wall_height]"
                                                        class="form-control mt-2"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_height']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite_wall_height'] : '' }}"
                                                        placeholder="Height">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Feature Tiling:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_feature_tiling]"
                                                            id="ensuite_feature_capping" value="capping"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling'] == 'capping' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_feature_capping">Capping tile</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_feature_tiling]"
                                                            id="ensuite_feature_border" value="border"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling'] == 'border' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_feature_border">Border feature</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_feature_tiling]"
                                                            id="ensuite_feature_individual" value="individual"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_tiling'] == 'individual' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_feature_individual">Individual feature tiles</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite_feature_position]"
                                                        class="form-control mt-2"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_position']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_position'] : '' }}"
                                                        placeholder="Position SEE LAYOUTS & JACOBA QUOTES">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite_feature_requirements]"
                                                        class="form-control mt-2"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_requirements']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite_feature_requirements'] : '' }}"
                                                        placeholder="Requirements">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Ceramic Fittings:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_soap]"
                                                            id="ensuite_ceramic_soap" value="soap"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_soap']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_soap'] == 'soap' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_soap">Ceramic soap holders</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_soap_na]"
                                                            id="ensuite_ceramic_soap_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_soap_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_soap_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_soap_na">N / A</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_towel]"
                                                            id="ensuite_ceramic_towel" value="towel"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_towel']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_towel'] == 'towel' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_towel">Ceramic towel rails</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_towel_na]"
                                                            id="ensuite_ceramic_towel_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_towel_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_towel_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_towel_na">N / A</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_toilet_roll]"
                                                            id="ensuite_ceramic_toilet_roll" value="toilet_roll"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_toilet_roll']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_toilet_roll'] == 'toilet_roll' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_toilet_roll">Ceramic toilet roll</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_ceramic_toilet_roll_na]"
                                                            id="ensuite_ceramic_toilet_roll_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_toilet_roll_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_ceramic_toilet_roll_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_ceramic_toilet_roll_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="text-muted mt-2">
                                                <strong>Note:</strong> Ceramic towel rails and toilet roll holders generally require walls tiled to at least 1 metre in height. Ceramic fittings for tiler are required for fitting during wall tiling process. Owner to mark position on plan or discuss placement with the tiler or supervisor. Non ceramic fittings can be installed after tiling is completed.
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <!-- Label and Input -->
                                                <label for="bathroom" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][bathroom]" id="bathroom"
                                                    value="{{ isset($workData['sow']['site_work']['bathroom']) ? $workData['sow']['site_work']['bathroom'] : '' }}"
                                                    placeholder="Enter bathroom notes">
                                            </div>
                                        </div>



                                        <div class="card p-3 mb-3">
                                            <h5>12.4 Ensuite</h5>
                                            <!-- Ensuite Required Section -->
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_required]" id="ensuite_required" value="required"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_required']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_required'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_required">Required</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_na]" id="ensuite_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Floor Section -->
                                            <div class="font-weight-bold mb-2">Floor</div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_floor_laying]" id="ensuite_floor_lay_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_floor_laying]" id="ensuite_floor_lay_diagonal" value="diagonal"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying'] == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite_floor_laying]" id="ensuite_floor_features" value="features"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite_floor_laying'] == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Shower Hob Section -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Shower hob:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_shower_hob]" id="bathroom_shower_hob_standard" value="standard" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_shower_hob']) && $workData['wall_and_floor_tiling_notes']['bathroom_shower_hob'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_shower_hob_standard">Standard (no hob)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_shower_hob]" id="bathroom_shower_hob_brick" value="brick" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_shower_hob']) && $workData['wall_and_floor_tiling_notes']['bathroom_shower_hob'] == 'brick' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_shower_hob_brick">Brick hob</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Optional Notes Section -->
                                            <div class="d-flex align-items-center">
                                                <label for="ensuite_notes" class="me-2 mb-0">Additional Notes:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][ensuite_notes]" id="ensuite_notes" placeholder="Enter additional ensuite notes" value="{{ old('sow.site_work.ensuite_notes') }}">
                                            </div>
                                            <!-- Floor Grate/s Section -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Floor grate/s</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_stainless" value="stainless" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_chrome" value="chrome" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_brass" value="brass" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_grate_type]" id="bathroom_grate_other" value="other" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_grate_type']) && $workData['wall_and_floor_tiling_notes']['bathroom_grate_type'] == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_grate_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Wall Laying Section -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_wall_laying]" id="bathroom_wall_lay_standard" value="standard" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_wall_laying']) && $workData['wall_and_floor_tiling_notes']['bathroom_wall_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_wall_lay_standard">Laid standard <span class="text-muted">(Tiles 600mm above bath (if applicable) including return end/s and bath raiser tiles to brickwork or block work. Shower recess to 1800mm minimum. Single tile splash back to vanity and the remainder of walls single skirting tile.)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_wall_laying]" id="bathroom_wall_lay_non_standard" value="non_standard" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_wall_laying']) && $workData['wall_and_floor_tiling_notes']['bathroom_wall_laying'] == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_wall_lay_non_standard">Non standard (eg Wall Tiles to 1200mm High etc)</label>
                                                    </div>

                                                    <!-- Input Fields for Wall Requirements and Height -->
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][bathroom_wall_requirements]" class="form-control mt-2" placeholder="Requirements SEE LAYOUTS & JACOBA QUOTES" value="{{ isset($workData['wall_and_floor_tiling_notes']['bathroom_wall_requirements']) ? $workData['wall_and_floor_tiling_notes']['bathroom_wall_requirements'] : '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][bathroom_wall_height]" class="form-control mt-2" placeholder="Height" value="{{ isset($workData['wall_and_floor_tiling_notes']['bathroom_wall_height']) ? $workData['wall_and_floor_tiling_notes']['bathroom_wall_height'] : '' }}">
                                                </div>
                                            </div>

                                            <!-- Feature Tiling Section -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Feature Tiling:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_feature_tiling]" id="bathroom_feature_capping" value="capping" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling']) && $workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling'] == 'capping' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_feature_capping">Capping tile</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_feature_tiling]" id="bathroom_feature_border" value="border" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling']) && $workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling'] == 'border' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_feature_border">Border feature</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_feature_tiling]" id="bathroom_feature_individual" value="individual" {{ isset($workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling']) && $workData['wall_and_floor_tiling_notes']['bathroom_feature_tiling'] == 'individual' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_feature_individual">Individual feature tiles</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][bathroom_feature_position]" class="form-control mt-2" placeholder="Position" value="{{ isset($workData['wall_and_floor_tiling_notes']['bathroom_feature_position']) ? $workData['wall_and_floor_tiling_notes']['bathroom_feature_position'] : '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][bathroom_feature_requirements]" class="form-control mt-2" placeholder="Requirements" value="{{ isset($workData['wall_and_floor_tiling_notes']['bathroom_feature_requirements']) ? $workData['wall_and_floor_tiling_notes']['bathroom_feature_requirements'] : '' }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Fittings:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_soap]" id="bathroom_ceramic_soap" value="soap"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_soap']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_soap'] == 'soap' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_soap">Ceramic soap holders</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_soap_na]" id="bathroom_ceramic_soap_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_soap_na']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_soap_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_soap_na">N / A</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_towel]" id="bathroom_ceramic_towel" value="towel"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_towel']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_towel'] == 'towel' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_towel">Ceramic towel rails</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_towel_na]" id="bathroom_ceramic_towel_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_towel_na']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_towel_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_towel_na">N / A</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_toilet_roll]" id="bathroom_ceramic_toilet_roll" value="toilet_roll"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_toilet_roll']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_toilet_roll'] == 'toilet_roll' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_toilet_roll">Ceramic toilet roll</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][bathroom_ceramic_toilet_roll_na]" id="bathroom_ceramic_toilet_roll_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_toilet_roll_na']) && $workData['sow']['wall_and_floor_tiling_notes']['bathroom_ceramic_toilet_roll_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="bathroom_ceramic_toilet_roll_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted mt-2">
                                                <strong>Note:</strong> Ceramic fittings for tiler are required to fit during wall tiling process. Non ceramic fittings can be installed after tiling is completed. Ceramic towel rails and toilet roll holders generally require walls at least tiled to 1 metre in height.
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <!-- Label and Input -->
                                                <label for="ensuite" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][ensuite]" id="ensuite" placeholder="Enter ensuite notes"
                                                    value="{{ isset($workData['sow']['site_work']['ensuite']) ? $workData['sow']['site_work']['ensuite'] : '' }}">
                                            </div>
                                        </div>

                                        <div class="card p-3 mb-3">
                                            <h5>12.5 Powder Room / Mud Room / Ensuite 2</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_required]" id="ensuite2_required" value="required"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_required']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_required'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_required">Required</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_na]" id="ensuite2_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Floor</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_floor_laying]" id="ensuite2_floor_lay_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_floor_laying]" id="ensuite2_floor_lay_diagonal" value="diagonal"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying'] == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_floor_laying]" id="ensuite2_floor_features" value="features"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_floor_laying'] == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Shower hob:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_shower_hob]" id="ensuite2_shower_hob_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_shower_hob']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_shower_hob'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_shower_hob_standard">Standard (no hob)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_shower_hob]" id="ensuite2_shower_hob_brick" value="brick"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_shower_hob']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_shower_hob'] == 'brick' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_shower_hob_brick">Brick hob</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Floor waste</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_grate_type]" id="ensuite2_grate_stainless" value="stainless"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type'] == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_grate_type]" id="ensuite2_grate_chrome" value="chrome"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type'] == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_grate_type]" id="ensuite2_grate_brass" value="brass"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type'] == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_grate_type]" id="ensuite2_grate_other" value="other"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_grate_type'] == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_grate_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="font-weight-bold mb-2">Wall</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_wall_laying]" id="ensuite2_wall_lay_standard" value="standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_wall_lay_standard">Laid standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_wall_laying]" id="ensuite2_wall_lay_non_standard" value="non_standard"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_laying']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_laying'] == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_wall_lay_non_standard">Non standard</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite2_wall_requirements]" class="form-control mt-2" placeholder="Requirements"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_requirements']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_requirements'] : '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite2_wall_height]" class="form-control mt-2" placeholder="Height"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_height']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_wall_height'] : '' }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Feature Tiling:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_feature_tiling]" id="ensuite2_feature_capping" value="capping"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling'] == 'capping' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_feature_capping">Capping tile</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_feature_tiling]" id="ensuite2_feature_border" value="border"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling'] == 'border' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_feature_border">Border feature</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_feature_tiling]" id="ensuite2_feature_individual" value="individual"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_tiling'] == 'individual' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_feature_individual">Individual feature tiles</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite2_feature_position]" class="form-control mt-2" placeholder="Position"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_position']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_position'] : '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][ensuite2_feature_requirements]" class="form-control mt-2" placeholder="Requirements"
                                                        value="{{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_requirements']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_feature_requirements'] : '' }}">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Fittings:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_fittings_soap]" id="ensuite2_fittings_soap" value="required"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_soap']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_soap'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_fittings_soap">Soap holder</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_fittings_towel]" id="ensuite2_fittings_towel" value="required"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_towel']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_towel'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_fittings_towel">Towel rail</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_fittings_roll]" id="ensuite2_fittings_roll" value="required"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_roll']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_roll'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_fittings_roll">Toilet roll holder</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][ensuite2_fittings_na]" id="ensuite2_fittings_na" value="na"
                                                            {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_na']) && $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_fittings_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ensuite2_fittings_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="sow_wall_and_floor_tiling_notes_ensuite2_notes">Notes</label>
                                                <textarea class="form-control" id="sow_wall_and_floor_tiling_notes_ensuite2_notes" name="sow[wall_and_floor_tiling_notes][ensuite2_notes]" rows="3">
                                                {{ isset($workData['sow']['wall_and_floor_tiling_notes']['ensuite2_notes']) ? $workData['sow']['wall_and_floor_tiling_notes']['ensuite2_notes'] : '' }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="card p-3 mb-3">

                                            <h5>12.6 WC</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_required]" id="wc_required" value="required" {{ isset($workData['wc_required']) && $workData['wc_required'] == 'required' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_required">Required</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_na]" id="wc_na" value="na" {{ isset($workData['wc_na']) && $workData['wc_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Floor</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_floor_laying]" id="wc_floor_lay_standard" value="standard" {{ isset($workData['wc_floor_laying']) && $workData['wc_floor_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_floor_laying]" id="wc_floor_lay_diagonal" value="diagonal" {{ isset($workData['wc_floor_laying']) && $workData['wc_floor_laying'] == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_floor_laying]" id="wc_floor_features" value="features" {{ isset($workData['wc_floor_laying']) && $workData['wc_floor_laying'] == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Floor grate / s :</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_grate_type]" id="wc_grate_stainless" value="stainless" {{ isset($workData['wc_grate_type']) && $workData['wc_grate_type'] == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_grate_type]" id="wc_grate_chrome" value="chrome" {{ isset($workData['wc_grate_type']) && $workData['wc_grate_type'] == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_grate_type]" id="wc_grate_brass" value="brass" {{ isset($workData['wc_grate_type']) && $workData['wc_grate_type'] == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_grate_type]" id="wc_grate_other" value="other" {{ isset($workData['wc_grate_type']) && $workData['wc_grate_type'] == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_grate_other">Other</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Wall</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_wall_laying]" id="wc_wall_lay_standard" value="standard" {{ isset($workData['wc_wall_laying']) && $workData['wc_wall_laying'] == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_wall_lay_standard">Laid standard <span class="text-muted">(Wall skirting tile Only)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_wall_laying]" id="wc_wall_lay_non_standard" value="non_standard" {{ isset($workData['wc_wall_laying']) && $workData['wc_wall_laying'] == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_wall_lay_non_standard">Non standard (eg Wall Tiles to 1200mm High etc)</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][wc_wall_requirements]" class="form-control mt-2" value="{{ isset($workData['wc_wall_requirements']) ? $workData['wc_wall_requirements'] : '' }}" placeholder="Requirements">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][wc_wall_height]" class="form-control mt-2" value="{{ isset($workData['wc_wall_height']) ? $workData['wc_wall_height'] : '' }}" placeholder="Height">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Feature Tiling:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_feature_tiling]" id="wc_feature_capping" value="capping" {{ isset($workData['wc_feature_tiling']) && $workData['wc_feature_tiling'] == 'capping' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_feature_capping">Capping tile</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_feature_tiling]" id="wc_feature_border" value="border" {{ isset($workData['wc_feature_tiling']) && $workData['wc_feature_tiling'] == 'border' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_feature_border">Border feature</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][wc_feature_tiling]" id="wc_feature_individual" value="individual" {{ isset($workData['wc_feature_tiling']) && $workData['wc_feature_tiling'] == 'individual' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="wc_feature_individual">Individual feature tiles</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][wc_feature_position]" class="form-control mt-2" value="{{ isset($workData['wc_feature_position']) ? $workData['wc_feature_position'] : '' }}" placeholder="Position">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][wc_feature_requirements]" class="form-control mt-2" value="{{ isset($workData['wc_feature_requirements']) ? $workData['wc_feature_requirements'] : '' }}" placeholder="Requirements">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Fittings</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">Ceramic toilet roll</label>
                                                        <input class="form-check-input ml-2" type="radio" name="sow[wall_and_floor_tiling_notes][ceramic_toilet_roll]" id="ceramic_toilet_roll" value="na"
                                                            {{ isset($workData['wall_and_floor_tiling_notes']['ceramic_toilet_roll']) && $workData['wall_and_floor_tiling_notes']['ceramic_toilet_roll'] == 'na' ? 'checked' : '' }}>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">N/A</label>
                                                        <input class="form-check-input ml-2" type="radio" name="sow[wall_and_floor_tiling_notes][ceramic_toilet_roll]" id="ceramic_toilet_roll_na" value="na"
                                                            {{ isset($workData['wall_and_floor_tiling_notes']['ceramic_toilet_roll']) && $workData['wall_and_floor_tiling_notes']['ceramic_toilet_roll'] == 'na' ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-muted mb-2">
                                                <strong>Note:</strong> Ceramic fittings for tiler are required to fit during wall tiling process. Non ceramic fittings can be installed after tiling is completed. Ceramic towel rails and toilet roll holders generally require walls at least tiled to 1 metre in height.
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <label for="wc" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][wc]" id="wc"
                                                    value="{{ isset($workData['site_work']['wc']) ? $workData['site_work']['wc'] : '' }}" placeholder="Enter wc notes">
                                            </div>
                                        </div>


                                        <div class="card p-3 mb-3">
                                            <h5>12.7 Additional Wet Areas</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_plan]" id="additional_wet_areas_plan" value="plan"
                                                            {{ (isset($workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_plan']) && $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_plan'] == 'plan') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_plan">As shown on plan</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_na]" id="additional_wet_areas_na" value="na"
                                                            {{ (isset($workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_na']) && $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_na'] == 'na') ? 'checked' : 'checked' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Floor</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    @php $floor_laying = $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_floor_laying'] ?? ''; @endphp
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_floor_laying]" id="additional_wet_areas_floor_lay_standard" value="standard"
                                                            {{ $floor_laying == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_floor_laying]" id="additional_wet_areas_floor_lay_diagonal" value="diagonal"
                                                            {{ $floor_laying == 'diagonal' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_floor_laying]" id="additional_wet_areas_floor_features" value="features"
                                                            {{ $floor_laying == 'features' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_floor_features">Features <span class="text-muted">(Show locations on floor plan)</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Waste</label>
                                                <div class="col-sm-9">
                                                    @php $floor_waste = $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_floor_waste'] ?? ''; @endphp
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_floor_waste]" id="additional_wet_areas_floor_waste_graded" value="graded"
                                                            {{ $floor_waste == 'graded' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_floor_waste_graded">Floor graded to outside</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_floor_waste]" id="additional_wet_areas_floor_waste_dry" value="dry"
                                                            {{ $floor_waste == 'dry' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_floor_waste_dry">Floor waste (dry)</label>
                                                    </div>

                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_type]" class="form-control mt-2"
                                                        value="{{ $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_grate_type'] ?? '' }}" placeholder="Grate Type">

                                                    @php $grate_material = $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_grate_material'] ?? ''; @endphp
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_material]" id="additional_wet_areas_grate_stainless" value="stainless"
                                                            {{ $grate_material == 'stainless' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_grate_stainless">Stainless Steel</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_material]" id="additional_wet_areas_grate_chrome" value="chrome"
                                                            {{ $grate_material == 'chrome' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_grate_chrome">Chrome Plate</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_material]" id="additional_wet_areas_grate_brass" value="brass"
                                                            {{ $grate_material == 'brass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_grate_brass">Polished brass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_material]" id="additional_wet_areas_grate_other" value="other"
                                                            {{ $grate_material == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_grate_other">Other</label>
                                                        <input type="text" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_grate_other_specify]" class="form-control form-control-sm ml-1"
                                                            value="{{ $workData['sow']['wall_and_floor_tiling_notes']['additional_wet_areas_grate_other_specify'] ?? '' }}" placeholder="Specify">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Shower hob:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_shower_hob]" id="additional_wet_areas_shower_hob_standard" value="standard"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_shower_hob']) && $workData['wall_and_floor_tiling_notes']['additional_wet_areas_shower_hob'] == 'standard') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_shower_hob_standard">Standard (no hob)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_shower_hob]" id="additional_wet_areas_shower_hob_brick" value="brick"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_shower_hob']) && $workData['wall_and_floor_tiling_notes']['additional_wet_areas_shower_hob'] == 'brick') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_shower_hob_brick">Brick hob</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="font-weight-bold mb-2">Wall</div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_wall_laying]" id="additional_wet_areas_wall_lay_standard" value="standard"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_laying']) && $workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_laying'] == 'standard') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_wall_lay_standard">
                                                            Laid standard <span class="text-muted">(Tiles 600mm above bath (if applicable) including return end/s and bath raiser tiles to brickwork or block work. Shower recess to 1800mm minimum. Single tile splash back to vanity and the remainder of walls single skirting tile.)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_wall_laying]" id="additional_wet_areas_wall_lay_non_standard" value="non_standard"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_laying']) && $workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_laying'] == 'non_standard') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="additional_wet_areas_wall_lay_non_standard">Non standard (eg Wall Tiles to 1200mm High etc)</label>
                                                    </div>

                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_wall_requirements]" class="form-control mt-2"
                                                        value="{{ isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_requirements']) ? $workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_requirements'] : '' }}" placeholder="Requirements">

                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][additional_wet_areas_wall_height]" class="form-control mt-2"
                                                        value="{{ isset($workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_height']) ? $workData['wall_and_floor_tiling_notes']['additional_wet_areas_wall_height'] : '' }}" placeholder="Height">
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <label for="additional_wet_areas" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][additional_wet_areas]" id="additional_wet_areas"
                                                    value="{{ isset($workData['site_work']['additional_wet_areas']) ? $workData['site_work']['additional_wet_areas'] : '' }}" placeholder="Enter additional wet areas notes">
                                            </div>
                                        </div>
                                        <div class="card p-3 mb-3">
                                            <h5>12.8 Kitchen</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_na]" id="kitchen_na" value="na"
                                                            {{ isset($workData['wall_and_floor_tiling_notes']['kitchen_na']) && $workData['wall_and_floor_tiling_notes']['kitchen_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Splash Back :</label>
                                                <div class="col-sm-9">
                                                    @php $splash = $workData['wall_and_floor_tiling_notes']['kitchen_splashback'] ?? ''; @endphp

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_splashback]" id="kitchen_splashback_ceramic" value="ceramic"
                                                            {{ $splash == 'ceramic' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_splashback_ceramic">Ceramic Tiles <span class="text-muted">(As Below)</span></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_splashback]" id="kitchen_splashback_granite" value="granite"
                                                            {{ $splash == 'granite' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_splashback_granite">Granite</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_splashback]" id="kitchen_splashback_glass" value="glass"
                                                            {{ $splash == 'glass' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_splashback_glass">Glass</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_splashback]" id="kitchen_splashback_other" value="other"
                                                            {{ $splash == 'other' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_splashback_other">Other</label>
                                                        <input type="text" name="kitchen_splashback_other_specify" class="form-control form-control-sm ml-1" placeholder="Specify"
                                                            value="{{ $workData['kitchen_splashback_other_specify'] ?? '' }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying</label>
                                                <div class="col-sm-9">
                                                    @php $laying = $workData['wall_and_floor_tiling_notes']['kitchen_laying'] ?? ''; @endphp

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_laying]" id="kitchen_laying_standard" value="standard"
                                                            {{ $laying == 'standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_laying_standard">Laid standard <span class="text-muted">(To 450mm above bench tops or to underside of overhead cupboards)</span></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_laying]" id="kitchen_laying_non_standard" value="non_standard"
                                                            {{ $laying == 'non_standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_laying_non_standard">Non standard <span class="text-muted">(eg Behind range hood etc)</span></label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][kitchen_laying_requirements]" class="form-control mt-2"
                                                        placeholder="Requirements See PRESTIGE QUOTE . WHITE STARFIREGLASS"
                                                        value="{{ $workData['wall_and_floor_tiling_notes']['kitchen_laying_requirements'] ?? '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][kitchen_laying_height]" class="form-control mt-2"
                                                        placeholder="Height" value="{{ $workData['wall_and_floor_tiling_notes']['kitchen_laying_height'] ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Feature Tiling</label>
                                                <div class="col-sm-9">
                                                    @php $feature = $workData['wall_and_floor_tiling_notes']['kitchen_feature_tiling'] ?? ''; @endphp

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_feature_tiling]" id="kitchen_feature_capping" value="capping"
                                                            {{ $feature == 'capping' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_feature_capping">Capping tile</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_feature_tiling]" id="kitchen_feature_border" value="border"
                                                            {{ $feature == 'border' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_feature_border">Border feature</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][kitchen_feature_tiling]" id="kitchen_feature_individual" value="individual"
                                                            {{ $feature == 'individual' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_feature_individual">Individual feature tiles</label>
                                                    </div>
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][kitchen_feature_position]" class="form-control mt-2"
                                                        placeholder="Position" value="{{ $workData['wall_and_floor_tiling_notes']['kitchen_feature_position'] ?? '' }}">
                                                    <input type="text" name="sow[wall_and_floor_tiling_notes][kitchen_feature_requirements]" class="form-control mt-2"
                                                        placeholder="Requirements" value="{{ $workData['wall_and_floor_tiling_notes']['kitchen_feature_requirements'] ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <label for="kitchen" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][kitchen]" id="kitchen" placeholder="Enter kitchen notes"
                                                    value="{{ $workData['site_work']['kitchen'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="card p-3 mb-3">
                                            <h5>12.9 Additional " Interior " Floor Areas</h5>

                                            <!-- N/A Radio -->
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][interior_floor_na]" id="interior_floor_na" value="na"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['interior_floor_na']) && $workData['wall_and_floor_tiling_notes']['interior_floor_na'] == 'na') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="interior_floor_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Floor Location -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Floor (e.g Kitchen, Living, Foyer etc) - Location :</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][interior_floor_location_plan]" id="interior_floor_location_plan" value="plan"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['interior_floor_location_plan']) && $workData['wall_and_floor_tiling_notes']['interior_floor_location_plan'] == 'plan') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="interior_floor_location_plan">Shown on Plan</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Laying Options -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Laying</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][interior_floor_laying]" id="interior_floor_lay_standard" value="standard"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['interior_floor_laying']) && $workData['wall_and_floor_tiling_notes']['interior_floor_laying'] == 'standard') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="interior_floor_lay_standard">Lay standard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][interior_floor_laying]" id="interior_floor_lay_diagonal" value="diagonal"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['interior_floor_laying']) && $workData['wall_and_floor_tiling_notes']['interior_floor_laying'] == 'diagonal') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="interior_floor_lay_diagonal">Lay diagonal with border</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[wall_and_floor_tiling_notes][interior_floor_laying]" id="interior_floor_features" value="features"
                                                            {{ (isset($workData['wall_and_floor_tiling_notes']['interior_floor_laying']) && $workData['wall_and_floor_tiling_notes']['interior_floor_laying'] == 'features') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="interior_floor_features">Features <span class="text-muted">( Show locations on floor plan )</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Notes to above -->
                                            <div class="d-flex align-items-center">
                                                <label for="interior_floor_areas" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][interior_floor_areas]" id="interior_floor_areas"
                                                    value="{{ isset($workData['site_work']['interior_floor_areas']) ? $workData['site_work']['interior_floor_areas'] : '' }}"
                                                    placeholder="Enter interior floor areas notes">
                                            </div>
                                        </div>

                                        <div class="card p-3 mb-3">
                                            <h5>12.11 Special Wall & Floor Tiler Instructions</h5>

                                            <div class="form-group">
                                                <label for="tiler_instructions">Notes to above:</label>
                                                <textarea class="form-control" id="tiler_instructions" name="sow[wall_and_floor_tiling_notes][tiler_instructions]" rows="5">{{ isset($workData['wall_and_floor_tiling_notes']['tiler_instructions']) ? $workData['wall_and_floor_tiling_notes']['tiler_instructions'] : 'See LAYOUTS PLANS & JACOBA TILE QUOTE FOR AREAS' }}</textarea>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <label for="special_wall_floor_tiler" class="me-2 mb-0">Notes to above:</label>
                                                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                    name="sow[site_work][special_wall_floor_tiler]" id="special_wall_floor_tiler"
                                                    value="{{ isset($workData['site_work']['special_wall_floor_tiler']) ? $workData['site_work']['special_wall_floor_tiler'] : '' }}"
                                                    placeholder="Enter special wall & floor tiler notes">
                                            </div>
                                        </div>



                                        <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                            <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                            </div>
                                        </div>
                                        <table
                                            style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        colspan="3"
                                                        style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                                        13) PAINTER
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="card p-3 mb-3">


                                            <h5>13.1 Colour Selections</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[painter][colour_selection_by]" id="colour_selection_below" value="below"
                                                            {{ (isset($workData['sow']['painter']['colour_selection_by']) && $workData['sow']['painter']['colour_selection_by'] === 'below') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="colour_selection_below">Per Selections Below</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[painter][colour_selection_by]" id="colour_selection_owner" value="owner"
                                                            {{ (isset($workData['sow']['painter']['colour_selection_by']) && $workData['sow']['painter']['colour_selection_by'] === 'owner') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="colour_selection_owner">By Owner</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <p class="font-weight-bold">Note 1 :</p>
                                            <p class="text-muted">Our painters use quality brand paints and Taubmans are the main paint supplier of paints for Freedom Homes. If a different paint brand is requested an extra charge may be applicable.</p>

                                            <p class="font-weight-bold">Note 2 :</p>
                                            <p class="text-muted">Standard painting allowance for - Internal 1 ceiling colour, 1 wall colour, and 1 colour for timberwork and internal doors (unless timberwork stained & doors painted). External 1 colour for external cladding, 1 colour for external features (e.g., decorative gable trims, posts, beams, and external doors), 1 colour for eaves and verandah linings. Plastic downpipes painted the same as a primary colour on exterior. Timber Deckings & Timber Step Treads: 2 coats of water-based decking oil. Not included is painting of galvanized arch bars.</p>

                                            <div class="font-weight-bold mt-3 mb-2">EXTERNAL</div>
                                            <div class="custom-resp-table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">Colour</th>
                                                            <th scope="col">N/A</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Hardi plank</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][hardi_plank_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['hardi_plank_value']) ? $workData['sow']['painter']['hardi_plank_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][hardi_plank_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][hardi_plank_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['hardi_plank_check']) && $workData['sow']['painter']['hardi_plank_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Eaves</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][eaves_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['eaves_value']) ? $workData['sow']['painter']['eaves_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][eaves_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][eaves_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['eaves_check']) && $workData['sow']['painter']['eaves_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gable</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][gable_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['gable_value']) ? $workData['sow']['painter']['gable_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][gable_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][gable_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['gable_check']) && $workData['sow']['painter']['gable_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Barge</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][barge_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['barge_value']) ? $workData['sow']['painter']['barge_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][barge_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][barge_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['barge_check']) && $workData['sow']['painter']['barge_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Finial</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][finial_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['finial_value']) ? $workData['sow']['painter']['finial_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][finial_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][finial_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['finial_check']) && $workData['sow']['painter']['finial_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Front entry door</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][front_entry_door_value]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['front_entry_door_value']) ? $workData['sow']['painter']['front_entry_door_value'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sow[painter][front_entry_door_check]" value="unchecked">
                                                                <input type="radio" name="sow[painter][front_entry_door_check]" value="checked" class="form-check-input"
                                                                    {{ (isset($workData['sow']['painter']['front_entry_door_check']) && $workData['sow']['painter']['front_entry_door_check'] == 'checked') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="external_notes">Notes to above</label>
                                                <textarea class="form-control" id="external_notes" rows="3">{{ old('sow.painter.external_notes') }}</textarea>
                                            </div>


                                            <!-- Internal Colours Section -->
                                            <div class="font-weight-bold font-size-lg mb-3">INTERNAL COLOURS</div>
                                            <div class="custom-resp-table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Item</th>
                                                            <th scope="col">Ceiling</th>
                                                            <th scope="col">Wall</th>
                                                            <th scope="col">Doors</th>
                                                            <th scope="col">Woodwork</th>
                                                            <th scope="col">N / A</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Table Row Example for Entry -->
                                                        <tr>
                                                            <th scope="row">Entry</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][entry_ceiling]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['entry_ceiling']) ? $workData['sow']['painter']['entry_ceiling'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][entry_wall]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['entry_wall']) ? $workData['sow']['painter']['entry_wall'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][entry_doors]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['entry_doors']) ? $workData['sow']['painter']['entry_doors'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][entry_woodwork]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['entry_woodwork']) ? $workData['sow']['painter']['entry_woodwork'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="sow[painter][entry_na]" class="form-check-input" value="1"
                                                                    {{ (isset($workData['sow']['painter']['entry_na']) && $workData['sow']['painter']['entry_na'] == '1') ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <!-- Additional rows for Hall, Dining, etc. can be added below similarly -->
                                                    </tbody>

                                                </table>
                                            </div>


                                            <!-- Internal Stairs & Handrails Colours Section -->
                                            <div class="font-weight-bold mt-4 mb-3">INTERNAL STAIRS & HANDRAILS COLOURS</div>
                                            <div class="custom-resp-table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Component</th>
                                                            <th scope="col">Stringers</th>
                                                            <th scope="col">Treads</th>
                                                            <th scope="col">Balustrade</th>
                                                            <th scope="col">Newel posts</th>
                                                            <th scope="col">Balusters</th>
                                                            <th scope="col">N / A</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Table Row for Stairs & Handrails -->
                                                        <tr>
                                                            <th scope="row">Selection</th>
                                                            <td>
                                                                <input type="text" name="sow[painter][stringers]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['stringers']) ? $workData['sow']['painter']['stringers'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][treads]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['treads']) ? $workData['sow']['painter']['treads'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][balustrade]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['balustrade']) ? $workData['sow']['painter']['balustrade'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][newel_posts]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['newel_posts']) ? $workData['sow']['painter']['newel_posts'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="sow[painter][balusters]" class="form-control form-control-sm"
                                                                    value="{{ isset($workData['sow']['painter']['balusters']) ? $workData['sow']['painter']['balusters'] : '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="sow[painter][na]" class="form-check-input" value="1"
                                                                    {{ isset($workData['sow']['painter']['na']) && $workData['sow']['painter']['na'] == '1' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                        <div class="card p-3 mb-3">
                                            <h5>13.2 Paint Types</h5>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Ceilings :</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[painter][ceilings]" id="ceilings_flat"
                                                            value="flat"
                                                            {{ isset($workData['sow']['painter']['ceilings']) && $workData['sow']['painter']['ceilings'] == 'flat' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ceilings_flat">Flat water based - Spray 1<sup>st</sup> Coat , Roll 2<sup>nd</sup> Coat</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[painter][ceilings]" id="ceilings_na"
                                                            value="na"
                                                            {{ isset($workData['sow']['painter']['ceilings']) && $workData['sow']['painter']['ceilings'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="ceilings_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Internal walls -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">- Internal walls :</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[painter][internal_walls]" id="internal_walls_low_sheen"
                                                            value="low_sheen"
                                                            {{ isset($workData['sow']['painter']['internal_walls']) && $workData['sow']['painter']['internal_walls'] == 'low_sheen' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="internal_walls_low_sheen">Low sheen wash & wear water based - 3 Coats</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="sow[painter][internal_walls]" id="internal_walls_enamel"
                                                            value="enamel"
                                                            {{ isset($workData['sow']['painter']['internal_walls']) && $workData['sow']['painter']['internal_walls'] == 'enamel' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="internal_walls_enamel">Enamel ( Gloss )</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[painter][internal_walls]" id="internal_walls_na"
                                                            value="na"
                                                            {{ isset($workData['sow']['painter']['internal_walls']) && $workData['sow']['painter']['internal_walls'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="internal_walls_na">N / A</label>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <!-- Label and Input -->
                                                    <label for="paint_types" class="me-2 mb-0">Notes to above:</label>
                                                    <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                        name="sow[site_work][paint_types]" id="paint_types" placeholder="Enter paint types notes"
                                                        value="{{ isset($workData['sow']['site_work']['paint_types']) ? $workData['sow']['site_work']['paint_types'] : '' }}">
                                                </div>
                                            </div>


                                            <!-- Repeat for other sections as needed -->
                                        </div>

                                        <div class="card p-3 mb-3">
                                            <h5>13.3 Feature Walls</h5>

                                            <!-- Internal feature walls -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Internal feature walls: Location(s) shown on plans</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="feature_walls_builder" name="sow[painter][feature_walls]"
                                                            value="builder"
                                                            {{ isset($workData['sow']['painter']['feature_walls']) && $workData['sow']['painter']['feature_walls'] == 'builder' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="feature_walls_builder">By Builder (Checked)</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="feature_walls_na" name="sow[painter][feature_walls]"
                                                            value="na"
                                                            {{ isset($workData['sow']['painter']['feature_walls']) && $workData['sow']['painter']['feature_walls'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="feature_walls_na">N / A</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Notes to above -->
                                            <div class="form-group">
                                                <label for="feature_walls_notes">Notes to above:</label>
                                                <textarea class="form-control" id="feature_walls_notes" name="sow[painter][feature_walls_notes]" rows="3">
                                                {{ isset($workData['sow']['painter']['feature_walls_notes']) ? $workData['sow']['painter']['feature_walls_notes'] : '' }}
                                                </textarea>
                                            </div>
                                        </div>



                                        <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                            <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                            </div>
                                        </div>
                                        <table
                                            style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        colspan="3"
                                                        style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                                        14) PC SELECTIONS </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="card p-3 mb-3">
                                            <h5 class="font-weight-bold mb-2">14.1 Kitchen</h5>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[pc_selections][kitchen_selection_method]" id="kitchen_selection_below" value="below"
                                                            {{ isset($workData['sow']['pc_selections']['kitchen_selection_method']) && $workData['sow']['pc_selections']['kitchen_selection_method'] == 'below' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="sow[pc_selections][kitchen_selection_below]">Per Selections Below</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[pc_selections][kitchen_selection_method]" id="kitchen_quote_attached" value="quote"
                                                            {{ isset($workData['sow']['pc_selections']['kitchen_selection_method']) && $workData['sow']['pc_selections']['kitchen_selection_method'] == 'quote' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_quote_attached">Quote Attached</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sow[pc_selections][kitchen_na]" id="kitchen_na" value="na"
                                                            {{ isset($workData['sow']['pc_selections']['kitchen_na']) && $workData['sow']['pc_selections']['kitchen_na'] == 'na' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="kitchen_na">N/A</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="font-weight-bold mb-2">KITCHEN2154</div>
                                        <div class="custom-resp-table">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Brand</th>
                                                        <th>Model / Style</th>
                                                        <th>Supplier</th>
                                                        <th>Colour</th>
                                                        <th>$ or Qty</th>
                                                        <th colspan="3" class="text-center">( Tick One )</th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="text-center">By Builder</th>
                                                        <th class="text-center">By Owner</th>
                                                        <th class="text-center">N /A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table Rows -->
                                                    <tr>
                                                        <th scope="row">Oven</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_brand]" value="{{ isset($workData['sow']['pc_selections']['oven_brand']) ? $workData['sow']['pc_selections']['oven_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_model]" value="{{ isset($workData['sow']['pc_selections']['oven_model']) ? $workData['sow']['pc_selections']['oven_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_supplier]" value="{{ isset($workData['sow']['pc_selections']['oven_supplier']) ? $workData['sow']['pc_selections']['oven_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_colour]" value="{{ isset($workData['sow']['pc_selections']['oven_colour']) ? $workData['sow']['pc_selections']['oven_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_qty]" value="{{ isset($workData['sow']['pc_selections']['oven_qty']) ? $workData['sow']['pc_selections']['oven_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][oven_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['oven_na']) && $workData['sow']['pc_selections']['oven_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Cook top</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_brand]" value="{{ isset($workData['sow']['pc_selections']['cooktop_brand']) ? $workData['sow']['pc_selections']['cooktop_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_model]" value="{{ isset($workData['sow']['pc_selections']['cooktop_model']) ? $workData['sow']['pc_selections']['cooktop_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_supplier]" value="{{ isset($workData['sow']['pc_selections']['cooktop_supplier']) ? $workData['sow']['pc_selections']['cooktop_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_colour]" value="{{ isset($workData['sow']['pc_selections']['cooktop_colour']) ? $workData['sow']['pc_selections']['cooktop_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_qty]" value="{{ isset($workData['sow']['pc_selections']['cooktop_qty']) ? $workData['sow']['pc_selections']['cooktop_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_na']) && $workData['sow']['pc_selections']['cooktop_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Range hood</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_brand]" value="{{ isset($workData['sow']['pc_selections']['rangehood_brand']) ? $workData['sow']['pc_selections']['rangehood_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_model]" value="{{ isset($workData['sow']['pc_selections']['rangehood_model']) ? $workData['sow']['pc_selections']['rangehood_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_supplier]" value="{{ isset($workData['sow']['pc_selections']['rangehood_supplier']) ? $workData['sow']['pc_selections']['rangehood_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_colour]" value="{{ isset($workData['sow']['pc_selections']['rangehood_colour']) ? $workData['sow']['pc_selections']['rangehood_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_qty]" value="{{ isset($workData['sow']['pc_selections']['rangehood_qty']) ? $workData['sow']['pc_selections']['rangehood_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['rangehood_by']) && $workData['sow']['pc_selections']['rangehood_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['rangehood_by']) && $workData['sow']['pc_selections']['rangehood_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['rangehood_na']) && $workData['sow']['pc_selections']['rangehood_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dishwasher</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_brand']) ? $workData['sow']['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_model']) ? $workData['sow']['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_supplier']) ? $workData['sow']['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_colour']) ? $workData['sow']['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_qty']) ? $workData['sow']['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['dishwasher_by']) && $workData['sow']['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['dishwasher_by']) && $workData['sow']['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['dishwasher_na']) && $workData['sow']['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="sow[pc_selections][kitchen_manufacturer_supply]" id="kitchen_manufacturer_supply" value="manufacturer"
                                                {{ isset($workData['sow']['pc_selections']['kitchen_manufacturer_supply']) && $workData['sow']['pc_selections']['kitchen_manufacturer_supply'] == 'manufacturer' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="kitchen_manufacturer_supply">To be selected & supplied with Kitchen Manufacturer.</label>
                                        </div>

                                        <div class="alert alert-info mt-3" role="alert">
                                            If "By Owner" then ensure Technical Data Sheets are provided to the kitchen.
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="kitchen_notes">Notes to above:</label>
                                            <textarea class="form-control" id="kitchen_notes" name="sow[pc_selections][kitchen_notes]" rows="5">
                                            {{ isset($workData['sow']['pc_selections']['kitchen_notes']) ? $workData['sow']['pc_selections']['kitchen_notes'] : '' }}
                                            </textarea>
                                        </div>

                                    </div>

                                    <div class="card p-3 mb-3">
                                        <h5>14.2 Wet Areas</h5>
                                        <div class="mb-3">
                                            <input type="radio" class="form-check-input" name="wet_areas_selection" value="per_selections"
                                                {{ isset($workData['wet_areas_selection']) && $workData['wet_areas_selection'] == 'per_selections' ? 'checked' : '' }}> Per Selections Below
                                            <input type="radio" class="form-check-input" name="wet_areas_selection" value="quote_attached"
                                                {{ isset($workData['wet_areas_selection']) && $workData['wet_areas_selection'] == 'quote_attached' ? 'checked' : '' }}> Quote Attached
                                            <input type="radio" class="form-check-input" name="wet_areas_selection" value="na"
                                                {{ isset($workData['wet_areas_selection']) && $workData['wet_areas_selection'] == 'na' ? 'checked' : '' }}> N/A
                                        </div>


                                        <div class="custom-resp-table">
                                            <h5 class="text-center bg-light p-2">LAUNDRY</h5>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Brand</th>
                                                        <th>Model / Style</th>
                                                        <th>Supplier</th>
                                                        <th>Colour</th>
                                                        <th>$ or Qty</th>
                                                        <th colspan="3" class="text-center">( Tick One )</th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="text-center">By Builder</th>
                                                        <th class="text-center">By Owner</th>
                                                        <th class="text-center">N /A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table Rows -->
                                                    <tr>
                                                        <th scope="row">Floor grate</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_brand]" value="{{ isset($workData['pc_selections']['oven_brand']) ? $workData['pc_selections']['oven_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_model]" value="{{ isset($workData['pc_selections']['oven_model']) ? $workData['pc_selections']['oven_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_supplier]" value="{{ isset($workData['pc_selections']['oven_supplier']) ? $workData['pc_selections']['oven_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_colour]" value="{{ isset($workData['pc_selections']['oven_colour']) ? $workData['pc_selections']['oven_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_qty]" value="{{ isset($workData['pc_selections']['oven_qty']) ? $workData['pc_selections']['oven_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="builder" {{ isset($workData['pc_selections']['oven_by']) && $workData['pc_selections']['oven_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="owner" {{ isset($workData['pc_selections']['oven_by']) && $workData['pc_selections']['oven_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_na]" value="na" {{ isset($workData['pc_selections']['oven_na']) && $workData['pc_selections']['oven_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tub</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_brand]" value="{{ isset($workData['pc_selections']['cooktop_brand']) ? $workData['pc_selections']['cooktop_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_model]" value="{{ isset($workData['pc_selections']['cooktop_model']) ? $workData['pc_selections']['cooktop_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_supplier]" value="{{ isset($workData['pc_selections']['cooktop_supplier']) ? $workData['pc_selections']['cooktop_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_colour]" value="{{ isset($workData['pc_selections']['cooktop_colour']) ? $workData['pc_selections']['cooktop_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_qty]" value="{{ isset($workData['pc_selections']['cooktop_qty']) ? $workData['pc_selections']['cooktop_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="builder" {{ isset($workData['pc_selections']['cooktop_by']) && $workData['pc_selections']['cooktop_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="owner" {{ isset($workData['pc_selections']['cooktop_by']) && $workData['pc_selections']['cooktop_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_na]" value="na" {{ isset($workData['pc_selections']['cooktop_na']) && $workData['pc_selections']['cooktop_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tub taps</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_brand]" value="{{ isset($workData['pc_selections']['rangehood_brand']) ? $workData['pc_selections']['rangehood_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_model]" value="{{ isset($workData['pc_selections']['rangehood_model']) ? $workData['pc_selections']['rangehood_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_supplier]" value="{{ isset($workData['pc_selections']['rangehood_supplier']) ? $workData['pc_selections']['rangehood_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_colour]" value="{{ isset($workData['pc_selections']['rangehood_colour']) ? $workData['pc_selections']['rangehood_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_qty]" value="{{ isset($workData['pc_selections']['rangehood_qty']) ? $workData['pc_selections']['rangehood_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="builder" {{ isset($workData['pc_selections']['rangehood_by']) && $workData['pc_selections']['rangehood_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="owner" {{ isset($workData['pc_selections']['rangehood_by']) && $workData['pc_selections']['rangehood_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_na]" value="na" {{ isset($workData['pc_selections']['rangehood_na']) && $workData['pc_selections']['rangehood_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tub plug & waste</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Washing m/c cocks</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div>
                                                <input type="radio" class="form-check-input" name="laundry_combination" value="laundry_combination"
                                                    {{ isset($workData['laundry_combination']) && $workData['laundry_combination'] == 'laundry_combination' ? 'checked' : '' }}>
                                                Laundry combination to be selected & supplied with kitchen manufacturer
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-center">
                                            <label for="laundry_wet_areas" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][laundry_wet_areas]" id="laundry_wet_areas" placeholder="Enter laundry wet areas notes" value="{{ old('sow.site_work.laundry_wet_areas') }}">
                                        </div>


                                        <div class="custom-resp-table mt-4">
                                            <h5 class="text-center bg-light p-2">BATHROOM</h5>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Brand</th>
                                                        <th>Model / Style</th>
                                                        <th>Supplier</th>
                                                        <th>Colour</th>
                                                        <th>$ or Qty</th>
                                                        <th colspan="3" class="text-center">( Tick One )</th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="text-center">By Builder</th>
                                                        <th class="text-center">By Owner</th>
                                                        <th class="text-center">N /A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table Rows -->
                                                    <tr>
                                                        <th scope="row">Toilet & Cistern</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][oven_brand]"
                                                                value="{{ isset($workData['sow']['pc_selections']['oven_brand']) ? $workData['sow']['pc_selections']['oven_brand'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][oven_model]"
                                                                value="{{ isset($workData['sow']['pc_selections']['oven_model']) ? $workData['sow']['pc_selections']['oven_model'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][oven_supplier]"
                                                                value="{{ isset($workData['sow']['pc_selections']['oven_supplier']) ? $workData['sow']['pc_selections']['oven_supplier'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][oven_colour]"
                                                                value="{{ isset($workData['sow']['pc_selections']['oven_colour']) ? $workData['sow']['pc_selections']['oven_colour'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][oven_qty]"
                                                                value="{{ isset($workData['sow']['pc_selections']['oven_qty']) ? $workData['sow']['pc_selections']['oven_qty'] : '' }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][oven_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][oven_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][oven_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['oven_na']) && $workData['sow']['pc_selections']['oven_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Toilet roll holder</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][cooktop_brand]"
                                                                value="{{ isset($workData['sow']['pc_selections']['cooktop_brand']) ? $workData['sow']['pc_selections']['cooktop_brand'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][cooktop_model]"
                                                                value="{{ isset($workData['sow']['pc_selections']['cooktop_model']) ? $workData['sow']['pc_selections']['cooktop_model'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][cooktop_supplier]"
                                                                value="{{ isset($workData['sow']['pc_selections']['cooktop_supplier']) ? $workData['sow']['pc_selections']['cooktop_supplier'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][cooktop_colour]"
                                                                value="{{ isset($workData['sow']['pc_selections']['cooktop_colour']) ? $workData['sow']['pc_selections']['cooktop_colour'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][cooktop_qty]"
                                                                value="{{ isset($workData['sow']['pc_selections']['cooktop_qty']) ? $workData['sow']['pc_selections']['cooktop_qty'] : '' }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][cooktop_by]" value="builder"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][cooktop_by]" value="owner"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][cooktop_na]" value="na"
                                                                {{ isset($workData['sow']['pc_selections']['cooktop_na']) && $workData['sow']['pc_selections']['cooktop_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][rangehood_brand]"
                                                                value="{{ isset($workData['sow']['pc_selections']['rangehood_brand']) ? $workData['sow']['pc_selections']['rangehood_brand'] : old('sow.pc_selections.rangehood_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][rangehood_model]"
                                                                value="{{ isset($workData['sow']['pc_selections']['rangehood_model']) ? $workData['sow']['pc_selections']['rangehood_model'] : old('sow.pc_selections.rangehood_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][rangehood_supplier]"
                                                                value="{{ isset($workData['sow']['pc_selections']['rangehood_supplier']) ? $workData['sow']['pc_selections']['rangehood_supplier'] : old('sow.pc_selections.rangehood_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][rangehood_colour]"
                                                                value="{{ isset($workData['sow']['pc_selections']['rangehood_colour']) ? $workData['sow']['pc_selections']['rangehood_colour'] : old('sow.pc_selections.rangehood_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="rangehood_qty"
                                                                value="{{ isset($workData['rangehood_qty']) ? $workData['rangehood_qty'] : old('rangehood_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][rangehood_by]" value="builder"
                                                                {{ (isset($workData['sow']['pc_selections']['rangehood_by']) ? $workData['sow']['pc_selections']['rangehood_by'] : old('sow.pc_selections.rangehood_by')) == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][rangehood_by]" value="owner"
                                                                {{ (isset($workData['sow']['pc_selections']['rangehood_by']) ? $workData['sow']['pc_selections']['rangehood_by'] : old('sow.pc_selections.rangehood_by')) == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][rangehood_na]" value="na"
                                                                {{ (isset($workData['sow']['pc_selections']['rangehood_na']) ? $workData['sow']['pc_selections']['rangehood_na'] : old('sow.pc_selections.rangehood_na')) == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath taps</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][dishwasher_brand]"
                                                                value="{{ isset($workData['sow']['pc_selections']['dishwasher_brand']) ? $workData['sow']['pc_selections']['dishwasher_brand'] : old('sow.pc_selections.dishwasher_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][dishwasher_model]"
                                                                value="{{ isset($workData['sow']['pc_selections']['dishwasher_model']) ? $workData['sow']['pc_selections']['dishwasher_model'] : old('sow.pc_selections.dishwasher_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][dishwasher_supplier]"
                                                                value="{{ isset($workData['sow']['pc_selections']['dishwasher_supplier']) ? $workData['sow']['pc_selections']['dishwasher_supplier'] : old('sow.pc_selections.dishwasher_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][dishwasher_colour]"
                                                                value="{{ isset($workData['sow']['pc_selections']['dishwasher_colour']) ? $workData['sow']['pc_selections']['dishwasher_colour'] : old('sow.pc_selections.dishwasher_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][dishwasher_qty]"
                                                                value="{{ isset($workData['sow']['pc_selections']['dishwasher_qty']) ? $workData['sow']['pc_selections']['dishwasher_qty'] : old('sow.pc_selections.dishwasher_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][dishwasher_by]" value="builder"
                                                                {{ (isset($workData['sow']['pc_selections']['dishwasher_by']) ? $workData['sow']['pc_selections']['dishwasher_by'] : old('sow.pc_selections.dishwasher_by')) == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][dishwasher_by]" value="owner"
                                                                {{ (isset($workData['sow']['pc_selections']['dishwasher_by']) ? $workData['sow']['pc_selections']['dishwasher_by'] : old('sow.pc_selections.dishwasher_by')) == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][dishwasher_na]" value="na"
                                                                {{ (isset($workData['sow']['pc_selections']['dishwasher_na']) ? $workData['sow']['pc_selections']['dishwasher_na'] : old('sow.pc_selections.dishwasher_na')) == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath plug & waste</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][plug_waste_brand]"
                                                                value="{{ old('sow.pc_selections.plug_waste_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][plug_waste_model]"
                                                                value="{{ old('sow.pc_selections.plug_waste_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][plug_waste_supplier]"
                                                                value="{{ old('sow.pc_selections.plug_waste_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][plug_waste_colour]"
                                                                value="{{ old('sow.pc_selections.plug_waste_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][plug_waste_qty]"
                                                                value="{{ old('sow.pc_selections.plug_waste_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][plug_waste_by]" value="builder"
                                                                {{ old('sow.pc_selections.plug_waste_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][plug_waste_by]" value="owner"
                                                                {{ old('sow.pc_selections.plug_waste_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][plug_waste_na]" value="na"
                                                                {{ old('sow.pc_selections.plug_waste_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath soap holder</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][soap_holder_brand]"
                                                                value="{{ old('sow.pc_selections.soap_holder_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][soap_holder_model]"
                                                                value="{{ old('sow.pc_selections.soap_holder_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][soap_holder_supplier]"
                                                                value="{{ old('sow.pc_selections.soap_holder_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][soap_holder_colour]"
                                                                value="{{ old('sow.pc_selections.soap_holder_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][soap_holder_qty]"
                                                                value="{{ old('sow.pc_selections.soap_holder_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][soap_holder_by]" value="builder"
                                                                {{ old('sow.pc_selections.soap_holder_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][soap_holder_by]" value="owner"
                                                                {{ old('sow.pc_selections.soap_holder_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][soap_holder_na]" value="na"
                                                                {{ old('sow.pc_selections.soap_holder_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">Vanity</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_brand]" value="{{ old('sow.pc_selections.vanity_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_model]" value="{{ old('sow.pc_selections.vanity_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_supplier]" value="{{ old('sow.pc_selections.vanity_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_colour]" value="{{ old('sow.pc_selections.vanity_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_qty]" value="{{ old('sow.pc_selections.vanity_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_by]" value="builder" {{ old('sow.pc_selections.vanity_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_by]" value="owner" {{ old('sow.pc_selections.vanity_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_na]" value="na" {{ old('sow.pc_selections.vanity_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Vanity taps</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_brand]" value="{{ old('sow.pc_selections.vanity_taps_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_model]" value="{{ old('sow.pc_selections.vanity_taps_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_supplier]" value="{{ old('sow.pc_selections.vanity_taps_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_colour]" value="{{ old('sow.pc_selections.vanity_taps_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_qty]" value="{{ old('sow.pc_selections.vanity_taps_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="builder" {{ old('sow.pc_selections.vanity_taps_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="owner" {{ old('sow.pc_selections.vanity_taps_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_na]" value="na" {{ old('sow.pc_selections.vanity_taps_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Vanity plug & waste</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][vanity_plug_waste_brand]"
                                                                value="{{ old('sow.pc_selections.vanity_plug_waste_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][vanity_plug_waste_model]"
                                                                value="{{ old('sow.pc_selections.vanity_plug_waste_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][vanity_plug_waste_supplier]"
                                                                value="{{ old('sow.pc_selections.vanity_plug_waste_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][vanity_plug_waste_colour]"
                                                                value="{{ old('sow.pc_selections.vanity_plug_waste_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][vanity_plug_waste_qty]"
                                                                value="{{ old('sow.pc_selections.vanity_plug_waste_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][vanity_plug_waste_by]" value="builder"
                                                                {{ old('sow.pc_selections.vanity_plug_waste_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][vanity_plug_waste_by]" value="owner"
                                                                {{ old('sow.pc_selections.vanity_plug_waste_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][vanity_plug_waste_na]" value="na"
                                                                {{ old('sow.pc_selections.vanity_plug_waste_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Shower screen</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_screen_brand]"
                                                                value="{{ old('sow.pc_selections.shower_screen_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_screen_model]"
                                                                value="{{ old('sow.pc_selections.shower_screen_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_screen_supplier]"
                                                                value="{{ old('sow.pc_selections.shower_screen_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_screen_colour]"
                                                                value="{{ old('sow.pc_selections.shower_screen_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_screen_qty]"
                                                                value="{{ old('sow.pc_selections.shower_screen_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_screen_by]" value="builder"
                                                                {{ old('sow.pc_selections.shower_screen_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_screen_by]" value="owner"
                                                                {{ old('sow.pc_selections.shower_screen_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_screen_na]" value="na"
                                                                {{ old('sow.pc_selections.shower_screen_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Shower rose</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_rose_brand]"
                                                                value="{{ old('sow.pc_selections.shower_rose_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_rose_model]"
                                                                value="{{ old('sow.pc_selections.shower_rose_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_rose_supplier]"
                                                                value="{{ old('sow.pc_selections.shower_rose_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_rose_colour]"
                                                                value="{{ old('sow.pc_selections.shower_rose_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_rose_qty]"
                                                                value="{{ old('sow.pc_selections.shower_rose_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_rose_by]" value="builder"
                                                                {{ old('sow.pc_selections.shower_rose_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_rose_by]" value="owner"
                                                                {{ old('sow.pc_selections.shower_rose_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_rose_na]" value="na"
                                                                {{ old('sow.pc_selections.shower_rose_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Shower taps</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_taps_brand]"
                                                                value="{{ old('sow.pc_selections.shower_taps_brand') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_taps_model]"
                                                                value="{{ old('sow.pc_selections.shower_taps_model') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_taps_supplier]"
                                                                value="{{ old('sow.pc_selections.shower_taps_supplier') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_taps_colour]"
                                                                value="{{ old('sow.pc_selections.shower_taps_colour') }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="sow[pc_selections][shower_taps_qty]"
                                                                value="{{ old('sow.pc_selections.shower_taps_qty') }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_taps_by]" value="builder"
                                                                {{ old('sow.pc_selections.shower_taps_by') == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_taps_by]" value="owner"
                                                                {{ old('sow.pc_selections.shower_taps_by') == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input"
                                                                name="sow[pc_selections][shower_taps_na]" value="na"
                                                                {{ old('sow.pc_selections.shower_taps_na') == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Shower soap holder</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_brand']) ? $workData['sow']['pc_selections']['shower_soap_holder_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_model]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_model']) ? $workData['sow']['pc_selections']['shower_soap_holder_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_supplier']) ? $workData['sow']['pc_selections']['shower_soap_holder_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_colour']) ? $workData['sow']['pc_selections']['shower_soap_holder_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_qty']) ? $workData['sow']['pc_selections']['shower_soap_holder_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="builder" {{ isset($workData['sow']['pc_selections']['shower_soap_holder_by']) && $workData['sow']['pc_selections']['shower_soap_holder_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="owner" {{ isset($workData['sow']['pc_selections']['shower_soap_holder_by']) && $workData['sow']['pc_selections']['shower_soap_holder_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_na]" value="na" {{ isset($workData['sow']['pc_selections']['shower_soap_holder_na']) && $workData['sow']['pc_selections']['shower_soap_holder_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Floor grate</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_brand]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_brand']) ? $workData['sow']['pc_selections']['floor_grate_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_model]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_model']) ? $workData['sow']['pc_selections']['floor_grate_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_supplier]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_supplier']) ? $workData['sow']['pc_selections']['floor_grate_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_colour]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_colour']) ? $workData['sow']['pc_selections']['floor_grate_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_qty]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_qty']) ? $workData['sow']['pc_selections']['floor_grate_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="builder" {{ isset($workData['sow']['pc_selections']['floor_grate_by']) && $workData['sow']['pc_selections']['floor_grate_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="owner" {{ isset($workData['sow']['pc_selections']['floor_grate_by']) && $workData['sow']['pc_selections']['floor_grate_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_na]" value="na" {{ isset($workData['sow']['pc_selections']['floor_grate_na']) && $workData['sow']['pc_selections']['floor_grate_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Hand towel ring</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_brand]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring_brand']) ? $workData['sow']['pc_selections']['hand_towel_ring_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_model]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring_model']) ? $workData['sow']['pc_selections']['hand_towel_ring_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_supplier]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring_supplier']) ? $workData['sow']['pc_selections']['hand_towel_ring_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_colour]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring_colour']) ? $workData['sow']['pc_selections']['hand_towel_ring_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_qty]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring_qty']) ? $workData['sow']['pc_selections']['hand_towel_ring_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_by]" value="builder" {{ isset($workData['sow']['pc_selections']['hand_towel_ring_by']) && $workData['sow']['pc_selections']['hand_towel_ring_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_by]" value="owner" {{ isset($workData['sow']['pc_selections']['hand_towel_ring_by']) && $workData['sow']['pc_selections']['hand_towel_ring_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_na]" value="na" {{ isset($workData['sow']['pc_selections']['hand_towel_ring_na']) && $workData['sow']['pc_selections']['hand_towel_ring_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Towel rail</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_brand]"
                                                                value="{{ isset($workData['pc_selections']['towel_rail_brand']) ? $workData['pc_selections']['towel_rail_brand'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_model]"
                                                                value="{{ isset($workData['pc_selections']['towel_rail_model']) ? $workData['pc_selections']['towel_rail_model'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_supplier]"
                                                                value="{{ isset($workData['pc_selections']['towel_rail_supplier']) ? $workData['pc_selections']['towel_rail_supplier'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_colour]"
                                                                value="{{ isset($workData['pc_selections']['towel_rail_colour']) ? $workData['pc_selections']['towel_rail_colour'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_qty]"
                                                                value="{{ isset($workData['pc_selections']['towel_rail_qty']) ? $workData['pc_selections']['towel_rail_qty'] : '' }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_by]" value="builder"
                                                                {{ isset($workData['pc_selections']['towel_rail_by']) && $workData['pc_selections']['towel_rail_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_by]" value="owner"
                                                                {{ isset($workData['pc_selections']['towel_rail_by']) && $workData['pc_selections']['towel_rail_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_na]" value="na"
                                                                {{ isset($workData['pc_selections']['towel_rail_na']) && $workData['pc_selections']['towel_rail_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Mirror</th>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_brand]"
                                                                value="{{ isset($workData['pc_selections']['mirror_brand']) ? $workData['pc_selections']['mirror_brand'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_model]"
                                                                value="{{ isset($workData['pc_selections']['mirror_model']) ? $workData['pc_selections']['mirror_model'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_supplier]"
                                                                value="{{ isset($workData['pc_selections']['mirror_supplier']) ? $workData['pc_selections']['mirror_supplier'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_colour]"
                                                                value="{{ isset($workData['pc_selections']['mirror_colour']) ? $workData['pc_selections']['mirror_colour'] : '' }}">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_qty]"
                                                                value="{{ isset($workData['pc_selections']['mirror_qty']) ? $workData['pc_selections']['mirror_qty'] : '' }}">
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][mirror_by]" value="builder"
                                                                {{ isset($workData['pc_selections']['mirror_by']) && $workData['pc_selections']['mirror_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][mirror_by]" value="owner"
                                                                {{ isset($workData['pc_selections']['mirror_by']) && $workData['pc_selections']['mirror_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][mirror_na]" value="na"
                                                                {{ isset($workData['pc_selections']['mirror_na']) && $workData['pc_selections']['mirror_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="bathroom_wet_areas" class="me-2 mb-0">Notes to above:</label>

                                            <input
                                                type="text"
                                                class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[pc_selections][bathroom_wet_areas]"
                                                id="bathroom_wet_areas"
                                                placeholder="Enter bathroom wet areas notes"
                                                value="{{ isset($workData->sow['pc_selections']['bathroom_wet_areas']) ? $workData->sow['pc_selections']['bathroom_wet_areas'] : '' }}">

                                        </div>
                                    </div>




                                    <div class="card p-3 mb-3">
                                        <h5>14.2 Wet Areas</h5>

                                        <div class="custom-resp-table">
                                            <h5 class="text-center bg-light p-2">ENSUITE</h5>
                                            <div class="custom-resp-table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Brand</th>
                                                            <th>Model / Style</th>
                                                            <th>Supplier</th>
                                                            <th>Colour</th>
                                                            <th>$ or Qty</th>
                                                            <th colspan="3" class="text-center">( Tick One )</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th class="text-center">By Builder</th>
                                                            <th class="text-center">By Owner</th>
                                                            <th class="text-center">N /A</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Table Rows -->
                                                        <tr>
                                                            <th scope="row">Toilet & Cistern</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_brand]" value="{{ isset($workData['sow']['pc_selections']['oven_brand']) ? $workData['sow']['pc_selections']['oven_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_model]" value="{{ isset($workData['sow']['pc_selections']['oven_model']) ? $workData['sow']['pc_selections']['oven_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_supplier]" value="{{ isset($workData['sow']['pc_selections']['oven_supplier']) ? $workData['sow']['pc_selections']['oven_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_colour]" value="{{ isset($workData['sow']['pc_selections']['oven_colour']) ? $workData['sow']['pc_selections']['oven_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_qty]" value="{{ isset($workData['sow']['pc_selections']['oven_qty']) ? $workData['sow']['pc_selections']['oven_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['oven_by']) && $workData['sow']['pc_selections']['oven_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_na]" value="na" {{ (isset($workData['sow']['pc_selections']['oven_na']) && $workData['sow']['pc_selections']['oven_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Toilet roll holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_brand]" value="{{ isset($workData['sow']['pc_selections']['cooktop_brand']) ? $workData['sow']['pc_selections']['cooktop_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_model]" value="{{ isset($workData['sow']['pc_selections']['cooktop_model']) ? $workData['sow']['pc_selections']['cooktop_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_supplier]" value="{{ isset($workData['sow']['pc_selections']['cooktop_supplier']) ? $workData['sow']['pc_selections']['cooktop_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_colour]" value="{{ isset($workData['sow']['pc_selections']['cooktop_colour']) ? $workData['sow']['pc_selections']['cooktop_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_qty]" value="{{ isset($workData['sow']['pc_selections']['cooktop_qty']) ? $workData['sow']['pc_selections']['cooktop_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['cooktop_by']) && $workData['sow']['pc_selections']['cooktop_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_na]" value="na" {{ (isset($workData['sow']['pc_selections']['cooktop_na']) && $workData['sow']['pc_selections']['cooktop_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Bath</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_brand]" value="{{ isset($workData['sow']['pc_selections']['rangehood_brand']) ? $workData['sow']['pc_selections']['rangehood_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_model]" value="{{ isset($workData['sow']['pc_selections']['rangehood_model']) ? $workData['sow']['pc_selections']['rangehood_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_supplier]" value="{{ isset($workData['sow']['pc_selections']['rangehood_supplier']) ? $workData['sow']['pc_selections']['rangehood_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_colour]" value="{{ isset($workData['sow']['pc_selections']['rangehood_colour']) ? $workData['sow']['pc_selections']['rangehood_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_qty]" value="{{ isset($workData['sow']['pc_selections']['rangehood_qty']) ? $workData['sow']['pc_selections']['rangehood_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['rangehood_by']) && $workData['sow']['pc_selections']['rangehood_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['rangehood_by']) && $workData['sow']['pc_selections']['rangehood_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_na]" value="na" {{ (isset($workData['sow']['pc_selections']['rangehood_na']) && $workData['sow']['pc_selections']['rangehood_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Bath taps</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_taps_brand]" value="{{ isset($workData['sow']['pc_selections']['bath_taps_brand']) ? $workData['sow']['pc_selections']['bath_taps_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_taps_model]" value="{{ isset($workData['sow']['pc_selections']['bath_taps_model']) ? $workData['sow']['pc_selections']['bath_taps_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_taps_supplier]" value="{{ isset($workData['sow']['pc_selections']['bath_taps_supplier']) ? $workData['sow']['pc_selections']['bath_taps_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_taps_colour]" value="{{ isset($workData['sow']['pc_selections']['bath_taps_colour']) ? $workData['sow']['pc_selections']['bath_taps_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_taps_qty]" value="{{ isset($workData['sow']['pc_selections']['bath_taps_qty']) ? $workData['sow']['pc_selections']['bath_taps_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_taps_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['bath_taps_by']) && $workData['sow']['pc_selections']['bath_taps_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_taps_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['bath_taps_by']) && $workData['sow']['pc_selections']['bath_taps_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_taps_na]" value="na" {{ (isset($workData['sow']['pc_selections']['bath_taps_na']) && $workData['sow']['pc_selections']['bath_taps_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Bath plug & waste</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_plug_brand]" value="{{ isset($workData['sow']['pc_selections']['bath_plug_brand']) ? $workData['sow']['pc_selections']['bath_plug_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_plug_model]" value="{{ isset($workData['sow']['pc_selections']['bath_plug_model']) ? $workData['sow']['pc_selections']['bath_plug_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_plug_supplier]" value="{{ isset($workData['sow']['pc_selections']['bath_plug_supplier']) ? $workData['sow']['pc_selections']['bath_plug_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_plug_colour]" value="{{ isset($workData['sow']['pc_selections']['bath_plug_colour']) ? $workData['sow']['pc_selections']['bath_plug_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_plug_qty]" value="{{ isset($workData['sow']['pc_selections']['bath_plug_qty']) ? $workData['sow']['pc_selections']['bath_plug_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_plug_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['bath_plug_by']) && $workData['sow']['pc_selections']['bath_plug_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_plug_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['bath_plug_by']) && $workData['sow']['pc_selections']['bath_plug_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_plug_na]" value="na" {{ (isset($workData['sow']['pc_selections']['bath_plug_na']) && $workData['sow']['pc_selections']['bath_plug_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Bath soap holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_soap_brand]" value="{{ isset($workData['sow']['pc_selections']['bath_soap_brand']) ? $workData['sow']['pc_selections']['bath_soap_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_soap_model]" value="{{ isset($workData['sow']['pc_selections']['bath_soap_model']) ? $workData['sow']['pc_selections']['bath_soap_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_soap_supplier]" value="{{ isset($workData['sow']['pc_selections']['bath_soap_supplier']) ? $workData['sow']['pc_selections']['bath_soap_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_soap_colour]" value="{{ isset($workData['sow']['pc_selections']['bath_soap_colour']) ? $workData['sow']['pc_selections']['bath_soap_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][bath_soap_qty]" value="{{ isset($workData['sow']['pc_selections']['bath_soap_qty']) ? $workData['sow']['pc_selections']['bath_soap_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_soap_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['bath_soap_by']) && $workData['sow']['pc_selections']['bath_soap_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_soap_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['bath_soap_by']) && $workData['sow']['pc_selections']['bath_soap_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][bath_soap_na]" value="na" {{ (isset($workData['sow']['pc_selections']['bath_soap_na']) && $workData['sow']['pc_selections']['bath_soap_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Vanity</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_brand]" value="{{ isset($workData['sow']['pc_selections']['vanity_brand']) ? $workData['sow']['pc_selections']['vanity_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_model]" value="{{ isset($workData['sow']['pc_selections']['vanity_model']) ? $workData['sow']['pc_selections']['vanity_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_supplier]" value="{{ isset($workData['sow']['pc_selections']['vanity_supplier']) ? $workData['sow']['pc_selections']['vanity_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_colour]" value="{{ isset($workData['sow']['pc_selections']['vanity_colour']) ? $workData['sow']['pc_selections']['vanity_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_qty]" value="{{ isset($workData['sow']['pc_selections']['vanity_qty']) ? $workData['sow']['pc_selections']['vanity_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['vanity_by']) && $workData['sow']['pc_selections']['vanity_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['vanity_by']) && $workData['sow']['pc_selections']['vanity_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_na]" value="na" {{ (isset($workData['sow']['pc_selections']['vanity_na']) && $workData['sow']['pc_selections']['vanity_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Vanity taps</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_brand]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_brand']) ? $workData['sow']['pc_selections']['vanity_taps_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_model]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_model']) ? $workData['sow']['pc_selections']['vanity_taps_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_supplier]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_supplier']) ? $workData['sow']['pc_selections']['vanity_taps_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_colour]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_colour']) ? $workData['sow']['pc_selections']['vanity_taps_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_qty]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_qty']) ? $workData['sow']['pc_selections']['vanity_taps_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['vanity_taps_by']) && $workData['sow']['pc_selections']['vanity_taps_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['vanity_taps_by']) && $workData['sow']['pc_selections']['vanity_taps_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_na]" value="na" {{ (isset($workData['sow']['pc_selections']['vanity_taps_na']) && $workData['sow']['pc_selections']['vanity_taps_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Vanity plug & waste</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_brand']) ? $workData['sow']['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_model']) ? $workData['sow']['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_supplier']) ? $workData['sow']['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_colour']) ? $workData['sow']['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['sow']['pc_selections']['dishwasher_qty']) ? $workData['sow']['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['sow']['pc_selections']['dishwasher_by']) && $workData['sow']['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['sow']['pc_selections']['dishwasher_by']) && $workData['sow']['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['sow']['pc_selections']['dishwasher_na']) && $workData['sow']['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Shower screen</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_brand']) ? $workData['sow']['pc_selections']['shower_screen_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_model]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_model']) ? $workData['sow']['pc_selections']['shower_screen_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_supplier']) ? $workData['sow']['pc_selections']['shower_screen_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_colour']) ? $workData['sow']['pc_selections']['shower_screen_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_qty']) ? $workData['sow']['pc_selections']['shower_screen_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="builder" {{ isset($workData['sow']['pc_selections']['shower_screen_by']) && $workData['sow']['pc_selections']['shower_screen_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="owner" {{ isset($workData['sow']['pc_selections']['shower_screen_by']) && $workData['sow']['pc_selections']['shower_screen_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_na]" value="na" {{ isset($workData['sow']['pc_selections']['shower_screen_na']) && $workData['sow']['pc_selections']['shower_screen_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Shower rose</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_rose_brand']) ? $workData['sow']['pc_selections']['shower_rose_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_model]" value="{{ isset($workData['sow']['pc_selections']['shower_rose_model']) ? $workData['sow']['pc_selections']['shower_rose_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_rose_supplier']) ? $workData['sow']['pc_selections']['shower_rose_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_rose_colour']) ? $workData['sow']['pc_selections']['shower_rose_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_rose_qty']) ? $workData['sow']['pc_selections']['shower_rose_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_by]" value="builder" {{ isset($workData['sow']['pc_selections']['shower_rose_by']) && $workData['sow']['pc_selections']['shower_rose_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_by]" value="owner" {{ isset($workData['sow']['pc_selections']['shower_rose_by']) && $workData['sow']['pc_selections']['shower_rose_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_na]" value="na" {{ isset($workData['sow']['pc_selections']['shower_rose_na']) && $workData['sow']['pc_selections']['shower_rose_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Shower taps</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_taps_brand']) ? $workData['sow']['pc_selections']['shower_taps_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_model]" value="{{ isset($workData['sow']['pc_selections']['shower_taps_model']) ? $workData['sow']['pc_selections']['shower_taps_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_taps_supplier']) ? $workData['sow']['pc_selections']['shower_taps_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_taps_colour']) ? $workData['sow']['pc_selections']['shower_taps_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_taps_qty']) ? $workData['sow']['pc_selections']['shower_taps_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['shower_taps_by']) && $workData['sow']['pc_selections']['shower_taps_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['shower_taps_by']) && $workData['sow']['pc_selections']['shower_taps_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_na]" value="na" {{ (isset($workData['sow']['pc_selections']['shower_taps_na']) && $workData['sow']['pc_selections']['shower_taps_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Shower soap holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_brand']) ? $workData['sow']['pc_selections']['shower_soap_holder_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_model]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_model']) ? $workData['sow']['pc_selections']['shower_soap_holder_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_supplier']) ? $workData['sow']['pc_selections']['shower_soap_holder_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_colour']) ? $workData['sow']['pc_selections']['shower_soap_holder_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_soap_holder_qty']) ? $workData['sow']['pc_selections']['shower_soap_holder_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['shower_soap_holder_by']) && $workData['sow']['pc_selections']['shower_soap_holder_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['shower_soap_holder_by']) && $workData['sow']['pc_selections']['shower_soap_holder_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_na]" value="na" {{ (isset($workData['sow']['pc_selections']['shower_soap_holder_na']) && $workData['sow']['pc_selections']['shower_soap_holder_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Floor grate</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_brand]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_brand']) ? $workData['sow']['pc_selections']['floor_grate_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_model]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_model']) ? $workData['sow']['pc_selections']['floor_grate_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_supplier]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_supplier']) ? $workData['sow']['pc_selections']['floor_grate_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_colour]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_colour']) ? $workData['sow']['pc_selections']['floor_grate_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_qty]" value="{{ isset($workData['sow']['pc_selections']['floor_grate_qty']) ? $workData['sow']['pc_selections']['floor_grate_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="builder" {{ (isset($workData['sow']['pc_selections']['floor_grate_by']) && $workData['sow']['pc_selections']['floor_grate_by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="owner" {{ (isset($workData['sow']['pc_selections']['floor_grate_by']) && $workData['sow']['pc_selections']['floor_grate_by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_na]" value="na" {{ (isset($workData['sow']['pc_selections']['floor_grate_na']) && $workData['sow']['pc_selections']['floor_grate_na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Hand towel ring</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring][brand]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring']['brand']) ? $workData['sow']['pc_selections']['hand_towel_ring']['brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring][model]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring']['model']) ? $workData['sow']['pc_selections']['hand_towel_ring']['model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring][supplier]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring']['supplier']) ? $workData['sow']['pc_selections']['hand_towel_ring']['supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring][colour]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring']['colour']) ? $workData['sow']['pc_selections']['hand_towel_ring']['colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring][qty]" value="{{ isset($workData['sow']['pc_selections']['hand_towel_ring']['qty']) ? $workData['sow']['pc_selections']['hand_towel_ring']['qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring][by]" value="builder" {{ (isset($workData['sow']['pc_selections']['hand_towel_ring']['by']) && $workData['sow']['pc_selections']['hand_towel_ring']['by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring][by]" value="owner" {{ (isset($workData['sow']['pc_selections']['hand_towel_ring']['by']) && $workData['sow']['pc_selections']['hand_towel_ring']['by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring][na]" value="na" {{ (isset($workData['sow']['pc_selections']['hand_towel_ring']['na']) && $workData['sow']['pc_selections']['hand_towel_ring']['na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Towel rail</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail][brand]" value="{{ isset($workData['sow']['pc_selections']['towel_rail']['brand']) ? $workData['sow']['pc_selections']['towel_rail']['brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail][model]" value="{{ isset($workData['sow']['pc_selections']['towel_rail']['model']) ? $workData['sow']['pc_selections']['towel_rail']['model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail][supplier]" value="{{ isset($workData['sow']['pc_selections']['towel_rail']['supplier']) ? $workData['sow']['pc_selections']['towel_rail']['supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail][colour]" value="{{ isset($workData['sow']['pc_selections']['towel_rail']['colour']) ? $workData['sow']['pc_selections']['towel_rail']['colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail][qty]" value="{{ isset($workData['sow']['pc_selections']['towel_rail']['qty']) ? $workData['sow']['pc_selections']['towel_rail']['qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail][by]" value="builder" {{ (isset($workData['sow']['pc_selections']['towel_rail']['by']) && $workData['sow']['pc_selections']['towel_rail']['by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail][by]" value="owner" {{ (isset($workData['sow']['pc_selections']['towel_rail']['by']) && $workData['sow']['pc_selections']['towel_rail']['by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail][na]" value="na" {{ (isset($workData['sow']['pc_selections']['towel_rail']['na']) && $workData['sow']['pc_selections']['towel_rail']['na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Mirror</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror][brand]" value="{{ isset($workData['sow']['pc_selections']['mirror']['brand']) ? $workData['sow']['pc_selections']['mirror']['brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror][model]" value="{{ isset($workData['sow']['pc_selections']['mirror']['model']) ? $workData['sow']['pc_selections']['mirror']['model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror][supplier]" value="{{ isset($workData['sow']['pc_selections']['mirror']['supplier']) ? $workData['sow']['pc_selections']['mirror']['supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror][colour]" value="{{ isset($workData['sow']['pc_selections']['mirror']['colour']) ? $workData['sow']['pc_selections']['mirror']['colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror][qty]" value="{{ isset($workData['sow']['pc_selections']['mirror']['qty']) ? $workData['sow']['pc_selections']['mirror']['qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror][by]" value="builder" {{ (isset($workData['sow']['pc_selections']['mirror']['by']) && $workData['sow']['pc_selections']['mirror']['by'] == 'builder') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror][by]" value="owner" {{ (isset($workData['sow']['pc_selections']['mirror']['by']) && $workData['sow']['pc_selections']['mirror']['by'] == 'owner') ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror][na]" value="na" {{ (isset($workData['sow']['pc_selections']['mirror']['na']) && $workData['sow']['pc_selections']['mirror']['na'] == 'na') ? 'checked' : '' }}></td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>
                                                <input type="radio"> Laundry combination to be selected & supplied with kitchen manufacturer
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="ansuite_wet_areas" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text"
                                                class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][ansuite_wet_areas]"
                                                id="ansuite_wet_areas"
                                                placeholder="Enter ansuite wet areas notes"
                                                value="{{ old('sow.site_work.ansuite_wet_areas', isset($sow['site_work']['ansuite_wet_areas']) ? $sow['site_work']['ansuite_wet_areas'] : '') }}">

                                        </div>


                                        <div class="custom-resp-table mt-4">
                                            <h5 class="text-center bg-light p-2">POWDER</h5>
                                            <div class="custom-resp-table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Brand</th>
                                                            <th>Model / Style</th>
                                                            <th>Supplier</th>
                                                            <th>Colour</th>
                                                            <th>$ or Qty</th>
                                                            <th colspan="3" class="text-center">( Tick One )</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th class="text-center">By Builder</th>
                                                            <th class="text-center">By Owner</th>
                                                            <th class="text-center">N /A</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Table Rows -->
                                                        <tr>
                                                            <th scope="row">Toilet & Cistern</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_oven_brand]" value="{{ isset($workData['pc_selections']['toilet_oven_brand']) ? $workData['pc_selections']['toilet_oven_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_oven_model]" value="{{ isset($workData['pc_selections']['toilet_oven_model']) ? $workData['pc_selections']['toilet_oven_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_oven_supplier]" value="{{ isset($workData['pc_selections']['toilet_oven_supplier']) ? $workData['pc_selections']['toilet_oven_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_oven_colour]" value="{{ isset($workData['pc_selections']['toilet_oven_colour']) ? $workData['pc_selections']['toilet_oven_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_oven_qty]" value="{{ isset($workData['pc_selections']['toilet_oven_qty']) ? $workData['pc_selections']['toilet_oven_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_oven_by]" value="builder" {{ isset($workData['pc_selections']['toilet_oven_by']) && $workData['pc_selections']['toilet_oven_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_oven_by]" value="owner" {{ isset($workData['pc_selections']['toilet_oven_by']) && $workData['pc_selections']['toilet_oven_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_oven_na]" value="na" {{ isset($workData['pc_selections']['toilet_oven_na']) && $workData['pc_selections']['toilet_oven_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Toilet roll holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_roll_holder_brand]" value="{{ isset($workData['pc_selections']['toilet_roll_holder_brand']) ? $workData['pc_selections']['toilet_roll_holder_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_roll_holder_model]" value="{{ isset($workData['pc_selections']['toilet_roll_holder_model']) ? $workData['pc_selections']['toilet_roll_holder_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_roll_holder_supplier]" value="{{ isset($workData['pc_selections']['toilet_roll_holder_supplier']) ? $workData['pc_selections']['toilet_roll_holder_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_roll_holder_colour]" value="{{ isset($workData['pc_selections']['toilet_roll_holder_colour']) ? $workData['pc_selections']['toilet_roll_holder_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][toilet_roll_holder_qty]" value="{{ isset($workData['pc_selections']['toilet_roll_holder_qty']) ? $workData['pc_selections']['toilet_roll_holder_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_roll_holder_by]" value="builder" {{ isset($workData['pc_selections']['toilet_roll_holder_by']) && $workData['pc_selections']['toilet_roll_holder_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_roll_holder_by]" value="owner" {{ isset($workData['pc_selections']['toilet_roll_holder_by']) && $workData['pc_selections']['toilet_roll_holder_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][toilet_roll_holder_na]" value="na" {{ isset($workData['pc_selections']['toilet_roll_holder_na']) && $workData['pc_selections']['toilet_roll_holder_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Vanity</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_oven_brand]" value="{{ isset($workData['pc_selections']['vanity_oven_brand']) ? $workData['pc_selections']['vanity_oven_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_oven_model]" value="{{ isset($workData['pc_selections']['vanity_oven_model']) ? $workData['pc_selections']['vanity_oven_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_rangehood_supplier]" value="{{ isset($workData['pc_selections']['vanity_rangehood_supplier']) ? $workData['pc_selections']['vanity_rangehood_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_rangehood_colour]" value="{{ isset($workData['pc_selections']['vanity_rangehood_colour']) ? $workData['pc_selections']['vanity_rangehood_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_rangehood_qty]" value="{{ isset($workData['pc_selections']['vanity_rangehood_qty']) ? $workData['pc_selections']['vanity_rangehood_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_rangehood_by]" value="builder" {{ isset($workData['pc_selections']['vanity_rangehood_by']) && $workData['pc_selections']['vanity_rangehood_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_rangehood_by]" value="owner" {{ isset($workData['pc_selections']['vanity_rangehood_by']) && $workData['pc_selections']['vanity_rangehood_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_rangehood_na]" value="na" {{ isset($workData['pc_selections']['vanity_rangehood_na']) && $workData['pc_selections']['vanity_rangehood_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Vanity taps</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_brand]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_brand']) ? $workData['sow']['pc_selections']['vanity_taps_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_model]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_model']) ? $workData['sow']['pc_selections']['vanity_taps_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_supplier]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_supplier']) ? $workData['sow']['pc_selections']['vanity_taps_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_colour]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_colour']) ? $workData['sow']['pc_selections']['vanity_taps_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][vanity_taps_qty]" value="{{ isset($workData['sow']['pc_selections']['vanity_taps_qty']) ? $workData['sow']['pc_selections']['vanity_taps_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="builder" {{ isset($workData['sow']['pc_selections']['vanity_taps_by']) && $workData['sow']['pc_selections']['vanity_taps_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_by]" value="owner" {{ isset($workData['sow']['pc_selections']['vanity_taps_by']) && $workData['sow']['pc_selections']['vanity_taps_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][vanity_taps_na]" value="na" {{ isset($workData['sow']['pc_selections']['vanity_taps_na']) && $workData['sow']['pc_selections']['vanity_taps_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Vanity plug & waste</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][plug_waste_brand]" value="{{ isset($workData['sow']['pc_selections']['plug_waste_brand']) ? $workData['sow']['pc_selections']['plug_waste_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][plug_waste_model]" value="{{ isset($workData['sow']['pc_selections']['plug_waste_model']) ? $workData['sow']['pc_selections']['plug_waste_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][plug_waste_supplier]" value="{{ isset($workData['sow']['pc_selections']['plug_waste_supplier']) ? $workData['sow']['pc_selections']['plug_waste_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][plug_waste_colour]" value="{{ isset($workData['sow']['pc_selections']['plug_waste_colour']) ? $workData['sow']['pc_selections']['plug_waste_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][plug_waste_qty]" value="{{ isset($workData['sow']['pc_selections']['plug_waste_qty']) ? $workData['sow']['pc_selections']['plug_waste_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][plug_waste_by]" value="builder" {{ isset($workData['sow']['pc_selections']['plug_waste_by']) && $workData['sow']['pc_selections']['plug_waste_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][plug_waste_by]" value="owner" {{ isset($workData['sow']['pc_selections']['plug_waste_by']) && $workData['sow']['pc_selections']['plug_waste_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][plug_waste_na]" value="na" {{ isset($workData['sow']['pc_selections']['plug_waste_na']) && $workData['sow']['pc_selections']['plug_waste_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Shower screen</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_brand]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_brand']) ? $workData['sow']['pc_selections']['shower_screen_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_model]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_model']) ? $workData['sow']['pc_selections']['shower_screen_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_supplier]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_supplier']) ? $workData['sow']['pc_selections']['shower_screen_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_colour]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_colour']) ? $workData['sow']['pc_selections']['shower_screen_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_qty]" value="{{ isset($workData['sow']['pc_selections']['shower_screen_qty']) ? $workData['sow']['pc_selections']['shower_screen_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="builder" {{ isset($workData['sow']['pc_selections']['shower_screen_by']) && $workData['sow']['pc_selections']['shower_screen_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="owner" {{ isset($workData['sow']['pc_selections']['shower_screen_by']) && $workData['sow']['pc_selections']['shower_screen_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_na]" value="na" {{ isset($workData['sow']['pc_selections']['shower_screen_na']) && $workData['sow']['pc_selections']['shower_screen_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row">Shower rose</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Shower taps</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Shower soap holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row">Floor grate</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_brand]" value="{{ isset($workData['floor_grate_brand']) ? $workData['floor_grate_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_model]" value="{{ isset($workData['floor_grate_model']) ? $workData['floor_grate_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_supplier]" value="{{ isset($workData['floor_grate_supplier']) ? $workData['floor_grate_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_colour]" value="{{ isset($workData['floor_grate_colour']) ? $workData['floor_grate_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][floor_grate_qty]" value="{{ isset($workData['floor_grate_qty']) ? $workData['floor_grate_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="builder" {{ isset($workData['floor_grate_by']) && $workData['floor_grate_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_by]" value="owner" {{ isset($workData['floor_grate_by']) && $workData['floor_grate_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][floor_grate_na]" value="na" {{ isset($workData['floor_grate_na']) && $workData['floor_grate_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Hand towel ring</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_brand]" value="{{ isset($workData['hand_towel_ring_brand']) ? $workData['hand_towel_ring_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_model]" value="{{ isset($workData['hand_towel_ring_model']) ? $workData['hand_towel_ring_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_supplier]" value="{{ isset($workData['hand_towel_ring_supplier']) ? $workData['hand_towel_ring_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_colour]" value="{{ isset($workData['hand_towel_ring_colour']) ? $workData['hand_towel_ring_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][hand_towel_ring_qty]" value="{{ isset($workData['hand_towel_ring_qty']) ? $workData['hand_towel_ring_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_by]" value="builder" {{ isset($workData['hand_towel_ring_by']) && $workData['hand_towel_ring_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_by]" value="owner" {{ isset($workData['hand_towel_ring_by']) && $workData['hand_towel_ring_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][hand_towel_ring_na]" value="na" {{ isset($workData['hand_towel_ring_na']) && $workData['hand_towel_ring_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Towel rail</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_brand]" value="{{ isset($workData['towel_rail_brand']) ? $workData['towel_rail_brand'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_model]" value="{{ isset($workData['towel_rail_model']) ? $workData['towel_rail_model'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_supplier]" value="{{ isset($workData['towel_rail_supplier']) ? $workData['towel_rail_supplier'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_colour]" value="{{ isset($workData['towel_rail_colour']) ? $workData['towel_rail_colour'] : '' }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][towel_rail_qty]" value="{{ isset($workData['towel_rail_qty']) ? $workData['towel_rail_qty'] : '' }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_by]" value="builder" {{ isset($workData['towel_rail_by']) && $workData['towel_rail_by'] == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_by]" value="owner" {{ isset($workData['towel_rail_by']) && $workData['towel_rail_by'] == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][towel_rail_na]" value="na" {{ isset($workData['towel_rail_na']) && $workData['towel_rail_na'] == 'na' ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Shower soap holder</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_brand]" value="{{ old('sow.pc_selections.shower_soap_holder_brand') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_model]" value="{{ old('sow.pc_selections.shower_soap_holder_model') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_supplier]" value="{{ old('sow.pc_selections.shower_soap_holder_supplier') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_colour]" value="{{ old('sow.pc_selections.shower_soap_holder_colour') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_soap_holder_qty]" value="{{ old('sow.pc_selections.shower_soap_holder_qty') }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="builder" {{ old('sow.pc_selections.shower_soap_holder_by') == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_by]" value="owner" {{ old('sow.pc_selections.shower_soap_holder_by') == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_soap_holder_na]" value="na" {{ old('sow.pc_selections.shower_soap_holder_na') == 'na' ? 'checked' : '' }}></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Mirror</th>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_brand]" value="{{ old('sow.pc_selections.mirror_brand') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_model]" value="{{ old('sow.pc_selections.mirror_model') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_supplier]" value="{{ old('sow.pc_selections.mirror_supplier') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_colour]" value="{{ old('sow.pc_selections.mirror_colour') }}"></td>
                                                            <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][mirror_qty]" value="{{ old('sow.pc_selections.mirror_qty') }}"></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror_by]" value="builder" {{ old('sow.pc_selections.mirror_by') == 'builder' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror_by]" value="owner" {{ old('sow.pc_selections.mirror_by') == 'owner' ? 'checked' : '' }}></td>
                                                            <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][mirror_na]" value="na" {{ old('sow.pc_selections.mirror_na') == 'na' ? 'checked' : '' }}></td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="powder_wet_areas" class="me-3 mb-0">Notes to above:</label> <!-- Increased margin-end -->
                                            <input type="text" class="form-control form-control-sm w-100 border-0 border-bottom"
                                                name="sow[site_work][powder_wet_areas]" id="powder_wet_areas"
                                                placeholder="Enter powder wet areas notes" value="{{ old('sow.site_work.powder_wet_areas') }}">
                                        </div>

                                    </div>




                                    <div class="card p-3 mb-3">
                                        <div class="custom-resp-table">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Brand</th>
                                                        <th>Model / Style</th>
                                                        <th>Supplier</th>
                                                        <th>Colour</th>
                                                        <th>$ or Qty</th>
                                                        <th colspan="3" class="text-center">( Tick One )</th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="text-center">By Builder</th>
                                                        <th class="text-center">By Owner</th>
                                                        <th class="text-center">N /A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table Rows -->
                                                    <tr>
                                                        <th scope="row">Toilet & Cistern</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_brand]" value="{{ isset($workData['pc_selections']['oven_brand']) ? $workData['pc_selections']['oven_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_model]" value="{{ isset($workData['pc_selections']['oven_model']) ? $workData['pc_selections']['oven_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_supplier]" value="{{ isset($workData['pc_selections']['oven_supplier']) ? $workData['pc_selections']['oven_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_colour]" value="{{ isset($workData['pc_selections']['oven_colour']) ? $workData['pc_selections']['oven_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][oven_qty]" value="{{ isset($workData['pc_selections']['oven_qty']) ? $workData['pc_selections']['oven_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="builder" {{ isset($workData['pc_selections']['oven_by']) && $workData['pc_selections']['oven_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_by]" value="owner" {{ isset($workData['pc_selections']['oven_by']) && $workData['pc_selections']['oven_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][oven_na]" value="na" {{ isset($workData['pc_selections']['oven_na']) && $workData['pc_selections']['oven_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Toilet roll holder</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_brand]" value="{{ isset($workData['pc_selections']['cooktop_brand']) ? $workData['pc_selections']['cooktop_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_model]" value="{{ isset($workData['pc_selections']['cooktop_model']) ? $workData['pc_selections']['cooktop_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_supplier]" value="{{ isset($workData['pc_selections']['cooktop_supplier']) ? $workData['pc_selections']['cooktop_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_colour]" value="{{ isset($workData['pc_selections']['cooktop_colour']) ? $workData['pc_selections']['cooktop_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][cooktop_qty]" value="{{ isset($workData['pc_selections']['cooktop_qty']) ? $workData['pc_selections']['cooktop_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="builder" {{ isset($workData['pc_selections']['cooktop_by']) && $workData['pc_selections']['cooktop_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_by]" value="owner" {{ isset($workData['pc_selections']['cooktop_by']) && $workData['pc_selections']['cooktop_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][cooktop_na]" value="na" {{ isset($workData['pc_selections']['cooktop_na']) && $workData['pc_selections']['cooktop_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Bath</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_brand]" value="{{ isset($workData['pc_selections']['rangehood_brand']) ? $workData['pc_selections']['rangehood_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_model]" value="{{ isset($workData['pc_selections']['rangehood_model']) ? $workData['pc_selections']['rangehood_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_supplier]" value="{{ isset($workData['pc_selections']['rangehood_supplier']) ? $workData['pc_selections']['rangehood_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_colour]" value="{{ isset($workData['pc_selections']['rangehood_colour']) ? $workData['pc_selections']['rangehood_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][rangehood_qty]" value="{{ isset($workData['pc_selections']['rangehood_qty']) ? $workData['pc_selections']['rangehood_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="builder" {{ isset($workData['pc_selections']['rangehood_by']) && $workData['pc_selections']['rangehood_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][rangehood_by]" value="owner" {{ isset($workData['pc_selections']['rangehood_by']) && $workData['pc_selections']['rangehood_by'] == 'owner' ? 'checked' : '' }}></td>

                                                    <tr>
                                                        <th scope="row">Bath taps</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath plug & waste</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bath soap holder</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Vanity</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Vanity taps</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Vanity plug & waste</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['dishwasher_brand']) ? $workData['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['dishwasher_model']) ? $workData['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['dishwasher_supplier']) ? $workData['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['dishwasher_colour']) ? $workData['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['dishwasher_qty']) ? $workData['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['dishwasher_by']) && $workData['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['dishwasher_na']) && $workData['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">Shower screen</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_brand]" value="{{ isset($workData['shower_screen_brand']) ? $workData['shower_screen_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_model]" value="{{ isset($workData['shower_screen_model']) ? $workData['shower_screen_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_supplier]" value="{{ isset($workData['shower_screen_supplier']) ? $workData['shower_screen_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_colour]" value="{{ isset($workData['shower_screen_colour']) ? $workData['shower_screen_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_screen_qty]" value="{{ isset($workData['shower_screen_qty']) ? $workData['shower_screen_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="builder" {{ isset($workData['shower_screen_by']) && $workData['shower_screen_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_by]" value="owner" {{ isset($workData['shower_screen_by']) && $workData['shower_screen_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_screen_na]" value="na" {{ isset($workData['shower_screen_na']) && $workData['shower_screen_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Shower rose</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_brand]" value="{{ isset($workData['shower_rose_brand']) ? $workData['shower_rose_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_model]" value="{{ isset($workData['shower_rose_model']) ? $workData['shower_rose_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_supplier]" value="{{ isset($workData['shower_rose_supplier']) ? $workData['shower_rose_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_colour]" value="{{ isset($workData['shower_rose_colour']) ? $workData['shower_rose_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_rose_qty]" value="{{ isset($workData['shower_rose_qty']) ? $workData['shower_rose_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_by]" value="builder" {{ isset($workData['shower_rose_by']) && $workData['shower_rose_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_by]" value="owner" {{ isset($workData['shower_rose_by']) && $workData['shower_rose_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_rose_na]" value="na" {{ isset($workData['shower_rose_na']) && $workData['shower_rose_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Shower taps</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_brand]" value="{{ isset($workData['shower_taps_brand']) ? $workData['shower_taps_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_model]" value="{{ isset($workData['shower_taps_model']) ? $workData['shower_taps_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_supplier]" value="{{ isset($workData['shower_taps_supplier']) ? $workData['shower_taps_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_colour]" value="{{ isset($workData['shower_taps_colour']) ? $workData['shower_taps_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][shower_taps_qty]" value="{{ isset($workData['shower_taps_qty']) ? $workData['shower_taps_qty'] : '' }}"></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_by]" value="builder" {{ isset($workData['shower_taps_by']) && $workData['shower_taps_by'] == 'builder' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_by]" value="owner" {{ isset($workData['shower_taps_by']) && $workData['shower_taps_by'] == 'owner' ? 'checked' : '' }}></td>
                                                        <td class="text-center"><input type="radio" class="form-check-input" name="sow[pc_selections][shower_taps_na]" value="na" {{ isset($workData['shower_taps_na']) && $workData['shower_taps_na'] == 'na' ? 'checked' : '' }}></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Shower soap holder</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Floor grate</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Hand towel ring</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Towel rail</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Mirror</th>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_brand]" value="{{ isset($workData['pc_selections']['dishwasher_brand']) ? $workData['pc_selections']['dishwasher_brand'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_model]" value="{{ isset($workData['pc_selections']['dishwasher_model']) ? $workData['pc_selections']['dishwasher_model'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_supplier]" value="{{ isset($workData['pc_selections']['dishwasher_supplier']) ? $workData['pc_selections']['dishwasher_supplier'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_colour]" value="{{ isset($workData['pc_selections']['dishwasher_colour']) ? $workData['pc_selections']['dishwasher_colour'] : '' }}"></td>
                                                        <td><input type="text" class="form-control form-control-sm" name="sow[pc_selections][dishwasher_qty]" value="{{ isset($workData['pc_selections']['dishwasher_qty']) ? $workData['pc_selections']['dishwasher_qty'] : '' }}"></td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="builder" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'builder' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_by]" value="owner" {{ isset($workData['pc_selections']['dishwasher_by']) && $workData['pc_selections']['dishwasher_by'] == 'owner' ? 'checked' : '' }}>
                                                        </td>
                                                        <td class="text-center">
                                                            <input type="radio" class="form-check-input" name="sow[pc_selections][dishwasher_na]" value="na" {{ isset($workData['pc_selections']['dishwasher_na']) && $workData['pc_selections']['dishwasher_na'] == 'na' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fw-bold">General Notes to PC Selections:</h5>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[site_work][general_notes_to_pc_selections]" id="general_notes_to_pc_selections"
                                                placeholder="Enter general notes to pc selections notes"
                                                value="{{ isset($workData['site_work']['general_notes_to_pc_selections']) ? $workData['site_work']['general_notes_to_pc_selections'] : '' }}">

                                        </div>
                                        <div class="mt-3">
                                            <p><strong>Note:</strong> Special fixing points or blocking may be required for wall-hung vanities and some shower screens. This should be checked with the manufacturer before wall and ceiling linings are installed.</p>
                                        </div>
                                    </div>


                                    <div style=" display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;">

                                        <div style="text-align: right;
                font-size: 0.9em;
                color: #555;">

                                        </div>
                                    </div>
                                    <table
                                        style="
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        ">
                                        <tbody>
                                            <tr>
                                                <td
                                                    colspan="3"
                                                    style="
                        background: black;
                        color: white;
                        font-weight: bold;
                        text-align: center;
                        padding: 10px;
                    ">
                                                    15) OTHER PC AMOUNTS & ADDITIONAL NOTES </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card p-3 mb-3">
                                        <h4>15) OTHER PC AMOUNTS & ADDITIONAL NOTES</h4>

                                        <hr class="mb-4">

                                        <div class="form-group">
                                            <label for="additionalNotes">General Notes to PC Selections:</label>
                                            <textarea class="form-control" id="additionalNotes" name="sow[additionalnotes][additional_notes]" rows="10">
                                            {{ isset($workData['additionalnotes']['additional_notes']) ? $workData['additionalnotes']['additional_notes'] : '' }}
                                            </textarea>
                                        </div>

                                    </div>


                                    <div class="card p-3 mb-3">
                                        <h4>16) SCHEDULE OF PROVISIONAL SUMS</h4>
                                        <div class="custom-resp-table">
                                            <table class="table table-bordered table-sm">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" class="align-middle">Section</th>
                                                        <th scope="col" class="align-middle">Sub Section</th>
                                                        <th scope="col" class="text-center align-middle">Page</th>
                                                        <th scope="col" class="text-right align-middle">$ Amount (Inc.GST)</th>
                                                        <th scope="col" class="text-center align-middle">N/A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" rowspan="8" class="align-middle font-weight-medium">1) Site / Works</th>
                                                        <td>1.1 Access road</td>
                                                        <td class="text-center align-middle">6</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][access_road_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['access_road_value']) ? $workData['schedule_of_provisional_sum']['access_road_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][access_road_radio]" value="access_road_radio" {{ isset($workData['schedule_of_provisional_sum']['access_road_radio']) && $workData['schedule_of_provisional_sum']['access_road_radio'] == 'access_road_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.2 Site clearing</td>
                                                        <td class="text-center align-middle">6</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][site_clearing_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['site_clearing_value']) ? $workData['schedule_of_provisional_sum']['site_clearing_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][site_clearing_radio]" value="site_clearing_radio" {{ isset($workData['schedule_of_provisional_sum']['site_clearing_radio']) && $workData['schedule_of_provisional_sum']['site_clearing_radio'] == 'site_clearing_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.3 Excavation</td>
                                                        <td class="text-center align-middle">6</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][excavation_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['excavation_value']) ? $workData['schedule_of_provisional_sum']['excavation_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][excavation_radio]" value="excavation_radio" {{ isset($workData['schedule_of_provisional_sum']['excavation_radio']) && $workData['schedule_of_provisional_sum']['excavation_radio'] == 'excavation_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.4 Remove soil & tree debris</td>
                                                        <td class="text-center align-middle">6</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][remove_soil_tree_debris_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['remove_soil_tree_debris_value']) ? $workData['schedule_of_provisional_sum']['remove_soil_tree_debris_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][remove_soil_tree_debris_radio]" value="remove_soil_tree_debris_radio" {{ isset($workData['schedule_of_provisional_sum']['remove_soil_tree_debris_radio']) && $workData['schedule_of_provisional_sum']['remove_soil_tree_debris_radio'] == 'remove_soil_tree_debris_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.6 Water to site</td>
                                                        <td class="text-center align-middle">7</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][water_to_site_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['water_to_site_value']) ? $workData['schedule_of_provisional_sum']['water_to_site_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][water_to_site_radio]" value="water_to_site_radio" {{ isset($workData['schedule_of_provisional_sum']['water_to_site_radio']) && $workData['schedule_of_provisional_sum']['water_to_site_radio'] == 'water_to_site_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.7 Site clean & Internal clean</td>
                                                        <td class="text-center align-middle">7</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][site_internal_clean_value]" class="form-control text-right" value="{{ isset($workData['schedule_of_provisional_sum']['site_internal_clean_value']) ? $workData['schedule_of_provisional_sum']['site_internal_clean_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][site_internal_clean_radio]" value="site_internal_clean_radio" {{ isset($workData['schedule_of_provisional_sum']['site_internal_clean_radio']) && $workData['schedule_of_provisional_sum']['site_internal_clean_radio'] == 'site_internal_clean_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>1.8 Other</td>
                                                        <td class="text-center align-middle">7</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][other_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['other_value']) ? $workData['sow']['schedule_of_provisional_sum']['other_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][other_radio]" value="other_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['other_radio']) && $workData['sow']['schedule_of_provisional_sum']['other_radio'] == 'other_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="2" class="align-middle font-weight-medium">3) Drainer / Plumber</th>
                                                        <td>3.2 Sewerage System</td>
                                                        <td class="text-center align-middle">10</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][sewerage_system_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['sewerage_system_value']) ? $workData['sow']['schedule_of_provisional_sum']['sewerage_system_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][sewerage_system_radio]" value="sewerage_system_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['sewerage_system_radio']) && $workData['sow']['schedule_of_provisional_sum']['sewerage_system_radio'] == 'sewerage_system_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3.5 Hot Water Services</td>
                                                        <td class="text-center align-middle">12</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][hot_water_services_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['hot_water_services_value']) ? $workData['sow']['schedule_of_provisional_sum']['hot_water_services_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][hot_water_services_radio]" value="hot_water_services_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['hot_water_services_radio']) && $workData['sow']['schedule_of_provisional_sum']['hot_water_services_radio'] == 'hot_water_services_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="2" class="align-middle font-weight-medium">4) Carpenter (External)</th>
                                                        <td>4.7 External stairs</td>
                                                        <td class="text-center align-middle">15</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][external_stairs_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['external_stairs_value']) ? $workData['sow']['schedule_of_provisional_sum']['external_stairs_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][external_stairs_radio]" value="external_stairs_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['external_stairs_radio']) && $workData['sow']['schedule_of_provisional_sum']['external_stairs_radio'] == 'external_stairs_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4.12 External balustrade</td>
                                                        <td class="text-center align-middle">18</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][external_balustrade_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['external_balustrade_value']) ? $workData['sow']['schedule_of_provisional_sum']['external_balustrade_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][external_balustrade_radio]" value="external_balustrade_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['external_balustrade_radio']) && $workData['sow']['schedule_of_provisional_sum']['external_balustrade_radio'] == 'external_balustrade_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="2" class="align-middle font-weight-medium">8) Windows & Entry Doors</th>
                                                        <td>8.6 Security doors</td>
                                                        <td class="text-center align-middle">37</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][security_doors_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['security_doors_value']) ? $workData['sow']['schedule_of_provisional_sum']['security_doors_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][security_doors_radio]" value="security_doors_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['security_doors_radio']) && $workData['sow']['schedule_of_provisional_sum']['security_doors_radio'] == 'security_doors_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>8.7 Security window shutters</td>
                                                        <td class="text-center align-middle">37</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][security_window_shutters_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['security_window_shutters_value']) ? $workData['sow']['schedule_of_provisional_sum']['security_window_shutters_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][security_window_shutters_radio]" value="security_window_shutters_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['security_window_shutters_radio']) && $workData['sow']['schedule_of_provisional_sum']['security_window_shutters_radio'] == 'security_window_shutters_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="4" class="align-middle font-weight-medium">9) Electrician</th>
                                                        <td>9.1 Power to site</td>
                                                        <td class="text-center align-middle">39</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][power_to_site_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['power_to_site_value']) ? $workData['sow']['schedule_of_provisional_sum']['power_to_site_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][power_to_site_radio]" value="power_to_site_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['power_to_site_radio']) && $workData['sow']['schedule_of_provisional_sum']['power_to_site_radio'] == 'power_to_site_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9.2 Connection to dwelling (Connection Fee)</td>
                                                        <td class="text-center align-middle">39</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][connection_to_dwelling_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_value']) ? $workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][connection_to_dwelling_radio]" value="connection_to_dwelling_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_radio']) && $workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_radio'] == 'connection_to_dwelling_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9.2 Connection to dwelling (Connection Type)</td>
                                                        <td class="text-center align-middle">39</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][connection_to_dwelling_type_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_type_value']) ? $workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_type_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][connection_to_dwelling_type_radio]" value="connection_to_dwelling_type_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_type_radio']) && $workData['sow']['schedule_of_provisional_sum']['connection_to_dwelling_type_radio'] == 'connection_to_dwelling_type_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9.3 Electrical Wiring (Internal Wiring)</td>
                                                        <td class="text-center align-middle">40</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][electrical_wiring_internal_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['electrical_wiring_internal_value']) ? $workData['sow']['schedule_of_provisional_sum']['electrical_wiring_internal_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][electrical_wiring_internal_radio]" value="electrical_wiring_internal_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['electrical_wiring_internal_radio']) && $workData['sow']['schedule_of_provisional_sum']['electrical_wiring_internal_radio'] == 'electrical_wiring_internal_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="4" class="align-middle font-weight-medium">11) Kitchen & Joinery</th>
                                                        <td>11.1 Kitchen Supply</td>
                                                        <td class="text-center align-middle">44</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][kitchen_supply_value]" class="form-control text-right" value="{{ isset($workData['sow']['schedule_of_provisional_sum']['kitchen_supply_value']) ? $workData['sow']['schedule_of_provisional_sum']['kitchen_supply_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][kitchen_supply_radio]" value="kitchen_supply_radio" {{ isset($workData['sow']['schedule_of_provisional_sum']['kitchen_supply_radio']) && $workData['sow']['schedule_of_provisional_sum']['kitchen_supply_radio'] == 'kitchen_supply_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11.3 Laundry Tub / Unit</td>
                                                        <td class="text-center align-middle">45</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][laundry_tub_unit_value]" class="form-control text-right" value="{{ isset($workData['laundry_tub_unit_value']) ? $workData['laundry_tub_unit_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][laundry_tub_unit_radio]" value="laundry_tub_unit_radio" {{ isset($workData['laundry_tub_unit_radio']) && $workData['laundry_tub_unit_radio'] == 'laundry_tub_unit_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11.5 Internal staircases</td>
                                                        <td class="text-center align-middle">45</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][internal_staircases_value]" class="form-control text-right" value="{{ isset($workData['internal_staircases_value']) ? $workData['internal_staircases_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][internal_staircases_radio]" value="internal_staircases_radio" {{ isset($workData['internal_staircases_radio']) && $workData['internal_staircases_radio'] == 'internal_staircases_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11.5 Internal balustrade</td>
                                                        <td class="text-center align-middle">45</td>
                                                        <td class="text-right align-middle">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][internal_balustrade_value]" class="form-control text-right" value="{{ isset($workData['internal_balustrade_value']) ? $workData['internal_balustrade_value'] : 0 }}">
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][internal_balustrade_radio]" value="internal_balustrade_radio" {{ isset($workData['internal_balustrade_radio']) && $workData['internal_balustrade_radio'] == 'internal_balustrade_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" rowspan="5" class="align-middle font-weight-medium">Other Provisional Sums</th>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][other_provisional_name]" class="form-control form-control-sm" placeholder="Enter item name" value="{{ isset($workData['other_provisional_name']) ? $workData['other_provisional_name'] : '' }}"></td>
                                                        <td class="text-center align-middle"></td>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][other_provisional_value]" class="form-control form-control-sm text-right" placeholder="Enter value" value="{{ isset($workData['other_provisional_value']) ? $workData['other_provisional_value'] : '' }}"></td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][other_provisional_radio]" value="other_provisional_radio" {{ isset($workData['other_provisional_radio']) && $workData['other_provisional_radio'] == 'other_provisional_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_item]" class="form-control form-control-sm" placeholder="Enter item name" value="{{ isset($workData['provisional_item']) ? $workData['provisional_item'] : '' }}"></td>
                                                        <td class="text-center align-middle"></td>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_value]" class="form-control form-control-sm text-right" placeholder="Enter value" value="{{ isset($workData['provisional_value']) ? $workData['provisional_value'] : '' }}"></td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][provisional_radio]" value="provisional_radio" {{ isset($workData['provisional_radio']) && $workData['provisional_radio'] == 'provisional_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_item]" class="form-control form-control-sm" placeholder="Enter item name" value="{{ isset($workData['provisional_item']) ? $workData['provisional_item'] : '' }}"></td>
                                                        <td class="text-center align-middle"></td>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_value]" class="form-control form-control-sm text-right" placeholder="Enter value" value="{{ isset($workData['provisional_value']) ? $workData['provisional_value'] : '' }}"></td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][provisional_radio]" value="provisional_radio" {{ isset($workData['provisional_radio']) && $workData['provisional_radio'] == 'provisional_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_item]" class="form-control form-control-sm" placeholder="Enter item name" value="{{ isset($workData['provisional_item']) ? $workData['provisional_item'] : '' }}"></td>
                                                        <td class="text-center align-middle"></td>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_value]" class="form-control form-control-sm text-right" placeholder="Enter value" value="{{ isset($workData['provisional_value']) ? $workData['provisional_value'] : '' }}"></td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][provisional_radio]" value="provisional_radio" {{ isset($workData['provisional_radio']) && $workData['provisional_radio'] == 'provisional_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_item]" class="form-control form-control-sm" placeholder="Enter item name" value="{{ isset($workData['provisional_item']) ? $workData['provisional_item'] : '' }}"></td>
                                                        <td class="text-center align-middle"></td>
                                                        <td><input type="text" name="sow[schedule_of_provisional_sum][provisional_value]" class="form-control form-control-sm text-right" placeholder="Enter value" value="{{ isset($workData['provisional_value']) ? $workData['provisional_value'] : '' }}"></td>
                                                        <td class="text-center align-middle">
                                                            <input type="radio" class="form-check-input" name="sow[schedule_of_provisional_sum][provisional_radio]" value="provisional_radio" {{ isset($workData['provisional_radio']) && $workData['provisional_radio'] == 'provisional_radio' ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="row" colspan="3" class="text-right align-middle font-weight-bold">Total of Provisional Sums</th>
                                                        <td class="text-right align-middle font-weight-bold">
                                                            <input type="number" name="sow[schedule_of_provisional_sum][total_provisional_sums]" class="form-control form-control-sm text-right font-weight-bold" id="totalProvisionalSums" value="{{ isset($workData['total_provisional_sums']) ? $workData['total_provisional_sums'] : '' }}">
                                                        </td>
                                                        <td></td>
                                                    </tr>

                                                </tfoot>

                                            </table>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <!-- Label and Input -->
                                            <label for="schedule_of_provisional_sums" class="me-2 mb-0">Notes to above:</label>
                                            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                                                name="sow[schedule_of_provisional_sum][schedule_of_provisional_sums]" id="schedule_of_provisional_sums"
                                                placeholder="Enter schedule of provisional sums notes"
                                                value="{{ isset($workData['schedule_of_provisional_sums']) ? $workData['schedule_of_provisional_sums'] : '' }}">
                                        </div>

                                    </div>

                                    <div class="text-center mt-4">
                                        <!-- Update Submission Data button -->
                                        <button type="submit" class="btn btn-success" name="action" value="save">
                                            Update Submission Data
                                        </button>

                                        <!-- Update & Send Email button -->
                                        <button type="submit" class="btn btn-success" name="action" value="save_send">
                                            Update & Send Email
                                        </button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection