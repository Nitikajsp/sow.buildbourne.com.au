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

                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.1 Access Road to Site ðŸš§ ðŸ”‘
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px; vertical-align: middle;">
                                                        <input type="checkbox" disabled
                                                            {{ isset($workData['sow']['site_work']['access_road']) && in_array('builder', (array)$workData['sow']['site_work']['access_road']) ? 'checked' : '' }}
                                                            style="background-color: transparent; vertical-align: middle;" />
                                                        By Builder
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="line-height: 20px; vertical-align: middle;">
                                                        <input type="checkbox" disabled
                                                            {{ isset($workData['sow']['site_work']['access_road']) && in_array('owner', (array)$workData['sow']['site_work']['access_road']) ? 'checked' : '' }}
                                                            style="background-color: transparent; vertical-align: middle;" />
                                                        By Owner
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="line-height: 20px; vertical-align: middle;">
                                                        <input type="checkbox" disabled
                                                            {{ isset($workData['sow']['site_work']['access_road']) && in_array('na', (array)$workData['sow']['site_work']['access_road']) ? 'checked' : '' }}
                                                            style="background-color: transparent; vertical-align: middle;" />
                                                        N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['access_road_option']) && $workData['sow']['site_work']['access_road_option'] == 'fixed_price' ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>2) Provisional Sum
                                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['access_road_option']) && $workData['sow']['site_work']['access_road_option'] == 'provisional_sum' ? 'checked' : '' }} />
                                                        </label>
                                                        <div style="display: flex; align-items: center; gap: 10px; border: 1px dashed green; padding: 5px; font-size: 14px; background: #f0fdf4;">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/561/561094.png" alt="Dollar Icon" style="width: 20px; height: 20px;" />
                                                            Amount to be shown at Section 16 <br />
                                                            <strong>"Schedule of Provisional Sums"</strong>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.2 Site Clearing
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['site_clearing_by']) && in_array('builder', (array)$workData['sow']['site_work']['site_clearing_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['site_clearing_by']) && in_array('owner', (array)$workData['sow']['site_work']['site_clearing_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['site_clearing_by']) && in_array('na', (array)$workData['sow']['site_work']['site_clearing_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['site_clearing_option']) && $workData['sow']['site_work']['site_clearing_option'] == 'fixed_price' ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['site_clearing_option']) && $workData['sow']['site_work']['site_clearing_option'] == 'provisional_sum' ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.3 Excavation of Site
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['excavation_by']) && in_array('builder', (array)$workData['sow']['site_work']['excavation_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['excavation_by']) && in_array('owner', (array)$workData['sow']['site_work']['excavation_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['excavation_by']) && in_array('na', (array)$workData['sow']['site_work']['excavation_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['excavation_type']) && $workData['sow']['site_work']['excavation_type'] == 'fixed_price' ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['excavation_type']) && $workData['sow']['site_work']['excavation_type'] == 'provisional_sum' ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.4 Removal of Soil & Tree Debris
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('builder', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('owner', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('na', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_type']) && $workData['sow']['site_work']['removal_type'] == 'fixed_price' ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_type']) && $workData['sow']['site_work']['removal_type'] == 'provisional_sum' ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.5 Initial Power to Site
                                </td>
                                <td style="width: 20%"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div style="margin-left: 20px">
                                        <div>
                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['power_supply']) && in_array('owner', (array)$workData['sow']['site_work']['power_supply']) ? 'checked' : '' }} />
                                            To site by owner
                                        </div>
                                        <div>
                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['power_supply']) && in_array('aerial', (array)$workData['sow']['site_work']['power_supply']) ? 'checked' : '' }} />
                                            Aerial temporary by builder
                                            <small>(Aerial mains supply to temporary power pole)</small>
                                        </div>
                                        <div>
                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['power_supply']) && in_array('underground', (array)$workData['sow']['site_work']['power_supply']) ? 'checked' : '' }} />
                                            Underground temporary by builder
                                            <small>(Underground mains supply to meter box on stand)</small>
                                        </div>
                                        <div>
                                            <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['power_supply']) && in_array('generator', (array)$workData['sow']['site_work']['power_supply']) ? 'checked' : '' }} />
                                            Generator temporary by builder
                                            <small>(Hire rate as allowed in the contract price)</small>
                                        </div>
                                        <p style="font-size: 0.8em; color: #777; margin-left: 20px">
                                            <strong>Note :</strong>
                                            <em>
                                                If required - temporary power by generator will be at a weekly hire rate of $165.00 inc. GST.
                                            </em>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.6 Water to Site
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('builder', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('owner', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('na', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('fixed_price', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('provisional_sum', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.7 Site Clean (During Construction)
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('builder', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('owner', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('na', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('fixed_price', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('provisional_sum', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.8 Internal Clean (Prior to Handover)
                                </td>
                                <td style="width: 20%"></td>
                                <td>

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('builder', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Builder
                                                    </label>
                                                </td>
                                                <td>


                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('owner', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />By Owner
                                                    </label>
                                                </td>
                                                <td>

                                                    <label style="line-height: 20px;vertical-align:middle ">
                                                        <input type="checkbox" disabled {{ isset($workData['sow']['site_work']['removal_by']) && in_array('na', (array)$workData['sow']['site_work']['removal_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />N/A
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td>If by builder:</td>
                                                <td colspan="2">
                                                    1) Fixed price included in quote
                                                    <input type="checkbox" disabled
                                                        {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('fixed_price', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><em>Or</em></td>
                                                <td colspan="2">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <label>
                                                            2) Provisional Sum
                                                            <input type="checkbox" disabled
                                                                {{ (isset($workData['sow']['site_work']['removal_type']) && in_array('provisional_sum', (array)$workData['sow']['site_work']['removal_type'])) ? 'checked' : '' }} />
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.9 Termite Protection
                                </td>
                                <td style="width: 20%"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    1) Request further protection:

                                                    Yes <input type="checkbox" disabled
                                                        {{ isset($workData['sow']['site_work']['termite_protection_request']) && in_array('yes', (array)$workData['sow']['site_work']['termite_protection_request']) ? 'checked' : '' }} />
                                                    No <input type="checkbox" disabled
                                                        {{ isset($workData['sow']['site_work']['termite_protection_request']) && in_array('no', (array)$workData['sow']['site_work']['termite_protection_request']) ? 'checked' : '' }} />

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label>
                                                        <input type="checkbox" disabled
                                                            {{ isset($workData['sow']['site_work']['termite_protection_by']) && in_array('builder', (array)$workData['sow']['site_work']['termite_protection_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />
                                                        By Builder
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" disabled
                                                            {{ isset($workData['sow']['site_work']['termite_protection_by']) && in_array('owner', (array)$workData['sow']['site_work']['termite_protection_by']) ? 'checked' : '' }} style="background-color:transparent; vertical-align:middle ;" />
                                                        By Owner
                                                    </label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div style="margin-left: 20px">
                                                        <label>
                                                            Protection type:
                                                            <textarea disabled
                                                                style=" width: 95%; height: 80px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                                                            {{ isset($workData['sow']['site_work']['termite_protection_type']) ? $workData['sow']['site_work']['termite_protection_type'] : '' }}
                                                            </textarea>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                    <table style="width: 100%; border-collapse: collapse; border: 2px solid black;">
                        <tbody>
                            <tr style="background: #d3d3d3">
                                <td style="width: 40%; font-weight: bold; padding: 8px">
                                    1.10 Site Works Notes
                                </td>
                                <td style="width: 20%"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div style="margin-left: 20px">
                                        <label>Notes to above:</label>
                                        <textarea disabled
                                            style="
                                    width: 95%;
                                    height: 80px;
                                    padding: 8px;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                "
                                            name="sow[site_work][site_works_notes]">{{ isset($workData['sow']['site_work']['site_works_notes']) ? $workData['sow']['site_work']['site_works_notes'] : '' }}</textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection