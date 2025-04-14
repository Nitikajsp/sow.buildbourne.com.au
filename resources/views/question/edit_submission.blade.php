@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

@endpush





@section('content')

<div id="app" class="layout-wrapper">
    @include('include.sidebar')
    <div class="main-content">
        @include('include.navbar')
        <div class="container mt-4">
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