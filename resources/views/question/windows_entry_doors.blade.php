<div class="card p-3 mb-3">
    <h4>8) WINDOWS & ENTRY DOORS</h4>
    <h5><strong>8.1 Timber Hinged Entry Doors & Sidelights</strong></h5>

    <!-- Door Manufacturer -->
    <div class="mb-3">
        <label><strong>- Standard units by “Hume Doors”</strong></label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="hume_doors" name="door_manufacturer" value="Hume Doors">
            <label class="form-check-label" for="hume_doors">Hume Doors</label>
        </div>
        <span class="mx-2">OR</span>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="other_doors" name="door_manufacturer" value="Other">
            <label class="form-check-label" for="other_doors">Other</label>
        </div>
        <input type="text" name="other_manufacturer" class="form-control mt-2 w-25" placeholder="Manufacturer's Name">
    </div>

    <!-- Doors Section -->
    <div class="mb-3">
        <!-- Entry door -->
        <div class="mb-2">
            <label>- Entry door</label>
            <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="entry_door_selected" value="Yes">
            </div>
            <span class="ms-3">Type:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="entry_door_type">
            <span>Glass:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="entry_door_glass" placeholder="e.g., OBSCURE">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="entry_door_selected" value="NA">
                <label class="form-check-label">N/A</label>
            </div>
        </div>

        <!-- Side lights -->
        <div class="mb-2">
            <label>- Side lights</label>
            <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="side_lights_selected" value="Yes">
            </div>
            <span class="ms-3">Type:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="side_lights_type">
            <span>Glass:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="side_lights_glass">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="side_lights_selected" value="NA">
                <label class="form-check-label">N/A</label>
            </div>
        </div>

        <!-- Laundry door -->
        <div class="mb-2">
            <label>- Laundry door</label>
            <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="laundry_door_selected" value="Yes" checked>
            </div>
            <span class="ms-3">Type:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="laundry_door_type" value="SLIDER">
            <span>Glass:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="laundry_door_glass">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="laundry_door_selected" value="NA">
                <label class="form-check-label">N/A</label>
            </div>
        </div>

        <!-- Garage PA door -->
        <div class="mb-2">
            <label>- Garage P.A door</label>
            <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="garage_pa_selected" value="Yes">
            </div>
            <span class="ms-3">Type:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="garage_pa_type">
            <span>Glass:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="garage_pa_glass">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="garage_pa_selected" value="NA">
                <label class="form-check-label">N/A</label>
            </div>
        </div>

        <!-- Other hinged entry -->
        <div class="mb-2">
            <label>- Other hinged entry</label>
            <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="other_hinged_entry_selected" value="Yes">
            </div>
            <span class="ms-3">Type:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="other_hinged_entry_type">
            <span>Glass:</span>
            <input type="text" class="form-control d-inline-block w-25 mx-2" name="other_hinged_entry_glass">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="other_hinged_entry_selected" value="NA">
                <label class="form-check-label">N/A</label>
            </div>
        </div>
    </div>

    <!-- Notes to above -->
    <div class="mb-3">
        <label><strong>Notes to above:</strong></label>
        <textarea class="form-control" rows="3" name="notes_above" placeholder="Enter notes..."></textarea>
    </div>

    <!-- Hinges -->
    <div class="mb-3">
        <label><strong>- Hinges as applicable:</strong></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hinges" value="Standard FB steel">
            <label class="form-check-label">Standard FB steel</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hinges" value="Zinc coated">
            <label class="form-check-label">Zinc coated</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hinges" value="Brass">
            <label class="form-check-label">Brass</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hinges" value="Stainless steel or Satin Chrome">
            <label class="form-check-label">Stainless steel or Satin Chrome</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hinges" value="Bright Chrome">
            <label class="form-check-label">Bright Chrome</label>
        </div>
    </div>

    <!-- Notes to hinges -->
    <div class="mb-3">
        <label><strong>Notes to above:</strong></label>
        <textarea class="form-control" rows="3" name="hinges_notes" placeholder="Enter notes..."></textarea>
    </div>
</div>

<div class="card p-3 mb-3">
    <h5>8.2 Exterior Timber Door Furniture</h5>

    <!-- Exterior Locks -->
    <div class="mb-3">
        <label><strong>- Exterior locks</strong></label>
        <input type="text" class="form-control mb-2" name="exterior_manufacturer" placeholder="Manufacturer's Name">
        <input type="text" class="form-control" name="exterior_selection" placeholder="Selection">
    </div>

    <!-- Feature Entry Lock -->
    <div class="mb-3">
        <label><strong>- Feature entry lock (@ Extra Cost)</strong></label>
        <input type="text" class="form-control mb-2" name="feature_manufacturer" placeholder="Manufacturer's Name">
        <input type="text" class="form-control mb-2" name="feature_selection" placeholder="Selection">
        <small class="text-muted">Entry only additional to other exterior door locks</small>
        <div class="form-check form-check-inline mt-2">
            <input class="form-check-input" type="radio" name="feature_entry" value="OR" id="feature_or">
            <label class="form-check-label" for="feature_or">OR</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="feature_entry" value="NA" id="feature_na" checked>
            <label class="form-check-label" for="feature_na">N/A</label>
        </div>
    </div>

    <!-- All timber entry's keyed alike -->
    <div class="mb-3">
        <label><strong>- All timber entry's keyed alike:</strong></label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="keyed_alike" value="Yes" id="keyed_yes">
            <label class="form-check-label" for="keyed_yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="keyed_alike" value="No" id="keyed_no">
            <label class="form-check-label" for="keyed_no">No</label>
        </div>
    </div>

    <!-- Deadbolts to doors -->
    <div class="mb-3">
        <label><strong>- Deadbolts to doors:</strong></label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolts" value="No" id="deadbolt_no">
            <label class="form-check-label" for="deadbolt_no">No</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolts" value="Yes" id="deadbolt_yes">
            <label class="form-check-label" for="deadbolt_yes">Yes</label>
        </div>
        <input type="text" class="form-control mt-2" name="deadbolt_manufacturer" placeholder="Manufacturer's Name">
        <input type="text" class="form-control mt-2" name="deadbolt_selection" placeholder="Selection">
    </div>

    <!-- Deadbolt locations -->
    <div class="mb-3">
        <label><strong>- Apply to:</strong></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolt_location" value="Main entry" id="loc_main">
            <label class="form-check-label" for="loc_main">Main entry</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolt_location" value="Garage" id="loc_garage">
            <label class="form-check-label" for="loc_garage">Garage</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolt_location" value="Laundry" id="loc_laundry">
            <label class="form-check-label" for="loc_laundry">Laundry</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="deadbolt_location" value="Other" id="loc_other">
            <label class="form-check-label" for="loc_other">Other</label>
        </div>
        <input type="text" class="form-control mt-2 w-50" name="deadbolt_other" placeholder="Specify other">
    </div>

    <!-- Bolt options -->
    <div class="mb-3">
        <label><strong>- Standard barrel bolts to double timber entry doors</strong></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="standard_barrel" value="Yes" id="barrel_yes">
            <label class="form-check-label" for="barrel_yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="standard_barrel" value="NA" id="barrel_na">
            <label class="form-check-label" for="barrel_na">N/A</label>
        </div>
    </div>

    <div class="mb-3">
        <label><strong>- Slide bolts to double timber entry doors (@ Extra Cost)</strong></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="slide_bolt" value="Yes" id="slide_yes">
            <label class="form-check-label" for="slide_yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="slide_bolt" value="NA" id="slide_na">
            <label class="form-check-label" for="slide_na">N/A</label>
        </div>
    </div>

    <div class="mb-3">
        <label><strong>- Keyed bolts to double timber entry doors (@ Extra Cost)</strong></label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="keyed_bolt" value="Yes" id="keyedbolt_yes">
            <label class="form-check-label" for="keyedbolt_yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="keyed_bolt" value="NA" id="keyedbolt_na">
            <label class="form-check-label" for="keyedbolt_na">N/A</label>
        </div>
    </div>

    <!-- Colour Selection -->
    <div class="mb-3">
        <label><strong>- Colour Selection</strong></label><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color_selection" value="Bright chrome" id="color1">
            <label class="form-check-label" for="color1">Bright chrome</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color_selection" value="Satin chrome" id="color2">
            <label class="form-check-label" for="color2">Satin chrome</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color_selection" value="Polished brass" id="color3">
            <label class="form-check-label" for="color3">Polished brass</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color_selection" value="Other" id="color4">
            <label class="form-check-label" for="color4">Other</label>
        </div>
        <input type="text" class="form-control mt-2 w-50" name="color_other" placeholder="Other Colour">
    </div>

</div>


<div class="card p-3 mb-3">

    <h5 class="font-weight-bold mb-2">8.3 Windows & Door Units / Sliders</h5>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Standard aluminium units by:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_units]" value="Tecno">
            <small class="form-text text-muted">Manufacturer's Name</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Aluminium:</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_door_units]" value="door_units">
                <label class="form-check-label">Door units <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_sliding_doors]" value="sliding_doors">
                <label class="form-check-label">Sliding doors <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_windows]" value="windows">
                <label class="form-check-label">Windows <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
            <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_colour]" value="Woodlands Grey">
            <small class="form-text text-muted">Colour Selection</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_sliding]" value="sliding">
                <label class="form-check-label">Sliding</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_double_hung]" value="double_hung">
                <label class="form-check-label">Double hung</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][aluminium_other]" value="other">
                <label class="form-check-label">Other</label>
            </div>
            <input type="text" class="form-control" name="sow[windows_and_entry_doors][aluminium_other_details]" value="Ann">
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Timber:</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_door_units]" value="door_units">
                <label class="form-check-label">Door units <br> <input class="form-check-input" type="radio" name="timber_door_units_na" value="na"> N/A <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_sliding_doors]" value="sliding_doors">
                <label class="form-check-label">Sliding doors <br> <input class="form-check-input" type="radio" name="timber_sliding_doors_na" value="na"> N/A <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_windows]" value="windows">
                <label class="form-check-label">Windows <br> <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_windows_na]" value="na"> N/A <span class="text-success" style="font-size: 1.5em;"></span></label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_sliding]" value="sliding">
                <label class="form-check-label">Sliding</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_double_hung]" value="double_hung">
                <label class="form-check-label">Double hung</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][timber_other]" value="other">
                <label class="form-check-label">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Window locks keyed alike:</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_locks_keyed_alike]" value="yes">
                <label class="form-check-label">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_locks_keyed_alike]" value="no">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Door units/sliders keyed alike:</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_units_keyed_alike]" value="yes">
                <label class="form-check-label">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_units_keyed_alike]" value="no">
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
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][double_door_active_leaf]" value="active_leaf">
                <label class="form-check-label">()</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-12">Standard Pre-Primed timber reveals (Not applicable for Timber Units)</label>
        <div class="col-sm-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][standard_preprimed_reveals]" value="preprimed">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-12">OR Meranti timber reveals (Suitable for a stainable finish)</label>
        <div class="col-sm-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][meranti_reveals]" value="meranti">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Notes to above:</label>
        <div class="col-sm-9">
            <textarea class="form-control" name="sow[windows_and_entry_doors][notes_to_above]"></textarea>
        </div>
    </div>
</div>



<div class="card p-3 mb-3">

    <h5>8.4 Window and Door Units Glazing
    </h5>

    <div class="font-italic small mt-3">
        <span class="font-weight-bold" style="font-style: normal;">Note:</span> Unless otherwise specified below, ALL windows and door unit glass will be clear glazed with the exception of WC's, Bathrooms and Ensuites which will be obscure glass.
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">-Specific glazing requirements</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_requirements]" id="glazing_yes" value="yes">
                <label class="form-check-label" for="glazing_yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_requirements]" id="glazing_no" value="no">
                <label class="form-check-label" for="glazing_no">No</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location1]" class="form-control" value="FRONT ENTRANCE TO BOTH UNITS"></label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="clear1" value="clear">
                <label class="form-check-label" for="clear1">Clear glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="obscure1" value="obscure" checked>
                <label class="form-check-label" for="obscure1">Obscure glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type1]" id="other1" value="other">
                <label class="form-check-label" for="other1">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location2]" class="form-control"></label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="clear2" value="clear">
                <label class="form-check-label" for="clear2">Clear glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="obscure2" value="obscure">
                <label class="form-check-label" for="obscure2">Obscure glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type2]" id="other2" value="other">
                <label class="form-check-label" for="other2">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location3]" class="form-control"></label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="clear3" value="clear">
                <label class="form-check-label" for="clear3">Clear glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="obscure3" value="obscure">
                <label class="form-check-label" for="obscure3">Obscure glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type3]" id="other3" value="other">
                <label class="form-check-label" for="other3">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">-Location: <input type="text" name="sow[windows_and_entry_doors][location4]" class="form-control"></label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="clear4" value="clear">
                <label class="form-check-label" for="clear4">Clear glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="obscure4" value="obscure">
                <label class="form-check-label" for="obscure4">Obscure glass</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][glazing_type4]" id="other4" value="other">
                <label class="form-check-label" for="other4">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Notes to above:</label>
        <div class="col-sm-9">
            <textarea name="sow[windows_and_entry_doors][notes]" class="form-control"></textarea>
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
                <input class="form-check-input" type="radio" id="fibreglass" name="sow[windows_and_entry_doors][flyscreen_type]" value="fibreglass" checked>
                <label class="form-check-label" for="fibreglass">Standard fibreglass mesh</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="steel" name="sow[windows_and_entry_doors][flyscreen_type]" value="steel">
                <label class="form-check-label" for="steel">Stainless steel mesh (@ Extra Cost) <span class="small text-muted">Suitable for fire regulations</span></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="other" name="sow[windows_and_entry_doors][flyscreen_type]" value="other">
                <label class="form-check-label" for="other">Other</label>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="flyscreens" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][flyscreens]" id="flyscreens" placeholder="Enter flyscreens notes">
    </div>

</div>

<div class="card p-3 mb-3">

    <h5>8.6 Security Doors</h5>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- If by builder: 1) Fixed price included in quote</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_price]" value="fixed">
                <label class="form-check-label">Per Selections Below</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_na]" value="na">
                <label class="form-check-label">N/A</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Or 2) Provisional Sum</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][security_door_sum]" value="provisional">
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
                <input class="form-check-input" type="radio" id="vinyl" name="sow[windows_and_entry_doors][security_grille_pattern]" value="vinyl">
                <label class="form-check-label" for="vinyl">Vinyl mesh</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="stainless" name="sow[windows_and_entry_doors][security_grille_pattern]" value="stainless">
                <label class="form-check-label" for="stainless">Stainless steel mesh <span class="small text-muted">Suitable for fire regulations</span></label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Selection:</label>
        <div class="col-sm-9">
            <input type="text" name="sow[windows_and_entry_doors][security_door_supplier]" class="form-control mb-2" placeholder="Supplier">
            <input type="text" name="sow[windows_and_entry_doors][security_door_style]" class="form-control" placeholder="Style">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Entries requiring security doors:</label>
        <div class="col-sm-9">
            <textarea name="sow[windows_and_entry_doors][security_door_entries]" class="form-control"></textarea>
        </div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="security_doors" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][security_doors]" id="security_doors" placeholder="Enter security doors notes">
    </div>
</div>


<div class="card p-3 mb-3">

    <h5>8.7 Security Window Shutters</h5>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- If by builder: 1) Fixed price included in quote</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_price]" value="fixed">
                <label class="form-check-label">Per Quote Attached</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_na]" value="na">
                <label class="form-check-label">N/A</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Or 2) Provisional Sum</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][window_shutter_sum]" value="provisional">
                <label class="form-check-label">
                    <img src="https://via.placeholder.com/150x30?text=Amount+to+be+shown+at+Section+16+'Schedule+of+Provisional+Sums'" alt="Provisional Sum Note">
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Selection:</label>
        <div class="col-sm-9">
            <input type="text" name="sow[windows_and_entry_doors][window_shutter_supplier]" class="form-control mb-2" placeholder="Supplier">
            <input type="text" name="sow[windows_and_entry_doors][window_shutter_style]" class="form-control" placeholder="Style">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Notes to above:</label>
        <div class="col-sm-9">
            <textarea name="sow[windows_and_entry_doors][general_notes]" class="form-control"></textarea>
        </div>
    </div>
</div>


<div class="card p-3 mb-3">
    <h5>8.8 Garage Doors
    </h5>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Door type:</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_type]" id="roller" value="roller">
                <label class="form-check-label" for="roller">Roller door</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][door_type]" id="panel" value="panel" checked>
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
                    <input type="text" name="sow[windows_and_entry_doors][colorbond_colour]" class="form-control" value="Woodlands Grey">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Supplier:</label>
                <div class="col-sm-9">
                    <input type="text" name="sow[windows_and_entry_doors][supplier]" class="form-control" value="HVGO">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Style:</label>
                <div class="col-sm-9">
                    <input type="text" name="sow[windows_and_entry_doors][style]" class="form-control" value="MADISON">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][wood_grain]" id="wood_grain" value="wood_grain" checked>
                <label class="form-check-label" for="wood_grain">Wood grain</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][other]" id="other" value="other">
                <label class="form-check-label" for="other">Other</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Motorised openings:</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][motorised_openings]" id="all_doors" value="all_doors" checked>
                <label class="form-check-label" for="all_doors">All garage doors</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][motorised_openings]" id="listed_doors" value="listed_doors">
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
                <input class="form-check-input" type="radio" name="sow[windows_and_entry_doors][checked]" id="checked" value="checked" checked>
                <label class="form-check-label" for="checked"></label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Checked By:</label>
        <div class="col-sm-9">
            <input type="text" name="sow[windows_and_entry_doors][checked_by]" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Bushfire Attack Level:</label>
        <div class="col-sm-9">
            <select name="sow[windows_and_entry_doors][bushfire_attack_level]" class="form-control">
                <option value="na">NA</option>
                <option value="12.5">12.5</option>
                <option value="18">18</option>
                <option value="25">25</option>
                <option value="40">40</option>
                <option value="fz">FZ (as per AS3899-2009)</option>
            </select>
        </div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="garage_doors" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][garage_doors]" id="garage_doors" placeholder="Enter garage doors notes">
    </div>
</div>