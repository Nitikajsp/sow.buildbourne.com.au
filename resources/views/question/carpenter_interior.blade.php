<div class="card p-4 my-3">
    <h4>5) CARPENTER (Interior)</h4>

    <!-- Section 5.1 -->
    <h5 class="mt-4">5.1 Mouldings</h5>

    <!-- Question 1 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>1) Architraves</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][architrave]" id="architrave_pinetim" value="pinetim">
            <label class="form-check-label" for="architrave_pinetim">
                Standard Pinetim profile - Finish size 66x18mm nominal (std)
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][architrave_pinetim_profile]" placeholder="Profile e.g., BERKELEY">
        </div>

        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][architrave]" id="architrave_meranti" value="meranti">
            <label class="form-check-label" for="architrave_meranti">
                Meranti
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][architrave_meranti_size]" placeholder="Size mm Approx. Finish Size">
        </div>

        <div class="mt-2">
            <label for="architrave_other">Other Material & Profile:</label>
            <input type="text" class="form-control w-50" id="architrave_other" name="sow[carpenter_interior][architrave_other]" placeholder="Specify other material/profile">
        </div>

        <div class="d-flex align-items-center">
            <!-- Label and Input -->
            <label for="mouldings" class="me-2 mb-0">Notes to above:</label>
            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][mouldings]" id="mouldings" placeholder="Enter mouldings notes">
        </div>
    </div>



    <!-- Question 2 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>2) Skirting</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][skirting]" id="skirting_pinetim" value="pinetim">
            <label class="form-check-label" for="skirting_pinetim">
                Standard Pinetim profile - Finish size 66x18mm nominal (std)
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][skirting_pinetim_profile]" placeholder="Profile e.g., BERKELEY">
        </div>

        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][skirting]" id="skirting_meranti" value="meranti">
            <label class="form-check-label" for="skirting_meranti">
                Meranti
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][skirting_meranti_size]" placeholder="Size mm Approx. Finish Size">
        </div>

        <div class="mt-2">
            <label for="skirting_other">Other Material & Profile:</label>
            <input type="text" class="form-control w-50" id="skirting_other" name="sow[carpenter_interior][skirting_other]" placeholder="Specify other material/profile">
        </div>

        <div class="d-flex align-items-center">
            <!-- Label and Input -->
            <label for="skirting" class="me-2 mb-0">Notes to above:</label>
            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom" name="sow[site_work][skirting]" id="skirting" placeholder="Enter skirting notes">
        </div>
    </div>


    <!-- Question 3 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>3) Reveals, Jambs, Pelmets & Trims</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][reveals]" id="reveals_standard_pine" value="standard_pine">
            <label class="form-check-label" for="reveals_standard_pine">Standard Pine</label>
        </div>

        <div class="mt-2">
            <label for="reveals_other">Other Material Type:</label>
            <input type="text" class="form-control w-50" id="reveals_other" name="sow[carpenter_interior][reveals_other]" placeholder="Specify other material type">
        </div>

        <div class="d-flex align-items-center">
            <!-- Label and Input -->
            <label for="reveals_jambs_pelmets_trims" class="me-2 mb-0">Notes to above:</label>
            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                name="sow[site_work][reveals_jambs_pelmets_trims]" id="reveals_jambs_pelmets_trims" placeholder="Enter reveals, jambs, pelmets & trims notes">
        </div>
    </div>



    <!-- Question 4 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>4) Moulding Finish</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][moulding_finish]" id="painted" value="Painted">
            <label class="form-check-label" for="painted">Painted</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][moulding_finish]" id="stained" value="Stained">
            <label class="form-check-label" for="stained">Stained</label>
        </div>

        <div class="d-flex align-items-center">
            <!-- Label and Input -->
            <label for="moulding_finish" class="me-2 mb-0">Notes to above:</label>
            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                name="sow[site_work][moulding_finish]" id="moulding_finish" placeholder="Enter moulding finish notes">
        </div>
    </div>



    <!-- Section 5.2 -->
    <h5 class="mt-4">5.2 Doors</h5>

    <!-- Question 5 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Interior Passage Doors</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_doors]" id="standard_hume" value="Standard Range Hume Door">
            <label class="form-check-label" for="standard_hume">
                Standard Range Hume Door
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][standard_hume_style]" placeholder="Style e.g., Sorrento 5">
        </div>

        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_doors]" id="other_hume" value="Other Hume Door Type">
            <label class="form-check-label" for="other_hume">
                Other Hume Door Type
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][other_hume_type]" placeholder="Specify other door type">
        </div>

    </div>

    <!-- Cavity Sliding Doors -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Cavity Sliding Doors</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][cavity_sliding_doors]" id="standard_cavity_hume" value="Standard Range Hume Door">
            <label class="form-check-label" for="standard_cavity_hume">
                Standard Range Hume Door
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][cavity_hume_style]" placeholder="Style e.g., Sorrento 5">

            <div>
                <input class="form-check-input" type="radio" name="sow[carpenter_interior][cavity_sliding_doors_other_style]" id="cavity_sliding_doors_other_style" value="cavity sliding doors other style">
                <label class="form-check-label" for="cavity_sliding_doors_other_style_note">
                </label>
                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][cavity_sliding_doors_other_style_note]" placeholder="cavity sliding doors other style note">
            </div>
        </div>
    </div>

    <!-- Built-in Robes & Cupboards -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Built-in Robes & Cupboards:</strong></label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][built_in_robes]" id="standard_robe_hume" value="Standard Range Hume Door">
            <label class="form-check-label" for="standard_robe_hume">
                Standard Range Hume Door
            </label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][built_in_robe_style]" placeholder="Style e.g., Sorrento 5">
            <div>
                <input class="form-check-input" type="radio" name="sow[carpenter_interior][range_hume_door_other]" id="range_hume_door_other" value="range_hume_door_other" placeholder="range hume door other">
                <label class="form-check-label" for="range_hume_door_other_note">
                </label>
                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][range_hume_door_other_note]" placeholder="range hume door other note">
            </div>
        </div>
    </div>

    <!-- Sliding Robe Track Colour -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Sliding Robe Track Colour:</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][sliding_robe_track]" id="sliding_robe_track" value="custom">
            <label class="form-check-label" for="sliding_robe_track">Custom Colour</label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][sliding_robe_track_colour]" placeholder="Specify colour e.g., Black, Silver">
            N/A
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][sliding_robe_track_na]" id="sliding_robe_track" value="na">
        </div>
    </div>

    <!-- Notes for Doors -->
    <div class="d-flex align-items-center">
        <label for="doors" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][doors]" id="doors" placeholder="Enter doors notes">
    </div>

    <!-- Section 5.2 -->
    <h5 class="mt-4">5.3 Internal Door Furniture</h5>

    <!-- Question 5 -->
    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Standard handle/knob & latch-type</strong></label>
        <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][interior_passage_doors_note]" placeholder="interior passage doors  note">

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="bright_chrome">
            <label class="form-check-label">Bright Chrome</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="satin_chrome">
            <label class="form-check-label">Satin Chrome</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="polished_brass">
            <label class="form-check-label">Polished Brass</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][interior_passage_doors]" value="other">
            <label class="form-check-label">Other</label>
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][interior_passage_doors_other_note]" placeholder="interior passage doors other note">
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Privacy Snibs to:</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="wc">
            <label class="form-check-label">WC's</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="bathrooms">
            <label class="form-check-label">Bathrooms</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="ensuites">
            <label class="form-check-label">Ensuites</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][privacy_snibs]" value="others">
            <label class="form-check-label">Others</label>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong> Robes & cupboards (Swinging Doors):</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="robes_cupboards">
            <label class="form-check-label">Standard dummy to match passage handles/knobs</label><br>
            <div>
                <label class="form-check-label" for="cavity_sliding_other_note">Other
                </label>
                <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards_other]" id="robes_cupboards_other" value="robes_cupboards_other">
                <label class="form-check-label" for="robes_cupboards_other">
                </label>
                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][robes_cupboards_other]" placeholder="robes cupboards other">
            </div>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Cavity sliding:</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="rectangular_cutout">
            <label class="form-check-label">Std. Rectangular Cut Out</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="circular_54mm">
            <label class="form-check-label">Circular (54mm dia.)</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="polished_brass">
            <label class="form-check-label">Polished Brass</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="satin_chrome">
            <label class="form-check-label">Satin Chrome</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][robes_cupboards]" value="polished_chrome">
            <label class="form-check-label">Polished Chrome</label>
            <div>
                <label class="form-check-label" for="cavity_sliding_other_note">Other
                </label>
                <input class="form-check-input" type="radio" name="sow[carpenter_interior][cavity_sliding_other]" id="cavity_sliding_other" value="cavity_sliding_other">
                <label class="form-check-label" for="cavity_sliding_other_note">
                </label>
                <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][cavity_sliding_other_note]" placeholder="cavity sliding other note">
            </div>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Smart Robes (Sliding Doors):</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="flush_pulls">
            <label class="form-check-label">Flush Pulls</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="square">
            <label class="form-check-label">Square</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="radius">
            <label class="form-check-label">Radius</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][smart_robes]" value="satin_chrome">
            <label class="form-check-label">Satin Chrome</label><br>
        </div>

        <p><strong>Colour Selection:</strong></p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="polished_brass">
            <label class="form-check-label">Polished Brass</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="polished_chrome">
            <label class="form-check-label">Polished Chrome</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="satin_chrome">
            <label class="form-check-label">Satin Chrome</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][colour_selection]" value="other">
            <label class="form-check-label">Other</label>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Door Stops</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][door_stops]" value="required_hinged">
            <label class="form-check-label">Required for Hinged Passage Doors - Type</label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][door_stops]" value="by_others">
            <label class="form-check-label">By Others</label><br>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Notes to Above:</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][notes_to_above]" placeholder="Style e.g., Sorrento 5">
        </div>
    </div>


    <h5 class="mt-4">5.4 Built in Robes & Cupboards</h5>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Wardrobes & W.I.R</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="standard_shelf">
            <label class="form-check-label">
                Standard single white melamine shelf at hanging height including hanging rod
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="shelving_by_owners">
            <label class="form-check-label">
                Shelving other than standard by owners
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="all_shelving">
            <label class="form-check-label">
                All shelving
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][wardrobes]" value="shelving_per_list">
            <label class="form-check-label">
                Shelving per list below
            </label><br>
        </div>
    </div>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>List of shelves by owner</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelf_style]" placeholder="Style e.g., Sorrento 5">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_gripper_hinged">
            <label class="form-check-label">
                Standard gripper catch to hinged doors
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_1">
            <label class="form-check-label">
                Other
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_gripper_hinged_2">
            <label class="form-check-label">
                Standard gripper catch to hinged doors
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_2">
            <label class="form-check-label">
                Other
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="standard_passage_wir">
            <label class="form-check-label">
                Standard passage set to walk-in robe doors
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][shelves]" value="other_3">
            <label class="form-check-label">
                Other
            </label><br>
        </div>
    </div>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Linen Cupboards</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="standard_four_shelves">
            <label class="form-check-label">
                Standard four white melamine shelves spaced evenly
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="shelving_by_owners">
            <label class="form-check-label">
                Shelving other than standard by owners
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="all_shelving">
            <label class="form-check-label">
                All shelving
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][linen_cupboards]" value="shelving_per_list">
            <label class="form-check-label">
                Shelving per list below
            </label><br>
        </div>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>List of shelves by owner</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelves_list]" placeholder="Style e.g., Sorrento 5">
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch]" value="standard">
        <label class="form-check-label">
            Standard gripper catch to hinged doors
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch_other]" value="other">
        <label class="form-check-label">
            Other
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob]" value="standard">
        <label class="form-check-label">
            Standard dummy knob to hinged doors
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob_other]" value="other">
        <label class="form-check-label">
            Other
        </label><br>
    </div>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong> Broom Cupboards (Generally single door cupboards unless noted on plan)</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_standard]" value="standard">
            <label class="form-check-label">
                Standard single white melamine shelf at approx 1.8m height
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_owner]" value="custom">
            <label class="form-check-label">
                Shelving other than standard by owners
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_all]" value="all">
            <label class="form-check-label">
                All shelving
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][broom_shelf_listed]" value="listed">
            <label class="form-check-label">
                Shelving per list below
            </label>
        </div>
    </div>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong> List of shelves by owner</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelves_list]" value="" placeholder="Style e.g., Sorrento 5">
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[carpenter_interior][gripper_catch]" value="standard">
        <label class="form-check-label">
            Standard gripper catch to hinged doors
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][other_option1]" value="other">
        <label class="form-check-label">
            Other
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][dummy_knob]" value="standard_dummy_knob">
        <label class="form-check-label">
            Standard dummy knob to hinged doors
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][other_option2]" value="other">
        <label class="form-check-label">
            Other
        </label><br>
    </div>



    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Walk in Pantry</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving]" value="standard">
            <label class="form-check-label">
                Standard four white melamine shelves spaced evenly
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_other]" value="other">
            <label class="form-check-label">
                Shelving other than standard
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_owner]" value="by_owner">
            <label class="form-check-label">
                By owner
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_all_shelving]" value="all">
            <label class="form-check-label">
                All shelving
            </label><br>

            <input class="form-check-input" type="radio" name="sow[carpenter_interior][pantry_shelving_list]" value="per_list">
            <label class="form-check-label">
                Shelving per list below
            </label><br>
        </div>
    </div>


    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>List of shelves by owner</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50" name="sow[carpenter_interior][shelf_style]" value="" placeholder="Style e.g., Sorrento 5">
        </div>
    </div>


    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[carpenter_interior][swinging_doors]" value="standard_passage">
        <label class="form-check-label">
            Standard passage set to swinging doors
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][swinging_doors]" value="na">
        <label class="form-check-label">
            N/A
        </label><br>
    </div>

    <div class="p-3 mb-3 bg-white rounded shadow-sm">
        <label><strong>Notes to Built-in Robes & Cupboards</strong></label>
        <div class="form-check">
            <input type="text" class="form-control mt-1 w-50"
                name="built_in_robes_notes"
                value=""
                placeholder="Style e.g., Sorrento 5">
        </div>
    </div>

    <h5 class="mt-4">5.5 Timber Polished Floors</h5>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="By Owners" id="radio_by_owners">
        <label class="form-check-label" for="radio_by_owners">
            By Owners
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="Areas as indicated on plans" id="radio_areas_indicated">
        <label class="form-check-label" for="radio_areas_indicated">
            Areas as indicated on plans
        </label><br>

        <input class="form-check-input" type="radio" name="sow[carpenter_interior][timber_polished_floors]" value="N/A" id="radio_na">
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
            name="sow[site_work][timber_polished_floors]" id="timber_polished_floors_notes" placeholder="Enter timber polished floors notes">
    </div>

</div>